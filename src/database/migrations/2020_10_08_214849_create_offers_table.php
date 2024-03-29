<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seo_id')
                ->unique()
                ->constrained('seo')
                ->cascadeOnDelete();
            $table->foreignId('offer_category_id')
                ->nullable()
                ->constrained('offer_category')
                ->nullOnDelete();
            $table->foreignId('gallery_id')
                ->nullable()
                ->constrained('gallery')
                ->nullOnDelete();
            $table->string('title', 255);
            $table->text('lead')
                ->nullable();
            $table->string('price_min')
                ->nullable();
            $table->boolean('price_min_label_active')
                ->default(false);

            $table->string('price_average')
                ->nullable();
            $table->boolean('price_average_label_active')
                ->default(false);

            $table->string('price_max')
                ->nullable();
            $table->boolean('price_max_label_active')
                ->default(false);

            $table->mediumText('text')
                ->nullable();
            $table->string('lang', 10);
            $table->bigInteger('position')
                ->default(0);
            $table->boolean('active')
                ->default(false);
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
        Schema::dropIfExists('offer');
    }
}
