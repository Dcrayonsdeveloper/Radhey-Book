<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('redirects', function (Blueprint $table) {
            $table->id();
            $table->string('from_path', 500)->unique();   // "/lord-exchange"
            $table->string('to_path', 500);                // "/lords-exchange-id" or any absolute URL
            $table->unsignedSmallInteger('status_code')->default(301);
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('hits')->default(0);
            $table->timestamps();
        });

        // Seed the initial redirect the user requested.
        // The matching slug + route rename lives in a sibling migration.
        DB::table('redirects')->insert([
            'from_path'   => '/lord-exchange',
            'to_path'     => '/lords-exchange',
            'status_code' => 301,
            'is_active'   => true,
            'hits'        => 0,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('redirects');
    }
};
