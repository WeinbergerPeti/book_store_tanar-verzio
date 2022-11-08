<?php

use App\Models\Lending;
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
        Schema::create('lendings', function (Blueprint $table) 
        {
            // $table->primary(["user_id", "copy_id", "start"]);
            $table->id("lending_id");
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("copy_id")->references("copy_id")->on("copies");
            $table->date("start");
            $table->timestamps();
        });

        Lending::create(["user_id"=>4, "copy_id"=>6, "start"=>"2022-10-25"]);
        Lending::create(["user_id"=>5, "copy_id"=>5, "start"=>"2022-10-22"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lendings');
    }
};
