<div class="container py-5" style="margin-top: 100px; ">
    <h2 class="text-center">Pelayanan Permohonan informasi</h2>
    <br>
    <div class="row">
        <?php if (!empty($content)) : ?>
            <div class="col">
                <img class="" style="width: 500px;" src="<?= base_url('./gambar/') . $content['Gambar'] ?>" alt="">
            </div>
            <div class="col" style="color:black">
                <!-- <h4>Keterangan :</h4> -->
                <br>
                <p class="text-justify"><?= $content['Deskripsi'] ?></p>
                <div>
                    <!-- <a href="https://docs.google.com/document/d/1f3PdaeV3PqXLtG06YgoZLe8VOG6RogBp/edit?usp=sharing&ouid=107425765852076040241&rtpof=true&sd=true">FORMULIR PERMOHONAN INFORMASI PUBLIK</a> -->
                </div>
            </div>
        <?php else : ?>
            <p>Content Not Found!</p>
        <?php endif; ?>
    </div>
</div>