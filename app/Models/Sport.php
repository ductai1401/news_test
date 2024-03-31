<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Olympic;
use App\Models\Medal;
use App\Models\Olympic_sport;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Sport extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sports';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function medal() : HasManyThrough
    {
        return $this->hasManyThrough(Medal::class,Olympic_sport::class,'id_sport','id_olympic_sport','id','id');
    }

    public function sport() : HasOneThrough
    {
        return $this->HasOneThrough(Sport::class,Olympic_sport::class,'id','id','id_olympic_sport','id_sport');
    }

    
}
