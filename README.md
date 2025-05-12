# 🍽️ Menu-Restaurant

A restaurant menu application with a clean and intuitive design, along with an admin panel for full menu management.

## 📋 Description

This project provides users with easy access to the restaurant’s dishes, allows filtering by categories, and offers feedback functionality. For administrators, it features a full CRUD interface for managing dishes and categories.

### Key Features

- Display of dishes with category-based filtering.
- Add/edit/delete dishes from the admin panel.
- Image upload with preview.
- Category management.
- Toggle dish availability for users.
- Category badge showing the number of dishes.
- Social media buttons.
- Feedback form.
- Scroll-to-top button.
- Mobile-friendly and responsive layout.

## 🛠 Technologies Used

- Laravel
- Blade (Laravel templating)
- HTML, CSS
- JavaScript
- Font Awesome Icons
- Docker

## ⚙️ Installation

> Make sure Docker is installed on your machine.

```bash
git clone https://github.com/yourusername/menu-restaurant.git
cd menu-restaurant
cp .env.example .env
# Configure your .env file as needed
docker-compose up -d
docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed  # if seeders are available
# Menu-Restaurant
