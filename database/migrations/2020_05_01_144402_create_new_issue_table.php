<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_issue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->intiger('creater id',10);
            $table->string('name', 225);
            $table->date('created date',20);
            $table->intiger('Assigned technician id',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_issue');
    }
}
