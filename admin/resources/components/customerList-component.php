<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre cliente</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Teléfono</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dirección</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
            </tr>
          </thead>
          <tbody id="table_customers" class="bg-white divide-y divide-gray-200">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    getCustomers();
  });
  
  //Función para obtener los datos de los tags
  function getCustomers(){
    $.ajax({
      url: "/desafio2/admin/customers/getCustomers",
      method: "GET"
    }).done(function(res){
      var response = res;
      printCustomers(response);
    });
  }

  //Función para pintar las tarjetas con los datos
  function printCustomers(customers){
    customers.map(function(customer){
      $("#table_customers").append(
        "<tr>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" +
            "<div class='ml-4'><div class='text-sm font-medium text-gray-900'>" + customer.id + "</div></div>" +
          "</td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + customer.name + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + customer.telephone + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + customer.email + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + customer.address + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><a href='/desafio2/admin/products/disable/" + customer.id + "' class='text-yellow-600 hover:text-yellow-900'>Disable</a></td>" +
        "</tr>"
      );
    });
  }
</script>