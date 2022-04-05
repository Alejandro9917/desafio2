<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre usuario</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre completo</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
            </tr>
          </thead>
          <tbody id="table_users" class="bg-white divide-y divide-gray-200">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    getUsers();
  });
  
  //Función para obtener los datos de los tags
  function getUsers(){
    $.ajax({
      url: "/desafio2/admin/users/getUsers",
      method: "GET"
    }).done(function(res){
      var response = res;
      printUsers(response);
    });
  }

  //Función para pintar las tarjetas con los datos
  function printUsers(users){
    users.map(function(user){
      $("#table_users").append(
        "<tr>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'>" +
            "<div class='ml-4'><div class='text-sm font-medium text-gray-900'>" + user.id + "</div></div>" +
          "</td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + user.user + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + user.name + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><div class='flex items-center'><div class='ml-4'>" +
            "<div class='text-sm font-medium text-gray-900'>" + user.email + "</div>" +
          "</div></div></td>" +
          "<td class='px-6 py-4 whitespace-nowrap'><a href='/desafio2/admin/products/delete/" + user.id + "' class='text-red-600 hover:text-red-900'>Delete</a></td>" +
        "</tr>"
      );
    });
  }
</script>