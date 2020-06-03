<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEcommerceArticlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecommerce_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article');
            $table->string('description');
            $table->string('prix_achat');
            $table->string('prix_vente');
            $table->string('quantite');
            $table->string('category');
            $table->string('images');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ecommerce_articles');
    }
}
