<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model\User;
class DBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd(config('database.connections'));
       // $pdo=DB::connection()->getPdo();
       // dd($pdo);
       // $users=DB::table('user')->where(array('name'=>'admin'))->get();
       // dd($users);
       // return view('db');
       // 
       // $user = User::where(array('name'=>'admin'));
       // 
       // 模型数据的修改
    //    $user=User::find(1);

    //    $user->name='shuaizi';
    // $user->update();
    // 单纯数据修改
    // 
    // 
    // 数据的添加
    $user=DB::table('user')->insert(array('name'=>'haha','pw'=>123456));
    // 
    // 
    // 数据的删除
     // $user=DB::table('user')->where('user_id', '>',3)->delete();
    dd($user);
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
