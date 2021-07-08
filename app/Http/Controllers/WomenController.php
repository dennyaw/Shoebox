<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\PesananDetail;

use Auth;
use Carbon\Carbon;

class WomenController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Women%')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.women.index', $data);
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        $data = array('title' => 'Foto Produk',
                'produk' => $produk);
        return view('user.women.show', $data);
    }

    public function heels()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Women Heels')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.women.heels', $data);
    }

    public function slipon()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Women Slip On')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.women.slipon', $data);
    }

    public function flats()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Women Flats')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.women.flats', $data);
    }

    public function pesan(Request $request, $id)
    {
        $produk = Produk::where('id',$id)->first();
        $tanggal=Carbon::now();

        //validasi
        if($request->jumlah_pesan > $produk->qty)
        {
            return redirect('user.women.show', $id);
        }

        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(empty($cek_pesanan)){
        //pesanan
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = 0;
        $pesanan->save();
        }

        //pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        
        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('id_produk',$produk->id)->where('size_produk',$produk->size_produk)->where('pesanan_id',$pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail)){
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->id_produk = $produk->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->size_produk = $request->size_produk;
            $pesanan_detail->jumlah_harga = $produk->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        }
        else{
            $pesanan_detail = PesananDetail::where('id_produk',$produk->id)->where('size_produk',$produk->size_produk)->where('pesanan_id',$pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah + $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$produk->harga*$request->jumlah_pesan;
            $pesanan_detail->update(); 
        }
    
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$produk->harga*$request->jumlah_pesan;
        $pesanan->update(); 
        
 
        return redirect('user.women.show', $id);
    }

}
