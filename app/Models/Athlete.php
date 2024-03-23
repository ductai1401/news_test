<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Sport;
use App\Models\Country;


class Athlete extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'athletes';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function sports(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }
    
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
