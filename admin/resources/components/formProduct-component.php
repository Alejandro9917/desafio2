<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="/desafio2/admin/products/store" method="POST">
        <?php 
          if(isset($errors)){
            var_dump($errors);
          }
        ?>
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre de producto</label>
                        <input type="text" name="name" id="name" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="Nombre del producto">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id" class="block text-sm font-medium text-gray-700">Código de producto</label>
                        <input type="text" name="id" id="id" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="PROD#####">
                    </div>
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700"> Descripción </label>
                    <div class="mt-1">
                    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                    </textarea>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="id_category" class="block text-sm font-medium text-gray-700">Categoría</label>
                    <select id="id_category" name="id_category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </select>
                </div>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">Precio de producto</label>
                        <input type="text" name="price" id="price" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="###.##">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="stock" class="block text-sm font-medium text-gray-700">Existencias de producto</label>
                        <input type="text" name="stock" id="stock" 
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        placeholder="#####">
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="image" class="block text-sm font-medium text-gray-700">URL de imagen de producto</label>
                    <input type="text" name="image" id="image" 
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="https://i.imgur.com/r6AJm0U.png">
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

<script type="text/javascript">
  $(document).ready(function() {
    getCategories();
  });
  
  //Función para obtener los datos de los tags
  function getCategories(){
    $.ajax({
      url: "/desafio2/admin/categories/getCategories",
      method: "GET"
    }).done(function(res){
      var response = res;
      printCategories(response);
    });
  }

  //Función para pintar las tarjetas con los datos
  function printCategories(categories){
    categories.map(function(category){
      $("#id_category").append(
        "<option value='" + category.id + "'>" + category.name + "</option>"
      );
    });
  }
</script>