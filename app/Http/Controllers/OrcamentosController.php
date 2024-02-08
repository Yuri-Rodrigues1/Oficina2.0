<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentosController extends Controller
{
    public function index(){
            //dd('Olá Mundo'); 
        $orcamentos = Orcamento::all();
        $orcamentos = Orcamento::orderBy('data', 'desc')->get();
                //dd($orcamentos);
        return view('orcamentos.index',['orcamentos'=>$orcamentos]);
    }
    public function create(){
        return view('orcamentos.create');
    }
    public function store(Request $request){
        Orcamento::create($request->all());
        return redirect()->route('orcamentos-index');
    }
    public function edit($id){
        $orcamentos = Orcamento::where('id',$id)->first();
        if(!empty($orcamentos)){
            return view('orcamentos.edit',['orcamentos'=>$orcamentos]);
        }else{
            return redirect()->route('orcamentos-index');
        } 
    }
    public function update(Request $request, $id){
        $data = [
            'cliente' => $request->cliente,
        
            'vendedor' => $request->vendedor,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
        ];
        Orcamento::where('id', $id)->update($data);
        return redirect()->route('orcamentos-index');
    }
    public function destroy($id){
        Orcamento::where('id', $id)->delete();
        return redirect()->route('orcamentos-index');
    }
    public function search(Request $request)
    {
        $query = Orcamento::query();
    
        if ($request->has('data_inicio')) {
            $query->whereDate('data', '=', $request->data_inicio);
        }
    
        if ($request->has('cliente')) {
            $query->where('cliente', 'like', '%' . $request->cliente . '%');
        }
    
        if ($request->has('vendedor')) {
            $query->where('vendedor', 'like', '%' . $request->vendedor . '%');
        }
    
        $query->orderBy('data', 'desc');
    
        $orcamentos = $query->get();
    
        return view('orcamentos.index', compact('orcamentos'));
    }
}
