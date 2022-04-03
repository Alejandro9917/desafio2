<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="controllers/addProduct.php" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre de usuario</label>
                        <input type="text" name="name" id="name" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Nombre de usuario">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                        <input type="text" name="id" id="id" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Nombre completo">
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" name="name" id="name" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="example@host.com">
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="name" id="name" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Password">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Repetir password</label>
                        <input type="password" name="name" id="name" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Repetir password">
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
                    <select id="category" name="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Textil</option>
                    <option>Promocional</option>
                    </select>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" 
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Guardar
            </button>
            </div>
        </div>
        </form>
    </div>
</div>