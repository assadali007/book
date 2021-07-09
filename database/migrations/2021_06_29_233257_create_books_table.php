<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('auto increment as a primary key of the table');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();

           
        });
        Schema::create('publishers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();

           
        });
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('title',30);
            $table->integer('pages_count');
            $table->text('description');
            $table->timestamps();
       


        });
        Schema::table('books', function(Blueprint $table) {
            // creating the index on the title column... 
            $table->index('title');
          // creating the foreign key... 
         $table->unsignedBigInteger('author_id'); 
          $table->foreign('author_id')->references('id')->on('authors');
});
     
       
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();

           
        });
    
        Schema::create('book_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('book_id')->references( 'id')->on('books');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        Schema::dropIfExists('book_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('books');
        Schema::dropIfExists('publishers');
        Schema::dropIfExists('authors');
        
        
        
    }
}