<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer("customer_id"); //Foreign Key
            $table->integer("amount");
            $table->string("status"); //Typically contain one character. Could be billed, paid, void (for mistake)
            $table->dateTime("billed_date");
            $table->dateTime("paid_date")->nullable(); //Nullable allows it to contain null value
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
        Schema::dropIfExists('invoices');
    }
}
