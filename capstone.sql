-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 12:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodID` int(255) NOT NULL,
  `prodName` varchar(255) NOT NULL,
  `prodDesc` varchar(255) NOT NULL,
  `prodPrice` int(255) NOT NULL,
  `prodCategory` varchar(255) NOT NULL,
  `prodTimeAdd` date NOT NULL,
  `prodPicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodID`, `prodName`, `prodDesc`, `prodPrice`, `prodCategory`, `prodTimeAdd`, `prodPicture`) VALUES
(3, 'SKELETON DESIGN BANDOLIER 10MAGPOUCH', 'DAYO SKELETON DESIGN BANDOLIER\r\n\r\nFabric: Original Cordura1000D Fabric\r\nCapacity: 10magazine pouches for M16 | M14 | M16 long magazine w/lock\r\ncolor: OD Green | Ranger Green', 1950, 'Bandolier', '2024-03-24', './uploads/SKELETON DESIGN BANDOLIER 10MAGPOUCH.jpg'),
(4, 'H-BACK FRONT PLATE CARRIER LRB DESIGN BANDOLIER', 'Product Description\r\nBrand: DAYO\r\nH-BACK LRB BANDOLIER | LRB BANDOLIER WITH CHESTPOUCH\r\n✔️Made up of Cordura 1000 Fabric [plain colors), and  heavy-duty materials \r\nColors: Black, Army Green, Coyote Brown, Philarpat, and Multicam\r\n✔️H-back Type\r\n✔️10X12 P', 2690, 'Bandolier', '2024-03-24', './uploads/H-BACK FRONT PLATE CARRIER LRB DESIGN BANDOLIER.jpg'),
(5, 'H-BACK R1 BANDOLIER WITH FRONT10X12 PLATE CARRIER', 'Brand: DAYO\r\nH-BACK R1 BANDOLIER CORDURA\r\n✔️Made up of Cordura 1000 Fabric [plain colors), and  heavy-duty materials \r\nColors: Black, Army Green, Coyote Brown, Philarpat, and Multicam\r\n✔️H-back Type\r\n✔️10X12 Plate carrier on the front\r\n✔️1 Utility pouch o', 2490, 'Bandolier', '2024-03-24', './uploads/H-BACK R1 BANDOLIER WITH FRONT10X12 PLATE CARRIER.jpg'),
(6, ' K3 BANDOLIER SKELETON DESIGN', 'BRAND: DAYO\r\n\r\nMade up of original CORDURA1000D waterproof fabric\r\nSkeleton type body (No plate carrier)\r\nK3 pouches have Tensile plastic inside to support a heavy load (Nakabox shape parin sya kahit walang laman at hindi lumalawlaw)\r\n\r\nSet of:\r\n2pcs Fron', 2890, 'Bandolier', '2024-03-24', './uploads/K3 BANDOLIER SKELETON DESIGN.jpg'),
(7, '7DAYS RAPTOR BACKPACK', 'Brand: DAYO\r\n7 DAYS RAPTOR BACKPACK\r\nMeasurement:\r\nL: 30cm | W: 30cm | H: 50cm\r\nCapacity: Good for 7 days camping/operation\r\nFabric: Original HD420 shiny fabric\r\nBody: Double compartment\r\nSide pouch: 1.5L bottle capacity(R) | 2 universal pouch (L)', 2300, 'Bag', '2024-03-24', './uploads/7DAYS RAPTOR BACKPACK.png'),
(8, 'BELTBAG/ WAIST BAG FOR SPORTS AND TRAINING', 'BRAND: DAYO\r\n\r\nALL OF THE FABRIC AND MATERIALS ARE ORIGINAL AND HARD-USED TESTED\r\nWE USED CORDURA1000 FABRIC \"HIGHEST AND STRONGEST TYPE OF CORDURA FABRIC\"\r\n\r\nMaterial: Original Cordura1000 Fabric\r\nMain compartment: Pistol compartment\r\nFront compartment: ', 580, 'Bag', '2024-03-24', './uploads/BELTBAG WAIST BAG FOR SPORTS AND TRAINING.jpg'),
(9, 'Dayback backpack, camping bag, casual bag, military bag', 'Brand: DAYO\r\n\r\nDAYPACK\r\nMeasurement:\r\nL: 30cm | W: 30cm | H: 50cm\r\nCapacity: Good for 1-2 days camping/operation\r\nFabric: Original HD420 shiny fabric\r\nBody: Single Compartment\r\nSide pouch: water bottle pouch\r\n\r\n3DAYPACK\r\nMeasurement:\r\nL: 32cm | W: 23cm | ', 1350, 'Bag', '2024-03-24', './uploads/Dayback backpack, camping bag, casual bag, military bag.jpg'),
(10, 'SLING BAG QUICKDRAW W/HOLSTER Original CORDURA1000 Gunbag, Side bag', 'Made out of Original COURDURA 1000 Fabric with heavy-duty materials\r\n\r\nMEASUREMENT\r\nL: 19.5cm\r\nW: 18cm\r\nH: 25cm', 800, 'Bag', '2024-03-24', './uploads/SLING BAG QUICKDRAW With HOLSTER Original CORDURA1000 Gunbag, Side bag.jpg'),
(11, 'SLING BAG WITH HOLSTER, Gunbag, Side Bag, shoulder bag', 'BRAND: DAYO\r\n\r\nMaterial:\r\n*ORIGINAL CORDURA1000 FABRIC WITH HEAVY-DUTY MATERIALS AND ACCESSORIES\r\n*Quick Draw capability with detachable holster\r\n\r\nNOTE: PATCHES NOT INCLUDED', 800, 'Bag', '2024-03-24', './uploads/SLING BAG WITH HOLSTER, Gunbag, Side Bag, shoulder bag.jpg'),
(12, 'Jungle Pack Complete Sizes & Designs with Regular/Quick Release Strap Jungle Pack | Alice Pack', 'JUNGLE PACK LARGE WITH EXTENSION\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\nCapacity: Good for 7 to 10 days of camping/operation\r\nBody: Single Compartment\r\nPockets: 5 with Extension\r\nStrap: Regular or Quick Release\r\nFrame: Frame Joints are s', 6290, 'Bags with Frame', '2024-03-24', './uploads/Jungle Pack Complete Sizes & Designs with Regular Quick Release Strap Jungle Pack  Alice Pack.jpg'),
(13, 'MEDIUM Jungle Pack/ Aclice Pack Regular and Quick Release Strap', 'JUNGLE PACK MEDIUM\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\nCapacity: Good for 5 days of camping/operation\r\nBody: Single Compartment\r\nStrap: Regular or Quick Release\r\nFrame: Frame Joints are screwed for additional durability\r\nDimension:\r\nM', 5490, 'Bags with Frame', '2024-03-24', './uploads/MEDIUM Jungle Pack Aclice Pack Regular and Quick Release Strap.jpg'),
(14, '5 DAYS WITH FRAME/JUNGLE PACK WITH FRAME REGULAR AND QUICK RELEASE STRAP', 'BRAND: DAYO\r\n\r\nGOOD FOR 5DAYS OPERATION\r\nFRAME INCLUDED\r\n\r\n5 DAYS BACKPACK\r\nMeasurement:\r\nL: 28cm | W: 30cm | H: 48cm\r\nCapacity: Good for 5 days camping/operation\r\nFabric: Original HD420 shiny fabric\r\nBody: Double compartment\r\nSide pouch: 1.5L bottle capa', 5490, 'Bags with Frame', '2024-03-24', './uploads/5 DAYS WITH FRAME JUNGLE PACK WITH FRAME REGULAR AND QUICK RELEASE STRAP.jpg'),
(15, 'LARGE WITH EXTENSION Jungle Pack/ Alice Pack Regular and Quick Release', 'JUNGLE PACK LARGE WITH EXTENSION\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\nCapacity: Good for 7 to 10 days of camping/operation\r\nBody: Single Compartment\r\nPockets: 5 with Extension\r\nStrap: Regular or Quick Release\r\nFrame: Frame Joints are s', 5990, 'Bags with Frame', '2024-03-24', './uploads/LARGE WITH EXTENSION Jungle Pack Alice Pack Regular and Quick Release.jpg'),
(16, '7DAYS INFRAME/JUNGLE PACK REGULAR AND QUICK RELEASE STRAP', '7 DAYS INFRAME\r\n\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\nCapacity: Good for 7 days of camping/operation\r\nBody: Single Compartment\r\nStrap: Regular or Quick Release\r\nSide pouch: 1.5L Capacity\r\nFrame: Frame Joints are screwed for additional ', 5590, 'Bags with Frame', '2024-03-24', './uploads/7DAYS INFRAME JUNGLE PACK REGULAR AND QUICK RELEASE STRAP.jpg'),
(17, 'XL Jungle Pack/ Alice Pack XL and XL Modular with Regular and Quick Release Strap', 'JUNGLE PACK XL\r\n\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\nCapacity: Good for 10 days of camping/operation\r\nBody: Single Compartment\r\nPocket: 8\r\nStrap: Regular or Quick Release\r\nFrame: Frame Joints are screwed for additional durability\r\nDim', 6190, 'Bags with Frame', '2024-03-24', './uploads/XL Jungle Pack Alice Pack XL and XL Modular with Regular and Quick Release Strap.jpg'),
(18, 'ALPHA Jungle Pack/ Alice Pack Regular and Quick Release good for 7-10 days operation', 'JUNGLE PACK ALPHA\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\n                 YKK BUCKLES\r\nCapacity: Good for 7 to 10 days of camping/operation\r\nBody: Single Compartment\r\nPockets: 8\r\nStrap: Regular or Quick Release\r\nFrame: Frame Joints are s', 6290, 'Bags with Frame', '2024-03-24', './uploads/ALPHA Jungle Pack Alice Pack Regular and Quick Release good for 7-10 days operation.jpg'),
(19, 'LARGE Jungle Pack/ Alice Pack Regular and Quick Release', 'JUNGLE PACK LARGE\r\nSpecifications:\r\nMaterial: Original HD420 Shiny Fabric\r\nCapacity: Good for 7 days of camping/operation\r\nBody: Single Compartment\r\nPockets: 5\r\nStrap: Regular or Quick Release\r\nFrame: Frame Joints are screwed for additional durability\r\nDi', 5590, 'Bags with Frame', '2024-03-24', './uploads/LARGE Jungle Pack Alice Pack Regular and Quick Release.jpg'),
(20, 'FULLY QUICK RELEASE BANDOLIER/ BACK TO BACK WITHOUT CHESTPOUCH', '👉SET B (All Magpouch)\r\n✅10x12 Back to Back Plate Carrier \r\n✅Triple magazine pouch (2mags/pouch)\r\n✅2 Magazine pouch\r\n✅2 single magpouch\r\n✅2 Utility pouch\r\n✅Convertible hydration bag/Backpack', 3890, 'Back to Back Vest', '2024-03-24', './uploads/FULLY QUICK RELEASE BANDOLIER BACK TO BACK WITHOUT CHESTPOUCH.jpg'),
(21, 'BACK TO BACK PLATE CARRIER/ BANDOLIER/ VEST MINIMAL SETUP', 'Brand: DAYO\r\nNOTE: ALL OF THE FABRIC AND MATERIALS ARE ORIGINAL AND HARD-USED TESTED\r\nWE USED CORDURA1000 FABRIC [PLAIN COLORS] \"HIGHEST AND STRONGEST TYPE OF CORDURA FABRIC\"\r\n\r\nSET OF:\r\n✅️1 LEATHER SHOULDER QUICK RELEASE Vest Body\r\n✅️1 Triple pouch that ', 3090, 'Back to Back Vest', '2024-03-24', './uploads/BACK TO BACK PLATE CARRIER BANDOLIER VEST MINIMAL SETUP.jpg'),
(22, 'FULLY QUICK RELEASE BANDOLIER/ PLATE CARRIER BACK TO BACK/ VEST SEMI-SET', 'Brand: DAYO\r\nNOTE: ALL OF THE FABRIC AND MATERIALS ARE ORIGINAL AND HARD-USED TESTED\r\nWE USED CORDURA1000 FABRIC [PLAIN COLORS] \"HIGHEST AND STRONGEST TYPE OF CORDURA FABRIC\"\r\n\r\nSET OF:\r\n✅️1 Fully Quick Release Vest Body\r\n✅️1 Triple pouch that can load up', 3690, 'Back to Back Vest', '2024-03-24', './uploads/FULLY QUICK RELEASE BANDOLIER PLATE CARRIER BACK TO BACK VEST SEMI-SET.jpg'),
(23, 'K3 Back to Back Vest/ Bandolier/ Plate carrier', 'BRAND: DAYO\r\n\r\nMade up of original CORDURA1000D waterproof fabric\r\nQuick Release Vest\r\nBack to Back 10x12 inch Plate Carrier\r\nK3 pouches have Tensile plastic inside to support a heavy load (Nakabox shape parin sya kahit walang laman at hindi lumalawlaw)\r\n', 3650, 'Back to Back Vest', '2024-03-24', './uploads/K3 Back to Back Vest Bandolier Plate carrier.jpg'),
(24, ' BACK TO BACK/ FRONT AND BACK PLATE CARRIER BANDOLIER DESERT CAMOUFLAGE', 'Brand: DAYO\r\nNOTE: ALL OF THE FABRIC AND MATERIALS ARE ORIGINAL AND HARD-USED TESTED\r\nWE USED CORDURA1000 FABRIC [PLAIN COLORS] \"HIGHEST AND STRONGEST TYPE OF CORDURA FABRIC\"\r\n\r\nSET OF:\r\n1 Vest Body\r\n1 Triple magazine pouch that can load up to 2magazines ', 3300, 'Back to Back Vest', '2024-03-24', './uploads/BACK TO BACK FRONT AND BACK PLATE CARRIER BANDOLIER DESERT CAMOUFLAGE.jpg'),
(25, 'Chestpouch, waist bag MOLLE system', 'Brand: DAYO\r\nALL OF THE FABRIC AND MATERIALS ARE ORIGINAL AND HARD-USED TESTED\r\nWE USED CORDURA1000 FABRIC [PLAIN COLORS] \"HIGHEST AND STRONGEST TYPE OF CORDURA FABRIC\"', 435, 'Accessories', '2024-03-24', './uploads/Chestpouch, waist bag MOLLE system.jpg'),
(26, 'Hipbelt, Kidney Pad back support for Jungle Pack, Alice Pack', 'BRAND: DAYO\r\n\r\n*Kidney Pad/ Hipbelt Support for Jungle pack/ Alice Pack\r\n\r\n\r\noriginal HD420 Fabric+strong hardwares', 485, 'Parts', '2024-03-24', './uploads/Hipbelt, Kidney Pad back support for Jungle Pack, Alice Pack.jpg'),
(27, 'BELTPOUCH, KEY POUCH, UNIVERSAL POUCH, CARD POUCH MILITARY DESIGN', 'BRAND: DAYO\r\n\r\nFEATURES:\r\n*2 side keys holder\r\n*with a divider inside to separate important things like cards\r\n\r\nMaterial: Nylon Shiny HD420 fabric or CORDURA1000 Fabric+heavy duty materials\r\n\r\nNOTE: Keys and Ballpen are not included', 190, 'Accessories', '2024-03-24', './uploads/BELTPOUCH, KEY POUCH, UNIVERSAL POUCH, CARD POUCH MILITARY DESIGN.jpg'),
(28, 'MOLLE system Universal/utility pouch for bandolier, warbelt, waistbag', 'Brand: DAYO\r\n-Made out of Original CORDURA1000D Fabric [plain colors], CORDURA600D FABRIC [pattern]\r\n-MOLLE system \r\n\r\nwhat\'s in the box:\r\n1pc. pouch', 330, 'Accessories', '2024-03-24', './uploads/MOLLE system Universal utility pouch for bandolier, warbelt, waistbag.jpg'),
(29, 'JUNGLE PACK BACK FRAME/ ALICE PACK FRAME PREMIUM AND REGULAR FRAME AVAILABLE', 'REGULAR FRAME\r\n*Customized: We used Volts and screws at the frame\'s joints to make it more durable and stronger!\r\n*Fitted to all jungle packs\r\n*Combination of alloy and Steel to hold more weight at stronger than ordinary frames.\r\n\r\nPREMIUM FRAME (also kno', 1990, 'Parts', '2024-03-24', './uploads/JUNGLE PACK BACK FRAME ALICE PACK FRAME PREMIUM AND REGULAR FRAME AVAILABLE.jpg'),
(30, 'Dump pouch/Drop pouch Original Cordura fabric', 'BRAND:DAYO\r\n-Material: Made up of original CORDURA1000[plain] Fabric with heavy-duty materials and accessories.\r\n-Closure: Drawstring closure with adjustable cord\r\n-MOLLE system and can attach to belt, war belt, bandolier, back to back vest', 420, 'Accessories', '2024-03-24', './uploads/Dump pouch Drop pouch Original Cordura fabric.jpg'),
(31, '1pair Regular Suspender Strap Replacement for Jungle Pack, Alice Pack', 'Made up of HD420 Fabric and heavy-duty materials\r\n\r\nWeight Capacity: 50kg', 475, 'Parts', '2024-03-24', './uploads/1pair Regular Suspender Strap Replacement for Jungle Pack, Alice Pack.jpg'),
(32, 'Molle system K3 Pouch OD GREEN', 'made up of Original Courdura1000D Fabric with heavy duty materials.', 470, 'Accessories', '2024-03-24', './uploads/DAYO Molle system K3 Pouch OD GREEN.jpg'),
(33, 'Chestpouch for Bandolier/ Vest/ Back to Back, waist bag MOLLE system with 2 pistol magpouch', 'BRAND: DAYO\r\n\r\nMaterial: Cordura 1000 Fabric', 365, 'Parts', '2024-03-24', './uploads/Chestpouch for Bandolier Vest Back to Back, waist bag MOLLE system with 2 pistol magpouch.jpg'),
(34, 'M203 beltpouch, Bandolier pouch, warbelt pouch, waistpouch', 'Can Load 6 M203 per pouch\r\nMade out of original CORDURA1000 Fabric with heavy-duty materials\r\n\r\nNOTE: SOLD BY PIECE', 450, 'Accessories', '2024-03-24', './uploads/M203 beltpouch, Bandolier pouch, warbelt pouch, waistpouch.jpg'),
(35, 'Pistol Holster for Bandolier, warbelt', 'Brand: DAYO\r\n-Made out of Original CORDURA1000D Fabric [plain colors], CORDURA800D FABRIC [pattern]\r\n-MOLLE system \r\n\r\nwhat\'s in the box:\r\n1pc. Pistol holster', 390, 'Parts', '2024-03-24', './uploads/Pistol Holster for Bandolier, warbelt.jpg'),
(36, 'Quick Release Military Jungle Pack Suspender Strap', 'BRAND: DAYO\r\n\r\nJungle Pack strap/suspender replacement (Quick release)\r\nMade up of original HD420 waterproof fabric [plain] with heavy-duty hardware\r\nset of: 1pair of strap\r\n\r\nNOTE: FRAME NOT INCLUDED', 1800, 'Parts', '2024-03-24', './uploads/Quick Release Military Jungle Pack Suspender Strap.jpg'),
(37, 'Chestpouch for Bandolier/ Vest/ Back to Back, waist bag MOLLE system', 'BRAND: DAYO\r\nMaterials: Original Cordura1000 waterproof Fabric \"Strongest type of cordura yet\"', 395, 'Accessories', '2024-03-24', './uploads/Chestpouch for Bandolier Vest Back to Back, waist bag MOLLE system.jpg'),
(40, 'TR105 Mini-Mil Boots', 'TR105 Mini-Mil Boots\r\nCoyote brown authorized for wear with Operational Camouflage Pattern (OCP) uniform\r\nAR 670-1 and AFI 36-2903 compliant (coyote brown)\r\nHeight: 8\"\r\nWeight: 16 oz. per boot\r\nUpper: Cattlehide leather and 1000 denier Cordura nylon upper', 3880, 'Boots', '2024-03-25', './uploads/TR105 Mini-Mil Boots.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ppicture` varchar(255) NOT NULL,
  `coverphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `firstname`, `lastname`, `email`, `password`, `ppicture`, `coverphoto`) VALUES
(1, 'Admin', 'Dayo', 'admin.dayo@gmail.com', '$2y$10$spmBhVEWcwOWpL8795UeN.7Zy3cOB5PsrdwgNbm2OnIdPUdbz2upC', '', ''),
(10, 'Kristel Joy', 'Morallas', 'kristeljoy1112@gmail.com', '$2y$10$gBtysXkm1qWElPWt4DaXxO7g2QCC18cGCy8qww2tYdiIqHU.nSeou', '', ''),
(12, 'Gemmary ', 'Chavez', 'kser501@gmail.com', '$2y$10$9Ot3rcJx6niWapTx3Zah5O0YoMRdih4tjrOE5H0fImj/MFi5QXeMa', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
