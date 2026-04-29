<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->boolean('noindex')->default(false)->after('meta_keywords');
            $table->string('canonical_url')->nullable()->after('noindex');
        });

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->boolean('noindex')->default(false)->after('meta_keywords');
            $table->string('canonical_url')->nullable()->after('noindex');
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['noindex', 'canonical_url']);
        });

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn(['noindex', 'canonical_url']);
        });
    }
};
