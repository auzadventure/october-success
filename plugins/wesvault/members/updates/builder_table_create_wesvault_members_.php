<?php namespace Wesvault\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWesvaultMembers extends Migration
{
    public function up()
    {
        Schema::create('wesvault_members_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wesvault_members_');
    }
}
