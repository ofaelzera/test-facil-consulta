<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string|null $celular
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Paciente extends Model
{
	use SoftDeletes;
	protected $table = 'paciente';

	protected $fillable = [
		'nome',
		'cpf',
		'celular'
	];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'deleted_at'
    ];

}
