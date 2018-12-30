<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	//autorise a enregistre sur tt les table de la bd/exclure une table de lenregistrement
    //protected $guarded = [];

    protected $fillable = ['name','description'];


    public function tasks(){

    	return $this->hasMany(Task::class);
    }
}
