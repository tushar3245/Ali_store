<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\contact;
class Contactcontroller extends Controller
{
    public function Contact() {


        if (Auth::check() && @Auth::user()-> type == 'customer'){
           
            return view ('frontend.contact');
        }else{
            return redirect('user-login');
        }
       
    
    }







       

    

    public function Store(Request $request ) {
 
        //dd($request ->all());


        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'message' => 'required',
        ]);
        

        $user= new contact();
        $user->name= $request['name'];
        $user->email = $request['email'];
        $user->message = $request['message'];
        $result        =     $user->save();

        if ($result){
            return back()->with('success_message','message added successfully');
        }else{
        return back()->with('error_message','product added unsuccessfully');
        }


    }




public function Code(){
    return view('frontend.codes');
}


public function Index(){
    $contacts          =  contact::all();
    return view('backend.contact.index',compact ('contacts'));
}

}
