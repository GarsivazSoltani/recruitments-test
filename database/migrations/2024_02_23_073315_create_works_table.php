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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // (نوع استخدام (عمومی | اختصاصی
            $table->string('title'); // عنوان شغل
            $table->text('definition'); // تعریف شغل
            $table->text('task'); // وظایف شغل
            $table->text('educations'); // تحصیلات
            $table->text('certificate'); // رشته و گرایش
            $table->text('skill'); // مهارت
            $table->text('cours'); // دوره‌های آموزشی
            $table->text('personality'); // ویژگی‌های شخصیتی و رفتاری
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
