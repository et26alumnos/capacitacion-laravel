<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_section', function (Blueprint $table) {
      $table->foreignId('section_id')
        ->constrained('sections')
        ->cascadeOnUpdate()
        ->cascadeOnDelete();

      $table->foreignId('user_id')
        ->constrained('users')
        ->cascadeOnUpdate()
        ->cascadeOnDelete();
      $table->year('current_year');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('user_section');
  }
};
