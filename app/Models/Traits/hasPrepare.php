<?php

namespace App\Models\Traits;;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait hasPrepare
{
    public static function prepare(Request|null $request)
    {
        return $request !== null
            ? self::query()
                ->search($request->search ?? '')
                ->filter($request->filters ?? [])
                ->sort($request->sort ?? ['column' => 'created_at', 'direction' => 'desc'])
                ->get()
            : self::query()->get();
    }

    public function scopeSearch(Builder $builder, string $string)
    {
        $columns = $this->searchCollumns ?? [];

        return $builder->Where(function ($query) use ($columns, $string) {
            foreach ($columns ?? [] as $column) {
                $query->orWhereLike($column, '%' . $string . '%');
            }
        });
    }

    public function scopeFilter(Builder $builder, $filters)
    {
        return $builder->Where(function ($query) use ($filters) {
            foreach ($filters ?? [] as $column => $value) {
                $query->applyFilter($column, $value);
            }
        });
    }

    public function scopeSort(Builder $builder, array $sort)
    {
        return $builder->orderBy($sort['column'], $sort['direction']);
    }
}
