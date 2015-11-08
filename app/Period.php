<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use CanUseCreator;

    protected $fillable = ['name', 'weight', 'ordr', 'program_id'];

    public function program()
    {
    	return $this->hasOne('App\Program');
    }

}
