<?php include('./components/header.php') ?>

<div class="container-fluid relative -mt-[100px] h-[2000px] bg-gradient-to-r from-[#1cd8d2] to-[#93edc7]">
    <div>
        <img src="./assets/blob2.svg" class="absolute top-0 left-0" />
        <div class="white-layer h-full w-full absolute top-0 left-0">
            <!-- hero section -->
            <section class="container-fluid">
                <div class="flex align-center justify-center">
                    <div class="flex flex-col mt-40 basis-5/12">
                        <h1 class="text-3xl mb-8 font-bold leading-normal">Hallo, Selamat Datang di Website Sistem Pakar Penentuan Gaya Belajar</h1>
                        <a href="/sipajar/input-data.php" class="bg-gradient-to-r from-[#A8FF78] to-[#78FFD6] w-56 py-3 px-2 text-xl text-center font-normal rounded-full hover:bg-gradient-to-r hover:from-lime-200 hover:to-yellow-200">Cek Gaya Belajarmu</a>
                    </div>
                    <div>
                        <img src="./assets/cartoon.png">
                    </div>
                </div>
                <div class="border-solid border-b-4 w-full border-lime-200 mx-auto"></div>
            </section>

            <!-- Tentang platform -->
            <section class="container my-20" id="about">
                <h1 class="text-3xl text-center mx-auto font-bold mb-10">Apa itu SIPAJAR?</h1>
                <div class="tentang flex w-3/4 justify-center items-center mx-auto">
                    <p class="basis-8/12 text-xl">Sistem Pakar Penentuan Gaya Belajar berguna untuk membantu menentukan gaya belajar mahasiswa agar proses belajar mahasiswa lebih efektif dan mahasiswa dapat menentukan bagaimana strategi belajar yang cocok untuknya.</p>
                    <img src="./assets/book.png" class="w-1/4">
                </div>
            </section>

            <!-- Cara Menggunakan -->
            <section class="container my-20">
                <h1 class="text-3xl text-center mx-auto font-bold mb-10">Cara Menggunakan SIPAJAR</h1>

                <div class="cara mx-auto w-3/4">
                    <div class="flex flex-row justify-evenly items-center">
                        <img src="./assets/cartoon.png" class="w-1/3 basis 1/4">
                        <div class="flex flex-col basis-2/4">
                            <ol>
                                <li class="detail-cara mx-auto px-2 py-2 text-md w-full">1. Buka Halaman Cek Metode Belajar dengan <a href="/sipajar/input-data.php" class="text-blue-600">Klik Disini</a></h3>
                                <li class="detail-cara mx-auto my-3 px-2 text-md py-2 w-full">2. Checklist 4 sampai 6 item yang paling sesuai dengan preferensi belajar kamu</li>
                                <li class="detail-cara mx-auto px-2 py-2 text-md w-full">3. Klik Kirim dan Lihat Metode Belajar Kamu</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- kelompok kami -->
            <section class="container my-20" id="kelompok-kami">
                <h1 class="text-3xl text-center mx-auto font-bold mb-10">Kelompok Kami</h1>
                <div class="flex justify-evenly items-center mx-24">
                    <div class="detail-cara flex flex-col w-2/5 justify-center items-center p-10 mx-5">
                        <svg class="w-20 h-20 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <p class="text-lg font-bold">Farid Pahlevi</p>
                        <p class="text-lg font-bold">NPM: 2299100198</p>
                    </div>

                    <div class="detail-cara flex flex-col w-2/5 justify-center items-center p-10 mx-5">
                        <svg class="w-20 h-20 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <p class="text-lg font-bold">Liya Nur Afidah</p>
                        <p class="text-lg font-bold">NPM: 2299100177</p>
                    </div>

                    <div class="detail-cara flex flex-col w-2/5 justify-center items-center p-10 mx-5">
                        <svg class="w-20 h-20 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <p class="text-lg font-bold">Sella Yuniar</p>
                        <p class="text-lg font-bold">NPM: 19082010044</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>





<?php include('./components/footer.php') ?>