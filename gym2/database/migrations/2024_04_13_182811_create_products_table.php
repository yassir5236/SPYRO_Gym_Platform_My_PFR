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
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2); // Prix sous forme décimale (ex: 10.99)
            $table->integer('quantity')->default(0); // Quantité par défaut 0
            $table->unsignedBigInteger('category_id'); // Clé étrangère pour la catégorie
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Contrainte de clé étrangère
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
        Schema::dropIfExists('products');
    }
}

