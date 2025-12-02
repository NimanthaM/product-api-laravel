# Aahaas Ecommerce - Backend API

A RESTful API built with Laravel for managing products in an ecommerce application.

## Features

- **Product Management**: Fetch all products or individual product details
- **RESTful API**: Clean and well-structured API endpoints
- **Database Seeding**: Pre-populated with sample product data
- **CORS Enabled**: Ready for frontend integration
- **Error Handling**: Robust error handling with meaningful responses

## Prerequisites

This project uses **XAMPP** for PHP and MySQL. Before you begin, ensure you have:

- **XAMPP** (includes PHP 8.0.30 and MySQL)
- **Composer** (PHP dependency manager)
- **Git**

### Check if you have PHP installed:
```powershell
C:\xampp\php\php.exe --version
```

### Check if you have Composer installed:
```powershell
composer --version
```

If you don't have XAMPP, download it from: https://www.apachefriends.org/
If you don't have Composer, download it from: https://getcomposer.org/download/

## 🛠️ Installation & Setup

Follow these steps to set up the project on your local machine:

### Step 1: Clone the Repository

```powershell
git clone <your-repository-url>
cd product-api-laravel
```

### Step 2: Start XAMPP Services

1. Open **XAMPP Control Panel**
2. Click **Start** next to **MySQL** (should run on port 3307)
3. Wait until it shows "Running" status

### Step 3: Install Dependencies

```powershell
composer install
```

This will install all the required Laravel packages and dependencies (105 packages).

### Step 4: Environment Configuration

The `.env` file is already configured for XAMPP with these settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=aahaas_ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

**Important Notes**: 
- MySQL runs on port **3307** (not the default 3306)
- Password is empty (XAMPP default)
- If you copied `.env.example`, make sure `DB_PORT=3307`

### Step 5: Generate Application Key

```powershell
C:\xampp\php\php.exe artisan key:generate
```

This command will set the `APP_KEY` value in your `.env` file (already done in this project).

### Step 6: Create the Database

1. Open your browser and go to **http://localhost/phpmyadmin**
2. Click **"New"** in the left sidebar
3. Enter database name: `aahaas_ecommerce`
4. Choose collation: `utf8mb4_unicode_ci`
5. Click **"Create"**

**Note**: The database has already been created and seeded for this project.

### Step 7: Run Migrations and Seed Database

Run both migration and seeding in one command to create tables and insert 8 sample products:

```powershell
C:\xampp\php\php.exe artisan migrate:fresh --seed
```

**Expected Output:**
```
Dropped all tables successfully.
Migration table created successfully.
Migrating: 2024_01_01_000000_create_products_table
Migrated:  2024_01_01_000000_create_products_table (7.77ms)
Seeding: Database\Seeders\ProductSeeder
Seeded:  Database\Seeders\ProductSeeder (29.79ms)
Database seeding completed successfully.
```

### Step 8: Start the Development Server

Open PowerShell in the project directory and run:

```powershell
C:\xampp\php\php.exe artisan serve
```

**Expected Output:**
```
Starting Laravel development server: http://127.0.0.1:8000
[Date/Time] PHP 8.0.30 Development Server (http://127.0.0.1:8000) started
```

 **The API is running at:** `http://127.0.0.1:8000`

**Keep this PowerShell window open!** The server will stop if you close it.

## 📡 API Endpoints

### Get All Products
- **URL**: `http://localhost:8000/api/products`
- **Method**: `GET`
- **Response**: JSON array of all products
```json
[
  {
    "id": 1,
    "name": "Wireless Bluetooth Headphones",
    "description": "Premium noise-cancelling wireless headphones...",
    "price": "129.99",
    "image_url": "https://images.unsplash.com/photo-...",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
  }
]
```

### Get Single Product
- **URL**: `http://localhost:8000/api/products/{id}`
- **Method**: `GET`
- **Response**: JSON object of single product
```json
{
  "id": 1,
  "name": "Wireless Bluetooth Headphones",
  "description": "Premium noise-cancelling wireless headphones...",
  "price": "129.99",
  "image_url": "https://images.unsplash.com/photo-...",
  "created_at": "2024-01-01T00:00:00.000000Z",
  "updated_at": "2024-01-01T00:00:00.000000Z"
}
```

## 🧪 Testing the API

### Using Browser
Simply navigate to: `http://localhost:8000/api/products`

### Using cURL
```bash
curl http://localhost:8000/api/products
```

### Using Postman
1. Open Postman
2. Create a new GET request
3. Enter URL: `http://localhost:8000/api/products`
4. Click Send

## 📁 Project Structure

```
product-api-laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProductController.php    # Product API controller
│   └── Models/
│       └── Product.php                  # Product model
├── config/
│   ├── cors.php                         # CORS configuration
│   └── database.php                     # Database configuration
├── database/
│   ├── migrations/
│   │   └── 2024_01_01_000000_create_products_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ProductSeeder.php            # Sample product data
├── routes/
│   └── api.php                          # API routes
├── .env.example                         # Example environment file
├── composer.json                        # PHP dependencies
└── README.md                            # This file
```

## 🗃️ Database Schema

### Products Table
| Column      | Type          | Description                    |
|-------------|---------------|--------------------------------|
| id          | bigint        | Primary key (auto-increment)   |
| name        | varchar(255)  | Product name                   |
| description | text          | Product description            |
| price       | decimal(10,2) | Product price                  |
| image_url   | text          | Product image URL              |
| created_at  | timestamp     | Creation timestamp             |
| updated_at  | timestamp     | Last update timestamp          |

## 🔧 Troubleshooting

### Issue: "Access denied for user 'root'@'localhost'"
**Solution**: 
1. Make sure MySQL is running in XAMPP Control Panel
2. Check `.env` file has `DB_PORT=3307` (not 3306)
3. Verify password is empty: `DB_PASSWORD=`

### Issue: "Database not found"
**Solution**: 
1. Open http://localhost/phpmyadmin
2. Create database `aahaas_ecommerce` manually
3. Run migrations again: `C:\xampp\php\php.exe artisan migrate:fresh --seed`

### Issue: "php: The term 'php' is not recognized"
**Solution**: Use the full path:
```powershell
C:\xampp\php\php.exe artisan serve
```

### Issue: Port 8000 already in use
**Solution**: Use a different port:
```powershell
C:\xampp\php\php.exe artisan serve --port=8001
```
Then update frontend API URL to `http://localhost:8001/api`

### Issue: "Target class [Controller] does not exist"
**Solution**: Restart the Laravel server:
1. Press **Ctrl+C** in the PowerShell window
2. Run `C:\xampp\php\php.exe artisan serve` again

### Issue: Server stops when running other commands
**Solution**: Keep the server terminal open and run other commands in a new PowerShell window.

## Security Notes

- Never commit your `.env` file to version control
- Change the `APP_KEY` in production
- Use environment variables for sensitive data
- Update database credentials for production deployment

## Dependencies

Main dependencies used in this project (105 packages total):

- **laravel/framework** (^8.75) - The Laravel framework (version 8 for PHP 8.0 compatibility)
- **guzzlehttp/guzzle** (^7.0.1) - HTTP client
- **fakerphp/faker** (^1.9.1) - Generate fake data for seeding

**Note**: This project uses Laravel 8 instead of Laravel 10 because XAMPP comes with PHP 8.0.30, and Laravel 10 requires PHP 8.1+.

## Deployment

For production deployment:

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Run `composer install --optimize-autoloader --no-dev`
4. Run `php artisan config:cache`
5. Run `php artisan route:cache`
6. Run `php artisan view:cache`

## Author

Created as part of the Aahaas Ecommerce full-stack development assignment.

## Support

If you encounter any issues:
1. Make sure all prerequisites are installed
2. Check that MySQL is running
3. Verify database credentials in `.env`
4. Ensure all migrations have run successfully
5. Check the Laravel log file at `storage/logs/laravel.log`

---

