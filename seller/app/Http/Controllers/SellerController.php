<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    function viewSellerSignUpPage()
    {
        return view('pages.sellerSignUp');
    }

    function viewSellerLogInPage()
    {
        return view('pages.sellerLogin');
    }

    function verifySignup(Request $request)
     {

        
        $validate =$request->validate(
            [
                's_name' => 'required|min:3|max:25',
                
                's_password' => 'required|min:6',
                's_phone' => 'required|numeric',
                's_email' => 'required|unique:sellers|email',
                's_dob' => 'required',
                // 's_status' => 'required',
                's_gender' => 'required',

            ],
            // [
            //     's_name.required' => 'please enter your full name',
            //     's_name.min' => 'name can contain minimum 3 character',
            //     's_name.max' => 'name can contain maximum 25 character',

            //     's_email.required' => 'please enter your email',
            //     's_email.email' => 'please enter valid email',
            //     's_email.unique' => 'this email is already taken',

            //     's_password.required' => 'please enter your password',
            //     's_password.min' => 'password must contain 6 character',

            //     's_phone.required' => 'Enter a valid phone number',
            //     's_phone.numeric' => 'Only use Numbers',

            //     's_dob.required' => 'Date of Birth is required',

            //     's_gender.required' => 'gender field is required',

            //     // 's_status.required' => 'status field is required'


            // ]
        );

        $Seller=new Seller();
        $Seller->s_name=$request->s_name;
        $Seller->s_password=$request->s_password;
        $Seller->s_phone=$request->s_phone;
        $Seller->s_email=$request->s_email;
        $Seller->s_dob=$request->s_dob;
        $Seller->s_gender=$request->s_gender;
        $Seller->s_status="hell";

        $Seller->save();
        return redirect()->route('login');


    }
}
