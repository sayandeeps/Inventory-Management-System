<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex">
<div class="w-1/2 p-4">
<section class="flex  items-center   font-poppins  :bg-gray-900 ">

            <div class="justify-center w-full px-4 py-4 mx-auto ">
                <div class="flex flex-wrap justify-center -mx-3 pt-5">
                <div class="mb-8 w-full :bg-gray-800">
                <form action="<?= base_url('cartsearchproduct') ?>" method="post">
                            <div class="  flex px-6 py-2 border border-blue-500 rounded-md  :border-gray-700">
                                <input type="text" name='search'
                                    class="w-full pr-4 text-sm text-gray-700 outline-none   placeholder-text-100 "
                                    placeholder="search...">
                                <button type = "submit"
                                    class="flex items-center text-gray-700  :text-gray-400  :hover:text-blue-300 hover:text-blue-600">
                                    <span class="mr-2">Go</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </button>
            </form>
                            </div>
                        </div>
            <div class="w-full px-3 mb-6  :px-2 ">
            
            
           
            <?php
            
            foreach ($products as $product) {
                ?>
                <?php //echo var_dump($product) ?>
                
            <!--show form-->
            <div class="w-full">
                    <div class="relative p-4 bg-white rounded shadow  :bg-gray-700">
                        <div class="block mb-2" href="#">
                            <div class="relative overflow-hidden">
                                <div class="mb-5 overflow-hidden">
                                    <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110" src="https://source.unsplash.com/random?food?sig=<?= $product['id'] ?>" alt="">
                                </div>
                                
                                <div class="absolute px-4 py-1 text-xs text-white rounded top-3 left-3 sale bg-rose-500">
                                    <?= ($product['status'] == 1) ? "In Stock" : "Out of Stock" ?>
                                </div>
                            </div>
                            <a href="#">
                                <h3 class="mb-2 text-xl font-bold  :text-white"> <?= $product['pname'] ?> </h3>
                                <p class="text-sm text-gray-500"><?= $product['category'] ?> </p>

                            </a>
                            <p class="text-lg font-bold text-blue-500  :text-blue-300 ">
                                <span>$<?= $product['price']?>.00</span>
                                <span class="text-xs font-semibold text-gray-400 line-through "> $<?= $product['price'] +100 ?></span>
                            </p>
                            <div class="flex gap-1 mt-2 text-orange-400 rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                            </div>


                            <button   
                            data-id="<?= $product['id'] ?>" 
                            data-name="<?= $product['pname'] ?>"
                            data-status="<?= $product['status'] ?>"
                            data-price="<?= $product['price'] ?>"
                            data-category="<?= $product['category'] ?>"
                            data-qty="1"
                            class="addcart absolute z-10 flex items-center justify-center p-1 text-center text-gray-100 bg-blue-500 rounded-full shadow-xl bottom-4 right-4 hover:bg-blue-700 w-11 h-11 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-7 h-7" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                        <?php } ?>
                        

            </div>
                    
                </div>
            </div>
</section>
</div>
<div class="w-1/2 p-4">
<section class="py-24 bg-gray-100 font-poppins   :bg-gray-700">
        <div class="px-4 py-6 mx-auto max-w-7xl  :py-4 md:px-6">
            <div>
                <h2 class="mb-8 text-4xl font-bold   :text-gray-400">Your Cart</h2>
                <div class="p-6 mb-8 border bg-gray-50   :bg-gray-800   :border-gray-800">
                    <div class="flex-wrap items-center hidden mb-6 -mx-4 md:flex md:mb-8">
                        <div class="w-full px-4 mb-6 md:w-4/6  :w-6/12 md:mb-0">
                            <h2 class="font-bold text-gray-500   :text-gray-400">Product name</h2>
                        </div>
                        <div class="hidden px-4  :block  :w-2/12">
                            <h2 class="font-bold text-gray-500   :text-gray-400">Price</h2>
                        </div>
                        <div class="w-auto px-4 md:w-1/6  :w-2/12 ">
                            <h2 class="font-bold text-gray-500   :text-gray-400">Quantity</h2>
                        </div>
                        <div class="w-auto px-4 text-right md:w-1/6  :w-2/12 ">
                            <h2 class="font-bold text-gray-500   :text-gray-400"> Subtotal</h2>
                        </div>
                    </div>
                    <div id="cartItems" class="  py-4 mb-8 border-t border-b border-gray-200   :border-gray-700">
                        <!--product cart details-->
                        
                        
                    </div>
                </div>
                <div class="flex flex-wrap justify-between">
                    
                    <div class="w-full px-4 mb-4 ">
                        <div class="p-6 border border-blue-100   :bg-gray-900   :border-gray-900 bg-gray-50 md:p-8">
                            <h2 class="mb-8 text-3xl font-bold text-gray-700   :text-gray-400">Order Summary</h2>
                            <div
                                class="flex items-center justify-between pb-4 mb-4 border-b border-gray-300   :border-gray-700 ">
                                <span class="text-gray-700   :text-gray-400">Subtotal</span>
                                <span id="subb" class="text-xl font-bold text-gray-700   :text-gray-400 ">$100</span>
                            </div>
                            <div class="flex items-center justify-between pb-4 mb-4 ">
                                <span class="text-gray-700   :text-gray-400 ">Shipping</span>
                                <span class="text-xl font-bold text-gray-700   :text-gray-400 ">Free</span>
                            </div>
                            <div class="flex items-center justify-between pb-4 mb-4 ">
                                <span class="text-gray-700   :text-gray-400">Order Total</span>
                                <span id="subbb" class="text-xl font-bold text-gray-700   :text-gray-400">$99.00</span>
                            </div>
                            <h2 class="text-  text-gray-500   :text-gray-400">We offer:</h2>
                            <div class="flex items-center gap-2 mb-4 ">
                                <a href="#">
                                    <img src="https://i.postimg.cc/g22HQhX0/70599-visa-curved-icon.png" alt=""
                                        class="object-cover h-16 w-26">
                                </a>
                                <a href="#">
                                    <img src="https://i.postimg.cc/HW38JkkG/38602-mastercard-curved-icon.png" alt=""
                                        class="object-cover h-16 w-26">
                                </a>
                                <a href="#">
                                    <img src="https://i.postimg.cc/HL57j0V3/38605-paypal-straight-icon.png" alt=""
                                        class="object-cover h-16 w-26">
                                </a>
                            </div>
                            <div class="flex items-center justify-between ">
                                <button
                                    class="block w-full py-4 font-bold text-center text-gray-100 uppercase bg-blue-500 rounded-md hover:bg-blue-600">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function(){
            var storedCartContents = JSON.parse(localStorage.getItem('cartContents')) || {};
            updateCartContents(storedCartContents);
            // Add product to cart AJAX call
            $('.addcart').click(function(){
                var product_id = $(this).data("id");
                var product_name = $(this).data("name");
                var product_qty = $(this).data("qty");
                var product_status = $(this).data("status");
                var product_price = $(this).data("price");
                var product_category = $(this).data("category");

                
                if(product_status == 1){
                    $.ajax({
                        url: "<?php echo base_url(); ?>addcartproduct",
                        method: "POST",
                        data: {
                            product_id: product_id,
                            product_name: product_name,
                            product_price: product_price,
                            product_qty: product_qty,
                            product_status: product_status,
                            product_category: product_category
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)
                            updateCartContents(response);
                            
                        },
                        error: function(xhr, status, error) {
                            alert("Error: " + error);
                        }
                    });
                } else {
                    alert("The product is out of stock");
                }
            });


            function totalsumcart(cartContents){
                var totalcart=0;
                for (var key in cartContents) {
                    if (cartContents.hasOwnProperty(key)) {
                        var item = cartContents[key];
                        totalcart+=item.subtotal
                    }
                }
                return totalcart;
            }


            // Function to update cart contents
            function updateCartContents(cartContents) {
                var cartItems = $('#cartItems');
                cartItems.empty(); // Clear existing items

                // Loop through each key in the cartContents object
                for (var key in cartContents) {
                    if (cartContents.hasOwnProperty(key)) {
                        var item = cartContents[key];
                        

                        // Create HTML structure for each item and append it to the cartItems container
                        // var html = `<div class="flex flex-wrap items-center mb-6 -mx-4 md:mb-8" data-id="${item.rowid}">
                        //     <h1>${item.name}</h1>
                        //     <p>Quantity: ${item.qty}</p>
                        //     <p>Price: $${item.price}</p>
                        //     <p>Total Price: $${item.subtotal}</p>
                        //     <p>Total Price: $${item.rowid}</p>

                        //     <button data-id="${item.rowid}" data-qty="${item.qty}" class="removeitem">Remove</button>
                        // </div>`;
                        var html = `<div class="flex items-center mb-4 -mx-2">
            <div class="w-1/2 px-2 mb-2 md:w-2/5 lg:w-1/2 md:mb-0">
                <div class="flex items-center -mx-2">
                    <div class="w-1/2 px-2 mb-2 md:w-1/3">
                        <div class="w-full h-24 md:h-12 md:w-12">
                            <img src="https://source.unsplash.com/random?food?sig=${item.id}" alt="" class="object-cover w-full h-full">
                        </div>
                    </div>
                    <div class="w-auto px-2">
                        <h2 class="mb-1 text-lg font-bold text-gray-400">${item.name}</h2>
                        <p class="text-sm text-gray-500">${item.category}</p>
                    </div>
                </div>
            </div>
            <div class="hidden px-2 lg:block lg:w-1/5">
                <p class="text-sm font-bold text-blue-500">$${item.price}</p>
        
            </div>
            <div class="w-auto px-2 md:w-1/4 lg:w-1/5">
                <div class="inline-flex items-center px-2 font-semibold text-gray-500 border border-gray-200 rounded-md">
                    <button data-id="${item.rowid}" data-qty="${item.qty}" class="removeitem py-1 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                        </svg>
                    </button>
                    <input type="number" class="w-12 px-2 py-1 text-center border-0 rounded-md bg-gray-50 text-gray-400 md:text-right" value="${item.qty}">
                    <button data-id="${item.rowid}" data-qty="${item.qty}" class=" additem py-1 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-auto px-2 text-right md:w-1/5 lg:w-1/5">
                <p class="text-sm font-bold text-blue-500">$${item.subtotal}</p>
            </div>
        </div>
        `

                        // Append the HTML to cartItems
                        cartItems.append(html);

                        var totalSum = totalsumcart(cartContents);
                        console.log("Total Sum of Subtotals:", totalSum);
                        $('#subb').text('$' + totalSum);
                        $('#subbb').text('$' + totalSum);

                        localStorage.setItem('cartContents', JSON.stringify(cartContents));



                        $('.removeitem').click(function() {
                    var rowid = $(this).data("id");
                    var qty = $(this).data("qty");

                    $.ajax({
                        url: "<?php echo base_url(); ?>removeitem", // URL for the remove item action
                        method: "POST",
                        data: {
                            rowid: rowid,
                            qty: qty
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            updateCartContents(response);
                           
                        },
                        error: function(xhr, status, error) {
                            alert("Error: " + error);
                        }
                    });
                });

                $('.additem').click(function() {
                    var rowid = $(this).data("id");
                    var qty = $(this).data("qty");

                    $.ajax({
                        url: "<?php echo base_url(); ?>additem", // URL for the remove item action
                        method: "POST",
                        data: {
                            rowid: rowid,
                            qty: qty
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            updateCartContents(response);
                            
                        },
                        error: function(xhr, status, error) {
                            alert("Error: " + error);
                        }
                    });
                });
                    }
                }
            }
        });
</script>




</body>
</html>