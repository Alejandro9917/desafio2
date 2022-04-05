<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre producto</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Existencias</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
            </tr>
          </thead>
          <tbody id="table_products" class="bg-white divide-y divide-gray-200">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    getProducts();
  });
  
  //Función para obtener los datos de los tags
  function getProducts(){
    $.ajax({
      url: "/desafio2/admin/products/getProducts",
      method: "GET"
    }).done(function(res){
      var response = res;
      printProducts(response);
    });
  }

  //Función para pintar las tarjetas con los datos
  function printProducts(products){
    products.map(function(product){
      $("#table_products").append(
        "<tr>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" +
            "<div class='flex-shrink-0 h-10 w-10'><img class='h-10 w-10 rounded-full' src='" + product.image + "' title='source: imgur.com'  alt=''></div>" +
            "<div class='ml-4'><div class='text-sm font-medium text-gray-900'>" + product.id + "</div></div>" +
          "</td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + product.name + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + product.price + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + product.stock + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><a href='/desafio2/admin/products/delete/" + product.id + "' class='text-red-600 hover:text-red-900'>Delete</a></td>" +
        "</tr>"
      );
    });
  }
</script>