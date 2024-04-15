<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Participantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">                    
                        <div class="mb-4">
                            <a href="{{ route('participantes.create') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Registrar</a>
                        </div>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">FECHA DE INSCRIPCION</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">PARTICIPANTE</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ESTADO</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">VALIDAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($participantes as $participante)
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $participante->created_at }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $participante->fullname }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $participante->estado->estado }}</td>


                                    <td class="border px-4 py-2 text-center">
                                        <div class="flex justify-center">
                                            <a href="{{ route('participantes.show', $participante->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">📙</a>
                                            

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                   
                </div>                  
             </div>
        </div>
    </div>
</x-app-layout>
