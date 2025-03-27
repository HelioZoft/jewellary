<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function adminLoginForm(){
        return view("admin.auth.admin-login");
    }

    public function login(Request $request){
        $credentials=$request->validate([
            "email"=> ['required','email'],
            'password'=> ['required'],
        ]);

        $password=trim($request->password);
       
        $user=SuperAdmin::where('email',$request->email)->first();

        $remember=$request->has('remember');

        if(Auth::guard('admins')->attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email'=> 'The provided credentials do not match',
        ]);

    }

    public function logout(Request $request){
        Auth::guard('admins')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function clearCache(){
        Artisan::call('optimize');
        return "DEAR ADMIN YOUR APPLICATION CACHES ARE CLEARED !";
    }

    public function migrate(){
        try {
            // Capture the output from the Artisan command
            Artisan::call('migrate', ['--force' => true]); // '--force' to run without confirmation in production
    
            // Get the output as a string
            $outputString = Artisan::output();
    
            // Return the output to the view or as a response
            // return response()->json(['status' => 'success', 'message' => $outputString]);
            return $outputString;
        } catch (\Exception $e) {
            // Catch any errors and return them
           return $e->getMessage();
            // return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function setStorageLink()
    {
        try {
            // Use Artisan to create the symbolic link
            Artisan::call('storage:link');
            return 'Symbolic link created successfully.';
        } catch (\Exception $e) {
            return 'Failed to create symbolic link: ' . $e->getMessage();
        }
    }
}
