<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1) Widen the enum to a string so we can support 'scheduled' alongside 'draft' and 'published'.
        //    Using a temporary column shuffle keeps this portable across MySQL/SQLite.
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('status_new', 20)->default('draft')->after('status');
        });

        DB::table('blog_posts')->update(['status_new' => DB::raw('status')]);

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->renameColumn('status_new', 'status');
        });

        // 2) Reset every existing blog post back to draft per the user's request.
        DB::table('blog_posts')->update([
            'status'       => 'draft',
            'published_at' => null,
        ]);
    }

    public function down(): void
    {
        // Bring the enum back. Any 'scheduled' rows fall back to 'draft' to satisfy the enum.
        DB::table('blog_posts')->where('status', 'scheduled')->update(['status' => 'draft']);

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->enum('status_old', ['draft', 'published'])->default('draft')->after('status');
        });

        DB::table('blog_posts')->update(['status_old' => DB::raw('status')]);

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('blog_posts', function (Blueprint $table) {
            $table->renameColumn('status_old', 'status');
        });
    }
};
