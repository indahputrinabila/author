<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
     protected $table = "books";
    protected $fillable = ['title','author_id','amount','cover'];
    protected $visible = ['title','author_id','amount','cover'];
    public $timestamps = true;

    public function author()

    {
    	return $this->Belongsto('App\author','author_id');
    }

}
