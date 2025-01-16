<?php

namespace App\Models\Glossary;

use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'glossary__city',
        $primaryKey = 'code',
        $fillable = [];
    public
        $timestamps = false,
        $incrementing = false;
}
