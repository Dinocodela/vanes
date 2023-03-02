<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SignupEmail;
use App\Mail\ResetPasswordEmail;
use App\Mail\ContactEmail;
use App\Mail\LeadEmail;
use App\Mail\LeadInform;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;  

class MailController extends Controller
{
     public function leadForm(Request $request)
    {       
        $name = $request->name;
        $email = $request->email;

        $lead = new Lead; 
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->save();

        MailController::leadEmail($name, $email);
        MailController::leadInform($email);
        return response()->json(['success'=>true,'data'=>'Your request has been sent. Please check your email.']);                   
    }
    
    public static function leadEmail($name, $email){
        $data = [
            'name' => $name,
            'email' => $email
        ];
        Mail::to($email)->send(new LeadEmail($data));
    }

    public static function leadInform($email){
        $data = [
            'email' => $email
        ];
        Mail::to('vanessa@vanessarezende.com')->send(new LeadInform($data));
    } 
    
    public static function signupEmail($name, $email, $verification_code){
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new SignupEmail($data));
    }

    public static function resetPasswordEmail($email, $reset_pass_code){
        $data = [
            'reset_pass_code' => $reset_pass_code
        ];
        Mail::to($email)->send(new ResetPasswordEmail($data));
    }

    public static function contactEmail($name, $email, $message){
        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
        Mail::to('admin@vanessarezende.com')->send(new ContactEmail($data));
    }
}
