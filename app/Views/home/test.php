<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-white text-gray-900">
    <div class="container mx-auto py-16 px-4">
        <div class="flex">
            <div class="w-1/2">
                <h1 class="text-4xl font-bold text-blue-900">Frequently Asked Questions</h1>
            </div>
            <div class="w-1/2">
                <div class="space-y-4">
                    <div>
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(this)">
                            <span class="text-blue-900 text-lg">- Bagaimana kalau tidak cocok dengan guru les nya ?</span>
                        </div>
                        <div class="mt-2 pl-6 text-gray-500">
                            Masa penyesuaian guru dan siswa les privat idealnya terjadi setelah minimal 4x sesi tatap muka. maka dari itu permintaan ganti guru bisa di lakukan setelah 4x sesi les privat demi terciptanya kecocokan antara guru dan siswa
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(this)">
                            <span class="text-blue-900 text-lg">+ Apakah jadwal les nya bisa fleksibel ?</span>
                        </div>
                        <div class="mt-2 pl-6 text-gray-500 hidden">
                            Ya, jadwal les bisa disesuaikan dengan kebutuhan siswa dan ketersediaan guru.
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(this)">
                            <span class="text-blue-900 text-lg">+ Bagaimana jika guru pengajar berhalangan hadir ?</span>
                        </div>
                        <div class="mt-2 pl-6 text-gray-500 hidden">
                            Jika guru berhalangan hadir, kami akan mengatur jadwal pengganti atau menyediakan guru pengganti.
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(this)">
                            <span class="text-blue-900 text-lg">+ Berapa lama durasi untuk sekali les tatap muka</span>
                        </div>
                        <div class="mt-2 pl-6 text-gray-500 hidden">
                            Durasi les tatap muka biasanya berlangsung selama 1 hingga 2 jam per sesi.
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(this)">
                            <span class="text-blue-900 text-lg">+ Berapa banyak jumlah pertemuan dalam 1 bulan ?</span>
                        </div>
                        <div class="mt-2 pl-6 text-gray-500 hidden">
                            Jumlah pertemuan dalam 1 bulan dapat disesuaikan dengan kebutuhan siswa, biasanya antara 4 hingga 8 kali.
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between cursor-pointer" onclick="toggleAccordion(this)">
                            <span class="text-blue-900 text-lg">+ Apa melayani Les online di luar jabodetabek ?</span>
                        </div>
                        <div class="mt-2 pl-6 text-gray-500 hidden">
                            Ya, kami melayani les online untuk siswa di luar jabodetabek.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleAccordion(element) {
            const content = element.nextElementSibling;
            const isVisible = !content.classList.contains('hidden');
            const allContents = document.querySelectorAll('.space-y-4 > div > div:nth-child(2)');
            const allHeaders = document.querySelectorAll('.space-y-4 > div > div:nth-child(1) > span');

            allContents.forEach(c => c.classList.add('hidden'));
            allHeaders.forEach(h => h.textContent = h.textContent.replace('-', '+'));

            if (!isVisible) {
                content.classList.remove('hidden');
                element.querySelector('span').textContent = element.querySelector('span').textContent.replace('+', '-');
            }
        }
    </script>
</body>

</html>