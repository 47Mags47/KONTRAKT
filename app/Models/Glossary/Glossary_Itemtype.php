<?php

namespace App\Models\Glossary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Glossary_Itemtype extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get all of the Categoryes for the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoryes(): HasMany
    {
        return $this->hasMany(Glossary_ItemCategory::class, 'type_id');
    }
}
