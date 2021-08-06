<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class testController extends Controller
{
    function ver(Request $req)
    {   
        $data=$req->input();
        $req->session()->flash("user",$data["nome"]);
        return view("perfil");
    }
    function logout(){
        if(session()->has("user")){
            session()->pull("user");
        }
        return redirect("forms");
    }

    function pegar(){
        return User::All();
    }

    function flash(Request $req){
        $nome=$req->nome;
        $req->session()->flash("nome",$nome);
        return redirect("flash-cad");
    }
    function upload(Request $req){
        $img=$req->file("ficheiro");
        $imxt=$img->getClientOriginalName();
        $req->file("ficheiro")->move(public_path("ficheiros"),$imxt);
        return "upload com sucesso";
    }
}
