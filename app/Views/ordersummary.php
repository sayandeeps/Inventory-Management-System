<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="flex items-center py-16 bg-gray-50 font-poppins  :bg-gray-800 ">
        <div
            class="justify-center flex-1 max-w-4xl px-6 py-6 mx-auto bg-gray-100 rounded-md shadow-md  :border-gray-900  :bg-gray-900 lg:py-10 lg:px-10">
            <div class="mb-16 text-center">
                <h1
                    class="mb-6 text-2xl font-semibold leading-7 tracking-wide text-gray-700 lg:text-4xl  :text-gray-300 lg:leading-9">
                    Thank you for your Order, <?= $cname ?>!</h1>
                <p class="text-lg text-gray-500  :text-gray-400">your order number is: 012736373737</p>
            </div>
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="mb-4 text-xl font-medium  :text-gray-400">What you ordered:</h2>
                <?php foreach ($orderdetails as $order){ ?>
                    <div class="flex flex-col items-start justify-start w-full mt-4 mb-4 border-b border-gray-200  :border-gray-700 md:mt-6 md:flex-row md:items-center md:space-x-6 xl:space-x-8">
                <div class="w-full pb-4 md:pb-6 md:w-40">
                    <img class="hidden w-full h-[150px] object-cover md:block" src="https://source.unsplash.com/random?food?sig=<?= $order['id'] ?> " alt="dress">
                    <img class="object-cover w-full  h-[450px] md:hidden" src="https://source.unsplash.com/random?food?sig=<?= $order['id'] ?>" alt="dress">
                </div>
                <div class="flex flex-col items-start justify-between w-full pb-6 space-y-2 md:flex-row md:space-y-0">
                    <div class="flex flex-col items-start justify-start w-full space-y-4">
                        <h2 class="text-xl font-semibold leading-6 text-gray-800  :text-gray-400 xl:text-2xl">
                        <?= $order['name'] ?></h2>
                        <div class="flex flex-col items-start justify-start space-y-3">
                            <p class="text-sm leading-none text-gray-800  :text-gray-400"><span class="text-gray-400  :text-gray-400">Category: </span> <?= $order['category'] ?>
                                </p>
                        </div>
                    </div>
                    <div class="flex items-start justify-between w-full space-x-8">
                    <p class="text-base leading-6  :text-gray-400 xl:text-lg">$<?= $order['price'] ?> <span class="text-blue-300 line-through"> $45.00</span></p>                        
                    <p class="text-base leading-6 text-gray-800  :text-gray-400 xl:text-lg">Quantity: <?= $order['qty'] ?></p>
                        <p class="text-base font-semibold leading-6 text-gray-800  :text-gray-400 xl:text-lg">
                            $<?= $order['price'] ?></p>
                    </div>
                </div>
            </div>
                <?php } ?>
            </div>
            <div class="max-w-4xl mx-auto ">
                <h2 class="mb-4 text-xl font-medium  :text-gray-400 ">Order Details:</h2>
                <div class="grid grid-cols-1 gap-8 mb-10 lg:grid-cols-3">
                    <div
                        class="flex items-center justify-between px-10 py-3 font-medium leading-8 bg-white bg-opacity-50 rounded-md shadow  :text-gray-400  :bg-gray-800 font-heading">
                        <span>Shipping</span>
                        <span class="flex items-center">
                            
                            <span class="text-xl">Free</span>
                        </span>
                    </div>
                    <div
                        class="relative flex items-center justify-between px-10 py-3 font-medium leading-8 bg-white bg-opacity-50 rounded-md shadow  :text-gray-400  :bg-gray-800">
                        <div
                            class="absolute right-0 flex items-center justify-center bg-blue-500 rounded-md w-14 h-14  :bg-gray-600">
                            <div
                                class="flex items-center justify-center text-lg font-bold text-blue-500 bg-gray-100 rounded-full  :text-gray-300  :bg-gray-700 w-11 h-11">
                                <?= $totalcount ?></div>
                        </div>
                        <span class="mr-16">Products</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-10 py-3 font-medium leading-8 bg-white rounded-md shadow  :text-gray-400  :bg-gray-800 font-heading">
                        <span>Total</span>
                        <span class="flex items-center text-blue-500  :text-blue-400">
                            <span class="ml-3 mr-1 text-sm">Rs.</span>
                            <span class="text-xl"><?= $totalSumcart ?></span>
                        </span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-between gap-4 ">
                    <a href="<?php echo base_url(); ?>billing"
                        class="w-full px-6 py-3 text-blue-500 border border-blue-500 rounded-md md:w-auto hover:text-gray-100 hover:bg-blue-600  :border-gray-800  :hover:bg-gray-800  :text-gray-300">
                        Go back shopping
                </a>
                    <button id="downloadInvoiceBtn"
                        class="w-full px-6 py-3 text-gray-100 bg-blue-500 rounded-md md:w-auto  :text-gray-300 hover:bg-blue-600  :hover:bg-gray-800  :bg-gray-700">
                        Download Invoice
                    </button>
                </div>
            </div>

        </div>
    </section>

    <script>
    const downloadBtn = document.getElementById('downloadInvoiceBtn');

    downloadBtn.addEventListener('click', function() {
        window.print(); // Triggers the print action
    });
</script>
</body>
</html>