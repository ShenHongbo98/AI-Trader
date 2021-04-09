<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('portfolio_id');
            $table->unsignedTinyInteger('type');
            $table->unsignedBigInteger('from_coin_id')->nullable();
            $table->unsignedDecimal('from_amount', 21, 9)->nullable();
            $table->unsignedBigInteger('to_coin_id')->nullable();
            $table->unsignedDecimal('to_amount', 21, 9)->nullable();
            $table->timestamp('date');
            $table->text('notes')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('portfolio_id')
                ->references('id')
                ->on('portfolios')
                ->onDelete('cascade');

            $table->foreign('from_coin_id')
                ->references('id')
                ->on('coins')
                ->onDelete('cascade');

            $table->foreign('to_coin_id')
                ->references('id')
                ->on('coins')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
