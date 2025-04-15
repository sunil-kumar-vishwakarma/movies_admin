<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Auth;

class ApiUserController extends Controller
{
    //

    // public function sendOtpToPhone(Request $request)
    // {
    //     $request->validate([
    //         'phone' => 'required',
    //     ]);

    //     $otp = rand(1000, 9999);

    //     $fullPhone = $request->phone;;
    //     // Find the producer by phone
    //     print_r($fullPhone);die;
    //     $producer = User::where('phone', $fullPhone)->first();
    //     // print_r($producer);die;
    //     if (!$producer) {
    //         return back()->withErrors(['phone' => 'Producer with this phone number does not exist.']);
    //     }

    //     // Update the OTP in the producer record
    //     $producer->update(['otp' => $otp]);

    //     // \Log::info("OTP for phone {$request->phone} is: $otp");

    //     return redirect()->route('user.mobile.with.otpverify')
    //         ->with([
    //             'phone' => $request->phone,
    //             'success' => 'OTP sent to your phone number.'
    //         ]);
    // }


    public function loginOrRegisterWithOtp(Request $request)
{
    $request->validate([
        'phone' => 'required|string',
    ]);

    $otp = rand(1000, 9999);
    $phone = $request->phone;

    // Check if user exists
    $user = User::where('phone', $phone)->first();
    // print_r($user);die;
    if (!$user) {
        // Create new user
        $user = User::create([
            'user_name' => 'User-' . rand(1000, 9999), // Or get from request
            'full_name' => 'User-' . rand(1000, 9999), // Or get from request
            'email'=>'testuser'. rand(100000, 999999).'@gmail.com',
            'phone' => $phone,
            'password' => bcrypt('123456'), // default/fake password
        ]);
    }

    // Update/send OTP
    $user->otp = $otp;
    $user->save();

    // TODO: Integrate actual SMS sending here

    return response()->json([
        'status' => true,
        'message' => 'OTP sent successfully',
        'phone' => $user->phone,
        'otp' => $otp, // ❗ Remove in production
    ]);
}



    // public function verifyOtp(Request $request)
    // {
    //     $request->validate([
    //         'otp' => 'required|numeric',
    //     ]);

    //     $phone = Session::get('otp_phone');
    //     $otp = implode('', $request->otp); // "1234"
    //     // print_r($otp);die;
    //     // Find producer by phone and match OTP
    //     $producer = User::where('phone', $phone)
    //                         ->where('otp', $request->otp)
    //                         ->first();

    //     if ($producer) {
    //         // Login producer
    //         Auth::guard('producer')->login($producer);

    //         // Clear OTP from session and DB (optional)
    //         Session::forget('otp');
    //         Session::forget('otp_phone');
    //         $producer->otp = null;
    //         $producer->save();

    //         return redirect()->route('producer.producerDashboard');
    //     } else {
    //         return back()->withErrors(['otp' => 'Invalid OTP or phone number.']);
    //     }
    // }

    public function verifyOtp(Request $request)
{
    $request->validate([
        'phone' => 'required|string',
        'otp' => 'required|numeric',
    ]);

    $user = User::where('phone', $request->phone)
                ->where('otp', $request->otp)
                ->first();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid OTP or phone number.',
        ], 401);
    }

    // Clear OTP
    $user->otp = null;
    $user->save();

    // Generate token
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'status' => true,
        'message' => 'OTP verified successfully',
        'access_token' => $token,
        'token_type' => 'Bearer',
        'user' => $user
    ]);
}

}
