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
 * Class Medico
 * 
 * @property int $id
 * @property string|null $nome
 * @property string|null $especialidade
 * @property int|null $cidade_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cidade|null $cidade
 * @property Collection|MedicoPaciente[] $medico_pacientes
 *
 * @package App\Models
 */
class Medico extends Model
{
	use SoftDeletes;
	protected $table = 'medico';

	protected $casts = [
		'cidade_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'especialidade',
		'cidade_id'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function medico_pacientes()
	{
		return $this->hasMany(MedicoPaciente::class, 'paciente_id');
	}
}
