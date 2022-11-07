<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FreeIssue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('product_name');
            $table->string('qty');
            $table->string('free_qty');
            $table->string('lower_limit');
            $table->string('upper_limit');
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
        Schema::dropIfExists('free_issues');
    }
}
