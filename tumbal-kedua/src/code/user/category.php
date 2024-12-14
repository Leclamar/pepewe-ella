<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="font-satoshi px-12">
    <?php include '../layout/header.php';?>

    <section class="mt-2">
        <div>
            <a href="" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Home</a>
            <a href="" class="text-sm">Category</a>
        </div>
        <main class="my-4 grid grid-flow-col">
            <div class="p-8 mr-8 border rounded-md h-fit">
                <div class="pb-3 grid grid-flow-col justify-between">
                    <div class="font-bold">Filters</div>
                    <div>
                        <img class="size-6" src="../../img/icons8-filter-90.png">
                    </div>
                </div>

                <div class="border"></div>

                <ul class="font-thin my-4">
                    <li class="py-2 mt-1 grid grid-flow-col justify-between">
                        <a class="cursor-pointer hover:text-teal-500">Category 1</a>
                        <img src="../../img/icons8-arrow-96.png" class="size-6 cursor-pointer">
                    </li>
                    <li class="py-2 mt-1 grid grid-flow-col justify-between">
                        <a class="cursor-pointer hover:text-teal-500">Category 1</a>
                        <img src="../../img/icons8-arrow-96.png" class="size-6 cursor-pointer">
                    </li>
                    <li class="py-2 mt-1 grid grid-flow-col justify-between">
                        <a class="cursor-pointer hover:text-teal-500">Category 1</a>
                        <img src="../../img/icons8-arrow-96.png" class="size-6 cursor-pointer">
                    </li>
                    <li class="py-2 mt-1 grid grid-flow-col justify-between">
                        <a class="cursor-pointer hover:text-teal-500">Category 1</a>
                        <img src="../../img/icons8-arrow-96.png" class="size-6 cursor-pointer">
                    </li>
                    <li class="py-2 mt-1 grid grid-flow-col justify-between">
                        <a class="cursor-pointer hover:text-teal-500">Category 1</a>
                        <img src="../../img/icons8-arrow-96.png" class="size-6 cursor-pointer">
                    </li>
                    <li class="py-2 mt-1 grid grid-flow-col justify-between">
                        <a class="cursor-pointer hover:text-teal-500">Category 1</a>
                        <img src="../../img/icons8-arrow-96.png" class="size-6 cursor-pointer">
                    </li>
                </ul>

                <div class="border"></div>

                <div class="py-3">
                    <label class="font-bold">Price</label>
                    <input type="range" class="w-full" id="price-range" min="50" max="200" value="125" step="1">
                </div>

                <div class="border"></div>
                  
                <button class="w-full bg-slate-800 text-white active:bg-teal-400 py-2 rounded-full mt-8">Apply Filter</button>
            </div>

            <article>
                <header class="grid grid-flow-col justify-between">
                    <h1 class="text-teal-500 text-3xl font-extrabold mb-8">Category 1</h1>

                    <div class="flex items-center text-sm">
                        <p class="mr-6 font-thin">Showing 1-10 of 100 Products</p>
                        <label class="font-thin mr-1">Sort by:</label>
                        <select class="font-medium outline-none text-teal-500">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </header>
                <div class="grid grid-cols-3 justify-items-center">
                    <?php include '../layout/product-container.php' ?>
    
                    <?php include '../layout/product-container.php' ?>
    
                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>
                </div>

                <div class="grid grid-flow-col text-center text-sm mt-4 text-slate-600">
                    <div class="w-full text-left">
                        <button class="w-fit px-4 py-2 rounded-lg border-2 hover:bg-gray-100 active:bg-gray-50 text-slate-500">Previous</button>
                    </div>
                    
                    <div class="w-full grid grid-flow-col text-center content-center font-bold">
                        <a class="hover:text-teal-600 cursor-pointer">1</a>
                        <a class="hover:text-teal-600 cursor-pointer">2</a>
                        <a class="hover:text-teal-600 cursor-pointer">3</a>
                        <a class="hover:text-teal-600 cursor-pointer">4</a>
                        <a class="hover:text-teal-600 cursor-pointer">...</a>
                    </div>

                    <div class="w-full text-right">
                        <button class="w-fit px-4 py-2 rounded-lg border-2 hover:bg-gray-100 active:bg-gray-50 text-slate-500">Next</button>
                    </div>
                </div>
            </article>
        </main>
    </section>
</body>
</html>