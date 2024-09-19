<section class="page-title-about">
        <img src="https://lldikti5.kemdikbud.go.id/assets/images/pages/gedung_lldikti5.webp" alt="" class="img-fluid" style="width: 100%;">>
    </section>
   <!-- Home -->
   <section class="blog-section mt-2">
    <div class="container">
        <?php if (!empty($content)): ?>
		<div class="block mt-3" style="text-align: center;">
            <h3>Struktur Organisasi LLDIKTI Wilayah V</h3>
        </div>
        <div class="row">
            <div class="col-md- col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                        <div class="content-text pt-4">
							<p>
								<img alt="" src="https://lldikti5.kemdikbud.go.id/assets/thirdparty/filemanager/source/lakin/WhatsApp%20Image%202023-02-21%20at%2008.50.42.jpg" style="width:70%; text-align: center;" />
							</p>
							<p><?= $content['Deskripsi']; ?></p>
							<p><img alt="" src="<?= base_url('./gambar/') . $content['Gambar'] ?>" style="width:80%; margin: 50px 0px; text-align: center;" /></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <p>Content not found!</p>
        <?php endif; ?>
    </div>
</section>