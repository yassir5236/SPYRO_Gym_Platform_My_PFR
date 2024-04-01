<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string('duration'); // durée en mois, par exemple
            $table->string('type');
            $table->text('advantage_1')->nullable();
            $table->text('advantage_2')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}