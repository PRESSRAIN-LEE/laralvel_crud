<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBoards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    //테이블 생성
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('contents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  //테이블 삭제
    {
        Schema::dropIfExists('boards');
    }
}
