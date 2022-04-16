<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index(){
        return '建物です';
    }

    public function building(Request $request){
        $room = $request->room;
        // return view('test')->with('room', $room);

        echo "部屋の番号は{$room}です";
    }
}
