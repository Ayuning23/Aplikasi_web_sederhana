# UAS Keamanan Data  
## Simulasi Login Aman dan File Viewer Aman (PHP)

## Deskripsi Proyek
Proyek ini dibuat untuk mensimulasikan perbandingan antara sistem **rentan (vulnerable)** dan sistem **aman (secure)** pada aplikasi web berbasis PHP. Fokus utama adalah pada:
1. Keamanan proses login
2. Keamanan akses file (file viewer)

---

## 1. Deskripsi Kerentanan

### 1.1 Login Tidak Aman
Pada folder `vulnerable/login.php`, sistem login memiliki kelemahan:
- Password disimpan dan dibandingkan secara langsung (tanpa hashing)
- Tidak ada pembatasan percobaan login
- Rentan terhadap serangan brute force

**Dampak:**
- Password mudah dicuri
- Akun pengguna dapat diambil alih

---

### 1.2 File Viewer Tidak Aman
Pada `vulnerable/file_viewer.php`:
- Parameter file diambil langsung dari URL
- Tidak ada validasi path dan ekstensi
- Rentan terhadap serangan directory traversal

**Contoh serangan:**

**file_viewer.php?file=../../../../etc/passwd**

**Dampak:**
- Kebocoran file penting server
- Akses tidak sah terhadap sistem

---

## 2. Teknik Mitigasi

### 2.1 Login Aman
Pada folder `secure/login.php`, mitigasi yang diterapkan:
- Password di-hash menggunakan `password_hash()` (bcrypt)
- Verifikasi menggunakan `password_verify()`
- Rate limiting berbasis session
- Pemblokiran sementara setelah 5 kali gagal login

**Hasil:**
- Password aman meskipun database bocor
- Serangan brute force dapat ditekan

---

### 2.2 File Viewer Aman
Pada `secure/file_viewer.php`, mitigasi yang diterapkan:
- Whitelist file yang boleh diakses
- Validasi path menggunakan `realpath()`
- Pembatasan direktori akses
- Validasi ekstensi file

**Hasil:**
- Directory traversal dapat dicegah
- File sensitif server tetap terlindungi

---

## 3. Analisis Risiko Singkat

| Komponen | Risiko | Tingkat |
|--------|------|--------|
| Login | Brute force, pencurian akun | Tinggi |
| Password | Kebocoran data pengguna | Tinggi |
| File Viewer | Akses file ilegal | Tinggi |

**Kesimpulan Risiko:**  
Tanpa mitigasi, sistem sangat rentan terhadap serangan umum. Setelah mitigasi diterapkan, tingkat risiko dapat dikurangi secara signifikan.

---

## 4. Kesimpulan
Penerapan teknik keamanan dasar seperti hashing password, rate limiting, dan validasi input file merupakan langkah penting dalam membangun aplikasi web yang aman. Perubahan kode yang sederhana dapat memberikan peningkatan keamanan yang signifikan.

---

## 5. Author
Nama : Sri Ayu Ningsih  

NIM  : C2C023131

Kelas: Reguler (D)

Mata Kuliah : Keamanan Data Dan Informasi

Tahun : 2026
