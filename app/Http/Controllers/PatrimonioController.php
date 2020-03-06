<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrimonios = Patrimonio::paginate(8);
        return view('patrimonio', compact('patrimonios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
       return view('forms.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validate = $request->validate([
            'categoria' => 'required',
            'computador' => 'required|max:30',
            'monitor' => 'required|max:30',
            'Qtd_Monitor' => 'required',
            'plenus' => 'max:30',
            'mesa' => 'max:30',
            'gaveteiro' => 'max:30',
            'cadeira' => 'max:30',
        ]);
        $patrimonios = Patrimonio::create($validate);
        return redirect()->route('patrimonio.index', $patrimonios)->with('sucess', 'Patrimonio salvo!');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $patrimonios = Patrimonio::findOrfail($id);
        return view('forms.show', compact('patrimonio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $patrimonios = Patrimonio::findOrfail($id);
        return view('forms.editar', compact('patrimonios'));
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
        $validate = $request->validate([
            'categoria' => 'required',
            'computador' => 'required|max:30',
            'monitor' => 'required|max:30',
            'Qtd_Monitor' => 'required',
            'plenus' => 'max:30',
            'mesa' => 'max:30',
            'gaveteiro' => 'max:30',
            'cadeira' => 'max:30',
        ]);
        Patrimonio::whereId($id)->update($validate);
        return redirect()->route('patrimonio.index')->with('sucess', 'Patrimonio atualizado!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $patrimonios = Patrimonio::findOrfail($id);
        $patrimonios->delete();
        return redirect()->route('patrimonio.index')->with('sucess', 'Patrimonio excluido!');
    }
}
