<?php

namespace App\Models\Link;

use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class ItemTag extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'link__items_tags',
        $fillable = [];
    public
        $timestamps = false;
}
