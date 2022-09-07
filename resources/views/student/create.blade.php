<!-- Form para creación de alumno -->
@php
$inputs = [
    json_encode([
        'label' => 'Nombre:',
        'name' => 'name',
        'type' => 'text',
    ]),
    json_encode([
        'label' => 'Apellido:',
        'name' => 'surname',
        'type' => 'text',
    ]),
    json_encode([
        'label' => 'DNI:',
        'name' => 'dni',
        'type' => 'text',
        'maxlength' => '8',
    ]),
    json_encode([
        'label' => 'Fecha de ingreso:',
        'name' => 'enrolled_at',
        'type' => 'text',
        'maxlength' => '8',
    ]),
    json_encode([
        'label' => 'Cursando en:',
        'name' => 'studying_in',
        'type' => 'date',
        'options' => ['6to 12°', '5to 10°', '4to 12°', '3ro 7°', '2do 6°', '1ro 1°'],
    ]),
];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <!-- Importando Tailwindcss -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="text-dark w-5/6 md:w-3/4 lg:w-1/2 mx-auto text-start mt-4">
        <form action="{{ url('/student') }}" method="post"
            class="w-full  border-solid border-2 border-neutral-200 rounded-lg p-8 text-start  space-y-8">
            @csrf
            <div>
                <h2 class="font-medium text-3xl">Ingresar nuevo alumno:<h2>
            </div>
            <div class="flex flex-col justify-center space-y-4">
                <label for="name" class="text-dark font-normal">Nombre:</label>
                <input type="text" name="name" id="name" autocomplete="off"
                    class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                    required />
            </div>

            <div class="flex flex-col justify-center space-y-4">
                <label for="surname" class="text-dark font-normal"">Apellido:</label>
                <input type=" text" name="surname" id="surname" autocomplete="off"
                    class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                    required />
            </div>

            <div class="flex flex-col justify-center space-y-4">
                <label for="dni" class="text-dark font-normal">DNI:</label>
                <input type=" text" name="dni" id="dni" autocomplete="off" maxlength="8"
                    class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                    required />
            </div>

            <div class="flex flex-col justify-center space-y-4">
                <label for="enrolled_at" class="text-dark font-normal"">Fecha de ingreso:</label>
                <input type="date" max="{{ date('d-m-y h:i:s') }}" name="enrolled_at" id="enrolled_at"
                    autocomplete="off"
                    class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                    required />
            </div>

            <div class="flex flex-col justify-center space-y-4">
                <label for="studying_in" class="text-dark font-normal"">Cursando en:</label>
                <select
                    class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                    name="studying_in" id="studying_in" required>
                    <option value="" disabled selected>Eliga una opción...</option>
                    <option value="6to 12°">6to 12°</option>
                    <option value="5to 10°">5to 10°</option>
                    <option value="4to 12°">4to 12°</option>
                    <option value="3ro 7°">3ro 7°</option>
                    <option value="2do 6°">2do 6°</option>
                    <option value="1ro 1°">1ro 1°</option>
                </select>
            </div>

            <div>
                <input type="submit" id="submit" value="Insertar"
                    class="w-40 bg-indigo-600 p-2 text-lg rounded-lg hover:bg-indigo-700 transition duration-300 cursor-pointer text-white">
            </div>

        </form>
    </div>
</body>

</html>
