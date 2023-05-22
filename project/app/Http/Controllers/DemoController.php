<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):string{
        $name = $request->input('name');
        return "Name is ${name}";
    }
    
    function DemoAction2(Request $request):string{
        $userAgent = $request->header('userAgent');
        return "User Agent is ${userAgent}";
    }

    function DemoAction3(Request $request){
        $page = $request->query('page', null);
        return $page;
    }

    // Your controller method
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');
            return response()->json(['path' => $path]);
        }
        return response()->json(['error' => 'No file uploaded'], 400);
    }

    public function cokieControllerMethod(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);

        // Use the $rememberToken variable as needed
        
        // Example: Return a response with the $rememberToken value
        return response()->json(['remember_token' => $rememberToken]);
    }

    public function test(Request $resuest){
            // Retrieve the 'email' input parameter
        $email = $request->input('email');

    // Prepare the data for the JSON response
        $data = [
            'email' => $email,
            'message' => 'Data submitted successfully.',
        ];

    // Return a JSON response
    return response()->json($data);
    }
}
