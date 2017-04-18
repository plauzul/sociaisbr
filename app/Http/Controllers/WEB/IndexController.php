<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {
    
    public function index() {
        return view('index.index');
    }
    
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...             
            return response()->json([
                'email' => $request->email,
                'step' => 'true',
                'redirect' => url('home')
            ]);
        } else {
            // Authentication does not passed...
            return response()->json([
                'step' => 'false',
                'redirect' => url('login')
            ]);
        }
    }

    /**
     * Method of logout
     * @return Response
     */
    public function logout() {
        Auth::logout();
    }

}
