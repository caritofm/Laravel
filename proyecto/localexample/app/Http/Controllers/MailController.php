<?php

namespace App\Http\Controllers;

use App\Mail\ExampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function index(){
        return view('index');
    }

    public function mailMe(){
        //si necesitara adjuntar un archivo seria con el metodo -> atach($myfile)
        Mail::to('florescarolina.2717@gmail.com')-> send(new ExampleMail('Carolina Flores'));
        return view('sent');
    }

}
