<?php

namespace App\Http\Controllers;

use App\admins;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function adminHome(){
        return view('adminlte::page');
    }

    //Register Admin to the Database.
//    public  function adminRegister(Request $myRequest){
//        $this->validate( $myRequest, [
//            'email'=>'required',
//            'password'=>'required'
//        ]);
//        $adminObject = new admins();
//        $adminObject->name     = $myRequest->name;
//        $adminObject->email     = $myRequest->email;
//        $adminObject->password  = $myRequest->password;
//        $adminObject->save();
//        return redirect(route('Admin.index'));
//    }
//
//    //login admin to the database.
//    public function adminLogin(Request $myRequest){
////        $this->validate( $myRequest, [
////           'email'=>'required',
////            'password'=>'required'
////        ]);
//        $adminObject = new admins();
//        if ($adminObject->email == $myRequest->email && $adminObject->password  == $myRequest->password){
//            return redirect(route('home'));
//        }
//    }
}
