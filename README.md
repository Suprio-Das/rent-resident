# RentResident  

RentResident is a web-based platform designed to simplify the property rental process. It connects tenants looking for rental properties with property owners, while providing administrative control for seamless management of listings and bookings.  

## Features  

### Tenants  
- **Browse Properties**: View detailed property listings, including photos, descriptions, and rent details.  
- **Book Properties**: Easily book properties of choice.  
- **Contact Us**: Send messages directly to the admin using a contact form powered by `PHPMailer`.  
- **User-Friendly Interface**: Clean and intuitive design for a hassle-free experience.  

### Owners  
- **List Properties**: Add properties with details like price, availability, and location.  
- **Manage Listings**: Update or delete property details as needed.  

### Admin  
- **Monitor Activities**: Oversee the platform, ensuring smooth operation and compliance.  
- **Receive Messages**: Respond to user inquiries sent via the contact form.  

## Key Technologies  
- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  
- **Email Functionality**: `PHPMailer`  

## Installation  

1. Clone the repository:  
   ```bash
   git clone https://github.com/Suprio-Das/rent-resident.git
   ```  

2. Navigate to the project directory:  
   ```bash
   cd rent-resident
   ```  

3. Set up a local server environment (e.g., XAMPP or WAMP).  

4. Import the database:  
   - Open `phpMyAdmin` and create a new database (e.g., `rent_resident`).  
   - Import the provided SQL file from the `database` folder into the database.  

5. Configure `PHPMailer` for the Contact Us feature:  
   - Locate the `mailer_config.php` file.  
   - Update it with your SMTP credentials:  
     ```php  
     $mail->Host = 'smtp.example.com'; // Your SMTP server  
     $mail->Username = 'your-email@example.com'; // Your email address  
     $mail->Password = 'your-email-password'; // Your email password  
     $mail->SMTPSecure = 'tls';  
     $mail->Port = 587;  
     ```  

6. Update database configurations in the `config.php` file.  

7. Start the server and access the project at:  
   ```  
   http://localhost/rent-resident  
   ```  

## Usage  

- Tenants can search for and book rental properties.  
- Users can send inquiries via the **Contact Us** form, which will send an email to the admin using `PHPMailer`.  
- Owners can manage their property listings.  
- Admins monitor the entire system.  

## Limitations  
Currently, there is no integrated payment system.  

## Future Enhancements  
- Add an online payment gateway for secure transactions.  
- Improve search filters for properties.  
- Enable advanced analytics for admins.  

## Contributing  
Contributions are welcome! Feel free to fork the repository, make changes, and submit a pull request.  
