<section>
    <img src="https://lldikti5.kemdikbud.go.id/assets/images/pages/gedung_lldikti5.webp" alt="" class="img-fluid" style="width: 100%;">
</section>
<section class="blog-section mt-4">
    <div class="container">
        <?php if (!empty($content)) : ?>
            <div class="block mt-3" style="text-align: center;">
                <h3><?= $content['Judul']; ?></h3>
            </div>
            <div class="row">
                <div class="col-md- col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="content-text pt-4" style="color: black;">
                                <p>
                                    <?= $content['Deskripsi']; ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <!-- Handle the case where content is not found, for example, display an error message -->
            <p>Content not found!</p>
        <?php endif; ?>
    </div>
</section>