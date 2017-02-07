<?php

namespace SIPCOFIP;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parishes';

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
    protected $fillable = ['parish'];


    public function sector()
    {
        return $this->hasMany('SIPCOFIP\Sector');
    }
    
}
