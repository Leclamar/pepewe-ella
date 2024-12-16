<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">
    <title>Order Details</title>
</head>
<body class="font-satoshi">
    <header class="flex justify-between border-b py-3 px-10 bg-white sticky top-0">
        <a href="manage-order.php" class="flex items-center cursor-pointer">
            <div class="size-6">
                <img src="../../img/icons8-back-100.png">
            </div>
            <p class=" font-bold text-teal-400 ml-1">BACK</p>
        </a>
    </header>

    <!-- Main Container -->
    <div class="container mx-auto pt-2">
        <!-- Page Header -->
        <div class="bg-white shadow rounded-lg p-4 mb-6 flex justify-between items-center">
        <h1 class="font-extrabold text-teal-500 text-3xl my-8">Order Details</h1>
        <!-- Dropdown Container -->
        <div class="relative">
            <!-- Dropdown Button -->
            <button id="dropdownButton" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update Status
            <svg class="w-4 h-4 inline-block ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="absolute mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg hidden">
            <option class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Needs to be Shipped</option>
            <option class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Shipped</option>
            <option class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Delivered</option>
            </div>
        </div>
        </div>

        <!-- Order Information -->
        <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
            <h2 class="text-lg font-semibold text-gray-700">Order Information</h2>
            <p class="text-gray-600"><strong>Order ID:</strong> #1</p>
            <p class="text-gray-600"><strong>Order Date:</strong> Aug 17, 1945</p>
            <p class="text-gray-600"><strong>Status:</strong> 
                <span class="text-teal-500 font-semibold">Delivered</span>
            </p>
            </div>
            <div>
            <h2 class="text-lg font-semibold text-gray-700">Customer Information</h2>
            <p class="text-gray-600"><strong>Name:</strong> Watdasigma</p>
            <p class="text-gray-600"><strong>Email:</strong> watdasigma@gmail.com</p>
            <p class="text-gray-600"><strong>Phone:</strong> +123 456 7890</p>
            </div>
        </div>
        </div>

        <!-- Shipping Address -->
        <div class="bg-white shadow rounded-lg p-6 mb-6">
        <h2 class="text-lg font-semibold text-gray-700">Shipping Address</h2>
        <p class="text-gray-600">123 Enkanomiya</p>
        <p class="text-gray-600">Inazuma 10001</p>
        <p class="text-gray-600">Teyvat</p>
        </div>

        <!-- Ordered Items -->
        <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Ordered Items</h2>
        <table class="w-full text-left table-auto border-collapse border border-gray-200">
            <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2 text-gray-700">Item</th>
                <th class="border px-4 py-2 text-gray-700">Quantity</th>
                <th class="border px-4 py-2 text-gray-700">Price</th>
                <th class="border px-4 py-2 text-gray-700">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border px-4 py-2">Product A</td>
                <td class="border px-4 py-2">2</td>
                <td class="border px-4 py-2">$50</td>
                <td class="border px-4 py-2">$100</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Product B</td>
                <td class="border px-4 py-2">1</td>
                <td class="border px-4 py-2">$30</td>
                <td class="border px-4 py-2">$30</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Product C</td>
                <td class="border px-4 py-2">3</td>
                <td class="border px-4 py-2">$20</td>
                <td class="border px-4 py-2">$60</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="border px-4 py-2 font-semibold text-right">Total</td>
                <td class="border px-4 py-2 font-semibold">$190</td>
            </tr>
            </tfoot>
        </table>
        </div>
    </div>

    <script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
    
        dropdownButton.addEventListener('click', () => {
          dropdownMenu.classList.toggle('hidden');
        });
    
        // Optional: Close the dropdown if clicked outside
        document.addEventListener('click', (event) => {
          if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
          }
        });
      </script>
</body>
</html>
