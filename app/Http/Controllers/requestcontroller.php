<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class requestcontroller extends Controller
{
    public function index(){
    	return view('index');
    }
    public function app(){
        return view('app');
    }
public function displayData(Request $request){
    	$name = $request->input('name');
    	$fname = $request->input('father_name');
    	$address = $request->input('address');
    	$gender = $request->input('gender');
    	$state = $request->input('state');
    	$city = $request->input('city');
    	$birthdate = $request->input('birth_date');
    	$course = $request->input('course');
    	$pincode = $request->input('pincode');
    	$email = $request->input('email');
    	return view('app',['name' => $name, 'fname' => $fname,'address' => $address, 'gender' => $gender, 'state' => $state, 'city' => $city, 'birthdate' => $birthdate, 'course' => $course, 'pincode' => $pincode, 'email' => $email ]);
    }
}

