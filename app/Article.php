<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{

    

    protected $table = "articles";
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    //para usar sluggable inicio
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    //para usar sluggable fin

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsto('App\User');
    }

    public function image ()
    {
    	return $this->hasMany('App\Image');
    }

    public function tags ()
    {
    	return $this->belongsToMany('App\Tag');
    }
}

