<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', []);
    }

    public function lita_paciente_medico($id){
        try {
            $model = Paciente::leftJoin('medico_paciente as mp', 'paciente.id', '=', 'mp.paciente_id')
                                ->where('mp.medico_id', $id)
                                ->paginate(1000);

            return response([
                'status'            => true,
                "data"              => $model->items(),
                "current_page"      => $model->currentPage(),
                "last_page"         => $model->lastPage(),
                "per_page"          => $model->perPage(),
                "total"             => $model->total(),
                'next_page_url'     => $model->nextPageUrl(),
                'prev_page_url'     => $model->previousPageUrl(),
            ]);
        } catch (\Throwable $th) {
            return response(['status' =>false, 'message' => $th->getMessage()]);
        }
    }

    public function create(Request $request) {
        try {
            $request->validate([
                'nome'      => 'required|string|max:100',
                'cpf'       => 'required|string|max:20',
                'celular'   => 'required|string|max:20',
            ]);

            $model = new Paciente();
            $model->nome    = $request['nome'];
            $model->cpf     = $request['cpf'];
            $model->celular = $request['celular'];

            if(!$model->save()) throw new \Exception("Error adding data");

            return response([
                'status'=> true,
                'data'  => $model
            ]);

        } catch (\Throwable $th) {
            return response(['status' =>false, 'message' => $th->getMessage()]);
        }
    }

    public function update(Request $request, $id) {
        try {

            $model = Paciente::find($id);

            if(!$model) throw new \Exception("Record not found");

            $model->nome    = isset($request['nome'])    && $request['nome']    !== '' ? $request['nome']    : $model->nome;
            $model->cpf     = isset($request['cpf'])     && $request['cpf']     !== '' ? $request['cpf']     : $model->cpf;
            $model->celular = isset($request['celular']) && $request['celular'] !== '' ? $request['celular'] : $model->celular;

            if(!$model->save()) throw new \Exception("Error adding data");

            return response([
                'status'=> true,
                'data'  => $model
            ]);

        } catch (\Throwable $th) {
            return response(['status' =>false, 'message' => $th->getMessage()]);
        }
    }

}
