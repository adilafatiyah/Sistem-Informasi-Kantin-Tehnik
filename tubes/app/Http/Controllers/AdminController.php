<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Menu;
use App\Minuman;
use App\Kedai;
use Validator;
use App\User;
use App\Transaksi;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    
    public function tambah_menu(){
        return view('admin.tambah_menu');
    }    
    public function index()
    {
        $nama=DB::table('kedaitable')->get();
        return view('admin.home')->with(compact('nama'));
    }
    public function save_transaksi(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' =>'required|max:25',
            'total' => 'required|max:25',
         
        ]);

          if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();

        }else{
            $transaksi = new Transaksi;
            $nama=$request->input('nama');
            $total=$request->input('total');

            $transaksi->total=$total;
            $transaksi->nama=$nama;
            $transaksi->save();
            return redirect('/home');  

        }
    }
    public function transaksi(){
        $data_transaksi = Transaksi::all();
        return view('admin.tabel_transaksi',['data_transaksi'=>$data_transaksi]);
    }
    public function menu(){
        $data_menu = Menu::all();
        return view('admin.tabel_menu',['data_menu'=>$data_menu]);
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
            return redirect('/menu');  

        }	 
    }
    public function update_menu($id){
        $data = Menu::where('id', $id)->first();
        return view('/admin/update_menu', compact(['data']));
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
        return redirect('/menu')->with(compact('data'));
         }
    }

    public function hapus_menu($id){
        $hapus = Menu::where('id',$id);
        $hapus->delete();
        return redirect('/menu'); 
    }

    public function minuman(){
        $data_kedai = Kedai::all();
        return view('admin.tabel_minuman',['data_kedai'=>$data_kedai]);
    }
    public function tambah_kedai(){
        return view('admin.tambah_kedai');
    }
    public function save_kedai(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' =>'required|max:100',
         
        ]);

          if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();

        }else{
            $kedai = new kedai;
            $nama=$request->input('nama');

            $kedai->nama=$nama;
            $kedai->save();
            return redirect('/minuman');  

        }	 
    }
    public function update_kedai($id){
        $data =Kedai::where('id', $id)->first();
        return view('/admin/update_kedai', compact(['data']));
    }
    public function kedai_update(Request $request, $id)
    {
        $pesan_error=[
            'nama' =>'required|max:25',
        ];
        $validator = Validator::make($request->all(), [
            'nama' =>'required|max:25',
        ],$pesan_error);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();

        }
        else{
        $update = Kedai::where('id', $id)->first();
        $update->nama=$request['nama'];
        $update->update();

        $data = Kedai::where('id', $id)->first();
        return redirect('/minuman')->with(compact('data'));
         }
    }

    public function pengguna(){
        $data_pengguna = User::all();
        return view('admin.tabel_pengguna',['data_pengguna'=>$data_pengguna]);
    }
    public function tambah_pengguna(){
        return view('admin.tambah_pengguna');
    }
    public function save_pengguna(Request $request){
        $pesan_error=[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'acces'=>'required|numeric|digits_between:1,13',         
        ];
       $validator = Validator::make($request->all(), [
               
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'password' => 'required|string|max:255',
                'acces'=>'required|numeric|digits_between:1,13',

        ],$pesan_error);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
   
           }else{
            $tambah = new User();
            $tambah->name = $request['name'];
            $tambah->email= $request['email'];
            $tambah->acces=  $request['acces'];
            $tambah->password = Hash::make($request['password']);
            $tambah->save();

            return redirect('/pengguna');
        }
    }
    public function hapus_pengguna($id){
        $hapus = User::FindOrFail($id);
        $hapus->delete();
        return redirect('/pengguna');
    }

    public function penjualan(){
        return view('admin.tabel_penjualan');
    }
    
    public function hasil(){
        return view('admin.halaman_hasil_penjualan');
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
