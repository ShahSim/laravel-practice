<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DemoController extends Controller
{
    public function index()
    {

    }

    public function test()
    {
        $count=1;
        $add = [1,2,3,4,5,6,7,8];
        $addIndex=0;
        $ext = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

        foreach ($ext as $key => $value) {
          if ($count==3 and $addIndex<sizeof($add)) {
            echo $value.' '.$add[$addIndex].' ';
            $addIndex++;
          }
          else {
            echo $value.' ';
          }

          $count++;
          $count>3 ? $count=1 : null;

        }
        //djd(sizeof($ext));
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
