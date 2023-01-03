<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class KesimpulanController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'status1' => 'required',
           'status2' => 'required',
           'status3' => 'required',
           'status4' => 'required',
           'status5' => 'required',
           'status6' => 'required'
        ]);
 
        return view('proses',['data' => $request]);
    }
}