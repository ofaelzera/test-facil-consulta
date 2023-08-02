<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function listar_cidades(){
        try {
            $model = Cidade::with('estado')->paginate(1000);

            $data  = [
                'status'            => true,
                "data"              => $model->items(),
                "current_page"      => $model->currentPage(),
                "last_page"         => $model->lastPage(),
                "per_page"          => $model->perPage(),
                "total"             => $model->total(),
                'next_page_url'     => $model->nextPageUrl(),
                'prev_page_url'     => $model->previousPageUrl(),
            ];
            return response($data);
        } catch (\Throwable $th) {
            return response(['status' =>false, 'message' => $th->getMessage()]);
        }
    }
}
