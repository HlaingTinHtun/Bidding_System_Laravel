<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = "tasks";
    protected $fillable = ['name'];

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return Response
     */
    public function user ()
    {
    	
    	return $this->belongsTo(User::class);
    
    }
}
