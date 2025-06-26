<?php

namespace Theparyab\LaravelMedia\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * cast columns
     * 
     * @var string[]
     */
 protected $casts = ['files' => 'json'];

}