<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre usuario</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tiempo</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            <?php /* foreach($datasource->children() as $product){ */ ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900"><?php /* echo $product->name */ ?></div>
                        <div class="text-sm text-gray-500"><?php /* echo $product->category */ ?></div>
                    </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-<?php /* if($product->stock > 0){echo 'green';} else{echo 'red';} */ ?>-100 
                                                                                         text-<?php /* if($product->stock > 0){echo 'green';} else{echo 'red';} */ ?>-800"> 
                    <?php /* if($product->stock > 0){echo 'Active';} else{echo 'Inactivo';} */ ?> 
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
              </td>
            </tr>
            <?php //} ?>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>