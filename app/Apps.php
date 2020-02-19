<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apps extends Model
{
    //apps
    protected $table = 'apps';
    protected $primaryKey = 'app_id';

    public function appstatus()
    {
        return $this->belongsTo(App_Status::class);
    }
}
