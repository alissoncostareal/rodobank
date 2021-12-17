<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frete;
class FreteController extends Controller
{
    public function index(){ //Função onde é passada a search para a home

        $search = request('search');
        if ($search) {
            $fretes = Frete::where([
                ['placa', 'like', '%'.$search.'%']
            ])->get();
        } else{
            $fretes = Frete::all();
        }
        
        return view('welcome', ['fretes' => $fretes, 'search' => $search]);
    }

    public function create(){
        return view('fretes.create');
    }

    public function store(Request $request){ //Função onde os dados são salvos no banco

        $frete = new Frete;

        $frete->placa = $request->placa;
        $frete->dono_veiculo = $request->dono_veiculo;
        $frete->valor_frete = $request->valor_frete;
        $frete->date_ini = $request->date_ini;
        $frete->date_final = $request->date_final;
        $frete->status = $request->status;

        $frete->save();

        return redirect('/')->with('msg', 'Frete criado com sucesso');
    }

    public function destroy($id){ //Função onde é deletado o frete com o id
        Frete::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'O frete foi deletado com sucesso!');
    }

    public function edit($id){
        $frete = Frete::findOrFail($id);

        return view('fretes.edit', ['frete'=>$frete]);
    }

    public function update(Request $request){ //Função onde os dados são salvos após a edição
        Frete::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'O frete foi atualizado com sucesso!');
    }

    public function dashboard(){ //Função onde o search é resgatado e verificado se existe após o login
        $search = request('search');
        if ($search) {
            $fretes = Frete::where([
                ['placa', 'like', '%'.$search.'%']
            ])->get();
        } else{
            $fretes = Frete::all();
        }
        
        return view('welcome', ['fretes' => $fretes, 'search' => $search]);
    }
}
