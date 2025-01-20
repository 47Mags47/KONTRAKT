<?php

namespace App\Models\Main;

use App\Models\Glossary\ProductCategory;
use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Named;

    ### Настройки
    ##################################################
    protected
        $table = 'main__products',
        $guarded = [
            'id',
            'created_at',
            'updated_at'
        ];

    ### Связи
    ##################################################
    public function maker()
    {
        return $this->belongsTo(Maker::class, 'maker_id');
    }

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'category_code', 'code');
    }
}
