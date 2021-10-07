<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GrindDistributions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grind_distributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grinder_configuration');
            $table->string('grinder_setting');
            $table->longText('notes')->nullable();
            $table->integer('um_0');
            $table->integer('um_200')->nullable();
            $table->integer('um_300')->nullable();
            $table->integer('um_400')->nullable();
            $table->integer('um_500')->nullable();
            $table->integer('um_600')->nullable();
            $table->integer('um_700')->nullable();
            $table->integer('um_800')->nullable();
            $table->integer('um_900')->nullable();
            $table->integer('um_1000')->nullable();
            $table->integer('um_1100')->nullable();
            $table->integer('um_1200')->nullable();
            $table->integer('um_1300')->nullable();
            $table->integer('um_1400')->nullable();
            $table->integer('um_1500')->nullable();
            $table->integer('um_1600')->nullable();
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
        Schema::dropIfExists('grind_distributions');
    }
}
