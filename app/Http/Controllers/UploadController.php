<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }
    /*public function xlupload(Request $rq)
    {
        $file=$rq->hinh_anh;
        $file->store('img');
        return "upload thanh cong";
    }
    */
    public function multi_upload()
    {
        return view('multiupload');
    }
    public function xl_multiupload(Request $rq)
    {
        $files=$rq->hinh_anh;
        $paths=[];
        foreach($files as $file)
        {
            $paths[]=$file->store('img');
        }
        $data=[
            'path'=>$paths,
            'message'=>"upload thanh cong"
        ];
        return "upload thanh cong";
    }
}
