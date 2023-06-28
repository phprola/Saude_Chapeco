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
                'caps' => 'required | max: 20',
                'imgfun' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'email.max' => 'Só é permitido 100 caracteres',
                'crp.required' => 'O crp é obrigatório',
                'crp.max' => 'Só é permitido 11 caracteres',
                'caps.required' => 'O nome do CAPS é obrigatório',
                'caps.max' => 'Só é permitido 20 caracteres',
            ]
        );

        $dados = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'crp' => $request->crp,
            'caps' => $request->caps,
        ];

        $imgfun = $request->file('imgfun');
        $nome_arquivo = '';
        //verifica se o campo imgfun foi passado uma imgfun
        if ($imgfun) {
            $nome_arquivo = date('YmdHis') . '.' . $imgfun->getClientOriginalExtension();
            $diretorio = 'imagem/';
            //salva a imgfun em uma pasta
            $imgfun->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imgfun'] = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        Funcionario::create($dados);

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
                'crp' => 'required | max: 11',
                'caps' => 'required | max: 20',
                'imgfun' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'email.max' => 'Só é permitido 100 caracteres',
                'crp.required' => 'O crp é obrigatório',
                'crp.max' => 'Só é permitido 11 caracteres',
                'caps.required' => 'O nome do CAPS é obrigatório',
                'caps.max' => 'Só é permitido 20 caracteres',
            ]
        );

        $dados =  [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'crp' => $request->crp,
            'caps' => $request->caps,
        ];

        $imgfun = $request->file('imgfun');
        //verifica se o campo imgfun foi passado uma imgfun
        if ($imgfun) {
            $nome_arquivo = date('YmdHis') . '.' . $imgfun->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imgfun em uma pasta
            $imgfun->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imgfun'] = $diretorio . $nome_arquivo;
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
        if ($funcionario->imgfun){
            Storage::disk('public')->delete($funcionario->imgfun);
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
