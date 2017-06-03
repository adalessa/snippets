<?php

namespace App;

class Snippet extends Model
{
    public function forks()
    {
        return $this->hasMany(self::class, 'forked_id');
    }

    public function originalSnippet()
    {
        return $this->belongsTo(self::class, 'forked_id');
    }

    public function isAFork()
    {
        return !! $this->originalSnippet;
    }
}
