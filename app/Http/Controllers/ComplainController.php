<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\complain;

use Illuminate\Support\Facades\Input;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  \Illuminate\Http\Response
     */
                 
                public function insert(Request $req)
                 {
                
                $name=$req->fname;
                $email=$req->femail;
                $telephone=$req->ftelephone;
                $message=$req->fmessage; 
                $obj=new complain();
                $obj->Name=$name;
                $obj->Email=$email;

                $obj->Telephone=$telephone;
                $obj->Message=$message;

      $obj->save();

return back();
    }}