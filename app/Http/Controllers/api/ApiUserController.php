<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Auth;

use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Factory;

class ApiUserController extends Controller
{
    
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

 

// public function loginOrRegisterWithOtp(Request $request)
// {
//     $request->validate([
//         'idToken' => 'required|string',
//     ]);

//     $firebase = (new Factory)->withServiceAccount(config('firebase.credentials.file'));
//     $auth = $firebase->createAuth();

//     try {
//         $verifiedIdToken = $auth->verifyIdToken($request->idToken);
//         $uid = $verifiedIdToken->claims()->get('sub');
//         $firebaseUser = $auth->getUser($uid);

//         // Check if user exists in local DB or create new
//         $user = User::firstOrCreate(
//             ['phone' => $firebaseUser->phoneNumber],
//             ['user_name' => 'User-' . rand(1000, 9999), 'password' => bcrypt('123456')]
//         );

//         // Issue app token (e.g., Sanctum or JWT)
//         $token = $user->createToken('api-token')->plainTextToken;

//         return response()->json([
//             'status' => true,
//             'message' => 'Login successful',
//             'token' => $token,
//             'user' => $user,
//         ]);
//     } catch (\Throwable $e) {
//         return response()->json([
//             'status' => false,
//             'message' => 'Invalid token',
//             'error' => $e->getMessage(),
//         ], 401);
//     }
// }


public function resendOtp(Request $request)
{
    $request->validate([
        'phone' => 'required|string',
    ]);

    $phone = $request->phone;

    // Check if user exists
    $user = User::where('phone', $phone)->first();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'User not found with this phone number.',
        ], 404);
    }

    // Generate new OTP
    $otp = rand(1000, 9999);
    $user->otp = $otp;
    $user->save();

    // TODO: Integrate SMS service here to send OTP

    return response()->json([
        'status' => true,
        'message' => 'OTP resent successfully',
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
