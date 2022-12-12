<?php include('./components/header.php') ?>

<div class="container-fluid relative -mt-[100px] h-[2400px] bg-gradient-to-r from-[#1cd8d2] to-[#93edc7]">
    <div>
        <img src="./assets/blob2.svg" class="absolute top-0 left-0" />
        <img src="./assets/blob1.svg" class="absolute top-1/4 right-0" />
        <div class="white-layer h-full w-full absolute top-0 left-0">
            
            <section class="container-fluid mt-36">
                <h1 class="text-2xl font-bold text-center">Cek Gaya Belajar Anda</h1>
                <form action="process.php" method="post" class="tentang mt-10 p-5 w-3/5 mx-auto">
                    <table class="border-separate border-spacing-3">
                        <tr>
                            <th class="text-xl detail-cara p-2">No.</th>
                            <th class="text-xl detail-cara p-2 ">Preferensi Belajar</th>
                            <th class="text-xl detail-cara p-2 "> Pilih </th>
                        </tr>
                        <!-- sepuluh row -->
                        <tr>
                            <td class="detail-cara p-2">1.</td>
                            <td class="detail-cara p-2">Suka dengan diskusi kelompok.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A1" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">2.</td>
                            <td class="detail-cara p-2">Suka pelajaran yang berkelompok</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A2" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">3.</td>
                            <td class="detail-cara p-2">Lebih nyaman berkonsultasi dan berdiskusi</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A3" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">4.</td>
                            <td class="detail-cara p-2">Suka belajar mengutarakan ide/argument</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A4" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">5.</td>
                            <td class="detail-cara p-2">Suka bekerja diruangan sendiri</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A5" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">6.</td>
                            <td class="detail-cara p-2">Lebih suka belajar sendiri</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A6" class="w-5 h-5 rounded-lg"value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">7.</td>
                            <td class="detail-cara p-2">Belajar secara autodidak</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A7" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">8.</td>
                            <td class="detail-cara p-2">Tidak mudah terganggu oleh keributan</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A8" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">9.</td>
                            <td class="detail-cara p-2">Konsentrasi terhadap gangguan suara</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A9" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">10.</td>
                            <td class="detail-cara p-2">Dapat berkonsentrasi dengan mudah meskipun ada banyak orang</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A10" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <!-- sepuluh row selesai -->

                        <!-- sepuluh row -->
                        <tr>
                            <td class="detail-cara p-2">11.</td>
                            <td class="detail-cara p-2">Cenderung berfikir dengan menggunakan gambar.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A11" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">12.</td>
                            <td class="detail-cara p-2">Memiliki kemampuan dalam memodifikasi objek.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A12" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">13.</td>
                            <td class="detail-cara p-2">Menyukai permainan kata, puisi, pantun, dan menemukan arti kata</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A13" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">14.</td>
                            <td class="detail-cara p-2">Suka dengan warna, garis, dan seni.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A14" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">15.</td>
                            <td class="detail-cara p-2">Tertarik dengan hal yang berhubungan dengan matematika</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A15" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">16.</td>
                            <td class="detail-cara p-2">Menyukai aktivitas pembelajaran yang melibatkan tubuh.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A16" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">17.</td>
                            <td class="detail-cara p-2">Pandai menirukan suara.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A17" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">18.</td>
                            <td class="detail-cara p-2">Mudah berkomunikasi dengan orang lain.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A18" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">19.</td>
                            <td class="detail-cara p-2">Senang mendengarkan cerita.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A19" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">20.</td>
                            <td class="detail-cara p-2">Bosan dengan gaya pembelajaran yang hanya duduk diam</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A20" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>

                        <!-- sepuluh row -->
                        <tr>
                            <td class="detail-cara p-2">21.</td>
                            <td class="detail-cara p-2">Sering lupa saat berbicara</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A21" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">22.</td>
                            <td class="detail-cara p-2">Agak sulit berteman dengan orang lain.</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A22" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">23.</td>
                            <td class="detail-cara p-2">Suka membaca, berbicara, dan menulis saat belajar</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A23" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">24.</td>
                            <td class="detail-cara p-2">Pasif dalam berdiskusi</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A24" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">25.</td>
                            <td class="detail-cara p-2">Kesulitan dalam menulis</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A25" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">26.</td>
                            <td class="detail-cara p-2">Memiliki kemampuan membedakan pola logika</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A26" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">27.</td>
                            <td class="detail-cara p-2">Kurang cakap dalam mengarang</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A27" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">28.</td>
                            <td class="detail-cara p-2">Menafsirkan suatu makna melalui syarat-syarat non verbal seperti perubahan irama , nada, intonasi dan sering salah mengartikan suatu makna</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A28" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">29.</td>
                            <td class="detail-cara p-2">Sangat sensitif terhadap perasaan orang lain</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A29" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">30.</td>
                            <td class="detail-cara p-2">Tidak suka yang berhubungan dengan hafalan</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A30" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <!-- sepuluh row selesai -->

                        <!-- tiga row terahir -->
                        <tr>
                            <td class="detail-cara p-2">31.</td>
                            <td class="detail-cara p-2">Jarang untuk dimintai nasehat teman</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A31" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">32.</td>
                            <td class="detail-cara p-2">Tidak pandai mengarang kata-kata</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A32" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">33.</td>
                            <td class="detail-cara p-2">Pendengar yang baik</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="A33" class="w-5 h-5 rounded-lg" value="1"/></td>
                        </tr>
                    </table>
                    <button type="submit" class="my-5 bg-gradient-to-r from-[#A8FF78] to-[#78FFD6] w-full py-2 px-2 text-xl text-center font-normal rounded-full hover:bg-gradient-to-r hover:from-lime-200 hover:to-yellow-200 font-bold">Kirim</button>
                </form>
            </section>
        </div>
    </div>
</div>


<?php include('./components/footer.php') ?>