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
        Schema::table('products', function (Blueprint $table) {

            $table->foreign('company_id')->references('id')->on('companies');
            
            $table->unsignedBigInteger('company_id')->nullable()->after('id');
            $table->string('product_name')->nullable()->after('company_id');
            $table->integer('price')->nullable()->after('product_name');
            $table->integer('stock')->nullable()->after('price');
            $table->text('comment')->nullable()->after('stock');
            $table->string('img_path')->nullable()->after('comment');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropForeign('products_company_id_foreign');
            
            $table->dropColumn('company_id');
            $table->dropColumn('product_name');
            $table->dropColumn('price');
            $table->dropColumn('stock');
            $table->dropColumn('comment');
            $table->dropColumn('img_path');
        });
    }
};
