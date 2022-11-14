<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',500)->nullable();
            $table->string('slug',500)->nullable();
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->enum('posted',['yes','not'])->default('not');
            $table->integer('estado')->default(1);
            $table->foreignId('category_id')->constrainde()->onDelete('RESTRICT')->onUpdate("RESTRICT");
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
        Schema::dropIfExists('_posts');
    }
};
