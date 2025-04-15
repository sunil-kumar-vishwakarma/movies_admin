<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Auth;
class UserController extends Controller
{
    public function user()
    {
        $user = User::all();
        return view('admin.user',compact('user'));
    }

    public function userLogin(){

        return view('frontend.register-login');
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|unique:producers',
            // 'full_name' => 'required|string',
            'email' => 'required|string|email|unique:producers',
            'password' => 'required|string|min:6',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->only(['user_name', 'email']);
        $data['password'] = Hash::make($request->password);
        $data['register_date'] = now();
        $data['type'] = 'form';
        $data['full_name'] = $request->full_name;
    
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('user.profile');
      
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'user_name' => 'required|string',
            'full_name' => 'required|string',
            // 'email' => 'nullable|string|email|unique:producers',
            // 'password' => 'required|string|min:6',
            'phone' => 'nullable|string',
            'register_date' => 'required',
            'type' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.'
            ], 404);
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/users'), $filename);
            $data['image'] = 'uploads/users/' . $filename;
        }

        $user->update($data);



        return response()->json([
            'success' => true,
            'message' => 'User updated successfully.',
            'data' => $user // optional, if you want to return updated data
        ]);
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('user.profile');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

    public function userProfile(){

        $userdata = auth()->user(); 
        // dd($userdata);

        return view('frontend.profile', compact('userdata'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            // 'user_name' => 'required|string',
            'full_name' => 'required|string',
            // 'email' => 'nullable|string|email|unique:producers',
            // 'password' => 'required|string|min:6',
            'phone' => 'nullable|string',
            // 'company' => 'nullable|string',
            // 'genre' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'user not found.'
            ], 404);
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/users'), $filename);
            $data['image'] = 'uploads/users/' . $filename;
        }

        $user->update($data);

        Auth::login($user);
        return redirect()->route('user.profile');

        // return response()->json([
        //     'success' => true,
        //     'message' => 'producer updated successfully.',
        //     'data' => $producer // optional, if you want to return updated data
        // ]);

    }
    public function userLoginWithMobileOtp(){

        return view('frontend.loginWithOTP1');
    }

    public function userLoginWithVerifyOtp(){

        return view('frontend.loginWithOTP2');
    }

        public function sendOtpToPhone(Request $request)
    {
        $request->validate([
            'phone' => 'required',
        ]);

        $otp = rand(1000, 9999);

        $fullPhone = $request->full_phone;;
        // Find the producer by phone
        // print_r($fullPhone);die;
        $producer = User::where('phone', $fullPhone)->first();
        // print_r($producer);die;
        if (!$producer) {
            return back()->withErrors(['phone' => 'Producer with this phone number does not exist.']);
        }

        // Update the OTP in the producer record
        $producer->update(['otp' => $otp]);

        // \Log::info("OTP for phone {$request->phone} is: $otp");

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
        $otp = implode('', $request->otp); // "1234"
        // print_r($otp);die;
        // Find producer by phone and match OTP
        $producer = User::where('phone', $phone)
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


    public function destroy($id)
    {
       
        $user = User::find($id);
        if ($user->image && file_exists(public_path($user->image))) {
            unlink(public_path($user->image));
        }

        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'user deleted.',
            'data' => $user 
        ]);
       
    }

}
