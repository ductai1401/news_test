<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Olympic_sport extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'olympic_sports';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function sport(): BelongsTo
    {
        return $this->BelongsTo(Sport::class,'id_sport','id');
    }

    public function olympic(): BelongsTo
    {
        return $this->BelongsTo(Olympic::class,'id_olympic','id');
    }
}
