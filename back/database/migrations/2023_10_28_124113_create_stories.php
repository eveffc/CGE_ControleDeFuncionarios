<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
                $table->id();
    
                $table->unsignedBigInteger('employees_id'); //id do usuário 
                $table->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');
    
                $table->string('cargo');
                $table->integer('salario');
                $table->date('data_promocao');
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
        Schema::dropIfExists('stories');
    }
}
