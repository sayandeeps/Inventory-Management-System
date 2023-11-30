
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    


<section class="flex  items-center bg-gray-100  font-poppins  :bg-gray-900 ">

        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="flex flex-wrap justify-center -mx-3 pt-11">
            <div class="mb-8 w-full :bg-gray-800">
                        <div class="  flex px-6 py-2 border border-blue-500 rounded-md  :border-gray-700">
                            <input type="text"
                                class="w-full pr-4 text-sm text-gray-700 outline-none   bg-gray-100 placeholder-text-100 "
                                placeholder="search...">
                            <button
                                class="flex items-center text-gray-700  :text-gray-400  :hover:text-blue-300 hover:text-blue-600">
                                <span class="mr-2">Go</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                <div class="w-full px-3 mb-6 lg:px-2 ">
                    <div class="bg-white rounded-md  :bg-gray-800">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-3">
                            <div>
              <label for="category" class="block mb-2 text-sm font-medium text-gray-900 :text-white">Status</label>
                  <!-- <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label> -->
                  <select name="status" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                      <option value="" selected disabled hidden>Select a category</option>
                      <option value="in_stock">In Stock</option>
                      <option value="out_of_stock">Out Of Stock</option>
                      
                  </select>
              </div>
                                
                            <div>
                                
                            <form class="max-w-xs mx-auto">
    <label for="quantity-input" class="block mb-2 text-sm font-medium text-gray-900      :text-white">Quantity:</label>
    <div class="relative flex items-center max-w-[8rem]">
        <button type="button" id="decrement-button" class="bg-gray-100  outline-none    :bg-gray-700      :hover:bg-gray-600      :border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100      :focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900      :text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"></path>
            </svg>
        </button>
        <input type="text" id="quantity-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5      :bg-gray-700      :border-gray-600      :placeholder-gray-400      :text-white      :focus:ring-blue-500      :focus:border-blue-500" placeholder="0" required="">
        <button type="button" id="increment-button" class="bg-gray-100      :bg-gray-700      :hover:bg-gray-600      :border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100      :focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900      :text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"></path>
            </svg>
        </button>
    </div>
    
</form>

                            </div>

                            </div>
                            <h2 class="mb-3 text-xl font-semibold lg:text-2xl  :text-gray-400">
                                Product Name
                            </h2>
                            <div class=" flex items-center justify-between mb-2">
                                <h2 class="text-sm font-medium mb-2 :text-gray-400">Category</h2>
                                 
                                 <div>
                                 
                              <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900   :text-white">Price</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Price" required>
                                </div>
                            </div>
                            <p class="text-sm font-medium  :text-gray-400">Upadated At</p>
                            <div class="flex items-center justify-center mt-4">
                                <a href=""
                                    class="w-full px-4 py-2 text-center text-gray-900 bg-blue-300 rounded-md  :bg-gray-700  :text-gray-400  :hover:bg-gray-900 hover:bg-blue-400">
                                    Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>







    <script>
    document.getElementById('increment-button').addEventListener('click', function() {
        var inputElement = document.getElementById('quantity-input');
        inputElement.value = parseInt(inputElement.value) + 1 || 0; // Set to 0 if parsing result is NaN
    });

    document.getElementById('decrement-button').addEventListener('click', function() {
        var inputElement = document.getElementById('quantity-input');
        inputElement.value = Math.max(parseInt(inputElement.value) - 1, 0);
    });
</script>

</body>
</html>