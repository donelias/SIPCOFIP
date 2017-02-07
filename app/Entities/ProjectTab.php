<?php

namespace SIPCOFIP\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectTab extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_tabs';

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
    protected $fillable = ['no_tab', 'name', 'system_id', 'runner_id', 'community_council_id', 'user_id', 'status'];
}
