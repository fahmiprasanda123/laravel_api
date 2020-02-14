<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \App\users::all();
        if(count($data)>0){
            $res['message'] = "Success";
            $res['values'] = $data;
            return response($res);
        }else{
            $res['message'] = "empty";
            return response($res);
        }
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
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');

        $data = new \App\users();
        $data->nama = $nama;
        $data->jenis_kelamin = $jenis_kelamin;
        if($data->save()){
            $res['message'] = "Success";
            $res['value'] = "$data";
            return response($res);
        }
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
        $data = \App\users::where('id',$id)->get();
         if(count($data)>0){
            $res['message'] = "Success";
            $res['values'] = $data;
            return response($res);
        }else{
            $res['message'] = "Failed";
            return response($res);
        }
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
