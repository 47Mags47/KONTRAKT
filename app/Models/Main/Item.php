<?php

namespace App\Models\Main;

use App\Models\Glossary\ItemTag;
use App\Models\Glossary\ItemType;
use App\Models\Link\ItemTag as LinkItemTag;
use App\Models\Traits\hasPrepare;
use App\Models\Traits\Named;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use Named, HasFactory, hasPrepare;

    ### Настройки
    ##################################################
    protected
        $table = 'main__items',
        $guarded = [
            'id',
            'created_at',
            'updated_at'
        ];

    ### Связи
    ##################################################
    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class, 'maker_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ItemType::class, 'type_code', 'code');
    }

    public function tags(){
        return $this->belongsToMany(ItemTag::class, LinkItemTag::getTableName(), 'item_id', 'tag_id');
    }
}
