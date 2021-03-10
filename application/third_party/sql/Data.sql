-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 mars 2021 à 15:16
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loca-auto`
--
CREATE DATABASE IF NOT EXISTS `loca-auto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loca-auto`;

--
-- Déchargement des données de la table `agency`
--

INSERT INTO `agency` (`agency_id`, `name`, `adress`, `zipCode`, `city`) VALUES
(1, 'Molestias numquam iure non deserunt odio.', '08010 Spencer Valley Apt. 123', '86840', 'New Jermaine'),
(2, 'Labore est error quia nihil quod laudantium.', '743 Erdman Trafficway Apt. 694', '99017', 'Nicolashaven'),
(3, 'Sint doloribus modi quod minima minus ad omnis velit.', '1499 Streich Mountain Apt. 189', '22436', 'Brainshire'),
(4, 'Autem id natus et libero.', '93519 Kertzmann Cove Suite 396', '93086', 'Gastonhaven');

--
-- Déchargement des données de la table `disponibility`
--

INSERT INTO `disponibility` (`dispo_id`, `designation`) VALUES
(1, 'louée'),
(2, 'révision'),
(3, 'accidentée'),
(4, 'disponible');

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`location_id`, `startedDate`, `mileageStart`, `expectedReturnDate`, `returnDate`, `mileageReturn`, `started`, `ended`, `agency_start`, `agency_return`, `plan_id`, `vehicule_id`, `user_id`) VALUES
(1, '2020-02-20 10:30:00', 17626, '2020-04-05 19:00:00', NULL, NULL, 1, 0, 4, 2, 1, 93, 50),
(2, '2016-09-06 09:00:00', 10063, '2016-09-14 09:00:00', '2016-09-14 01:01:15', 10200, 1, 1, 1, 2, 2, 67, 15),
(3, '2018-08-27 10:38:32', 4854, '2018-08-28 13:00:00', '2018-08-28 12:00:00', 5000, 1, 1, 2, 1, 4, 72, 43),
(4, '2020-12-03 14:00:00', 40264, '2020-12-03 14:00:00', '2020-12-03 14:56:40', 40270, 1, 1, 4, 3, 3, 69, 63),
(5, '2021-01-01 16:00:00', 48186, '2021-01-05 16:00:00', '2021-01-01 14:57:31', 48300, 1, 1, 1, 1, 2, 53, 87),
(6, '2021-03-09 12:50:00', 37956, '2021-03-18 12:50:00', NULL, NULL, 1, 0, 3, 2, 1, 33, 32),
(7, '2021-03-08 14:58:58', 27162, '2021-03-20 08:56:01', NULL, NULL, 1, 0, 3, 1, 4, 60, 17),
(8, '2020-11-21 20:02:08', 54635, '2020-11-22 10:00:00', '2020-11-22 10:00:00', 54698, 1, 1, 1, 3, 3, 44, 31),
(9, '2020-07-09 08:11:33', 67279, '2020-07-12 08:11:33', '2020-07-13 09:11:33', 67400, 1, 1, 3, 4, 3, 27, 50),
(10, '2021-02-02 11:21:54', 40162, '2021-02-20 15:01:10', '2021-02-20 09:53:01', 40312, 1, 1, 4, 1, 1, 39, 85);

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`marque_id`, `name`) VALUES
(1, 'Dacia'),
(2, 'Audi'),
(3, 'Renault'),
(4, 'Citroën'),
(5, 'Mercedes'),
(6, 'Fiat');

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`modele_id`, `name`, `consumption`, `marque_id`) VALUES
(1, 'Sandero', 4.43, 1),
(2, 'Class A', 3.6, 5),
(3, 'A1', 7.71, 2),
(4, '500', 8.09, 6),
(5, 'Laguna', 6.95, 3),
(6, 'A6', 8.35, 2),
(7, 'Punto 3', 8.11, 6),
(8, 'TT', 4.81, 2),
(9, 'Sandero option 2', 7.85, 1),
(10, 'Class B', 6.02, 5),
(11, 'Duster', 9.51, 1),
(12, 'C1', 7.19, 4),
(13, 'Duster', 6.33, 1),
(14, '124 spider', 4.03, 6),
(15, 'Zoé', 4.3, 3),
(16, 'zoé super', 5.44, 3),
(17, 'C3', 3.9, 4),
(18, '500 L', 3.2, 6),
(19, 'C5 Aircross', 5.48, 4),
(20, '500 L double', 4.19, 6),
(21, '500 2020', 6.12, 6),
(22, 'ullam', 6.68, 3),
(23, 'Class C', 5.54, 5),
(24, 'Viago', 4.51, 6),
(25, 'Class D', 3.45, 5),
(26, 'atque', 3.02, 6),
(27, 'reiciendis', 4.56, 5),
(28, 'autem', 5.49, 2),
(29, 'nulla', 5.49, 1),
(30, 'et', 3.79, 1);

--
-- Déchargement des données de la table `plan`
--

INSERT INTO `plan` (`plan_id`, `designation`, `price`, `pricePerKm`) VALUES
(1, '100', 69.6592, 0.71),
(2, '200', 86.8359, 0.8),
(3, '400', 134.9, 1.04),
(4, '500', 151.247, 1.93),
(5, '150', 71, 1.14);

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`type_id`, `name`, `pricePerDay`) VALUES
(1, 'sportive', 106.81),
(2, 'cabriolet', 155.45),
(3, 'suv', 96),
(4, 'citadine', 204.32),
(5, 'berline', 101.52),
(6, 'minivan', 69.83);

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `firstName`, `lastName`, `birthDate`, `address`, `zipCode`, `city`, `IdCard`, `driverLicense`, `avatar`, `email`, `password`, `archived`, `admin`) VALUES
(1, 'Lyda', 'Spinka', '1979-01-26', '70609 Jed Greens Suite 281', '91090', 'Port Rainaburgh', '4431774898474', '2194722313796', NULL, 'ahmad22@example.net', '4e8e58afd495bea1b88c1228b2a864c1af8eae3d', 0, NULL),
(2, 'Marcellus', 'Walsh', '1990-01-25', '175 Andreane Views Apt. 067', '28539', 'Mayertborough', '5288568060998760', '8011093896519', NULL, 'noemi.dibbert@example.org', '4fd8014f038da25128c1a373ff1703eab1d0dc96', 0, NULL),
(3, 'Marty', 'Maggio', '1992-11-06', '309 Marielle Ports', '05296', 'New Irving', '344559689969692', '9637019235911', NULL, 'ngerlach@example.net', '1306beb903c880831d8651d2b577f108bc0a1408', 0, NULL),
(4, 'Sim', 'Schumm', '1983-10-23', '45635 Wade Estates', '83848', 'East Esperanzaberg', '4929160498944', '8843943951457', NULL, 'tpaucek@example.org', '172146bfafbae30ec107e1e5114993801a0f1722', 0, NULL),
(5, 'Mozell', 'Feeney', '1985-10-31', '55937 Gutkowski Course Suite 576', '98016', 'West Demond', '6011688591388523', '3779345093042', NULL, 'uwillms@example.com', '1c6bc3edfa3893331c768144de58f36f281134b2', 0, NULL),
(6, 'Corrine', 'Lueilwitz', '1997-10-22', '10853 Jalen Plaza', '48653', 'West Earlene', '4024007114527', '8456462062759', NULL, 'camryn81@example.com', '42dedcab1b7d3e92ca46eae786e20b25e844ae3b', 0, NULL),
(7, 'Dominique', 'Feil', '1981-10-31', '189 Deckow Turnpike', '20123', 'Benfort', '5287053346151611', '4741673247113', NULL, 'madisyn05@example.com', '72d5739683c989ae0173356e4a47fa8b7e160daa', 0, NULL),
(8, 'May', 'Sporer', '1975-06-08', '364 Moore Forges Suite 250', '76910', 'South Margiechester', '341177864878167', '8481573188920', NULL, 'rickey01@example.com', 'd79f2c330bba908f7abcf8239eb5412007b49e7a', 0, NULL),
(9, 'Bernadine', 'Champlin', '1994-08-01', '456 Maynard Corner Apt. 397', '06357', 'Willardville', '5597510355219979', '3444911292289', NULL, 'tyundt@example.com', '8a47c75571af64a87cea183c8c549f35385f63a6', 0, NULL),
(10, 'Deontae', 'Bernier', '1978-10-21', '1708 Beahan Brook', '93246', 'West Meredithburgh', '4532233663983', '9830729887245', NULL, 'o\'connell.hollis@example.net', '5ff5c4692167d27da3faf60d6ce49ab40ba53eeb', 0, NULL),
(11, 'Susana', 'Bailey', '1978-12-15', '2412 Sally Haven Apt. 462', '00251', 'West Virgil', '5372111282250886', '5647822846031', NULL, 'gzieme@example.com', '9f87e75406f42bb5d6f22d1d76aea02d1e9c5ad1', 0, NULL),
(12, 'Leone', 'Senger', '1994-06-08', '5643 Gibson Fort', '74583', 'Lake Chesterfort', '347343711529710', '3833005613558', NULL, 'yundt.liliane@example.net', '42f87d374669baa2c200d5a6b55d529e2623fcca', 1, NULL),
(13, 'Linnie', 'Moen', '1989-02-02', '23666 Kerluke Shoal', '39683', 'Welchborough', '4532878176014', '2949587971984', NULL, 'dayana.wiegand@example.com', 'abf46aa4fe44653193074c76a33635b32fe97aff', 0, NULL),
(14, 'Mason', 'Satterfield', '1979-08-02', '273 Leffler Lane Suite 710', '72492', 'Sheilaborough', '5256298500870544', '7819653872253', NULL, 'ellie.kulas@example.net', '29d1933477c4f18ee0d004e80cc2530259b01e3e', 0, NULL),
(15, 'Brant', 'Harber', '1989-06-16', '148 McKenzie Forge Apt. 164', '84572', 'East Keithbury', '6011774262448652', '6557466833894', NULL, 'domenick.kutch@example.net', '7bb2b1ab2e38cdf35effb1c1006c1eca6b0ceab7', 0, NULL),
(16, 'Crystel', 'Emmerich', '1983-09-06', '5049 Reichert Light Apt. 362', '00146', 'Lake Eulalia', '5440183252361825', '3881567868312', NULL, 'joy.mann@example.com', 'a2f696151ac75127bd3b9958936fc2599a9edaa1', 0, NULL),
(17, 'Dax', 'Conroy', '1998-10-03', '53600 Yasmeen Ranch Apt. 403', '02764', 'New Darleneton', '6011215827822274', '8103726517424', NULL, 'myles.walker@example.com', 'b6671f2bccd1972c0d169f3350e53b408f4cb3a2', 0, NULL),
(18, 'Hilda', 'Strosin', '1971-11-30', '08738 Hettie Union Suite 300', '51541', 'South Camryn', '5341463575793985', '7806410080150', NULL, 'bernhard.darion@example.org', '1a0a51e7bde7715c2ce3a3c9b30b3a59c2c6a8aa', 0, NULL),
(19, 'Danyka', 'Gaylord', '1972-09-06', '22898 Fahey Plains', '30015', 'Joyfort', '5397876513359356', '0953692614133', NULL, 'luna.kling@example.com', 'cae3cc2008ea8169e74717240b1c87aac7ac91e7', 0, NULL),
(20, 'Fiona', 'Walter', '1990-06-18', '313 Nona Common', '06890', 'Reichelville', '4532522487764786', '8789049513147', NULL, 'merlin.rodriguez@example.net', '43c711a40fb6e04fce54d7980a66ee94733142df', 0, NULL),
(21, 'Althea', 'Lemke', '1975-08-03', '960 Kozey Vista', '52058', 'Effertzshire', '5524927523136044', '7341341742246', NULL, 'vfisher@example.com', '0f38a1862a011b0e7cc3a184f612a871b3f77d5e', 0, NULL),
(22, 'Adrian', 'Hayes', '1972-01-04', '9540 Randall Spurs Apt. 316', '96825', 'Schummburgh', '5422602383563794', '2152873375308', NULL, 'hickle.ocie@example.com', 'fbebe2d48ca7ac30cc8d46acdefbf8c68e3e8e74', 1, NULL),
(23, 'Audie', 'Aufderhar', '1990-01-26', '911 Cruickshank Stream Suite 712', '90337', 'New Teresa', '4929525276841996', '1443935493865', NULL, 'thompson.colten@example.org', 'bf64a12f2ffd1d873d33cdcd9de9bdb814e6bf6d', 0, NULL),
(24, 'Bryon', 'Murphy', '1987-09-16', '3833 Elouise Rue Apt. 265', '58132', 'O\'Connellborough', '4771684236426834', '7468567675124', NULL, 'ugislason@example.org', 'ff85ab45ca4514976a6addd7d738492a07d732b7', 0, NULL),
(25, 'Werner', 'Mueller', '1978-06-20', '372 Prohaska Lock Suite 476', '61305', 'East Eva', '6011899832672367', '5647126342451', NULL, 'dorothy90@example.org', '8dfe2460a51c3799271aae48d4090665eddbaa5c', 0, NULL),
(26, 'Vincenza', 'Quigley', '1993-08-15', '731 Bradley Shores', '41306', 'Ramonaport', '5153428455276077', '7441384593543', NULL, 'christine17@example.org', '2c686c43088a9f5d66bf00360562bb4d66f5285c', 0, NULL),
(27, 'Tomas', 'Shanahan', '1970-11-12', '43970 Augustus Rapids Suite 054', '91880', 'Wuckertbury', '5555917324921261', '1855131432416', NULL, 'mcdermott.adele@example.net', '54c1922fc39e6d5949e0034fbe03e829f78c0a0e', 0, NULL),
(28, 'Damien', 'Nitzsche', '1977-04-27', '9513 Cummerata Brooks Suite 178', '03852', 'South Erik', '4556704023363', '8983404327039', NULL, 'marvin.opal@example.net', 'c54f44ff6d2850d1503138c30cbc16e6a48d15d3', 0, NULL),
(29, 'Danika', 'Cummings', '1977-07-08', '82744 Zakary Ville Suite 588', '64711', 'Mantemouth', '4539443537579875', '5666801780241', NULL, 'treutel.breanne@example.net', 'eaa1270d9d82be96125d1ab56fcc0c2bf0d040e2', 0, NULL),
(30, 'Cydney', 'Robel', '1978-03-11', '781 Fritsch Well', '02813', 'New Robertville', '6011146395041601', '8212236349897', NULL, 'josephine74@example.com', 'a797dfef567973c0138b2ba620a9670a173fee36', 0, NULL),
(31, 'Demario', 'Pfannerstill', '1972-08-16', '22380 Grimes Alley', '29884', 'Auermouth', '4929969973893806', '6204197899872', NULL, 'eturcotte@example.net', '21593f1c613d17a98d82469b5ea2fb9c0a90daf6', 0, NULL),
(32, 'Edgar', 'Koelpin', '1987-08-26', '70737 Devon Square Apt. 833', '49447', 'Rutherfordside', '5107520006531173', '0807283721420', NULL, 'hackett.dana@example.org', '459a4454919470179de89a4e5d87f74ba2cb811c', 0, NULL),
(33, 'Burnice', 'Lynch', '1987-09-14', '67067 Waters Brook', '50633', 'Vincentfurt', '4539950652087', '2807554928594', NULL, 'willow.legros@example.com', '808bd979342ecaf9c6cde64f6558ff982ec687ab', 0, NULL),
(34, 'Ines', 'Beatty', '1989-06-20', '33420 Waelchi Mill Apt. 669', '11667', 'Thompsonshire', '4716793949527463', '3324106783306', NULL, 'ukshlerin@example.org', '2cd1699eb7f470142132237dbd26f62b375d44c7', 0, NULL),
(35, 'Malika', 'Hammes', '1989-06-23', '1495 Ralph Stream', '91283', 'New Cassandra', '340870611188247', '9329364836867', NULL, 'stracke.candace@example.net', '56a0318abb5085102833314c573e0b14f32af608', 0, NULL),
(36, 'Angie', 'Leffler', '1986-03-02', '1195 Bogisich Centers', '32105', 'Caseyhaven', '5337612008827605', '5650107949877', NULL, 'bell00@example.net', 'a152e958879a255c38825694bcaea3467f059a78', 0, NULL),
(37, 'Jada', 'Kshlerin', '1979-04-27', '1256 Stokes Tunnel', '69145', 'New Lavon', '4716924405433939', '5714894487957', NULL, 'tamara.smitham@example.net', '162f67d3819cc33334e6c1f03f04bf03f5a6063d', 0, NULL),
(38, 'Mabelle', 'Bruen', '1978-02-11', '1768 Barrows Fall', '12939', 'East Savion', '4522733234200', '8747034743832', NULL, 'koepp.alexandra@example.net', 'ae87f29ab2274263e96ca93886b8ace5c9e18d24', 0, NULL),
(39, 'Rhea', 'Rodriguez', '1977-05-29', '832 Dee Run', '87633', 'Schuppeton', '4929364823721682', '2012053492518', NULL, 'lola.witting@example.net', '0cebd5b192aa0569300959dea1f7821f7bc3e2c0', 0, NULL),
(40, 'Paxton', 'Schimmel', '1992-12-02', '00722 Georgiana Station Suite 379', '17802', 'Dylanmouth', '378824976638343', '4504897432433', NULL, 'cleo.o\'hara@example.com', '27f9e1f4ae5ae5a0dc28047d5598dd4d0549a47c', 0, NULL),
(41, 'Adrien', 'Buckridge', '1999-11-06', '160 D\'Amore Spring Suite 592', '74422', 'Aminaborough', '4024007112017199', '5788561607665', NULL, 'fred96@example.net', 'c980f49cb33a8985e3d2270e3927ff9c9893fdee', 0, NULL),
(42, 'Odie', 'Botsford', '1992-09-01', '9592 Britney Locks', '30583', 'Jasperland', '4265262783963213', '2066281504338', NULL, 'jerde.lulu@example.net', '4be6d3d41baaad1d5d387b59def8fcc5f65ca4b7', 0, NULL),
(43, 'Connor', 'Morissette', '1984-10-05', '8271 Skiles Locks', '82199', 'O\'Keefeport', '5183138646608339', '0518031779531', NULL, 'pgraham@example.org', 'c39da9f11d6783d1374ebf51be79b2c0bd662fd7', 0, NULL),
(44, 'Odessa', 'Altenwerth', '1986-04-24', '090 Bobby Pine', '88967', 'East Alvahside', '5165164621485907', '1053145359150', NULL, 'fhane@example.com', '5a8be07e0bfe96182acfde8f7a1362659172533a', 0, NULL),
(45, 'Wilton', 'Toy', '1999-03-29', '06334 Fay Skyway', '94897', 'Lake Selinaside', '5408940600559731', '6487998601794', NULL, 'karelle06@example.org', '2cd9b939201746bd9fafa9ad701f1c5f4a914665', 0, NULL),
(46, 'Kory', 'Orn', '1999-02-23', '042 Garry Crossroad Apt. 124', '21917', 'Bednarfurt', '5282669533164719', '5628290515810', NULL, 'ozella.cronin@example.net', 'de5adf41999fd8fa16358bdd6aebded27e85cfd1', 0, NULL),
(47, 'Devonte', 'Jacobs', '1983-09-20', '1022 Rowe Inlet Suite 701', '57079', 'Vincentfort', '5409381445450056', '9323432854678', NULL, 'jackie47@example.org', '7d6fb41f63e329512528b9e24d679f0aa6e8896d', 0, NULL),
(48, 'Carrie', 'Adams', '1973-03-16', '51296 Bergnaum Forges Apt. 171', '87104', 'Hermannhaven', '5298481776034347', '5946385370138', NULL, 'kreiger.kari@example.com', '839e8b75573d30ce2bb2758034bd6d03d6059a4a', 0, NULL),
(49, 'Andrew', 'Heller', '1973-05-11', '14406 Carlo Shoals Suite 444', '37351', 'West Lempi', '5316758583544836', '5933472483338', NULL, 'emelia.kertzmann@example.com', '5b50166468ff3b6c93cfebe959783427731c8077', 0, NULL),
(50, 'Sigmund', 'Doyle', '1999-08-21', '27095 Johathan Gardens Apt. 209', '29097', 'Wildermantown', '4539592566848342', '9575794256663', NULL, 'lucio.stracke@example.com', '509a21778f5e3fe7493324072d55dd8c446fb916', 0, NULL),
(51, 'Laura', 'Eichmann', '1992-11-11', '20704 Nathaniel Way', '23146', 'West Graysonbury', '5283568841859631', '5590216306355', NULL, 'ada.macejkovic@example.net', '44f14ce7984988afabaf007d025308a91cdafd6f', 0, NULL),
(52, 'Marie', 'Schoen', '1972-10-21', '860 Rau Track Apt. 470', '88252', 'Lake Eldora', '4670593606749', '8472933264569', NULL, 'noemi.zboncak@example.org', '8cf5f97772371c2d8490c5d229a3663d36c1a652', 0, NULL),
(53, 'Stewart', 'Purdy', '1987-11-04', '4857 Stark Forge Suite 479', '65763', 'Baumbachville', '6011435474401321', '8118541770084', NULL, 'lind.marie@example.net', '4c58ddd893b4ce1dc83f82bca784d2c01bb82917', 0, NULL),
(54, 'Clark', 'Prohaska', '1980-07-17', '502 Schinner Glens Suite 863', '74178', 'Port Leilatown', '4539330866464', '2232790177664', NULL, 'berge.grace@example.org', 'bb5df58d386f45e77832ceb308c460743826b145', 1, NULL),
(55, 'Maeve', 'Hackett', '1981-06-28', '83074 Funk Station', '05985', 'Lake Jesusburgh', '4916348990367', '7576220741274', NULL, 'fsawayn@example.com', '3f77419df0302bf07fda2884d67e2e1d1052fd4c', 0, NULL),
(56, 'Delilah', 'Bartoletti', '1990-08-10', '33901 Gudrun Trace', '34181', 'Rickyhaven', '4556747042067081', '5899422560941', NULL, 'ismael.von@example.org', '3e129431d08e46070c5e75832bdb9c640b101592', 0, NULL),
(57, 'Gabriella', 'Parisian', '1984-07-29', '610 Jefferey Haven Suite 289', '82727', 'Stiedemannfort', '4716468523946', '4936098479236', NULL, 'demarcus.gottlieb@example.net', '3b4cf882e08fac0e35ff7f21090d8a3abe6e01cd', 1, NULL),
(58, 'Sterling', 'Ward', '1970-10-01', '6840 Zetta Park', '32084', 'East Russel', '5373372757002487', '1379592648082', NULL, 'cgulgowski@example.com', 'ddf09c4a9e88e5953dbe6496a22e0ecfe0706046', 0, NULL),
(59, 'Mittie', 'Cole', '1992-12-27', '497 Stehr Court', '14790', 'Martinside', '4916157331878961', '9833676644510', NULL, 'cierra.thiel@example.net', '8c2b355c993e8ee5360ce37648378f119c4276f2', 0, NULL),
(60, 'Yvette', 'Corwin', '1997-03-22', '2948 Greta Center Suite 770', '07764', 'Steuberchester', '5591597146664172', '7836871698793', NULL, 'lavinia.blanda@example.com', '44e286d03dbfd06d41b9582d497723fab84a3d04', 1, NULL),
(61, 'Bettie', 'Rippin', '1991-01-12', '647 Batz Mountains', '62687', 'Hodkiewiczberg', '4716701936109', '9252046272038', NULL, 'dexter.jones@example.org', '63c10e79fa31d736a7baa00548d9665adc566d9d', 1, NULL),
(62, 'Arjun', 'Jenkins', '1982-09-26', '45131 Thea Brook', '33846', 'New Germaine', '5551482231720239', '4999855743414', NULL, 'sienna65@example.org', 'ea0f400ece11c30a437621af916612144de96173', 0, NULL),
(63, 'Terrance', 'Schoen', '1983-09-12', '98178 Krystina Stream', '37143', 'Howefurt', '6011911768392410', '1449438478163', NULL, 'ehickle@example.com', 'cdc458e89b10342088e885886f9962f12027b910', 0, NULL),
(64, 'Beverly', 'Thompson', '1991-12-21', '3936 Dedric Tunnel Suite 844', '92735', 'Port Norenefurt', '4485864841410391', '4395757375485', NULL, 'bbuckridge@example.net', '1dba90e5f759cb21eddc7e136d198c03def5eed1', 0, NULL),
(65, 'Keven', 'Gulgowski', '1976-11-21', '818 Ledner Glens Suite 112', '64342', 'New Isaac', '5362888492989568', '7251162127101', NULL, 'xframi@example.org', '6fb529818b5708b72dc977f4d21045d01ddf0c51', 0, NULL),
(66, 'Evie', 'Watsica', '1978-08-02', '9554 Chanelle Cove', '31170', 'Kutchfurt', '4532295574771', '1792547797343', NULL, 'therese.stamm@example.net', '85497b2235d542c78f19358cf7716b84dc05f8d5', 1, NULL),
(67, 'Sigrid', 'Hills', '1999-08-28', '9515 Elinor Rest', '49006', 'Hamillbury', '5170406453166324', '9599428544407', NULL, 'joshuah46@example.org', 'a88037918688bfa239e581e767d34fe71213400d', 0, NULL),
(68, 'Amanda', 'Schuppe', '1970-08-25', '394 Desmond Bypass Suite 872', '80201', 'Verniceshire', '343654447734322', '1594299560240', NULL, 'littel.lauryn@example.net', '42f96ac7f6bf249fbd2bd6d3c06a819c995cb6d8', 0, NULL),
(69, 'Novella', 'Turcotte', '1990-04-17', '90512 Dickens Fields', '09920', 'Torphytown', '344318660952214', '2976132864941', NULL, 'armand.abbott@example.org', 'd9cccb310aeba3f62dcd449d08944f1a15b934de', 0, NULL),
(70, 'Declan', 'Keebler', '1986-07-28', '29490 Oswald Ridges', '26905', 'Dachchester', '348663398274233', '3180211070874', NULL, 'kling.noelia@example.org', 'c4b6b0d3ad875e7193064d694369cdc6a7997c0e', 0, NULL),
(71, 'Andy', 'Jakubowski', '1970-04-11', '6730 Donnelly Ferry Apt. 965', '02532', 'Joseborough', '6011941901025855', '9130495765939', NULL, 'triston.blanda@example.org', '74b8f6db1f21279354b502c5238d855a8832605a', 0, NULL),
(72, 'Marianne', 'Orn', '1981-06-10', '0000 Daniel Square', '70117', 'Joanaton', '4024007170534223', '1784476186589', NULL, 'jeffery.pfannerstill@example.com', 'ac56befbccbf129758a295b287ee6656a957397b', 1, NULL),
(73, 'Alycia', 'Terry', '1983-02-12', '74387 Reilly Mission Apt. 333', '85715', 'Celestinemouth', '5417426963309758', '8627228097913', NULL, 'xpaucek@example.com', '416bf6dacac5f0e303b4bfd0ba92ec4a3aca36c0', 0, NULL),
(74, 'Montana', 'Farrell', '1980-10-20', '002 Maureen Summit', '66973', 'North Angela', '5235714891980025', '5666789660023', NULL, 'nestor38@example.net', '7887223fbc102be62d48fc250e3f53e85c93a160', 0, NULL),
(75, 'Stefan', 'Dickens', '1987-10-05', '6116 Agustin Vista', '84803', 'North Lucile', '4539966419004412', '9488115366074', NULL, 'loren.abernathy@example.com', '93fdf62041f74f75c7b56bf00faf45aac5dcd624', 0, NULL),
(76, 'Garry', 'Mann', '1977-01-24', '48726 Forest Harbors Apt. 552', '69607', 'New Dollystad', '6011646217483105', '0833071301703', NULL, 'libbie.effertz@example.org', 'bc94ca6b7141cf459c29c8281da1ff4afb0550d4', 1, NULL),
(77, 'Sandrine', 'Cummings', '1980-05-20', '276 Alexzander Glen', '09563', 'Rahsaanland', '4532853526452149', '5131293183912', NULL, 'dolores.abbott@example.com', '0a4ad6105f252cf4d4354090c9045f510cfb8e84', 0, NULL),
(78, 'Winnifred', 'Reinger', '1988-12-03', '7568 Treutel Islands Suite 898', '45401', 'North Gennaroburgh', '4591081924344799', '4661194068373', NULL, 'turner61@example.org', '121d9c033ab8597023eee59f4299d79167b11017', 0, NULL),
(79, 'Lina', 'Zulauf', '1973-05-12', '514 Jadyn Rapid', '50559', 'New Silasmouth', '5192839919904212', '7207549798556', NULL, 'crunolfsdottir@example.org', '988ef09cd9401aea0757bb6f2213c6d76392b73d', 0, NULL),
(80, 'Aubree', 'Macejkovic', '1995-09-17', '97177 Maribel Causeway Suite 276', '74438', 'Schaeferstad', '5151778055681824', '5026835255045', NULL, 'hullrich@example.com', 'da149e3d3b537a8c66fa3d184bcbb14f96dad70a', 0, NULL),
(81, 'Stefan', 'Cartwright', '1996-01-05', '9970 Vito Rapids', '08503', 'Flossietown', '4485365204787', '8310496140596', NULL, 'mmayert@example.com', 'cb54981c656b2d17a43507e0c4c2f7f22255005e', 0, NULL),
(82, 'Emmalee', 'Ernser', '1999-01-08', '9954 Lemke Cliff', '26776', 'Port Terence', '5241758623894557', '8865968880208', NULL, 'dooley.jorge@example.net', 'a40de96b122fdd11813c5b2018747a74eeb64d1f', 0, NULL),
(83, 'Johnathan', 'Macejkovic', '1975-01-16', '53609 Bauch Estate', '44107', 'New Josianne', '5507749538192336', '7811526481876', NULL, 'xskiles@example.net', 'caaa13153f65af8cb3189f5838555448615fe58d', 0, NULL),
(84, 'Joan', 'Stiedemann', '1987-03-09', '9980 Greta Avenue', '40148', 'Kautzerland', '5322471587580377', '7933613033840', NULL, 'mercedes91@example.net', 'dbaf77f0464c0e3fd36361c3015c017007224bd4', 0, NULL),
(85, 'Savanna', 'Thiel', '1996-06-20', '4891 Rowe Ways Apt. 573', '17388', 'Port Adeliafort', '5282244046742411', '0725269579998', NULL, 'rafael72@example.net', '7a6ab1b2a320993629adbc87e6ad3b82666b7506', 0, NULL),
(86, 'Jamaal', 'Streich', '1994-02-17', '053 Jacobs Square Suite 232', '25555', 'Port Julialand', '4916128619604', '0795268403266', NULL, 'will.avis@example.com', '0877579ef73f25e0c8ec7bb6d44bed0ab4d7978b', 0, NULL),
(87, 'Theresia', 'Howe', '1987-11-20', '897 Noble Port Apt. 257', '39912', 'Willybury', '5511686639039750', '2442979758458', NULL, 'mconnelly@example.com', '8c369dd40cb7f85ddf4b785f5bb47b5cd2aa1040', 0, NULL),
(88, 'Dion', 'Feeney', '1996-03-23', '730 Grant Vista', '02412', 'West Skylar', '5283577047945362', '5881115557772', NULL, 'harvey.sam@example.com', '4424b6a06d8aa4c714b3733337ca55702d1cf095', 0, NULL),
(89, 'Jamar', 'Keebler', '1989-09-05', '919 Brown Park Apt. 983', '22017', 'East Johathan', '4485861682368', '1141735009940', NULL, 'macie.rogahn@example.net', 'eccd05aa975fb00b80b080f96e089a9619d5f4c0', 0, NULL),
(90, 'Janelle', 'Tremblay', '1998-03-20', '76093 Eunice Road', '80980', 'North Antonina', '374218835279434', '5374526340342', NULL, 'elian.graham@example.com', 'f4cb35dac2b534f2b8ea674fb771a5ef6c939728', 0, NULL),
(91, 'Neal', 'Barton', '1984-11-19', '3431 Delphia Skyway Apt. 771', '02873', 'Walterview', '5391506116683252', '1906533063491', NULL, 'xmitchell@example.org', 'a7fa157e664c4085714510b43aef4213d75e0f37', 0, NULL),
(92, 'Kenny', 'Rosenbaum', '1976-02-14', '997 Norene Haven Apt. 867', '32487', 'Leolaport', '377197522485967', '8307258852385', NULL, 'stehr.terrell@example.com', '986114ffa9425393cea8f7d58f32875b7ae7c360', 0, NULL),
(93, 'Alvina', 'Keebler', '1993-12-07', '415 Kaelyn Crescent', '26636', 'Lelaside', '4716348328540', '0899972402116', NULL, 'bcorwin@example.org', '0abea4e2977589c2298a2d540609954b38d5ead1', 0, NULL),
(94, 'Kiarra', 'Schamberger', '1983-06-26', '771 Crist Crossroad Suite 718', '26614', 'Wizashire', '4929072216011687', '2496279693841', NULL, 'hermann.aida@example.com', '91a350dad88fd949f626af4db437e9852848b504', 0, NULL),
(95, 'Marta', 'Boyer', '1981-05-27', '2164 Block Heights Suite 789', '64679', 'Hiltonstad', '5591692244918859', '4388085600169', NULL, 'kassulke.elena@example.com', 'c50f725cd88b267e58c01e9c9628571e08e841a7', 0, NULL),
(96, 'Harmony', 'Barrows', '1989-10-01', '92191 Marks Alley', '47132', 'Leschville', '4529310415494', '4330472004357', NULL, 'boyd40@example.org', 'aed3c90c5085fff5c355ab4df4b33d35977efbbe', 0, NULL),
(97, 'Joey', 'Beahan', '1988-03-27', '1783 O\'Keefe Station', '79437', 'Lake Robyn', '5470414661139506', '3415974065196', NULL, 'eldridge92@example.com', '7bdd45727c17ff5148fe15c1ca21d54b8325e20e', 0, NULL),
(98, 'Hudson', 'Oberbrunner', '1996-02-06', '72889 Lockman Extensions Suite 017', '44651', 'Ondrickaville', '373122663642964', '8698481600615', NULL, 'oolson@example.org', '45290806626c40ec6aebf30fdd1ce23f5b535b32', 0, NULL),
(99, 'Rocio', 'Fritsch', '1984-04-04', '10517 Dudley Crescent Apt. 899', '70141', 'Port Sasha', '5421131471579481', '3200529088290', NULL, 'lempi.bailey@example.net', '83ea6878f3763b7f778e7e6e80c0a22c7afdd22a', 0, NULL),
(100, 'Zechariah', 'Schumm', '1975-05-08', '73536 Marcus Harbors Apt. 311', '20681', 'Port Adan', '5276543189220453', '9990602186343', NULL, 'cormier.terrell@example.org', '263f587745defbd8cb87b45f9ecc4ffe878b72e5', 0, NULL);

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`vehicule_id`, `numberPlate`, `doors`, `fuelType`, `mileage`, `horses`, `picture`, `productedYear`, `dispo_id`, `agency_id`, `type_id`, `modele_id`) VALUES
(1, '28617907', 5, 'Essence', 16205, 202, NULL, 1979, 4, 1, 4, 28),
(2, '18826500', 3, 'Diesel', 39251, 350, NULL, 1994, 3, 3, 1, 15),
(3, '36229147', 3, 'Electrique', 78023, 324, NULL, 1987, 4, 2, 1, 9),
(4, '64596440', 5, 'Essence', 33389, 86, NULL, 2003, 1, 1, 5, 28),
(5, '03995938', 5, 'Electrique', 45591, 287, NULL, 1980, 2, 4, 6, 10),
(6, '05568550', 3, 'GPL', 87375, 92, NULL, 1983, 1, 3, 1, 2),
(7, '38009341', 5, 'Electrique', 35031, 130, NULL, 1979, 2, 4, 4, 7),
(8, '21339745', 3, 'Electrique', 76181, 249, NULL, 2017, 2, 3, 5, 11),
(9, '49720877', 5, 'Diesel', 25886, 100, NULL, 2017, 3, 2, 2, 10),
(10, '58059487', 3, 'Essence', 1544, 139, NULL, 2019, 1, 2, 5, 29),
(11, '94440751', 3, 'GPL', 20167, 132, NULL, 1981, 3, 4, 2, 23),
(12, '61308275', 3, 'Electrique', 2474, 315, NULL, 1992, 1, 1, 5, 16),
(13, '75120863', 3, 'Diesel', 69411, 321, NULL, 2009, 4, 3, 5, 3),
(14, '65400777', 3, 'GPL', 51078, 217, NULL, 1980, 2, 4, 1, 19),
(15, '02895963', 5, 'Essence', 68848, 293, NULL, 1973, 3, 3, 6, 5),
(16, '54513945', 5, 'Diesel', 15138, 345, NULL, 1987, 2, 3, 3, 27),
(17, '64547992', 3, 'Electrique', 10826, 120, NULL, 2020, 1, 4, 2, 5),
(18, '25546958', 5, 'Electrique', 65181, 202, NULL, 1993, 1, 1, 1, 23),
(19, '65633489', 3, 'Diesel', 9410, 302, NULL, 2017, 4, 2, 4, 30),
(20, '28878667', 3, 'Essence', 82168, 260, NULL, 1972, 2, 1, 3, 11),
(21, '86963572', 5, 'Essence', 56804, 100, NULL, 1998, 4, 2, 3, 5),
(22, '07986987', 3, 'Electrique', 22942, 115, NULL, 2005, 1, 3, 5, 26),
(23, '11086178', 5, 'Electrique', 28827, 308, NULL, 1979, 2, 3, 6, 16),
(24, '45243769', 5, 'GPL', 80089, 259, NULL, 1989, 1, 2, 3, 7),
(25, '87556612', 5, 'GPL', 2372, 252, NULL, 1977, 1, 3, 3, 10),
(26, '56069143', 3, 'GPL', 72492, 249, NULL, 2016, 3, 2, 1, 16),
(27, '41373590', 3, 'Electrique', 1897, 251, NULL, 2000, 4, 3, 3, 6),
(28, '09050761', 3, 'Electrique', 26947, 276, NULL, 1988, 4, 4, 4, 19),
(29, '77610133', 3, 'Essence', 10852, 116, NULL, 1998, 2, 4, 5, 13),
(30, '24929240', 5, 'Diesel', 66357, 104, NULL, 1995, 3, 3, 2, 26),
(31, '11605966', 5, 'Essence', 64574, 119, NULL, 2017, 1, 2, 3, 10),
(32, '28084976', 3, 'Diesel', 58507, 231, NULL, 1993, 3, 4, 4, 30),
(33, '57372921', 5, 'Diesel', 82496, 337, NULL, 1992, 2, 4, 2, 29),
(34, '24066488', 3, 'Essence', 77813, 163, NULL, 1988, 2, 2, 3, 6),
(35, '82361389', 5, 'Essence', 71106, 287, NULL, 2010, 4, 4, 3, 22),
(36, '30060128', 5, 'Diesel', 32075, 69, NULL, 1996, 4, 4, 2, 7),
(37, '03947883', 3, 'Electrique', 80006, 244, NULL, 2013, 4, 1, 4, 14),
(38, '53702135', 3, 'Diesel', 88967, 277, NULL, 1976, 3, 4, 2, 21),
(39, '59866398', 5, 'Diesel', 72452, 326, NULL, 2004, 1, 3, 1, 27),
(40, '57659725', 3, 'Diesel', 65215, 103, NULL, 2009, 2, 3, 6, 23),
(41, '07039003', 5, 'Electrique', 33375, 348, NULL, 1992, 2, 1, 5, 24),
(42, '67705740', 5, 'Diesel', 26646, 271, NULL, 2009, 2, 1, 6, 14),
(43, '79414678', 3, 'Diesel', 70345, 250, NULL, 2018, 1, 2, 1, 4),
(44, '90610356', 5, 'Essence', 17350, 129, NULL, 2003, 1, 2, 3, 3),
(45, '06931186', 3, 'Diesel', 57848, 175, NULL, 1971, 3, 4, 4, 5),
(46, '12667147', 5, 'GPL', 11452, 196, NULL, 1983, 4, 4, 6, 1),
(47, '68145194', 3, 'GPL', 72295, 309, NULL, 1970, 2, 4, 6, 26),
(48, '65767801', 3, 'Diesel', 62772, 136, NULL, 1986, 2, 4, 4, 25),
(49, '74220458', 5, 'Essence', 28549, 140, NULL, 1976, 4, 2, 4, 12),
(50, '04371045', 3, 'Diesel', 60143, 166, NULL, 2011, 2, 3, 6, 20),
(51, '08760944', 3, 'Diesel', 16434, 195, NULL, 2013, 4, 1, 5, 2),
(52, '38984679', 5, 'Essence', 16935, 162, NULL, 1997, 2, 1, 1, 2),
(53, '49535099', 3, 'Diesel', 63955, 146, NULL, 2020, 1, 3, 2, 29),
(54, '31183383', 3, 'Electrique', 62282, 96, NULL, 2010, 2, 1, 6, 28),
(55, '17064019', 5, 'Electrique', 48592, 312, NULL, 1987, 4, 4, 5, 11),
(56, '02407135', 5, 'Essence', 89430, 73, NULL, 1992, 3, 2, 2, 16),
(57, '99057893', 5, 'Diesel', 59743, 140, NULL, 1988, 3, 4, 6, 3),
(58, '23504240', 5, 'Diesel', 89581, 250, NULL, 2005, 2, 3, 5, 6),
(59, '22704634', 3, 'Diesel', 44183, 123, NULL, 2005, 3, 2, 2, 8),
(60, '33175034', 3, 'Diesel', 22082, 318, NULL, 2015, 3, 2, 2, 20),
(61, '17035934', 5, 'Essence', 77809, 202, NULL, 1994, 1, 3, 4, 15),
(62, '40789040', 3, 'Essence', 77361, 72, NULL, 2002, 3, 3, 3, 16),
(63, '75496067', 3, 'Electrique', 69766, 295, NULL, 1994, 2, 1, 6, 1),
(64, '67180554', 3, 'GPL', 59889, 235, NULL, 1984, 2, 1, 4, 3),
(65, '35414087', 5, 'Electrique', 59542, 138, NULL, 2004, 4, 2, 2, 5),
(66, '64230962', 5, 'Diesel', 26759, 146, NULL, 1985, 1, 4, 3, 28),
(67, '67237456', 5, 'Electrique', 12022, 339, NULL, 2010, 2, 3, 1, 28),
(68, '80117308', 5, 'GPL', 88075, 247, NULL, 2003, 4, 2, 4, 28),
(69, '49373981', 5, 'Essence', 40866, 209, NULL, 1996, 4, 1, 3, 17),
(70, '66361480', 3, 'Essence', 75842, 267, NULL, 1990, 3, 4, 1, 3),
(71, '02708591', 3, 'GPL', 18529, 215, NULL, 1991, 4, 4, 1, 14),
(72, '85892477', 5, 'Diesel', 45001, 197, NULL, 2010, 1, 3, 4, 26),
(73, '33525822', 3, 'GPL', 78790, 131, NULL, 2001, 4, 3, 1, 5),
(74, '64363745', 3, 'GPL', 36734, 250, NULL, 2003, 3, 2, 1, 29),
(75, '63862379', 3, 'Diesel', 28674, 231, NULL, 2018, 4, 1, 6, 25),
(76, '68845568', 5, 'Diesel', 32740, 340, NULL, 1988, 3, 2, 5, 19),
(77, '26337364', 3, 'Diesel', 390, 326, NULL, 2016, 3, 1, 1, 8),
(78, '24753272', 5, 'Diesel', 42593, 124, NULL, 2005, 4, 1, 2, 28),
(79, '33625683', 3, 'Diesel', 81504, 134, NULL, 1990, 1, 2, 3, 6),
(80, '86053273', 5, 'Essence', 1340, 77, NULL, 2016, 4, 4, 1, 30),
(81, '55404310', 5, 'Essence', 12263, 286, NULL, 1978, 3, 1, 1, 6),
(82, '06041830', 5, 'Electrique', 63755, 288, NULL, 2010, 2, 1, 1, 9),
(83, '55056205', 3, 'Diesel', 74910, 313, NULL, 2011, 2, 1, 1, 2),
(84, '09097032', 3, 'Essence', 71576, 275, NULL, 1984, 2, 4, 4, 2),
(85, '77410689', 5, 'Diesel', 87243, 350, NULL, 2010, 1, 4, 2, 30),
(86, '32377217', 5, 'Electrique', 17898, 314, NULL, 1989, 1, 3, 6, 7),
(87, '55753968', 3, 'GPL', 63826, 222, NULL, 1997, 1, 1, 3, 1),
(88, '80353393', 3, 'Essence', 2692, 98, NULL, 2004, 1, 2, 6, 21),
(89, '50689101', 3, 'Diesel', 64739, 296, NULL, 1996, 2, 1, 6, 24),
(90, '78078932', 3, 'Electrique', 3217, 236, NULL, 1991, 2, 1, 1, 21),
(91, '21307447', 3, 'GPL', 65647, 61, NULL, 1984, 1, 1, 5, 17),
(92, '86852401', 3, 'GPL', 39464, 102, NULL, 2009, 1, 2, 4, 2),
(93, '98539987', 3, 'Essence', 65584, 73, NULL, 1980, 1, 4, 1, 9),
(94, '21827488', 3, 'Electrique', 87115, 231, NULL, 2000, 3, 4, 3, 18),
(95, '53393012', 3, 'Essence', 19244, 300, NULL, 1996, 1, 4, 4, 7),
(96, '68357542', 5, 'GPL', 25692, 196, NULL, 2016, 2, 3, 6, 22),
(97, '56055788', 3, 'Electrique', 47601, 289, NULL, 1992, 3, 4, 4, 30),
(98, '09630246', 5, 'GPL', 13415, 234, NULL, 2010, 4, 3, 4, 27),
(99, '06050108', 3, 'Essence', 33200, 257, NULL, 2016, 4, 2, 3, 24),
(100, '35758037', 5, 'Electrique', 84675, 95, NULL, 1987, 4, 1, 6, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
