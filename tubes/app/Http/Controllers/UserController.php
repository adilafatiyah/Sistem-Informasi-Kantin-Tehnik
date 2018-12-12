<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Minuman;
use App\Kedai;
use Validator;
use App\User;
use App\Transaksi;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function transaksi(){
        $data_transaksi = Transaksi::all();
        return view('user.tabel_transaksi',['data_transaksi'=>$data_transaksi]);
    }

     public function tambah_menu(){
        return view('user.tambah_menu');
    } 
     public function menu(){
        $data_menu = Menu::all();
        return view('user.tabel_menu',['data_menu'=>$data_menu]);
    }

    public function save_menu(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_menu' =>'required|max:25',
            'harga_menu' => 'required|max:25',
         
        ]);

          if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();

        }else{
            $menu = new Menu;
            $nama_menu=$request->input('nama_menu');
            $harga_menu=$request->input('harga_menu');

            $menu->harga_menu=$harga_menu;
            $menu->nama_menu=$nama_menu;
            $menu->save();
            return redirect('/p_menu');  

        }	 
    }
    public function update_menu($id){
        $data = Menu::where('id', $id)->first();
        return view('/user/update_menu', compact(['data']));
    }
    public function save_update(Request $request, $id)
    {
        $pesan_error=[
            'nama_menu' =>'required|max:25',
            'harga_menu' => 'required|max:25',
        ];
        $validator = Validator::make($request->all(), [
            'nama_menu' =>'required|max:25',
            'harga_menu' => 'required|max:25',
        ],$pesan_error);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();

        }
        else{
        $update = Menu::where('id', $id)->first();
        $update->nama_menu=$request['nama_menu'];
        $update->harga_menu=$request['harga_menu'];
        $update->update();

        $data = Menu::where('id', $id)->first();
        return redirect('/p_menu')->with(compact('data'));
         }
    }

    public function hapus_menu($id){
        $hapus = Menu::where('id',$id);
        $hapus->delete();
        return redirect('/p_menu'); 
    }
     public function index()
    {
        return view ('/user/p_home');
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
