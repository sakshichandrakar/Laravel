<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;


class ApiController extends Controller
{
    //
    function getdata($id =null)
    {
        //return ["Name"=>"Sakshi Chandrakar"];
        // return Device::all();
        return $id?Device::find($id):Device::all();

    }
    function savedata(Request $req)
    {
        $device = New Device;
        $device->name = $req->name;
        $device->member_id = $req->member_id;       
        $result =$device->save();
        if($result)
        {
            return["Result"=>"Data Has Been Save"];
        }
        else
        {
            return["result"=>"Operation Failed"];
        }
       
    }

    function updatedata(Request $req)
    {
        $device = Device::find($req->id);

        $device->name = $req->name;
        $device->member_id = $req->member_id;       
        $result =$device->save();
        if($result)
        {
            return["Result"=>"Data Has Been Save"];
        }
        else
        {
            return["result"=>"Operation Failed"];
        }
       
    }


    function deletedata($id)
    {
        $device = Device::find($id);     
        $result =$device->delete();
        if($result)
        {
            return["Result"=>"Data Has Been Deleted"];
        }
        else
        {
            return["result"=>"Operation Failed"];
        }
       
    }
    function Searchdata($name)
    {
        //return Device::where("name",$name)->get();
        return Device::where("name","like","%".$name."%")->get();

    }
    function validatedata(Request $req)
    {
        
        $rules=array(
            "member_id"=>"required | max:4",
            "name"=>"required"
        );
        $validato = Validator::make($req->all(),$rules);
        if($validato->fails())
        {
            return response()->json($validato->errors(),404);
        }
        else{
            $device = New Device;
        $device->name = $req->name;
        $device->member_id = $req->member_id;       
        $result =$device->save();
        if($result)
        {
            return["Result"=>"Data Has Been Save"];
        }
        else
        {
            return["result"=>"Operation Failed"];
        }

        }
    }

    function uolpoad(Request $req)
    {
        $image = $req->file('file')->store('img');
        return ['Result',$image];
    }
}
