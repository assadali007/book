<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('title', 250)->change();
            $table->unsignedBigInteger('publisher_id');
            $table->foreign('publisher_id')->references( 'id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
          $table->dropForeign('books_publisher_id_foreign');
          $table->dropColumn('publisher_id');
           $table->dropColumn('title');

        });
    }
}
