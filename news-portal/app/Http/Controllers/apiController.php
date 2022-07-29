<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class apiController extends Controller
{
    function CreateNews(Request $req)
    {
        $validator = validator::make(
            $req->all(),
            [
                "title" => "required",
                "description" => "required",
                "type" => "required",
                "date" => "required"
            ]
        );

        if ($validator->fails()) {
            # code...
            return response()->json($validator->errors());
        }

        $obj = new news();
        $obj->title = $req->title;
        $obj->description = $req->description;
        $obj->type = $req->type;
        $obj->date = $req->date;
        $obj->save();

        return response()->json($obj);
    }


    function ShowNews()
    {
        $obj = news::all();
        return response()->json($obj);
    }


    function UpdateNews(Request $req, $id)
    {
        $find = news::findOrFail($id);

        $validator = validator::make(
            $req->all(),
            [
                "title" => "required",
                "description" => "required",
                "type" => "required",
                "date" => "required"
            ]
        );

        if ($validator->fails()) {
            # code...
            return response()->json($validator->errors());
        }
        if ($find) {
            $obj = new news();
            $obj->title = $req->title;
            $obj->description = $req->description;
            $obj->type = $req->type;
            $obj->date = $req->date;
            $obj->save();
            return response()->json($obj);
        } else {
            return response()->json(["msg" => "News not found"]);
        }
    }


    function DeleteNews($id)
    {
        $find = news::findOrFail($id);
        if ($find) {
            $find->delete();
            return response()->json(["msg" => "Deleted"]);
        } else {
            return response()->json(["msg" => "News not available"]);
        }
    }


    function SearchById($id)
    {
        $find = news::findOrFail($id);
        if ($find) {
            return response()->json($find);
        } else {
            return response()->json(["msg" => "Blank"]);
        }
    }


    function SearchByType($type)
    {
        $find = news::where("data", $type)->where("type", $type)->first();
        if ($find) {
            return response()->json($find);
        } else {
            return response()->json(["msg" => "Blank"]);
        }
    }


    function SearchByDate($date)
    {
        $find = news::where("data", $date)->first();
        if ($find) {
            return response()->json($find);
        } else {
            return response()->json(["msg" => "Blank"]);
        }
    }


    function SearchByDateType($date, $type)
    {
        $find = news::where("data", $date)->where("type", $type)->first();
        if ($find) {
            return response()->json($find);
        } else {
            return response()->json(["msg" => "Blank"]);
        }
    }
}
