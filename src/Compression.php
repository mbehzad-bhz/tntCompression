<?php


namespace TenetUp\Compression;


use CURLFile;

class Compression
{
    public function compressImage($fileLocalPath){
        $mime = mime_content_type($fileLocalPath);
        $info = pathinfo($fileLocalPath);
        $name = $info['basename'];
        $output = new CURLFile($fileLocalPath, $mime, $name);
        $data = array(
            "file" => $output,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://compression.tenetup.com/optimizeImage');
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            $result = curl_error($ch);
        }
        curl_close ($ch);
        return json_decode($result);
    }
}
