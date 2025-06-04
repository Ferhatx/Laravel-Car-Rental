# Laravel Car Rental Web Application

This is a **Car Rental Web Application** built with Laravel. Users can rent cars, and administrators can manage vehicles, rental operations, and track financial statistics.

## 🚗 Features

### User Panel (Homepage)
- List of available rental cars
- Reservation system for daily rentals
- Car detail page with:
  - Rental duration
  - Car specifications

### Admin Panel
- List of all rented vehicles
- Display of rental fees and profit/loss table
- Add new cars
- Update or delete existing cars

## 🛠️ Installation Instructions

### Requirements
- PHP >= 8.0
- Composer
- MySQL
- Laravel 10+
- Node.js & NPM (for frontend assets)

### Setup Steps

```bash
# Clone the repository
git clone https://github.com/Ferhatx/Laravel-Car-Rental.git

cd Laravel-Car-Rental

# Install dependencies
composer install
npm install && npm run dev

# Create .env file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database settings in the .env file
php artisan migrate --seed

# Start the development server
php artisan serve
```

## 📸 Screenshots
> You can add project screenshots here.

## 📊 Admin Panel Features
- List of all rental transactions
- Rental fees and profit tracking
- Add and manage vehicles

## 🧑‍💻 Developer

**Ferhatx**  
🔗 [My GitHub Profile](https://github.com/Ferhatx)

## 📁 License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

---

Feel free to contribute by opening issues or submitting pull requests.
