<?php

namespace App\Http\Controllers;


use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function DataEmpresa(){
        $datas= Empresa::where("id",">=",1)->get();
        // $data= Empresa::where("id",2)->first();
        // $data= Empresa::find(1);
        // echo $data;
        foreach($datas as $data){
            // dd($data->name);
            echo $data->name;
        }
        // dd($data->name);
        // return view('empresa');
    }
}
