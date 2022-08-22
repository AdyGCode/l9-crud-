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
        // Add country code
        Schema::table('companies', function (Blueprint $table) {
            $table->string('country_code',3)->before('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove country code
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('country_code');
        });
    }
};
