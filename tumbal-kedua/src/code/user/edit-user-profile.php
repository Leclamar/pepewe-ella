<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-satoshi">
    <header class="flex justify-between border-b py-3 px-10 bg-white sticky top-0">
        <a href="profile.php" class="flex items-center cursor-pointer">
            <div class="size-6">
                <img src="../../img/icons8-back-100.png">
            </div>
            <p class=" font-bold text-teal-400 ml-1">BACK</p>
        </a>
        
        <div class="flex">
            <div>
                <img>
                <h1 class="text-2xl font-bold text">SHOP<span class="text-teal-400">.CO</span></h1>
            </div>
        </div>
    </header>

    <main class="grid grid-flow-col px-10 mt-4">
        <form>
            <label>Full Name</label> <br>
            <input class="w-full my-1 p-2 border bg-slate-100 rounded-md" type="text" placeholder="Your Name"> <br>

            <label>Username</label> <br>
            <input class="w-full my-1 p-2 border bg-slate-100 rounded-md" type="text" placeholder="Your Username"> <br>
 
            <label>Email Address</label> <br>
            <input class="w-full mt-1 mb-2 p-2 border bg-slate-100 rounded-md" type="email" placeholder="Your Email"> <br>

            <label>Phone Number</label> <br>
            <input class="w-full mt-1 mb-2 p-2 border bg-slate-100 rounded-md" type="tel" placeholder="Your Phone Number"> <br>

            <label>Address</label> <br>
            <input class="w-full mt-1 mb-2 p-2 border bg-slate-100 rounded-md" type="text" placeholder="Your Address"> <br>

            <button class="w-full my-8 p-2 bg-teal-400 text-white rounded-md hover:bg-teal-500 active:bg-teal-700">Save Changes</button>
        </form>

        <div class="justify-items-center mt-8">
            <div class="size-60 rounded-full content-center items-center mb-3">
                <img class="h-full w-full" src="../../img/profpic.png">
            </div>
            <label class="font-bold text-2xl text-slate-700">Full Name</label>
        </div>
    </main>
</body>
</html>
