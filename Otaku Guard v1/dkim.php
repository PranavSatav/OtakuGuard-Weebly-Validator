<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-REHJTs1r2QjK3vGozUJ4u4lCkC1a4Kxikc6OF9myPfz3l5o1Dck/yfcNgdRwT2Ez" crossorigin="anonymous">
    

    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
        ::-webkit-scrollbar {
    display: none;
}
    </style>
</head>
<body>

    <div class="w-full bg-white shadow-xl rounded-lg flex overflow-x-auto custom-scrollbar h-screen">
                        <div class="w-64 px-4">
                            <div class="h-16 flex items-center">
                     <a href="index.php">
<img src="https://i.imgur.com/2zYthWq.png" ></a>
                            </div>
                            <div class="px-2 pt-4 pb-8 border-r h-5/6 border-gray-300">
                                <ul class="">
                                    <li>
                                        <a href="email.php" class=" relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                            <span class="flex items-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 ml-2 mr-2 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                                </svg>
                                                <span>E-Mail Validator</span>
                                            </span>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ssl.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 mr-2 ml-2 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                            <span>SSL Identifier</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dkim.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 mr-2 ml-2 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>DKIM Validator</span>
                                        </a>
                                    </li>
                                   <!-- <li>
                                        <a class="hover:bg-gray-500 hover:bg-opacity-10 hover:text-blue-600 flex items-center text-gray-700 py-1.5 px-4 rounded space-x-2 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                            </svg>
                                            <span>Important</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover:bg-gray-500 hover:bg-opacity-10 hover:text-blue-600 flex items-center text-gray-700 py-1.5 px-4 rounded space-x-2 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                            </svg>
                                            <span>Sent</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover:bg-gray-500 hover:bg-opacity-10 hover:text-blue-600 flex items-center justify-between text-gray-700 py-1.5 px-4 rounded space-x-2 cursor-pointer">
                                            <span class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                <span>Drafts</span>
                                            </span>
                                            <span class="bg-sky-500 text-gray-100 font-bold px-2 py-0.5 text-xs rounded-lg">1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover:bg-gray-500 hover:bg-opacity-10 hover:text-blue-600 flex items-center text-gray-700 py-1.5 px-4 rounded space-x-2 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                            </svg>
                                            <span>Spam</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover:bg-gray-500 hover:bg-opacity-10 hover:text-blue-600 flex items-center text-gray-700 py-1.5 px-4 rounded space-x-2 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            <span>Trash</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="flex-1 px-2">
                            <div class="h-16 flex items-center justify-between">
                                <div class="flex items-center">
                                    <a href="#" class="flex items-center text-gray-700 px-2 py-1 space-x-0.5 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100" title="Back">
                                       <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                        </svg> -->
                                        <span class="text-sm font-bold">About</span>                                   
                                    </a>
                                    <div class="flex items-center">
                                        <span class="bg-gray-300 h-6 w-[.5px] mx-3"></span>
                                        <div class="flex items-center space-x-2">
                                            <button title="Archive" class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"></path>
                                                </svg>
                                            </button>
                                            <button title="Mark As Spam" class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                                </svg>
                                            </button>
                                            <button title="Delete" class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <span class="bg-gray-300 h-6 w-[.5px] mx-3"></span>
                                        <div class="flex items-center space-x-2">
                                            <button title="Mark As Unread" class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </button>
                                            <button title="Add Star" class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 flex items-center space-x-4">
                                    <div class="flex items-center space-x-2">
                                        <button class="bg-gray-200 text-gray-400 p-1.5 rounded-lg" title="Previous Email">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 p-1.5 rounded-lg transition duration-150" title="Nex Email">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <h4 class="text-lg text-gray-800 font-bold pb-2 mb-4 border-b-2">DKIM Analyzer - Signatures / SPF Passes / HTML Link Parsing</h4>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://icones.pro/wp-content/uploads/2022/02/services-parametres-et-icone-d-engrenage-gris.png" class=" w-12 h-12 ">
                                        <div class="flex flex-col ml-2">
                                            <span class="text-sm font-semibold">Enter an e-mail header to perform checks..</span>
                                            <span class="text-xs text-gray-400"><?php
// Function to get the client IP address
function getClientIp() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

// Get the user's IP address
$user_ip = getClientIp();

// Display the IP address
echo "Current Operating IP Address: " . $user_ip;
?>
</span>
                                        </div>
                                    </div>
                                    <span class="text-sm mr-8 text-gray-500"><?php
// Set the timezone to India
date_default_timezone_set('Asia/Kolkata');

// Get the current timestamp
$current_timestamp = time();

// Format the timestamp in the desired format
$formatted_date = date('M d, Y, h:i A', $current_timestamp);

// Display the formatted date
echo "$formatted_date";
?>
</span>
                                </div>
                                <div class="py-6 pl-2 text-gray-700">
                                    
                                    <div class="bg-white rounded w-full">


        <form class="mr-8" method="post" action="">
            <label for="emailContent" class="block text-sm font-medium text-gray-700">Email Header Content:</label>
            <textarea name="emailContent" id="emailContent" rows="5" class="mt-1  p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Paste email content / header here.."></textarea>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md focus:outline-none focus:ring focus:border-blue-300">Analyze Headers</button>
            </div>
        </form>


  

</div>


<!--<div class="flex mb-8 mr-8 flex-col">
  

  <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
      <div class="flex  items-center justify-center rounded-full ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">SPF Record Checks</h2>
        <p class="mt-2 text-sm text-gray-500">Includes Checks for Mechanisms / 3+ Qualifiers / Softfail Tests</p>
      </div>
    </div>

    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
      <div class="flex  items-center justify-center ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">Role of Email</h2>
        <p class="mt-2 text-sm text-gray-500">Detects Whether Email has any Role, ADMIN / SALES / CONTACT</p>
      </div>
    </div>
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
      <div class="flex  items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">Disposable Email</h2>
        <p class="mt-2 text-sm text-gray-500">Skips all checks if Disposable Emails are identified, accurately!</p>
      </div>
    </div>
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
      <div class="flex  items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">Trust Score and Pattern Matching</h2>
        <p class="mt-2 text-sm text-gray-500">Accurate Trust Score with Pattern Matching Algorithms</p>
      </div>
    </div>
  </div>
</div> -->
                   
                   




   

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the email content from the form
        $emailContent = $_POST["emailContent"];

        // Split the email content into lines
        $lines = explode("\n", $emailContent);

        // Initialize variables to store extracted information
        $sender = $recipient = $subject = $dkimSignatures = '';
        $dkimSignatureFound = false; // Flag to check if DKIM signature is found
        $isSpam = false; // Flag to check if the email is flagged as spam or phishing

        // Arrays to store found HTML links and attachments
        $foundHtmlLinks = array();
        $attachments = false;

        // SPF, DKIM, DMARC variables
        $spfResult = "Not checked";
        $dkimResult = ""; // Initialize as empty
        $dmarcResult = ""; // Initialize as empty

        // Scoring variables
        $score = 0;

        // Iterate through each line
        foreach ($lines as $line) {
            // Extract sender
            if (preg_match('/^From: (.+)/', $line, $matches)) {
                $sender = $matches[1];
            }

            // Extract recipient
            if (preg_match('/^To: (.+)/', $line, $matches)) {
                $recipient = $matches[1];
            }

            // Extract subject
            if (preg_match('/^Subject: (.+)/', $line, $matches)) {
                $subject = $matches[1];
            }

            // Extract DKIM signatures
            if (preg_match('/^DKIM-Signature: (.+)/', $line, $matches)) {
                $dkimSignatures .= $matches[1] . "\n";
                $dkimSignatureFound = true; // Set the flag to true
            }

            // Extract SPF result
            if (preg_match('/^Received-SPF: (.+)/', $line, $matches)) {
                $spfResult = trim($matches[1]);
            }

            // Extract DMARC result
            if (preg_match('/^Authentication-Results: (.+)/', $line, $matches)) {
                $authResults = explode(';', $matches[1]);
                foreach ($authResults as $result) {
                    if (strpos($result, 'spf=') !== false) {
                        $spfResult = trim(str_replace('spf=', '', $result));
                    } elseif (strpos($result, 'dkim=') !== false) {
                        $dkimResult = trim(str_replace('dkim=', '', $result));
                    } elseif (strpos($result, 'dmarc=') !== false) {
                        $dmarcResult = trim(str_replace('dmarc=', '', $result));
                    }
                }
            }

            // Extract HTML links
            if (preg_match_all('/https?:\/\/[^\s]+/i', $line, $matches)) {
                foreach ($matches[0] as $link) {
                    $foundHtmlLinks[] = $link;
                }
            }

            // Check for attachments
            if (preg_match('/Content-Disposition: attachment/', $line)) {
                $attachments = true;
            }

            // Additional checks for spam/phishing keywords
            $suspiciousKeywords = array(
                'phishing', 'login', 'password', 'account', 'verify',
                'security', 'alert', 'update', 'suspend', 'validate'
            );

            foreach ($suspiciousKeywords as $keyword) {
                if (stripos($line, $keyword) !== false) {
                    $isSpam = true;
                    $score += 2; // Increase score for each suspicious keyword found
                    break;
                }
            }
        }

        // Calculate the final score out of 10
        $score = min(10, max(0, $score));

      // Display the extracted information
echo "<div class='mt-4 mr-8 mb-4'>";


echo "<table class='border w-full'>";
echo "<tr><td class='border px-4 py-2'><span class='font-semibold'>Sender:</span></td><td class='border px-4 py-2'>$sender</td></tr>";
echo "<tr><td class='border px-4 py-2'><span class='font-semibold'>Recipient:</span></td><td class='border px-4 py-2'>$recipient</td></tr>";
echo "<tr><td class='border px-4 py-2'><span class='font-semibold'>Subject:</span></td><td class='border px-4 py-2'>$subject</td></tr>";

// Display "DKIM signature found" if at least one signature is found
if ($dkimSignatureFound) {
    echo "<tr><td class='border px-4 py-2 bg-green-200  text-green-600 font-semibold'>DKIM Signature found</td><td class='border px-4 py-2'><span class='font-semibold'>DKIM Signatures:</span><br>$dkimSignatures</td></tr>";
} else {
    echo "<tr><td class='border px-4 py-2 bg-red-200  text-red-600 font-semibold'>No DKIM Signatures found</td></tr>";
}

// Display SPF result
echo "<tr><td class='border px-4 py-2'><span class='font-semibold'>SPF:</span></td><td class='border px-4 py-2'>$spfResult</td></tr>";

// Display DMARC result if available
if (!empty($dmarcResult)) {
    echo "<tr><td class='border px-4 py-2'><span class='font-semibold'>DMARC:</span></td><td class='border px-4 py-2'>$dmarcResult</td></tr>";
}

// Display spam/phishing status and score-based summary
echo "<tr><td class='border px-4 py-2'><span class='font-semibold'>Trust Score:</span></td><td class='border px-4 py-2 bg-gray-200 '>$score/10</td></tr>";
if ($score >= 7) {
    echo "<tr><td colspan='2' class='border px-4 py-2 bg-green-200  text-green-600 font-semibold'>This email is likely trustworthy.</td></tr>";
} elseif ($score >= 4) {
    echo "<tr><td colspan='2' class='border px-4 py-2 bg-orange-200  text-orange-600 font-semibold'>This email may be suspicious. Exercise caution.</td></tr>";
} else {
    echo "<tr><td colspan='2' class='border px-4 py-2 bg-red-200  text-red-600 font-semibold'>This email appears to be suspicious. Avoid interacting with it.</td></tr>";
}

// Display HTML links if found
if (!empty($foundHtmlLinks)) {
    echo "<tr><td colspan='2' class='border px-4 py-2 bg-blue-200 text-blue-600 font-semibold'>HTML links found (Caution - Open Links in a Safe Environment)</td></tr>";

    foreach ($foundHtmlLinks as $link) {
        echo "<tr><td class='border px-4 py-2' colspan='2'>";
        echo "<span class='float-left'>$link</span>";
        echo "<a href='$link' target='_blank' class='float-right bg-green-500 text-white px-2 py-1 rounded-md'>Open Link</a>";
        echo "</td></tr>";
    }
}


// Display attachment status
if ($attachments) {
    echo "<tr><td colspan='2' class='border px-4 py-2 bg-orange-200 text-orange-600 font-semibold'>Attachments found</td></tr>";
} else {
    echo "<tr><td colspan='2' class='border px-4 py-2 bg-yellow-200 text-yellow-600 font-semibold'>No attachments found</td></tr>";
}


echo "</table>";
echo "</div>";
    }
    ?>






                                </div>
                          <!--      <div class="border-t-2 flex space-x-4 py-4">
                                    <div class="w-70 flex items-center py-2.5 px-2 border-2 border-gray-300 rounded-lg hover:bg-gray-200">
                                        <div class="flex items-center">
                                            <div class="w-10 flex items-center justify-center">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 121.83"><defs><style>.cls-1,.cls-2{fill-rule:evenodd;}.cls-2{fill:red;}.cls-3{fill:#fff;}</style></defs><path class="cls-1" d="M102.42,37H81.92a8.52,8.52,0,0,1-8.85-8.7V7.53H21a.58.58,0,0,0-.41.18.45.45,0,0,0-.18.42V113.71a.7.7,0,0,0,.18.41.51.51,0,0,0,.41.18h80.84c.18,0,.17-.09.26-.18s.34-.28.34-.41V37Zm7.47,79.08a5.77,5.77,0,0,1-5.76,5.76H18.66a5.77,5.77,0,0,1-5.76-5.76V5.76a5.7,5.7,0,0,1,1.69-4.07A5.77,5.77,0,0,1,18.66,0H76.9a4.22,4.22,0,0,1,2.46.82l29.75,30.12a2.57,2.57,0,0,1,.78,2.6v82.53ZM80,27.69,79.57,9.63,100.66,31l-18.14-.81A2.4,2.4,0,0,1,80,27.69Z"></path><path class="cls-2" d="M6.71,46.28H116.17A6.73,6.73,0,0,1,122.88,53v45.1a6.73,6.73,0,0,1-6.71,6.71H6.71A6.73,6.73,0,0,1,0,98.09V53a6.73,6.73,0,0,1,6.71-6.71Z"></path><path class="cls-3" d="M16.33,59.78h16.2c3.53,0,6.17.83,7.94,2.51s2.63,4.08,2.63,7.18a9.71,9.71,0,0,1-2.88,7.47c-1.91,1.8-4.84,2.69-8.77,2.69H26.1V91.3H16.33V59.78ZM26.1,73.25h2.4a6.22,6.22,0,0,0,4-1,3.17,3.17,0,0,0,1.14-2.51,3.51,3.51,0,0,0-1-2.52c-.66-.69-1.91-1-3.75-1H26.1v7ZM48.3,59.78H62.78a17.47,17.47,0,0,1,6.92,1.16,11.23,11.23,0,0,1,4.35,3.33,13.66,13.66,0,0,1,2.49,5,23.36,23.36,0,0,1,.78,6.11,21.16,21.16,0,0,1-1.15,7.84A13,13,0,0,1,73,87.93a10.38,10.38,0,0,1-4.39,2.51,22.39,22.39,0,0,1-5.81.86H48.3V59.78ZM58,66.91V84.13h2.4a10.16,10.16,0,0,0,4.36-.68,4.65,4.65,0,0,0,2-2.36,14.84,14.84,0,0,0,.73-5.48q0-5-1.63-6.85c-1.09-1.23-2.91-1.85-5.44-1.85Zm24.43-7.13h24.09v6.78H92.24v5.5h12.24v6.39H92.24V91.3H82.46V59.78Z"></path></svg>
                                            </div>
                                            <div class="w-48 ml-2 flex flex-col">
                                                <a href="#" class="text-sm text-gray-700 font-bold truncate">Terms and Conditions.pdf</a>
                                                <span class="text-gray-500 text-xs">1.5 MB</span>
                                            </div>
                                        </div>
                                        <button class="w-6 flex items-center justify-center" title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 hover:text-gray-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="w-70 flex items-center py-2.5 px-2 border-2 border-gray-300 rounded-lg hover:bg-gray-200">
                                        <div class="flex items-center">
                                            <div class="w-10 flex items-center justify-center">
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><style type="text/css">.st0{fill:#41A5EE;} .st1{fill:#2B7CD3;} .st2{fill:#185ABD;} .st3{fill:#103F91;} .st4{opacity:0.1;enable-background:new ;} .st5{opacity:0.2;enable-background:new ;} .st6{fill:url(#SVGID_1_);} .st7{fill:#FFFFFF;}</style><path class="st0" d="M490.17,19.2H140.9c-12.05,0-21.83,9.72-21.83,21.7l0,0v96.7l202.42,59.2L512,137.6V40.9	C512,28.91,502.23,19.2,490.17,19.2L490.17,19.2z"></path><path class="st1" d="M512,137.6H119.07V256l202.42,35.52L512,256V137.6z"></path><path class="st2" d="M119.07,256v118.4l190.51,23.68L512,374.4V256H119.07z"></path><path class="st3" d="M140.9,492.8h349.28c12.05,0,21.83-9.72,21.83-21.7l0,0v-96.7H119.07v96.7	C119.07,483.09,128.84,492.8,140.9,492.8L140.9,492.8z"></path><path class="st4" d="M263.94,113.92H119.07v296h144.87c12.04-0.04,21.79-9.73,21.83-21.7v-252.6	C285.73,123.65,275.98,113.96,263.94,113.92z"></path><path class="st5" d="M252.04,125.76H119.07v296h132.97c12.04-0.04,21.79-9.73,21.83-21.7v-252.6	C273.82,135.49,264.07,125.8,252.04,125.76z"></path><path class="st5" d="M252.04,125.76H119.07v272.32h132.97c12.04-0.04,21.79-9.73,21.83-21.7V147.46	C273.82,135.49,264.07,125.8,252.04,125.76z"></path><path class="st5" d="M240.13,125.76H119.07v272.32h121.06c12.04-0.04,21.79-9.73,21.83-21.7V147.46	C261.91,135.49,252.17,125.8,240.13,125.76z"></path><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="45.8183" y1="-1083.4916" x2="216.1361" y2="-788.5082" gradientTransform="matrix(1 0 0 1 0 1192)"><stop offset="0" style="stop-color:#2368C4"></stop><stop offset="0.5" style="stop-color:#1A5DBE"></stop><stop offset="1" style="stop-color:#1146AC"></stop></linearGradient><path class="st6" d="M21.83,125.76h218.3c12.05,0,21.83,9.72,21.83,21.7v217.08c0,11.99-9.77,21.7-21.83,21.7H21.83	C9.77,386.24,0,376.52,0,364.54V147.46C0,135.48,9.77,125.76,21.83,125.76z"></path><path class="st7" d="M89.56,292.21c0.43,3.35,0.71,6.26,0.85,8.76h0.5c0.19-2.37,0.59-5.22,1.19-8.56c0.6-3.34,1.15-6.16,1.63-8.47	l22.96-98.49h29.68l23.81,97.01c1.38,6.03,2.37,12.15,2.96,18.3h0.39c0.44-5.97,1.27-11.9,2.48-17.76l18.99-97.6h27.02	l-33.36,141.13H157.1l-22.62-93.47c-0.65-2.69-1.4-6.2-2.23-10.53s-1.33-7.48-1.54-9.47h-0.39c-0.26,2.3-0.77,5.71-1.54,10.23	c-0.76,4.52-1.37,7.87-1.83,10.04l-21.27,93.17h-32.1L40.04,185.46h27.5l20.68,98.69C88.7,286.17,89.14,288.87,89.56,292.21z"></path></svg>
                                            </div>
                                            <div class="w-48 ml-2 flex flex-col">
                                                <a href="#" class="text-sm text-gray-700 font-bold truncate">Contract Proposal.docx</a>
                                                <span class="text-gray-500 text-xs">3.1 MB</span>
                                            </div>
                                        </div>
                                        <button class="w-6 flex items-center justify-center" title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 hover:text-gray-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-8 flex items-center space-x-4">
                                    <button class="w-32 flex items-center justify-center space-x-2 py-1.5 text-gray-600 border border-gray-400 rounded-lg hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Reply</span>
                                    </button>
                                    <button class="w-32 flex items-center justify-center space-x-2 py-1.5 text-gray-600 border border-gray-400 rounded-lg hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                        <span>Forward</span>    
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
