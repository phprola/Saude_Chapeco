<?php

namespace App\Http\Controllers;
use App\Models\Atendimento;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    function index()
    {
        $atendimento = Atendimento::all();
        // dd($atendimentos);

        return view('AtendimentoList')->with(['atendimentos' => $atendimentos]);
    }


    function create()
    {
        $funcionario = Funcionario::orderBy('nome')->get();
        $paciente = Paciente::orderBy('nome')->get();
        //dd($categorias);
        return view('AtendimentoForm')->with(['funcionario' => $funcionario,'paciente' => $paciente]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'data' => 'required',
                'hora' => 'required',
                'paciente_id' => 'required',
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
            'paciente_id' => $request->paciente_id,
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
        $paciente = Paciente::orderBy('nome')->get();
        $funcionario = Funcionario::orderBy('nome')->get();

        return view('AtendimentoForm')->with([
            'atendimento' => $atendimento,
            'paciente' => $paciente,
            'funcionario' => $funcionario,
        ]);
    }

    function show($id)
    {
        //select * from atendimento where id = $id;
        $atendimento = Atendimento::findOrFail($id);
        //dd($atendimento);
        $paciente = Paciente::orderBy('nome')->get();
        $funcionario = Funcionario::orderBy('nome')->get();

        return view('atendimentoForm')->with([
            'atendimento' => $atendimento,
            'sensor' => $sensor,
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
                'paciente_id' => 'required',
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
            'paciente_id' => $request->paciente_id,
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
