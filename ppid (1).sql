-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2024 pada 11.28
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `Judul` varchar(128) NOT NULL,
  `Waktu` date NOT NULL,
  `Pengarang` varchar(128) NOT NULL,
  `Gambar` varchar(200) NOT NULL,
  `Deskripsi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `Judul`, `Waktu`, `Pengarang`, `Gambar`, `Deskripsi`) VALUES
(100, ' LLDIKTI Wilayah V menjadi Lembaga Inspiratif Optimalisasi PKS pada Perguruan Tinggi', '2023-12-17', 'Admin LLDIKTI', '1702883228_tn_lldikti5_20231218113006.jpeg', '<p>Jakarta - LLDIKTI Wilayah V terus berkomitmen dalam upaya fasilitasi Perguruan Tinggi Swasta dalam  pencegahan dan penanganan  kekerasan seksual di lingkungan PTS serta mewujudkan kampus yang nyaman dan aman.  Hal tersebut sekaligus sebagai implementasi Permendikbudristek Nomor 30 Tahun 2021 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi.</p>\r\n\r\n<p>Atas dedikasinya tersebut, LLDIKTI Wilayah V  mendapatkan apresiasi dalam kategori “LLDIKTI Inspiratif Optimalisasi Pencegahan Kekerasan Seksual di Lingkungan Perguruan Tinggi” pada Pekan untuk Sahabat Karakter (Pusaka) Tahun 2023 yang diselenggarakan oleh Pusat Penguatan Karakter, Kemendikbudristek (16/12/2023).</p>\r\n\r\n<p>Diraihnya penghargaan ini ketua tim kerja Belmawa LLDIKTI Wilayah V menyampaikan ucapan terima kasih kepada seluruh perguruan tinggi di Lingkungan LLDIKTI Wilayah V,  \"Semoga penghargaan ini menjadi inspirasi bagi semua perguruan tinggi di lingkungan LLDIKTI Wilayah V untuk terus berkomitmen dalam menciptakan lingkungan yang bebas dari kasus kekerasan seksual, kampus nyaman dan aman. Bersama-sama, kita dapat menjaga keamanan, integritas, dan martabat di dunia Pendidikan, “ tegas Denes Kustinah.</p>\r\n'),
(101, 'Menanamkan Soft Skill Pada Mahasiswa, Prodi Psikologi UNISA Mengadakan Enhancing Student Character', '2023-12-18', 'Universitas Aisyiyah Yogyakarta', '1702884240_tn_lldikti5_20231218134909.jpg', '<p><strong>Yogyakarta, 16 Desember 2023 – </strong><em>Enhancing Student caracter</em> (ESC) merupakan kegiatan rutin yang diselenggarakan oleh Biro Layanan Psikologi (BLP) <a href=\"https://s1psikologi.unisayogya.ac.id/\">Program Studi Psikologi</a> Universitas ‘Aisyiyah Yogyakarta sebagai wujud kepedulian pada pengembangan<em> softskill</em> bagi mahasiswa. Sempat tertunda beberapa tahun karena Covid-19, pada pada akhir tahun 2023 kegiatan ini dapat terlaksana kembali.</p>\r\n\r\n<p>Seperti yang kita ketahui bahwa kesuksesan tidak hanya bersumber dari kemampuan Intelektual <em>(hard skill) </em>saja. Sebab tingkat intelektual hanya mendukung kurang lebih 20% persen dari peccapaian prestasi dan keberhasilan seseorang. Sementara 80 persennya, berasal dari karakter yang dibangun <em>(soft skill).</em> Keseimbangan antara <em>hardskill </em>dan<em> softskill</em> akan menghasilkan profil lulusan yang unggul, berkemajuan dan memiliki nilai-nilai islam. Seimbang dalam penguasaan ilmu pengetahuan dan teknologi serta mempunyai kepribadian yang baik dan berahlak mulia. Oleh karena itu, <em>Enhancing Student Character</em> ini menjadi salah satu wadah untuk mempersiapkan mahasiswa menjadi individu dengan versi terbaiknya. Pada kesempatan kali ini Biro Layanan Psikologi (BLP) Program Studi Psikologi Universitas ‘Aisyiyah Yogyakarta menggandeng empat trainer berpengalaman dan <em>professional </em>dalam <em>softskill development. </em>Diantaranya Bapak Ayodya Narutama, S.Psi, Ibu Ayu Rahardian, M.Psi., Bapak Muhammad Hidayat, M.Psi., Psikolog, dan Bapak Luqman Tifa Perwira, M.Psi, Psikolog.</p>\r\n\r\n<p>Kegiatan ini diselenggarakan selama dua hari yaitu pada 16 Desember 2023 dan 23 Desember 2023 yang dilaksanakan di Gedung Siti Moendjijah lantai 7 dan 8 <a href=\"https://www.unisayogya.ac.id/\">Universitas ‘Aisyiyah Yogyakarta</a> dengan peserta mahasiswa baru Program Studi Psikologi 2023 yang berjumlah 237 mahasiswa.</p>\r\n\r\n<p>Pada hari pertama ini, peserta Enhancing Student Character (ESC) ini mendapatkan pelatihan tentang <em>self awareness</em>, regulasi emosi, manajemen waktu dan <em>goals setting</em>. Diawali dengan materi mengenali diri, diharapkan peserta sudah bisa mengetahui kekurangan dan kelebihan diri, melakukan refleksi diri sehingga dapat meningkatkan kepercayaan diri. Selanjutnya, peserta akan dilatih untuk meregulasi emosi dan memahami tentang bagaimana bekerja dengan efektif dan efisien dengan manajemen waktu dan <em>goals setting.</em></p>\r\n\r\n<p>Pertemuan berikutnya, peserta akan lebih banyak melakukan praktik dengan belajar menerapkan komunikasi efektif serta penerapan <em>Islamic leadership. </em>Sesuai dengan tujuan dari ESC, diharapkan kedepannya mahasiswa tidak hanya unggul dalam ilmu pengetahuan , tetapi juga memegang teguh nilai-nilai islam, berkemajuan serta berakhlak mulia Selama mengikuti pelatihan, peserta akan diberikan lembar kerja terkait <em>self awareness</em>, regulasi emosi, <em>goal setting,</em> manajemen waktu, komunikasi efektif, dan <em>islamic leadership</em> sesuai dengan materi yang di sampaikan oleh trainer. Selain penyampaian materi dan pengerjaan lembar kerja, ESC juga akan diselingi dengan <em>ice breaking</em> dan <em>games </em>yang berkaitan dengan materi guna menghilangkan letih serta meningkatkan konsentrasi peserta.</p>\r\n'),
(102, 'LLDIKTI WILAYAH  V RAIH PRESTASI DALAM AJANG ANUGERAH DIKTIRISTEK 2023', '2023-12-14', 'Admin LLDIKTI', '1702884366_tn_lldikti5_20231215113130.jpg', '<p>Jakarta—LLDIKTI Wilayah V kembali raih prestasi dalam ajang Diktiristek 2023 yang diselenggarakan oleh Direktorat Jenderal Pendidikan Tinggi, Riset, dan Teknologi (Ditjen Diktiristek) Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek), Rabu (13/12). Ajang tahunan ini merupakan bentuk apresiasi kepada pemangku kepentingan pendidikan tinggi, riset, dan teknologi yang telah mendukung program dan kebijakan Ditjen Diktiristek untuk mewujudkan transformasi pendidikan tinggi.</p>\r\n\r\n<p>“Sebagai bentuk apresiasi, di tahun 2023 ini Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi melalui Direktorat Jenderal Pendidikan Tinggi, Riset, dan Teknologi akan memberikan penghargaan di acara Anugerah Diktiristek 2023 kepada Bapak/Ibu yang telah bekerja dengan luar biasa dalam mendukung terwujudnya transformasi pendidikan tinggi demi Indonesia maju,” ucap Sekretaris Jenderal Kemendikbudristek, Suharti.</p>\r\n\r\n<p>Raih 4 Penghargaan<br>\r\nPada malam Anugerah Diktiristek 2023, sebanyak hampir 500 penghargaan diberikan kepada perguruan tinggi negeri dan perguruan tinggi swasta, Lembaga Layanan Pendidikan Tinggi (LLDikti), mitra perguruan tinggi dari dunia usaha dan dunia industri, kementerian/lembaga, serta para jurnalis dan media.<br>\r\nTerdapat 10 subpenghargaan yang diberikan yang meliputi Anugerah Prioritas Nasional; Anugerah Mitra Kerja Sama Pendukung Program Diktiristek; Anugerah Pembelajaran dan Kemahasiswaan; Anugerah Sumber Daya; Anugerah Kelembagaan, Anugerah Riset, dan Pengabdian kepada Masyarakat; Anugerah Pangkalan Data Pendidikan Tinggi; Anugerah Humas; Anugerah Kerja Sama; serta Anugerah Jurnalis dan Media.</p>\r\n\r\n<p>LLDIKTI  Wilayah V berhasil meraih penghargaan: <br>\r\nSilver Winner  -  sub katagori Pengelolaan Media Sosial<br>\r\nSilver Winner  -  Satker dengan Pelaporan PDDIKTI Terbaik<br>\r\nBronze Winner -  sub katagori Siaran Pers<br>\r\nBronze Winner - sub katagori Laman</p>\r\n\r\n<p>Perguruan Tinggi Swasta LLDIKTI Wilayah V:</p>\r\n\r\n<p>UII<br>\r\nGold Winner<br>\r\nAnugerah Humas<br>\r\nKategori PTS<br>\r\nSub Kategori Media Sosial</p>\r\n\r\n<p>UAD<br>\r\nSilver Winner<br>\r\nAnugerah Humas<br>\r\nKategori PTS<br>\r\nSub Kategori Media Sosial</p>\r\n\r\n<p>UMY<br>\r\nSilver Winner<br>\r\nAnugerah Humas<br>\r\nKategori PTS<br>\r\nSub Kategori Media Sosial</p>\r\n\r\n<p>UMY<br>\r\nBronze Winner<br>\r\nAnugerah Kerja Sama<br>\r\nKategori PTS<br>\r\nSub Kategori Laporan Kerja Sama Terbaik</p>\r\n\r\n<p>UKDW<br>\r\nBronze Winner<br>\r\nAnugerah Kerja Sama<br>\r\nKategori PTS<br>\r\nSub Kategori Laporan Kerja Sama Terbaik</p>\r\n\r\n<p>UMY<br>\r\nGold Winner<br>\r\nAnugerah Kerja Sama<br>\r\nKategori PTS<br>\r\nSub Kategori Kerja Sama Internasional Terbaik Terbaik</p>\r\n\r\n<p>UAD<br>\r\nBronze Winner<br>\r\nAnugerah Kerja Sama<br>\r\nKategori PTS<br>\r\nSub Kategori Kerja Sama Internasional Terbaik Terbaik</p>\r\n\r\n<p>UNISA<br>\r\nBronze Winner<br>\r\nAnugerah PDDIKTI<br>\r\nKategori PTS<br>\r\nSub Kategori <br>\r\nPendataan Indikator Kinerja Utama (IKU), Bentuk<br>\r\nPerguruan Tinggi Universitas dengan jumlah mahasiswa<br>\r\n< 20>\r\n\r\n<p>UMY<br>\r\nSilver Winner<br>\r\nAnugerah PDDIKTI<br>\r\nKategori PTS<br>\r\nSub Kategori<br>\r\nPendataan Indikator Kinerja Utama (IKU), Bentuk<br>\r\nPerguruan Tinggi Universitas dengan jumlah mahasiswa<br>\r\n20.000-40.000</p>\r\n\r\n<p>Universitas Mercu Buana Yogyakarta<br>\r\nGold Winner<br>\r\nAnugerah Riset, Teknologi<br>\r\ndan Pengabdian Kepada<br>\r\nMasyarakat<br>\r\nKategori Publikasi (Garuda Award)<br>\r\nSub Kategori<br>\r\nInstitusi Klaster Pratama dengan Skor Publikasi Ilmiah Tertinggi Periode Tahun 2020-2022</p>\r\n\r\n<p>UAD<br>\r\nTerbaik 2<br>\r\nAnugerah Pembelajaran dan Kemahasiswaan<br>\r\nKategori SPADA Awards<br>\r\nSub Kategori<br>\r\nMata Kuliah dengan Desain Pembelajaran Daring Terbaik Tahun<br>\r\nDian Artha Kusumaningtyas - Universitas Ahmad Dahlan<br>\r\n(Telaah Kurikulum)</p>\r\n\r\n<p>Universitas Sanata Dharma<br>\r\nBronze Winner<br>\r\nAnugerah Kelembagaan<br>\r\nKategori PTN dan PTS<br>\r\nSub Kategori Perguruan Tinggi Pelaksana Program Kompetisi <br>\r\nKampus Merdeka 2023 - Liga 2 - Regional 1</p>\r\n\r\n<p>(humas)</p>\r\n'),
(103, ' INFORMASI PENERBITAN SK KENAIKAN PANGKAT TMT JANUARI 2024', '2023-12-13', 'Admin LLDIKTI', '1702884397_tn_default_dikbud.jpg', '<p>Yth. Pimpinan Perguruan Tinggi Swasta <em>(terlampir)</em></p>\r\n\r\n<p>u.p. Kepala Bidang Sumber Daya Manusia</p>\r\n\r\n<p>di Lingkungan LLDIKTI Wilayah V</p>\r\n\r\n<p>Yogyakarta</p>\r\n\r\n<p>Bersama ini kami menginformasikan bahwa SK Kenaikan Pangkat tmt Januari 2024 sudah terbit. Adapun SK tersebut didistribusikan melalui email Bagian SDM masing-masing Perguruan Tinggi. Mengingat sudah menggunakan Tanda Tangan Elektronik, maka SK tidak perlu diambil ke LLDikti karena sudah mempunyai keabsahan yang sama.</p>\r\n\r\n<p>Demikian informasi disampaikan, atas perhatiannya diucapkan terimakasih.</p>\r\n\r\n<p><a href=\"https://drive.google.com/file/d/1E58iZHStQKn-acXclj-xcyL1w5VHmu3J/view?usp=drive_link\">Golongan III</a></p>\r\n\r\n<p><a href=\"https://drive.google.com/file/d/14JcQv1WMkoSCnKyNT5KLXAJ8h9odX8BY/view?usp=drive_link\">Golongan IV</a></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `no` int(11) NOT NULL,
  `gambar` varchar(400) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_page`
--

CREATE TABLE `tbl_page` (
  `Content_id` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Waktu` date NOT NULL,
  `Gambar` varchar(200) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_page`
--

INSERT INTO `tbl_page` (`Content_id`, `Judul`, `Waktu`, `Gambar`, `Deskripsi`) VALUES
(1, 'Profil PPID LLDIKTI Wilayah V', '0000-00-00', '1704936818_image11.jpeg', '<p>Keterbukaan Informasi Publik merupakan aspek yang penting dalam rangka mewujudkan penyelenggaraan negara transparan. Oleh karena itu adalah hak publik untuk memperoleh Informasi sesuai dengan peraturan perundang¬undangan. Hak atas Informasi. Hak setiap Orang untuk memperoleh Informasi juga relevan untuk meningkatkan keterlibatan masyarakat dalam proses pengambilan keputusan publik. Partisipasi masyarakat dapat terlaksana apabila adanya jaminan akan Keterbukaan Informasi Publik.</p>\r\n\r\n<p>Keberadaan Undang-¬undang tentang Keterbukaan Informasi Publik sangat penting sebagai landasan hukum yang berkaitan dengan (1) hak setiap Orang untuk memperoleh Informasi; (2) kewajiban Badan Publik menyediakan dan melayani permintaan Informasi secara cepat, tepat waktu, biaya ringan/proporsional, dan cara sederhana; (3) pengecualian bersifat ketat dan terbatas; (4) kewajiban Badan Publik untuk membenahi sistem dokumentasi dan pelayanan Informasi.</p>\r\n\r\n<p>Atas dasar pemikiran tersebut, maka Lembaga Layanan Pendidikan Tinggi Wilayah V membentuk Pejabat Pengelola Informasi dan Dokumentasi sebagaimana tertuang dalam Nomor 41 Tahun 2020 tentang Layanan Informasi Publik di Kementerian Pendidikan dan Kebudayaan.</p>\r\n\r\n<p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.</p>\r\n\r\n<p>PPID ini berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh badan publik sesuai amanat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. Dengan keberadaan PPID, akan mempermudah masyarakat yang akan menyampaikan permohonan informasi karena tidak berbelit dan dilayani melalui satu pintu.</p>\r\n'),
(2, 'Struktur Organisasi LLDIKTI Wilayah V', '2024-01-18', '1705543589_strukturorganisasilldikti.png', '<p>Dalam rangka mewujudkan manajemen pengelolaan Perguruan Tinggi dan meningkatkan  efektifitas kebijakan pembinaan PT di lingkungan LLDIKTI Wilayah V maka dibentuklah Struktur Sistem kerja yang meliputi : </p>\r\n'),
(3, 'Tugas dan Fungsi PPID LLDIKTI Wilayah V', '2024-01-19', '', '<ol>\r\n <li>Penyediaan, penyimpanan, pendokumentasian, dan pengamanan Informasi;</li>\r\n <li>Pelayanan Informasi sesuai dengan aturan yang berlaku;</li>\r\n <li>Pelayanan Informasi Publik yang cepat, tepat, dan sederhana;</li>\r\n <li>Penetapan prosedur operasional penyebarluasan Informasi Publik;</li>\r\n <li>Pengujian Konsekuensi;</li>\r\n <li>Pengklasifikasian Informasi dan/atau pengubahannya;</li>\r\n <li>Penetapan Informasi Publik yang Dikecualikan yang telah habis jangka waktu pengecualiannya sebagai Informasi Publik yang dapat diakses;</li>\r\n <li>Penetapan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang atas Informasi Publik;</li>\r\n <li>Menyelesaikan sengketa Informasi Publik unit organisasi atau unit kerja yang bersangkutan; dan</li>\r\n <li>Melakukan evaluasi terhadap PPID di unit organisasi atau unit kerja yang bersangkutan.</li>\r\n</ol>\r\n'),
(4, 'Pelayanan Permohonan Sengketa', '2024-01-23', '1705987114_Sengketa.png', '<h3><strong>Keterangan :</strong></h3>\r\n\r\n<p><strong>Tata Cara Pengajuan Permohonan Penyelesaian Sengketa ke Komisi Informasi:</strong></p>\r\n\r\n<ol>\r\n <li>Pengajuan sengketa informasi publik ke komisi informasi diajukan pemohon informasi publik selambat-lambatnya <strong>14 HARI KERJA</strong> sejak diterimanya tanggapan tertulis atas surat keberatan pemohon informasi publik kepada atasan PPID atau berakhirnya masa <strong>30 HARI KERJA</strong> bagi atasan PPID badan publik untuk memberikan tanggapan secara tertulis atas surat keberatan dari pemohon informasi publik.</li>\r\n <li>Pengajuan sengketa informasi publik baik oleh perorangan, badan hukum ataupun kelompok orang bisa diajukan dengan cara mendatangi langsung kantor Komisi Informasi dan menemui petugas administrasi pengaduan dan penyelesaian sengketa informasi ataupun mengajukan permohonan sengketa informasi publik secara online kepada komisi informasi melalui aplikasi SIMSI (Sistem Informasi dan Manajemen Sengketa Informasi) dengan tautan <a href=\"http://simsi.komisiinformasi.go.id/\">http://simsi.komisiinformasi.go.id</a>.</li>\r\n <li>Pemohon sengketa informasi publik wajib melengkapi berkas permohonan pengajuan sengketa informasi publik sebelum mendapatkan nomor registrasi/akta registrasi sengketa informasi publik dari petugas kepaniteraan komisi informasi.</li>\r\n <li>Setelah permohonan sengketa informasi publik mendapatkan nomor registrasi atau akta registrasi maka 14 hari kerja setelahnya komisi informasi mulai melakukan proses penyelesaian sengketa informasi publik dengan diawali melakukan pemanggilan kepada pemohon dan termohon untuk menghadiri sidang ajudikasi non litigasi tahap pemeriksaan awal.</li>\r\n</ol>\r\n'),
(5, 'Pelayanan Permohonan Informasi', '2024-01-23', '1705987289_informasi.png', '<h3><strong>Keterangan :</strong></h3>\r\n\r\n<p><strong>Tata Cara Pengajuan Permohonan informasi ke Komisi Informasi:</strong></p>\r\n\r\n<ol>\r\n <li>Pemohon datang ke Unit Layanan Terpadu atau mengisi formulir secara online yang tersedia pada media center. Pemohon mengisi formulir informasi publik permohonan dapat dilakukan secara langsung melalui Unit Layanan terpadu secara tatap  muka, aplikasi permohonan informasi E-Siap dan atau   Berkas dapat dikirim melalui via email ke lldikti5@kemdikbud.go.id</li>\r\n <li>Petugas layanan memantau permohonan informasi yang diminta oleh , memberitahukan nomor pendaftaran dan menyerahkan bukti permohonan kepada pemohon.</li>\r\n <li>Petugas layanan informasi memberikan informasi kepada pemohon sesuai permintaan cara mendapatkan informasi.</li>\r\n <li>Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai. Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan ke atasan PPID.</li>\r\n</ol>\r\n\r\n<p><a href=\"http://docs.google.com/document/d/1f3PdaeV3PqXLtG06YgoZLe8VOG6RogBp/edit?usp=sharing&ouid=107425765852076040241&rtpof=true&sd=true\" target=\"_blank\">FORMULIR PERMOHONAN INFORMASI PUBLIK</a></p>\r\n'),
(6, 'Pelayanan Permohonan Keberatan', '2024-01-23', '1705987444_keberatan.png', '<h3><strong>Keterangan :</strong></h3>\r\n\r\n<p><strong>Tata Cara Pengajuan Permohonan Keberatan ke Komisi Informasi:</strong></p>\r\n\r\n<ol>\r\n <li>Pemohon bisa mengajukan keberatan melalui : a. Datang langsung ke ULT LLDIKTI Wilayah V atau b.Pengajuan secara online dengan melampirkan scan formulir pengajuan keberatan (berkas dikirim via email ke lldikti5@kemdikbud.go.id</li>\r\n <li>Petugas layanan memproses pengajuan keberatan dan memberikan tanda bukti pengajuan keberatan kepada pemohon.</li>\r\n <li>PPID memberikan tanggapan atas pengajuan keberatan kepada pemohon, bila pemohon puas maka sengketa selesai.</li>\r\n <li>PPID memberikan keputusan atau tanggapan atas pengajuan keberatan tersebut paling lambat 30 hari kerja setelah diterimanya keberatan secara tertulis.</li>\r\n <li>Jika pemohon merasa tidak puas atas tanggapan dari PPID, maka penyelesaian Sengketa Informasi Publik dapat diajukan kepada Komisi Informasi.</li>\r\n <li>Pemohon bisa mengajukan keberatan melalui : a. Datang langsung ke ULT LLDIKTI Wilayah V atau b.Pengajuan secara online dengan melampirkan scan formulir pengajuan keberatan (berkas dikirim via email ke lldikti5@kemdikbud.go.id</li>\r\n <li>Petugas layanan memproses pengajuan keberatan dan memberikan tanda bukti pengajuan keberatan kepada pemohon.</li>\r\n <li>PPID memberikan tanggapan atas pengajuan keberatan kepada pemohon, bila pemohon puas maka sengketa selesai.</li>\r\n <li>PPID memberikan keputusan atau tanggapan atas pengajuan keberatan tersebut paling lambat 30 hari kerja setelah diterimanya keberatan secara tertulis.</li>\r\n <li>Jika pemohon merasa tidak puas atas tanggapan dari PPID, maka penyelesaian Sengketa Informasi Publik dapat diajukan kepada Komisi Informasi.</li>\r\n</ol>\r\n\r\n<p> </p>\r\n\r\n<p><a href=\"https://docs.google.com/document/d/1cY9TTGwATzM0R5vI6J-SiXZLTTlkZfGj/edit?usp=sharing&ouid=106173276414325225312&rtpof=true&sd=true\" target=\"_blank\">PERNYATAAN KEBERATAN ATAS PERMINTAAN INFORMASI PUBLIK</a></p>\r\n'),
(7, 'Visi dan Misi LLDIKTI Wilayah V', '2024-01-23', '', '<p><big><strong>Visi</strong></big></p>\r\n\r\n<p><big>Terwujudnya pelayanan informasi yang transparan dan akuntabel untuk memenuhi hak pemohon informasi sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</big></p>\r\n\r\n<p><big><strong>Misi</strong></big></p>\r\n\r\n<ol>\r\n <li><big>Menyediakan informasi public yang akurat dan dapat dipertanggungjawabkan;</big></li>\r\n <li><big>Membangun dan mengembangkan sistem penyediaan dan layanan informasi;</big></li>\r\n <li><big>Meningkatkan pengelolaan informasi dan dokumentasi secara baik, efisien, mudah diakses dan bersifat desentralisasi; dan</big></li>\r\n <li><big>Memanfaatkan teknologi informasi dalam memberikan layanan informasi publik kepada masyarakat dan mendukung pengelolaan keterbukaan informasi publik.</big></li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Admin', 'admin@admin.com', 'default.jpg', '$2y$10$h0f6ahksDDsXnI6OWqfWXOviX.rn8AeRnpcT5EIv7AYa/5mqEYT6.', 2, 1, 1704330465);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`Content_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

