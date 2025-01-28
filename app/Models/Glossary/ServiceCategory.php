<?php

namespace App\Models\Glossary;

use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'glossary__service_categories',
        $primaryKey = 'code',
        $fillable = [];
    public
        $timestamps = false,
        $incrementing = false;
}
