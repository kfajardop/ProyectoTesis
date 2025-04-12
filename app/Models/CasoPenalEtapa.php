<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CasoPenalEtapa
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property CasoPenalDetalle[] $casoPenalDetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CasoPenalEtapa extends Model
{
    use SoftDeletes;


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function casoPenalDetalles()
    {
        return $this->hasMany(\App\Models\CasoPenalDetalle::class, 'id', 'etapa_id');
    }
    

}
