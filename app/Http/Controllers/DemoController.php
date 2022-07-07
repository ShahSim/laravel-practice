<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DemoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        $ext = 'sdasd';
        echo url('/demo2/{$ext}');
    }

    public function demo()
    {
        $fileContent = fileReadClose("E:/Test php File/newT.json");

        $content = json_decode($fileContent,true);

        //djd($content);

        $data = [
            'title'=>'Demo Page',
            'fileContent' => $fileContent,
            'content'=>$content
        ];
        return view('demo',$data);
        //return app_path();
    }

    public function demo2()
    {
        return view('demo2');
    }
}
