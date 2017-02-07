<?php

namespace SIPCOFIP;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people';

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
    protected $fillable = ['identity', 'name', 'last_name', 'birth_date', 'address', 'telephone', 'project_tab_id'];


    public function communityConuncil()
    {
        return $this->hasOne('SIPCOFIP\CommunityCouncil');
    }

    
}
