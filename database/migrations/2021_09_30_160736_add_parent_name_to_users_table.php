<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentNameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('p_name')->nullable();
            $table->string('address')->nullable();
            $table->string('place_of_work')->nullable();
            $table->string('place_of_work_address')->nullable();
            $table->string('service')->nullable();
            $table->string('disability')->nullable();
            $table->string('specify_dis')->default('none');
            $table->string('who_to_call_name')->nullable();
            $table->string('who_to_call_phone')->nullable();
            $table->string('who_to_call_email')->nullable();
            $table->string('who_to_call_address')->nullable();
            $table->string('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
            'dob',
            'gender',
            'age',
            'phone',
            'p_name',
            'address',
            'place_of_work',
            'place_of_work_address',
            'service',
            'disability',
            'specify_dis',
            'who_to_call_name',
            'who_to_call_phone',
            'who_to_call_email',
            'who_to_call_address',
            ]);
        });
    }
}
