<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('role_title')->unique('roles_uk')->nullable(false);
            $table->timestamps();
        });
        DB::table('roles')->insert([
            ["id"=>1,"role_title"=>"admin"],
            ["id"=>2,"role_title"=>"assistant"],
            ["id"=>3,"role_title"=>"user"],
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
