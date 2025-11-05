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
        Schema::create('employee_face', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->integer('display_order')->nullable();
            $table->longText('face_embedding')->nullable();
            $table->timestamp('register_on')->useCurrent()->nullable();
            $table->string('employee_number', 50)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('department', 255)->nullable();
            $table->longText('employee_photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_face');
    }
};
