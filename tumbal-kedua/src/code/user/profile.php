<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/output.css">
</head>
<body class="font-satoshi px-12">
    <?php include '../layout/header.php';?>

    <!-- Main Container -->
    <div class="container mx-auto p-6">
        <!-- Profile Header -->
        <div class="bg-white shadow rounded-lg p-6 mb-6 flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center">
            <!-- User Avatar -->
            <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-gray-300">
            <img src="https://via.placeholder.com/150" alt="User Avatar" class="w-full h-full object-cover">
            </div>

            <!-- User Details -->
            <div class="ml-0 md:ml-6 mt-4 md:mt-0 text-center md:text-left">
            <h1 class="text-2xl font-bold text-gray-800">Watdasigma</h1>
            <p class="text-gray-600 mt-2">watdasigma@gmail.com</p>
            <p class="text-gray-600">Joined: Aug 17, 1945</p>
            </div>
        </div>

        <!-- Edit Profile Button -->
        <div class="mt-4 md:mt-0">
            <button id="editProfileButton" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">
                <a href="edit-user-profile.php">Edit Profile</a>
            </button>
        </div>
        </div>

        <!-- Personal Information -->
        <div class="bg-white shadow rounded-lg p-6 mb-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Personal Information</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
            <p class="text-gray-600"><strong>Full Name:</strong> Squidward Tenpoles</p>
            </div>
            <div>
            <p class="text-gray-600"><strong>Phone:</strong> +123 456 7890</p>
            </div>
            <div>
            <p class="text-gray-600"><strong>Address:</strong> 123 Enkanomiya, Inazuma, Teyvat</p>
            </div>
            <div>
            <p class="text-gray-600"><strong>Date of Birth:</strong> Jan 1, 1900</p>
            </div>
        </div>
        </div>

        <!-- Account Settings -->
        <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Account Settings</h2>
        <ul class="space-y-4">
            <li>
            <a href="#" class="text-blue-500 hover:underline">Change Password</a>
            </li>
            <li>
            <a href="order-status.php" class="text-blue-500 hover:underline">Order Status</a>
            </li>
            <li>
            <a href="#" class="text-red-500 hover:underline">Delete Account</a>
            </li>
        </ul>
        </div>
    </div>
</body>
</html>
