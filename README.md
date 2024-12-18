# Fandi Blog

Selamat datang di Fandi Blog, platform blogging yang memungkinkan Anda untuk menulis, berbagi, dan mengelola konten dengan mudah. Proyek ini dibangun menggunakan PHP dan MySQL, serta menggunakan Bootstrap untuk tampilan yang responsif.

## Fitur Utama

- **Autentikasi Pengguna**: Pengguna dapat mendaftar dan masuk untuk mengakses fitur-fitur blog.
  - Pendaftaran: `auth/register.php` (startLine: 1, endLine: 70)
  - Masuk: `auth/login.php` (startLine: 1, endLine: 84)

- **Manajemen Profil**: Pengguna dapat memperbarui informasi profil mereka.
  - Profil: `users/profile.php` (startLine: 1, endLine: 54)

- **Pembuatan dan Pengelolaan Postingan**: Pengguna dapat membuat, memperbarui, dan menghapus postingan.
  - Membuat Postingan: `posts/create.php` (startLine: 44, endLine: 99)
  - Memperbarui Postingan: `posts/update.php` (startLine: 1, endLine: 76)

- **Komentar**: Pengguna dapat menambahkan komentar pada postingan.
  - Menambahkan Komentar: `posts/post.php` (startLine: 19, endLine: 40)

- **Panel Admin**: Admin dapat mengelola pengguna, postingan, dan komentar.
  - Panel Admin: `admin-panel/index.php` (startLine: 1, endLine: 25)
  - Menampilkan Komentar: `admin-panel/comments-admins/show-comments.php` (startLine: 1, endLine: 32)

- **Navigasi dan Tampilan**: Menggunakan Bootstrap untuk tampilan yang responsif dan modern.
  - Navbar: `includes/navbar.php` (startLine: 1, endLine: 45)
  - Footer: `includes/footer.php` (startLine: 1, endLine: 44)

## Instalasi

1. Clone repositori ini ke direktori lokal Anda.
2. Buat database MySQL dan impor file `myblog.sql` untuk membuat tabel yang diperlukan.
3. Sesuaikan konfigurasi database di `config/config.php`.
4. Jalankan server lokal Anda dan akses proyek melalui browser.

## Kontribusi

Kami menyambut kontribusi dari siapa pun. Jika Anda ingin berkontribusi, silakan buat pull request atau buka issue untuk diskusi lebih lanjut.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat file `LICENSE` untuk informasi lebih lanjut.

## Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami melalui email di [fandardyy@gmail.com](mailto:fandardyy@gmail.com).

---

Terima kasih telah menggunakan Fandi Blog! Kami berharap Anda menikmati pengalaman blogging Anda.
