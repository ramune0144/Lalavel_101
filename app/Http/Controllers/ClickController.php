<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clicks;
class ClickController extends Controller
{
    //

    public function index()
    {
        $count = Clicks::count();
        $data = Clicks::where('id','>=',0)->paginate(5);

        return view('clicks.index',['count'=>$count,'data'=>$data])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(Request $request)
    {
        Clicks::create([
            'name' => $request->name,
        ]);

        // count item in database
        $count = Clicks::count();
        return redirect('/') ->with(['count'=>$count]);
    }


}
