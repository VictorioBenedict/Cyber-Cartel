<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile_Controller extends Controller
{
    public function New_Address_Route(){
        return view('Profile.Add_New_Address');
    }
    public function New_Card_Route(){
        return view('Profile.Add_New_Card');
    }
    public function New_Password_Route(){
        return view('Profile.Change_Password');
    }
    public function New_PhoneNumber_Route(){
        return view('Profile.Change_Phone_Number');
    }
    public function New_Email_Route(){
        return view('Profile.Change_Email');
    }
    public function Address_Route(){
        return view('Profile.Address');
    }
    public function Profile_Route(){
        return view('Profile.User_Profile');
    }
    public function User_Address_Details_Route(){
        return view('Profile.User_Address_Details');
    }
    public function My_Purchase_Route(){
        return view('Profile.My_Purchase');
    }
    public function Pass_Verification_Route(){
        return view('Profile.Change_Password_Verification');
    }
    public function BankandCard_Route(){
        return view('Profile.BankandCard');
    }
}
