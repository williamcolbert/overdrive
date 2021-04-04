<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealershipsServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealership_service_type', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('dealership_id');
            $table->unsignedBigInteger('service_type_id');

            $table->decimal('price', 6, 2);
            $table->decimal('flat_rate_hours', 6, 2, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealerships_services');
    }
}
