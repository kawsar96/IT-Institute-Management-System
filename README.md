# IT Institute Management System

## Project Overview

The **IT Institute Management System** project is designed to manage all employee and student records, generate ID cards, and create payment receipts. This system is built for three types of users: **Superadmin**, **Admin**, and **User (Employee)**. Each user type has specific roles and functionalities within the system.

## Features

### Superadmin

-   Register new admins.
-   Delete existing admins.

### Admin

-   **Student Panel**: Manage student records, including intake approval.
-   **Employee Panel**: Manage employee records (full-time and part-time).
-   **User Panel**: register new employees (users) into the system who will manage student payments as well as records and oversee user (employee) activities.
-   **Notifications**: View and manage system notifications.
-   **Approve Student Intake and Payment**: Approve student registrations and payments , also manage intake procedures.

### User (Employee)

-   **Add Student**: Register new students in the system.
-   **Update Payment**: Manage and update payment records for students.

## Technologies Used

-   **Backend:**: Laravel
-   **Frontend:**: HTML, CSS, JavaScript
-   **Database:**: MySQL
-   **Addtional Tools**: Bootstrap, jQuery

## Installation

To run this project locally, follow these steps:

1. Clone the repository:
    ```bash
    git clone https://github.com/kawsar96/IT-Institute-Management-System.git
    ```
2. Navigate to the project directory:
    ```bash
    cd IT-Institute-Management-System
    ```
3. Install dependencies:
    ```bash
    composer install
    npm install
    ```
4. Setup environment file:

    - Create a .env file from the .env.example.
    - Update your database credentials and other configuration in the .env file.

5. Run migrations:
    ```bash
    php artisan migrate
    ```
6. Serve the application:
    ```bash
    php artisan serve
    ```

## Usage

Once installed, the system can be accessed from the browser. Superadmin has to be registered from commandline which can be done using Laravel tinker shell. Superadmin can register Admins, Admins can manage the records, and Users (employees) can add and update student details.
