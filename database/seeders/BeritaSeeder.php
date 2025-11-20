<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;

/**
 * BeritaSeeder - Database Seeding Class
 * 
 * Penjelasan Seeder:
 * Seeder adalah kelas di Laravel yang digunakan untuk mengisi (populate) database
 * dengan data dummy atau data awal yang diperlukan aplikasi. Seeder sangat berguna untuk:
 * 
 * 1. Development: Menyediakan data test saat development tanpa input manual
 * 2. Demo: Menampilkan contoh data kepada klien atau pengguna
 * 3. Testing: Memastikan database memiliki data konsisten saat testing
 * 4. Fresh Installation: Menyiapkan data dasar saat instalasi baru
 * 
 * Cara kerja:
 * - DatabaseSeeder memanggil BeritaSeeder melalui $this->call(BeritaSeeder::class)
 * - Method run() dijalankan saat perintah: php artisan db:seed atau php artisan migrate:fresh --seed
 * - Setiap Berita::create() menambahkan satu record ke tabel 'beritas'
 */
class BeritaSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Jalankan database seeds untuk tabel beritas
     * 
     * Menambahkan data berita sampel ke database dengan konten yang relevan
     * tentang program SILAHKAN dan pengelolaan limbah tekstil
     */
    public function run(): void
    {
        // Berita pertama: Program Donasi Kain
        Berita::create([
            'title'   => 'Program Donasi Kain Layak Pakai Resmi Diluncurkan',
            'excerpt' => 'Kini masyarakat dapat menyumbangkan pakaian bekas layak pakai langsung dari rumah dengan mudah.',
            'content' => '
                <h3>Peluncuran Program Donasi Kain SILAHKAN</h3>
                <p>Peluncuran program donasi kain layak pakai dihadiri oleh berbagai komunitas dan organisasi lokal. 
                Program ini bertujuan mengurangi limbah tekstil yang mencapai jutaan ton setiap tahunnya dan membantu 
                masyarakat yang membutuhkan pakaian berkualitas.</p>
                
                <h4>Tujuan Program:</h4>
                <ul>
                    <li><strong>Mengurangi Limbah Tekstil:</strong> Pakaian bekas yang masih layak akan didaur ulang 
                    alih-alih dibuang ke tempat pembuangan sampah</li>
                    <li><strong>Membantu Masyarakat:</strong> Menyediakan pakaian berkualitas untuk masyarakat 
                    yang kurang mampu</li>
                    <li><strong>Edukasi Berkelanjutan:</strong> Meningkatkan kesadaran tentang pentingnya ekonomi sirkular</li>
                </ul>
                
                <h4>Cara Berpartisipasi:</h4>
                <p>Masyarakat dapat:</p>
                <ol>
                    <li>Memilih pakaian bekas yang masih layak pakai dari rumah</li>
                    <li>Membersihkan dan memastikan kondisi pakaian dalam keadaan baik</li>
                    <li>Menghubungi SILAHKAN untuk penjemputan atau membawa langsung ke lokasi drop-off</li>
                    <li>Menerima sertifikat apresiasi untuk kontribusi Anda</li>
                </ol>
                
                <p><strong>Bergabunglah dalam gerakan untuk lingkungan yang lebih baik dan masyarakat yang lebih sejahtera!</strong></p>
            ',
            'image' => 'image/berita1.jpg',
        ]);

        // Berita kedua: Edukasi Pengelolaan Limbah
        Berita::create([
            'title'   => 'SILAHKAN Gelar Edukasi Pengelolaan Limbah di Sekolah Hijau',
            'excerpt' => 'Mengedukasi generasi muda tentang pentingnya daur ulang kain, pemilahan sampah, dan ekonomi sirkular.',
            'content' => '
                <h3>Workshop Edukasi Limbah Tekstil di Sekolah Hijau</h3>
                <p>Kegiatan edukasi berlangsung selama dua hari penuh dan melibatkan workshop intensif tentang 
                pengolahan kain menjadi produk bernilai tambah. Peserta terdiri dari siswa SMA, guru, dan komunitas 
                lokal yang tertarik dengan sustainability.</p>
                
                <h4>Materi yang Diajarkan:</h4>
                <ul>
                    <li><strong>Pengelolaan Limbah Tekstil:</strong> Jenis-jenis limbah kain dan cara penanganannya</li>
                    <li><strong>Pemilahan Sampah:</strong> Teknik yang benar untuk memisahkan berbagai jenis tekstil</li>
                    <li><strong>Daur Ulang Kain:</strong> Proses dari kain bekas menjadi bahan baku baru</li>
                    <li><strong>Craft & DIY:</strong> Workshop praktik membuat produk dari kain bekas (tas, tote bag, dll)</li>
                    <li><strong>Bisnis Berkelanjutan:</strong> Peluang usaha dalam ekonomi sirkular</li>
                </ul>
                
                <h4>Hasil dan Dampak:</h4>
                <p>Peserta berhasil membuat lebih dari 50 produk jadi dari kain bekas, termasuk:</p>
                <ul>
                    <li>Tote bag ramah lingkungan</li>
                    <li>Pouch dan organizer</li>
                    <li>Dekorasi rumah</li>
                    <li>Aksesori fashion</li>
                </ul>
                
                <h4>Pesan Penting:</h4>
                <p><em>"Setiap kain yang kita selamatkan adalah investasi untuk masa depan bumi yang lebih hijau. 
                Dengan edukasi sejak dini, generasi muda dapat menjadi agen perubahan dalam misi sustainability kami."</em></p>
                
                <p><strong>Jadilah bagian dari revolusi fashion berkelanjutan bersama SILAHKAN!</strong></p>
            ',
            'image' => 'image/berita2.jpg',
        ]);
    }
}
