<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->boolean('status')->default(false);
            $table->string('confirmation_code')->nullable();

            $table->string('company_position')->nullable()->default(null);
            $table->string('mobile_number')->nullable()->default(null);
            $table->string('firm_code')->nullable()->default(null);

            $table->string('code')->nullable()->default(null);
            $table->string('firm_name')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('suburb')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('postcode')->nullable()->default(null);
            $table->string('firm_website')->nullable()->default(null);
            $table->string('firm_phone')->nullable()->default(null);
            $table->integer('tokens_available')->default(0);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
