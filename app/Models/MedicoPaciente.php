<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MedicoPaciente
 *
 * @property int $id
 * @property int|null $medico_id
 * @property int|null $paciente_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Medico|null $medico
 *
 * @package App\Models
 */
class MedicoPaciente extends Model
{
	use SoftDeletes;
	protected $table = 'medico_paciente';

	protected $casts = [
		'medico_id' => 'int',
		'paciente_id' => 'int'
	];

	protected $fillable = [
		'medico_id',
		'paciente_id'
	];

	public function medico()
	{
		return $this->belongsTo(Medico::class, 'medico_id');
	}

    public function paciente()
	{
		return $this->belongsTo(Paciente::class, 'paciente_id');
	}
}
