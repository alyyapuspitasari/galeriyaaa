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
        Schema::table('foto', function (blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('album_id')->references('id')->on('album')->onUpdateCascade()->onDeleteCascade();
        });
        Schema::table('like', function (blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('foto_id')->references('id')->on('foto')->onUpdateCascade()->onDeleteCascade();
        });
        Schema::table('komentar', function (blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('foto_id')->references('id')->on('foto')->onUpdateCascade()->onDeleteCascade();
        });
        Schema::table('album', function (blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
