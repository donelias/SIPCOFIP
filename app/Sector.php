<?php

namespace SIPCOFIP;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sectors';

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
    protected $fillable = ['sector'];



    public function community_council()
    {
        return $this->hasMany('SIPCOFIP\CommunityCouncils');
    }

    public function parish()
    {
        return $this->belongsTo('SIPCOFIP\Parish');
    }
    
}
