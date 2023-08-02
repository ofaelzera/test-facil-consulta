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
 * Class Estado
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $uf
 * @property int|null $ibge
 * @property string|null $ddd
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|Cidade[] $cidades
 *
 * @package App\Models
 */
class Estado extends Model
{
	use SoftDeletes;
	protected $table = 'estado';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'ibge' => 'int'
	];

	protected $fillable = [
		'nome',
		'uf',
		'ibge',
		'ddd'
	];

    protected $hidden = [
        'deleted_at'
    ];

	public function cidades()
	{
		return $this->hasMany(Cidade::class);
	}
}
