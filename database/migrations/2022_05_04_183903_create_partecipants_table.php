<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartecipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partecipants', function (Blueprint $table) {
            $table->id();
            $table->date('birth_date');
            $table->text('country')->nullable();
            $table->text('title')->nullable();
            $table->string('mobile')->unique();
            $table->text('organization')->nullable();
            $table->string('position', 25)->nullable();
            $table->text('first_name');
            $table->text('last_name');
            $table->timestamp('added_at');
            $table->timestamp('last_edit_at')->nullable();
        });

        Schema::table('partecipants', function ($table) {
            $table->softDeletes($column = 'deleted_at', $precision = 0)->after('position');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partecipants');
    }
    
}
