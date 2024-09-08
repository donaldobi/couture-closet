# Couture Closet

**Couture Closet** is a feature-rich e-commerce platform built with Laravel, designed to provide a seamless shopping experience for fashion enthusiasts.

## Contributors | Team Members

- Imran / [github.com/imranhsayed](https://github.com/imranhsayed)
- Donald / [github.com/donaldobi](https://github.com/donaldobi)
- Rui / [github.com/Seraphim-Eve](https://github.com/Seraphim-Evem)
- Parth / [github.com/ParthKher01](https://github.com/ParthKher01)
- Snigdha / [github.com/Snigdha-git](https://github.com/Snigdha-git)

## Description

**Couture Closet** offers a comprehensive set of functionalities for both customers and administrators. The project includes a product catalog, user authentication, shopping cart, checkout process, and an admin dashboard for managing various aspects of the e-commerce platform.

### Customer-facing Features

- Product Catalog (Shop)
- Product Detail Pages
- Shopping Cart
- Checkout Process
- Order Confirmation
- User Registration and Authentication
- User Profile Management
- Product Reviews

### Admin Dashboard

- User Management (CRUD)
- Product Management (CRUD)
- Category Management (CRUD)
- Order Management (CRUD)
- Review Management (CRUD)

### Additional Features

- Search Functionality
- Filtering and Sorting Options
- Tax Calculation based on Provinces
- Address Management for Users
- Admin and Regular User Roles
- Payment Gateway Integration
- Email Notification for Orders

## Database Structure

The following tables are present in the project:

- Users
- Products
- Categories
- Orders
- Order Items
- Provincial Tax Rates
- Product Images
- Product Reviews
- Product Categories
- Transactions
- User Addresses
- User Roles


## Installation

To set up the **Couture Closet** project on your local machine, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Create a new database and update the .env file:**
   ```bash
   cp .env.example .env
   ```
  
4. **Configure your database settings in the .env file.**


5. **Run migrations:**
   ```bash
   php artisan migrate --seed
   ```

6. **Build assets:**
   ```bash
   npm run build
   ```

7. **Create storage link:**
   ```bash
   php artisan storage:link
   ```

8. **Start the development server:**
   ```bash
   php artisan serve
   ```

9. **For hot-reloading during development:**
   ```bash
   npm run dev
   ```

10. **Access the application at:**
   ```bash
   http://localhost:8000
   ```

11. **Available NPM commands:**
    ```bash
    npm run dev: Start the Vite development server.
    npm run build: Build assets for production.
    npm run build-images: Remove existing public images and create a new storage link.
    ```

12. **Make sure to run npm run build-images after seeding the database to ensure proper image handling.**



## Key Components

### Controllers

The project includes several controllers to handle various functionalities:

- Shop Controller (app/Http/Controllers/ShopController.php): Handles the main shop functionality, including product listing and filtering.
- Product Controller (app/Http/Controllers/ProductController.php): Manages product-related operations, including CRUD operations for admin users.
- Cart Controller (app/Http/Controllers/CartController.php): Handles shopping cart functionality.
- Order Controller (app/Http/Controllers/OrderController.php): Manages order processing, confirmation, and details.
- Admin Order Controller (app/Http/Controllers/Admin/AdminOrderController.php): Handles order management for admin users.
- Category Controller (app/Http/Controllers/CategoryController.php): Manages product categories.
- User Controller (app/Http/Controllers/UserController.php): Handles user management and profile updates.
- Product Review Controller (app/Http/Controllers/ProductReviewController.php): Manages product reviews and ratings.

### Authentication

The project uses Laravel's built-in authentication system, with controllers located in app/Http/Controllers/Auth/.

## Authentication

The project uses Laravel's built-in authentication system, with controllers located in app/Http/Controllers/Auth/.


# Project Images

## E-Commerce Frontend

### Homepage
![E-Commerce Homepage](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/landing.jpg)

### Shop Page
![E-Commerce Shop Page](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/list.jpg)

### Product Detail Page
![E-Commerce Product Detail Page](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/detail.jpg)

## Utility Pages

### Cart Page
![E-Commerce Cart Page](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/cart.jpg)

### Checkout Page
![E-Commerce Checkout Page](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/checkout.jpg)

### User Profile
![User Profile Addresses](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/user_profile_addresses.jpg)
![User Profile Order Detail](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/user_profile_order_detail.jpg)
![User Profile Orders](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/user_profile_orders.jpg)
![User Profile Reviews](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/user_profile_reviews.jpg)


## Administrative Dashboard

### Dashboard Landing
![Admin Dashboard Landing](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/dashboard_landing.jpg)

### Bestselling Products
![Admin Dashboard Bestselling Products](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/dashboard_bestsellers.jpg)

### StoreStats
![Admin Dashboard Store Stats](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/dashboard_stats.png)

### Orders
![Admin Dashboard Orders](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/dashboard_orders.png)
![Admin Dashboard Create Order](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/dashboard_create_order.png)
![Admin Dashboard Order Detail](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/dashboard_order_detail.jpg)

## Figma Mockups
![Figma Mockups 1](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/figma_mockups_1.jpg)
![Figma Mockups 2](https://raw.githubusercontent.com/donaldobi/couture-closet/main/storage/app/public/images/screenshots/figma_mockups_2.png)