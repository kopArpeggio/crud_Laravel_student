<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class UserController extends Controller
{
    public function test (){
        $url = urldecode('https://www.boredapi.com/api/activity');
        $json = json_decode(file_get_contents($url),true);
        dd($json);
    }
}
