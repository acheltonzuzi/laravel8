<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $req)
    {
        $usuario= new User();
        $usuario->name=$req->nome;
        $usuario->email=$req->email;
        $usuario->password=$req->senha;
        $usuario->save();
        $req->session()->flash("nome",$req->nome);
        return redirect("cadTemplate");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dados =User::paginate(10);
        $contador=User::all()->max("id");
        return view("CRUD.list",compact("dados","contador"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados=User::find($id);
        return view("CRUD.edit",compact("dados"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $usuario= User::find($req->id);
        $usuario->name=$req->nome;
        $usuario->email=$req->email;
        $usuario->password=$req->senha;
        $usuario->save();
        return redirect("showAll");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dados= User::find($id);
        $dados->delete();
        return redirect("showAll");
    }

    public function detalhe($id){
        $dados=User::find($id);
        return view("CRUD.detalhe",compact("dados"));
    }
}
