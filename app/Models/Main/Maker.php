<?php

namespace App\Models\Main;

use App\Models\Glossary\City;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    ### Настройки
    ##################################################
    protected
        $table = 'main__makers',
        $guarded = [
            'id',
            'created_at',
            'updated_at'
        ],
        $casts = [
            'links' => 'json'
        ];

    ### Связи
    ##################################################
    public function city()
    {
        return $this->belongsTo(City::class, 'city_code', 'code');
    }
}
