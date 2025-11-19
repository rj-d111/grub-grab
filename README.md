# GRUB GRAB: School Canteen Ordering Optimization



https://github.com/user-attachments/assets/6912b5eb-3084-45e6-86b4-ef413f818acb


**Grub Grab** is a modern, responsive web application designed to significantly enhance the efficiency of school canteen operations and improve the dining experience for students, faculty, and concessionaires.

Developed as an academic project at LPU Cavite, the system automates the ordering and management process, effectively reducing long queues, minimizing human error, and promoting sustainability through reduced food waste.

## 🚀 Key Features

Grub Grab is built around three main user roles—Admin, Concessionaire, and Customer—each with dedicated functionality:


<img width="1920" height="1080" alt="Copy of FOR REPORTING ONLY  GRUB GRAB - fordagraydes (2)" src="https://github.com/user-attachments/assets/78d41530-6119-45c4-9b2b-21a4bdba13c6" />

### 1\. Customer (Student/Faculty) Features

  * **Fast Ordering Process:** Quickly browse the menu, add items to the cart, and place orders.
  * **Multi-Store Cart:** Order items from multiple concessionaires in a single transaction.
  * **Multiple Payment Options:** Supports Cash on Counter (COC) and digital payment methods like GCash.
  * **Order Tracking:** Monitor order fulfillment time for quick pickup.

<img width="1920" height="1080" alt="Copy of FOR REPORTING ONLY  GRUB GRAB - fordagraydes (1)" src="https://github.com/user-attachments/assets/015f2b0a-15db-447a-ad1e-b315d82f4922" />

### 2\. Concessionaire (Store Owner) Features

  * **Menu Management:** Add, edit, and delete food items with details like name, description, price, and category.
  * **Product Overview:** Maintain a list of all products, manage inventory, and set item availability (active/inactive).
  * **Order Fulfillment:** Receive and process incoming orders efficiently, minimizing hassle and human errors.

<img width="1920" height="1080" alt="Copy of FOR REPORTING ONLY  GRUB GRAB - fordagraydes" src="https://github.com/user-attachments/assets/d6f3d4f0-6427-4d9d-8e5a-f669ce4d8e29" />

### 3\. Admin Features

  * **User Management:** Centralized administration to manage and oversee all Customer and Concessionaire accounts.
  * **Reporting:** Generate critical system reports, including Customer Satisfaction and Order Fulfillment Time reports, to track performance and identify areas for improvement.
  * **System Maintenance:** Access to system-level controls (maintenance and shutdown).

## 💻 Technology Stack

  * **Backend:** PHP (The core logic and server-side processing)
  * **Database:** MySQL
  * **Frontend:** HTML, CSS, JavaScript, Bootstrap (Designed with a responsive layout for mobile-friendly use)

<img width="1920" height="1080" alt="Copy of FOR REPORTING ONLY  GRUB GRAB - fordagraydes (3)" src="https://github.com/user-attachments/assets/5f77ff13-4af5-49ca-8174-368924f748e2" />

## 💡 System Architecture

The application is structured to ensure clear separation of concerns and efficient data flow:

<img width="1920" height="1080" alt="Copy of FOR REPORTING ONLY  GRUB GRAB - fordagraydes (4)" src="https://github.com/user-attachments/assets/f62e158d-4bde-4ec8-a17d-fa9f8bea9315" />

### Data Flow (Context Diagram)

The system acts as the central hub for all transactions:

1.  **Customer** sends an **Order Request** to the **Ordering Reservation System**.
2.  The system handles **Food Selection** and **Food Reservation** with the **Menu**.
3.  **Concessionaire** receives **Preferences & Available Food** information.
4.  The system facilitates **Payment** and generates a **Receipt** with the **Date of Order**.
5.  **Customer** receives **Order Confirmation**.

### Database Schema (Entity Relationship Diagram - ERD)

The database is structured to support the multi-role system:

  * **Core Entities:** `Admin`, `Concessioner`, `Customer`, `Menu`, `Orders`, `Order Details`, `Category`, `SubCategory`, and `Payment`.
  * **Key Relationships:** Many-to-Many (`M:M`) relationships exist between Admins, Concessioners, and Customers, while Orders link to Order Details (`1:1`) and Menus are linked to Concessioners (`M:1`).

## ⚙️ Installation and Setup

### Prerequisites

  * A web server that supports PHP (e.g., Apache, Nginx)
  * A database server (e.g., MySQL, MariaDB)
  * PHP (version X.X or later - *Specify your required PHP version*)

### Steps

1.  **Clone the Repository:**

    ```bash
    git clone [https://github.com/rj-d111/grub-grab.git](https://github.com/rj-d111/grub-grab.git)
    cd grub-grab
    ```

2.  **Database Setup:**

      * Create a new database (e.g., `grubgrab_db`).
      * Import the database schema (create tables based on the ERD).
      * **Configuration:** Locate the database connection file (e.g., `config.php` or `db_connect.php`) and update the credentials:
        ```php
        $servername = "localhost";
        $username = "your_db_user";
        $password = "your_db_password";
        $dbname = "grubgrab_db";
        ```

3.  **Deployment:**

      * Place the project files in your web server's root directory (e.g., `/var/www/html/grub-grab`).
      * Ensure the web server has appropriate read/write permissions for necessary directories (e.g., image uploads).

4.  **Access the Application:**

      * Open your browser and navigate to the project's URL (e.g., `http://localhost/grub-grab/`).

## 👨‍💻 Contributors

This project was developed by:

  * **Robbie De los Santos**
  * **Justine Razon**
  * **Llean Sumague**
  * **Allysa Trompeta**

-----

*Developed fordaGRAYDES.*
