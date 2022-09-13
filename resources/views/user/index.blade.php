<!-- Mostrar lista de usuarios -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Ver usuarios</title>
        <!-- Importando Tailwindcss -->
        @vite('resources/css/app.css')
</head>
<body>
    <div class="w-100">
        <table class="w-5/6 bg-gray-200 mx-auto mt-12 rounded-lg text-center">
            <thead>
                @foreach ($columns as $column)
                    <th class="font-semibold py-2">
                        {{ $column }}
                    </th>
                @endforeach
{{--                     <th class="font-semibold py-2">
                        Acciones
                    </th> --}}
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr class="bg-gray-100 border-b-gray-200 border border-solid">
                        @foreach (json_decode($user) as $item)
                            <td class="py-2">{{ $item }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <pre>
    </pre>
</body>
</html>