## Sistem Manajemen Kost (Kost.in)

Sistem manajemen kost berbasis web yang dibangun menggunakan PHP Native dan MySQL.  
Aplikasi ini memungkinkan pengguna untuk melihat dan memesan kamar, serta menyediakan dashboard admin untuk mengelola data kamar dan booking.


---

## Fitur Utama

User (Public)
- Melihat daftar kamar
- Melihat detail kamar (harga, tipe, gambar, status)
- Melakukan booking kamar melalui form
- Mendapatkan notifikasi setelah booking

 Admin
- Login Admin
- CRUD Data Kamar (Tambah, Edit, Hapus)
- Melihat data booking user
- Approve / Reject booking

---

Alur Sistem

1. User memilih kamar
2. User melakukan booking
3. Data tersimpan dengan status **pending**
4. Admin mengecek booking
5. Admin approve → status jadi **approved**

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
- Fullstack Developer Intern

---

## Author

Dibuat oleh: **Zulva Husni Muntaha**
