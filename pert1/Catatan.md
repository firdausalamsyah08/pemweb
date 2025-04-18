tahap-tahap untuk ngebuild docker yaitu pastikan ada file env,docker compose.yml

yang penting didalam file nginx.conf nya di panggil semua

problem di laptop gua gabisa langsung ngetik localhost doang, harus lengkap ngetik nya localhostindex.html

pokonya kalo src itu untuk menampung project

fungsi docker, nginx dan lain2 masuknya ke container

disetiap analisis harus ada 5W 1H

ingat sebelum matikan laptop jika docker menyala harap di down dulu

Fungsi Utama Nginx

Web Server

Mengelola permintaan HTTP dan mengirimkan halaman web ke browser pengguna.

Alternatif populer untuk Apache, terutama untuk menangani high traffic.

Reverse Proxy

Meneruskan permintaan klien ke backend server seperti PHP-FPM, Node.js, Python (Django/Flask), atau Java (Spring Boot).

Membantu meningkatkan keamanan dengan menyembunyikan server asli.

Load Balancer

Mendistribusikan lalu lintas ke beberapa server backend untuk menjaga performa dan mencegah overload.

Mendukung metode round-robin, least connections, dan IP hash.

HTTP Cache

Menyimpan data yang sering diakses (seperti gambar, CSS, dan JavaScript) untuk mempercepat loading website.

Mengurangi beban pada server backend.

Streaming Server

Mendukung media streaming seperti HLS (HTTP Live Streaming) untuk video dan audio.