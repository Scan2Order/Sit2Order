<?php

namespace App\Filters;

use App\Tag;
use App\User;
use DB;

class ProductFilters extends Filters
{
    protected $filters = ['categories'];

    // Filter query with given username
    public function categories($name)
    {
       
        return $this->builder->where('categories', $name);
    }
    // public function popular()
    // {
    //     return $this->builder->reorder(DB::raw('upvote + comments_count'), 'desc');
    // }
    // protected function unanswered()
    // {
    //     $this->builder->getQuery()->orders = [];

    //     return $this->builder->where('comments_count', 0);
    // }
    // public function unsolved()
    // {
    //     return $this->builder->where('isAnswered', false);
    // }
    // public function tags($tags)
    // {
    //     $tag = Tag::whereIn('name', $tags)->get();
    //     return $this->builder->whereIn('tag_id', $tag->id);
    // }
}
