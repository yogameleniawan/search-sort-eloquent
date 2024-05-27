<?php

namespace Yogameleniawan\SearchSortEloquent\Traits;

use Illuminate\Contracts\Database\Query\Builder;

trait Searchable
{
    /**
     * Local Scope query search semua kolom.
     *
     * @param \Illuminate\Contracts\Database\Query\Builder $query
     * @param string $keyword
     * @param array $columns
     * @return void
     */
    public function scopeSearch(Builder $query, $keyword, array $columns)
    {
        if (!empty($columns)) {
            $query->where(function ($q) use ($keyword, $columns) {
                foreach ($columns as $index => $column) {
                    if ($index == 0) {
                        $q->where($column, 'LIKE', "%{$keyword}%");
                    } else {
                        $q->orWhere($column, 'LIKE', "%{$keyword}%");
                    }
                }
            });
        }

        return $query;
    }
}
