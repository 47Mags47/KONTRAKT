<?php

namespace App\Models\Glossary;

use App\Models\Main\Main_Maker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Glossary_City extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get all of the makers for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function makers(): HasMany
    {
        return $this->hasMany(Main_Maker::class, 'city_id');
    }
}
