<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Profile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::updateOrCreate(
            [ 'email' => 'dermilosofiskinsolutions@gmail.com' ],
            [
                'name' => 'Admin',
                'password' => bcrypt('PWNYASUSAHSEKALI123'),
            ]
        );

        // Seed Products
        Product::updateOrCreate(
            ['name' => 'Serum Vitamin C Brightening'],
            [
                'description' => 'Serum vitamin C yang membantu mencerahkan kulit dan mengurangi noda hitam.',
                'category' => 'maklon',
                'price' => 150000,
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Moisturizer Hydrating Gel'],
            [
                'description' => 'Moisturizer gel yang memberikan hidrasi intensif untuk kulit kering.',
                'category' => 'maklon',
                'price' => 120000,
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Acne Spot Treatment'],
            [
                'description' => 'Treatment khusus untuk mengatasi jerawat dan bekas jerawat.',
                'category' => 'maklon',
                'price' => 85000,
                'is_active' => true,
            ]
        );

        // Seed Machine Products
        Product::updateOrCreate(
            ['name' => 'Mesin Filling & Capping Otomatis'],
            [
                'description' => 'Mesin pengisian dan penutupan botol otomatis untuk produksi skincare skala besar.',
                'category' => 'mesin',
                'price' => 25000000,
                'image_path' => 'products/El4PkwWNCHHbbzk9OcPFpe01s1rE2NCFw2WjKhjR.png',
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Mesin Emulsifier Homogenizer'],
            [
                'description' => 'Mesin emulsifier untuk mencampur bahan-bahan skincare secara homogen.',
                'category' => 'mesin',
                'price' => 15000000,
                'image_path' => 'products/Iw5gOY7J2wgTejElXACHze1tqhpf3cOhpnmLE5Qt.jpg',
                'is_active' => true,
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Mesin Label & Packaging'],
            [
                'description' => 'Mesin pelabelan dan pengemasan produk skincare secara otomatis.',
                'category' => 'mesin',
                'price' => 12000000,
                'image_path' => 'products/PbTJAKg1hCIVhfP7cW8jouN3sRDb5ZDnJGGsf6Zl.jpg',
                'is_active' => true,
            ]
        );

        // Produk Mesin Sampel
        Product::updateOrCreate(
            ['name' => 'Sampel Mesin Mixer Mini'],
            [
                'description' => 'Sampel mesin mixer mini untuk uji coba produksi skala laboratorium.',
                'category' => 'mesin',
                'price' => 5000000,
                'image_path' => 'products/rhXCS5genWNCo4gPd4i7M2e1SifCfbLw5zXRbORU.png',
                'is_active' => true,
            ]
        );

        // Seed Blogs
        Blog::updateOrCreate(
            ['title' => 'Panduan Perawatan Kulit untuk Pemula'],
            [
                'content' => 'Perawatan kulit yang baik dimulai dari rutinitas sederhana. Pelajari langkah-langkah dasar perawatan kulit harian yang efektif.',
                'excerpt' => 'Panduan lengkap perawatan kulit untuk pemula dengan tips praktis.',
                'author' => 'Tim Dermilosofi',
                'published_date' => now()->subDays(5),
                'tags' => 'perawatan kulit, pemula, tips',
                'is_active' => true,
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Manfaat Vitamin C dalam Skincare'],
            [
                'content' => 'Vitamin C adalah antioksidan kuat yang dapat membantu mencerahkan kulit, mengurangi hiperpigmentasi, dan merangsang produksi kolagen.',
                'excerpt' => 'Pelajari berbagai manfaat vitamin C untuk kesehatan kulit Anda.',
                'author' => 'Dr. Beauty Lab',
                'published_date' => now()->subDays(3),
                'tags' => 'vitamin C, antioksidan, mencerahkan',
                'is_active' => true,
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Cara Mengatasi Kulit Berminyak'],
            [
                'content' => 'Kulit berminyak membutuhkan perawatan khusus. Temukan tips efektif untuk mengontrol produksi minyak berlebih.',
                'excerpt' => 'Solusi praktis untuk mengatasi masalah kulit berminyak.',
                'author' => 'Tim Dermilosofi',
                'published_date' => now()->subDays(1),
                'tags' => 'kulit berminyak, perawatan, tips',
                'is_active' => true,
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Inovasi Terbaru dalam Formulasi Skincare 2024'],
            [
                'content' => 'Tahun 2024 membawa inovasi baru dalam dunia skincare. Dari bahan aktif canggih hingga teknologi pengiriman yang lebih efektif, PT. Dermilosofi selalu mengikuti tren terkini untuk memberikan produk terbaik kepada klien kami. Kami menggunakan bahan-bahan alami terdepan dan teknologi produksi modern untuk memastikan setiap produk memenuhi standar kualitas tertinggi.',
                'excerpt' => 'Eksplorasi inovasi terbaru dalam formulasi skincare yang akan mengubah industri kecantikan.',
                'author' => 'Tim R&D Dermilosofi',
                'published_date' => now(),
                'tags' => 'inovasi, skincare, 2024, formulasi',
                'is_active' => true,
            ]
        );

        // Seed Profiles
        Profile::updateOrCreate(
            ['section' => 'about'],
            [
                'content' => 'PT. Dermilosofi adalah perusahaan yang bergerak di bidang maklon skincare profesional. Kami berkomitmen untuk memberikan layanan terbaik dalam formulasi, produksi, dan legalitas produk skincare.',
                'image_path' => 'images/Profil/ceo.jpg',
                'is_active' => true,
            ]
        );

        Profile::updateOrCreate(
            ['section' => 'vision'],
            [
                'content' => 'Menjadi perusahaan terdepan dalam industri maklon skincare di Indonesia dengan inovasi produk yang berkualitas tinggi.',
                'is_active' => true,
            ]
        );

        Profile::updateOrCreate(
            ['section' => 'mission'],
            [
                'content' => 'Memberikan layanan maklon yang profesional, inovatif, dan terpercaya untuk membantu brand skincare mewujudkan visi mereka.',
                'is_active' => true,
            ]
        );
    }
}
