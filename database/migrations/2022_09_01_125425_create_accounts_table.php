<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('accounts', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id');
            $table->increments('account_no')->start_from(3000001);
            $table->unsignedBigInteger('accounts_types_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('account_balance')->default(0);
            $table->unsignedBigInteger('card_type')->default(0);



            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('accounts_types_id')
                    ->references('id')
                    ->on('accounts_types')
                    ->onDelete('cascade');

            $table->foreign('currency_id')
                    ->references('id')
                    ->on('currencies')
                    ->onDelete('cascade');



            $table->timestamps();

        });
        DB::statement("ALTER TABLE accounts AUTO_INCREMENT = 3000001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
