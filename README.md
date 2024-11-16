# Parlour Management System
## Overview
The Parlour Management System is a web application designed to facilitate the management of appointments and customers for a beauty parlour. The system includes functionalities for booking appointments, adding new customers, and displaying recent appointments and featured services.

## Technologies
•	Backend: PHP, MySQL
•	Frontend: HTML, CSS
•	Database: MySQL

## Database Design
The database consists of the following tables:
1.	Customers: Stores customer details.
-	customer_id (Primary Key)
-	name
-	phone_number
-	email
2.	Services: Stores service details.
-	service_id (Primary Key)
-	service_name
-	price
3.	Appointments: Stores appointment details.
-	appointment_id (Primary Key)
-	customer_id (Foreign Key)
-	service_id (Foreign Key)
-	date
-	time
