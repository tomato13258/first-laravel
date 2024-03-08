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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('書名');
            $table->string('auther')->comment('作者');
            $table->string('translator')->nullable()->comment('譯者');
            $table->string('publish')->nullable()->comment('出版社');
            $table->string('ISBN')->comment('ISBN');
            $table->longText('pic')->nullable()->comment('圖片');
            $table->intger('book_status')->default(0)->comment('書本狀態(可借閱、不可借閱、已遺失)');
            $table->number('location')->comment('書籍位置');
            $table->date('in_storage')->comment('入庫時間');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
