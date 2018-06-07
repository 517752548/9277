<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/30
 * Time: 14:58
 */
namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Data\Items;
use App\Models\Data\Keys;
use App\Models\Data\TypeErTable;
use Request;
use App\Models\Data\TypesTable;
use App\User;
use App\Models\Word\WrodC;

class DataController extends Controller
{

    public function GetFriends()
    {

        $word = WrodC::all();


        return $word;
    }

    public function Add()
    {
        $input = Request::all();
        dump($input);
        //echo $input['from'];
        //echo $input['name'];


            $typerr = new Items();
            $typerr->type_er = $input['from'];
            $typerr->name = $input['name'];
            $typerr->url = $input['url'];
            $typerr->des = $input['des'];
            $typerr->save();
            echo 'ok';
            return redirect('/Word/Show');


        //return;
        //return view('add',compact('word'));
        // return view('add',$data);
    }

    public function Show()
    {
        $types = TypesTable::all();
        //echo $types;
        $type_er = TypeErTable::all();
        //echo $type_er;
        $typeall = array();
        $typeall['type'] = $types;
        $typeall['typer'] = $type_er;
        return view('Data.Show', compact('typeall'));
    }

//shou ye  shu ru dui huan ma
    public function ShowPay()
    {
        $types = TypesTable::all();
        //echo $types;
        $type_er = TypeErTable::all();
        //echo $type_er;
        //dump($type_er);
        return view('Data.ShowPayer', compact('type_er'));
    }

//xian shi yi jing gou mai de
    public function ShowBuy()
    {
        $input = Request::all();

        $typer = $input['name'];
        //echo $typer;
        $itembuy = Keys::where('type', '=', $typer)->get();
        if (count($itembuy) == 0) {
            echo "key 错误";
            return;
        }

        //dd(session()->all());
        session()->put('itemname', $itembuy[0]->type_er);
        //dd(session()->all());
        //echo $itembuy;
        // $typesall = Items::all();
        $typesall1 = Items::where('type_er', '=', $itembuy[0]->type_er)->get();
        $typesall[0] = $typesall1;
        //echo $typesall;
        return view('Data.ShowBuy', compact('typesall'));
    }


    public function ReceiveAll(Request $request)
    {
        //echo "all:";
        $input = Request::all();
        //dump($input);
        $typesall1 = Items::where('type_er', '=', $input['name'])->get();
        $url = TypeErTable::where('Types_LName', '=', $input['name'])->get();
        $typesall[0] = $typesall1;
        $typesall[1] = $url;
        //dump($typesall[1]);


        if (session()->has('itemname')) {
            if (session()->get('itemname') == $input['name']) {
                //echo "xiangdeng";
                return view('Data.ShowBuy', compact('typesall'));
            }else{
                //echo "bu xiang deng";
                return view('Data.ShowBuyNoURL', compact('typesall'));
            }
        } else {
            //echo "bu xiang deng";
            return view('Data.ShowBuyNoURL', compact('typesall'));
        }
        //echo $typesall;
    }

    public function ShowNotBuy(Request $request)
    {
        //echo "all:";
        $input = Request::all();
        //dump($input);
        $typesall = Items::where('type_er', '=', $input['name'])->get();
        //echo $typesall;
        return view('Data.ShowBuy', compact('typesall'));
    }

    public function UpdateItem(Request $request)
    {
        $input = Request::all();
        //dump($input);
       //$thisitem = Items::find($input['id'])->get();
        $typesall =  Items::where('id', '=', $input['id'])->get();

        return view('Data.ShowUpdate', compact('typesall'));
    }
    public function UpdateSave(Request $request)
    {
        $input = Request::all();
        //dump($input);
        //echo $input['from'];
        //echo $input['name'];
        $typerr = Items::find($input['id']);
        $typerr->des = $input['des'];
        $typerr->name = $input['name'];
        $typerr->url = $input['url'];
        $typerr->save();
        echo "ok";
    }

    public function test()
    {
        //$input = Request::all();
        //dump($input);
       // $item = Items::find($input['id']);
        //dump($item);
        return view('Data.test');
    }
    public function head()
    {
        //$input = Request::all();
        //dump($input);
        // $item = Items::find($input['id']);
        //dump($item);

        return view('Data.Header');
    }
}