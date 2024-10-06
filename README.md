# Otakuguard V2 Released (In Progress - UI Overhaul)
![image](https://github.com/user-attachments/assets/002465b2-0cc2-4395-8986-f2ad47b051ac)
![image](https://github.com/user-attachments/assets/704c9a6c-df9f-4621-a229-eec109502800)


This project is a collection of tools designed to check hosting information, validate password strength, and display geographic information on a map for any website or IP address. The project is built using **HTML**, **CSS** (Tailwind CSS), and **JavaScript**, with integrations to APIs like **ip-api** for fetching IP data and **zxcvbn** for password strength validation.

## Features

### 1. Hosting Checker
- **Input**: Enter any website URL or IP address.
- **Functionality**: Fetches detailed hosting information such as:
  - IP address
  - Internet Service Provider (ISP)
  - Autonomous System (AS)
  - Geographic location (city, region, country)
  - Whether the server is mobile, using a proxy, or hosted on a hosting provider
- **API Used**: Fetches data from the `ip-api.com` service and displays it in a user-friendly format.
- **Map Integration**: Displays a leaflet map showing the exact location of the server based on latitude and longitude.

### 2. Password Strength Validator
- **Input**: Users can enter any password.
- **Functionality**: 
  - Validates the strength of the entered password using the **zxcvbn** library, providing feedback on its strength (Very Weak, Weak, Fair, Strong, Very Strong).
  - Displays a progress bar for password strength.
  - Checks the password against a database of compromised passwords using the **Have I Been Pwned** API and warns the user if their password has been compromised.
- **Security Note**: The password input is not stored or sent anywhere except for validation purposes. Users are advised not to enter real passwords for sensitive accounts.

### 3. Leaflet Map Display
- **Functionality**: Once a valid website or IP is entered in the Hosting Checker, the geographic location of the server is displayed on a leaflet map.
- **Map Provider**: The project uses OpenStreetMap tiles for displaying map data.



