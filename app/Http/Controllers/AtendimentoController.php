<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimento;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Storage;

class AtendimentoController extends Controller
{
    function index()
    {
        $atendimentos = atendimento::all();
        // dd($atendimentos);

        return view('AtendimentoList')->with(['atendimentos' => $atendimentos]);
    }


    function create()
    {
        $funcionario = Funcionario::orderBy('nome')->get();
        //dd($categorias);
        return view('AtendimentoForm')->with(['funcionario' => $funcionario]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'data' => 'required',
                'hora' => 'required',
                'paciente_email' => 'required',
                'paciente_email' => 'required',
                'funcionario_id' => 'required',
            ],
            [
                'data.required' => 'A data da atendimento é obrigatório',
                'hora.required' => 'A hora da atendimento é obrigatório',
                'paciente_nome.required' => 'O nome do paciente é obrigatório',
                'paciente_email.required' => 'O email do paciente é obrigatório',
            ]
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'data' => $request->data,
            'hora' => $request->hora,
            'paciente_nome' => $request->paciente_nome,
            'paciente_email' => $request->pciente_email,
            'funcionario_id' => $request->funcionario_id,
        ];

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Atendimento::create($dados);

        return \redirect('atendimento')->with('success', 'Cadastrado com sucesso!');
    }

    function edit($id)
    {
        //select * from atendimento where id = $id;
        $atendimento = Atendimento::findOrFail($id);
        //dd($atendimento);
        $funcionario = Funcionario::orderBy('nome')->get();

        return view('AtendimentoForm')->with([
            'atendimento' => $atendimento,
            'funcionario' => $funcionario,
        ]);
    }

    function show($id)
    {
        //select * from atendimento where id = $id;
        $atendimento = Atendimento::findOrFail($id);
        //dd($atendimento);
        $funcionario = Funcionario::orderBy('nome')->get();

        return view('atendimentoForm')->with([
            'atendimento' => $atendimento,
            'funcionario' => $funcionario,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'data' => 'required',
                'hora' => 'required',
                'paciente_email' => 'required',
                'paciente_nome' => 'required',
                'funcionario_id' => 'required',
            ],
            [
                'data.required' => 'A data da atendimento é obrigatório',
                'hora.required' => 'A hora da atendimento é obrigatório',
            ]
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'data' => $request->data,
            'hora' => $request->hora,
            'paciente_email' => $request->paciente_email,
            'paciente_nome' => $request->paciente_nome,
            'funcionario_id' => $request->funcionario_id,
        ];

        //metodo para atualizar passando o vetor com os dados do form e o id
        Atendimento::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('atendimento')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id){
        $atendimento = Atendimento::findOrFail($id);

        // verifica se existe o arquivo vinculado ao registro e depois remove
        $atendimento->delete();
        return \redirect('atendimento')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)
    {
        if ($request->campo == 'data' && !empty($request->valor)) {
            $atendimento = Atendimento::where(
                //dd(date('Y-m-d',strtotime(date('d/m/Y',strtotime($request->valor))))),
                $request->campo,
                'like',
                '%' . date('Y-m-d',strtotime(date('d/m/Y',strtotime($request->valor)))) . '%'
            )->get();
        } elseif ($request->campo) {
            $atendimento = Atendimento::where(
                $request->campo,
                //dd($request->valor),
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $atendimento = Atendimento::all();
        }

        //dd($atendimento);
        return view('AtendimentoList')->with(['atendimento' => $atendimento]);
    }
}
