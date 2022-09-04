<!-- Form para creación de alumno -->
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
    <div class="text-white w-5/6 md:w-3/4 lg:w-1/2 mx-auto text-start mt-4">
        <h2 class="font-semibold text-3xl p-4 bg-gray-800 w-fit rounded-t-lg">Ingresar alumno:<h2>
                <form action="" method="post" class="w-full border-gray-800 border-solid border-2 rounded-r-lg rounded-b-lg p-8 text-start bg-gray-800 space-y-8">
                    <div class="flex flex-col justify-center space-y-4">
                        <label for="name" class="text-white font-semibold">Nombre:</label>
                        <input type="text" name="name" autocomplete="off" class="w-3/4 rounded-lg bg-gray-700 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500" required />
                    </div>
                    <div class="flex flex-col justify-center space-y-4">
                        <label for="surname" class="text-white font-semibold"">Apellido:</label>
                <input type=" text" name="surname" autocomplete="off" class="w-3/4 rounded-lg bg-gray-700 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500" required />
                    </div>
                    <div class="flex flex-col justify-center space-y-4">
                        <label for="dni" class="text-white font-semibold"">DNI:</label>
                <input type=" text" name="dni" autocomplete="off" class="w-3/4 rounded-lg bg-gray-700 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500" required />
                    </div>
                    <div class="flex flex-col justify-center space-y-4">
                        <label for="enrolled_at" class="text-white font-semibold"">Fecha de ingreso:</label>
                <input type=" text" name="enrolled_at" autocomplete="off" class="w-3/4 rounded-lg bg-gray-700 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500" required />
                    </div>
                    <div class="flex flex-col justify-center space-y-4">
                        <label for="studying_in" class="text-white font-semibold"">Cursando en:</label>
                <!-- <input type=" select" name="studying_in" autocomplete="off" class="w-3/4 rounded-lg bg-gray-700 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500" /> -->
                        <select class="w-3/4 rounded-lg bg-gray-700 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500" name="studying_in" required>
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
                        <input type="submit" id="submitButton" value="Insertar" class="w-40 bg-indigo-600 p-2 text-lg rounded-lg hover:bg-indigo-700 transition duration-300 cursor-pointer">
                    </div>
                </form>
    </div>
</body>

</html>