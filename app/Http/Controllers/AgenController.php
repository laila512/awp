<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Http\Requests\agen;
class AgenController extends Controller
{
    public function agen()
    {
        return view("agen.form");
    }


    public function proses(agen $request)
    {

        $nama_file = time().".".$request->file("foto")->extension();

        $request->file("foto")->move(public_path(), $nama_file);

        echo "<img src='/$nama_file'>"; 
        echo $request->get("nama");
        echo "<br />";
        echo $request->get("nowa");
        echo "<br />";
        echo $request->get("ttl");
        echo "<br />";
        echo $request->get("alamat");
        echo "<br />";
        echo $request->get("nik");
        echo "<br />";
        echo $request->get("email");
        echo "<br />";
        echo $request->get("foto");
        echo "<br />";


       echo "<br>file tersimpan";
    }
        
        
    
    
}