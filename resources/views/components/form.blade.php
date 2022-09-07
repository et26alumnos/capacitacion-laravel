<form action="{{ $action }}" method="{{ $method }}"
    class="w-full  border-solid border-2 border-neutral-200 rounded-lg p-8 text-start  space-y-8">
    <div>
        <h2 class="font-medium text-3xl">Ingresar alumno:<h2>
    </div>
    @foreach ($inputs as $input)
        @switch($input->type)
            @case('email')
            @case('password')

            @case('date')
            @case('text')
                <div class="flex flex-col justify-center space-y-4">
                    @if (isset($input->label))
                        <label for="{{ $input->name }}" class="text-dark font-normal">{{ $input->label }}</label>
                    @endif
                    <input type="{{ $input->type }}" name="{{ $input->name }}" id="{{ $input->name }}"
                        @if ($input->type == 'text' || $input->type == 'password') autocomplete="off"
                            @else
                            autocomplete="on" @endif
                        @if (isset($input->placeholder)) placeholder="{{ $input->placeholder }}" @endif
                        @if (isset($input->maxlength)) maxlength="{{ $input->maxlength }}" @endif
                        @if ($input->type == 'date') max="{{ date('d-m-y h:i:s') }}" @endif
                        class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                        required />
                </div>
            @break

            @case('select')
                <div class="flex flex-col justify-center space-y-4">
                    <label for="{{ $input->name }}" class="text-dark font-normal">{{ $input->label }}</label>
                    <select
                        class="w-3/4 rounded-lg bg-neutral-200 py-2 px-1 focus:outline-none focus:ring focus:border-blue-500"
                        name="studying_in" id="studying_in" required>
                        @foreach ($options as $index => $option)
                            @if ($index == 0)
                                <option value="" disabled selected>Elija una opción...</option>
                            @else
                                <option value="{{ $option }}">"{{ $option }}"</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            @break

            @default
        @endswitch
    @endforeach
    <div>
        <input type="submit" id="submit" value="Insertar"
            class="w-40 bg-indigo-600 p-2 text-lg rounded-lg hover:bg-indigo-700 transition duration-300 cursor-pointer text-white">
    </div>
</form>
