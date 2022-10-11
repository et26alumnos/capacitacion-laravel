<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Mostrar listado de materias.
     *
     * @param int $pages
     * @return \Illuminate\Http\Response
     */
    public function index($enum = 25)
    {
        if($enum % 5 != 0 || !($enum >= 5 && $enum <= 100)){
            $enum = 25;
        }

        $data['subjects'] = Subject::
            where('deleted_at', 'NULL')
            ->paginate($enum);

        return view('subject.index', ['data' => $data]);
    }

    /**
     * Mostrar la vista para crear nueva materia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Almacenar una nueva materia.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjectData = request()->except('_token'); // Se excluye la clave '_token' de la petición post

        Subject::insert($subjectData);

        return $this->index();
    }

    /**
     * Mostrar una materia en específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);

        return view('subject.index', $id);
    }

    /**
     * Mostrar la vista para editar una materia.
     *
     * @param  \App\Models\Subject  $subject
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);

        return view('subject.edit', compact('subject'));
    }

    /**
     * Actualizar una materia en específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newData = request() -> except(['_token', '_method']);
        Subject::where('id', $id)
        ->update($newData);

        return $this->edit($id);
    }

    /**
     * Eliminar una materia en específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect('subject/');
    }
}
