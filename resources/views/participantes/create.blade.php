<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
            <form method="POST" action="{{ route('participantes.store') }}" class="max-w-sm mx-auto" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <label for="tipodoc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de documento :</label>
                                <select name="tipodoc" id="tipodoc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option value="CC">C.C (Cédula de ciudadanía)</option>
                                    <option value="CE">C.E (Cédula de extranjería)</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento :</label>
                                <input type="text" name="documento" id="documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-5">
                                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo :</label>
                                <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-5">
                                <label for="fechanac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de nacimiento :</label>
                                <input type="date" name="fechanac" id="fechanac" max="..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-5">
                                <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección :</label>
                                <input type="text" name="direccion" id="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-5">
                                <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono :</label>
                                <input type="number" name="telefono" id="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email :</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="mb-5">
                                <label for="archivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cargar documento :</label>
                                <input type="file" name="archivo" id="archivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <br>
                            <button type="submit" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">REGISTRARME</button>
                        </form>
            </div>
        </div>
    </div>
    <script>
        var fechaActual = new Date();
        var fechaHace18Anios = new Date(fechaActual.getFullYear() - 18, fechaActual.getMonth(), fechaActual.getDate());
        var fechaMaxima = fechaHace18Anios.toISOString().split('T')[0];
        document.getElementById("fechanac").max = fechaMaxima;
    </script>

</x-app-layout>
