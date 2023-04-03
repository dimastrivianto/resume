<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function postForm(Request $request){
        $rules = [
            'contactName'=>'required',
            'contactEmail'=>'required|unique:guest,email',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors()->first(), 422);
        }

        try{
            $insert= DB::table('guest')->insert([
                'name'=> $request->contactName,
                'email'=> $request->contactEmail,
                'phone'=> $request->contactPhone,
                'subject'=> $request->contactSubject,
                'message'=> $request->contactMessage,
                'created_at'=>date('Y-m-d H:i:s')
            ]);

            EmailController::sendEmail($request->contactName, $request->contactEmail);

            return response()->json('Success', 200);

        }catch(\Exception $error){
            return response()->json($error->getMessage(), 422);
        }

    }
}
