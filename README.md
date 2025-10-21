# 🔐 Secure Password

A simple **backend application for secure password validation**.

## ⚙️ Requirements

* PHP **≥ X.X** (check `composer.json` for version)
* **Composer** installed

## 🛠️ Installation & Setup

1. Clone the repository

   ```bash
   git clone https://github.com/Daniel-P-Lima/secure-password.git
   cd secure-password
   ```
2. Install PHP dependencies

   ```bash
   composer install
   ```
3. (Optional) Install Node dependencies

   ```bash
   npm install
   ```
4. Start the development server

   ```bash
   php artisan serve
   ```

## 📦 API Example

**POST** `/api/validate-password`
**Body:**

```json
{
  "password": "P4s5W@Rd#!"
}
```
