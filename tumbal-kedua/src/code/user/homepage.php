<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="box-border overscroll-x-none w-full max-w-screen overflow-x-hidden mx-auto font-satoshi">
    <div class="px-12">
    <?php include '../layout/header.php'; ?>
    </div>
    
    <div class="bg-teal-400 w-screen h-70vh"></div>
    <div class="bg-slate-800 w-screen h-20"></div>

    <main class="px-20">
        <section class="box-border text-center my-12 border-b">
            <h1 class="font-satoshi text-4xl text-teal-500 font-bols my-12 font-bold">OFFERS</h1>
            <div class="grid grid-cols-4 justify-items-center">
                <?php include '../layout/product-container.php'; ?>
                <?php include '../layout/product-container.php'; ?>
                <?php include '../layout/product-container.php'; ?>
                <?php include '../layout/product-container.php'; ?>
            </div>

            <button class="py-2 px-9 border-2 rounded-full my-8">View All</button>
        </section>

        <section class="box-border text-center my-12">
            <h1 class="font-satoshi text-4xl text-teal-500 font-bols my-12 font-bold">TOP SALES</h1>
            <div class="grid grid-cols-4 justify-items-center">
                <?php include '../layout/product-container.php'; ?>
                <?php include '../layout/product-container.php'; ?>
                <?php include '../layout/product-container.php'; ?>
                <?php include '../layout/product-container.php'; ?>
            </div>

            <button class="py-2 px-9 border-2 rounded-full my-8">View All</button>
        </section>

        <section class="box-border text-center my-12 border rounded-xl px-10 pb-6">
            <h1 class="font-satoshi text-4xl text-teal-500 font-bols my-12 font-bold">CATEGORY</h1>
            <div class="grid grid-cols-3 box-border">
                <div class="grid grid-flow-col mb-6 mr-2 border border-slate-700 rounded-lg">
                    <div class="py-4">Category 1</div>
                    <div class="bg-gray-500 h-40 rounded-r-lg"></div>
                </div>

                <div class="grid grid-cols-3 col-span-2 mb-6 ml-2 border border-slate-700 rounded-lg">
                    <div class="py-4">Category 1</div>
                    <div class="bg-gray-500 h-40 col-span-2 rounded-r-lg"></div>
                </div>

                <!-- mew -->

                <div class="grid grid-cols-3 col-span-2 mb-6 mr-2 border border-slate-700 rounded-lg">
                    <div class="py-4">Category 1</div>
                    <div class="bg-gray-500 h-40 col-span-2 rounded-r-lg"></div>
                </div>

                <div class="grid grid-flow-col mb-6 ml-2 border border-slate-700 rounded-lg">
                    <div class="py-4">Category 1</div>
                    <div class="bg-gray-500 h-40 rounded-r-lg"></div>
                </div>

                <!-- mew -->

                <div class="grid grid-flow-col mb-6 mr-2 border border-slate-700 rounded-lg">
                    <div class="py-4">Category 1</div>
                    <div class="bg-gray-500 h-40 rounded-r-lg"></div>
                </div>

                <div class="grid grid-cols-3 col-span-2 mb-6 ml-2 border border-slate-700 rounded-lg">
                    <div class="py-4">Category 1</div>
                    <div class="bg-gray-500 h-40 col-span-2 rounded-r-lg"></div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>