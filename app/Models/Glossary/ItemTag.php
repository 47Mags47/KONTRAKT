<?php

namespace App\Models\Glossary;

use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class ItemTag extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'glossary__item_tags',
        $fillable = [];
    public
        $timestamps = false,
        $incrementing = false;
}
