<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_order = \App\Order::all();
        return view('admins.index',['data_order'=> $data_order]);
    }

    public function table()
    {
        $data_order = \App\Order::all();
        return view('admins.tables',['data_order'=> $data_order]);
    }

    public function create(Request $request)
    {
        \App\Order::create($request->all());
        return redirect('/admin')->with('sukses','Data Berhasil di Input');
    }

    public function edit($id)
    {
        $orders = \App\Order::find($id);
        return view('admins.edit',['orders'=> $orders]);
    }

    public function update(Request $request,$id)
    {
        $orders = \App\Order::find($id);
        $orders->update($request->all());
        return redirect('/admin')->with('sukses','Data Berhasil di Update');
    }

    public function delete($id)
    {
        $orders = \App\Order::find($id);
        $orders->delete();
        return redirect('/admin')->with('sukses','Data Berhasil di Hapus');
    }

}

