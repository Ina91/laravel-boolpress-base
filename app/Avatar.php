<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public $timestamps =false;

    protected $fillable =[
        'telefono', 'avatar', 'user_id'
    ];

    // rel one-to-one tra model Avatar e model User
    public function user()
    {
    return $this->belongsTo('App\User');  //belongsTo perchè uso chiave esterna
    }

}
