<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Amaincore extends Controller{
	
    public function __construct() {
        
    }
    
    public function index() {
        return view('home', array('pagekey' => 'home','pagetitle' => 'Welcome Visitors!'));
    }
    
    public function register() {
	    if (Request::isMethod('post')) {
	        User::create([
	                    'first_name' => Request::get('s_fname'),
	                    'last_name' => Request::get('s_lname'),
	                    'username' => Request::get('s_uname'),
	                    'email' => Request::get('s_email'),
	                    'password' => bcrypt(Request::get('s_pass')),
	        ]);
	    } 
	    
	    return Redirect::away('login');
	}
	public function authenticate() {
	    if (Auth::attempt(['username' => Request::get('s_uname'), 'password' => Request::get('s_pass')])) {
	        Session::put('admin_name','Paul George');
	        return redirect()->intended('hr-home');
	    } else {
	    	Session::flash('logout_msg', 'Invalid username or password!');
	        return Redirect::away('login');
	    }
	}
	public function logout() {
	    Auth::logout();
	    Session::flash('logout_msg', 'You have logged out successfully!');
	    return Redirect::away('login');
	}
	
    public function login() {
        return view('login', array('pagekey' => 'login','pagetitle' => 'Login Here'));
        
    }
    public function about_us() {
        return view('aboutus', array('pagekey' => 'about','pagetitle' => 'Our Team of Realtors'));
    }
    public function dev_partners() {
        return view('devpartners', array('pagekey' => 'partners','pagetitle' => 'Our Partners in Community Development'));
    }
    public function gallery() {
        return view('gallery', array('pagekey' => 'gallery','pagetitle' => 'Through the Lense'));
    }
    public function contact_us() {
        return view('contactus', array('pagekey' => 'contact','pagetitle' => 'Reach us out'));
    }
    public function rusers_home() {
        return view('r_users_home', array('pagekey' => 'Admin','pagetitle' => 'Howdie admin'));
        
        	   
    }
}
/*
->withHeaders(['Last-Modified' => gmdate('D, d M Y H:i:s').'GMT',
	           'Cache-Control' => 'no-store, no-cache, must-revalidate',
	           'Cache-Control' => 'post-check=0, pre-check=0',
	           'Pragma' => 'no-cache',
	            ]);
	            
	        ->header('Last-Modified', gmdate('D, d M Y H:i:s').'GMT')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate')
            ->header('Cache-Control', 'post-check=0, pre-check=0')
            ->header('Pragma', 'no-cache');
/