<?php

namespace SIPCOFIP;

use Illuminate\Database\Eloquent\Model;

class CommunityCouncil extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'community_councils';

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
    protected $fillable = ['rif', 'name', 'people_id', 'sector_id'];

    public function project_tabs()
	{
		return $this->hasMany('App\Entities\ProjectTab');
	}

    public function sector()
    {
        return $this->belongsTo('SIPCOFIP\Sector');
    }

    public function person()
    {
        return $this->hasOne('SIPCOFIP\Person');
    }
}
