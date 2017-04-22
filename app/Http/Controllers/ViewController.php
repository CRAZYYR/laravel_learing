<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('name' =>'帅子' ,'xixi'=>'嘻嘻','num'=>20,'article'=>array('news1','news2','news3') );
        $name=null;
        $hh=null;
        $str='<script>document.write("你好!");</script>';


        return view('welcome',compact('data'));





        // return view('welcome',compact('str','hh'));
        // return view('welcome',array('name'=>$name));
        // ==============第三种================
       // return view('welcome',compact('data','name','hh'));
        // ======第二种========
   // return view('welcome',array('name'=>$name,'hh'=>$hh));
   // 第一种
        // return view('welcome')->with(array('name'=>$name,'hh'=>$hh));
    }
    public function article(){
        return view('article');
    }
    public function view(){
        return view('view');
    }

   public function layout(){
        return view('layout');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
