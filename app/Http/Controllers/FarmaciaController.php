<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use Illuminate\Support\Facades\Storage;

class FarmaciaController extends Controller
{
    function index()
    {
        $farmacias = Farmacia::All();
        // dd($farmacias);

        return view('farmaciaList')->with(['farmacias' => $farmacias]);
    }

    function create()
    {
        //dd($categorias);
        return view('FarmaciaForm');
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'codigo' => 'required | max: 10',
                'medicamento' => 'required | max: 35',
                'quantidade' => ' required | max: 10',
            ],
            [
                'codigo.required' => 'O codigo é obrigatório',
                'codigo.max' => 'Só é permitido 10 caracteres',
                'medicamento.required' => 'O medicamento é obrigatório',
                'medicamento.max' => 'Só é permitido 35 caracteres',
                'quantidade.required' => 'O quantidade é obrigatório',
                'quantidade.max' => 'Só é permitido 10 caracteres',
            ]
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'codigo' => $request->codigo,
            'medicamento' => $request->medicamento,
            'quantidade' => $request->quantidade,
        ];

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Farmacia::create($dados);

        return \redirect('farmacia')->with('success', 'Cadastrado com sucesso!');
    }

    function edit($id)
    {
        //select * from farmacia where id = $id;
        $farmacia = Farmacia::findOrFail($id);
        //dd($farmacia);

        return view('FarmaciaForm')->with([
            'farmacia' => $farmacia,
        ]);
    }

    function show($id)
    {
        //select * from farmacia where id = $id;
        $farmacia = Farmacia::findOrFail($id);
        //dd($farmacia);

        return view('FarmaciaForm')->with([
            'farmacia' => $farmacia,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'codigo' => 'required | max: 10',
                'medicamento' => 'required | max: 35',
                'quantidade' => ' required | max: 10',
            ],
            [
                'codigo.required' => 'O codigo é obrigatório',
                'codigo.max' => 'Só é permitido 10 caracteres',
                'medicamento.required' => 'O medicamento é obrigatório',
                'medicamento.max' => 'Só é permitido 35 caracteres',
                'quantidade.required' => 'O quantidade é obrigatório',
                'quantidade.max' => 'Só é permitido 10 caracteres',
            ]
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'codigo' => $request->codigo,
            'medicamento' => $request->medicamento,
            'quantidade' => $request->quantidade,
        ];

        //metodo para atualizar passando o vetor com os dados do form e o id
        Farmacia::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('farmacia')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id){
        $farmacia = Farmacia::findOrFail($id);

        // verifica se existe o arquivo vinculado ao registro e depois remove
        if ($farmacia->imagem){
            Storage::disk('public')->delete($farmacia->imagem);
        }
        $farmacia->delete();
        return \redirect('farmacia')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)
    {
        if ($request->campo) {
            $farmacias = Farmacia::where(
                $request->campo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $farmacias = Farmacia::all();
        }

        //dd($farmacias);
        return view('FarmaciaList')->with(['farmacias' => $farmacias]);
    }
}
