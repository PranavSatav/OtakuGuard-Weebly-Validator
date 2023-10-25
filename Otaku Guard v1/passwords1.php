<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-REHJTs1r2QjK3vGozUJ4u4lCkC1a4Kxikc6OF9myPfz3l5o1Dck/yfcNgdRwT2Ez" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <style>
        .password-tips-box {
            font-family: 'Courier New', monospace;
        }
        /* Add your other styles here */
    </style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
 <style>
        .progress-bar {
            width: 100%;
            height: 20px;
            background-color: #f1f1f1;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            transition: width 0.3s;
        }

        #strength-text {
            margin-top: 10px;
        }
    </style>
    <!-- Your additional styles go here -->
    <style>
        
        .password-strength {
            margin-top: 0.5rem;
            font-size: 0.875rem;
        }

        .loading-spinner {
            display: none;
        }
    </style>
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
                                        <a href="passwords1.php" class=" relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                            <span class="flex items-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 ml-2 mr-2 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                                </svg>
                                                <span>Password Validator</span>
                                            </span>
                                            
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                        
                        
                        
                        


                        
                        
                        
                        <div class="flex-1 px-2">
                            <div class="h-16 flex items-center justify-between">
                                <div class="flex items-center">
                                   


                                    
                                    
                                    
                                    
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
                            <h4 class="text-lg text-gray-800 font-bold pb-2 mb-4  border-b-2">Password Validator - Find if passwords are Leaked</h4>
                          

                            <div class="flex mb-8 mr-8 flex-col">
  

  <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
      <div class="flex  items-center justify-center rounded-full ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
      </div>

      <div class="ml-4">
        <h2 class="font-semibold">[ haveibeenpwned.com ] API</h2>
        <p class="mt-2 text-sm text-gray-500">Searches a wide range of leaked passwords online with huge database.</p>
      </div>
    </div>

    <div class="flex items-start  rounded-xl bg-white p-4 shadow-lg">
  <div class="flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <rect width="20" height="12" x="2" y="7" rx="2" ry="2"></rect>
    <path d="M2 10h20"></path>
</svg>

  </div>

  <div class="ml-4 w-full">
    <!-- Add a button for password generation -->
    <button id="generatePasswordBtn" onclick="generateRandomPassword()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
        Generate Random Password
    </button>
    <!-- Display the generated password here -->
    <p id="generatedPassword" class="mt-4 text-sm border-t-2 text-gray-500"></p>
</div>

</div>

<script>
  // Function to generate a random password
  function generateRandomPassword() {
    // Define characters that can be used in the password
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';

    // Set the length of the password
    const passwordLength = 12;

    // Generate the random password
    let password = '';
    for (let i = 0; i < passwordLength; i++) {
      const randomIndex = Math.floor(Math.random() * characters.length);
      password += characters.charAt(randomIndex);
    }

    // Display the generated password
    document.getElementById('generatedPassword').innerText = 'Generated Password: ' + password;
  }

  // Generate a password when the page loads
  generateRandomPassword();
</script>

    
  </div>
</div>
                            <div class="mb-6">
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://static.thenounproject.com/png/4745408-200.png" class=" w-12 h-12 ">
                                        <div class="flex flex-col ml-2">
                                            <span class="text-sm font-semibold">Enter a password to perform checks..</span>
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
                                <div class="py-6 pl-2  mr-8 border-b-2 text-gray-700">
                                    
                                    <div class="bg-white rounded flex">


<form id="signup-form" class="flex-1 mr-8 bg-white rounded mr-2">
    <label class="block mb-4">
        <span class="text-gray-700">Enter a Password to check -</span>
        <div class="relative">
            <input type="password" name="password" required id="password" class="mt-1 p-2 w-full border rounded-md pr-10">
            <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                <button type="button" onclick="togglePasswordVisibility()" class="text-gray-600 focus:outline-none">
                    Show
                </button>
            </span>
        </div>
    </label>

    <div class="flex justify-between">
        <!-- Clear form button -->
        <button type="button" onclick="clearForm()" class="px-3 py-2 text-sm tracking-wide text-gray-700 capitalize transition-colors duration-200 transform bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
            Clear Form
        </button>

        <!-- Search button -->
        <button type="submit" form="signup-form" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none font-bold focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
            <span id="submit-text font-bold">Search Database</span>
            <span class="loading-spinner ml-2 animate-spin">&#9696;</span>
        </button>
    </div>

   <!-- Error message with pill style -->
    <p class="error hidden text-justify bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mt-4" id="password-error">
        This password was found in a database of compromised passwords. Using a password that has been breached is seriously dangerous.
        If you use this password for any other services then you should change it immediately.
    </p>

    <!-- Success message with pill style -->
    <p class="ok hidden bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mt-4" id="password-ok">That password is secure!</p>

    <div class="password-strength" id="password-strength">Password strength: <span id="strength-text"></span></div>
    <div class="progress-bar">
        <div class="progress" id="progress"></div>
    </div>
    <p class="mt-4 text-gray-600 whitespace-normal text-justify">Note: Your data is not stored anywhere, but it's still not a good idea to put any of your actual passwords into a random form you found on the internet. Please don't do that.</p>
</form>


<script>
    // Have I Been Pwned API endpoint
    const apiUrl = 'https://api.pwnedpasswords.com/range';

    // New function to toggle password visibility
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const button = document.querySelector('.relative button');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            button.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            button.textContent = 'Show';
        }
    }

    function updatePasswordStrength() {
            const passwordInput = document.getElementById('password');
            const strengthText = document.getElementById('strength-text');
            const progressBar = document.getElementById('progress');
            const passwordStrength = zxcvbn(passwordInput.value);
            const strengthScore = passwordStrength.score;

            switch (strengthScore) {
                case 0:
                    strengthText.textContent = 'Very Weak';
                    strengthText.style.color = 'red';
                    progressBar.style.width = '20%'; // Adjust as needed
                    progressBar.style.backgroundColor = 'red';
                    break;
                case 1:
                    strengthText.textContent = 'Weak';
                    strengthText.style.color = 'black';
                    progressBar.style.width = '40%'; // Adjust as needed
                    progressBar.style.backgroundColor = 'orange';
                    break;
                case 2:
                    strengthText.textContent = 'Fair';
                    strengthText.style.color = 'black';
                    progressBar.style.width = '60%'; // Adjust as needed
                    progressBar.style.backgroundColor = 'yellow';
                    break;
                case 3:
                    strengthText.textContent = 'Strong';
                    strengthText.style.color = 'black';
                    progressBar.style.width = '80%'; // Adjust as needed
                    progressBar.style.backgroundColor = 'greenyellow';
                    break;
                case 4:
                    strengthText.textContent = 'Very Strong';
                    strengthText.style.color = 'darkgreen';
                    progressBar.style.width = '100%';
                    progressBar.style.backgroundColor = 'darkgreen';
                    break;
                default:
                    strengthText.textContent = '';
                    progressBar.style.width = '0%';
                    progressBar.style.backgroundColor = '#f1f1f1';
            }
        }
    // Add an event listener to update password strength on input
    document.getElementById('password').addEventListener('input', updatePasswordStrength);

    // New function to clear the form
    function clearForm() {
        document.getElementById('password').value = '';
        document.getElementById('password').classList.remove('error');
        document.getElementById('password-ok').classList.add('hidden');
        document.getElementById('password-error').classList.add('hidden');
        document.getElementById('strength-text').textContent = '';
    }

    // Disable button during submission
    document.getElementById('signup-form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const submitButton = document.getElementById('submit-text');
        submitButton.textContent = 'Searching...';
        submitButton.disabled = true;

        const password = document.getElementById('password').value;

        // Calculate hash and check against Have I Been Pwned API
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
        } else {
            document.getElementById('password-ok').classList.remove('hidden');
            document.getElementById('password-error').classList.add('hidden');
        }

        // Simulate a delay, replace this with your actual form submission logic
        setTimeout(() => {
            // ... (rest of your form submission code)

            submitButton.textContent = 'Search Globe';
            submitButton.disabled = false;
        }, 0000); // 2 seconds delay, replace with your actual delay or remove if not needed
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



<div class="password-tips-box flex-1 p-4 bg-gray-200 rounded">
        <!-- Add your content for the password tips box here -->
        <h2 class="text-lg font-semibold mb-2">Password Strength Tips</h2>
        <ul class="list-disc pl-4">
            <li>Use a mix of uppercase and lowercase letters.</li>
            <li>Include numbers and special characters (e.g., @, #, $).</li>
            <li>Avoid using easily guessable information (e.g., birthdays, names).</li>
            <li>Make it at least 12 characters long for better security.</li>
            <li>Consider using a passphrase with a combination of words.</li>
            <li>Update your passwords regularly.</li>
            <li>Use unique passwords for different accounts.</li>
            <li>Consider using a reputable password manager for added security.</li>
        </ul>
    </div>




</div>


 
                                   










                                </div>
                        
                            </div>
                        </div>
                    </div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
