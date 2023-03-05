<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Clicks;
class ClickControllerApi extends Controller
{
    //

    public function index(Request $request)
    {
        $data = Clicks::all();
        $count = Clicks::count();
        // $a = "foo";
        // dd("hello"."eiei");
        // dd('hello$a');
        return response()->json([
            'message' => 'Clicks created successfully',
            'data' => $data,
            'count' => $count
        ]
        );
    }

    public function create(Request $request)
    {
        Clicks::create([
            'name' => $request->name,
        ]);

        $count = Clicks::count();

        $data = Clicks::all();
        return response()->json([
            'message' => 'Clicks created successfully',
            'data' => $data,
            'count' => $count
        ]);
    }


}
