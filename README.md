# 🛠️ Admin Dashboard (CRUD)  

## 📌 Overview  
This project is a **CRUD-based Admin Dashboard** built with **Laravel**, allowing users to manage data efficiently with features like **Create, Read, Update, and Delete** operations.  

## 🚀 Features  
✅ **User-friendly admin panel**  
✅ **CRUD operations for managing records**  
✅ **Authentication & authorization**  
✅ **Responsive design**  
✅ **Database integration with MySQL**  

## 🏗️ Installation & Setup  
1. **Clone the repository:**  
   ```bash
   git clone https://github.com/your-username/admin-dashboard.git
   cd admin-dashboard
   ```
2. **Install dependencies:**  
   ```bash
   composer install
   npm install
   ```
3. **Set up environment variables:**  
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Configure the database:**  
   - Update `.env` file with database credentials  
   - Run migrations:  
     ```bash
     php artisan migrate --seed
     ```
5. **Run the application:**  
   ```bash
   php artisan serve
   ```
