<?php

namespace Yogameleniawan\SearchSortEloquent\Traits;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;

trait Sortable
{
    /**
     * Local Scope query sort semua kolom.
     *
     * @param \Illuminate\Contracts\Database\Query\Builder $query
     * @param string $sort_by = 'updated_at'
     * @param string $sort_order = 'DESC'
     * @return void
     */
    public function scopeSort(Builder $query, $sort_by = 'updated_at', $sort_order = 'DESC')
    {
        $query->orderBy($sort_by, $sort_order);
    }
}
