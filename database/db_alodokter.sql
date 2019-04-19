-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 03:35 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alodokter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `deskripsi`, `foto_artikel`) VALUES
(9, 'Tips Mendampingi Anak Belajar di Rumah', '<p>Sebagian orang tua menganggap bahwa&nbsp;mendampingi anak&nbsp;belajar&nbsp;adalah&nbsp;perjuangan yang melelahkan.&nbsp;Tidak heran jika pada akhirnya banyak&nbsp;orang tua yang datang&nbsp;berkonsultasi&nbsp;pada psikolog&nbsp;untuk&nbsp;mencari tahu&nbsp;cara menyuruh dan mendampingi anak belajar.</p><p>Sebagian orang tua mengakui bahwa mereka sering merasa kesal ketika mendampingi anaknya belajar. Sedangkan dari sisi anak, belajar dengan orang tua justru dianggap sebagai suatu hal yang menakutkan. Anak-anak sering mengeluh tidak tahan terus-menerus disalahkan dan tidak bisa mencapai hasil yang diinginkan orang tua.</p><p>Kesal saat mendampingi anak belajar adalah hal yang wajar, karena tingkat kesabaran orang tua dan kemampuan anak dalam menyerap pelajaran memang berbeda-beda. Cara orang tua mengajar dan cara anak belajar juga belum tentu sama. Namun bila tidak hati-hati, urusan belajar bisa merusak hubungan orang tua dengan anak, serta menimbulkan sikap negatif anak terhadap proses belajar.</p><p><strong>Tips&nbsp;</strong><strong>M</strong><strong>endampingi&nbsp;</strong><strong>A</strong><strong>nak</strong><strong>&nbsp;Belajar</strong></p><p>Salah satu tugas orang tua dalam mengasuh anak adalah mendampingi anak belajar. Agar kegiatan ini bisa efektif dan menyenangkan, orang tua perlu memerhatikan beberapa hal berikut:</p><p><strong>1. Tempat belajar</strong></p><p>Tempat belajar adalah faktor yang sangat penting untuk mendukung suasana belajar anak. Pilihlah ruangan yang terang dengan suhu ruangan yang pas, tidak terlalu dingin atau panas. Hindari ruangan yang di dalamnya terdapat benda yang bisa mengalihkan perhatian anak, seperti televisi atau&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/memilih-mainan-anak-sesuai-usia\">mainan</a>.</p><p>Ruangan tertutup memang ideal untuk mendampingi anak belajar, tetapi tidak menutup kemungkinan belajar di ruangan terbuka atau di area publik, seperti kafe, bisa dilakukan. Belajar di ruangan terbuka atau kafe memungkinkan anak untuk bertanya-jawab dengan orang tua secara lebih santai, mengenai hal-hal yang menarik.</p><p><strong>2. Lama waktu belajar</strong></p><p>Orang tua perlu memahami kemampuan anaknya masing-masing. Anak-anak umumnya dapat&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/coba-pelajari-cara-meningkatkan-daya-ingat-di-sini\">berkonsentrasi penuh</a>&nbsp;selama 10-30 menit. Berikan jeda untuk anak beristirahat setelah beberapa waktu. Sebagai contoh, setelah anak membaca 1 bagian atau setelah 20 menit, perbolehkan ia untuk mengambil&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/yuk-bunda-biasakan-si-kecil-minum-air-putih-dengan-cara-ini\">minum</a>&nbsp;atau pergi ke toilet.</p><p><strong>3. Gaya belajar anak</strong></p><p>Pahami gaya belajar yang paling sesuai untuk anak, untuk memaksimalkan efektifitas belajarnya. Gaya belajar yang dimaksud adalah:</p><ul><li><strong>Gaya belajar v</strong><strong>isual</strong><br />Anak yang memiliki gaya belajar visual memiliki kemampuan tinggi dalam mengeja, suka&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/manfaat-membaca-tidak-hanya-untuk-menambah-pengetahuan\">membaca</a>, melakukan observasi, serta menggunakan gambar dalam mengingat sesuatu.</li><li><strong>Gaya belajar a</strong><strong>uditori</strong><br />Anak tipe auditori mudah terganggu dengan suara saat belajar, suka membaca buku dengan bersuara atau bergumam, serta lebih mudah mengingat sesuatu yang disajikan dalam bentuk langkah berurutan.</li><li><strong>Gaya belajar k</strong><strong>inestetik</strong><br />Anak tipe kinestetik akan terlihat gelisah saat belajar, seperti menggerakan kaki atau memutar-mutar pensil. Karena dengan cara tersebut, mereka akan lebih mudah mengingat apa yang sudah mereka kerjakan.</li></ul><p><strong>Perilaku&nbsp;</strong><strong>o</strong><strong>rang tua</strong></p><p>Hal yang dikatakan dan dilakukan orang tua dalam mendampingi anak belajar akan memengaruhi sikap anak dalam belajar.&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/hati-hati-ini-kebiasaan-buruk-orang-tua-yang-mungkin-ditiru-anak\">Kebiasaan buruk orang tua</a>, seperti mudah emosi dan membanding-bandingkan anak dengan anak lain, dapat mengganggu proses belajar anak.</p><p>Untuk meningkatkan motivasi anak, orang tua bisa sesekali memberikan hadiah bila anak berhasil mencapai target tertentu. Misalnya, memberikan tambahan waktu bermain selama 30 menit saat anak berhasil mengerjakan semua soal latihan dengan benar.</p><p>Pastikan juga, anak Anda belajar dalam kondisi sehat dan kenyang, agar ia tidak mudah lelah. Kondisi fisik, psikologis, dan lingkungan yang optimal penting diperhatikan saat mendampingi Si Kecil saat belajar.</p><p>Jadikanlah kegiatan mendampingi anak belajar sebagai suatu kegiatan yang menyenangkan, baik bagi orang tua maupun anak. Jika anak mengalami kesulitan dalam belajar, jangan ragu untuk berkonsultasi dengan&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/cari-dokter/psikolog\">psikolog</a>&nbsp;anak.</p>', 'tips.jpg'),
(10, 'Perbedaan Bipolar dengan Moody', '<p>Gangguan bipolar adalah masalah kesehatan mental yang sering disalahartikan. Banyak yang beranggapan bahwa orang yang suasana hatinya cepat berubah (<em>moody</em>) adalah penderita gangguan bipolar. Kenyataannya&nbsp;tidak demikian. Gangguan bipolar berbeda dengan sekedar&nbsp;<em>moody</em>.</p><p><a target=\"_blank\" href=\"https://www.alodokter.com/gangguan-bipolar\">Gangguan bipolar</a>&nbsp;adalah kondisi di mana seseorang mengalami perubahan suasana hati (<em>mood</em>) secara ekstrem, baik berupa peningkatan&nbsp;<em>mood</em>&nbsp;secara intens (disebut episode manik atau hipomanik) maupun penurunan&nbsp;<em>mood</em>&nbsp;secara intens (disebut episode depresif).</p><p>Episode-episode ini dapat berlangsung selama beberapa hari, minggu, hingga bulan. Di antara kedua fase peningkatan dan penurunan&nbsp;<em>mood</em>&nbsp;tersebut bisa terdapat periode&nbsp;<em>mood</em>&nbsp;normal.</p><p><strong>Gejala Episode Manik, Hipomanik, atau Depresif</strong></p><p>Pada gangguan bipolar, terdapat gejala-gejala yang sedikit berbeda pada setiap episode&nbsp;<em>mood</em>-nya. Gejala-gejala ini berupa:</p><p><strong>Gejala saat episode manik</strong></p><p>Saat sedang dalam episode manik, penderita bipolar dapat merasa sangat gembira, penuh semangat, dan ber Ide-ide dan pikirannya berjalan sangat cepat, sehingga ia sulit berkonsentrasi dan mudah mengganti rencana.<br />Di fase ini, penderita bipolar bisa bicara tanpa henti, tidak tidur selama berhari-hari, lupa merawat diri, atau menghamburkan uang tanpa berpikir. Penderita juga dapat menjadi terlalu percaya diri atau berlaku terlalu ramah kepada orang lain. Episode manik biasanya berlangsung satu minggu atau lebih.</p><p><strong>Gejala saat episode hipomanik</strong></p><p>Hipomanik merupakan bentuk episode&nbsp;<em>mood</em>&nbsp;manik yang dirasakan lebih ringan dan berdurasi lebih singkat. Biasanya berlangsung selama empat hari atau lebih.</p><p><strong>Gejala saat episode depresif&nbsp;</strong></p><p>Dalam episode defresif, penderita bipolar akan terus-menerus merasa sedih, tidak bersemangat, dan tidak bertenaga untuk melakukan aktivitas apa pun. Ia juga tidak dapat menikmati hal-hal yang biasanya disukai, nafsu makannya menurun, dan tidurnya terganggu. Selain itu, dapat muncul perasaan rendah diri, tidak berguna, atau keinginan untuk bunuh diri.</p><p><strong>Tipe-Tipe Gangguan Bipolar</strong></p><p>Gangguan bipolar memiliki gejala yang luas dan bervariasi pada tiap penderitanya. Berdasarkan tipe dan berat gejala yang dirasakan, gangguan bipolar bisa dibedakan menjadi 2 tipe, yaitu:</p><ul><li><strong>Gangguan bipolar tipe I</strong><br />Gangguan bipolar tipe ini ditandai dengan setidaknya satu episode manik. Episode ini bisa diawali atau diikuti oleh episode hipomanik maupun episode depresif.</li><li><strong>Gangguan bipolar tipe II</strong><br />Ini merupakan tipe gangguan bipolar yang lebih ringan. Pada gangguan bipolar tipe II, penderita akan merasakan adanya satu episode depresif diikuti episode hipomanik.</li></ul><p><strong>Perbedaan Gangguan Bipolar dengan Moody</strong></p><p>Berdasarkan gejala-gejala gangguan bipolar di atas, tampak perbedaan antara penderita bipolar dengan orang yang sekedar&nbsp;<em>moody</em>. Berikut adalah beberapa perbedaan utamanya:</p><ul><li>Penderita gangguan bipolar mengalami peningkatan atau penurunan&nbsp;<em>mood</em>&nbsp;yang intensitasnya jauh lebih ekstrem dibandingkan dengan perubahan suasana hati biasa.</li><li>Perubahan&nbsp;<em>mood</em>&nbsp;yang dialami penderita bipolar dapat membuat mereka merugikan diri sendiri maupun orang lain, misalnya dengan menghamburkan uang tanpa berpikir, tidak tidur selama berhari-hari, tidak nafsu makan, bahkan&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/muncul-suara-dan-sosok-misterius-akibat-halusinasi\">berhalusinasi</a>.</li><li>Penderita bipolar dapat mengalami gangguan dalam hubungan sosial, pendidikan, karir, dan kesehatan. Hal ini tentu berbeda dengan perubahan suasana hati biasa yang cenderung tidak mengganggu aspek kehidupan tertentu.</li><li>Durasi perubahan&nbsp;<em>mood</em>&nbsp;penderita gangguan bipolar lebih lama dibandingkan durasi perubahan&nbsp;<em>mood</em>&nbsp;Contohnya, seseorang yang saat bangun tidur merasa senang, lalu&nbsp;<em>mood</em>-nya memburuk saat menghadapi masalah di kantor dan merasa senang lagi saat di rumah, tentu berbeda dengan penderita bipolar yang bisa merasa bersemangat atau bersedih selama berminggu-minggu atau bahkan berbulan-bulan.</li></ul><p>Gangguan bipolar dan perubahan&nbsp;<em>mood</em>&nbsp;mungkin lebih sulit dibedakan pada remaja, karena remaja sering mengalami perubahan&nbsp;<em>mood</em>&nbsp;yang signifikan, sebagai salah satu tanda dari&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/pubertas-mengubah-tubuhku\">pubertas</a>.</p><p>Meskipun perubahan&nbsp;<em>mood</em>&nbsp;merupakan hal yang wajar di masa remaja, sebuah penelitian menunjukan bahwa kecemasan, gejala depresi, mudah tersinggung, dan labilnya ekspresi emosi (afek) pada masa remaja dapat merupakan tanda awal gangguan bipolar di masa depan. Apalagi jika remaja tersebut memiliki riwayat gangguan bipolar dalam keluarga.</p><p>Hingga saat ini, gangguan bipolar memang belum dapat disembuhkan. Namun dengan deteksi dini dan penanganan yang tepat, baik berupa pemberian obat-obatan maupun&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/psikoterapi-untuk-mengatasi-gangguan-kesehatan-mental\">psikoterapi</a>, gejala setiap episode&nbsp;<em>mood</em>&nbsp;pada penderita bipolar bisa diringankan. Jika Anda atau keluarga mengalami gejala-gejala yang mengarah ke gangguan bipolar, jangan ragu untuk melakukan&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/cari-dokter/dokter-jiwa\">konsultasi dengan psikiater</a>.</p>', 'bipolar.jpg'),
(12, 'Mengenal Jenis Kanker Darah beserta Gejalanya', '<p>Terdapat tiga jenis kanker darah menurut asal sel kankernya. Ketiga jenis kanker darah tersebut memiliki gejala yang berbeda. Mari kita pelajari lebih jauh mengenai jenis, gejala, serta penyebab dari kanker darah.</p><p><a target=\"_blank\" href=\"https://www.alodokter.com/kanker-darah\">Kanker darah</a>&nbsp;terjadi ketika sel darah tumbuh secara tidak normal dan tidak terkontrol. Akibatnya, sel-sel tersebut tidak dapat berfungsi dengan baik dan mengganggu produksi sel darah yang lain.</p><p>Sel darah sendiri dapat dibagi menjadi 3 macam, yaitu sel darah merah (yang membawa oksigen), trombosit (berperan dalam proses pembekuan darah), dan&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/sel-darah-putih-kunci-tubuh-memerangi-infeksi\">sel darah putih</a>&nbsp;(untuk melawan infeksi).</p><p><strong>Jenis dan Gejala Kanker Darah</strong></p><p>Ada bermacam-macam jenis kanker darah yang diberi nama sesuai asal sel kankernya. cara umum, kanker darah dibagi menjadi 3 jenis, yaitu:</p><p><strong>Leukemia</strong></p><p><a target=\"_blank\" href=\"https://www.alodokter.com/kanker-darah\">Leukemia</a>&nbsp;adalah jenis kanker darah yang berasal dari sel darah putih. Pada kondisi ini, sel darah putih yang belum matang membelah diri dengan cepat, namun tidak berkembang menjadi sel yang matang.</p><p>Sel darah yang tidak berkembang dengan sempurna ini akan terus membelah diri hingga semakin banyak di dalam sumsum tulang. Akibatnya, fungsi sumsum tulang dalam memproduksi sel darah yang normal menjadi terganggu.</p><p>Berdasarkan perkembangan penyakitnya, leukemia dibagi lagi menjadi dua jenis, yaitu leukemia akut yang berkembang sangat cepat dan leukemia kronik yang berkembang lambat, serta membutuhkan waktu beberapa tahun sampai muncul gejala.</p><p>Selain berdasarkan perkembangan penyakitnya, leukemia juga bisa dikategorikan menurut jenis sel yang terpengaruh. Ada empat jenis leukemia, yaitu:</p><ul><li><em>Acute lymphoblastic leukemia&nbsp;</em>(ALL)</li><li><em>Acute myeloid leukemia&nbsp;</em>(AML)</li><li><em>Chronic lymphocytic leukemia&nbsp;</em>(CLL)</li><li><em>Chronic myeloid leukemia&nbsp;</em>(CML)</li></ul><p>Tanda dan gejala leukemia bisa berupa:</p><ul><li><a target=\"_blank\" href=\"https://www.alodokter.com/anemia\">Anemia</a>, dengan tanda-tanda berupa mudah lelah, pusing, pucat, atau sesak napas.</li><li>Gangguan pembekuan darah, dengan ciri-ciri mudah memar, mudah berdarah (biasanya pada gusi), darah menstruasi banyak, dan&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/kenapa-feses-berwarna-hitam-ini-jawabannya\">tinja berdarah atau berwarna hitam</a>.</li><li>Mudah terkena infeksi, mengalami demam, atau berkeringat pada malam hari.</li><li><a target=\"_blank\" href=\"https://www.alodokter.com/splenomegali\">Pembesaran limpa</a>&nbsp;dan hati.</li><li>Pembengkakan kelenjar getah bening.</li><li>Penurunan berat badan tanpa sebab yang jelas.</li></ul><p>Beberapa tanda dan gejala kanker darah tersebut tidak selalu muncul pada penderita leukemia. Oleh karena itu, untuk mendiagnosisnya dengan tepat, perlu dilakukan pemeriksaan fisik oleh dokter disertai pemeriksaan penunjang, seperti pemeriksaan pemeriksaan darah rutin dan&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/aspirasi-sumsum-tulang-ini-yang-harus-anda-ketahui\">aspirasi sumsum tulang</a>.</p><p><strong>Limfoma</strong></p><p><a target=\"_blank\" href=\"https://www.alodokter.com/limfoma\">Limfoma</a>&nbsp;merupakan jenis kanker darah yang menyerang&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/memahami-sistem-limfatik-dan-gangguan-yang-dapat-terjadi\">sistem limfatik</a>, meliputi kelenjar getah bening, limpa, kelenjar timus, tonsil, dan sumsum tulang.</p><p>Sistem limfatik berfungsi membawa cairan getah bening yang terdiri dari sel darah putih yang disebut limfosit. Sistem limfatik berperan sebagai pertahanan tubuh, terutama dalam melawan infeksi.</p><p>Ada banyak jenis limfoma, dengan gejala dan pengobatan yang berbeda. Namun secara garis besar, limfoma dibedakan menjadi dua jenis, yaitu limfoma Hodgkin dan limfoma non-Hodgkin.</p><p>Gejala limfoma terkadang tidak khas, namun kondisi dapat dicurigai bila muncul keluhan berupa:</p><ul><li>Pembesaran kelenjar getah bening yang tidak terasa nyeri, terutama di leher, ketiak, atau selangkangan.</li><li>Penurunan berat badan.</li><li>Demam.</li><li>Cepat lelah dan sering lemas.</li><li>Sesak napas.</li><li>Gatal-gatal.</li><li>Keringat dingin pada malam hari.</li><li>Penurunan berat badan.</li></ul><p><strong>Myeloma</strong></p><p>Myeloma adalah kanker darah yang berasal dari sel plasma di sumsum tulang. Sel plasma berperan membuat protein yang disebut antibodi (imunoglobulin) untuk melawan infeksi.</p><p>Pada penderita myeloma, sel plasma yang mengalami kanker akan membuat antibodi yang tidak normal. Antibodi ini tidak dapat melawan infeksi dengan baik, bahkan dapat mengurangi jumlah antibodi normal yang dibuat.</p><p>Sel myeloma dapat menyebar dari sumsum tulang ke bagian terkeras tulang, sehingga menyebabkan kerusakan jaringan tulang. Myeloma dapat menyerang beberapa tulang, sehingga sering disebut sebagai&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/multiple-myeloma\"><em>multiple myeloma</em></a><em>.</em></p><p>Tanda dan gejala myeloma pada tahap awal cenderung tidak jelas. Namun lama-kelamaan, kanker darah jenis ini dapat menunjukkan beberapa gejala yang berupa:</p><ul><li>Nyeri tulang</li><li>Tulang mudah patah</li><li>Kesemutan</li><li>Lemas dan pucat karena&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/tanda-tanda-kurang-darah-yang-belum-tentu-anda-ketahui\">kurang darah</a></li><li>Mudah memar dan perdarahan pada gusi</li><li>Mudah terserang infeksi</li><li>Gangguan ginjal</li><li>Peningkatan kadar kalsium dalam darah akibat sel tulang yang rusak</li></ul><p><strong>Penyebab Kanker Darah</strong></p><p>Sejauh ini penyebab pasti mengapa seseorang dapat terserang kanker darah masih belum diketahui. Meski demikian, ada beberapa faktor yang diketahui dapat meningkatkan risiko seseorang untuk terkena kanker darah, yaitu:</p><ul><li>Memiliki anggota keluarga yang menderita kanker darah.</li><li>Sering terpapar zat beracun, seperti pupuk, limbah kimia dari pabrik, asap, atau produk pembersih.</li><li>Terinfeksi virus tertentu, seperti HIV, Epstein-Barr, hepatitis, atau herpes.</li><li>Pernah menjalani pengobatan kemoterapi dan radioterapi.</li><li>Sering terpapar radiasi atau zat radioaktif.</li></ul><p>Faktor usia juga sering kali memengaruhi jenis kanker darah yang diderita. Leukemia ALL paling banyak menyerang anak-anak di usia 3-5 tahun. Sedangkan limfoma, myeloma, dan leukemia jenis AML, lebih banyak menyerang orang dewasa dan lansia.</p><p><strong>Obat Kanker Darah</strong></p><p>Setelah terdiagnosis, pengobatan kanker darah akan diberikan sesuai jenis kanker darah yang diderita, serta usia dan kondisi kesehatan penderitanya. Pengobatan bisa berupa&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/perawatan-kemoterapi-dan-efek-sampingnya\">kemoterapi</a>, terapi radiasi, dan obat-obatan untuk mematikan sel kanker.</p><p>Pada beberapa kasus,&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/cari-dokter/dokter-onkologi\">dokter onkologi</a>&nbsp;mungkin juga akan menyarankan operasi, seperti&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/cari-rumah-sakit/onkologi/transplantasi-sumsum-tulang\">transplantasi sumsum tulang</a>&nbsp;atau pengangkatan limpa.</p><p>Tingkat keberhasilan pengobatan pada kanker darah berbeda-beda. Namun biasanya, semakin dini kanker tersebut terdiagnosis dan diobati, kemungkinan sembuhnya juga akan semakin besar. Oleh karena itu, jika Anda mengalami berbagai tanda dan gejala di atas, segeralah&nbsp;<a target=\"_blank\" href=\"https://www.alodokter.com/cari-dokter/dokter-onkologi\">periksakan diri ke dokter</a>.</p>', 'hati.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_spesialis` int(11) NOT NULL,
  `id_rumahsakit` int(11) NOT NULL,
  `nama_dokter` varchar(40) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `biaya` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tindakan_medis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `username`, `email`, `password`, `status`) VALUES
(4, 'pasundan', 'tony@gmail.com', '130811dbd239c97bd9ce933de7349f20', 'admin'),
(5, 'test', 'test@gmail.com', 'fb469d7ef430b0baf0cab6c436e70375', 'pasien'),
(6, 'aku', 'aku@gmail.com', '550399b49a1a246bdbea28a4c7528b5c', 'pasien');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `topik` varchar(80) NOT NULL,
  `pertanyaan` text NOT NULL,
  `tanggal_tanya` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `id_pasien`, `topik`, `pertanyaan`, `tanggal_tanya`) VALUES
(7, 4, 'Keren guys', '<p>When everything is gonna be alright</p><p>&nbsp;</p>', '2019-04-14 18:29:57'),
(9, 4, 'Umur saya berapa ?', '<p>asdasdxcxc</p>', '2019-04-15 12:26:55'),
(10, 6, 'Aku keren ga ?', '<p>dok tanya dong&nbsp;</p>', '2019-04-18 13:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumahsakit`
--

CREATE TABLE `tb_rumahsakit` (
  `id_rumahsakit` int(11) NOT NULL,
  `nama_rs` varchar(50) NOT NULL,
  `profil_rs` text NOT NULL,
  `lokasi_rs` text NOT NULL,
  `layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesialis`
--

CREATE TABLE `tb_spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `nama_spesialis` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  ADD PRIMARY KEY (`id_rumahsakit`);

--
-- Indexes for table `tb_spesialis`
--
ALTER TABLE `tb_spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  MODIFY `id_rumahsakit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_spesialis`
--
ALTER TABLE `tb_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `tb_dokter_ibfk_1` FOREIGN KEY (`id_spesialis`) REFERENCES `tb_spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD CONSTRAINT `tb_pertanyaan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
