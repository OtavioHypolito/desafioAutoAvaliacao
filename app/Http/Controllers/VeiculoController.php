<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculo = new Veiculo();
        $veiculos = Veiculo::All();
        return view("veiculo", [
            "veiculo" => $veiculo,
            "veiculos" => $veiculos
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/welcome');
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
        if($request->get("id") != ""){
            $veiculo = Veiculo::Find($request->get("id"));
        }else{
            $veiculo = new Veiculo();
        }
        $veiculo->tipo = $request->get("tipo");
        $veiculo->marca = $request->get("marca");
        $veiculo->modelo = $request->get("modelo");
        $veiculo->versao = $request->get("versao");
        $veiculo->dica = $request->get("dica");
        $veiculo->save();
        $request->Session()->flash("status", "salvo");
        return redirect("/veiculo");
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
        $veiculo = Veiculo::Find($id);
        $veiculos = Veiculo::All();
        return view("veiculo",[
            "veiculo" => $veiculo,
            "veiculos" => $veiculos
        ]);
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
    public function destroy($id, Request $request)
    {
        Veiculo::Destroy($id);
        $request->session()->flash("status", "excluido");
        return redirect("/home");
    }
}
