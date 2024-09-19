<section class="blog-section">
<div class="container mb-5" style="margin-top: 190px; width: 100;">
    <div class="row">
        <div class="col">
            <div class="event_title">
                <h2 class="text-center"><?= $artikel['Judul'] ?></h2>
            </div>
			<br><br>
            <div class="event_image d-flex justify-content-center">
                <img src="<?= base_url('./gambar/') . $artikel['Gambar'] ?>" alt="" />
            </div>
            <div class="event_info_container">
                <div class="event_info">
                    <i class="icofont-ui-clock" aria-hidden="true"></i><span><?= $artikel['Waktu'] ?></span>
                </div>
                <div class="event_info">
                    <i class="icofont-ui-user" aria-hidden="true"></i><span><?= $artikel['Pengarang'] ?></span>
                </div>
            </div>
            <div class="text-justify">
                <p class="text-justify">
                    <?= $artikel['Deskripsi'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
</section>

