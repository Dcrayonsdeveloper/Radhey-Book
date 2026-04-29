<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('leads');
    }

    public function down(): void
    {
        // Intentionally no-op. Lead tracking has been removed from the app.
        // If you need to restore it, revert the migration deletions in git history.
    }
};
