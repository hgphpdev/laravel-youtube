<?php

namespace App\Http\Controllers;

use App\Helper\Common;
use App\Mail\SendMail;
use App\Http\Requests\contactUs;

class HomeController extends Controller {

    public function refreshToken() {
        session()->regenerate();
        return response()->json([
                    "message" => 'Token Refreshed',
                    "token" => csrf_token()], 200);
    }

    public function index() {
        return view('welcome');
    }

    public function contactUs(contactUs $request) {

        $input = request()->all();

//        print_r($input);die;

        $email = $input['email'];
        $subject = $input['subject'];

        $file = $input['file'];
        //file uplaod
        $file_name = uniqid() . $file->getClientOriginalName();
        $uploadPath = public_path() . '/uploads';
//        move_uploaded_file($filename, $destination)
        $file->move($uploadPath, $file_name);
//
//        print_r($input);
//        die;
        //file upload end



        Common::sendMail($email, $subject, $input, 'mail.contact-us');

        return [
            'status' => true,
            'url' => '',
            'message' => 'hello request successfull',
            'data' => ['a' => 'hello'],
            'function' => 'hhh'
        ];
    }

    public function uploadFile() {
        $input = request()->all();
        $fileName = Common::uploadBase64File($input['base64'], $input['fileName']);

        return [
            'status' => true,
            'url' => '',
            'message' => 'hello request successfull',
            'data' => ['uploadedFile' => $fileName],
            'function' => 'hhh'
        ];
    }

}
