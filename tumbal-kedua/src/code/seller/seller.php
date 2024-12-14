<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/output.css">
    <title>Login as Seller</title>
</head>
<body class="box-border max-w-full max-h-screen static">
    <section class="max-md:flex-col-reverse box-border flex justify-between max-w-screen">
        <div class="max-md:w-screen max-md:px-12 max-md: px-24 box-border place-items-center w-2/4 content-center pb-10">
            <h1 class="max-md:mt-6 text-center text-4xl font-satoshi font-bold text-teal-500 mb-4">
                Welcome Back, User!
            </h1>
            <p class="mb-5 text-sm">
                Enter your email and password to sign in
            </p>

            <form class="box-border w-11/12 text-sm">
                <label>Email:</label><br>
                <input type="email" name="email" class="box-border border-2 w-full rounded-lg px-3 py-2 mb-2" placeholder="Enter your email"><br>

                <label>Password:</label><br>
                <input type="password" name="password" class="box-border border-2 w-full rounded-lg px-3 py-2 mb-2" placeholder="Enter your password"><br>

                <a class="cursor-pointer hover:underline hover:text-teal-500 hover:font-semibold mb-4 float-right text-xs m-3">Forgot password</a><br>

                <button class="border bg-teal-400 text-white text-sm py-3 w-full rounded-lg hover:bg-teal-600 cursor-pointer active:scale-95 active:bg-teal-700 active:transition-all duration-500 font-satoshi">Sign In</button>
            </form>
        </div>

        <div class="max-md:w-screen w-2/4 max-h-fit">
            <img class="max-md:h-20vh max-md:w-screen max-h-screen w-full object-cover" src="../../img/Abstract Painting by Suzanne Vaughan, Acrylic on Canvas, 40 x 60 in - Large, Abstract Original Artwork For Sale on Saatchi Art_.jpeg">
        </div>
    </section>

    <!-- <footer class="absolute bottom-0">
        <div class="box-border max-h-fit w-screen place-items-center">
            <div class="max-md:flex max-md:w-full max-md:px-6 box-border max-w-fit py-5 backdrop-blur-sm bg-teal-300/50 px-12 rounded-t-lg text-sm">
                <a class="max-md:mr-0.5 max-md:text-xs max-md:w-6 mr-64 text-sm text-teal-700">@ 2024, Made by nyanyanya</a>
                <a class="max-md:text-teal-700 max-md:text-xs h-full w-full py-3 px-4 text-sm text-white cursor-pointer hover:bg-teal-400/50 rounded-xl transition-colors ease-in duration-300 font-semibold">Our team</a>
                <a class="max-md:text-teal-700 max-md:text-xs h-full w-full py-3 px-4 text-sm text-white cursor-pointer hover:bg-teal-400/50 rounded-xl transition-colors ease-in duration-300 font-semibold">Blog</a>
                <a class="max-md:text-teal-700 max-md:text-xs h-full w-full py-3 px-4 text-sm text-white cursor-pointer hover:bg-teal-400/50 rounded-xl transition-colors ease-in duration-300 font-semibold">License</a>
            </div>
        </div>
    </footer> -->
</body>
</html>