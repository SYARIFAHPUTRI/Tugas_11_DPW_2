<?php

namespace App\http\Controllers;
use App\Models\Produk;
class HomeController extends Controller {


    function showDashboard(){
        return view('admin.section.dashboard');
    }

    function showProduk(){
        return view('produk');
    }

    function showDiskon(){
        return view('diskon');
    }

    function showKategori(){
        return view('admin.section.kategori');
    }

    function showLogin(){
        return view('login');
    }

    function showSupplier(){
        return view('supplier');
    }

    function showPelanggan(){
        return view('pelanggan');
    }

    function test($produk ,$hargaMin="12" , $hargaMax ="10", ){
        if($produk == 'produk'){
            echo "Tampilan Produk Dress Wanita";
        }elseif($produk == 'baju'){
            echo "Produk Fashion";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";

    }

    public Function testCollection(){
        $list_fashion =['baju', 'celana', 'tas', 'sepatu'];
        $list_fashion = collect($list_fashion);
        $list_produk = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga));
        // $data['list'] = $list_produk;
        // return view('test-collection', $data);

        // filter

        // $filtered = $list_produk->filter(function($item){
        //     return $item->harga > 20000;
        // });

        // dd($filtered);

        // $sum = $list_produk->sum('stok');
        // dd($sum);



        $data['list'] = Produk::Paginate(10);
        return view('test-collection', $data);

        dd($list_bike,$list_produk);
    }

}