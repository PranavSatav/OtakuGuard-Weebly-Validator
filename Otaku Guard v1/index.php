<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Tailwind CSS Template</title>

    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Style to hide the 000webhost powered-by logo -->
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }
    </style>
</head>

<body>

   
<main
  class="container mx-auto p-4 mt-12 bg-white flex flex-col items-center justify-center text-gray-700"
>
  <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-4">
    <img src="https://i.imgur.com/2zYthWq.png">
  </div>
  <div class="w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12 mb-6">
    <hr class="mb-8">

    <div class="flex mb-8 items-center">
      
   <a href="email.php" class="mr-4 w-1/2 bg-gray-800 text-white p-2 rounded font-semibold hover:bg-gray-900" style="display: inline-block; text-decoration: none; text-align: center; font-family: Courier, monospace;">
  Analyzer
</a>


      
      <a href="passwords1.php" class="mr-4 w-1/2 bg-gray-800 text-white p-2 rounded font-semibold hover:bg-gray-900" style="display: inline-block; text-decoration: none; text-align: center; font-family: Courier, monospace;">
  Breached Passwords
</a>

    </div>
  </div>
  
  <div
    class="flex justify-center w-10/12 sm:w-8/12 md:w-6/12 lg:w-5/12 xl:w-4/12"
  >
    <p class="font-semibold  text-gray-600 text-sm">
     <pre> Welcome to our free, open-source analytical tool.. 
                    Scans elements such as emails, passwords, 
                                         SSL certificates, and more.
                </pre>
    </p>
  </div>
</main>

</body>

</html>
