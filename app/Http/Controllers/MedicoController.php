<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Medico;
use App\Models\MedicoPaciente;
use App\Models\Paciente;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', [
            'except' => [
                'listar_medico',
                'listar_medico_cidade'
            ]
        ]);
    }

    public function listar_medico() {
        try {
            $model = Medico::with('cidade')->paginate(1000);

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

    public function listar_medico_cidade($id){
        try {
            $model = Medico::where('cidade_id', '=', $id)
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
                'nome'          => 'required|string|max:100',
                'especialidade' => 'required|string|max:100',
                'cidade_id'     => 'required|integer',
            ]);

            $cidade = Cidade::where('id', '=', $request['cidade_id'])->first();

            if(!$cidade) throw new \Exception("The city_id field does not match any city");

            $model = new Medico();
            $model->nome            = $request['nome'];
            $model->especialidade   = $request['especialidade'];
            $model->cidade_id       = $request['cidade_id'];

            if(!$model->save()) throw new \Exception("Error adding data");

            return response([
                'status'=> true,
                'data'  => $model
            ]);


        } catch (\Throwable $th) {
            return response(['status' => false, 'message' => $th->getMessage()], 400);
        }
    }

    public function vincular_paciente_medico(Request $request, $id) {
        try {

            $request->validate([
                'medico_id'     => 'required|integer',
                'paciente_id'     => 'required|integer',
            ]);

            $medico = Medico::find($request['medico_id']);
            $paciente = Paciente::find($request['paciente_id']);

            if(!$medico) throw new \Exception("medico not found");
            if(!$paciente) throw new \Exception("paciente not found");

            $model = new MedicoPaciente();

            $model->medico_id   = $request['medico_id'];
            $model->paciente_id = $request['paciente_id'];

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
