<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/output.css">
    <title>Add Product</title>
</head>
<body class="font-satoshi">
    <header class="flex justify-between border-b py-3 px-10 bg-white sticky top-0">
        <a href="manage-product.php" class="flex items-center cursor-pointer">
            <div class="size-6">
                <img src="../../img/icons8-back-100.png">
            </div>
            <p class=" font-bold text-teal-400 ml-1">BACK</p>
        </a>
        
        <div class="flex">
            <button class="text-sm box-border bg-slate-600 text-slate-100 py-2 px-5 mr-6 rounded-lg self-center hover:bg-slate-700 active:bg-slate-500">Cancel</button>
            <button class="text-sm box-border bg-teal-400 text-white py-2 px-5 rounded-lg self-center hover:bg-teal-500 active:bg-teal-300">Upload</button>
        </div>
    </header>

    <form class="mt-12 flex box-border w-auto mb-24 px-10 h-fit">
        <div class="w-40vw h-70vh bg-gray-200 rounded-md place-items-center content-center">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACN0lEQVR4nO2Yz0rcUBTG00KhVrtsqc/gQly5V0s3pdA+hI/h2NKFPkBfwEeQ4nDnnnvOzDnjrGajgoIW6spFuy6oFCMnk/kHMePYzDSJ94MQEkjm/O733XNzJwi8vLweh4AkLMMRlA4kKKjAg+RM4B3JmcA7MiHt7rZfAPIXS/wDiK/0bEk2W63WTGEc0WIBuZW0PliS/TSYXIFYks9R0Sg/a8irxphZS7Jmic+j+pArBQHROEnoXGNl+L6sdQD5rBAgOie0BiKaG7zfbDZfxvVdZgZizP5r52QxmKAjNeTVoSLr8rYTLTnNBEQhAPkIUI6J6HmQsbQ7dSY2n2uc1BmFGJgjG/8M0oPod5HtrEG0K2l3gqQvW2RJG7x7gQxC6IQDkr96IPJy1jBaLCBXOr/DV9EZeWNUAkaC7DG/ApTDeFROiOiNutG9HrVQTUuQBjIUJ+Qjve6PmhzHEdtKenG73X4W5AHE3AHRlcaqGzFL/B7q8tGSfAWUKqD8Snpm6iB7CXFKeljdSN16Ip9UG435/wJiRjgxqF7EIgekqo7UnHzSdea+75gYCIxZwF3dZJwBmQwIpcdpHA1FNCV+tl5fyh4Es4EYB8YiX+uqXqmETzMDMVPsNNH+g+SbRb6JP03MQ5sD5OHrt4aNd4ByEe9FfjvX/FBIkF5zIPnej5vs6MaqcCCqMAyfWJR1IP5Tir9MnZMFS3JQeJCHyIPkTeCjlTOBdyRngtI6AgU/gtKAeHl5PQ7dAiHBBQsV2KcSAAAAAElFTkSuQmCC" alt="image--v1">
            <button class="text-gray-400 text-sm mt-2 cursor-pointer ">Add you product picture</button>
        </div>

        <div class="ml-12 w-40vw">
            <h2 class="text-3xl font-extrabold my-2 text-teal-500">Detail Product</h2>
            <div class="w-full h-fit">
                <label class="h-fit text-lg font-medium">Product Name:</label> <br>
                <input class="h-fit mb-3 mt-1 border p-2 rounded-lg w-full bg-slate-100" placeholder="Enter your product name" type="text"> <br>

                <label class="text-lg font-medium">Description:</label> <br>
                <textarea class="mb-3 mt-1 border p-2 rounded-lg w-full resize-none h-32 bg-slate-100" placeholder="Enter your product description"></textarea> <br>

                <label class="text-lg font-medium">Price:</label> <br>
                <input class="mb-3 mt-1 border p-2 rounded-lg w-full bg-slate-100" type="number" placeholder="Enter your product price"> <br>

                <label class="text-lg font-medium">Category:</label> <br>
                <select class="mb-3 mt-1 border p-2 rounded-lg w-full bg-slate-100">
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                    <option value="4">Category 4</option>
                    <option value="5">Category 5</option>
                </select> <br>

                <label class="text-lg font-medium">Stock:</label> <br>
                <input class="mb-3 mt-1 border p-2 rounded-lg w-full bg-slate-100" type="number" placeholder="Enter your product stock"><br>
            </div>
        </div>
    </form>
</body>
</html>
