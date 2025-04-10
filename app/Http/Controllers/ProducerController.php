<?php

namespace App\Http\Controllers;
use App\Models\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class ProducerController extends Controller
{
    public function producer()
    {
        return view('admin.producer');
    }


    public function producerRegistration()
    {
        return view('frontend.producer-register');
    }

    public function producerLogin(Request $request)
    {

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);


    $credentials = $request->only('email', 'password');


    if (Auth::guard('producer')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('producer.producerDashboard');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}





// public function sendOtpToPhone(Request $request)
// {
//     $request->validate([
//         'phone' => 'required',
//     ]);

//     // Generate random 6-digit OTP
//     $otp = rand(1000, 9999);

//     // Store OTP in session (or database in production)
//     Session::put('otp', $otp);
//     Session::put('otp_phone', $request->phone);

//     // Log OTP for now (simulate SMS sending)
//     \Log::info("OTP for phone {$request->phone} is: $otp");

//    $phone=  $request->phone;
//     // Redirect to OTP verify page
//     return redirect()->route('user.mobile.with.otpverify')->with(['phone'=>$phone,'success'=> 'OTP sent to your phone number.']);
// }

public function sendOtpToPhone(Request $request)
{
    $request->validate([
        'phone' => 'required',
    ]);

    $otp = rand(1000, 9999);

    $fullPhone = $request->full_phone;;
    // Find the producer by phone
    // print_r($fullPhone);die;
    $producer = Producer::where('phone', $fullPhone)->first();
    // print_r($producer);die;
    if (!$producer) {
        return back()->withErrors(['phone' => 'Producer with this phone number does not exist.']);
    }

    // Update the OTP in the producer record
    $producer->update(['otp' => $otp]);

    \Log::info("OTP for phone {$request->phone} is: $otp");

    return redirect()->route('user.mobile.with.otpverify')
        ->with([
            'phone' => $request->phone,
            'success' => 'OTP sent to your phone number.'
        ]);
}




public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|numeric',
    ]);

    $phone = Session::get('otp_phone');

    // Find producer by phone and match OTP
    $producer = Producer::where('phone', $phone)
                        ->where('otp', $request->otp)
                        ->first();

    if ($producer) {
        // Login producer
        Auth::guard('producer')->login($producer);

        // Clear OTP from session and DB (optional)
        Session::forget('otp');
        Session::forget('otp_phone');
        $producer->otp = null;
        $producer->save();

        return redirect()->route('producer.producerDashboard');
    } else {
        return back()->withErrors(['otp' => 'Invalid OTP or phone number.']);
    }
}




    public function store(Request $request)
    {
        $request->validate([
            // 'user_name' => 'required|string|unique:producers',
            'full_name' => 'required|string',
            'email' => 'required|string|email|unique:producers',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string',
            'company' => 'nullable|string',
            'genre' => 'nullable|string',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->only(['full_name', 'email', 'phone', 'company', 'genre']);
        $data['password'] = Hash::make($request->password);
        // $data['user_name'] = Hash::make($request->password);
    
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '_' . $image->getClientOriginalName();
        //     $image->move(public_path('uploads/producers'), $filename);
        //     $data['image'] = 'uploads/producers/' . $filename;
        // }
    
        $producer = Producer::create($data);
        return redirect()->route('producer.producerDashboard');
        // return redirect('producer.producerDashboard')->with([
        //     'success' => true,
        //     'message' => 'Producer registered successfully.',
        //     'data' => $producer
        // ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $language = Producer::find($id);
        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories'), $filename);
            $data['image'] = 'uploads/categories/' . $filename;
        }

        $language->update($data);

        return response()->json([
            'success' => true,
            'message' => 'language updated successfully.',
            'data' => $language // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $language = Producer::find($id);
        if ($language->image && file_exists(public_path($language->image))) {
            unlink(public_path($language->image));
        }

        $language->delete();
        return response()->json([
            'success' => true,
            'message' => 'language deleted.',
            'data' => $language 
        ]);
       
    }

    public function producerDashboard()
    {
        return view('frontend.producer');
    }
}
