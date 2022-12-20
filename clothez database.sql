-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.25 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table clothez.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping data for table clothez.item: ~15 rows (approximately)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`Item_ID`, `Item_Name`, `Item_Detail`, `Item_Price`, `Item_Category`, `Item_Material`) VALUES
	(4, 'ESSENTIALS BIG LOGO T-SHIRT', 'Freshen up your basics with this t-shirt. Show your love for all things sport with a big adidas Badge of Sport thats front and center. Good thing its designed for everyday wear, because if youre anything like us, youre going to want to reach for it all the time.', '89', 'T-shirt', 'Cotton'),
	(6, 'ADICOLOR CLASSICS FIREBIRD TRACK JACKET', 'An evolution of an icon. This adidas Firebird track jacket keeps the look true to its roots, but spins it with recycled materials. Stand-up collar. Contrast 3-Stripes. Shiny tricot. Gangs all here on this classic.\r\n\r\nThis product is made with Primeblue, a high-performance recycled material made in part with Parley Ocean Plastic.', '299.00', 'Jacket', 'Polyester'),
	(7, 'CLASSIC T-SHIRT', 'With natural stretchiness and softness, this t-shirt is your new playmaker. Its sporty enough to wear for the big games, on and off the pitch.\r\n\r\nOur cotton products support more sustainable cotton farming.', '79', 'T-shirt', 'Cotton'),
	(8, 'Iconic T7 Mens Track Jacket', 'A PUMA original, the T7 track-inspired collection made a name for itself with 7cm signature stripes and quickly became as popular on city streets as it was on the training grounds. Hidden away in our archives, the suit has been faithfully replicated, and is just as iconic today as it was back then. With sleeve striping and a sleek fit, this sporty jacket will have you bringing the classics back in style.', '96.52', 'Jacket', 'Cotton'),
	(10, 'Mens UA Woven Perforated Windbreaker Jacket', 'The goal with the UA Woven collection was to make the perfect set of warm-ups that keep your muscles ready, work for any sport, and also pack up super-small in your bag, so you can take them anywhere.\r\n\r\nStretch-woven fabric is lightweight, durable & moves with you​. Wind-resistant materials & design shield you from the elements. Perforated back panel for added breathability​ where you need it. Open hand pockets. Exposed elastic back bottom hem​ with wordmark detail.', '239', 'Sweatshirt', 'Polyester'),
	(11, 'OWN THE RUN JACKET', 'Challenge yourself to run in the rain, and finish feeling strong, confident and ready for what next. Zip into this adidas running jacket to feel supported along your route. It repels cold air and light rain while letting you move with freedom. Reflective details shine in low light.', '169', 'Jacket', 'Polyester'),
	(13, 'PHARRELL WILLIAMS BASICS HOODIE', 'Minimalism acts as a foundation for expression in the latest collection made in collaboration with Pharrell. This hoodie focuses on colour and material, establishing and encouraging a sense of play. Feel the comfort of soft French terry. A large, textured Humanrace logo stands out on the front, and an embroidered Trefoil logo sits above the right sleeve. This sweatshirt was made using UNITEFIT — an all-gender fit system that was created with a spectrum of sizes, genders and forms in mind.\r\n\r\nOur cotton products support more sustainable cotton farming.', '349', 'Sweatshirt', 'Cotton'),
	(14, 'RUN ICON T-SHIRT', 'A modern and minimalist approach. This slim-fit running t-shirt breezy, lightweight feel eliminates distractions so you stay focused on what important. adidas AEROREADY manages your body moisture to keep you dry through long days on the pavement. Reflective elements step up when the light starts to fade.\r\n\r\nMade with a series of recycled materials, and at least 60% recycled content, this product represents just one of our solutions to help end plastic waste.', '109', 'T-shirt', 'Polyester'),
	(20, 'ADICOLOR CLASSICS PRIMEBLUE SST TRACK PANTS', 'Rumor has it adidas introduced the track suit in 64. We wont confirm, but there no question the 3-Stripes have spent decades standing out on fields, in stadiums, on streets and everywhere in between. No matter where you are, it somehow never looks out of place. These track pants are clear proof of that. All about ease and comfort, the soft fabric is made from Parley Ocean Plastic yarn thats sourced from upcycled plastic waste.', '249', 'Trackpant', 'Made of 60% Recycled Polyester and 40% Cotton'),
	(21, 'ADICOLOR 70S STRIPED TRACK PANTS', 'The Adicolor 70s collection draws heavily on archival silhouettes and classics. Undeniably adidas, the detail-oriented range combines luxurious and textural materials with a bright color palette to give heritage silhouettes an energetic new form — Senior Originals Designers, Florence Marrinier & Lena Sophie Anders\r\n\r\nRetro track pants infused with modern appeal. Modeled off the iconic Beckenbauer tracksuit, the Adicolor 70s Striped Track Pants are cut for a close fit and crafted from premium fabric in bold, vibrant shades. Steeped in adidas sporting heritage yet made for today, the track pants feature a suede Trefoil and branded coil zippers.', '299', 'Trackpant', '52% cotton, 48% recycled polyester doubleknit'),
	(22, 'WOVEN PANTS', 'These adidas pants are considered essentials for a reason. They are multipurpose, which means you are ready for every part of your active day, all the way through those final moments (okay, or hours) resetting on the couch. The loose shape makes them really easy to move in, or just to sprawl out in.\r\n\r\nMade with 100% recycled materials, this product represents just one of our solutions to help end plastic waste.', '299', 'Sweatpant', '100% recycled polyester plain weave'),
	(24, 'ADICOLOR CLASSICS 3-STRIPES PANTS', 'Straightforwardly adidas. Keep your look low-key and legit in these pants. Contrast 3-Stripes and a Trefoil logo are as OG as it gets. Feel cosy and warm in fleece. Secure your stuff in zip pockets. And we are done here.\r\n\r\nOur cotton products support sustainable cotton farming. This product is also made with recycled content as part of our ambition to end plastic waste.', '279', 'Slim-fit', '70% cotton, 30% recycled polyester fleece'),
	(25, 'PHARRELL WILLIAMS BASICS PANTS', 'Minimalism acts as a foundation for expression in the latest collection made in collaboration with Pharrell. These pants focus on colour and material, establishing and encouraging a sense of play. Feel the comfort of soft French terry. A small, textured Humanrace logo stands out under the front zip pocket, and an embroidered Trefoil logo sits below the back zip pocket. These pants were made using UNITEFIT — an all-gender fit system that was created with a spectrum of sizes, genders and forms in mind.\r\n\r\nOur cotton products support more sustainable cotton farming.', '399', 'Sweatpant', '100% cotton French terry'),
	(26, 'AEROREADY SERENO SLIM TAPERED CUT 3-STRIPES PANTS', 'Whether you are preparing to compete or relaxing at home, stay ready for anything in these adidas pants. Move naturally in a distraction-free fit as you hustle through warm-up drills. AEROREADY keeps you feeling dry, fresh and comfortable even when the game starts to heat up.\r\n\r\nThis product is made with Primegreen, a series of high-performance recycled materials.', '139', 'Slim-fit', '100% recycled polyester doubleknit'),
	(27, 'Sports Track Pants', 'No Description', '39', 'Trackpant', 'Microfiber');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping data for table clothez.item_images: ~49 rows (approximately)
/*!40000 ALTER TABLE `item_images` DISABLE KEYS */;
INSERT INTO `item_images` (`Images_ID`, `F_Item_ID`, `Images`, `Color`) VALUES
	(4, 2, 'adidas-sportswear-future-icon-logo-graphic-hoodie-grey.jpg', 'Medium Grey Heather'),
	(5, 2, 'adidas-sportswear-future-icon-logo-graphic-hoodie-greygreen.jpg', 'Orbit Green'),
	(6, 2, 'adidas-sportswear-future-icon-logo-graphic-hoodie-pink.jpg', 'Ambient Blush'),
	(10, 4, 'essentials=big-logo-tee-black+white.jpg', 'Black and White'),
	(11, 4, 'essentials=big-logo-tee-blue+black.jpg', 'Almost Blue and Black'),
	(12, 4, 'essentials=big-logo-tee-red.jpg', 'Red'),
	(13, 6, 'adicolor-classics-firebird-track-jacket-black.jpg', 'Black'),
	(14, 6, 'adicolor-classics-firebird-track-jacket-blue+light.jpg', 'Light Blue'),
	(15, 6, 'adicolor-classics-firebird-track-jacket-blue+sky.jpg', 'Blue Sky Rush'),
	(16, 7, 'classic-tee-blue.jpg', 'Semi Lucid Blue'),
	(17, 7, 'classic-tee-grey.jpg', 'Medium Grey Heather'),
	(18, 7, 'classic-tee-light+red.jpg', 'Wonder Red'),
	(19, 8, 'iconic-t7-men-track-jacket-black.jpg', 'Puma Black'),
	(20, 8, 'iconic-t7-men-track-jacket-red.jpg', 'High Risk Red'),
	(21, 10, 'men-ua-woven-perforated-windbreaker-jacket-black.jpg', 'Black'),
	(22, 10, 'men-ua-woven-perforated-windbreaker-jacket-grey.jpg', 'Grey'),
	(23, 10, 'men-ua-woven-perforated-windbreaker-jacket-grey+green.jpg', 'Grey Green'),
	(24, 11, 'own-the-run-jacket-black.jpg', 'Black Reflective Silver'),
	(25, 11, 'own-the-run-jacket-grey.jpg', 'Halo Silver Reflective Silver'),
	(26, 11, 'own-the-run-jacket-orange.jpg', 'Semi Impact Orange Reflective Silver'),
	(30, 13, 'pharrell-william-basic-hoodie-brown.jpg', 'Brown'),
	(31, 13, 'pharrell-william-basic-hoodie-emerald.jpg', 'Hazy Emerald'),
	(32, 13, 'pharrell-william-basic-hoodie-light+grey.jpg', 'Light Grey Heather'),
	(33, 14, 'run-icon-tee-blue.jpg', 'Royal Blue'),
	(34, 14, 'run-icon-tee-orange.jpg', 'Impact Orange'),
	(35, 14, 'run-icon-tee-silver.jpg', 'Aluminium'),
	(36, 16, 'adidas-sportswear-future-icon-logo-graphic-hoodie-grey.jpg', 'Color1'),
	(37, 16, 'essentials=big-logo-tee-black+white.jpg', 'Color2'),
	(38, 17, 'Kirby 64 The Crystal Shards Zero Two   0 Piano.jpg', 'Black'),
	(39, 18, 'aeab500c8e6f66e07570f3b2e1f502cc.jpg', 'Blaswq'),
	(42, 20, 'adicolor-classics-primeblue-sst-track-pant-black+white.jpg', 'Black and White'),
	(43, 20, 'adicolor-classics-primeblue-sst-track-pant-night-indigo+white.jpg', 'Night Indigo and White'),
	(44, 21, 'adicolor-heritage-now-striped-track-pant-blue+green.jpg', 'Collegiate Royal'),
	(45, 21, 'adicolor-heritage-now-striped-track-pant-brown.jpg', 'Brown Desert'),
	(46, 21, 'adicolor-heritage-now-striped-track-pant-red.jpg', 'Scarlet'),
	(47, 22, 'woven-pant-red.jpg', 'Bright Red'),
	(48, 22, 'woven-pant-blue.jpg', 'Semi Lucid Blue'),
	(49, 22, 'woven-pant-black.jpg', 'Black'),
	(51, 24, 'adicolor-classics3-stripes-pant-black.jpg', 'Black'),
	(52, 24, 'adicolor-classics3-stripes-pant-medium-grey-heather.jpg', 'Medium Grey Heather'),
	(53, 25, 'pharrel-williams-basic-pant-black.jpg', 'Black'),
	(54, 25, 'pharrel-williams-basic-pant-emerald.jpg', 'Hazy Emerald'),
	(55, 25, 'pharrel-williams-basic-pant-white.jpg', 'Off White'),
	(56, 26, 'aeroready-sereno-slim-tapered-cut-3stripe-pant-black+grey.jpg', 'Black Grey'),
	(57, 26, 'aeroready-sereno-slim-tapered-cut-3stripe-pant-black+white.jpg', 'Black and White'),
	(58, 26, 'aeroready-sereno-slim-tapered-cut-3stripe-pant-blue.jpg', 'Legend Ink'),
	(59, 27, 'forest-sport-track-pant-black+blue.jpg', 'Black and Blue'),
	(60, 27, 'forest-sport-track-pant-black+purple.jpg', 'Black and Purple'),
	(61, 27, 'forest-sport-track-pant-navy+red.jpg', 'Navy Red');
/*!40000 ALTER TABLE `item_images` ENABLE KEYS */;

-- Dumping data for table clothez.item_size: ~54 rows (approximately)
/*!40000 ALTER TABLE `item_size` DISABLE KEYS */;
INSERT INTO `item_size` (`Size_ID`, `F_Item_ID`, `Quantity`, `Size`) VALUES
	(4, 2, 0, 'S'),
	(5, 2, 0, 'M'),
	(6, 2, 0, 'L'),
	(10, 4, 40, 'S'),
	(11, 4, 8, 'M'),
	(12, 4, 19, 'L'),
	(16, 6, 2, 'S'),
	(17, 6, 5, 'M'),
	(18, 6, 2, 'L'),
	(19, 7, 3, 'S'),
	(20, 7, 4, 'M'),
	(21, 7, 5, 'L'),
	(22, 8, 5, 'S'),
	(23, 8, 6, 'M'),
	(24, 8, 10, 'L'),
	(25, 10, 12, 'S'),
	(26, 10, 13, 'M'),
	(27, 10, 15, 'L'),
	(28, 11, 11, 'S'),
	(29, 11, 17, 'M'),
	(30, 11, 7, 'L'),
	(34, 13, 23, 'S'),
	(35, 13, 19, 'M'),
	(36, 13, 15, 'L'),
	(37, 14, 19, 'S'),
	(38, 14, 16, 'M'),
	(39, 14, 17, 'L'),
	(43, 17, 0, 'S'),
	(44, 17, 0, 'M'),
	(45, 17, 0, 'L'),
	(46, 18, 0, 'S'),
	(47, 18, 0, 'M'),
	(48, 18, 0, 'L'),
	(52, 20, 0, 'S'),
	(53, 20, 0, 'M'),
	(54, 20, 0, 'L'),
	(55, 21, 32, 'S'),
	(56, 21, 23, 'M'),
	(57, 21, 15, 'L'),
	(58, 22, 18, 'S'),
	(59, 22, 16, 'M'),
	(60, 22, 18, 'L'),
	(64, 24, 12, 'S'),
	(65, 24, 14, 'M'),
	(66, 24, 19, 'L'),
	(67, 25, 13, 'S'),
	(68, 25, 14, 'M'),
	(69, 25, 16, 'L'),
	(70, 26, 12, 'S'),
	(71, 26, 15, 'M'),
	(72, 26, 13, 'L'),
	(73, 27, 14, 'S'),
	(74, 27, 24, 'M'),
	(75, 27, 23, 'L');
/*!40000 ALTER TABLE `item_size` ENABLE KEYS */;

-- Dumping data for table clothez.login: ~5 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`ID`, `Name`, `Pword`, `User`, `Email`, `Address1`, `Address2`, `State`, `City`, `Postal`) VALUES
	(1, 'Admin1', 'abcd1234', 1, 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL),
	(3, 'Haikal', 'abcd1234', 0, 'haikal@gmail.com', NULL, NULL, NULL, NULL, NULL),
	(6, 'Khairul', 'qwerty', 0, 'khairul@gmail.com', '75 JALAN SUBANG PERMAI', 'U6/7 DESA SUBANG PERMAI', 'Selangor', 'Shah Alam', 40150),
	(7, 'Ahmad', 'ahmad1234', 0, 'ahmad@gmail.com', 'Jalan Seri Putra 1/9', 'Bandar Seri Putra', 'Selangor', 'Kajang', 43000),
	(8, 'Asrina', 'asdf', 0, 'Asrina@gmail.com', 'address1', 'address2', 'selangor', 'city', 22203);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping data for table clothez.orders: ~5 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`Order_ID`, `Total_quantity`, `Total_price`, `Approval`, `Customer`, `Deleted`) VALUES
	(23, 1, '239', 'Approve', 'Khairul', 'No'),
	(24, 2, '128', 'Cancelled', 'Asrina', 'No'),
	(25, 1, '299', 'Unapprove', 'Asrina', 'No'),
	(26, 2, '698', 'none', 'Khairul', 'No'),
	(27, 1, '299', 'none', 'Khairul', 'No');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping data for table clothez.order_history: ~9 rows (approximately)
/*!40000 ALTER TABLE `order_history` DISABLE KEYS */;
INSERT INTO `order_history` (`orderid`, `Image`, `Name`, `Size`, `Tquantity`, `Oriprice`, `Color`) VALUES
	(21, 'men-ua-woven-perforated-windbreaker-jacket-grey+green.jpg', 'Mens UA Woven Perforated Windbreaker Jacket', 'L', 1, '239', 'Grey Green'),
	(22, 'aeroready-sereno-slim-tapered-cut-3stripe-pant-blue.jpg', 'AEROREADY SERENO SLIM TAPERED CUT 3-STRIPES PANTS', 'M', 2, '278', 'Legend Ink'),
	(23, 'men-ua-woven-perforated-windbreaker-jacket-black.jpg', 'Mens UA Woven Perforated Windbreaker Jacket', 'S', 1, '239', 'Black'),
	(24, 'essentials=big-logo-tee-blue+black.jpg', 'ESSENTIALS BIG LOGO T-SHIRT', 'M', 1, '89', 'Almost Blue and Black'),
	(24, 'forest-sport-track-pant-navy+red.jpg', 'Sports Track Pants', 'L', 1, '39', 'Navy Red'),
	(25, 'adicolor-classics-firebird-track-jacket-blue+sky.jpg', 'ADICOLOR CLASSICS FIREBIRD TRACK JACKET', 'L', 1, '299', 'Blue Sky Rush'),
	(26, 'adicolor-heritage-now-striped-track-pant-brown.jpg', 'ADICOLOR 70S STRIPED TRACK PANTS', 'M', 1, '299', 'Brown Desert'),
	(26, 'pharrel-williams-basic-pant-white.jpg', 'PHARRELL WILLIAMS BASICS PANTS', 'M', 1, '399', 'Off White'),
	(27, 'woven-pant-blue.jpg', 'WOVEN PANTS', 'M', 1, '299', 'Semi Lucid Blue');
/*!40000 ALTER TABLE `order_history` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
