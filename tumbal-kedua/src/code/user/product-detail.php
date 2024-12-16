<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">
    <title>Product Detail</title>
</head>
<body class="font-satoshi px-12">
    <header class="grid grid-flow-col justify-between border-b items-center py-4">
        <div class="w-max">
            <h1 class="font-bold font-satoshi text-3xl">SHOP<span class="font-bold text-teal-400">.CO</span></h1>
        </div>

        <nav class="w-max">
            <ul class="flex">
                <li><a href="" class="px-10 font-medium hover:text-teal-500">Shop</a></li>
                <li><a href="" class="px-10 font-medium hover:text-teal-500">Top Sales</a></li>
                <li><a href="" class="px-10 font-medium hover:text-teal-500">Offer</a></li>
                <li><a href="seller.html" class="px-10 font-medium hover:text-teal-500">Seller</a></li>
            </ul>
        </nav>

        <div class="w-max">
            <h3 class="px-10 font-semibold hover:text-teal-500 cursor-pointer">Login</h3>
        </div>
    </header>

    <section class="mt-2">
        <div>
            <a href="" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Home</a>
            <a href="cart.html" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Cart</a>
            <a href="checkout.html" class="text-sm">Checkout</a>
        </div>

        <main class="my-4">
            <article class="flex">
                <div class="w-40vw h-70vh object-contain bg-slate-100 rounded-md">
                    <img src="img/Abstract Painting by Suzanne Vaughan, Acrylic on Canvas, 40 x 60 in - Large, Abstract Original Artwork For Sale on Saatchi Art_.jpeg" class="w-full h-full rounded-lg object-contain">
                </div>
                
                <div class="box-border grid content-between items-start px-6 w-60vw justify-start">
                    <div class="justify-items-start">
                        <h1 class="font-bold mb-2 text-2xl">Product Tedi</h1>
                        <div class="grid grid-flow-col">
                            <h3 class="font-bold mr-4">Rp 4.000</h3><div class="text-teal-700 bg-teal-200 rounded-full px-4 py-1 w-fit">-30%</div>
                        </div>
                        <p class="text-gray-500">Description</p>
                    </div>

                    <div class="grid grid-flow-col">
                        <form class="w-fit flex box-border border-2 rounded-full px-3 items-center bg-slate-200  mr-3">
                            <input type="button" value="-" class="text-2xl px-2 cursor-pointer font-medium active:text-slate-400">
                            <div class="box-border w-5 w-max-5 text-center">
                                <label class="text-sm">0</label>
                            </div>
                            <input type="button" value="+" class="text-xl px-2 cursor-pointer font-medium active:text-slate-400">
                        </form>

                        <button class="bg-slate-800 text-white px-4 py-2 w-64 rounded-full active:bg-teal-400">Add to Cart</button>
                    </div>
                </div>
            </article>

            <article class="mt-12">
                <nav>
                    <ul class="box-border grid grid-flow-col text-center py-3">
                        <li class="box-border"><button onclick="Detail()" class="pb-3 w-full focus:border-b-4 border-b-4 border-transparent focus:border-b-teal-400 focus:text-shadow-custom hover:text-shadow-custom text-gray-800 cursor-pointer">Product Details</button></li>
                        <li class="box-border"><button onclick="Reviews()" class="pb-3 w-full focus:border-b-4 border-b-4 border-transparent focus:border-b-teal-400 focus:text-shadow-custom hover:text-shadow-custom text-gray-800 cursor-pointer">Rating & Reviews</button></li>
                    </ul>
                </nav>

                <section class="mb-10">
                    <div id="rating-review" class="hidden">
                        <h1 class="font-bold text-lg my-3">All Reviews <span>(81)</span></h1>

                        <div id="user-review" class="grid grid-flow-col mb-12">
                            <div class="w-profile h-profile rounded-full bg-slate-500">
                                <!-- <img> -->
                            </div>
                            <div class="pl-4">
                                <h2 class="font-medium">Lele Mekas Maknyos Sekali</h2>
                                <div id="user-rating">⭐⭐⭐⭐⭐</div>
                                <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et neque vel massa convallis semper. Curabitur auctor, sapien vel lobortis interdum, justo felis molestie neque, sed sagittis mauris neque in neque. Nullam vitae lectus ac nisl tristique vestibulum vel ac lectus. Nulla facilisi. Sed vel ipsum id felis bibendum vulputate.</p>
                                <p class="text-sm mt-3 font-medium text-gray-500">Posted on <span>March 07, 2005</span></p>
                            </div>
                        </div>
                    </div>

                    <div id="product-details" class="hidden">
                        <h1 class="text-xl font-bold my-2">Product Name</h1>
                        <div class="grid grid-rows-4 grid-flow-col w-max items-center box-border">
                            <p class="text-slate-400 font-medium my-1 ml-1 mr-2">Categori:</p>
                            <p class="text-slate-400 font-medium my-1 ml-1 mr-2">Product Rating: </p>
                            <p class="text-slate-400 font-medium my-1 ml-1 mr-2">Stock:</p>
                            <p class="text-slate-400 font-medium my-1 ml-1 mr-2">Store Address: </p>

                            <p class="font-normal text-teal-500 px-3">Categori 1</p>
                            <p class="font-normal text-teal-500 px-3">4.98/5.00</p>
                            <p class="font-normal text-teal-500 px-3">12</p>
                            <p class="font-normal text-teal-500 px-3">Atlantis</p>
                        </div>
                        
                        <h1 class="text-xl font-bold my-2">Description:</h1>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc</p>
                    </div>
                </section>
            </article>
        </main>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-6">
        <h2 class="font-satoshi text-4xl text-teal-500 font-bols font-bold text-center">TOP SALES</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-10">
            <!-- Card Example -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                <p class="text-sm text-gray-500 mt-2">Price</p>
                <p class="text-red-500 font-semibold mt-1">20% Off</p>
            </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                <p class="text-sm text-gray-500 mt-2">Price</p>
                <p class="text-red-500 font-semibold mt-1">20% Off</p>
            </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                <p class="text-sm text-gray-500 mt-2">Price</p>
                <p class="text-red-500 font-semibold mt-1">20% Off</p>
            </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Product Name</h3>
                <p class="text-sm text-gray-500 mt-2">Price</p>
                <p class="text-red-500 font-semibold mt-1">20% Off</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        function Detail(){
            document.getElementById("product-details").style.display = "block";
            document.getElementById("rating-review").style.display = "none";
        }

        function Reviews(){
            document.getElementById("product-details").style.display = "none";
            document.getElementById("rating-review").style.display = "block";
        }
    </script>
</body>
</html>
