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
        if (!Schema::hasTable('group_users')) {
            Schema::create('group_users', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('group_id')->unsigned();
                $table->bigInteger('user_id')->unsigned();
                $table->timestamps();

                $table->foreign('group_id')->references('id')->on('groups')->
                onDelete('cascade')
                ->onUpdate('cascade');

                $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('group_users')) {
            Schema::dropIfExists('group_users');
        }
    }
};
