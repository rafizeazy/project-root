<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlikBelajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        #mobile-menu {
            display: none;
        }

        .container {
            margin: 0 auto;
            padding: 4rem;
            width: 48rem;
        }

        .container {
            margin: 0 auto;
            padding: 4rem;
            width: 48rem;
        }

        .fitur-layanan-content {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, opacity 0.4s ease;
            margin-left: 2.5rem;
            /* Offset left to position away from the edge */
            text-align: left;
            /* Align text to the left */
        }

        .fitur-layanan-item {
            max-width: 500px;
            /* Atur lebar maksimal */
            margin: 0 auto;
            /* Pusatkan elemen di tengah */
        }

        .fitur-layanan-content.open {
            max-height: 200px;
            /* Adjust based on your content */
            opacity: 1;
        }

        .accordion {
            .accordion-item {
                margin-bottom: 10px;
                /* Tambah jarak antar item */
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);

                button[aria-expanded='true'] {
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
                    /* Tambah shadow saat terbuka */
                }
            }

            button {
                position: relative;
                display: block;
                text-align: left;
                width: 100%;
                padding: 1em;
                font-size: 1.15rem;
                font-weight: 400;
                border: none;
                background: white;
                color: #333;
                transition: background-color 0.3s ease, color 0.3s ease;

                &:hover,
                &:focus {
                    cursor: pointer;
                    background-color: #f0f0f0;
                    /* Warna latar saat hover */
                    color: #000;
                }

                .icon {
                    display: inline-block;
                    position: absolute;
                    top: 50%;
                    right: 1em;
                    transform: translateY(-50%);
                    width: 22px;
                    height: 22px;
                    border: 2px solid #333;
                    border-radius: 50%;
                    transition: transform 0.3s ease;

                    &::before {
                        content: '';
                        position: absolute;
                        top: 10px;
                        left: 5px;
                        width: 10px;
                        height: 2px;
                        background: currentColor;
                    }

                    &::after {
                        content: '';
                        position: absolute;
                        top: 5px;
                        left: 10px;
                        width: 2px;
                        height: 10px;
                        background: currentColor;
                        transition: height 0.3s ease;
                        /* Animasi saat konten terbuka */
                    }
                }
            }

            button[aria-expanded='true'] .icon {
                transform: rotate(45deg);
                /* Rotasi ikon saat terbuka */
            }

            .accordion-content {
                opacity: 0;
                max-height: 0;
                overflow: hidden;
                transition: opacity 0.3s ease, max-height 0.3s ease;
                background-color: #fafafa;
                /* Latar konten */
                padding: 0 1em;

                p {
                    font-size: 1rem;
                    font-weight: 300;
                    margin: 1em 0;
                }
            }

            button[aria-expanded='true']+.accordion-content {
                opacity: 1;
                max-height: 10em;
                /* Sesuaikan tinggi maksimal konten */
            }
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-red-600">
                KlikBelajar
            </div>
            <div class="hidden md:flex space-x-8">
                <a class="text-gray-800 hover:text-gray-600" href="#tentang-kami">Tentang Kami</a>
                <a class="text-gray-800 hover:text-gray-600" href="#program-unggulan">Program Unggulan</a>
                <a class="text-gray-800 hover:text-gray-600" href="#fitur-layanan">Fitur Layanan</a>
                <a class="text-gray-800 hover:text-gray-600" href="#testimoni">Testimoni</a>
                <a class="text-gray-800 hover:text-gray-600" href="#faq">FAQ</a>
            </div>
            <a class="bg-green-500 text-white px-4 py-2 rounded-full hidden md:block" href="<?= base_url('login') ?>">Login</a>

            <!-- Hamburger Menu Button for Mobile -->
            <button class="md:hidden text-gray-800" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden">
            <div class="flex flex-col space-y-4 px-4 py-2">
                <a class="text-gray-800 hover:text-gray-600" href="#tentang-kami">Tentang Kami</a>
                <a class="text-gray-800 hover:text-gray-600" href="#program-unggulan">Program Unggulan</a>
                <a class="text-gray-800 hover:text-gray-600" href="#fitur-layanan">Fitur Layanan</a>
                <a class="text-gray-800 hover:text-gray-600" href="#testimoni">Testimoni</a>
                <a class="text-gray-800 hover:text-gray-600" href="#faq">FAQ</a>
                <a class="bg-green-500 text-white px-4 py-2 rounded-full" href="<?= base_url('login') ?>">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20" id="tentang-kami">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <h1 class="animate__animated animate__fadeInUp animate__delay-1s text-5xl font-bold mb-4">
                    Bimbingan Belajar Les Private Terbaik dan Terpercaya
                </h1>
                <p class="animate__animated animate__fadeInUp animate__delay-1s mb-6">
                    Kami Menyediakan Layanan Terbaik Guru Les Private untuk TK, SD, SMP, SMA, UN, OSN, UTBK, Simak UI, SBMPTN, Mengaji, Musik. Pendampingan Belajar Privat 1 Guru 1 Siswa, Secara Profesional dengan Smart Method.
                </p>
                <a class="bg-yellow-500 text-black px-6 py-3 rounded-full font-bold animate__animated animate__fadeInUp animate__delay-1s" href="#">
                    PILIH PROGRAM
                </a>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
                <img src="<?= base_url('assets/img/student.png') ?>" alt="Student Image" />
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-white py-10" id="sistem-belajar">
        <div class="container mx-auto px-4 flex flex-wrap justify-center">
            <div class="w-full md:w-1/4 p-4">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-user-graduate text-blue-500 text-3xl mb-4">
                    </i>
                    <h2 class="text-2xl font-bold">
                        6.324+
                    </h2>
                    <p class="text-gray-600">
                        Siswa Belajar
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/4 p-4">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-chalkboard-teacher text-blue-500 text-3xl mb-4">
                    </i>
                    <h2 class="text-2xl font-bold">
                        1.952
                    </h2>
                    <p class="text-gray-600">
                        Pengajar di KlikBelajar
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/4 p-4">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-university text-blue-500 text-3xl mb-4">
                    </i>
                    <h2 class="text-2xl font-bold">
                        95%
                    </h2>
                    <p class="text-gray-600">
                        Siswa di Terima PTN
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/4 p-4">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-star text-blue-500 text-3xl mb-4">
                    </i>
                    <h2 class="text-2xl font-bold">
                        9/10
                    </h2>
                    <p class="text-gray-600">
                        Tingkat Kepuasan Siswa
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Unggulan Section -->
    <section class="bg-blue-500 py-20" id="program-unggulan">
        <div class="container mx-auto py-12">
            <h1 class="text-4xl font-bold text-center text-white mb-8">
                Program Unggulan
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img
                        alt="A child learning to read with a tutor"
                        class="w-full h-48 object-cover"
                        src="https://storage.googleapis.com/a1aa/image/v76EDehyKfmOGEwJPf0AGfVmTEhFwxjOqbttpct1a7Q5eDSdC.jpg" />
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-gray-600 mb-2">1.000+ peserta telah mendaftar</p>
                            <h2 class="text-xl font-bold mb-2">Les Privat Calistung</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, obcaecati! Fugiat natus perferendis corporis laudantium totam. Repudiandae ea possimus vitae sunt voluptatem est unde nesciunt tenetur tempora aspernatur, earum voluptatum?
                            </p>
                        </div>
                        <a
                            href="https://wa.link/jj4wjt"
                            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center transition hover:bg-blue-600">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img
                        alt="A group of elementary school students learning with a tutor"
                        class="w-full h-48 object-cover"
                        src="https://storage.googleapis.com/a1aa/image/hxStMauRPIqfAyoDMffO237U4qVw7xGgFjBRcgsmOOnafBpOB.jpg" />
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-gray-600 mb-2">1.000+ peserta telah mendaftar</p>
                            <h2 class="text-xl font-bold mb-2">Les Privat SD</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus atque reiciendis minima aut! Eveniet aperiam dicta expedita quas ipsa quasi dolorem commodi, dolore accusamus error fugit recusandae ad debitis quibusdam.
                            </p>
                        </div>
                        <a
                            href="https://wa.link/jj4wjt"
                            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center transition hover:bg-blue-600">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img
                        alt="A group of middle school students learning with a tutor"
                        class="w-full h-48 object-cover"
                        src="https://storage.googleapis.com/a1aa/image/LO2h2USiww5NGBaY85C6dQ2esFpA34MAOVXscJEO34S4PI1JA.jpg" />
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-gray-600 mb-2">1.000+ peserta telah mendaftar</p>
                            <h2 class="text-xl font-bold mb-2">Les Privat SMP</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia similique consectetur inventore voluptatum quibusdam. Ab eligendi ratione eos quam possimus quod? Commodi ipsam culpa dolor distinctio earum esse iusto iste?
                            </p>
                        </div>
                        <a
                            href="https://wa.link/jj4wjt"
                            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center transition hover:bg-blue-600">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img
                        alt="A group of middle school students learning with a tutor"
                        class="w-full h-48 object-cover"
                        src="https://storage.googleapis.com/a1aa/image/g9si0SqNf3VzbihRMf5GY9KhmJryyhGtyVLOQbfWCXNMihUnA.jpg" />
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-gray-600 mb-2">1.000+ peserta telah mendaftar</p>
                            <h2 class="text-xl font-bold mb-2">Les Privat SMA/SMK</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem repellat architecto pariatur quia minus facilis, rerum dolores aliquid laudantium earum minima fugit sapiente vitae odio doloremque assumenda similique fugiat asperiores!
                            </p>
                        </div>
                        <a
                            href="https://wa.link/jj4wjt"
                            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center transition hover:bg-blue-600">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img
                        alt="A group of middle school students learning with a tutor"
                        class="w-full h-48 object-cover"
                        src="https://storage.googleapis.com/a1aa/image/A7WoUvN48qJ8CRT1FfasIbkHOKbceWsLWL7NfIpRqwmJihUnA.jpg" />
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-gray-600 mb-2">1.000+ peserta telah mendaftar</p>
                            <h2 class="text-xl font-bold mb-2">Les Privat SNBT</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae, voluptas nisi quo totam eveniet fugiat eius a obcaecati aliquid ut? Officiis, enim. Unde autem impedit, architecto animi ullam error!
                            </p>
                        </div>
                        <a
                            href="https://wa.link/jj4wjt"
                            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center transition hover:bg-blue-600">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img
                        alt="A group of middle school students learning with a tutor"
                        class="w-full h-48 object-cover"
                        src="https://storage.googleapis.com/a1aa/image/tgapunubExpPINeqHZNKKRfAQYo8KiQZKLYdQJ1oXU2CxQqTA.jpg" />
                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-gray-600 mb-2">1.000+ peserta telah mendaftar</p>
                            <h2 class="text-xl font-bold mb-2">Les Privat Mengaji</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui expedita rem fugit beatae reiciendis! Veritatis expedita accusamus commodi dolor id, dolores, nobis labore dolore delectus accusantium laudantium earum officia molestiae.
                            </p>
                        </div>
                        <a
                            href="https://wa.link/jj4wjt"
                            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center transition hover:bg-blue-600">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Fitur Layanan Section -->
    <section class="bg-white py-20 flex items-center justify-center min-h-screen" id="fitur-layanan">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-900 mb-8">Fitur Layanan</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="1">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(1)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Personalized & Individualized</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Konsep les privat yang dipersonalisasi dan diindividualisasi berbasis
                            kebutuhan spesifik siswa demi mengurangi distraksi dalam belajar,
                            meningkatkan efektivitas, dan memberikan ruang bagi tutor untuk menyesuaikan gaya mengajar dengan gaya belajar siswa.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="2">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(2)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Bimbingan Belajar di Rumah</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Program bimbingan belajar di rumah dirancang untuk memberikan fleksibilitas belajar yang tinggi, sehingga siswa dapat fokus dan mendapatkan bimbingan sesuai kebutuhan mereka.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="1">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(1)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Kurikulum yang Tepat</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Konsep les privat yang dipersonalisasi dan diindividualisasi berbasis
                            kebutuhan spesifik siswa demi mengurangi distraksi dalam belajar,
                            meningkatkan efektivitas, dan memberikan ruang bagi tutor untuk menyesuaikan gaya mengajar dengan gaya belajar siswa.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="2">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(2)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Laporan KBM Reguler</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Program bimbingan belajar di rumah dirancang untuk memberikan fleksibilitas belajar yang tinggi, sehingga siswa dapat fokus dan mendapatkan bimbingan sesuai kebutuhan mereka.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="1">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(1)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Melatih Keahlian</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Konsep les privat yang dipersonalisasi dan diindividualisasi berbasis
                            kebutuhan spesifik siswa demi mengurangi distraksi dalam belajar,
                            meningkatkan efektivitas, dan memberikan ruang bagi tutor untuk menyesuaikan gaya mengajar dengan gaya belajar siswa.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="2">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(2)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Personalized & Individualized</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Program bimbingan belajar di rumah dirancang untuk memberikan fleksibilitas belajar yang tinggi, sehingga siswa dapat fokus dan mendapatkan bimbingan sesuai kebutuhan mereka.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="1">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(1)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Mengasah Skill</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Konsep les privat yang dipersonalisasi dan diindividualisasi berbasis
                            kebutuhan spesifik siswa demi mengurangi distraksi dalam belajar,
                            meningkatkan efektivitas, dan memberikan ruang bagi tutor untuk menyesuaikan gaya mengajar dengan gaya belajar siswa.</p>
                    </div>
                </div>
                <div class="fitur-layanan-item bg-blue-500 text-white p-4 rounded-lg" data-id="2">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(2)">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-2xl mr-4"></i>
                            <span>Strategic Goal</span>
                        </div>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </div>
                    <div class="fitur-layanan-content mt-4">
                        <p>Program bimbingan belajar di rumah dirancang untuk memberikan fleksibilitas belajar yang tinggi, sehingga siswa dapat fokus dan mendapatkan bimbingan sesuai kebutuhan mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimoni Section -->
    <section class="bg-gray-100 py-20" id="testimoni">
        <div class="container mx-auto p-6">
            <h2 class="text-4xl font-bold mb-8 text-center">
                Testimonials
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative">
                        <img
                            alt="Portrait of Rina Sari holding books"
                            class="w-full h-64 object-cover"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/TlgzJJ6JFf1xESr0aUUDvufpcpfLPBNVw56ebewexhw6XIG6E.jpg"
                            width="600" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent p-4">
                            <h3 class="text-white text-xl font-semibold">Dea</h3>
                            <p class="text-green-300">Pelajar</p>
                            <p class="text-white mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad sequi aperiam?
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus corrupti adipisci qui dignissimos! Laudantium cupiditate fugit voluptates quis itaque, placeat quia dolorum veritatis autem quibusdam ut cumque illum dicta? Harum.
                    </p>
                    <div class="flex items-center mt-4">
                        <img
                            alt="Portrait of Dadan"
                            class="w-12 h-12 rounded-full"
                            height="50"
                            src="https://storage.googleapis.com/a1aa/image/fp6L1gnlh9zVTCUdWIvEu9DhgXIoFd7QX5eD80wW9RahhYoTA.jpg"
                            width="50" />
                        <div class="ml-4">
                            <h3 class="text-gray-900 font-semibold">Dadan</h3>
                            <p class="text-green-300">Pelajar</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative">
                        <img
                            alt="Portrait of Ibu Nina"
                            class="w-full h-64 object-cover"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/L7p6BdHTdkpRJF4fGp0Nf7OeWZEW4DoC7CDoz3HftAKIGihOB.jpg"
                            width="600" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent p-4">
                            <h3 class="text-white text-xl font-semibold">Ibu Nina</h3>
                            <p class="text-green-300">Orang tua Siswa</p>
                            <p class="text-white mt-2">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis aut qui hic accusamus
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nostrum tenetur minima, obcaecati quisquam amet, illo optio voluptatem similique iusto dolorem reiciendis aspernatur, consectetur doloremque adipisci harum? Asperiores, nesciunt reprehenderit!
                    </p>
                    <div class="flex items-center mt-4">
                        <img
                            alt="Portrait of Ibu Maria"
                            class="w-12 h-12 rounded-full"
                            height="50"
                            src="https://storage.googleapis.com/a1aa/image/wAOfbemeTyBNfRhDJ2eixTvaSiFqAv6pfHEhQGaZfZeZchYoTA.jpg"
                            width="50" />
                        <div class="ml-4">
                            <h3 class="text-gray-900 font-semibold">Ibu Maria</h3>
                            <p class="text-green-300">Orang tua Siswa</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative">
                        <img
                            alt="Portrait of Bapak Yudi"
                            class="w-full h-64 object-cover"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/AkSeP9jUbS28Nq387HQmVZf51fyKgdySnql6eCmRRw81FihOB.jpg"
                            width="600" />
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent p-4">
                            <h3 class="text-white text-xl font-semibold">Pak Wahyudi</h3>
                            <p class="text-green-300">Orang tua Siswa</p>
                            <p class="text-white mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil exercitationem deleniti ipsam? Quaerat atque expedita porro
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 6 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime praesentium quod quos nihil error earum neque expedita, velit vel rem nostrum quia fugiat qui atque corrupti esse culpa accusantium! Optio.
                    </p>
                    <div class="flex items-center mt-4">
                        <img
                            alt="Portrait of Diana Wulandari"
                            class="w-12 h-12 rounded-full"
                            height="50"
                            src="https://storage.googleapis.com/a1aa/image/0eC6YAcnGwX5Jy1SnAbeTNApGp5VM8kRNbFXqYSbDMgjhYoTA.jpg"
                            width="50" />
                        <div class="ml-4">
                            <h3 class="text-gray-900 font-semibold">Mila</h3>
                            <p class="text-green-300">Pelajar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="bg-white py-20" id="faq">
        <div class="container">
            <h2 style="font-size: 24px; font-weight: bold; text-align: center;">
                Frequently Asked Questions
            </h2>

            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Bagaimana kalau tidak cocok dengan guru les nya?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Apakah jadwalnya flexible?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Bagaimana jika guru pengajar tidak hadir?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Berapa lama durasi les tatap muka?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Berapa jumlah pertemuan dalam 1 bulan?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold mb-4">
                        KlikBelajar
                    </h3>
                    <p>
                        Kami menyediakan layanan bimbingan belajar private terbaik dan terpercaya.
                    </p>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-4">
                        Navigasi
                    </h3>
                    <ul>
                        <li class="mb-2">
                            <a class="hover:underline" href="#tentang-kami">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="hover:underline" href="#sistem-belajar">
                                Sistem Belajar
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="hover:underline" href="#program-unggulan">
                                Program Unggulan
                            </a>
                            <a class="hover:underline" href="#fitur-layanan">
                                Fitur Layanan
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="hover:underline" href="#testimoni">
                                Testimoni
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="hover:underline" href="#faq">
                                FAQ
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3">
                    <h3 class="text-xl font-bold mb-4">
                        Hubungi Kami
                    </h3>
                    <p>
                        Jl. Pendidikan No. 123, Karawang, Indonesia
                    </p>
                    <p>
                        Email: <a class="text-blue-400 hover:underline" href="mailto:info@klikbelajar.com">info@klikbelajar.com</a>
                    </p>
                    <p>
                        Telepon: <a class="text-blue-400 hover:underline" href="tel:+62123456789">+62 123 456 789</a>
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-white hover:text-gray-400">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function toggleAccordion(id) {
            const clickedItem = document.querySelector(`.fitur-layanan-item[data-id="${id}"]`);
            const clickedContent = clickedItem.querySelector('.fitur-layanan-content');
            const clickedIcon = clickedItem.querySelector('.toggle-icon');

            // Tutup semua accordion yang terbuka kecuali yang diklik
            document.querySelectorAll('.fitur-layanan-item').forEach(item => {
                const content = item.querySelector('.fitur-layanan-content');
                const icon = item.querySelector('.toggle-icon');
                if (item.getAttribute('data-id') !== id.toString()) {
                    content.classList.remove('open');
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });

            // Toggle accordion yang diklik
            if (clickedContent.classList.contains('open')) {
                clickedContent.classList.remove('open');
                clickedIcon.classList.remove('fa-chevron-up');
                clickedIcon.classList.add('fa-chevron-down');
            } else {
                clickedContent.classList.add('open');
                clickedIcon.classList.remove('fa-chevron-down');
                clickedIcon.classList.add('fa-chevron-up');
            }
        }
        // accordition
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));


        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
        });

        // Responsive update to adjust transform on window resize
        window.addEventListener('resize', updateCarousel);
    </script>
</body>

</html>