<?php

namespace App\Models\Traits;;
use Illuminate\Database\Eloquent\Builder;

trait HasSearch
{
    public function scopeSearch(Builder $builder, string|null $sort = ''){
        $columns = $this->searchCollumns ?? [];

        return $builder->Where(function($query) use($columns, $sort){
            foreach ($columns ?? [] as $column) {
                $query->orWhereLike($column, '%' . $sort . '%');
            }
        });
    }
}
