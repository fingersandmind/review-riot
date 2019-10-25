<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('logo');
            $table->string('logo_title');
            $table->boolean('is_toggled')->default(false);
            $table->string('company_name')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['logo', 'logo_title', 'company_name', 'email', 'url', 'phone']);
        });
    }
}
