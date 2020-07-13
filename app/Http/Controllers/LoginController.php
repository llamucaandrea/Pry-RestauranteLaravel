<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }
    public function username()
    {
        return 'usu_usuario';
    }
    protected function authenticated(Request $request, $user)
    {
    	$roles = $user->rols()->get();
    	$emp = $user->empleado()->first();
    	if($roles->isNotEmpty()){
    		$user->setSession($roles->toArray(), $emp);
    	}else{
    		$this->guard()->logout();
    		$request->session()->invalidate();
    		return redirect('login')
    			->withErrors(['error' => 'Este usuario no tiene roles']);
    	}
    }

}
