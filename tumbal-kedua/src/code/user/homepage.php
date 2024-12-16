<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/output.css" rel="stylesheet">
    <title>Homepage</title>
</head>

<body class="box-border overscroll-x-none w-full max-w-screen overflow-x-hidden mx-auto font-satoshi">
    <div class="px-12">
    <?php include 'layout/header.php'; ?>
    </div>
    
    <!--Hero Sections-->
    <div class="relative overflow-hidden bg-[#73c1b4]">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <!--Hero Text-->
                <div class="sm:max-w-lg">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Search and Find Your Favorites</h1>
                    <p class="mt-4 text-xl text-gray-500">Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
                </div>
                
                <!-- Decorative Image Grid -->
                <div>
                    <div class="mt-10">
                        <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img src="img/1.jpg" alt="" class="size-full object-cover opacity-90">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="img/2.jpg" alt="" class="size-full object-coveropacity-90">
                                        </div>
                                    </div>
                                    <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="img/3.jpg" alt="" class="size-full object-cover opacity-90">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="img/4.jpg" alt="" class="size-full object-cover opacity-90">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="img/5.jpg" alt="" class="size-full object-cover opacity-90">
                                        </div>
                                    </div>
                                    <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="img/6.jpg" alt="" class="size-full object-cover opacity-90">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="img/7.jpg" alt="" class="size-full object-cover opacity-90">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offers Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
        <h2 class="font-satoshi text-4xl text-teal-500 font-bols font-bold text-center">OFFERS</h2>
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
    <div class="text-center">
        <button class="py-2 px-9 border-2 rounded-full my-8">View All</button>
    </div>
    <hr>

    <!-- Offers Section -->
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
    <div class="text-center">
        <button class="py-2 px-9 border-2 rounded-full my-8">View All</button>
    </div>
    <hr>

    <!-- Category Section -->
    <section class="py-16 bg-gray-100 2xl:mx-40 my-20 rounded-lg">
        <div class="container mx-auto px-6 lg:px-32">
        <h2 class="text-3xl font-bold text-teal-500 text-center">CATEGORY</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 mt-10">
            
            <!-- Make-up (Small Tile) -->
            <div class="relative group bg-gray-800 rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/300x200" alt="Make-up" class="w-full h-44 object-cover opacity-75 group-hover:opacity-50 transition">
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition">Make-up</h3>
            </div>
            </div>
            
            <!-- Gaming Accessories (Large Tile) -->
            <div class="relative group bg-gray-800 rounded-lg overflow-hidden md:col-span-2">
            <img src="https://via.placeholder.com/600x400" alt="Gaming Accessories" class="w-full h-44 object-cover opacity-75 group-hover:opacity-50 transition">
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition">Gaming Accessories</h3>
            </div>
            </div>

            <!-- Gaming Accessories (Large Tile) -->
            <div class="relative group bg-gray-800 rounded-lg overflow-hidden md:col-span-2">
            <img src="https://via.placeholder.com/600x400" alt="Gaming Accessories" class="w-full h-44 object-cover opacity-75 group-hover:opacity-50 transition">
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition">Gaming Accessories</h3>
            </div>
            </div>
            
            <!-- Make-up (Small Tile) -->
            <div class="relative group bg-gray-800 rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/300x200" alt="Make-up" class="w-full h-44 object-cover opacity-75 group-hover:opacity-50 transition">
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition">Make-up</h3>
            </div>
            </div>
            
            <!-- Make-up (Small Tile) -->
            <div class="relative group bg-gray-800 rounded-lg overflow-hidden">
            <img src="https://via.placeholder.com/300x200" alt="Make-up" class="w-full h-44 object-cover opacity-75 group-hover:opacity-50 transition">
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition">Make-up</h3>
            </div>
            </div>
            
            <!-- Gaming Accessories (Large Tile) -->
            <div class="relative group bg-gray-800 rounded-lg overflow-hidden md:col-span-2">
            <img src="https://via.placeholder.com/600x400" alt="Gaming Accessories" class="w-full h-44 object-cover opacity-75 group-hover:opacity-50 transition">
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition">Gaming Accessories</h3>
            </div>
            </div>
        </div>
        </div>
    </section>  
  
</body>
</html>
