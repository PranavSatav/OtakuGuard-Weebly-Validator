<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<!-- Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        .password-tips-box {
            font-family: 'Courier New', monospace;
        }
        /* Add your other styles here */
    </style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        #map {
            height: 90%; /* Adjust the height of the map */
            margin-top: 40px; /* Space between results and map */
            border-radius: 40px;
        }
        body{
            font-family: Poppins;
        }
    </style>
     <style>
        .progress-bar {
            width: 100%;
            height: 10px;
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
</head>
<body class="bg-black text-white flex h-screen">

<aside class="flex flex-col items-center w-16 h-screen py-8 overflow-y-auto bg-white border-none rtl:border-l rtl:border-none-0 dark:bg-gray-900 dark:border-gray-700">
    <nav class="flex flex-col flex-1 space-y-6">
        

        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </a>

        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
            </svg>
        </a>

        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
            </svg>
        </a>

        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
            </svg>
        </a>

        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
        </a>
    </nav>

    <div class="flex flex-col space-y-6">
        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:hover:bg-gray-800 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
            </svg>
        </a>

        <a href="#" class="p-1.5 text-gray-700 focus:outline-nones transition-colors duration-200 rounded-lg dark:text-gray-200 dark:bg-gray-800 bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </a>

        
    </div>
    
</aside>
<div class="container  px-8 py-4 flex-grow flex flex-col">
        <header class="flex justify-between items-start mb-8">
            <div>
                <p class="text-xs text-gray-500">SSL / DKIM</p>
                <p class="text-xs text-gray-500">Email Headers - Password Validator</p>
            </div>
            
        </header>

        <main class="flex-grow flex flex-col">
            <div class="mb-8">
                <h3>This is </h3><h1 class="text-5xl font-bold mb-4">MAGIC LAYOUT</h1>
                <p class="text-sm text-gray-400"><span class="text-sm mr-8 text-gray-500"><?php
// Set the timezone to India
date_default_timezone_set('Asia/Kolkata');

// Get the current timestamp
$current_timestamp = time();

// Format the timestamp in the desired format
$formatted_date = date('M d, Y, h:i A', $current_timestamp);

// Display the formatted date
echo "$formatted_date";
?>
</span></p>
            </div>

            <div class="grid grid-cols-3 gap-6 flex-grow">
                <div class="card bg-gray-800 p-6 rounded-xl relative flex flex-col justify-between">
                    <span class="absolute top-4 left-4 text-xs bg-gray-700 px-2 py-1 rounded-full">Hosting Checker</span>
                    
                    <div class="flex items-center">
                    <div class="w-full max-w-md mt-8 bg-gray-800 rounded-lg">
      

        <input id="websiteInput" type="text" placeholder="Enter website or IP" class="w-full p-3 mb-4 bg-black   focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400"/>

        

        <div id="result" class="mt-6 text-sm bg-gray-700 p-4 rounded hidden"></div>
        
    </div>
                        
                    </div><button onclick="getWebsiteInfo()" class="w-full bg-blue-600 p-3 rounded-full font-bold hover:bg-blue-700 transition duration-200">Check Info</button>
                </div>
                <div class="card bg-gray-700 p-6 rounded-xl relative flex flex-col justify-between">
                    <span class="absolute top-4 left-4 text-xs bg-gray-600 px-2 py-1 rounded-full">Leaflet Map</span>
                    <div id="map" class="hidden"></div> <!-- Map div -->
                    <div class="flex items-center">
                       
                       
                    </div>
                </div>
                <div class="card bg-yellow-300 p-6 rounded-xl relative flex flex-col justify-between text-black">
                    <div>
                        <span class="absolute top-4 left-4  text-xs bg-yellow-400 px-2 py-1 rounded-full">Validator</span>
                        
                        <div class=" mt-8 mb-6">
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex ">
                                        
                                        <div class="flex flex-col ml-2">
                                      <h1 class="text-5xl font-bold mb-4">Password Strength Checker</h1>  
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="py-6 pl-2   text-gray-700">
                                    
                                    <div class=" rounded flex">


<form id="signup-form" class="flex-1   rounded mr-2">
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
        <button type="button" onclick="clearForm()" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-black rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
            Clear Form
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

    <div>

                <p class="text-xs text-black">Note: Your data is not stored anywhere, but it's still not a good idea to put any of your actual passwords into a random form you found on the internet. Please don't do that.</p>
            </div>

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
    
    // Check if strengthText is null
    if (!strengthText) {
        console.error("Element with ID 'strength-text' not found!");
        return; // Exit the function early
    }

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
    }, 2000); // 2 seconds delay, adjust as needed
});

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
                            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                    </div>
                    
                    
                </div>
            </div>
        </main><script>
        let map;

        function cleanInput(input) {
            let cleanedInput = input.trim();
            if (cleanedInput.startsWith('http://')) {
                cleanedInput = cleanedInput.slice(7);
            } else if (cleanedInput.startsWith('https://')) {
                cleanedInput = cleanedInput.slice(8);
            }
            if (cleanedInput.startsWith('www.')) {
                cleanedInput = cleanedInput.slice(4);
            }
            if (cleanedInput.endsWith('/')) {
                cleanedInput = cleanedInput.slice(0, -1);
            }
            return cleanedInput;
        }

        function isValidDomainOrIP(input) {
            const domainRegex = /^[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
            const ipRegex = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
            return domainRegex.test(input) || ipRegex.test(input);
        }

        function initializeMap(lat, lon) {
            if (map) {
                map.setView([lat, lon], 13); // Set the map view to the new location
            } else {
                map = L.map('map').setView([lat, lon], 13); // Create a new map
                // Add OpenStreetMap tiles
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: 'PranavSatav'
                }).addTo(map);
            }
            // Clear previous markers and add a new marker
            map.eachLayer(function (layer) {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer); // Remove previous marker
                }
            });
            L.marker([lat, lon]).addTo(map).bindPopup('Location').openPopup(); // Add a new marker
        }

        function getWebsiteInfo() {
            const input = document.getElementById('websiteInput').value;
            const resultDiv = document.getElementById('result');
            const mapDiv = document.getElementById('map');

            const cleanedInput = cleanInput(input);
            if (!cleanedInput) {
                resultDiv.innerHTML = `<p class="text-red-400">Please enter a valid website or IP address.</p>`;
                resultDiv.classList.remove('hidden');
                mapDiv.classList.add('hidden');
                return;
            }

            if (!isValidDomainOrIP(cleanedInput)) {
                resultDiv.innerHTML = `<p class="text-red-400">Invalid domain or IP format. Please check your input.</p>`;
                resultDiv.classList.remove('hidden');
                mapDiv.classList.add('hidden');
                return;
            }

            const url = `http://ip-api.com/json/${cleanedInput}`;

            // Clear previous results
            resultDiv.classList.add('hidden');
            mapDiv.classList.add('hidden');

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.status === "fail") {
                        resultDiv.innerHTML = `<p class="text-red-400">Error: ${data.message}</p>`;
                        mapDiv.classList.add('hidden');
                    } else {
                        resultDiv.innerHTML = `
                            <div><strong>IP:</strong> ${data.query}</div>
                            <div><strong>ISP:</strong> ${data.isp}</div>
                            <div><strong>Organization:</strong> ${data.org}</div>
                            <div><strong>AS (Autonomous System):</strong> ${data.as}</div>
                            <div><strong>City:</strong> ${data.city}</div>
                            <div><strong>Region:</strong> ${data.regionName}</div>
                            <div><strong>Country:</strong> ${data.country} (${data.countryCode})</div>
                            <div><strong>Postal Code:</strong> ${data.zip}</div>
                            <div><strong>Timezone:</strong> ${data.timezone} (UTC Offset: ${data.offset})</div>
                            <div><strong>Latitude:</strong> ${data.lat}</div>
                            <div><strong>Longitude:</strong> ${data.lon}</div>
                            <div><strong>Mobile Network:</strong> ${data.mobile ? "Yes" : "No"}</div>
                            <div><strong>Using Proxy:</strong> ${data.proxy ? "Yes" : "No"}</div>
                            <div><strong>Hosting Provider:</strong> ${data.hosting ? "Yes" : "No"}</div>
                        `;
                        resultDiv.classList.remove('hidden');
                        mapDiv.classList.remove('hidden');
                        initializeMap(data.lat, data.lon); // Initialize the map with lat and lon
                    }
                })
                .catch(error => {
                    resultDiv.innerHTML = `<p class="text-red-400">Error fetching data.</p>`;
                    resultDiv.classList.remove('hidden');
                    mapDiv.classList.add('hidden');
                });
        }
    </script>
        <footer class="mt-4 text-right">
            
        </footer>
        
    </div>
</body>
</html>