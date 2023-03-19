<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function postForm(Request $request){
        $rules = [
            'name'=>'required',
            'email'=>'required|unique:guest,email',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors()->first(), 422);
        }

        try{
            $insert= DB::table('guest')->insert([
                'name'=> $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'subject'=> $request->subject,
                'message'=> $request->message
            ]);

            return response()->json('Success', 200);
            
        }catch(\Exception $error){
            return response()->json($error->getMessage(), 422);
        }
        
    }
}
