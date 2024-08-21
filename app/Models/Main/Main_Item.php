<?php

namespace App\Models\Main;

use App\Models\Glossary\Glossary_ItemCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Main_Item extends Model
{
    use HasFactory;

    /**
     * Get the maker that owns the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maker(): BelongsTo
    {
        return $this->belongsTo(Main_Maker::class, 'maker_id');
    }

    /**
     * Get the category that owns the Main_Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Glossary_ItemCategory::class, 'category_id');
    }
}
