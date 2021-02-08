<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer( 'category_id' )->unsigned();
            $table->integer( 'sub_category_id' )->unsigned();
            $table->string( 'product_name' );
            $table->tinyInteger( 'in_stock' )->default( 1 );
            $table->tinyInteger( 'status' )->default( 0 );
            $table->text('description')->nullable();
            $table->text( 'image_1' );
            $table->text( 'image_2' );
            $table->text( 'image_3' );
            $table->text( 'image_4' );

            $table->softDeletes();
            $table->timestamps();

            $table->foreign( 'category_id' )
            ->references( 'id' )->on( 'categories' )
            ->onDelete( 'cascade' )
            ->onUpdate( 'cascade' );
            $table->foreign( 'sub_category_id' )
            ->references( 'id' )->on( 'sub_categories' )
            ->onDelete( 'cascade' )
            ->onUpdate( 'cascade' );

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
