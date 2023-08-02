<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cidade
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $estado_id
 * @property int|null $ibge
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Estado|null $estado
 * @property Collection|Medico[] $medicos
 *
 * @package App\Models
 */
class Cidade extends Model
{
	use SoftDeletes;
	protected $table = 'cidade';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'estado_id' => 'int',
		'ibge' => 'int'
	];

	protected $fillable = [
		'nome',
		'estado_id',
		'ibge'
	];

    protected $hidden = [
        'estado_id',
        'deleted_at'
    ];

	public function estado()
	{
		return $this->belongsTo(Estado::class);
	}

	public function medicos()
	{
		return $this->hasMany(Medico::class);
	}
}
