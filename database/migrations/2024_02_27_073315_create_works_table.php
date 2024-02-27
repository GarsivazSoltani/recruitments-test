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
            $table->string('title'); // عنوان شغل
            $table->text('definition'); // تعریف شغل
            $table->text('task'); // وظایف شغل
            $table->text('educations'); // تحصیلات و گرایش مورد نیاز
            $table->text('certificate'); // گواهینامه و گرایش
            $table->text('skill'); // مهارت
            $table->text('cours'); // دوره‌های آموزشی
            $table->text('personality'); // ویژگی‌های شخصیتی و رفتاری
            $table->string('type'); // (نوع استخدام (عمومی | اختصاصی
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
