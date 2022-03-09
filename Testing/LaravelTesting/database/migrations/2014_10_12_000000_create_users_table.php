<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('users', function (Blueprint $table) {
            $table->id("user_id");
            $table->string('name',51)->nullable(false);
            $table->string('email',100)->unique("user_email_uk")->nullable(false);
            $table->string('phone_num',80)->unique("user_phone_num_uk")->nullable(false);
            $table->string('password',85);
            $table->boolean("isAdmin")->default(false);
            $table->timestamp('email_verified_at')->nullable();
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
};
