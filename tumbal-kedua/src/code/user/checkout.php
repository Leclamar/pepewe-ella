<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/output.css" rel="stylesheet">
    <title>Billing Details</title>
</head>
<body class="font-satoshi px-12">
    <?php include '../layout/header.php';?>

    <section class="mt-2">
        <div>
            <a href="" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Home</a>
            <a href="" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Cart</a>
            <a href="" class="text-sm">Checkout</a>
        </div>

        <main>
            <h1 class="font-extrabold text-teal-500 text-2xl my-4">Billing Details</h1>
            <article class="grid grid-flow-col justify-between">
                <form class="grid grid-flow-row box-border w-40vw">
                    <label class="mb-2">Full Name:</label>
                    <input class="border px-2 py-1 rounded-md bg-slate-100 box-border mb-4" type="text" name="fullname" placeholder="Enter your name">
    
                    <label class="mb-2">Phone Number:</label>
                    <input class="border px-2 py-1 rounded-md bg-slate-100 box-border mb-4" type="text" name="phone-number" placeholder="Enter your number">
    
                    <label class="mb-2">Address</label>
                    <input class="border px-2 py-1 rounded-md bg-slate-100 box-border mb-4" type="text" name="address" placeholder="Enter your address">
    
                    <div>
                        <input type="checkbox"><label class="ml-2">Save this information</label>
                    </div>
                </form>
                
                <div class="box-border w-40vw">
                    <?php include '../layout/co-product.php'; ?>
    
                    <div class="my-1 flex justify-between font-light"><div>Subtotal:</div> <div>Rp 0</div></div>
                    <div class="my-1 flex justify-between font-light"><div>Shipping:</div> <div>Rp 0</div></div>
                    <div class="border w-full my-2"></div>
                    <div class="my-1 flex justify-between font-medium"><div>Total:</div> <div>Rp 0</div></div>

                    <form>
                        <input name="payment" type="radio"><label class="ml-2">Bank</label><br>
                        <input name="payment" type="radio"><label class="ml-2">Cash on Delivery</label>
                    </form>

                    <form class="flex content-center mt-5 justify-between">
                        <div class="border rounded-full px-3 py-1 content-center mr-4 w-full box-border items-center flex bg-slate-100">
                            <img src="../../img/icons8-price-tag-90.png" class="size-5 mr-2">
                            <input type="text" placeholder="Add promo code" class="outline-none content-center text-sm bg-slate-100">
                        </div>
    
                        <input type="button" value="Apply" class="bg-slate-700 text-white py-2 px-5 rounded-full text-sm active:bg-teal-400 cursor-pointer">
                    </form>
                    
                    <button class="bg-slate-900 text-white w-full py-2 rounded-full mt-4 active:bg-teal-500">Place Order</button>
                </div>
            </article>
        </main>
    </section>
</body>
</html>