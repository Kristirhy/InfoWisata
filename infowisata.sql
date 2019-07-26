-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2019 pada 14.26
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infowisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `nama_kategori`, `updated_at`, `created_at`) VALUES
(1, 'Wisata Alam', '2019-07-16 09:05:44', '2019-07-16 09:05:44'),
(2, 'Wisata Pantai', '2019-07-16 09:06:40', '2019-07-16 09:06:40'),
(3, 'Wisata Kuliner', '2019-07-20 14:35:44', '2019-07-20 14:35:44'),
(4, 'Wisata Sejarah', '2019-07-20 14:35:44', '2019-07-20 14:35:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'administrator', 'admin@admin.com', NULL, '$2y$10$RGO/hb554ozzx6o3.32Xgul.xkZPUK5F.zPZrULTOnG7Pw8UBP9jq', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `alamat`, `id_kategori`, `foto`, `updated_at`, `created_at`) VALUES
(2, 'Pantai Indrayanti', 'Pantai Indrayanti dapat menjadi alternatif wisata pantai bagi anda, karena selain kita di suguhi keindahan pantai yang ada kita juga dapat menikmati makanan yang dapat dibeli di pinggiran pantai. Terdapat restoran yang berupa Gazebo yang menyediakan berbagai masakan laut dan sayur lombok ijo untuk para pengunjung. Gazebo akan memberi kesan yang lebih alami untuk anda menikmati pantai.', 'Dusun Ngasem, Desa Sidoharjo, Kecamatan Tepus, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta.', 2, 'fotowisata/indrayanti.jpg', '2019-07-16 09:10:53', '2019-07-16 09:10:53'),
(3, 'Benteng Vredeburg', 'Benteng pertama kali dibangun pada tahun 1760 oleh Sri Sultan Hamengku Buwono I atas permintaan Belanda yang pada masa itu Gubernur dari Direktur Pantai Utara Jawa dipimpin oleh Nicolaas Harting. Adapun maksud bangunan benteng dibangun dengan dalih untuk menjaga keamanan keraton dan sekitarnya, akan tetapi dibalik itu maksud Belanda yang sesungguhnya adalah memudahkan dan mengontrol segala perkembangan yang terjadi didalam keraton. Benteng pertama kali dibangun keadaannya masih sangat sederhana, temboknya hanya dari tanah yang diperkuat dengan tiang-tiang penyangga dari kayu pohon kelapa dan aren, dan bangunan didalamnya terdiri atas bambu dan kayu dengan atap hanya ilalang, dibangun dengan bentuk bujur sangkar, yang di keempat sudutnya dibuat tempat penjagaan yang disebut seleka atau bastion. Oleh Sultan keempat sudut itu diberi nama Jaya Wisesa (sudut barat laut), Jaya Purusa (sudut timur laut), Jaya Prakosaningprang (sudut barat daya), dan Jaya Prayitna (sudut tenggara).\r\n\r\nKemudian pada masa selanjutnya, Gubernur Belanda yang dipimpin oleh W.H. van Ossenberg mengusulkan agar benteng dibangun lebih permanen agar lebih menjamin keamanan. Kemudian tahun 1767, pembangunan benteng mulai dilaksanakan dibawah pengawasan seorang ahli ilmu bangunan dari Belanda yang bernama Ir. Frans Haak dan pembangunan baru selesai tahun 1787, hal ini dikarenakan Sultan HB I sedang disibukkan dengan pembangunan keraton. Setelah pembangunan benteng selesai kemudian diberi nama \'Rustenberg\' yang berarti benteng peristirahatan. Pada tahun 1867 di Yogyakarta terjadi gempa bumi yang dahsyat sehingga mengakibatkan rusaknya sebagian bangunan benteng. Setelah diadakan perbaikan, nama benteng diubah menjadi \'Vredeburg\' (benteng perdamaian). Hal ini sebagai manifestasi hubungan antara Belanda dan keraton yang tidak saling menyerang.', 'Jl. Margo Mulyo No.6, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122', 4, 'fotowisata\\/vredeburg.jpg', '2019-07-20 15:36:30', '2019-07-20 15:36:30'),
(4, 'Hutan Pinus Mangunan', 'Hutan Pinus Mangunan Dlingo, Bantul merupakan salah satu hutan pinus alternatif selain hutan pinus top selfie Magelang. Lokasi Hutan Pinus Mangunan Dlingo, Bantul ini memang berdekatan dengan tempat wisata seperti perkebunan Mangunan hingga area makan raja-raja kesultanan Mataram Yogyakarta.\r\n\r\nHutan Pinus Mangunan Dlingo, Bantul ini merupakan area terbuka yang sangat menawan. Pohon-pohon tinggi yang menjulang akan menjadi pesona tersendiri bagi pasangan untuk melakukan selfie romantis di Hutan Pinus Mangunan Dlingo Bantul.\r\n\r\nHutan Pinus Mangunan Dlingo, Bantul juga menjadi salah satu destinasi para pesepeda dari Yogyakarta. Tak berbeda jauh dengan lokasi Tebing Keraton Bandung yang kerap menjadi tempat berkumpulnya para penggemar hobi sepeda gunung. Jalurnya yang mendaki akan menjadi tantangan sendiri bagi para pesepeda.\r\n\r\nYogyakarta memang kini tengah hits setelah penayangan film Ada Apa Dengan Cinta 2. Bahkan para penonton penasaran dengan tempat-tempat syuting AADC 2 di sekitar Yogyakarta. Salah satu yang banyak dikunjungi diantaranya adalah Punthuk Setumbu dan Gereja Ayam di Magelang, Jawa Tengah.\r\n\r\nMeskipun di kenal dengan Gereja Ayam, menurut warga sekitar, tempat itu sebenarnya bernama Bukit Rema. Dan bangunan yang mirip dengan ayam tersebut bukanlah ayam, melainkan merpati. Namun wisatawan sudah terlanjur mengenalnya dengan Gereja Ayam.\r\n\r\nHutan Pinus Mangunan Dlingo, Bantul ini sudah tersedia fasilitas toilet umum. Bahkan juga sudah dibangun gardu pandang di atas pohon. Hati-hati dan bersabar utuk antre, karena kapasitas gardu pandang di Hutan Pinus Mangunan Dlingo, Bantul ini sangat terbatas. Utamakan keselamatan dan jangan terlalu nafsu ingin mendapatkan spot selfie paling menarik.\r\n\r\nTidak perlu bingung jika sudah masuk waktu salat bagi traveler muslim dan backpacker muslim. Karena sudah dibangun musholla kecil untuk menampung para wisatawan yang hendak menjalankan ibadah salat di area wisata Hutan Pinus Mangunan Dlingo, Bantul.', 'Mangunan, Dlingo, Bantul\r\nDaerah Istimewa Yogyakarta\r\nhttps://goo.gl/maps/nZxKzt57fZp', 1, 'fotowisata\\/mangunan.jpg', '2019-07-20 16:04:28', '2019-07-20 16:04:28'),
(5, 'Air Terjun Kedung Pedut', 'Air Terjun Kedung Pedut atau biasa disebut Curug Kedung Pedut berasal dari istilah bahasa Jawa. Curug yang berarti air terjun, kedung berarti kubangan atau kolam, dan pedut berarti kabut. Air Terjun Kedung Pedut merupakan salah satu wisata alam yang di Kulonprogo yang dikenal karena keindahan warna airnya, Warna air yang sangat cantik terdiri dari dua komponen warna yaitu putih jernih dan hijau. Warna putih jernih terjadi karena aliran air deras yang berasal dari air terjun di samping kedung ini, sedangkan warna hijau tosca terbentuk dari pantulan batuan di dasar sungai yang terpancar sinar matahari. Rute menuju tempat wisata ini tidak sulit, karena hal tersebut dan pemandangan yang sangat asri di kawasan wisata ini cukup banyak menarik wisatawan untuk mengunjunginya. Di samping kedung juga terdapat beberapa tempat istirahat untuk para wisatawan yang terbuat dari bambu sehingga menambah kesan alami dari tempat ini.', 'Jatimulyo, Girimulyo, Kabupaten Kulon Progo\nDaerah Istimewa Yogyakarta 55674', 1, 'fotowisata\\/pedut.jpg', '2019-07-22 05:06:29', '2019-07-20 16:31:01'),
(6, 'Pantai Nglambor', 'Pantai Nglambor adalah sebuah pantai eksotis yang terletak di Kelurahan Purwodadi, Kecamatan Tepus, Gunung Kidul, Daerah Istimewa Yogyakarta. Lokasinya persis di sebelah barat dari Pantai Siung dan sebelah timur dari Pantai Jogan. Jaraknya kurang lebih 74 km dari pusat kota Jogja, pantai ini menawarkan panorama pantai yang indah. Terdapat dua batu karang besar yang menyerupai kura-kura persis di depan teluknya.\r\n\r\nAir lautnya yang jernih menjadikan pengunjung bisa dengan leluasa melihat karang, rumput laut, ikan dengan berbagai warna berkejaran, dan aneka biota laut lainnya dari permukaan air. Para pengunjung pun bisa melakukan snorkeling dan berenang di pantai ini tanpa harus khawatir tergulung ombak besar karena memang lokasinya pantainya yang berada di teluk.Seringkali pengunjung berasal dari luar kota bahkan luar negeri, seperti turis dari Belanda, Prancis dan Singapura.', 'Pantai, Purwodadi, Tepus, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta, Indonesia', 2, 'fotowisata\\/nglambor.jpg', '2019-07-20 16:50:17', '2019-07-20 16:50:17'),
(7, 'Monumen Jogja Kembali / Monjali', 'Museum Monumen Jogja Kembali adalah sebuah museum sejarah perjuangan kemerdekaan Republik Indonesia yang ada di kota Yogyakarta dan dikelola oleh Departemen Kebudayaan dan Pariwisata. Museum yang berada di bagian utara kota ini banyak dikunjungi oleh para pelajar dalam acara darmawisata.\r\n\r\nRana di pintu masuk museum\r\nMuseum Monumen dengan bentuk kerucut ini terdiri dari 3 lantai dan dilengkapi dengan ruang perpustakaan serta ruang serbaguna. Pada rana pintu masuk dituliskan sejumlah 422 nama pahlawan yang gugur di daerah Wehrkreise III (RIS) antara tanggal 19 Desember 1948 sampai dengan 29 Juni 1949. Dalam 4 ruang museum di lantai 1 terdapat benda-benda koleksi: realia, replika, foto, dokumen, heraldika, berbagai jenis senjata, bentuk evokatif dapur umum dalam suasana perang kemerdekaan 1945-1949. Tandu dan dokar (kereta kuda) yang pernah dipergunakan oleh Panglima Besar Jenderal Soedirman juga disimpan di sini (di ruang museum nomor 2). Monumen Jogja kembali beralamat Di jalan raya Ring road Utara Sleman Yogyakarta', 'Jl. Ringroad Utara, Jongkang, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581, Indonesia', 4, 'fotowisata\\/monjali.jpg', '2019-07-20 16:56:13', '2019-07-20 16:56:13'),
(8, 'House Of Raminten', 'The House of Raminten merupakan salah satu rumah makan 24 jam yang berlokasi di Kotabaru, Gondokusuman, Yogyakarta. Rumah makan ini menyajikan nuansa Jawa, baik dari alunan musik yang diputar, seragam yang dikenakan para pelayan, nama dan pilihan menu yang disediakan, serta berbagai perabotan dan ornamen yang ada.\n\nDesain rumah makan The House of Raminten menyerupai rumah pada umumnya. Bagian teras digunakan sebagai tempat menerima tamu yang dilengkapi dengan resepsionis, televisi, kereta kencana, dan sepeda kuno untuk latar belakang berfoto. Area makan terdapat di tiga lantai, berupa meja makan berkursi atau lesehan, serta pendopo di tengah-tengah ruangan di lantai satu. Kini pendopo beralih fungsi sebagai area makan tambahan. Di belakang pendopo terdapat kamar mandi yang dilengkapi bathup, tetapi toilet yang dapat digunakan berada di samping kandang kuda, di ruangan paling belakang.', 'Jl. Faridan M Noto No.7, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224', 3, 'fotowisata/raminten.jpg', '2019-07-21 03:06:16', '2019-07-21 03:06:16'),
(9, 'Gudeg Yu Djum', 'Gudeg Yu Djum Pusat merupakan dapur utama sekaligus warung makan kuliner tradisional Yogyakarta,\ndirintis oleh seorang yang pantang menyerah bernama Djuwariyah atau lebih dikenal sebagai “Yu Djum”,\nsejak tahun 1951.\n\n \n\nDjuwariyah lahir dari keluarga yang terlebih dahulu memiliki bisnis kuliner khas Jogja yaitu Gudeg. Sejak remaja, ia mempunyai cita-cita membangun sebuah rumah makan gudeg miliknya sendiri. Djuwariyah bertekad mewujudkan cita-citanya secara perlahan dengan menjual rumput untuk pakan ternak para tetangga yang berada disekitar rumahnya sebagai modal awal untuk membeli peralatan dan segala macam kebutuhan memasak gudeg.\n\n \n\nPertama kali Djuwariyah menjajakan gudeg buatannya di Kampung Widjilan tepatnya di sebelah selatan Pelengkung Widjilan, saat itu masih berupa lapak kecil dengan meja dan kursi yang sangat sederhana, sedangkan dapur tempat memasak gudeg berada di Kampung Karangasem – Mbarek, Jalan Kaliurang KM 4,5 CT III/22. Djuwariyah pantang menyerah menjajakan dagangan gudegnya, dengan menggunakan becak pulang-pergi sedikit demi sedikit terkumpul modal untuk membeli tanah dan bangunan rumah. Pada tahun 1985, warung makan Gudeg Yu Djum dibuka di Widjilan.\n\n \n\nPenggunaan nama Yu Djum berawal dari para pelanggan yang sering memanggil “Yu” yang merupakan singkatan dari mbakyu (panggilan untuk orang yang lebih tua khusus perempuan dalam bahasa Jawa) dan “Djum” yang merupakan nama pendek dari Ibu Djuwariyah itu sendiri.\n\n \n\nDari tahun ke tahun Gudeg Yu Djum mulai dikenal oleh masyarakat Jogja dan sekitarnya. Seiring berkembangnya zaman, pada tahun 1993 dapur utama yang terletak di Kampung Karangasem difungsikan pula sebagai warung makan untuk berjualan gudeg, karena fungsinya sebagai dapur dan warung yang berlokasi di Kampung Karangasem ini disebut sebagai Gudeg Yu Djum Pusat.', 'Karangasem mBarek CT III/22, Kaliurang Street No.km. 4,5, Kocoran, Caturtunggal, Depok Sub-District, Sleman Regency, Special Region of Yogyakarta 55281, Indonesia', 3, 'fotowisata/gudeg.jpg', '2019-07-21 07:39:27', '2019-07-21 07:39:27'),
(10, 'Wisata Kalibiru', 'Kalibiru adalah objek wisata alam yang berada di daerah kabupaten Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta. Tempat wisata ini memiliki tanah bergelombang dan dominan oleh perbukitan dalam area hutan lindung. Wisata Alam yang bertemakan Hutan Kemasyarakatan Kalibiru berada di Perbukitan Menoreh Kulon Progo Yogyakarta, Pada ketinggian 450 mdpl. Hutan tersebut dikelola masyarakat yang berada di darah itu agar tetap terjaga kelestariannya, sehingga hutan ini dapat dijadikan objek wisata alam.', 'Jalan Waduk Sermo, Kokap, Hargowilis, Kalibiru, Hargowilis, Kokap, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55653, Indonesia', 1, 'fotowisata/kalibiru.jpg', '2019-07-21 09:33:27', '2019-07-21 09:33:27'),
(11, 'Embung Nglanggeran', 'Embung Nglanggeran adalah telaga buatan yang berfungsi untuk menampung air hujan dan dimanfaatkan untuk mengairi perkebunan petani pada saat musim kemarau. Terletak di Nglanggeran, Patuk, Gunung Kidul, Daerah Istimewa Yogyakarta, lokawisata ini diresmikan pada tanggal 19 Februari 2013 oleh Sri Sultan Hamengkubuwono X.\n\nEmbung Nglanggeran dijadikan objek wisata karena lokasinya yang berada di gunung api purba dan menawarkan pemandangan yang indah dari ketinggian. Lokawisata ini dikelilingi pula oleh perkebunan buah yang ditanam oleh penduduk sekitar serta memberikan tempat yang baik untuk melihat matahari terbenam pada sore hari.', 'Nglanggeran Wetan, Nglanggeran, Kec. Patuk, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55862', 1, 'fotowisata/alam-05.jpg', '2019-07-23 07:57:30', '2019-07-23 07:57:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
