<?php

namespace SIPCOFIP;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipalities';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['municipality'];

    
}
