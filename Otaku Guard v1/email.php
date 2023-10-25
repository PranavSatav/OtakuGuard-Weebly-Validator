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
                                
                                
                     <!-- <div x-data="{ modelOpen: false }" x-init="modelOpen = false">
    <button @click="modelOpen = !modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>
        <span>Password Analyzer</span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                @click="modelOpen = false" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                
               
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-medium text-gray-800">Breached Password Detector</h1>
                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>

               
                <form id="signup-form" class="mt-8 bg-white rounded">
                    <label class="block mb-4">
                        <span class="text-gray-700">Enter a Password:</span>
                        <input type="password" value="admin" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
                    </label>

                    <p class="error hidden text-red-500" id="password-error">
                        This password was found in a database of compromised passwords. Using a password that has been breached is seriously dangerous.
                        If you use this password for any other services then you should change it immediately.
                    </p>

                    <p class="ok hidden text-green-500" id="password-ok">That password is secure!</p>

                    <p class="mt-4 text-gray-600">Note: Your data is not stored anywhere, but it's still not a good idea to put any of your actual passwords into a random form you found on the internet. Please don't do that.</p>
                    
                   
                    <div class="flex justify-end mt-6">
                        <button type="submit" form="signup-form" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                            Search Globe
                        </button>
                    </div>
                </form>


                    
                    
                    
                   
                </form>
                
                <script>
                        // https://haveibeenpwned.com/API/v2#SearchingPwnedPasswordsByRange
const apiUrl = 'https://api.pwnedpasswords.com/range';
const $form = document.getElementById('signup-form');

// Send the first 5 letters of a SHA-1 Hash of the submitted 
// password to the Pwned Passwords API to check if it has been
// compromised in a security breach. If so, do not submit the form
// and show an error message
$form.addEventListener('submit', async e => {
  e.preventDefault();
  const password = document.getElementById('password').value;
  const passwordDigest = await digestMessage(password);

  const checkDigest = passwordDigest.substring(5, 41).toUpperCase();
  const digestFive = passwordDigest.substring(0, 5).toUpperCase();

  const res = await fetch(`${apiUrl}/${digestFive}`);
  const response = await res.text();
  // if the hash of our password is present, then it is pwned
  const isPwned = response.search(checkDigest) > -1;

  if (isPwned) {
    document.getElementById('password-error').classList.remove('hidden');
    document.getElementById('password-ok').classList.add('hidden');
    document.getElementById('password').classList.add('error');
    return false;
  } else {
    document.getElementById('password-ok').classList.remove('hidden');
    document.getElementById('password-error').classList.add('hidden');
    // irl submit the form here, in this test we just show the success 
    // return $form.submit();
    return false;
  }


});

// From MDN example: 
// https://developer.mozilla.org/en-US/docs/Web/API/SubtleCrypto/digest
// Converts a String to SHA-1 Hash
async function digestMessage(message) {
  const msgUint8 = new TextEncoder().encode(message); // encode as (utf-8) Uint8Array
  const hashBuffer = await crypto.subtle.digest('SHA-1', msgUint8); // hash the message
  const hashArray = Array.from(new Uint8Array(hashBuffer)); // convert buffer to byte array
  const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join(''); // convert bytes to hex string
  return hashHex;
}
                    </script>
                    
            </div>
        </div>
    </div>
</div> -->
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
                                   
                                     <!-- Button to open the popup -->
    <button onclick="openPopup()" class="flex items-center text-gray-700 px-2 py-1 space-x-0.5 border border-gray-300 rounded-lg shadow hover:bg-gray-200 font-bold transition duration-100">
       Clear Recent Searches
    </button>

     <!-- Popup Container -->
    <div id="popup" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center z-50">
        
        <!-- Form in the popup -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">

            <label for="delete_emails" class="block text-gray-700 text-sm font-bold mb-2">
                Confirm Deletion:
            </label>

            <div class="flex items-center">
                <input type="checkbox" id="delete_emails" name="delete_emails" class="form-checkbox h-4 w-4 text-indigo-600">
                <label for="delete_emails" class="ml-2 text-gray-700">I understand and want to delete all validated emails..</label>
            </div>

            <!-- Validation message if checkbox is not checked -->
            <p id="validationMessage" class="text-red-500 text-sm mt-2 hidden">Please confirm deletion by checking the box.</p>

            <div class="mt-4 flex justify-between">
                <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">
                    Delete All Emails
                </button>

                <!-- Cancel button to close the popup -->
                <button type="button" onclick="closePopup()" class="text-gray-600 py-2 px-4 rounded-md border border-gray-300 hover:bg-gray-200 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
            </div>

        </form>

    </div>

    <script>
        // JavaScript function to open the popup
        function openPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        // JavaScript function to close the popup
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        // JavaScript function to validate the checkbox before submission
        document.querySelector('form').addEventListener('submit', function (event) {
            const checkbox = document.getElementById('delete_emails');
            const validationMessage = document.getElementById('validationMessage');

            if (!checkbox.checked) {
                validationMessage.style.display = 'block';
                event.preventDefault(); // Prevent form submission
            } else {
                validationMessage.style.display = 'none';
            }
        });
    </script>
                                    
                                    
                                    
                                    
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
                            <h4 class="text-lg text-gray-800 font-bold pb-2 mb-4 border-b-2">E-Mail Validator - A or AAAA Records / SPF Identifier</h4>
                           <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_emails"])) {
    $file_path = 'stored_emails.txt';

    // Open the file in write mode (truncate the file)
    $file_handle = fopen($file_path, 'w');

    if ($file_handle) {
        // File opened successfully, now close it
        fclose($file_handle);
        $success_message = "<span class='pl-4' style='color: purple; font-weight: bold;'>All recent emails deleted successfully ✅</span>";
    } else {
        $error_message = "<span class='pl-4' style='color: red; font-weight: bold;'>Error deleting emails.</span>";
    }
}

// Check if there is a success message and display it
if (isset($success_message)) {
    echo '<div style="background-color: #f2f2f2; padding: 10px; width: 100%; border-radius: 20px;">' . $success_message . '</div>';
}
// If there's an error message, display it
elseif (isset($error_message)) {
    echo '<div style="background-color: #f2f2f2; padding: 10px; width: 100%; border-radius: 20px;">' . $error_message . '</div>';
}
?>

                            <div class="flex mb-8 mr-8 flex-col">
  

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
</div>
                            <div class="mb-6">
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://pngimg.com/d/email_PNG15.png" class=" w-12 h-12 ">
                                        <div class="flex flex-col ml-2">
                                            <span class="text-sm font-semibold">Enter an e-mail to perform checks..</span>
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
                                    
                                    <div class="bg-white rounded w-96">

    <!-- Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="grid mb-4 grid-cols-1">

        <!-- Label -->
        <label for="email" class="text-gray-700 text-sm font-bold mb-2">Enter Suspicious Email -</label>

        <!-- Input and Button Container -->
        <div class="flex items-center">

            <!-- Input -->
            <input type="text" id="email" name="email" required
                class="flex-1 border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500 h-8">

            <!-- Submit Button -->
            <button type="submit"
                class="bg-blue-500 text-white px-4 rounded text-sm	 focus:outline-none hover:bg-blue-600 ml-2 h-8">
                Perform Checks
            </button>

        </div>

    </form>
    <!-- End Form -->

</div>



                                    <?php

function isSenderValid($email)
{
    // Validate email format
    $isValidFormat = filter_var($email, FILTER_VALIDATE_EMAIL);

    // Extract domain from email
    list($user, $domain) = explode('@', $email);

    // Check if the domain is a disposable email provider
if (isDisposableEmail($email)) {
    echo '<div class="p-2 pl-8 pr-8 bg-red-500 text-white rounded-full inline-block">Disposable email found.</div><br>';
    return false; // Invalid sender
}


    // Check DNS A or AAAA records for the domain
    list($hasValidAorAAAARecord, $aRecords, $aaaaRecords) = hasValidAorAAAARecord($domain);

    // Check SPF records for the domain
    $spfRecords = getSPFRecords($domain);
    $hasValidSPFRecord = !empty($spfRecords);

    
    
    
    // Check DMARC records for the domain
    $hasValidDMARCRecord = hasValidDMARCRecord($domain);

    // Check MX records for the domain
    $hasValidMXRecord = checkdnsrr($domain, 'MX');

    // Check if the email address is role-based
    $isRoleBased = isRoleBasedEmail($email);

    // Check if the local part of the email address matches a specific pattern
    $matchesPattern = matchesPattern($user);

    // Find the type of email address (e.g., Webmail)
    $emailType = findEmailType($domain);

    // Calculate the score based on checks
    $score = calculateScore($isValidFormat, $hasValidAorAAAARecord, $hasValidSPFRecord, $hasValidDMARCRecord, $hasValidMXRecord, $isRoleBased, $matchesPattern);
    
    

    echo '<div class="flex">';

// Additional Email Verification Result Table
echo '<div class="container  mr-8 ">';
echo '<h1 class="text-xl font-semibold mb-4">Email Verification Result</h1>';

echo '<table class="w-full border">';
echo '<tr>';
echo '<th class="border p-2 text-left">Check</th>';
echo '<th class="border p-2 text-left">Result</th>';
echo '</tr>';

// Email Format
echo '<tr>';
echo '<td class="border p-2">Email Format:</td>';
echo '<td class="border p-2 ' . ($isValidFormat ? 'text-green-600' : 'text-red-600') . '">';
echo '<span class="relative inline-block px-3 py-1 font-semibold ' . ($isValidFormat ? 'text-green-900' : 'text-red-900') . ' leading-tight">';
echo '<span aria-hidden class="absolute inset-0 ' . ($isValidFormat ? 'bg-green-200' : 'bg-red-200') . ' opacity-50 rounded-full"></span>';
echo '<span class="relative">' . ($isValidFormat ? 'Valid Format Detected' : 'Invalid Format Detected') . '</span>';
echo '</span>';
echo '</td>';

echo '</td>';
echo '</tr>';

// A or AAAA Records
echo '<tr>';
echo '<td class="border p-2">A or AAAA Records:</td>';
echo '<td class="border p-2 ' . ($hasValidAorAAAARecord ? 'text-green-600' : 'text-red-600') . '">';
echo '<span class="relative inline-block px-3 py-1 font-semibold ' . ($hasValidAorAAAARecord ? 'text-green-900' : 'text-red-900') . ' leading-tight">';
echo '<span aria-hidden class="absolute inset-0 ' . ($hasValidAorAAAARecord ? 'bg-green-200' : 'bg-red-200') . ' opacity-50 rounded-full"></span>';
echo '<span class="relative">' . ($hasValidAorAAAARecord ? 'Valid' : 'Invalid') . '</span>';
echo '</span>';
echo '</td>';

echo '</td>';
echo '</tr>';

// A Records
echo '<tr>';
echo '<td class="border p-2">A Records:</td>';
echo '<td class="border p-2">';
if (!empty($aRecords)) {
    foreach ($aRecords as $record) {
        echo $record['ip'] . ", ";
    }
} else {
    echo "None";
}
echo '</td>';
echo '</tr>';

// AAAA Records
echo '<tr>';
echo '<td class="border p-2">AAAA Records:</td>';
echo '<td class="border p-2">';
if (!empty($aaaaRecords)) {
    foreach ($aaaaRecords as $record) {
        echo $record['ipv6'] . ", ";
    }
} else {
    echo "None";
}
echo '</td>';
echo '</tr>';

// SPF Record
echo '<tr>';
echo '<td class="border p-2">SPF Record:</td>';
echo '<td class="border p-2 ' . ($hasValidSPFRecord ? 'text-green-600' : 'text-red-600') . '">';
echo '<span class="relative inline-block px-3 py-1 font-semibold ' . ($hasValidSPFRecord ? 'text-green-900' : 'text-red-900') . ' leading-tight">';
echo '<span aria-hidden class="absolute inset-0 ' . ($hasValidSPFRecord ? 'bg-green-200' : 'bg-red-200') . ' opacity-50 rounded-full"></span>';
echo '<span class="relative">' . ($hasValidSPFRecord ? 'Valid Record' : 'Invalid Record') . '</span>';
echo '</span>';
echo '</td>';

echo '</td>';
echo '</tr>';

if (!empty($spfRecords)) {
    foreach ($spfRecords as $record) {
        echo '<tr>';
        echo '<td colspan="2" class="border p-2">SPF Records Tree</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="border p-2">Mechanisms:</td>';
        echo '<td class="border p-2">' . implode(', ', $record['mechanisms']) . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="border p-2">Qualifier:</td>';
        echo '<td class="border p-2">';

        // Create a nested table for Qualifier with additional styling
echo '<table class="border-collapse nested-table" style="width: 100%; border-spacing: 0; text-align: center; margin-top: 0px;">';

echo '<tr>';
echo '<td class="border p-2" colspan="2" style="background-color: #4CAF50; color: white;">Pass</td>';
echo '<td class="border p-2"></td>'; // Add an empty cell for spacing
echo '<td class="border p-2" style="background-color: ' . (in_array('+all', $record['mechanisms']) ? '#4CAF50' : '#000000') . '; color: white;">' . (in_array('+all', $record['mechanisms']) ? 'Yes' : 'No') . '</td>';

echo '<td class="border p-2"></td>'; // Add an empty cell for spacing

echo '<td class="border p-2" colspan="2" style="background-color: #f44336; color: white;">Fail</td>';
echo '<td class="border p-2"></td>'; // Add an empty cell for spacing
echo '<td class="border p-2" style="background-color: ' . (in_array('-all', $record['mechanisms']) ? '#4CAF50' : '#000000') . '; color: white;">' . (in_array('-all', $record['mechanisms']) ? 'Yes' : 'No') . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td class="border p-2" colspan="2" style="background-color: #FFC107; color: #333;">SoftFail</td>';
echo '<td class="border p-2"></td>'; // Add an empty cell for spacing
echo '<td class="border p-2" style="background-color: ' . (in_array('~all', $record['mechanisms']) ? '#4CAF50' : '#000000') . '; color: white;">' . (in_array('~all', $record['mechanisms']) ? 'Yes' : 'No') . '</td>';

echo '<td class="border p-2"></td>'; // Add an empty cell for spacing

echo '<td class="border p-2" colspan="2" style="background-color: #607D8B; color: white;">Neutral</td>';
echo '<td class="border p-2"></td>'; // Add an empty cell for spacing
echo '<td class="border p-2" style="background-color: ' . (in_array('?all', $record['mechanisms']) ? '#4CAF50' : '#000000') . '; color: white;">' . (in_array('?all', $record['mechanisms']) ? 'Yes' : 'No') . '</td>';
echo '</tr>';

// Close nested table for Qualifier
echo '</table>';


echo '</td>';
echo '</tr>';


        // Check for a hard fail and adjust the score
        if (in_array('-all', $record['mechanisms'])) {
            echo '<tr>';
            echo '<td colspan="2" class="border p-2 text-red-600">Suspicious Mechanisms Detected, Exercise this E-mail with Caution.</td>';
            echo '</tr>';
            $score = min($score, 3); // Reduce the score
        }
    }
}

echo '</table>';
echo '</div>';



// Email Verification Result Table
echo '<div class="container mr-8 ">';
echo '<h1 class="text-xl font-semibold mb-4">Additional Validation Results</h1>';

echo '<table class="w-full border">';
echo '<tr>';
echo '<th class="border p-2 text-left">Check</th>';
echo '<th class="border p-2 text-left">Result</th>';
echo '</tr>';

// DMARC Record
echo '<tr>';
echo '<td class="border p-2 text-gray-600">DMARC Record:</td>';
echo '<td class="border p-2 ' . ($hasValidDMARCRecord ? 'text-green-600' : 'text-red-600') . '">';
echo '<span class="relative inline-block px-3 py-1 font-semibold ' . ($hasValidDMARCRecord ? 'text-green-900' : 'text-red-900') . ' leading-tight">';
echo '<span aria-hidden class="absolute inset-0 ' . ($hasValidDMARCRecord ? 'bg-green-200' : 'bg-red-200') . ' opacity-50 rounded-full"></span>';
echo '<span class="relative">' . ($hasValidDMARCRecord ? 'Valid Record' : 'Invalid Record') . '</span>';
echo '</span>';
echo '</td>';

echo '</td>';
echo '</tr>';

// MX Record
echo '<tr>';
echo '<td class="border p-2 text-gray-600">MX Record:</td>';
echo '<td class="border p-2 ' . ($hasValidMXRecord ? 'text-green-600' : 'text-red-600') . '">';
echo '<span class="relative inline-block px-3 py-1 font-semibold ' . ($hasValidMXRecord ? 'text-green-900' : 'text-red-900') . ' leading-tight">';
echo '<span aria-hidden class="absolute inset-0 ' . ($hasValidMXRecord ? 'bg-green-200' : 'bg-red-200') . ' opacity-50 rounded-full"></span>';
echo '<span class="relative">' . ($hasValidMXRecord ? 'Valid Record' : 'Invalid Record') . '</span>';
echo '</span>';
echo '</td>';

echo '</td>';
echo '</tr>';

// Role-based Email
echo '<tr>';
echo '<td class="border p-2 text-gray-600">Role-based Email:</td>';
echo '<td class="border p-2 ' . ($isRoleBased ? 'text-green-600' : 'text-red-600') . '">';
echo ($isRoleBased ? 'Yes' : 'No');
echo '</td>';
echo '</tr>';

// Pattern Match
echo '<tr>';
echo '<td class="border p-2 text-gray-600">Pattern Match:</td>';
echo '<td class="border p-2 ' . ($matchesPattern ? 'text-green-600' : 'text-red-600') . '">';
echo ($matchesPattern ? 'Yes' : 'No');
echo '</td>';
echo '</tr>';

// Email Type
echo '<tr>';
echo '<td class="border p-2 text-gray-600">Email Type:</td>';
echo '<td class="border p-2">' . $emailType . '</td>';
echo '</tr>';

// Score
echo '<tr>';
echo '<td class="border p-2 text-gray-600">Trust Score:</td>';
echo '<td class="border font-bold p-2">' . $score . '/10</td>';
echo '</tr>';

echo '</table>';
echo '</div>';

echo '</div>';




    if ($score >= 7) {
    echo '<div class="bg-green-200 text-green-900 px-4 mr-8 py-2 mt-4 mb-8">';
    echo 'Overall Score is High. Likely a Valid Sender.';
    echo '</div>';
    return true; // Valid sender
} else {
    echo '<div class="bg-red-200 text-red-900 px-4 py-2 mr-8 mt-4 mb-8">';
    echo 'Score is low. Likely spam or invalid sender.';
    echo '</div>';
    return false; // Invalid sender
}

}




function hasValidDMARCRecord($domain)
{
    $dmarcRecords = dns_get_record("_dmarc.$domain", DNS_TXT);

    // Check if there is at least one DMARC record
    return !empty($dmarcRecords);
}


function storeEmail($email)
{
    $filename = 'stored_emails.txt';

    // Append the email to the file
    file_put_contents($filename, $email . PHP_EOL, FILE_APPEND);
}



function isDisposableEmail($email)
{
    $disposableDomains = [
        'example.com',
        'example.org',
        'mailinator.com',
        'guerrillamail.com',
        '10minutemail.com',
        'dispostable.com',
        'yopmail.com',
        'throwawaymail.com',
        'tempmail.com',
        'maildrop.cc',
        'temp-mail.org',
        'discard.email',
        'fakeinbox.com',
        'getairmail.com',
        'mailnesia.com',
        'meltmail.com',
        'mytemp.email',
        'nada.email',
        'nomail.xl.cx',
        'spamgourmet.com',
        'spambog.com',
        'spikio.com',
        'tempomail.fr',
        'trbvm.com',
        'wegwerfmail.net',
        'wh4f.org',
        // Add more disposable domains as needed
    ];

    list(, $domain) = explode('@', $email);

    return in_array($domain, $disposableDomains);
}


function hasValidAorAAAARecord($domain)
{
    $aRecords = dns_get_record($domain, DNS_A);
    $aaaaRecords = dns_get_record($domain, DNS_AAAA);

    $hasValidARecord = !empty($aRecords);
    $hasValidAAAARecord = !empty($aaaaRecords);

    return [$hasValidARecord || $hasValidAAAARecord, $aRecords, $aaaaRecords];
}

function getSPFRecords($domain)
{
    $spfRecords = dns_get_record($domain, DNS_TXT);
    $spfDetails = [];

    foreach ($spfRecords as $record) {
        if (strpos($record['txt'], 'v=spf1') !== false) {
            $spfDetails[] = parseSPFRecord($record['txt']);
        }
    }

    return $spfDetails;
}

function parseSPFRecord($spfRecord)
{
    $parsedRecord = [
        'mechanisms' => [],
        'qualifier' => '',
    ];

    // Split the SPF record into mechanisms and modifiers
    $components = preg_split('/\s+/', $spfRecord, -1, PREG_SPLIT_NO_EMPTY);

    // Extract and store each mechanism and qualifier
    foreach ($components as $component) {
        // Split the component into mechanism and qualifier
        list($mechanism, $qualifier) = parseSPFComponent($component);

        // Store the mechanism and qualifier in the parsed record array
        $parsedRecord['mechanisms'][] = $mechanism;
        $parsedRecord['qualifier'] = $qualifier;
    }

    return $parsedRecord;
}

function parseSPFComponent($component)
{
    // Extract the mechanism and qualifier
    $mechanism = rtrim($component, '~+-?*');
    $qualifier = '';

    // Check if there is a qualifier and extract it
    if (strlen($component) > strlen($mechanism)) {
        $qualifier = substr($component, strlen($mechanism));
    }

    return [$mechanism, $qualifier];
}

function isRoleBasedEmail($email)
{
    // Define an array of common role-based email prefixes
    $rolePrefixes = ['admin', 'support', 'info', 'contact', 'sales'];

    // Extract the local part of the email address (before the @ symbol)
    list($localPart, $domain) = explode('@', $email);

    // Convert the local part to lowercase for case-insensitive comparison
    $lowercaseLocalPart = strtolower($localPart);

    // Check if the lowercase local part starts with any of the role prefixes
    foreach ($rolePrefixes as $prefix) {
        if (strpos($lowercaseLocalPart, $prefix) === 0) {
            return true; // Role-based email detected
        }
    }

    return false; // Not a role-based email
}

function matchesPattern($localPart)
{
    // Define a simple pattern to match against the local part
    $pattern = '/^[a-zA-Z0-9._%+-]+$/';

    // Check if the local part matches the pattern
    return preg_match($pattern, $localPart);
}

function findEmailType($domain)
{
    // Define a list of webmail domains
    $webmailDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com'];

    // Check if the domain is in the list of webmail domains
    if (in_array($domain, $webmailDomains)) {
        return 'Webmail';
    }

    return 'Unknown / Professional';
}

function calculateScore($isValidFormat, $hasValidAorAAAARecord, $hasValidSPFRecord, $hasValidMXRecord, $isRoleBased, $matchesPattern)
{
    // Define weights for each check
    $weights = [
        'isValidFormat' => 2,
        'hasValidAorAAAARecord' => 1,
        'hasValidSPFRecord' => 2,
        'hasValidMXRecord' => 2,
        'isRoleBased' => 1,
        'matchesPattern' => 1,
    ];

    // Calculate the score based on weights
    $score = 0;

    // Check each condition and update the score
    foreach ($weights as $check => $weight) {
        if ($$check) {
            $score += $weight;
        }
    }

    return $score;
}

// Example usage with user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "email" field is set in the $_POST array
    if (isset($_POST["email"])) {
        // Assuming you have a form field named "email" for user input
        $userInputEmail = $_POST["email"];

        // Validate the user input and call the function
        if (filter_var($userInputEmail, FILTER_VALIDATE_EMAIL)) {
            // Store the email
            storeEmail($userInputEmail);

            // Perform email validation
            isSenderValid($userInputEmail);
        } else {
            echo '<div class="mt-8">
                <div class="inline-flex items-center bg-white leading-none text-red-500 rounded-full p-2 shadow-lg">
                    <span class="inline-flex bg-red-500 text-white rounded-full h-6 px-3 justify-center items-center">ERROR</span>
                    <span class="inline-flex px-2">Invalid email address.</span>
                </div>
            </div>';
        }
    }
}



?>


<?php

// Display the stored emails from the file
function displayStoredEmails()
{
    // Define the file path
    $filePath = 'stored_emails.txt';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Read the file content as an array of lines
        $emails = file($filePath, FILE_IGNORE_NEW_LINES);

        // Reverse the order to have the latest email on top
        $emails = array_reverse($emails);

        // Display only the top 5 emails
        $emails = array_slice($emails, 0, 6);

        // Display the content
        if (!empty($emails)) {
            echo '<div class="mt-4"><h2 class="text-sm font-semibold mb-2">Recently Validated Emails -</h2>';
            echo '<ul class="space-y-2 ml-8">';
            foreach ($emails as $email) {
                // Display each email as a pill
                echo '<li class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 hover:scale-102 transition-transform">' . htmlspecialchars($email) . '</li>';
            }
            echo '</ul></div>';
        } else {
            echo '<div class="mt-4 inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 hover:scale-102 transition-transform">No recently validated emails found ❎</div>';
        }
    } else {
        echo '<div class="mt-4 inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 hover:scale-102 transition-transform">No recently validated emails found ❎</div>';
    }
}

// Call the display function
displayStoredEmails();

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
