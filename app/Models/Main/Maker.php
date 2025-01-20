<?php

namespace App\Models\Main;

use App\Models\Glossary\City;
use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    use Named, HasFactory;

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

    public function products(){
        return $this->hasMany(Product::class, 'maker_id');
    }
}
