<?php namespace Csatar\Csatar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCsatarCsatarScoutsChronicIllnesses extends Migration
{
    public function up()
    {
        Schema::table('csatar_csatar_scouts_chronic_illnesses', function($table)
        {
            $table->string('details', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('csatar_csatar_scouts_chronic_illnesses', function($table)
        {
            $table->dropColumn('details');
        });
    }
}
