<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medal;
use App\Models\Olympic_sport;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Olympic extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'olympics';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function medal() : HasManyThrough
    {
        return $this->hasManyThrough(Medal::class,Olympic_sport::class,'id_olympic','id_olympic_sport','id','id');
    }
}
