<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App_Status extends Model
{
    //apps status
    protected $table = 'app_status';
    protected $primaryKey = 'app_status_id';

    public function apps()
    {
        return $this->hasMany(Apps::class);
    }
}
