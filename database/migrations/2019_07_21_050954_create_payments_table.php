<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->float('amount',8,2);
            $table->enum('plan', ['Basic', 'Premium'])->default('Basic');
            $table->string('charge_id')->collation('utf8mb4_bin');
            $table->string('stripe_id')->comment('customer stripe id')->collation('utf8mb4_bin'); // for now we will store             
            $table->integer('quantity');
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
        Schema::dropIfExists('payments');
    }
}
