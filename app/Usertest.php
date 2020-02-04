<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertest extends Model
{
    
    protected $attributes = [
        'usertype' => self::user,
        'userrole' => self::common,
    ];
    
    public function up()
    {
        Schema::create('New_users', function(Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('usertype');
            $table->string('userrole');
            $table->timestamps();
        });
    }


public function down()
{
    Schema::dropIfExists('New_users')
}

}
