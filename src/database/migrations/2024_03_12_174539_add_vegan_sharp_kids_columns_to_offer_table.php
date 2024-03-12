<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVeganSharpKidsColumnsToOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offer', function (Blueprint $table) {
            $table->boolean('vegan_active')->default(false)->after('price_max_label_active');
            $table->boolean('sharp_active')->default(false)->after('vegan_active');
            $table->boolean('kids_active')->default(false)->after('sharp_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offer', function (Blueprint $table) {
            $table->dropColumn(['vegan_active', 'sharp_active', 'kids_active']);
        });
    }
}
