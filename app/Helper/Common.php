<?php

namespace App\Helper;

use App\Mail\SendMail;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Common {

    /**
     * 
     * @param type $email dfsdg
     * @param type $subject sdf
     * @param type $data sf 
     * @param type $view sf
     */
    public static function sendMail($email, $subject, $data, $view) {
        \Mail::to($email)->send(new SendMail($subject, $data, $view));
    }

    public static function uploadBase64File($base62Data, $originalName) {
        $extractBase64 = explode(';base64,', $base62Data); // ['data:image/png','asdbvadfsf'];
        $extractFileType = explode(':', $extractBase64[0]);
        $getFileType = explode('/', $extractFileType[1]); //png
        //create new file
        $originalFileName = str_replace(' ', '_', $originalName);

        //remove extenction from the original file name //
        $getFileExtenction = explode('.', $originalFileName);
        $originalFileName = str_replace('.' . end($getFileExtenction), '_', $originalFileName);

        $newFlieName = $originalFileName . '_' . uniqid() . '.' . $getFileType[1];
        $filePath = public_path() . '/uploads/';
        if (!file_exists($filePath)) {
            mkdir($filePath, 0777);
        }
        $fullFilePath = $filePath . $newFlieName;
        file_put_contents($fullFilePath, base64_decode($extractBase64[1]));
        return $newFlieName;
    }

}
