<?php

namespace App\Models\Main;

use App\Models\Glossary\City;
use App\Models\Traits\hasPrepare;
use App\Models\Traits\Named;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    use Named, HasFactory, hasPrepare;

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

    public $searchCollumns = ['name', 'description', 'comment'];

    ### Связи
    ##################################################
    public function city()
    {
        return $this->belongsTo(City::class, 'city_code', 'code');
    }

    public function products(){
        return $this->hasMany(Product::class, 'maker_id');
    }

    public function scopeApplyFilter($query, $column, $value){
        switch ($column) {
            default:
                return $query->where($column, $value);
                break;
        }
    }
}
