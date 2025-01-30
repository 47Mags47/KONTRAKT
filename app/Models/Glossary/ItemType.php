<?php

namespace App\Models\Glossary;

use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'glossary__item_types',
        $primaryKey = 'code',
        $fillable = [];
    public
        $timestamps = false,
        $incrementing = false;
}
