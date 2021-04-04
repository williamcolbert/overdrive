<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dealership_id');
            $table->unsignedBigInteger('service_type_id');

            $table->string('vin','17');
            $table->date('service_date');
            $table->decimal('price', 6, 2, true);
            $table->string('ro');
            $table->string('po');
            $table->decimal('flat_rate_hours', 6, 2, true);

            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::dropIfExists('services');
    }
}
