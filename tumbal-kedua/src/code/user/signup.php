<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../css/output.css" rel="stylesheet">
  <title>Sign Up</title>
</head>
<body class="flex max-h-screen">
  <div class="w-6/12 max-h-screen">
    <img src="../../img/Abstract Painting by Suzanne Vaughan, Acrylic on Canvas, 40 x 60 in - Large, Abstract Original Artwork For Sale on Saatchi Art_.jpeg" class="max-h-screen w-full object-cover">
  </div>

  <div class="w-6/12 py-8 justify-items-center">
    <h1 class="text-4xl font-bold text-teal-500 text-center mb-4 font-satoshi">
      Create an Account
    </h1>
    <p class="text-center my-5 text-sm">
      Please enter your contact detail to connect
    </p>
    <button class="box-border flex text-center border-black border py-4 rounded-xl items-center place-content-center hover:bg-slate-200 w-3/5 active:transition-all duration-500 active:scale-95 font-satoshi">
      <img src="../../img/google.png" class="h-full max-w-7">
      <a class="px-4 text-xs">Sign in with Google</a>
    </button>

    <div class="flex w-3/5 box-border items-center">
      <div class="border border-slate-500 w-2/5 h-0"></div>
      <div class="w-1/5 text-center text-xs my-4">OR</div>
      <div class="border border-slate-500 w-2/5 h-0"></div>
    </div>

    <form class="w-3/5 mb-4">
      <label class="text-xs">Username:</label> <br>
      <input class="text-xs box-border border-2 w-full py-2 px-3 rounded-lg mb-2" type="email" name="text" placeholder="Enter your username"> <br>

      <label class="text-xs">Email:</label> <br>
      <input class="text-xs box-border border-2 w-full py-2 px-3 rounded-lg mb-2" type="email" name="email" placeholder="Enter your email"> <br>

      <label class="text-xs">Password:</label> <br>
      <input class="text-xs box-border border-2 w-full py-2 px-3 rounded-lg mb-6" type="password" name="password" placeholder="Enter your password"> <br>

      <button class="border bg-teal-400 text-white text-sm py-3 w-full rounded-lg hover:bg-teal-600 cursor-pointer active:scale-95 active:bg-teal-700 active:transition-all duration-500 font-satoshi">Sign Up</button>
    </form>

    <a class="box-border text-xs">Already have an account? <a class="text-teal-500 text-xs hover:underline font-semibold cursor-pointer hover:text-teal-700" href="sign-in.php">Sign In</a></a>
  </div>
</body>
</html>