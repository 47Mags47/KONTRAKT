<?php

namespace App\Models\Glossary;

use App\Models\Main\Main_Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Glossary_ItemCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the Type that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Glossary_Itemtype::class, 'type_id');
    }

    /**
     * Get all of the Items for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(Main_Item::class, 'category_id');
    }
}
