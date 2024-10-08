<?php

namespace App\Http\Controllers\HogeDir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hoge;

class HogeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $ls = Hoge::all();
        return view('hoge.index', ['hoge' => $ls[0]->id]);
    }
}