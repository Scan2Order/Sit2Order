<?php

namespace App\Filters;

class productFilter extends filter
{
    protected $filters = ['categories'];

    // Filter query with given username
    public function categories($name)
    {

        return $this->builder->where('categories', $name);
    }
}
