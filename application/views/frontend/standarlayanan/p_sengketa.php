<div class="container py-5" style="margin-top: 100px; ">
    <h2 class="text-center">Pelayanan Permohonan Sengketa</h2>
    <br>
    <div class="row">
        <?php if (!empty($content)) : ?>
            <div class="col">
                <img class="" style="width: 500px;" src="<?= base_url('./gambar/') . $content['Gambar'] ?>" alt="">
            </div>
            <div class="col" style="color:black">
                <!-- <h4>Keterangan :</h4> -->
                <br>
                <p class="text-justify" style="color:black"><?= $content['Deskripsi'] ?></p>
            </div>
        <?php else : ?>
            <p>Content Not Found!</p>
        <?php endif; ?>
    </div>
</div>