<?php

namespace App\Models\Main;

use App\Models\Glossary\ProductCategory;
use App\Models\Glossary\ServiceCategory;
use App\Models\Traits\hasPrepare;
use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Named, HasFactory, hasPrepare;

    ### Настройки
    ##################################################
    protected
        $table = 'main__services',
        $guarded = [
            'id',
            'created_at',
            'updated_at'
        ];

    public $searchCollumns = ['name', 'description'];

    ### Связи
    ##################################################
    public function maker()
    {
        return $this->belongsTo(Maker::class, 'maker_id');
    }

    public function category(){
        return $this->belongsTo(ServiceCategory::class, 'category_code', 'code');
    }

    public function scopeApplyFilter($query, $column, $value){
        switch ($column) {
            default:
                return $query->where($column, $value);
                break;
        }
    }
}
