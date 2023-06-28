<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Storage;

class FuncionarioController extends Controller
{
    function index()
    {
        $funcionarios = Funcionario::All();
        // dd($funcionarios);

        return view('FuncionarioList')->with(['funcionarios' => $funcionarios]);
    }

    function create()
    {
        return view('FuncionarioForm');
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'telefone' => 'required | max: 20',
                'email' => ' nullable | email | max: 100',
                'crp' => 'required | max: 11',
                'imagem' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'email.max' => 'Só é permitido 100 caracteres',
                'crp.required' => 'O crp é obrigatório',
                'crp.max' => 'Só é permitido 11 caracteres',
            ]
        );

        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        if ($imagem) {
            $nome_arquivo =
                date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $nome_arquivo = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        Funcionario::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'imagem' => $nome_arquivo,
            'crp' => $request->crp,

        ]);

        return \redirect()->action(
            'App\Http\Controllers\FuncionarioController@index'
        );
    }

    function edit($id)
    {
        //select * from usuario where id = $id;
        $funcionario = Funcionario::findOrFail($id);
        //dd($funcionario);

        return view('funcionarioForm')->with([
            'funcionario' => $funcionario,
        ]);
    }

    function show($id)
    {
        //select * from funcionario where id = $id;
        $funcionario = Funcionario::findOrFail($id);
        //dd($usuario);

        return view('FuncionarioForm')->with([
            'funcionario' => $funcionario,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'telefone' => 'required | max: 20',
                'email' => ' nullable | email | max: 100',
                'imagem' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
                'crp' => 'required | max: 11',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'email.max' => 'Só é permitido 100 caracteres',
                'crp.required' => 'O crp é obrigatório',
                'crp.max' => 'Só é permitido 11 caracteres',
            ]
        );

        $dados =  [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'crp' => $request->crp,
        ];

        $imagem = $request->file('imagem');
        //verifica se o campo imagem foi passado uma imagem
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //metodo para atualizar passando o vetor com os dados do form e o id
        Funcionario::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('funcionario')->with('success', 'Atualizado com sucesso!');
    }
    //

    function destroy($id){
        $funcionario = Funcionario::findOrFail($id);

        // verifica se existe o arquivo vinculado ao registro e depois remove
        if ($funcionario->imagem){
            Storage::disk('public')->delete($funcionario->imagem);
        }
        $funcionario->delete();
        return \redirect('funcionario')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)
    {
        if ($request->campo) {
            $funcionarios = Funcionario::where(
                $request->campo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $funcionarios = Funcionario::all();
        }

        //dd($funcionarios);
        return view('funcionarioList')->with(['funcionarios' => $funcionarios]);
    }
}
