<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    /**
     * Mostrar la lista de alumnos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lol['students'] = Student::paginate(10);
        return  $lol[1];
    }

    /**
     * Mostrar el formulario para insertar un alumno
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Almacenar datos de un nuevo alumno
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newStudentData = request()->except('_token'); // Excluyendo _token de la petición post

        Student::insert($newStudentData);

        return view('studen.index');
    }

    /**
     * Mostrar un alumno X
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Mostrar el formulario para editar un alumno X
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Actualizar un alumno previamente guardado
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * ELiminar un alumno X
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
