<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="flex flex-wrap ">
        <div class=" mb-4 w-full md:w-1/2 class1 ">
            <div class="relative font-poppins">
                <div class="fixed inset-0 bg-gray-700 opacity-25"></div>
                <div class="fixed top-0 bottom-0 z-10 w-full max-w-xl overflow-y-scroll bg-white  :bg-gray-800">
                    <div class="p-6 bg-white md:pt-12 md:pb-6 md:px-12  :bg-gray-800">
                        
                        <div class="flex items-center mb-10">
                            <h2 class="text-3xl font-bold  :text-gray-400 ">Shopping Cart</h2>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 ml-4 text-base font-bold bg-red-600 rounded-full  :text-gray-400  :bg-gray-700 text-gray-50">6</span>
                        </div>
                        <div class="block pb-6 mb-6 -mx-4 border-b border-gray-200  :border-gray-700 md:flex">
                            <div class="w-full px-4 mb-6 md:w-1/3 md:mb-0">
                                <div class="flex w-full h-96 md:h-32 md:w-32">
                                    <img src="https://i.postimg.cc/hj6h6Vwv/pexels-artem-beliaikin-2292919.jpg" alt=""
                                        class="object-cover w-full h-full rounded-md">
                                </div>
                            </div>
                            <div class="w-full px-4 md:2/3">
                                <div class="flex justify-between">
                                    <div class="">
                                        <h2 class="mb-2 text-xl font-bold  :text-gray-400">Product Name</h2>
                                        <form class="max-w-xs mx-auto mb-3">
                                            <label for="quantity-input" class="block mb-1 text-sm font-medium text-gray-900      :text-white">Quantity</label>
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
                                        <div>
                                            
                                            <button
                                                class="px-4 py-2 font-medium text-center text-blue-700 border border-blue-500 rounded-md  :hover:border-gray-900  :hover:bg-gray-900  :text-gray-400  :border-gray-700 hover:bg-blue-600 hover:text-gray-100">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-lg font-bold text-blue-500  :text-gray-400">$299.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <div class=" mb-4 w-full md:w-1/2 class2 bg-white md:bg-gray-800">
        <section class="flex items-center  bg-gray-50 font-poppins   :bg-gray-800 ">
            <div
                class="justify-center flex-1 max-w-4xl px-6 py-6 mx-auto bg-gray-100 rounded-md shadow-md   :border-gray-900   :bg-gray-900 lg:py-10 lg:px-10">
                <div class="mb-16 text-center">
                    <h1
                        class="mb-6 text-2xl font-semibold leading-7 tracking-wide text-gray-700 lg:text-4xl   :text-gray-300 lg:leading-9">
                        Thank you for your Order, John!</h1>
                    <p class="text-lg text-gray-500   :text-gray-400">your order number is: 012736373737</p>
                </div>
                <div class="max-w-4xl mx-auto mb-10">
                    <h2 class="mb-4 text-xl font-medium   :text-gray-400">What you ordered:</h2>
                    <div
                        class="p-10 mb-8 bg-white rounded-md shadow   :bg-gray-800 sm:flex sm:items-center xl:py-5 xl:px-12">
                        <a href="#" class="mr-6 md:mr-12">
                            <img class=" w-full lg:w-[80px] h-[200px] lg:h-[80px]  object-cover  mx-auto mb-6 sm:mb-0 "
                                src="https://i.postimg.cc/YS2pPP8k/white-denim-jacket-front-view-streetwear-fashion.jpg "
                                alt="dress">
                        </a>
                        <div>
                            <a class="inline-block mb-1 text-lg font-medium hover:underline   :text-gray-400" href="#">
                                White jacket for men</a>
                            <div class="flex flex-wrap">
                                <p class="mr-4 text-sm font-medium">
                                    <span class="font-medium   :text-gray-400">Color:</span>
                                    <span class="ml-2 text-gray-400   :text-gray-400">Silver</span>
                                </p>
                                <p class="mr-4 text-sm font-medium">
                                    <span class="font-medium   :text-gray-400">Size:</span>
                                    <span class="ml-2 text-gray-400   :text-gray-400">medium</span>
                                </p>
                                <p class="mr-4 text-sm font-medium">
                                    <span class="font-medium   :text-gray-400">Style:</span>
                                    <span class="ml-2 text-gray-400   :text-gray-400">Uk minimal design</span>
                                </p>
                                <p class="text-sm font-medium   :text-gray-400">
                                    <span>Qty:</span>
                                    <span class="ml-2 text-gray-400">1</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-10 bg-white rounded-md shadow   :bg-gray-800 sm:flex sm:items-center xl:py-5 xl:px-12">
                        <a href="#" class="mr-6 md:mr-12">
                            <img class=" w-full lg:w-[80px] h-[200px] lg:h-[80px] object-cover  mx-auto mb-6 sm:mb-0 "
                                src="https://i.postimg.cc/br9C4mmc/430.jpg " alt="dress">
                        </a>
                        <div>
                            <a class="inline-block mb-1 text-lg font-medium   :text-gray-400 hover:underline" href="#">
                                Summer Black T-shirt
                            </a>
                            <div class="flex flex-wrap">
                                <p class="mr-4 text-sm font-medium   :text-gray-400">
                                    <span class="font-medium">Color:</span>
                                    <span class="ml-2 text-gray-400">Silver</span>
                                </p>
                                <p class="mr-4 text-sm font-medium   :text-gray-400">
                                    <span class="font-medium">Size:</span>
                                    <span class="ml-2 text-gray-400">medium</span>
                                </p>
                                <p class="mr-4 text-sm font-medium   :text-gray-400">
                                    <span class="font-medium">Style:</span>
                                    <span class="ml-2 text-gray-400">Uk minimal design</span>
                                </p>
                                <p class="text-sm font-medium   :text-gray-400">
                                    <span>Qty:</span>
                                    <span class="ml-2 text-gray-400">1</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-4xl mx-auto ">
                    <h2 class="mb-4 text-xl font-medium   :text-gray-400 ">Order Details:</h2>
                    <div class="grid grid-cols-1 gap-5 mb-10 lg:grid-cols-1">
                        <div
                            class="flex items-center justify-between px-10 py-3 font-medium leading-8 bg-white bg-opacity-50 rounded-md shadow   :text-gray-400   :bg-gray-800 font-heading">
                            <span>Shipping</span>
                            <span class="flex items-center">
                                <span class="ml-3 mr-1 text-sm">Rs.</span>
                                <span class="text-xl">4,000</span>
                            </span>
                        </div>
                        <div
                            class="relative flex items-center justify-between px-10 py-3 font-medium leading-8 bg-white bg-opacity-50 rounded-md shadow   :text-gray-400   :bg-gray-800">
                            <div
                                class="absolute right-0 flex items-center justify-center bg-blue-500 rounded-md w-14 h-14   :bg-gray-600">
                                <div
                                    class="flex items-center justify-center text-lg font-bold text-blue-500 bg-gray-100 rounded-full   :text-gray-300   :bg-gray-700 w-11 h-11">
                                    2</div>
                            </div>
                            <span class="mr-16">Products</span>
                        </div>
                        <div
                            class="flex items-center justify-between px-10 py-3 font-medium leading-8 bg-white rounded-md shadow   :text-gray-400   :bg-gray-800 font-heading">
                            <span>Total</span>
                            <span class="flex items-center text-blue-500   :text-blue-400">
                                <span class="ml-3 mr-1 text-sm">Rs.</span>
                                <span class="text-xl">7,000</span>
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-4 ">
                        <button
                            class="w-full px-6 py-3 text-blue-500 border border-blue-500 rounded-md md:w-auto hover:text-gray-100 hover:bg-blue-600   :border-gray-800   :hover:bg-gray-800   :text-gray-300">
                            Go back shopping
                        </button>
                        <button
                            class="w-full px-6 py-3 text-gray-100 bg-blue-500 rounded-md md:w-auto   :text-gray-300 hover:bg-blue-600   :hover:bg-gray-800   :bg-gray-700">
                            Download Invoice
                        </button>
                    </div>
                </div>
    
            </div>
        </section>
        </div>
        
    </div>




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