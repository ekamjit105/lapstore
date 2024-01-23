-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 06:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pid` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `gaming` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pid`, `brand`, `pname`, `pimage`, `type`, `gaming`, `price`, `discount`, `uid`) VALUES
('L3', 'apple', 'Macbook Air 2020', 'products/macbookair2020.JPG', 'premium', 'no', 93000, 5, 5),
('A5', 'HP', 'HP Black and Blue Neoprene Sle', 'products/hpacc1.JPG', 'cover', 'no', 1299, 2, 5),
('L18', 'HP', 'Pavilion Gaming DK0268TX', 'products/hpg1.JPG', 'nil', 'yes', 81999, 5, 3),
('L20', 'apple', 'MacBook Pro Core i9', 'products/MAC2.JPG', 'premium', 'no', 212999, 5, 1),
('L18', 'HP', 'Pavilion Gaming DK0268TX', 'products/hpg1.JPG', 'nil', 'yes', 81999, 5, 1),
('A13', 'dell', ' Solimo Laptop Backpack ', 'products/BAG.JPG', 'bag', 'no', 499, 0, 1),
('A3', 'boat', 'rockers 510', 'products/boat510.jpg', 'headphone', 'yes', 1800, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `num` int(10) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `oid` varchar(30) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`num`, `uid`, `oid`, `pimage`, `pname`, `brand`, `type`, `price`, `discount`) VALUES
(20, '1', 'OD1', 'products/g3.jpg', 'G3 gaming', 'dell', 'nil', 92000, 0),
(21, '1', 'OD1', 'products/macbookair2020.JPG', 'Macbook air 2020', 'apple', 'premium', 93000, 0),
(22, '1', 'OD1', 'products/hppavillion360.JPG', 'pavillion 360', 'HP', '360d', 86000, 0),
(23, '1', 'OD2', 'products/macbookair2020.JPG', 'Macbook air 2020', 'apple', 'premium', 93000, 0),
(24, '1', 'OD3', 'products/hppavillion360.JPG', 'pavillion 360', 'HP', '360d', 86000, 0),
(25, '2', 'OD1', 'products/g5.JPG', 'G5 gaming', 'dell', 'gaming', 99000, 0),
(26, '1', 'OD4', 'products/macbookair2020.JPG', 'Macbook Air 2020', 'apple', 'premium', 93000, 5),
(27, '1', 'OD4', 'products/g3.jpg', 'G3 gaming', 'dell', 'gaming', 92000, 15),
(28, '1', 'OD5', 'products/macbookair2020.JPG', 'Macbook Air 2020', 'apple', 'premium', 93000, 5),
(29, '1', 'OD5', 'products/g5.JPG', 'G5 gaming', 'dell', 'gaming', 99000, 0),
(30, '1', 'OD6', 'products/g5.JPG', 'G5 gaming', 'dell', 'gaming', 99000, 0),
(31, '5', 'OD1', 'products/MAC2.JPG', 'MacBook Pro Core i9', 'apple', 'premium', 212999, 5),
(32, '1', 'OD7', 'products/macbookair2020.JPG', 'Macbook Air 2020', 'apple', 'premium', 93000, 5),
(33, '1', 'OD7', 'products/CHARGERMAC.JPG', 'Apple 12W USB', 'apple', 'nil', 3100, 0),
(34, '3', 'OD1', 'products/bag2.JPG', 'Storite PU Leather 14 inch Lap', 'apple', 'bag', 1430, 0),
(35, '1', 'OD8', 'products/MAC2.JPG', 'MacBook Pro Core i9', 'apple', 'premium', 212999, 5),
(36, '1', 'OD9', 'products/testhead.JPG', 'HEADPHONES DELL', 'dell', 'headphone', 500, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `sdescp` varchar(300) NOT NULL,
  `ldescp` varchar(700) NOT NULL,
  `category` varchar(10) NOT NULL,
  `prof` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `gaming` varchar(10) NOT NULL,
  `offer` varchar(30) NOT NULL,
  `odescp` varchar(700) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pimage`, `sdescp`, `ldescp`, `category`, `prof`, `type`, `brand`, `gaming`, `offer`, `odescp`, `price`, `discount`) VALUES
('A1', 'Mouse X1000 wired', 'products/hpmouse.jpg', '3 buttons improve productivity Optical sensor works on most surfaces', 'HP X1000 Mouse, Documentation, Warranty card 5.7 x 9.5 x 3.9 cm; 90 Grams The sleek and modern HP Mouse X1000 adds an instant touch of trend-setting style to any work space Glossy black and metallic gray shine with sophistication 1 year warranty', 'accessory', 'nil', 'mouse', 'itech', 'no', 'no', '', 150, 0),
('A10', ' Mi Webcam HD 720p', 'products/webcmi.JPG', '720p High Resolution', '720p High Resolution USB Plug & Play Light Weight', 'accessory', 'student', 'webcam', 'mi', 'yes', 'no', 'nil', 1299, 0),
('A11', 'Ballistix Sport LT', 'products/ram1.JPG', ' 3200Mhz XMP 2.0 Single DDR4 CL16 UDIMM Gaming RAM Memory Module for Desktops (BLS8G4D32AESBK, Gray)', 'Speeds start at 2400 MT/s Ballistix Sport LT 8GB DDR4 memory module is rated at 1.35V and has a latency of CL16. The Memory module can operate at 3200Mhz out-of-box and is an Ideal choice for gamers and performance enthusiasts. Multi-channel memory architecture maximizes data rates enabling for faster speeds and better responsiveness. Stealth digital camo design and integrated heat spreader enables for efficient heat dissipation helping your system run cool even during heavy loads. XMP 2.0 support enables you to take full advantage of the performance at offer with little to no BIOS tweaking needed. They also ensure stable performance supporting your CPU in the process to bring you the best o', 'accessory', 'student', 'upgrade', 'ballix', 'yes', 'no', '', 3199, 0),
('A12', 'Laptop Bag Sleeve', 'products/cover.JPG', 'Case Cover for 15.6-Inch Laptop MacBook, Protective, Neoprene (Black)', 'Innovative Design: This Laptop Case is made of soft puffy fabric inside which protect your device from scratches and also has 3D foam cushion around which insure 360 ̊ protection to your laptop. Slim Profile: The slim design of Laptop sleeve allows men, women, girl, boy, college student you to use as a standalone case and carry only the essentials or place in your bag for added protection and computer is safe, easy to access, and glide smoothly. A much Safer Way to Carry Laptop: The Laptop Sleeve Case Cover is made of four layer protective material like High elastic canvas fabric, water-resistance neoprene, Impact-resistance neoprene, soft fluffy fabric which protect your accessories from sc', 'accessory', 'office', 'cover', 'mi', 'no', 'yes', '30 days return available', 599, 0),
('A13', ' Solimo Laptop Backpack ', 'products/BAG.JPG', '15.6-inch Laptops (29 litres, Black)', 'Spacious 29 litre laptop backpack sized 32cm x 16cm x 48cm (LxBxH) 3 compartments, including a padded laptop compartment ideal for carrying laptops up to 15.6 inches Made from water resistant, wear-resistant & durable polyester Wide & cushioned shoulder strap for comfort Well padded at the back to provide support', 'accessory', 'student', 'bag', 'dell', 'no', 'yes', '8% cashback on HDFC NEFT banking', 499, 0),
('A14', 'Storite PU Leather 14 inch Lap', 'products/bag2.JPG', 'Sling Office Bag for Men & Women – (40 x 29 x 6 cm, Black/Brown)', 'Laptop Bag - Material: PU Leather , Color : Black/Brown , Dimensions: 40 x 29x 6 cm Elegant look and high quality PU leather Ultra-soft felt, Long Lasting durable fabric With Zipper Closure and handle. Laptop Briefcase - Compartments : 1 Main zipper compartment for laptop with 1 inner zipper pocket & 1 Pocket on front and 1 Pocket on Rear side for other accessories The messenger bag features a detachable wide shoulder strap that eliminates shoulder fatigue. The bag can be carried by the handle, worn on shoulders, and positioned across body.', 'accessory', 'office', 'bag', 'apple', 'no', 'yes', '5% Cashback with ICICI NEFT banking', 1430, 0),
('A15', 'Dell Performance YTF86 USB Hea', 'products/head.JPG', 'Superior virtual surround sound, up mixes 2.0, 5.1 and 7.1 content Breathable soft leather ear pads', 'RGB LED lighting with 16.8 million colors Mic and push-to-mute on ear functions The headset features a lightweight design that provides hours of comfort', 'accessory', 'student', 'headphone', 'dell', 'yes', 'yes', '4% Cashback with Axis bank NEFT banking', 599, 3),
('A16', 'HEADPHONES DELL', 'products/testhead.JPG', 'Zebronics Zeb-Thunder Wireless BT Headphone Comes with 40mm Drivers, AUX Connectivity, Built in FM, Call Function, 9Hrs* Playback time and Supports Micro SD Card (Red)', '•	Comfortable Design: Beat the workday blues with music on Zeb-Thunder wireless headphone that comes in an ergonomic design a perfect fit and design for long hours use •	Soft & comfortable earcups: Listen to music, podcasts and more for long hours with soft ear cups making it super comfortable for daily wear •	Adjustable headband: Adust your headband to your comfortable best while you work or listen to music •	9hrs Playback Time: Fall in love with the audio experience with 9 hours of playback time to keep you going •	Superior Sound Quality: Magnify every speck of sound with superior sound quality on Zeb-Thunder wireless headphone', 'accessory', 'student', 'headphone', 'dell', 'yes', 'yes', '5% Cashback with ICICI NEFT banking', 500, 3),
('A2', 'Dell Laptop bag', 'products/dellbag.JPG', ' ESSENTIAL BACKPACK 15\"(Colour Black, blue accents)', 'Colour Black, blue accents Size: 15\" Easy To Use', 'accessory', 'nil', 'bag', 'dell', 'yes', '', '', 799, 0),
('A3', 'rockers 510', 'products/boat510.jpg', ' Bluetooth On-Ear Headphone with Mic(Furious Blue)', 'Battery: Rockerz 510 offers a playback time of up to 20 hours and gets charged to 100% in 2-2.5 hours Bluetooth: It has Bluetooth v4.1 with a range of 10m and is compatible with Android & iOS ANC: NA No. of Mic: 1 Other Inclusions: Micro USB Charging Cable, Warranty Card, User Manual Ergonomic Design with Easy Controls Instant Voice Assistant', 'accessory', 'nil', 'headphone', 'boat', 'yes', 'yes', '30 days return', 1800, 5),
('A4', 'Hp mouse', 'products/hppremiummouse.JPG', 'Z3700 Wireless Mouse (Black)', 'Designed with flair, the sleek design complements your favorite HP devices and fits comfortably anywhere The 2.4GHz wireless connection reliably keeps you hooked up With up to 16 months of life on a single AA battery, this mouse was designed to push the limits Blue LED technology lets your mouse function on a wide range of surfaces, so you can work from almost anywhere 1200DPI optical sensor give you exceptional accuracy and incredible speed Just pop in the battery, plug in the USB receiver and you’re good to go The USB receiver fits conveniently inside the mouse, for effortless portability', 'accessory', 'nil', 'mouse', 'hp', 'no', '', '', 1299, 0),
('A5', 'HP Black and Blue Neoprene Sle', 'products/hpacc1.JPG', ' Neoprene Sleeve for 14-inch Laptops (V5C27AA)', 'Its reversible design lets you change up the color whenever you want. And with its sleek, zipper-less enclosure your laptop can enjoy a convenient, reliable fit This flexible and durable neoprene sleeve helps protect your PC from the elements, as well as from bumps and scrapes. Take your laptop along with confidence. The product comes in dimensions of 265 x 365 x 10 mm and weighing up to 0.19kg.', 'accessory', 'office', 'cover', 'HP', 'no', 'no', '', 1299, 2),
('A6', 'Wired Keyboard and Mouse', 'products/hpmousekey.JPG', 'Wired Keyboard and Mouse 160 Combo Set', ' Extend your input capabilities with keyboards and mice from HP. Connection is a breeze with USB connectivity so you can get up and running fast.', 'accessory', 'student', 'mouse', 'HP', 'no', 'yes', 'Partner OfferGST Invoice Available! Save More For Business Purchases', 899, 0),
('A7', 'Apple 12W USB', 'products/CHARGERMAC.JPG', 'USB Power Adapter', 'Use this compact and convenient USB-based power adapter to charge your iPhone, iPad or iPod with Lightning connector at home, on the road or whenever it’s not connected to a computer. You can connect the adapter directly to your device via the lightning connector. Featuring a compact design, this power adapter offers fast, efficient charging.', 'accessory', 'office', 'nil', 'apple', 'no', 'no', '', 3100, 0),
('A8', '13 13.3 inch Bag Sleeve', 'products/maccov.JPG', '13 13.3 inch Apple MacBook Air Pro Retina 13 13.3 a1466 a1369 md101 a1278 a1502 MacBook 13 13.3 inch Sleeve Bag Cover', 'Travel Sleeve Interior Size:13.4 x 9.8 x 0.7 inch, Exterior Size: 14.1 x 10.2 x 0.9 inch. Durable Dupont Eco-Friendly Nylon Water Resistant, this form-fitting protective sleeve case enables you to safely carry your Macbook / Laptop Case Sleeve in sleek style. [ ORGANIZATION & STORAGE ]: Multiple pockets provide additional storage for your mobile phone, data & charging cables, mouse, pen, charger, power bank, memory cards, external hard drive, and other small accessories. Built-in large pocket for documents, smartphone and small devices; Built-in card slot for business cards,bank cards etc. Three side pockets provide 360 degree protection and keeps your equipment protected.', 'accessory', 'leisure', 'cover', 'apple', 'no', 'no', 'nil', 1299, 0),
('A9', 'MacBook Air 13\" Hard Shell Cas', 'products/maccov2.JPG', 'Cellbell Guarantee - perfect fit, high quality materials and craftmanship 12 Months no-hassle warranty provides easy protection for your laptop.', 'Easy installation with online tutorials (saves trees!) on how to correctly install your screen protector. Visit our Youtube Channel(Cellbell) For quick assistance please contact our Whatsapp customer support', 'accessory', 'leisure', 'premium', 'apple', 'no', 'no', '', 599, 0),
('L1', 'G3 gaming', 'products/g3.jpg', '15.6 Inch 120 Hz FHD Display (10th Gen i5-10300H/ 8 GB/ 1TB+256 SSD/ Win 10/ NVIDIA GTX 1650 4GB Graphics) D560245HIN9BE / D560317HIN9BE', 'Processor:10th Generation Intel i5-10300H Processor (8 MB Cache, up to 4.5 GHz, 4 cores) Memory & Storage:8GB, 2x4GB, DDR4,Dual Channel 2933MHz upgradable to 16GB | 256 GB M.2 PCIe NVMe Solid State Drive | 1TB 5400 RPM 2.5\" Hard Disk Drive Display:15.6 inch FHD (1920 x 1080) 120Hz 250 nits WVA Anti- Glare LED Backlit Narrow Border Display Graphics:NVIDIA GeForce GTX 1650 4GB GDDR6 | Game Shift Technology Operating System & Software:Windows 10 Home Plus Single Language | McAfee Security Center 15 month subscription Keyboard & Battery: Backlit keyboard | 3 Cell Battery, 51 Whr,Upto 10 hours battery life | Laptop weight 2.3 Kg', 'laptop', 'student', 'gaming', 'dell', 'yes', 'yes', '8% cashback on HDFC transactions', 92000, 15),
('L10', '15 db1069AU', 'products/db1069.JPG', '15.6-inch Laptop (3rd Gen Ryzen 3 3200U/4GB/1TB HDD/Windows 10/MS Office/Radeon Vega 3 Graphics), Jet Black', 'Processor: AMD Ryzen 3 3200U processor, 2.6 GHz base processor speed, up to 3.5 GHz burst frequency, 2 cores, 5MB L3 cache Operating System: Pre-loaded Windows 10 Home Display: 15.6-inch HD (1366 x 768) SVA WLED Display Memory & Storage: 4GB DDR4 RAM, with AMD Radeon Vega 3 Graphics | Storage: 1 TB 5400 rpm SATA Design & battery: Laptop weight: 2.04 kg | Maximum battery life = Up to 13 hours, HP Fast Charge battery: 0 to 50% under 45 minutes', 'laptop', 'student', 'general', 'HP', 'no', 'no', '', 31000, 0),
('L11', ' E203NAH-FD114T', 'products/asus1.JPG', 'Ultra Thin Laptop (Intel Celeron N3350/4GB LPDDR4/500GB/11.6” HD Display)', 'Powerful & efficient Celeron N3350 processor with 500GB Storage and 4GB LPDDR4 RAM 11.6 inch HD display combined with a lightweight 2.2 pound body designed to help you be productive and mobile Designed from the ground up for on-the-go users with an all-day battery life of up to 10 hrs.*', 'laptop', 'office', 'general', 'asus', 'no', 'no', '', 25999, 5),
('L12', 'VivoBook 15', 'products/asus3.JPG', ' Intel Core i5-1035G1 10th Gen 15.6-inch FHD Thin and Light Laptop (8GB RAM/1TB HDD + 256GB SSD/Windows 10/Integrated Graphics/Slate Grey/1.70 kg), X512JA-EJ851T', 'Processor: 10th Gen Intel Core i5-1035G1 Processor, 1.0 GHz (6MB Cache, up to 3.6 GHz, 4 Cores, 8 Threads) Memory & Storage: 8GB (2x 4GB) DDR4 3200MHz Dual Channel RAM, upgradeable up to 12GB using 1x SO-DIMM Slot with | Storage: 1TB SATA 5400RPM 2.5\" HDD + 256GB M.2 NVMe PCIe 3.0 SSD Graphics: Integrated Intel UHD Graphics Display: 15.6-inch (16:9) LED-backlit FHD (1920x1080) Anti-Glare Panel with 45% NTSC, 88% Screen-to-body ratio Operating System: Pre-loaded Windows 10 Home with lifetime validity Design & Battery: 5.7mm Thin Bezels | Laptop weight 1.75 kg | Thin and Light Laptop | 37WHrs, Lithium-Polymer, 2-cell battery', 'laptop', 'leisure', 'premium', 'asus', 'no', 'no', 'nil', 45669, 0),
('L13', 'VivoBook S14', 'products/asus4.JPG', 'Intel Core i5-1035G1 10th Gen 14-inch FHD Thin and Light Laptop (8GB RAM/512GB NVMe SSD + 32GB Optane Memory/Windows 10/MS Office 2019/Silver Blue/1.35 kg)', 'Processor: 10th Gen Intel Core i5-1035G1 Processor, 1.0 GHz (6MB Cache, up to 3.6 GHz, 4 Cores, 8 Threads) Memory & Storage: 8GB LPDDR4X 3733MHz onboard RAM | Storage: 512GB M.2 NVMe PCIe SSD with 32GB Intel Optane Memory (Intel H10 SSD) Graphics: Integrated Intel UHD Graphics Display: 14.0-inch (16:9) LED-backlit FHD (1920x1080) 60Hz, 300nits Brightness, Anti-Glare, IPS-level Panel, with 100% sRGB Color gamut, 87% Screen-to-body ratio and 178° viewing angles Software Included: Pre-installed MS Office Home and Student 2019 | Operating System: Pre-loaded Windows 10 Home with lifetime validity', 'laptop', 'office', 'premium', 'asus', 'no', 'yes', '5% Cashback with ICICI NEFT banking', 54000, 2),
('L14', 'V145-AMD-A6', 'products/lenovo1.JPG', '15.6 inch HD Laptop (4GB RAM/ 1TB HDD/ Windows 10 Home/ Black/ 2.1 kg), 81MT006YIH', 'Processor: AMD A6-9225 processor. Memory & Storage: 4 GB DDR4 RAM | 1TB HDD @ 5400 RPM Operating System: Pre-loaded Windows 10 Home Display: 15.6-inch HD 1366 x 768) display', 'laptop', 'student', 'general', 'lenovo', 'no', 'no', '4% Cashback with Axis bank NEFT banking', 34699, 0),
('L15', 'Chromebook x360', 'products/hp1.JPG', '12b-ca0010TU 12-inch Touchscreen Laptop (Celeron N4020/4GB/64GB SSD/Chrome OS/Integrated Graphics)', 'Processor: Intel Celeron N4020 (1.1 GHz base frequency, up to 2.8 GHz burst frequency, 4 MB L2 cache, 2 cores) Operating System: Chrome OS Display: 12-inch HD+ IPS micro-edge WLED-backlit multitouch-enabled edge-to-edge glass, 235 nits, 50% NTSC (1366 x 912) Memory & Storage: 4GB DDR4 RAM | 64 GB eMMC storage Graphics: Intel UHD Graphics 600 Design & Battery: Thin and light design | Laptop weight: 1.35 kg | 2-cell, 40.31 Wh Li-ion Fast Charge Battery', 'laptop', 'office', '360d', 'HP', 'no', 'no', '', 78999, 5),
('L16', 'Notebook 14', 'products/MI1.JPG', 'Intel Core i5-10210U 10th Gen Thin and Light Laptop(8GB/512GB SSD/Windows 10/Intel UHD Graphics/Silver/1.5Kg), XMA1901-FA+Webcam', 'Laptop Processor: 10th Gen Intel Core i5-10210U processor, 1.6 GHz base speed, 4.2 GHz max speed, 4 Cores, 8 threads Operating System in the laptop: Windows 10 Home operating system | Pre-installed software : Office 365 – one month Trial subscription Laptop Display: 14-Inch (1920X 1080 )Full HD Anti-Glare Screen, Intel UHD Graphics Memory Specs (Laptop): 8GB DDR4-2666MHz RAM and  Storage: 512 GB SSD Design and battery of Laptop: Robust metal body |Thin and  light Laptop| Laptop weight 1.5kg | Battery Life: Up to 10 hours', 'laptop', 'student', 'general', 'mi', 'no', 'no', '', 48999, 2),
('L17', 'HP 15', 'products/hp2.JPG', '10th Gen Intel Core i3 15.6-inch FHD Laptop (i3-1005G1/8GB/1TB/Win 10/MS Office/Jet Black/1.85kg), 15q-ds3001TU', 'Processor: Intel Core i3-1005G1 (1.2 GHz base frequency, up to 3.4 GHz with Intel Turbo Boost Technology, 4 MB L3 cache, 2 cores) Memory:8 GB DDR4-2666 SDRAM (1 x 4 GB); Storage: 1 TB 5400 rpm SATA HDD Display: 39.62 cm (15.6\") diagonal, FHD (1920 x 1080), anti-glare, 220 nits, 45% NTSC 2 SuperSpeed USB Type-A 5Gbps signaling rate; 1 USB 2.0 Type-A; 1 HDMI 1.4b; 1 RJ-45; 1 AC smart pin; 1 headphone/microphone combo', 'laptop', 'office', 'general', 'HP', 'no', 'yes', '4% Cashback with Axis bank NEFT banking', 45699, 0),
('L18', 'Pavilion Gaming DK0268TX', 'products/hpg1.JPG', '15.6-inch Laptop (Core i5-9300H/8GB/512GB SSD/Windows 10 Home/4GB NVIDIA GeForce GTX 1650 Graphics), Shadow Black', 'Processor: Intel Core i5-9300H (2.4 GHz base frequency, up to 4.1 GHz with Intel Turbo Boost Technology, 8 MB L3 cache, 4 cores) Memory: 8 GB DDR4-2666 SDRAM (1 x 8 GB); Storage: 512 GB PCIe NVMe M.2 SSD Display: 15.6 Inch FHD IPS anti-glare micro-edge WLED-backlit, 250 nits, 45% NTSC (1920 x 1080) Graphics: NVIDIA GeForce GTX 1650 Graphics (4 GB GDDR5 dedicated) Operating System: Pre-loaded Windows 10 Home with lifetime validity In the box: Laptop with included battery and charger', 'laptop', 'leisure', 'nil', 'HP', 'yes', 'yes', '30 days return available', 81999, 5),
('L19', ' Pavilion Gaming', 'products/hpg2.JPG', 'DK0268TX 15.6-inch Laptop (Core i5-9300H/8GB/512GB SSD/Windows 10 Home/4GB NVIDIA GeForce GTX 1650 Graphics), Shadow Black', 'Processor: Intel Core i5-9300H (2.4 GHz base frequency, up to 4.1 GHz with Intel Turbo Boost Technology, 8 MB L3 cache, 4 cores) Memory: 8 GB DDR4-2666 SDRAM (1 x 8 GB); Storage: 512 GB PCIe NVMe M.2 SSD Display: 15.6 Inch FHD IPS anti-glare micro-edge WLED-backlit, 250 nits, 45% NTSC (1920 x 1080) Graphics: NVIDIA GeForce GTX 1650 Graphics (4 GB GDDR5 dedicated) Operating System: Pre-loaded Windows 10 Home with lifetime validity In the box: Laptop with included battery and charger', 'laptop', 'student', 'nil', 'HP', 'yes', 'no', '', 87999, 0),
('L2', 'G5 gaming', 'products/g5.JPG', 'AMD Ryzen 7 4800H, Webcam, RGB Backlit Keyboard, USB-C, HDMI, Nahimic 3D Audio, 6GB AMD Radeon RX 5600M, Win 10, 16GB RAM, 512GB PCIe SSD (2020 Model)', '16GB system memory for advanced multitasking, 512GB Solid State Drive save files fast and store more data Powerful AMD Radeon RX 5600M Graphics, AMD 3rd Generation Ryzen 7 4800 H Mobile Processors 15.6\" Full HD 120Hz Display, Virtual Reality Ready, Bluetooth, Wi-Fi 6 - Wireless AX1650, RGB Backlit Keyboard, Windows 10 Operating System Integrated Widescreen HD 720P Webcam with Dual Digital Microphone Array, Two Tuned Speakers with Nahimic 3D Audio for Gamers, Built-In Card Reader, Advanced Cooling 1 x USB 2.0 Type A Port, 1 x USB 3.0 Type A Port, 1 x USB 3.0 Type C Port, 1 x HDMI Output, Headphone Jack, No DVD', 'laptop', 'student', 'gaming', 'dell', 'yes', '', '', 99000, 0),
('L20', 'MacBook Pro Core i9', 'products/MAC2.JPG', '9th Gen - (16 GB/1 TB SSD/Mac OS Catalina/4 GB Graphics) MVVK2HN/A  (16 inch, Space Grey, 2 kg)', 'Light Laptop without Optical Disk Drive 16 inch Quad HD LED Backlit IPS Retina Display (500 nits Brightness, Wide Color (P3), True Tone Technology)', 'laptop', 'leisure', 'premium', 'apple', 'no', 'yes', '5% Cashback with ICICI NEFT banking', 212999, 5),
('L21', ' MacBook Pro Core i9', 'products/MAC3.JPG', '8th Gen - (16 GB/512 GB SSD/Mac OS Mojave/4 GB Graphics) MV912HN  (15.4 inch, Space Grey, 1.83 kg)', 'memory 8GB,4Gx1 + 4G onboard, DDR4, 2666MHz  harddrive 512GB M.2 PCIe NVMe Solid State Drive  color LCD Back Cover for Non-touch Display with Backlit Silver Keyboard- Platinum Silver (ICC)Includes 23.8\" Full HD Display Windows 10 Home 64-bit English + MS OFFICE, 2GB Graphics 1year Dell Warranty 10th Generation Intel Core i5-10210U Processor (6MB Cache, up to 1.6 GHz), 8GB, 8Gx1, DDR4, 2666MHz, 1TB 7200 RPM 2.5\" SATA Hard Drive+256GB m.2 PCIe NVMe Solid State Drive Dell Inspiron 5490 10th Generation Corei5-10210U 8GB RAM,1TB+256GB SSD,2GB Graphics 23.8\" FHD Windows 10 All in One Desktop PC AIO', 'laptop', 'leisure', 'premium', 'apple', 'no', 'no', '', 89599, 5),
('L22', 'MacBook Pro Core i9', 'products/MAC4.JPG', '9th Gen - (16 GB/1 TB SSD/Mac OS Catalina/4 GB Graphics) MVVM2HN/A  (16 inch, Silver, 2 kg)', 'Light Laptop without Optical Disk Drive 16 inch Quad HD LED Backlit IPS Retina Display (500 nits Brightness, Wide Color (P3), True Tone Technology)', 'laptop', 'student', 'premium', 'apple', 'no', 'no', '', 85000, 0),
('L23', 'MacBook Air', 'products/MAC5.JPG', '(13-inch, 8GB RAM, 128GB Storage, 1.8GHz Intel Core i5) - Silver', 'Dual-core 5th-generation Intel Core i5 processor Intel HD Graphics 6000 SSD storage 8GB memory Two USB 3 ports Thunderbolt 2 port SDXC port', 'laptop', 'student', 'premium', 'apple', 'no', 'no', 'nil', 54999, 0),
('L24', 'Notebook Horizon Edition 14', 'products/mi2.JPG', ' Horizon Edition 14 Intel Core i5-10210U 10th Gen Thin and Light Laptop(8GB/512GB SSD/Windows 10/Nvidia MX350 2GB Graphics/Grey/1.35Kg), XMA1904-AR+Webcam', 'Laptop Processor: 10th Gen Intel Core i5-10210U processor, 1.6 GHz base speed, 4.2 GHz max speed, 4 Cores, 8 threads Operating System in the laptop: Windows 10 Home operating system | Pre-installed software : Office 365 – one month Trial subscription Laptop Display: Horizon Display|14-Inch (1920X 1080 )Full HD Anti-Glare Screen, Nvidia MX350 2GB GDDR5 Graphics Memory Specs (Laptop): 8GB DDR4-2666MHz RAM and  Storage: 512 GB SSD Design and battery of Laptop: Robust metal body |Thin and light Laptop| Laptop weight 1.35kg | Battery Life: Up to 10 hours', 'laptop', 'leisure', 'general', 'mi', 'no', 'yes', '4% Cashback with Axis bank NEFT banking', 45899, 0),
('L25', ' Mi Notebook 14 Intel Core i5', 'products/mi3.JPG', ' Intel Core i5-10210U  10th Gen Thin and Light Laptop(8GB/512GB SSD/Windows 10/Intel UHD Graphics/Silver/1.5Kg), XMA1901-FA', 'Processor : 10th Gen Intel Core i5-10210U processor, 1.6 GHz base speed, 4.2 GHz max speed, 4 Cores, 8 threads Operating system : Windows 10 Home operating system Display: 14-Inch (1920X 1080 )Full HD Anti-Glare Screen, Intel UHD Graphics Memory : 8GB DDR4-2666MHz RAM and  Storage: 512 GB SSD', 'laptop', 'office', 'general', 'mi', 'no', 'no', '', 45699, 5),
('L26', 'Lenovo Yoga C640', 'products/lenovo2.JPG', '10th Gen Intel Core i5 13.3 inch Full HD IPS 2-in-1 Convertible Laptop (8GB/512GB SSD/Windows 10/MS Office 2019/Iron Grey/1.35Kg), 81UE0034IN', 'Processor: 10th Gen Intel Core i5 (i5-10210U) | Speed: 1.6 GHz (Base) - 4.2 GHz (Max) | 4 Cores | 6MB Cache OS: Pre-Loaded Windows 10 Home with Lifetime Validity Pre-Installed: MS Office Home and Student 2019 Memory and Storage: 8GB RAM DDR4, Upgradable up to 16GB | 512GB SSD Display: 13.3\" Full HD (1920x1080) | Anti-Glare | IPS Technology Design: Touchscreen | 1.69 cm Thin and 1.35 kg Light | Narrow Bezel | Battery Life: 18 Hours Camera (Built-in): HD 720p Camera with Privacy Shutter | Fixed Focus', 'laptop', 'student', '360d', 'lenovo', 'no', 'no', '', 56000, 5),
('L27', 'Inspiron 7570 ', 'products/dell7570.JPG', '15.6-inch FHD Display Laptop (Core i7/16GB/Win 10/4 NVIDIA Graphics/Silver)', '1.8GHz Intel Core i7 processor 16GB DDR4 RAM Hard drive 15.6-inch screen, NVIDIA GeForce MX150 4GB Graphics Win 10 operating system 2.00kg laptop', 'laptop', 'student', '180d', 'dell', 'no', 'yes', 'Partner OfferGST Invoice Available! Save More For Business Purchases', 98799, 5),
('L3', 'Macbook Air 2020', 'products/macbookair2020.JPG', 'MWTJ2HN/A Dual Core-10th Gen i3-1.1GHz, 8GB, 256GB SSD,33.78 cm (13.3 inch) Retina Display, Space Grey', '13.3-inch (Diagonal) LED-Backlit display 1.1 GHz Dual-Core Intel Core i3 processor MacOS Catalina operating system, stereo speakers 8 GB of 3733 MHz LPDDR4X onboard memory Intel Iris Plus graphics, True Tone technology Three-mic array with directional beamforming Wide stereo sound, Dolby Atmos playback 720p FaceTime HD Camera, Touch ID sensor Turbo Boost technology, 4 MB L3 cache memory Built-in 49.9 Watt‑Hour Lithium‑Polymer battery', 'laptop', 'leisure', 'premium', 'apple', 'no', 'yes', 'Buy 2 years Extended Warranty and get 10% discount on RCP value T&C Buy 4 years Extended Warranty and get 30% discount on RCP value T&C', 93000, 5),
('L4', 'Ideapad slim 3', 'products/lenovoideapadslim3.JPG', '10th Gen Intel Core i5 14 inch FHD Thin and Light Laptop (8GB/512GB/Windows 10/MS Office/Grey/1.6Kg), 81WD00AVIN', 'Processor: 10th Gen Intel Core i5 (i5-1035G1) | Speed: 1.0 GHz (Base) - 3.6 GHz (Max) | 4 Cores | 6MB Cache OS: Pre-Loaded Windows 10 Home with Lifetime Validity Pre-Installed: MS Office Home and Student 2019 Memory and Storage: 8GB RAM DDR4-2666 (4GB+4GB), Upgradable up to 12GB | 512GB SSD Display: 14\" Full HD (1920x1080) | Anti-Glare Design: 1.99 cm Thin and 1.6 kg Light | Narrow Bezel | Battery Life: 5 Hours | Rapid Charge (Up to 80% in 1 Hour) Camera (Built-in): 0.3 MP with Privacy Shutter | Fixed Focus | Integrated Dual Array Microphone', 'laptop', 'student', 'general', 'lenovo', 'no', 'yes', '', 27000, 7),
('L5', 'pavillion 360', 'products/hppavillion360.JPG', 'Touchscreen 2-in-1 FHD 14-inch Laptop (10th Gen Core i3-10110U/8GB/512GB SSD/Win 10/MS Office/Mineral Silver/1.58 kg), 14-dh1178tu', 'Processor: 10th Gen Intel Core i3-10110U (2.1 GHz base frequency, up to 4.1 GHz with Intel Turbo Boost Technology, 4 MB L3 cache, 2 cores) Operating System & Preinstalled Software: Windows 10 Home | Microsoft Office Home & Student 2019 | In the box: Laptop with included battery, charger Display: 14-Inch FHD (1920 x 1080), touch-enabled, IPS, edge-to-edge glass, micro-edge, 250 nits, 45% NTSC | Without Inking Pen Memory & Storage: 8GB DDR4, expandable upto 16 GB | 512GB PCIe NVMe M.2 SSD Graphics: Intel UHD Integrated Graphics', 'laptop', 'leisure', '360d', 'HP', 'no', 'yes', 'yes', 86000, 12),
('L6', 'Inspiron 14 5490 Laptop', 'products/insp5490.JPG', 'Online Price ₹ 64,989.99 ₹ 56,989.99 Price includes GST & delivery Delivery information processor 10th Generation Intel® Core™ i5-10210U Processor ', 'memory 8GB,4Gx1 + 4G onboard, DDR4, 2666MHz  harddrive 512GB M.2 PCIe NVMe Solid State Drive  color LCD Back Cover for Non-touch Display with Backlit Silver Keyboard- Platinum Silver (ICC)Includes 23.8\" Full HD Display Windows 10 Home 64-bit English + MS OFFICE, 2GB Graphics 1year Dell Warranty 10th Generation Intel Core i5-10210U Processor (6MB Cache, up to 1.6 GHz), 8GB, 8Gx1, DDR4, 2666MHz, 1TB 7200 RPM 2.5\" SATA Hard Drive+256GB m.2 PCIe NVMe Solid State Drive Dell Inspiron 5490 10th Generation Corei5-10210U 8GB RAM,1TB+256GB SSD,2GB Graphics 23.8\" FHD Windows 10 All in One Desktop PC AIO', 'laptop', 'office', 'general', 'dell', 'no', 'yes', '8% cashback on HDFC NEFT banking', 56989, 7),
('L7', 'Inspiron 3493', 'products/insp3493.JPG', '14-inch HD Thin & Light Laptop (10th Gen i3-1005G1/4GB/1TB HDD/Win 10 + MS Office/Intel HD Graphics/Silver) D560193WIN9SE', 'Processor:10th Generation Intel Core i3-1005G1 Processor (4MB Cache, up to 3.4 GHz) Memory & Storage:4 GB RAM Single Channel DDR4 2666 MHz | 1TB 5400 rpm 2.5\" SATA Hard Drive Display:14.0-inch HD (1366 x 768) Anti-Glare LED-Backlit WVA Display Graphics: Intel UHD Graphics with shared graphics memory Operating System & Software: Windows 10 Home Single Language | Microsoft Office Home and Student 2019 | McAfee Security Center 15 month subscription', 'laptop', 'office', 'general', 'dell', 'no', 'no', 'nil', 34580, 1),
('L8', 'ThinkPad E14', 'products/thinkpad.JPG', 'Intel Core i5 10th Gen 14-inch Full HD IPS Thin and Light Laptop (8GB RAM/ 1TB HDD + 128GB SSD/ Windows 10 Home', 'ThinkPad Reliability (12 Military Specifications Certified), Built to withstand rugged usage and can handle accidental knocks, drops, and even spills Processor: 10th Gen Intel Core i5-10210U processor, 1.6Ghz base speed, 4.2Ghz max speed, 4Cores, 6Mb Smart Cache Operating System: Pre-loaded Windows 10 Home with lifetime validity Display: 14-inch screen with (1920X1080) Full HD IPS Display, Anti Glare technology, 720p HD Camera with Thinkshutter, Connectivity: Intel AX201 11ax, 2x2 + BT5.0, Audio: Skype-certified mics and 2x 2W Harman speakers with Dolby Advanced Audio, Dual array microphone Memory: 8GB RAM, Storage: 1TB HDD + 128GB SSD', 'laptop', 'student', 'general', 'lenovo', 'no', 'no', '', 55990, 0),
('L9', 'Inspiron 3583 ', 'products/INSP3583.JPG', '5.6inch HD Laptop (Pentium Gold 5405U/4GB/1TB HDD/Win10 + MS Office/Intel UHD Graphics/ Silver) ', 'Processor:Intel Pentium Gold Processor 5405U (2MB Cache, 2.3 GHz) Memory & Storage:4GB, 4Gx1, DDR4, 2400MHz | 1TB 5400 rpm 2.5\" SATA Hard Drive Display:15.6-inch HD (1366 x 768) Anti-Glare LED-Backlit Non-touch Display Graphics:Intel UHD Graphics 610 with shared graphics memory Operating System & Software:Windows 10 Home Single Language | Microsoft Office Home and Student 2019 OthersEnglish International Standard keyboard | McAfee Security Center 15 month subscription |Dell Essential Carry Case', 'laptop', 'office', 'general', 'dell', 'no', 'no', '', 27000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `nod` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `password`, `email`, `phno`, `addr`, `otp`, `nod`) VALUES
(1, 'Ekamjit', 'ekamjit1', 'ekamjit105@gmail.com', '9717910332', 'ashok vihar', '339384', 9),
(2, 'farhaan', 'khan', 'fk@gmail.com', '9871366733', 'model town', '0', 1),
(3, 'saksham', 'gupta', 'saksham1010@gmail.com', '9818023453', 'budh vihar, new delhi', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `pid` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `gaming` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`pid`, `brand`, `pname`, `pimage`, `type`, `gaming`, `price`, `discount`, `uid`) VALUES
('L1', 'dell', 'G3 gaming', '', 'nil', 'yes', 92000, 0, 2),
('L2', 'dell', 'G5 gaming', '', 'nil', 'yes', 99000, 0, 2),
('L21', 'apple', ' MacBook Pro Core i9', 'products/MAC3.JPG', 'premium', 'no', 89599, 5, 3),
('L20', 'apple', 'MacBook Pro Core i9', 'products/MAC2.JPG', 'premium', 'no', 212999, 5, 1),
('L20', 'apple', 'MacBook Pro Core i9', 'products/MAC2.JPG', 'premium', 'no', 212999, 5, 3),
('L18', 'HP', 'Pavilion Gaming DK0268TX', 'products/hpg1.JPG', 'nil', 'yes', 81999, 5, 3),
('A14', 'apple', 'Storite PU Leather 14 inch Lap', 'products/bag2.JPG', 'bag', 'no', 1430, 0, 1),
('A5', 'HP', 'HP Black and Blue Neoprene Sle', 'products/hpacc1.JPG', 'cover', 'no', 1299, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
