<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['title', 'slug', 'type', 'body', 'status', 'shortDesc'];

    const typeArticle = 0;
    const typeProject = 1;

    const statusHidden = 0;
    const statusPublished = 1;

    public function types()
    {
        return [
            $this::typeArticle => 'Article',
            $this::typeProject => 'Project',
        ];
    }

    public function statuss()
    {
        return [
            $this::statusHidden => 'Hidden',
            $this::statusPublished => 'Published',
        ];
    }

    public function getTypeTextAttribute()
    {
        return $this->types()[$this->type];
    }

    public function getStatusTextAttribute()
    {
        return $this->statuss()[$this->status];
    }
}
