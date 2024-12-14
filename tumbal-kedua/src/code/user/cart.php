<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/output.css" rel="stylesheet">
    <title>Cart</title>
</head>
<body class="font-satoshi px-12">
    <?php include '../layout/header.php'; ?>

    <section class="mt-2">
        <div>
            <a href="" class="text-gray-400 mr-2 hover:text-gray-700 cursor-pointer text-sm">Home</a>
            <a href="" class="text-sm">Cart</a>
        </div>

        <main class="relative">
            <h1 class="font-bold text-slate-800 text-2xl my-5">Your Cart</h1>
            <article class="flex justify-between">
                <div class="w-2/4">
                    <?php include '../layout/cart-product.php'; ?>
                    <?php include '../layout/cart-product.php'; ?>
                </div>
                    
                <div class="box-border border py-5 px-7 rounded-md w-2/6 sticky top-24 max-h-fit">
                    <h2 class="font-bold text-lg mb-3">Order Summary</h2>

                    <div>
                        <div class="my-1 flex justify-between font-light"><div>Subtotal:</div> <div>Rp 0</div></div>
                        <div class="my-1 flex justify-between font-light"><div>Discount:</div> <div>Rp 0</div></div>
                        <div class="my-1 flex justify-between font-light"><div>Shipping:</div> <div>Rp 0</div></div>
                        <div class="border w-full my-2"></div>
                        <div class="my-1 flex justify-between font-medium"><div>Total:</div> <div>Rp 0</div></div>

                        <form class="flex content-center mt-5 justify-between">
                            <div class="border rounded-full px-3 py-1 content-center mr-4 w-full box-border bg-slate-100 flex items-center">
                                <img src="../../img/icons8-price-tag-90.png" class="size-5 mr-2">
                                <input type="text" placeholder="Add promo code" class="outline-none content-center text-sm bg-slate-100">
                            </div>
        
                            <input type="button" value="Apply" class="bg-slate-700 text-white py-2 px-5 rounded-full text-sm active:bg-teal-400 cursor-pointer">
                        </form>

                        <button onclick="window.location.href='checkout.php'" class="bg-slate-900 text-white w-full py-2 rounded-full mt-4 active:bg-teal-500">Checkout</button>
                    </div>
                </div>
            </article>
        </main>
    </section>
</body>
</html>