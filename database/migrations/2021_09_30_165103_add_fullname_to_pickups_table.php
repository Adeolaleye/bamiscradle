<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFullnameToPickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pickups', function (Blueprint $table) {
            $table->string('user_id')->nullable();
            $table->string('pickup_name_1')->nullable();
            $table->string('pickup_phone_1')->nullable();
            $table->string('pickup_email_1')->nullable();
            $table->string('pickup_address_1')->nullable();
            $table->string('pickup_picture_1')->nullable();
            $table->string('pickup_name_2')->nullable();
            $table->string('pickup_phone_2')->nullable();
            $table->string('pickup_email_2')->nullable();
            $table->string('pickup_address_2')->nullable();
            $table->string('pickup_picture_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pickups', function (Blueprint $table) {
            $table->dropColumn([
                'user_id',
                'pickup_name_1',
                'pickup_phone_1',
                'pickup_email_1',
                'pickup_address_1',
                'pickup_picture_1',
                'pickup_name_2',
                'pickup_phone_2',
                'pickup_email_2',
                'pickup_address_2',
                'pickup_picture_2',
            ]);
        });
    }
}
