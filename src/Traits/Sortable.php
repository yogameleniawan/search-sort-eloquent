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
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function scopeSort(Builder $query, Request $request)
    {
        if ($request->has('sort_by') && $request->has('sort_order')) {
            $query->orderBy($request->input('sort_by'), $request->input('sort_order'));
        } else {
            $query->orderBy('updated_at', 'DESC');
        }
    }
}
