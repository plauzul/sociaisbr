<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'img', 'title', 'description', 'content', 'address',
    ];
}
