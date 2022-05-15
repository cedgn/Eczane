-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 16 Eki 2020, 00:57:13
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ecedogan_eczane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'ECE', 'ECE', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `footer` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `logo`, `telefon`, `baslik`, `facebook`, `twitter`, `footer`, `adres`, `mail`) VALUES
(1, 'images/log.jpg', '(0424) 123 23 23', 'BAL ECZANE', 'https://tr-tr.facebook.com/', 'https://twitter.com/', 'Tüm Hakları Bal Eczanesine Aittir.', 'Elazığ', 'ece.dogan.bp@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_link` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `menu_ad`, `menu_link`) VALUES
(1, 'ANASAYFA', 'index.php'),
(3, 'GIDA TAKVİYELERİ', 'gida.php'),
(4, 'BAKIM ÜRÜNLERİ', 'bakim.php'),
(5, 'FAYDALI ÜRÜNLER', 'fayda.php'),
(6, 'İLETİŞİM', 'iletisim.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_tarih` datetime NOT NULL,
  `sayfa_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_sira` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_anasayfa` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_tarih`, `sayfa_ad`, `sayfa_icerik`, `sayfa_sira`, `sayfa_anasayfa`) VALUES
(7, '2019-12-18 19:32:00', 'DESTEK PAKETİ', 'Türk Ekonomi Bankası (TEB), hayata geçirdiği “Eczane Destek Paketi” ile eczacılara ürün satın almada ve ödemede avantajlar sunarken, Bireysel Emeklilik’e katkı ödemelerinden, komisyonsuz EFT/havale ve uygun faiz oranlı bireysel ve ticari kredilere kadar çeşitli fırsatlar sunuyor.\r\n\r\nFarklı meslek gruplarındaki müşterilerinin ihtiyaçlarına uygun özel ürün ve hizmetler geliştiren Türk Ekonomi Bankası (TEB), en önem verdiği meslek gruplarından biri olan eczacılara özel fırsatlar sunmaya devam ediyor. Günlük bankacılık işlemlerinde eczacılara avantajlı fırsatlar sunan TEB, hayata geçirdiği “Eczane Destek Paketi” ile nakit akışı yönetiminde de eczacılara destek sunmayı hedefliyor. TEB, Eczane Destek Paketi ile eczacı ile ecza deposu arasındaki nakit akışını kolaylaştırmak için; toplu ilaç alımlarında eczacıya 150 bin TL’ye kadar ödeme vadesine ilave, 30 gün öteleyebileceği vade opsiyonu sunuyor.\r\n\r\nEczane Destek Paketi ile eczacılar, TEB’in anlaşması olan istediği depodan ürünlerini alabiliyor ve ödemelerini TEB Depo’ya yapıyor. Eczacıların iş sürecini kolaylaştırması planlanan paket ile eczacıların Eczacı Destek Hesabı’ndaki bakiyesi, aldıkları ürünleri sattıktan sonra ve hesaplarına para geldikçe kapayabiliyor.\r\n\r\nTEB Bireysel ve Özel Bankacılık Kıdemli Genel Müdür Yardımcısı Gökhan Mendi, “Eczacı Destek Paketi” ile ilgili şunları söyledi:\r\n\r\n“Türk Eczacılar Birliği Kooperatifi’nden alınan tüm ürünlerde TEB eczacılarımıza artı 30 gün vade imkanı sunuyoruz. Üstelik bunun için hiçbir ücret ve komisyon almadan, eczacılarımızın nakit akışlarını daha rahat yönetmesini desteklemek için yapıyoruz. TEB’den Eczane Destek Paketi adı ile duyurduğumuz bu ürün ve hizmetler, Türk Eczacılar Birliği ile bir yıldır süre gelen yoğun mesaimiz ve eczacı müşterilerimizin bize verdikleri geri bildirimler ile oluştu. TEB olarak hem günlük nakit akışlarına hem de hayatlarının ileriki dönemlerindeki yatırım tasarruf ihtiyaçlarına aynı anda odaklanan bir paket hazırladık. Eczacılarımızla birlikte sadece bugünü değil yarını da planlamak istiyoruz. Bu nedenle ‘Eczane Destek Paketi ile ürünlerinizi kolayca alın, vade ve ödeme sorunlarınızı TEB ile çözün’ diyoruz” dedi.\r\n\r\nEczacılara her ay 170 TL ek katkı ödemesi\r\nTEB’in Eczane Destek Paketi’ne ek olarak eczacılar için hayata geçirdiği başka ürün ve hizmetleri de bulunuyor. TEB; SGK ödemesini TEB’den alan ve POS’unu aktif kullanan eczacılara, BNP Paribas Cardif A.Ş.’de açılan Bireysel Emeklilik Hesaplarına koşulun sağlandığı her ay için 170 TL katkı payı ödemesi yapıyor.', '', '1'),
(8, '2019-12-18 19:32:00', 'ECZANE POLİTİKASI', '”Eczane politikasındaki belirsizlikler” diye başlıyor Fransa’da geçen ay yayınlanan bir rapor.\r\nEczanelerimiz farkındaysanız son yıllarda sadece ilaç fiyatları üzerindeki arayışlarla perakende alanında yerlerini korumaya çalışmaktadırlar. İlacın sosyal değerinin hiç bir şey ifade etmediği bir dönem mi yaşıyoruz yoksa? Farkındaysanız ülkemizde gittikçe azalan bir ürün gamı söz konusu.\r\n\r\nBu nereye kadar diye sormadan edemeyeceğim?\r\n\r\n\r\nHer gün e-postama eczane ve ilaç konusunda onlarca reklam gelmekte ve tümü ilaç perakendesi üzerine…Yüzlerce değişik fiyata pazarlanmaya çalışılan özellikle ilaç dışı ürünler denetimsiz bir halde ülke pazarını işgal ettiler. İnternet üzerinden yapılan satışların istatistiklerinin olduğunu zannetmiyorum. Bu ürünlerin denetlendiği konusunda da kuşkum var. Bu gidiş bizleri hedefimiz olması gereken klinik eczacılıktan gittikçe uzaklaştırmakta diye bir his içindeyim.\r\n\r\n\r\nOysa bugün dünyada eczane eczacılığı yeni misyonlar edinme peşinde ve ülke sağlık otoriteleri bunları eczacıya sağlayarak sağlık sistemlerini güçlendirme yoluna gitmektedirler. Toplumdaki tüm nitelikli sağlık profesyonelinin ortak çalışması ile nitelikli bir sağlık ortamı sağlanacağı gerçeğini kabul etmişler. Bugün grip aşılarının bazı gelişmiş ülkelerde eczacılar tarafından yapılma imkanı buna güzel bir örnektir. Bugün böyle bir ortak çalışmanın ülkemizde var olduğunu söylemek imkanı var mı? Hatta geleceğe ait böyle bir planın dahi olduğu söylenemez.\r\n\r\n\r\nBunun dışında hareket etmek mesleki alanımızı daraltacak ve ilacın piyasa değerleri içine sıkışıp kalacağız. Bunu da mesleğimizi devam edebilmek için bir mecburiyet olarak görmeye devam edeceğiz. Ama perakende alanı büyüdükçe ilaç ta piyasa metası olarak işlem görmeye devam edecek ve fiyat rekabeti içinde satılmaya başlanınca bireysel eczanelerin büyük perakendeciler karşısında yaşam şansı her gün biraz daha azalacaktır. Ve gittikçe SGK reçeteleri karşılanması dışında bir işi olamayan devlet bürolarına döneceğiz. Bu tabloyu tersine çeviremezsek bizler sağlık sisteminde sadece göstermelik bir sağlık elemanı olarak görüneceğiz. Belki de o yüzden birinci basamak sağlık hizmetlerinde eczanelerimiz yer edinememektedir. Bizim bu belirsizliği ortadan kaldırmamız yazının başlığına bir başkaldırı ortaya koymamız gerekmektedir.\r\n', '', '1'),
(9, '2019-12-18 20:22:00', 'MESLEK STANDARTLARI', '<p>Eczane &Ccedil;alışanları Taslak Meslek standardı daha &ouml;nce T&uuml;rk Eczacıları Birliği tarafından MYK ile yapılan protokolle hazırlanmaya başlanmıştı. T&uuml;rk Eczacıları Birliği yayınladığı duyuru ile T&uuml;m ilgili kurum ve kuruluşlardan g&ouml;r&uuml;ş ve b&ouml;l&uuml;m eklemesi tavsiyesi istemektedir. Derneğimiz tarafından en kısa zamanda bir toplantı ger&ccedil;ekleştirilip ilgili eklemeler hakkında &Uuml;niversitelerin ilgili b&ouml;l&uuml;mlerinden g&ouml;r&uuml;ş alınarak bildirim yapılacaktır.</p>\r\n\r\n<p>T&uuml;m kurumlara a&ccedil;ık olan işlemlerin derneklerimiz tarafından dikkate alınarak bildirilmesini rica ederiz.TEB ve Mesleki Yeterlilik Kurumu (MYK) arasında 16.10.2009 tarihinde Meslek Standardı Hazırlama İşbirliği Protokol&uuml; imzalanmış ve bu protokol kapsamında hazırlanan Eczane Teknik Hizmetleri &ndash; Seviye 5 ve Eczane Destek Hizmetleri &Ccedil;alışanı &ndash; Seviye 3 meslek standartları ilgili dağıtım yapılan kurum ve kuruluşlardan gelen değerlendirmelerin taslaklara yansıtılmasının ardından 15 Aralık 2010 tarihinde ger&ccedil;ekleştirilen MYK Sağlık ve Sosyal Hizmetler Komitesi&rsquo;ne sunulmuştu.</p>\r\n\r\n<p>Ancak, Sekt&ouml;r Komitesi toplantısının yapıldığı d&ouml;nemde Sağlık Bakanlığı tarafından y&uuml;r&uuml;t&uuml;len Sağlık Meslekleri Kanun Taslağı &ccedil;alışmaları ve ardından, 06.04.2011 tarihinde 6225 Kanun numarası ile taslağın yasalaşması nedeni ile sağlık sekt&ouml;r&uuml;ndeki meslek standardı hazırlama &ccedil;alışmaları ertelenmişti.</p>\r\n\r\n<p>Sağlık Bakanlığımız s&uuml;re&ccedil; i&ccedil;inde konuyu yeniden ele almış, 13.06.2018 tarihinde Sağlık Bakanlığı Sağlık Hizmetleri Genel M&uuml;d&uuml;rl&uuml;ğ&uuml;&rsquo;n&uuml;n Mesleki Yeterlilik Kurumuna iletmiş oldukları yazılarında Eczane Teknik Hizmetleri (Seviye 5) ve Eczane Destek Hizmetleri &Ccedil;alışanı (Seviye 3) i&ccedil;in hazırlanan meslek standartlarının uygun olduğuna dair g&ouml;r&uuml;ş bildirilmiştir. Bu kapsamda MYK&rsquo;nın Birliğimize yaptığı bilgilendirme doğrultusunda, Birliğimizce hazırlanan meslek standartlarının mevcut yasa ve y&ouml;netmelikler bağlamında g&ouml;zden ge&ccedil;irilmesi ve d&uuml;zenlenmesi s&uuml;re&ccedil;leri tamamlanmış olup, daha &ouml;nceki &ccedil;alışma s&uuml;recinde g&ouml;r&uuml;ş alınan Kurum ve Kuruluşlara yeniden değerlendirme i&ccedil;in g&ouml;nderilmiştir. Ayrıca Birliğimiz web sitesinden duyurusu yapılmak sureti ile ilgili tarafların g&ouml;r&uuml;ş&uuml;ne a&ccedil;ılmıştır.Hazırlanan taslak meslek standartları ve taslak meslek standardı g&ouml;r&uuml;ş bildirme formu aşağıda bilgilerinize sunulmuş olup, katkılarınız standartların kalite ve etkinliğini artıracaktır.</p>\r\n\r\n<p>Meslek standartları taslaklarına ilişkin g&ouml;r&uuml;ş ve &ouml;neriler, en ge&ccedil; 20 Aralık 2018 Perşembe g&uuml;n&uuml; saat 16.30&rsquo;a kadar &ldquo;Taslak Meslek Standardı G&ouml;r&uuml;ş Bildirme Formu&rdquo; ile her taslak i&ccedil;in ayrı hazırlanarak teb@teb.org.tr &nbsp;mail adresi &uuml;zerinden bildirilebilir.</p>\r\n', '', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_url`, `slider_sira`) VALUES
(1, 'Slider1', 'uploads/31442249752847328554pharmaton_banner.jpg', '', '1'),
(2, 'Slider2', 'uploads/20491201092855125106prozinc-banner.jpg', '', '0'),
(3, 'Slider3', 'uploads/22436294282314720870dr_browns_banner.jpg', '', '2'),
(4, '1', 'uploads/30169219222363629519alfa.php', '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_konu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_yazi` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_baslik`, `urun_resimyol`, `urun_konu`, `urun_yazi`) VALUES
(2, 'deneme', 'uploads/25052255263010026070black_and_white_creepy_dark_eerie_fog_foggy_forest_nature_silhouette_trees_4592x3064.jpg', 'gida', '<p>deneme</p>\r\n'),
(3, 'Krem', 'uploads/256342930322586289210203206_soft-kavanoz-krem-300-ml.jpeg', 'gida', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(4, 'dsds', 'uploads/28780294522195225433Zade-Vital-Milk-Thistle-Seed-Oil-300-mg--051f.jpg', 'gida', '<p>dsdsds</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
