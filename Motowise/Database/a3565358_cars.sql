
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2016 at 04:21 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a3565358_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `MODEL` varchar(30) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `PRICE` float NOT NULL,
  `FUEL` varchar(30) NOT NULL DEFAULT 'Petrol',
  `ENGINE_SIZE` float NOT NULL,
  `MILEAGE` float NOT NULL,
  `BODY` varchar(30) NOT NULL,
  `YEAR` int(11) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `IMG_ID` varchar(30) NOT NULL,
  `GEARBOX` varchar(20) NOT NULL DEFAULT 'Manual',
  `DOORS` int(11) NOT NULL,
  `ADD_INFO` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` VALUES('r8 v10 Spyder', 'Audi', 'C0001', 445.34, 'Petrol', 5.2, 7.8, 'Sports Car', 2015, 'New Delhi', 'audir8.jpg', 'S-Tronic', 2, 'The new R8 Spyder comes to market with the fabulous, naturally aspirated 5.2-liter V-10, rated at 540 horsepower and 398 lb-ft of torque. The high-revving engine can play the entire range from a dark growl to a piercing howl, and its soundtrack is no empty promise: From a standstill, 62 mph comes up in 3.6 seconds, according to Audi, and top speed is ungoverned at 198 mph. A seven-speed dual-clutch automatic channels the power to all four wheels—most of the time. The Quattro all-wheel-drive syst');
INSERT INTO `car_details` VALUES('SLS AMG', 'Mercedes-Benz', 'C0002', 678.9, 'Diesel', 6.2, 8, 'Coupe`', 2014, 'Banglore', 'benzamg.jpg', 'Automatic/Manual', 2, 'The Mercedes-Benz SLS AMG (C197 / R197) is a front-engine, 2-seater luxury, limited production supercar automobile developed by Mercedes-AMG of German automaker Mercedes-Benz and was the first Mercedes-Benz automobile designed in-house by AMG.[4] The car, which has gull-wing doors, was the successor to the Mercedes-Benz SLR McLaren and was described by Mercedes-Benz as a spiritual successor to the Mercedes-Benz 300SL Gullwing.[5] SLS stands for "Sport Leicht Super" (Sport Light Super). The Merce');
INSERT INTO `car_details` VALUES('S.p.A.', 'Ferrari', 'C0003', 150, 'Petrol', 1.5, 7.2, 'Sports Car', 2016, 'Mumbai', 'ferrarispa.jpg', 'Manual', 2, 'Ferrari S.p.A.  is an Italian sports car manufacturer based in Maranello. Founded by Enzo Ferrari in 1939 as Auto Avio Costruzioni, the company built its first car in 1940. However the company''s inception as an auto manufacturer is usually recognized in 1947, when the first Ferrari-badged car was completed.Ferrari is the world''s most powerful brand according to Brand Finance.In May 2012 the 1962 Ferrari 250 GTO became the most expensive car in history, selling in a private transaction for US$38.');
INSERT INTO `car_details` VALUES('Huayra', 'Pagani', 'C0004', 973.9, 'Petrol', 5.98, 5.1, 'Sports Car', 2012, 'New Delhi', 'paganih.jpg', 'Manual', 2, 'The Pagani Huayra is an Italian mid-engined sports car produced by Pagani. Succeeding the company''s previous offering, the Zonda, it costs €1,198,000 ($1,314,000), (£910,905). It is named after Huayra-tata, a Quechua wind god.[1][2] The Huayra was named "The Hypercar of the Year 2012" by Top Gear magazine and received a very positive review when tested by Richard Hammond on Top Gear. The Huayra was previously the fastest road car to go around the Top Gear Test Track, setting a time of 1:13.8, be');
INSERT INTO `car_details` VALUES('GT-R', 'Nissan', 'C0005', 73.37, 'Petrol', 3.8, 6.7, 'Subcompact Car', 2016, 'Banglore', 'nissangtr.jpg', 'Manual', 2, 'The Nissan GT-R is powered by the VR38DETT V6 engine, a 3,799 cc (3.8 L; 231.8 cu in) DOHC V6 with plasma transferred wire arc sprayed cylinder bores. Two parallel Ishikawajima-Harima Heavy Industries (IHI) turbochargers provide forced induction. Models manufactured between 2007 and 2010 produce a manufacturer-claimed engine output of 485 PS (357 kW; 478 hp) at 6400 rpm and 434 lb·ft (588 N·m) at 3200–5200 rpm.');
INSERT INTO `car_details` VALUES('Aventador', 'Lamborghini', 'C0006', 429, 'Petrol', 5.4, 16, 'Sports Cars', 2013, 'New Delhi', 'lamborghiniav', 'Automatic', 2, 'The Lamborghini Aventador is a mid-engined sports car produced by the Italian manufacturer Lamborghini.  Launched on 28 February 2011 at the Geneva Motor Show, five months after its initial unveiling in Sant''Agata Bolognese, the vehicle, internally codenamed LB834, was designed to replace the then-decade-old Murciélago as the new flagship model.Production will be limited to 4,000 vehicles (4,099 Murciélagos were built). The molds used to make the carbon-fibre monocoque are expected to last 500 m');
INSERT INTO `car_details` VALUES('V12', 'Ferrari', 'C0007', 409, 'Petrol', 6.22, 6.66, 'Sports Car', 2012, 'Mumbai', 'ferrariv12.jpg', 'Manual', 2, 'The Ferrari Colombo Engine was a 60° petrol fueled, water cooled, carburetted V12 designed by Gioacchino Colombo produced in numerous iterations by Italian automaker Ferrari between 1947 and 1988.  Colombo had formerly designed Alfa Romeos for Enzo Ferrari. These V12 powerplants ranged from the diminutive 1.5 L (1497 cc) unit fitted to the 125S to the 4.9 L (4943 cc) unit in the 1986 412i. Significant updates were made in 1963 for the 330 series featuring a redesigned block with wider bore spaci');
INSERT INTO `car_details` VALUES('Urus', 'Lamborghini', 'C0008', 500, 'Petrol', 4, 4, 'SUV', 2012, 'Banglore', 'urus.jpg', 'Manual', 4, 'The Lamborghini Urus is a concept SUV designed by Lamborghini and unveiled at the Beijing Auto Show on 23 April 2012. It is planned to be put on the market in 2017.The name comes from the urus, the ancestor of modern domestic cattle, also known as the aurochs.The Lamborghini Urus SUV concept would be much lighter than some other SUVs because of extensive usage of carbon-fiber-reinforced polymer, although it is based on the same platform as the Audi Q7, Bentley Bentayga, Porsche Cayenne, and Volk');
INSERT INTO `car_details` VALUES('M6', 'BMW', 'C0009', 176.9, 'Petrol', 5, 7.23, 'Coupe', 2015, 'New Delhi', 'm6.jpg', 'Manual', 2, 'The new model is based on the BMW F12/F13 and shares its 7-speed M-DCT gearbox, BMW S63 V8 engine and other technology with the BMW M5 (F10). The M6 coupé has a carbon-fiber roof and other weight saving measures, making it 20 kg (44 lb) lighter than the M5, however it is 140 kg (309 lb) heavier than the previous M6. The M6 convertible is 50 kg (110 lb) heavier than the previous M6 Convertible.  The official performance figures claim acceleration from 0–100 km/h (0–62 mph) in 4.2 seconds and an e');
