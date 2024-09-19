<!-- <section >
    <img src="https://lldikti5.kemdikbud.go.id/assets/images/pages/gedung_lldikti5.webp" alt="" class="img-fluid" style="width: 100%;">
</section> -->
<!-- Home -->

<section class="blog-section mt-4">
    <div class="container" style="margin-top: 200px; ">
        <?php if (!empty($content)): ?> <!-- Check if content is not empty -->
            <div class="block mt-3" style="text-align: center;">
                <h3><?= $content['Judul']; ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="content-text pt-4">
                                <div style="text-align:left">
                                    <p style="text-align:justify">
                                        <img alt="" src="<?= base_url('./gambar/') . $content['Gambar'] ?>" style="float:left; margin-bottom:10px; margin-top:3px; width:100%;" />
                                    </p>
                                    <p>
                                        <?= $content['Deskripsi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="right-side mt-4 mb-4 d-print-none">
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Handle the case where content is not found, for example, display an error message -->
            <p>Content not found!</p>
        <?php endif; ?>
    </div>
</section>

