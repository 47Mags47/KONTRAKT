<?php

namespace App\Models\Main;

use App\Models\Glossary\Glossary_City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Main_Maker extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the items for the Maker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(Main_Item::class, 'maker_id');
    }

    /**
     * Get the city that owns the Maker
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(Glossary_City::class, 'city_id');
    }
}
