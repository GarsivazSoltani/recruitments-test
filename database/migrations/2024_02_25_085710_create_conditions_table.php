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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('job_title'); // عنوان شغلی
            $table->string('field_of_study'); // رشته تحصیلی
            $table->string('orientation'); // گرایش
            $table->string('grade'); // مقطع تحصیلی
            $table->string('state'); // استان
            $table->string('city')->nullable(); // شهر
            $table->string('capacity'); // ظرفیت
            $table->bigInteger('recruitment_id')->unsigned();
            $table->foreign('recruitment_id')->references('id')->on('recruitments')->onDelete('cascade');
            $table->bigInteger('work_id')->unsigned();
            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditions');
    }
};
