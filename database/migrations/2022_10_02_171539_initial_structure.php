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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('user')/*->unique()*/;
            $table->timestamps();
            /* 
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            */
        });

        /* Tabla divisiones */
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 10)->unique();
            $table->timestamps();
        });

        /* Tabla materias */
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 75);
            $table->timestamps();
        });

        /* Tabla calificaciones */
        Schema::create('grades', function (Blueprint $table) {
            $table->id();

            $table->foreignId('subject_id')
                ->constrained('subjects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->tinyInteger('annual');

            $table->tinyInteger('december');

            $table->tinyInteger('february');  

            $table->tinyInteger('due_subject');

            $table->date('due_subject_date');  
            
            $table->timestamps();
        });

        /* Tabla division_usuario */
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

          /* Tabla division_materias */
          Schema::create('subjects_section', function (Blueprint $table) {
            // Claves foraneas
            $table->foreignId('section_id')
                ->constrained('sections')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('subject_id')
                ->constrained('subjects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unique(['section_id', 'subject_id']);
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('user_section');
        Schema::dropIfExists('subjects_section');
    }
};
