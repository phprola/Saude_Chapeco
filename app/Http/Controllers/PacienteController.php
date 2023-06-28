<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();

        return view('PacienteList')->with(['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view('PacienteForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required | max: 40',
                'telefone' => 'required | max: 14',
                'email' => ' nullable | email | max: 50',
                'UBS' => 'required | max: 30',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 40 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 14 caracteres',
                'email.required' => 'O email é obrigatório',
                'UBS.required' => 'O UBS é obrigatório',
                'UBS.max' => 'Só é permitido 20 caracteres',
            ]
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'UBS' => $request->UBS,
        ];

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Paciente::create($dados);

        return \redirect('paciente')->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        //dd($leitura);

        return view('PacienteForm')->with([
            'paciente' => $paciente,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        //dd($leitura);

        return view('PacienteForm')->with([
            'paciente' => $paciente,
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
        $request->validate(
            [
                'nome' => 'required | max: 40',
                'telefone' => 'required | max: 14',
                'email' => ' nullable | email | max: 50',
                'UBS' => 'required | max: 30',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 40 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 14 caracteres',
                'email.required' => 'O email é obrigatório',
                'UBS.required' => 'O UBS é obrigatório',
                'UBS.max' => 'Só é permitido 20 caracteres',
            ]
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'UBS' => $request->UBS,
        ];

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Paciente::UpdateOrCreate(
            ['id' => $request->id], $dados
        );

        return \redirect('paciente')->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);

        // verifica se existe o arquivo vinculado ao registro e depois remove
        $paciente->delete();
        return \redirect('paciente')->with('success', 'Removido com sucesso!');
    }
    function search(Request $request)
    {
        if ($request->campo) {
            $pacientes = Paciente::where(
                $request->campo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $pacientes = Paciente::all();
        }

        //dd($pacientes);
        return view('PacienteList')->with(['pacientes' => $pacientes]);
    }
}
