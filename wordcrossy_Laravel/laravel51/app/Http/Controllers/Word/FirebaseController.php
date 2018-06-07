<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/30
 * Time: 14:58
 */
namespace App\Http\Controllers\Word;
use App\Http\Controllers\Controller;
use App\Models\Data\TypesTable;
use App\User;
use App\Models\Word\WrodC;

class FirebaseController extends Controller
{

    public function GetFriends()
    {

        $word = WrodC::all();


        return $word;
    }

    public function Add()
    {
        $word = WrodC::all();
        $word = TypesTable::all();
        $name = "wordcrossy";
        $data =[];
        $data['a'] = $name;
        //$data['b'] = $datatype;
        return view('add',compact('word'));
       // return view('add',$data);
    }
}