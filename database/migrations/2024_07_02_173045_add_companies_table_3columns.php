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
        Schema::table('companies', function (Blueprint $table) {
            $table->string('company_name')->nullable()->after('id');
            $table->string('street_address')->nullable()->after('company_name');
            $table->string('representative_name')->nullable()->after('street_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('street_address');
            $table->dropColumn('representative_name');
        });
    }
};
