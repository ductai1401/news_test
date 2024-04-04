<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Medal extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'medals';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function athlete(): BelongsTo
    {
        return $this->belongsTo(Athlete::class,'id_athlete','id');
    }
    public function olympic() : HasOneThrough
    {
        return $this->HasOneThrough(Olympic::class,Olympic_sport::class,'id','id','id_olympic_sport','id_olympic');
    }

    public function sport() : HasOneThrough
    {
        return $this->HasOneThrough(Sport::class,Olympic_sport::class,'id','id','id_olympic_sport','id_sport');
    }

    



    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class,'id_country','id');
    }
}
