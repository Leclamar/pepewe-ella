<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Sales</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="font-satoshi px-12">
    <?php include '../layout/header.php';?>

    <section class="mt-2">
        <div>
            <a href="" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Home</a>
            <a href="" class="text-sm">Top Sales</a>
        </div>
        <main class="my-4 grid">
            <article>
                <header class="grid grid-flow-col justify-between">
                    <h1 class="text-teal-500 text-3xl font-extrabold mb-8">Category 1</h1>

                    <div class="flex items-center text-sm">
                        <p class="mr-6 font-thin">Showing 1-16 of 100 Products</p>
                        <label class="font-thin mr-1">Sort by:</label>
                        <select class="font-medium outline-none text-teal-500">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </header>
                <div class="grid grid-cols-4 justify-items-center">
                    <?php include '../layout/product-container.php' ?>
    
                    <?php include '../layout/product-container.php' ?>
    
                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

                    <?php include '../layout/product-container.php' ?>

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