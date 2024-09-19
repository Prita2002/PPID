
			<!-- Home -->

			<div class="home">
				<div class="home_slider_container">
					<!-- Home Slider -->
					<div class="owl-carousel owl-theme home_slider">
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div
								class="home_slider_background"
								style="background-image: url(<?= base_url() ?>frontend/images/image2.png)"
							></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="home_slider_title">
												Selamat Datang di PPID LLDIKTI V
											</div>
											<div class="home_slider_subtitle">
												Dapatkan layanan PPID dimanapun anda berada
											</div>
											<div class="home_slider_form_container"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Event  -->
			<div class="events">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title_container text-center">
								<h2 class="section_title">Informasi Terbaru</h2>
							</div>
						</div>
					</div>
					<div class="row events_row">
						<!-- Event -->
						<?php $no = 1;
						foreach ($artikel as $admin): ?>
						<div class="col-lg-3 event_col">
							<div class="event event_left">
								<div class="event_body d-flex flex-row align-items-start justify-content-start">	
									<div class="event_content">
										<div class="event_image">
											<img src="<?= base_url('./gambar/'); ?><?= $admin->Gambar ?>" alt="" />
										</div>
										<div class="event_title">
											<h6><?= substr ($admin->Judul,0,50) ?></h6>
										</div>
										<div class="event_info_container">
											<div class="event_info">
												<i class="icofont-ui-clock" aria-hidden="true"></i><span><?= $admin->Waktu ?></span>
											</div>
											<div class="event_info">
												<i class="icofont-ui-user"aria-hidden="true"></i><span><?= $admin->Pengarang ?></span>
											</div>
											<div class="event_text">
												<p>
													<?= substr ($admin->Deskripsi,0,100);?>
												</p>
											</div>
											<a href="<?=site_url('home/detail/'. $admin->id)?>" class="card-link">Selengkapnya</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<?php endforeach ?>
						<!-- Event -->
					</div>
				</div>
			</div>
			<!-- video  -->
			<div class="video">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="section_title">
								<div class="row">
									<div class="col">
										<h2 class="section_title text-center mb-4">
											Video Pelayanan dan Pengelolaan Informasi Publik
										</h2>
									</div>
								</div>
							</h2>
						</div>
					</div>
					<div>
						<div class="konten row justify-content-around gap-3">
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/AzADUvrwnDQ?si=pml775jYpezHm06j"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/-yLzBXmQdx4?si=E1jkGg_2sjytrEH4"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
						</div>
						<div class="konten row justify-content-around">
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/lQAK7E3GYG8?si=DgguTftPXkvfuStd"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
							<div class="col-md-6">
								<iframe
									style="width: 100%; height: 300px"
									src="https://www.youtube.com/embed/tz9b_dnC8Xo?si=BFXX3sFDptFRvyV6"
									title="YouTube video player"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen
								></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		