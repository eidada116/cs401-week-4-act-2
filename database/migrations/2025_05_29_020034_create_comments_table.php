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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('content of comment');
            $table->string('reviewer_name')->comment('name of reviewer of comment');
            $table->string('reviewer_email')->comment('email of reviewer of comment');
            $table->boolean('is_hidden')->comment('if comment is hidden or not')->default(false);
            $table->timestamps('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
