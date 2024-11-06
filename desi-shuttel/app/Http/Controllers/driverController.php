<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\driverMail;
use App\Mail\customerMail;


class driverController extends Controller
{
    public function sendEmail(Request $req){
    
    $tosendmail = 'balochmuhammad817@gmail.com';
    $message = 'New Ride Form: ' . $req->FullName;
    $subject = 'Customer Details';
    
    $detail = [
        'name' => $req->FullName,
        'email' => $req->Email,
        'number' => $req->Number,
        'Pickup_location' => $req->Pickup_location,
        'Drop_Location' => $req->Drop_Location,
    ];
    
    Mail::to($tosendmail)->send(new driverMail($message, $subject, $detail));
    
    return back()->with('success', 'Thank you for providing your details. Our team will reach out to you soon.');
    
    }
}
