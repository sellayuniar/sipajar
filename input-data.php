<?php include('./components/header.php') ?>

<div class="container-fluid relative -mt-[100px] h-[2200px] bg-gradient-to-r from-[#1cd8d2] to-[#93edc7]">
    <div>
        <img src="./assets/blob2.svg" class="absolute top-0 left-0" />
        <img src="./assets/blob1.svg" class="absolute top-1/4 right-0" />
        <div class="white-layer h-full w-full absolute top-0 left-0">
            
            <section class="container-fluid mt-36">
                <h1 class="text-2xl font-bold text-center  ">Cek Metode Belajar Anda</h1>
                <form action="process.php" class="tentang mt-10 p-5 w-3/4 mx-auto">
                    <table class="border-separate border-spacing-3">
                        <tr>
                            <th class="text-xl detail-cara p-2">No.</th>
                            <th class="text-xl detail-cara p-2 ">Preferensi Belajar</th>
                            <th class="text-xl detail-cara p-2 "> Pilih </th>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">1.</td>
                            <td class="detail-cara p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque minima dolores culpa reprehenderit tempore dolorum qui impedit corrupti! Quasi nihil vero error obcaecati dolore atque!</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="a1" class="w-5 h-5 rounded-lg"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">1.</td>
                            <td class="detail-cara p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque minima dolores culpa reprehenderit tempore dolorum qui impedit corrupti! Quasi nihil vero error obcaecati dolore atque!</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="a1" class="w-5 h-5 rounded-lg"/></td>
                        </tr>
                        <tr>
                            <td class="detail-cara p-2">1.</td>
                            <td class="detail-cara p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque minima dolores culpa reprehenderit tempore dolorum qui impedit corrupti! Quasi nihil vero error obcaecati dolore atque!</td>
                            <td class="detail-cara text-center p-2 w-32"><input type="checkbox" name="a1" class="w-5 h-5 rounded-lg"/></td>
                        </tr>

                    </table>
                    <button type="submit" class="bg-gradient-to-r from-[#A8FF78] to-[#78FFD6] w-full py-2 px-2 text-xl text-center font-normal rounded-full hover:bg-gradient-to-r hover:from-lime-200 hover:to-yellow-200 font-bold">Kirim</button>
                </form>
            </section>
        </div>
    </div>
</div>


<?php include('./components/footer.php') ?>