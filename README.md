## 👨‍💻 Author
* **Nama:** Muhammad Haidar Ramzy Akbar
* **NIM:** 245150707111069

## 🚀 Features
* 📖 List semua data mahasiswa
* ➕ Tambah data mahasiswa baru
* 🔍 Detail data mahasiswa
* ✏️ Update data mahasiswa
* ❌ Hapus data mahasiswa
* 📄 Dokumentasi API otomatis (Scramble)

## 📌 API Endpoints

**Base URL:** `/api/v1/students`

| Method | Endpoint | Description |
| :--- | :--- | :--- |
| **GET** | `/api/v1/students` | Ambil semua data mahasiswa |
| **POST** | `/api/v1/students` | Tambah data mahasiswa baru |
| **GET** | `/api/v1/students/{id}` | Detail data mahasiswa berdasarkan ID |
| **PUT/PATCH** | `/api/v1/students/{id}` | Update data mahasiswa berdasarkan ID |
| **DELETE** | `/api/v1/students/{id}` | Hapus data mahasiswa berdasarkan ID |

## ⚙️ Cara Install & Menjalankan (Local/XAMPP)

**1. Clone repository:**
```bash
git clone https://github.com/yvnghaidar/api-student.git
cd api-student
```

**2. Install dependency:**
```bash
composer install
```

**3. Copy file environment:**
```bash
cp .env.example .env
```

**4. Generate app key:**
```bash
php artisan key:generate
```

**5. Setup database di file `.env`:**
```env
DB_DATABASE=api_student_db
DB_USERNAME=root
DB_PASSWORD=
```

**6. Jalankan migration:**
```bash
php artisan migrate
```

**7. Jalankan server:**
```bash
php artisan serve
```

## 📄 Dokumentasi API (Scramble)

Untuk melihat dokumentasi dan melakukan testing API secara langsung:

1. Pastikan server Laravel sedang berjalan `php artisan serve`.
2. Buka URL berikut di browser: `http://127.0.0.1:8000/docs/api`

---

## 📸 API Documentation Preview & Hasil Fitur
`⚠️ Dokumentasi hanya dapat diakses secara lokal karena aplikasi belum di-deploy`.

Berikut adalah hasil pengujian (testing) untuk masing-masing endpoint API yang telah dibuat:

### 1. Tampilan Utama (Overview Scramble)
<img width="1916" height="987" alt="Screenshot 2026-03-26 160106" src="https://github.com/user-attachments/assets/3fa3b764-56a6-431b-8db8-d6760e8e0882" />

### 2. Fitur List Data Mahasiswa (GET /students)
<img width="1919" height="962" alt="Screenshot 2026-03-26 163747" src="https://github.com/user-attachments/assets/ad76d8c7-08d0-4048-a1bc-1c8198570252" />

### 3. Fitur Tambah Data (POST /students)
<img width="1917" height="963" alt="Screenshot 2026-03-26 163736" src="https://github.com/user-attachments/assets/889c14e5-ec9e-496e-a026-64993f8ad9dd" />

### 4. Fitur Detail Data (GET /students/{id})
<img width="1917" height="964" alt="Screenshot 2026-03-26 163854" src="https://github.com/user-attachments/assets/2e0b4a26-2efd-4996-8bf3-78f2e9677d53" />

### 5. Fitur Update Data (PUT/PATCH /students/{id})
<img width="1917" height="964" alt="Screenshot 2026-03-26 163854" src="https://github.com/user-attachments/assets/cef8c78d-2ce0-47b6-b13d-082b33ff8104" />

### 6. Fitur Hapus Data (DELETE /students/{id})
<img width="1919" height="973" alt="Screenshot 2026-03-26 163910" src="https://github.com/user-attachments/assets/f44756c7-019a-4870-9df7-d9fb30532299" />
