## Sistem Manajemen Kost (Kost.in)

Sistem manajemen kost berbasis web yang dibangun menggunakan PHP dan MySQL.  
Aplikasi ini menyediakan fitur CRUD data kamar serta autentikasi admin, dan dilengkapi dengan pengujian manual menggunakan test case dan dokumentasi bug report.

---

## Fitur Utama

- Login Admin
- CRUD Data Kamar (Tambah, Edit, Hapus)
- Akses publik (customer) untuk melihat data kamar (read-only)
- Upload gambar kamar
- Tampilan responsive
- Pemesanan kamar langsung melalui WhatsApp

---

## Testing

Project ini telah dilakukan pengujian manual dengan detail sebagai berikut:

- Test Case (format Excel)
- Ditemukan bug pada fitur login (tidak menampilkan pesan error)

## Dokumentasi:
- `test-case/test-case.xlsx`
- `bug-report/bug-report.md`

---

## Database

File database tersedia pada folder:
- `database/kost.sql`

Import ke MySQL menggunakan phpMyAdmin atau MySQL CLI.

---
## Bug yang Ditemukan

**Login tidak menampilkan pesan error saat password salah**

- User tidak mendapatkan feedback saat gagal login
- Form hanya ter-reset tanpa notifikasi

---

## Teknologi yang Digunakan

- PHP (Native)
- MySQL
- HTML, CSS
- JavaScript

---

## Tujuan Project

Project ini dibuat sebagai portofolio untuk melamar posisi:
- QA Engineer Intern
- Backend Developer Intern

---

## Author

Dibuat oleh: **Zulva Husni Muntaha**
