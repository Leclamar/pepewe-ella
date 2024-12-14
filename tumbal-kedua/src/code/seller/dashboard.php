<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body class="font-satoshi flex justify-start box-border">
    <nav class="min-w-20vw bg-slate-800 text-white h-screen h-max-screen py-3 px-6 box-border">
        <header class="max-w-fit mb-12 flex py-4">
            <div class="size-9 bg-black rounded-full mr-2">
                <!-- <img> -->
            </div>
            <h1 class="font-bold text-2xl">SHOP<span class="font-bold text-teal-400">.CO</span></h1>
        </header>

        <ul class="max-w-fit box-border">
            <p class="mb-3 text-xs font-thin text-slate-300 tracking-wide border-b pb-2">MENU</p>
            <li class="py-3 mb-3 flex items-center bg-teal-700 bg-opacity-50 rounded-xl">
                <div class="size-5 mr-2 ml-3">
                    <img src="../../img/dashboard-teal.png">
                </div>
                <a class="px-3 font-thin text-teal-200" href="dashboard.php">Dashboard</a>
            </li>
            <li class="py-3 mb-3 flex items-center w-full hover:bg-teal-700 hover:bg-opacity-10 rounded-xl">
                <div class="size-5 mr-2 ml-3">
                    <img src="../../img/manage-product-white.png">
                </div>
                <a class="px-3 font-thin" href="manage-product.php">Manage Products</a>
            </li>
            <li class="py-3 mb-3 flex items-center hover:bg-teal-700 hover:bg-opacity-10 rounded-xl w-full">
                <div class="size-5 mr-2 ml-3">
                    <img src="../../img/manage-order-white.png">
                </div>
                <a class="px-3 font-thin" href="manage-order.php">Manage Orders</a>
            </li>
        </ul>
    </nav>

    <main class="py-3 w-screen box-border">
        <header class="grid grid-flow-col border-b-2 px-10 justify-end pb-3">
            <div class="grid grid-flow-col justify-start items-center mx-6">
                <div class="size-7 rounded-full mx-2">
                    <img src="../../img/profpic.png">
                </div>

                <p class="font-semibold text-sm">Ella</p>
            </div>
        </header>

        <section class="px-10">
            <h1 class="font-extrabold text-teal-500 text-3xl my-3">Dashboard</h1>

            <div class="grid grid-flow-col w-full">
                <div class="border-slate-300 border-2 px-6 pt-3 pb-4 rounded-md mr-4">
                    <h3 class="font-medium">Total Revenue</h3>
                    <h1 class="font-bold text-slate-700 text-3xl my-1">666</h1>
                    <p class="text-sm"><span class="text-green-500">16%</span> vs last week</p>
                </div>
    
                <div class="border-slate-300 border-2 px-6 pt-3 pb-4 rounded-md mr-4">
                    <h3 class="font-medium">Total Revenue</h3>
                    <h1 class="font-bold text-slate-700 text-3xl my-1">666</h1>
                    <p class="text-sm"><span class="text-green-500">16%</span> vs last week</p>
                </div>
    
                <div class="border-slate-300 border-2 px-6 pt-3 pb-4 rounded-md mr-4">
                    <h3 class="font-medium">Total Revenue</h3>
                    <h1 class="font-bold text-slate-700 text-3xl my-1">666</h1>
                    <p class="text-sm"><span class="text-red-500">-16%</span> vs last week</p>
                </div>
    
                <div class="border-slate-300 border-2 px-6 pt-3 pb-4 rounded-md">
                    <h3 class="font-medium">Total Revenue</h3>
                    <h1 class="font-bold text-slate-700 text-3xl my-1">666</h1>
                    <p class="text-sm"><span class="text-green-500">16%</span> vs last week</p>
                </div>
            </div>
    
            <div class="w-full mt-6">
                <h1 class="text-teal-500 text-2xl font-extrabold my-3">Recent Transaction</h1>
                <table class="border w-full rounded-sm text-sm">
                    <thead>
                        <tr class="border">
                            <th class="text-slate-400 border py-2">Account</th>
                            <th class="text-slate-400 border py-2">Product</th>
                            <th class="text-slate-400 border py-2">Order Date</th>
                            <th class="text-slate-400 border py-2">Receipt Date</th>
                            <th class="text-slate-400 border py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">Ella</td>
                            <td class="border p-2">Product 1</td>
                            <td class="border p-2">1 Jan 2001</td>
                            <td class="border p-2">3 Jan 2007</td>
                            <td class="border p-2 text-green-500 font-medium"><div class="py-1 text-sm w-full h-full bg-green-100 text-center rounded-md">Paid</div></td>
                        </tr>
                        <tr>
                            <td class="border p-2">Ella</td>
                            <td class="border p-2">Product 1</td>
                            <td class="border p-2">1 Jan 2001</td>
                            <td class="border p-2">3 Jan 2007</td>
                            <td class="border p-2 text-green-500 font-medium"><div class="py-1 text-sm w-full h-full bg-green-100 text-center rounded-md">Paid</div></td>
                        </tr>
    
                        <tr>
                            <td class="border p-2">Ella</td>
                            <td class="border p-2">Product 1</td>
                            <td class="border p-2">1 Jan 2001</td>
                            <td class="border p-2">3 Jan 2007</td>
                            <td class="border p-2 text-gray-600 font-medium"><div class="py-1 text-sm w-full h-full bg-gray-300 text-center rounded-md">In Delivery</div></td>
                        </tr>
    
                        <tr>
                            <td class="border p-2">Ella</td>
                            <td class="border p-2">Product 1</td>
                            <td class="border p-2">1 Jan 2001</td>
                            <td class="border p-2">3 Jan 2007</td>
                            <td class="border p-2 text-red-500 font-medium"><div class="py-1 text-sm w-full h-full bg-red-100 text-center rounded-md">Paid</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        
    </main>
</body>
</html>