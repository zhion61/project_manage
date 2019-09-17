<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	return view('user.index');
    }
    public function show(){
    	return view('user.show')
    }
    public function edit(){
    	return view('user.edit')
    }
    public function destroy(){
    	return 'User 1 deleted'
    }
    public function update(){
    	return 'User 1 updated'
    }
}
