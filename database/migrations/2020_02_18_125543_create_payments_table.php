<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('children_id');
            $table->unsignedBigInteger('branch_id');
            $table->text('description');
            $table->boolean('paid');
            $table->float('price');
            $table->timestamps();

            $table->foreign('children_id')
                ->references('id')
                ->on('childrens')
                ->onDelete('cascade');

            $table->foreign('branch_id')
                ->references('id')
                ->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
