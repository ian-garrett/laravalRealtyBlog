<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mlsnote extends Model
{
	protected $fillable = ['body'];

    public $table = "mlsnotes";

    //assign note to specific MLS
    public function MLS()
    {
    	return $this->belongsTo(MLS::class);
    }

    //assign note to specific user
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
