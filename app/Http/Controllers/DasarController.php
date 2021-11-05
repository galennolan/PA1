<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasarController extends Controller
{
    public function php()
        {
            return view('php');
        }
    public function variabel()
    {
        return view('variabel');
    }
    public function perkalian()
    {
        return view('tipedata');
    }
    
    public function formulir()
    {
         return view('forminput');
    }
    public function output(Request $request)
    {
        $nim = $request->input('nim');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nim : ".$nim."<br>Nama : ".$nama."<br>Alamat : ".$alamat;
    }

    public function register()
    {
        return view('biodata');
        
    }

    
     public function tampil(Request $request)
    {
            $nim = $request->input('nim');
            $nama = $request->input('nama');
            $tmplahir = $request->input('tmplhr');
            $tgllahir = $request->input('tgllhr');
            $jk = $request->input('jk');
            $kerja = $request->input('kerja');
            $email = $request->input('email');
            $hobi1 = $request->input('hobi1');
            $hobi2 = $request->input('hobi2');
            $hobi3 = $request->input('hobi3');
            $hobi4 = $request->input('hobi4');
    
    
            return "<h2>Biodata Mahasiswa</h2><hr>
            Nim : ".$nim.
            "<br>Nama : ".$nama.
            "<br>Tempat Lahir : ".$tmplahir.
            "<br>Tanggal Lahir : ".$tgllahir.
            "<br>Jenis Kelamin : ".$jk.
            "<br>Pekerjaan : ".$kerja.
            "<br>Amail : ".$email.
            "<br>Hobi : ".$hobi1.",". $hobi2."," .$hobi3.",". $hobi4.
            "<hr><a href='/register'>Kembali";
    }
        public function booking ()
        {
            return view ('booking');
        }
    
        public function tampiltiket(Request $request)
        {
            $nama = $request->input('nama');
            $studio = $request->input('studio');
            $kelas = $request->input('kelas');
            $jmltiket = $request->input('jmltiket');
            //Mencari Nama Bintang Tamu
            if ($studio=="Studio 1")
            {
            $bt="Opick";
            }
            elseif ($studio=="Studio 2")
            {
            $bt="Raihan";
            }
            //Mencari Harga
            if($kelas=='VIP'){
            $harga=5000;
            }
            elseif($kelas=='Festival')
            {
            $harga=2500;
            }
            $total=$harga*$jmltiket;
    
            return view('tampiltiket', compact('nama','studio','bt','kelas','harga','jmltiket','total'));
        }
    
    
}