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
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            // you can specify a user_id whenever a user is logged in.If nobody is logged in,it can be null.
            $table->foreignId('user_id')->nullable()->index();
            // the ip address used to access the page
            $table->string('ip_address', 45)->nullable();
            // the software that presents content to the end users
            $table->text('user_agent')->nullable();
            // portion of transmitted data
            $table->longText('payload');
            // the last time a user did an activity on your page
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
