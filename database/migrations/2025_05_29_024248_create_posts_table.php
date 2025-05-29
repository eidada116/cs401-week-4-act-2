<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Title of a post');
            $table->text('content')->comment('Content of a post');
            $table->string('slug')->comment('Slug of a post');
            $table->timestamp('publication_date')->comment('Publication date of post');
            $table->timestamp('last_modified_date')->comment('Last modified date of a post');
            $table->string('status')->comment('If draft, published, or inactive');
            $table->string('featured_image_url')->comment('image url of post');
            $table->integer('views_count')->comment('view count of post')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
