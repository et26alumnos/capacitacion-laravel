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
        /* Tabla usuarios */
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('old_id')->after('id')->nullable();
            $table->string('last_name')->after('old_id');
            $table->renameColumn('name', 'first_name');
            $table->softDeletes();
        });

        /* Tabla divisiones */
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('school_year');
            $table->string('name', 10);
            $table->enum('turn', ['Mañana', 'Tarde', 'Noche']);
            $table->timestamps();
            $table->softDeletes();
        });

        /* Tabla materias */
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->timestamps();
            $table->softDeletes();
        });

        /* Tabla division_usuario */
        Schema::create('section_user', function (Blueprint $table) {
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedSmallInteger('year');
            $table->unique(['user_id', 'year']);
            $table->timestamps();
        });

          /* Tabla division_materias */
          Schema::create('section_subject', function (Blueprint $table) {
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            $table->unique(['section_id', 'subject_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        /* Tabla calificaciones */
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('year');
            $table->string('annual', 10)->nullable();
            $table->string('december', 10)->nullable();
            $table->string('february', 10)->nullable();
            $table->string('final', 10)->nullable();
            $table->string('due_subject', 10)->nullable();
            $table->date('due_subject_date')->nullable();
            $table->timestamps();
            $table->unique(['user_id', 'subject_id', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->renameColumn('first_name', 'name');
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('sections');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('user_section');
        Schema::dropIfExists('subjects_section');
    }
};
