# Mini Project PT. Eagle Sporting Goods
## 📌 Deskripsi Proyek  
Mini proyek berbasis web untuk technical test yang dikembangkan menggunakan **Laravel (Backend) dan Next.js (Frontend)**, serta **MySQL** sebagai database. Sistem ini memiliki fitur autentikasi menggunakan **JWT**, dashboard dengan beberapa menu utama, logout, dan dukungan multi-bahasa (**Indonesia, Inggris, Mandarin**).

---

## 🚀 Teknologi yang Digunakan  
### **Backend (Laravel)**
- Laravel 10
- JWT Authentication
- MySQL
- CPanel (Deployment)

---
# 📌 API Documentation

## 📖 Overview  
API ini digunakan untuk **autentikasi pengguna** menggunakan **JWT**, serta menyediakan endpoint data pengguna. Backend dikembangkan menggunakan **Laravel** dan database **MySQL**.

---

## 🔑 Authentication  

Semua request ke endpoint yang dilindungi memerlukan **JWT token** yang dikirim melalui **Authorization Header**:  


---

## 📌 API Endpoints  

### **Authentication**
| Method | Endpoint       | Deskripsi                 | Authentication |
|--------|--------------|-------------------------|---------------|
| `POST` | `/api/sign-in`      | Login dan mendapatkan JWT | ❌ |
| `GET`  | `/api/user`       | Mendapatkan data pengguna | ✅ |

#### **🔹 Login**
**Request:**  
```json
{
  "email": "john.doe@example.com",
  "password": "password123"
}
```

**Response (Success):** 
```json
{
  {
    "code": "200",
    "message": "Berhasil melakukan login",
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL21pbmktcHJvamVjdC5iZS5hY2xhc2luZG8ubmV0L2FwaS9zaWduLWluIiwiaWF0IjoxNzM5MDMzOTYyLCJleHAiOjE3MzkwMzc1NjIsIm5iZiI6MTczOTAzMzk2MiwianRpIjoia2JQdno4UmNPMlpmTWlSMiIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.7vkUUTU190uGZDFzNrTYkgYIn0Zj1lv5zfILZBsijWE"
  }
}
```
#### **🔹 User Data**
**Header Request:**  
```json
{
  "Content-Type": "application/json",
  "Authorization": "Bearer ${JWTToken}"
}
```

**Response (Success):** 
```json
  {
    "success": true,
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "john.doe@example.com",
        "phone_number": "081234567890",
        "address": "Jl. Example 1, Jakarta",
        "created_at": null,
        "updated_at": null
    }
  }
```
---
## ⚙️ Instalasi & Menjalankan Proyek  

### **1️⃣ Clone Repository**  
```bash
git clone https://github.com/putriisabellaa/mini-project-esg-be.git
cd mini-project-esg-be
```
### **2️⃣ Menjalankan Backend (Laravel)**  
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan serve
