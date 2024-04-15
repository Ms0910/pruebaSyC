<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Solicitud') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <form method="POST" action="" class="max-w-sm mx-auto">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="tipodoc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de documento :</label>
                        <input type="text" name="tipodoc" id="tipodoc" value="{{ old('tipodoc', $participante->tipodoc) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento :</label>
                        <input type="text" name="documento" id="documento" value="{{ old('documento', $participante->documento) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre :</label>
                        <input type="text" name="fullname" id="fullname" value="{{ old('fullname', $participante->fullname) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="fechanac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento :</label>
                        <input type="text" name="fechanac" id="fechanac" value="{{ old('fechanac', $participante->fechanac) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion :</label>
                        <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $participante->direccion) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono :</label>
                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $participante->telefono) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email :</label>
                        <input type="text" name="email" id="email" value="{{ old('email', $participante->email) }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                        <div class="mb-5">
                            <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Archivo cargado :</label>                        
                                @php
                                    $nombreArchivo = basename($participante->archivo);
                                @endphp
                                @if (pathinfo($nombreArchivo, PATHINFO_EXTENSION) === 'pdf')
                                    <embed src="{{ asset('archivos/' . $nombreArchivo) }}" type="application/pdf" width="100%" height="600px" />
                                @else
                                    <img src="{{ asset('archivos/' . $nombreArchivo) }}" alt="Archivo" style="max-width: 100%; max-height: 600px;">
                                @endif                        
                        </div>
                    <br>
                    <a href="{{ route('participantes.edit', ['participante' => $participante->id,'estado' => 4]) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">APROBAR</a>
                    <a href="{{ route('participantes.edit', ['participante' => $participante->id,'estado' => 5]) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">DENEGAR</a>
                    <a href="{{ route('participantes.index') }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">ATRAS</a>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>