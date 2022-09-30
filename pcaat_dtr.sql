-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 07:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcaat_dtr`
--

-- --------------------------------------------------------

--
-- Table structure for table `deduction_rates`
--

CREATE TABLE `deduction_rates` (
  `id` int(10) NOT NULL,
  `salary_range` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `taxcategory` varchar(10) NOT NULL,
  `sss` float NOT NULL,
  `philhealth` float NOT NULL,
  `wtax` float NOT NULL,
  `pagibig` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deduction_rates`
--

INSERT INTO `deduction_rates` (`id`, `salary_range`, `taxcategory`, `sss`, `philhealth`, `wtax`, `pagibig`) VALUES
(1, '18000', 'D', 0.03, 320, 0.12, 150),
(2, '20000', 'C', 0.03, 320, 0.12, 150),
(3, '24000', 'B', 0.03, 320, 0.12, 150);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(5) NOT NULL,
  `qr_code` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `emp_num` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `mname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `address` text COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `employment_status` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `sss` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `philhealth` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tin` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pagibig` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `taxcategory` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `salary` float NOT NULL,
  `photo` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `cnum` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `civil_status` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `qr_code`, `emp_num`, `fname`, `mname`, `lname`, `address`, `gender`, `employment_status`, `position`, `sss`, `philhealth`, `tin`, `pagibig`, `taxcategory`, `salary`, `photo`, `cnum`, `email`, `department`, `civil_status`) VALUES
(116, 'abegail.pasia@pcaat.edu.ph.png', '', 'ABEGAIL', '', 'PASIA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'pasia.webp', '', 'abegail.pasia@pcaat.edu.ph', 'FACULTY/TVL/PART-TIME', ''),
(117, 'adrian.magtoto@pcaat.edu.ph.png', '', 'ADRIAN ', 'D.', 'MAGTOTO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'magtoto.webp', '', 'adrian.magtoto@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(118, 'ailamarie.bata-anon@pcaat.edu.ph.png', '', 'AILA MARIE', '', 'BATA-ANON', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'bata-anon.webp', '', 'ailamarie.bata-anon@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(119, 'ailona.lumberio-lipt@pcaat.edu.ph.png', '', 'AILONA', ' L.', 'LIPIT', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'lipit.webp', '', 'ailona.lumberio-lipt@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(120, 'aireen.evangelista@pcaat.edu.ph.png', '', 'AIREEN', '', 'EVANGELISTA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'evangelista.webp', '', 'aireen.evangelista@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(121, 'alexander.parulan@pcaat.edu.ph.png', '', 'ALEXANDER DELFIN', '', 'PARULAN', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'parulan.webp', '', 'alexander.parulan@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(122, 'allysza.datu@pcaat.edu.ph.png', '', 'ALLYSZA', 'N.', 'DATU', '', 'Female', '', 'Executive Assistant', '', '', '', '', '', 0, '', '', 'allysza.datu@pcaat.edu.ph', 'Executive Assistant', ''),
(123, 'almhar.panelo@pcaat.edu.ph.png', '', 'ALMHAR ', 'D.', 'PANELO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'panelo.webp', '', 'almhar.panelo@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(124, 'alyssa.apdon@pcaat.edu.ph.png', '', 'ALYSSA MAE', '', 'APDON', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'apdon.webp', '', 'alyssa.apdon@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(125, 'amiel.narciso@pcaat.edu.ph.png', '', 'CHRISTIAN AMIEL', '', 'NARCISO', '', 'Male', '', 'Registrar Head', '', '', '', '', '', 0, 'narciso.webp', '', 'amiel.narciso@pcaat.edu.ph', 'REGISTRAR HEAD', ''),
(126, 'andrywin.maquinto@pcaat.edu.ph.png', '', 'ANDRYWIN', '', 'MAQUINTO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'maquinto.webp', '', 'andrywin.maquinto@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(127, 'angel.datu@pcaat.edu.ph.png', '', 'ANGEL', 'L.', 'DATU', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'angeldatu.webp', '', 'angel.datu@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(128, 'angelica.ilan@pcaat.edu.ph.png', '', 'ANGELICA', 'R.', 'ILAN', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'ilan.webp', '', 'angelica.ilan@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(129, 'angelo.cereno@pcaat.edu.ph.png', '', 'ANGELO ', 'O.', 'CERENO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'angelo.cereno@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(130, 'april.remigio@pcaat.edu.ph.png', '', 'APRIL', '', 'REMIGIO', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'remigio.webp', '', 'april.remigio@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(131, 'aries.sigue@pcaat.edu.ph.png', '', 'ARIES', '', 'SEGUI', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'aries.sigue@pcaat.edu.ph', 'Maintenance', ''),
(132, 'arnold.avellanoza@pcaat.edu.ph.png', '', 'ARNOLD', 'D.', 'AVELLANOZA', '', 'Male', '', 'Marketing Officer', '', '', '', '', '', 0, '', '', 'arnold.avellanoza@pcaat.edu.ph', 'Marketing Officer', ''),
(133, 'arvin.grino@pcaat.edu.ph.png', '', 'ARVIN', '', 'GRINO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'arvin.grino@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(134, 'basiliojr.amboya@pcaat.edu.ph.png', '', 'BASILIO', 'L.', 'AMBOYA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'basiliojr.amboya@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(135, 'bermin.capellan@pcaat.edu.ph.png', '', 'BERMIN', '', 'CAPELLAN', '', 'Female', '', 'Dept. Head B&S', '', '', '', '', '', 0, 'capellan.webp', '', 'bermin.capellan@pcaat.edu.ph', 'Dept. Head, Business and Sciences', ''),
(136, 'bryanboy.cortez@pcaat.edu.ph.png', '', 'BRYAN BOY', '', 'CORTEZ', '', 'Male', '', 'Librarian Consultant', '', '', '', '', '', 0, '', '', 'bryanboy.cortez@pcaat.edu.ph', 'LIBRARIAN CONSULTANT', ''),
(137, 'carissa.viduya@pcaat.edu.ph.png', '', 'CARISSA MAE', 'A.', 'VIDUYA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'viduya.webp', '', 'carissa.viduya@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(138, 'cherryrose.taguiam@pcaat.edu.ph.png', '', 'CHERRY ROSE', '', 'TAGUIAM', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'taguiam.webp', '', 'cherryrose.taguiam@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(139, 'chiara.datu@pcaat.edu.ph.png', '', 'CHIARA REINA', '', 'DATU', '', 'Female', '', 'PRESIDENT', '', '', '', '', '', 0, '', '', 'chiara.datu@pcaat.edu.ph', 'President', ''),
(140, 'christian.arellano@pcaat.edu.ph.png', '', 'CHRISTIAN', 'M.', 'ARELLANO', '', 'Male', '', 'OIC, PPF', '', '', '', '', '', 0, 'arellano.png', '', 'christian.arellano@pcaat.edu.ph', 'OIC, PPF', ''),
(141, 'christian.biando@pcaat.edu.ph.png', '', 'CHRISTIAN', 'S.', 'BIANDO', '', 'Male', '', 'HR Officer', '', '', '', '', '', 0, 'biando.webp', '', 'christian.biando@pcaat.edu.ph', 'HR Officer, HRDD', ''),
(142, 'clarissa.licuan@pcaat.edu.ph.png', '', 'CLARISSA', 'S.', 'LICUAN', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'licuan.webp', '', 'clarissa.licuan@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(143, 'crisanto.saunil@pcaat.edu.ph.png', '', 'CRISANTO ', 'C.', 'SAUNIL', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'saunil.webp', '', 'crisanto.saunil@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(144, 'dandy.bonete@pcaat.edu.ph.png', '', 'DANDY', 'MONTOYA', 'BONETE', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'bonete.webp', '', 'dandy.bonete@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(145, 'darmy.dejesus@pcaat.edu.ph.png', '', 'DARMY ', 'I.', 'DE JESUS', '', 'Male', '', 'Finance Director', '', '', '', '', '', 0, '', '', 'darmy.dejesus@pcaat.edu.ph', 'Director, Finance', ''),
(146, 'daryl.esquivel@pcaat.edu.ph.png', '', 'DARYL', '', 'ESQUIVEL', '', 'Male', '', 'HR Officer', '', '', '', '', '', 0, '', '', 'daryl.esquivel@pcaat.edu.ph', 'HR Officer, HRDD', ''),
(147, 'davette.garcia@pcaat.edu.ph.png', '', 'DAVETTE JOHANA', '', 'GARCIA', '', 'Female', '', 'Marketing', '', '', '', '', '', 0, '', '', 'davette.garcia@pcaat.edu.ph', 'Marketing', ''),
(148, 'david.montales@pcaat.edu.ph.png', '', 'DAVID', '', 'MONTALES', '', 'Male', '', '', '', '', '', '', '', 0, 'montales.webp', '', 'david.montales@pcaat.edu.ph', '', ''),
(149, 'demetrio.bacquillas@pcaat.edu.ph.png', '', 'DEMETRIO', '', 'BACQUILLAS', '', 'Male', '', 'Security Guard', '', '', '', '', '', 0, '', '', 'demetrio.bacquillas@pcaat.edu.ph', 'SECURITY GUARD', ''),
(150, 'dominico.orbillo@pcaat.edu.ph.png', '', 'DOMINICO MIGUEL', '', 'ORBILLO', '', 'Male', '', 'IT Staff', '', '', '', '', '', 0, 'orbillo.webp', '', 'dominico.orbillo@pcaat.edu.ph', 'Part time Faculty/ IT Staff', ''),
(151, 'edibiguez.topasi@pcaat.edu.ph.png', '', 'EDIBIGUEZ ', 'CARSELLAR', 'TOPASI', '', '', '', 'Technician/Driver', '', '', '', '', '', 0, '', '', 'edibiguez.topasi@pcaat.edu.ph', 'TECHNICIAN / DRIVER', ''),
(152, 'editha.jalandoni@pcaat.edu.ph.png', '', 'EDITHA', 'S.', 'JALANDONI', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'jalandoni.webp', '', 'editha.jalandoni@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(153, 'eduard.joseph@pcaat.edu.ph.png', '', 'EDUARD', '', 'JOSEPH', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'eduard.joseph@pcaat.edu.ph', 'Maintenance', ''),
(154, 'edward.caligner@pcaat.edu.ph.png', '', 'EDWARD YAHWEH', '', 'CALIGNER', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'caligner.webp', '', 'edward.caligner@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(155, 'elizabeth.rural@pcaat.edu.ph.png', '', 'ELIZABETH', '', 'RURAL', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'rural.webp', '', 'elizabeth.rural@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(156, 'elmerzon.pereira@pcaat.edu.ph.png', '', 'ELMERSON', 'L.', 'PEREIRA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'pereira.webp', '', 'elmerzon.pereira@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(157, 'eric.aguilar@pcaat.edu.ph.png', '', 'ERIC', '', 'AGUILAR', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'eric.aguilar@pcaat.edu.ph', 'Maintenance', ''),
(158, 'ferdie.resurreccion@pcaat.edu.ph.png', '', 'FERDIE', '', 'RESURRECCION', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, 'resurreccion.webp', '', 'ferdie.resurreccion@pcaat.edu.ph', 'Maintenance', ''),
(159, 'ferdinand.matos@pcaat.edu.ph.png', '', 'FERDINAND', '', 'MATOS', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'ferdinand.matos@pcaat.edu.ph', 'Maintenance', ''),
(160, 'filipina.garcia@pcaat.edu.ph.png', '', 'MA. FILIPINA', '', 'GARCIA', '', 'Female', '', 'Business Development Officer', '', '', '', '', '', 0, '', '', 'filipina.garcia@pcaat.edu.ph', 'Business Development Officer', ''),
(161, 'flordelyn.baclig@pcaat.edu.ph.png', '', 'FLORDELYN', '', 'BACLIG', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'baclig.webp', '', 'flordelyn.baclig@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(162, 'francia.paor@pcaat.edu.ph.png', '', 'FRANCIA', '', 'PAOR', '', 'Female', '', 'Auditor', '', '', '', '', '', 0, '', '', 'francia.paor@pcaat.edu.ph', 'Auditor', ''),
(163, 'francis.bartolome@pcaat.edu.ph.png', '', 'FRANCIS LOUIE', '', 'BARTOLOME', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'bartolome.webp', '', 'francis.bartolome@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(164, 'frederick.deliva@pcaat.edu.ph.png', '', 'FREDERICK', '', 'DELIVA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'deliva.webp', '', 'frederick.deliva@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(165, 'frishelle.gonzales@pcaat.edu.ph.png', '', 'FRISHELLE', 'M.', 'GONZALES', '', 'Female', '', 'HR Officer', '', '', '', '', '', 0, 'gonzales.webp', '', 'frishelle.gonzales@pcaat.edu.ph', 'HR Officer, HRDD', ''),
(166, 'garryl.marino@pcaat.edu.ph.png', '', 'GARRY', 'L.', 'MARINO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'garryl.marino@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(167, 'gerlie.diozon@pcaat.edu.ph.png', '', 'GERLIE', 'M.', 'DIOZON', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'diozon.webp', '', 'gerlie.diozon@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(168, 'grace.mores@pcaat.edu.ph.png', '', 'GRACE', '', 'MORES', '', 'Female', '', 'Medical Officer', '', '', '', '', '', 0, '', '', 'grace.mores@pcaat.edu.ph', 'MEDICAL AND DENTAL CLINIC', ''),
(169, 'herlynne.manaoat@pcaat.edu.ph.png', '', 'HERLYN GRACE', 'D.', 'MANAOAT', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'manaoat.webp', '', 'herlynne.manaoat@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(170, 'idel.datu@pcaat.edu.ph.png', '', 'IDELFONSO', 'L.', 'DATU', '', 'Male', '', 'VP for Admin and Finance', '', '', '', '', '', 0, 'ideldatu.webp', '', 'idel.datu@pcaat.edu.ph', 'Vice President for Administration and Finance', ''),
(171, 'iris.frani@pcaat.edu.ph.png', '', 'IRIS', '', 'FRANI', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'frani.webp', '', 'iris.frani@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(172, 'jake.leal@pcaat.edu.ph.png', '', 'JAKE ', 'B.', 'LEAL', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'leal.webp', '', 'jake.leal@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(173, 'jay.narag@pcaat.edu.ph.png', '', 'JAY', '', 'NARAG', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'narag.webp', '', 'jay.narag@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(174, 'jeanette.tusi@pcaat.edu.ph.png', '', 'JEANETTE', 'G.', 'TUSI', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'tusi.webp', '', 'jeanette.tusi@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(175, 'jimmy.matibag@pcaat.edu.ph.png', '', 'JAIME', 'S.', 'MATIBAG', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'jimmy.matibag@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(176, 'john.manandeg@pcaat.edu.ph.png', '', 'JOHN-JOHN ', 'F.', 'MANANDEG', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'manandeg.webp', '', 'john.manandeg@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(177, 'johnlouie.verzosa@pcaat.edu.ph.png', '', 'JOHN LOUIE', '', 'VERZOSA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'verzosa.webp', '', 'johnlouie.verzosa@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(178, 'jonvic.soto@pcaat.edu.ph.png', '', 'JON VIC', '', 'SOTO', '', 'Male', '', 'Student Affairs', '', '', '', '', '', 0, 'sotto.webp', '', 'jonvic.soto@pcaat.edu.ph', 'Student Affairs', ''),
(179, 'jordan.concepcion@pcaat.edu.ph.png', '', 'JORDAN', '', 'CONCEPCION', '', 'Male', '', 'Guidance Officer', '', '', '', '', '', 0, 'concepcion.webp', '', 'jordan.concepcion@pcaat.edu.ph', 'Guidance Officer', ''),
(180, 'jose.clemente@pcaat.edu.ph.png', '2021-096', 'JOSE ARIEL', 'P', 'CLEMENTE', 'Sta. Cruz, Manila', 'Male', '', 'IT Staff', '', '', '', '', 'B', 24000, 'clemente.webp', '', 'jose.clemente@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', 'SIngle'),
(181, 'josejoseph.cenete@pcaat.edu.ph.png', '', 'JOSE JOSEPH', '', 'CENETA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'cenete.webp', '', 'josejoseph.cenete@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(182, 'joydee.dayrit@pcaat.edu.ph.png', '', 'JOYDEE', '', 'DAYRIT', '', 'Male', '', 'Finance Staff', '', '', '', '', '', 0, '', '', 'joydee.dayrit@pcaat.edu.ph', 'Finance Staff', ''),
(183, 'judy.sibayan@pcaat.edu.ph.png', '', 'JUDY', 'G.', 'SIBAYAN', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'sibayan.webp', '', 'judy.sibayan@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(184, 'juliamhel.bacquillas@pcaat.edu.ph.png', '', 'JULIAMHEL', '', 'BACQUILLAS', '', 'Female', '', 'SAAS Staff', '', '', '', '', '', 0, '', '', 'juliamhel.bacquillas@pcaat.edu.ph', 'SAAS STAFF', ''),
(185, 'julie.flores@pcaat.edu.ph.png', '', 'JULIE ', 'ALBUERO', 'FLORES', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'flores.webp', '', 'julie.flores@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(186, 'julieann.aranes@pcaat.edu.ph.png', '', 'JULIE ANNA.', '', 'RANES', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'ranes.webp', '', 'julieann.aranes@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(187, 'juris.cayas@pcaat.edu.ph.png', '', 'JURIS', 'M.', 'CAYAS', '', 'Male', '', 'Disbursement Officer', '', '', '', '', '', 0, '', '', 'juris.cayas@pcaat.edu.ph', 'Disbursement Officer', ''),
(188, 'justine.nogaliza@pcaat.edu.ph.png', '', 'JUSTINE', '', 'NOGALIZA', '', 'Female', '', 'Dept. Head TVL', '', '', '', '', '', 0, 'nogaliza.webp', '', 'justine.nogaliza@pcaat.edu.ph', 'Dept. Head, TVL', ''),
(189, 'kathleen.umali-valenzuela@pcaat.edu.ph.png', '', 'KATHLEEN', '', 'VALENZUELA', '', 'Female', '', 'Guidance', '', '', '', '', '', 0, '', '', 'kathleen.umali-valenzuela@pcaat.edu.ph', 'GUIDANCE AND COUNSELING OFFICE', ''),
(190, 'khiaramae.fabula@pcaat.edu.ph.png', '', 'KHIARA MAY', '', 'FABULA', '', 'Female', '', 'Draftsman', '', '', '', '', '', 0, 'fabula.webp', '', 'khiaramae.fabula@pcaat.edu.ph', 'DRAFTSMAN (PART-TIME)', ''),
(191, 'kreiza.patolot@pcaat.edu.ph.png', '', 'MARIA KREIZA', '', 'PATOLOT', '', 'Female', '', 'General Accountant', '', '', '', '', '', 0, 'patolot.webp', '', 'kreiza.patolot@pcaat.edu.ph', 'General Accountant', ''),
(193, 'kyla.pastoral@pcaat.edu.ph.png', '', 'KYLA MARIE', '', 'PASTORAL', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'pastoral.webp', '', 'kyla.pastoral@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(194, 'leadanica.baloloy@pcaat.edu.ph.png', '', 'LEA DANICA', '', 'BALOLOY', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'baloloy.webp', '', 'leadanica.baloloy@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(195, 'lilliane.cui@pcaat.edu.ph.png', '', 'LILLIANE ANGELICA', '', 'CUI', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'cui.webp', '', 'lilliane.cui@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(196, 'lorna.candelario@pcaat.edu.ph.png', '', 'LORNA', '', 'CANDELARIO', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, '', '', 'lorna.candelario@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(197, 'louisajoyce.daulat@pcaat.edu.ph.png', '', 'LOUISA JOYCE', '', 'DAULAT', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, '', '', 'louisajoyce.daulat@pcaat.edu.ph', 'BUSINESS AND SCIENCE', ''),
(198, 'lovely.untal@pcaat.edu.ph.png', '', 'LOVELY MAY', '', 'UNTAL', '', 'Female', '', 'HR Assistant', '', '', '', '', '', 0, 'untal.webp', '', 'lovely.untal@pcaat.edu.ph', 'HR ASSISTANT, HRDD', ''),
(199, 'lyndon.mercado@pcaat.edu.ph.png', '', 'LYNDON', '', 'MERCADO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'mercado.webp', '', 'lyndon.mercado@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(200, 'macecilia.lim@pcaat.edu.ph.png', '', 'MA. CECILIA', '', 'LIM', '', 'Female', '', 'Treasurer', '', '', '', '', '', 0, 'lim.webp', '', 'macecilia.lim@pcaat.edu.ph', 'Treasurer', ''),
(201, 'mai.olaguer@pcaat.edu.ph.png', '', 'MAI NICOLE', 'R.', 'OLAGUER', '', 'Female', '', 'Asst. Principal', '', '', '', '', '', 0, 'olaguer.webp', '', 'mai.olaguer@pcaat.edu.ph', 'ASSISTANT PRINCIPAL', ''),
(202, 'marc.anastacio@pcaat.edu.ph.png', '', 'MARC NEIL', '', 'ANASTACIO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'anastacio.webp', '', 'marc.anastacio@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(203, 'mario.aviles@pcaat.edu.ph.png', '', 'MARIO', '', 'AVILES', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'aviles.webp', '', 'mario.aviles@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(204, 'mark.camacho@pcaat.edu.ph.png', '', 'MARK', '', 'CAMACHO', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'camacho.webp', '', 'mark.camacho@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(205, 'mark.elaba@pcaat.edu.ph.png', '', 'MARK', '', 'ELABA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'mark.elaba@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(206, 'marlon.canete@pcaat.edu.ph.png', '', 'MARLON', '', 'CANETE', '', 'Male', '', 'Maintenace', '', '', '', '', '', 0, '', '', 'marlon.canete@pcaat.edu.ph', 'Maintenance', ''),
(207, 'martin.ronald@pcaat.edu.ph.png', '', 'RONALD', '', 'MARTIN', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'martin.ronald@pcaat.edu.ph', 'Maintenance', ''),
(208, 'marvin.mabborang@pcaat.edu.ph.png', '', 'MARVIN ', 'P.', 'MABBORANG', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'mabborang.webp', '', 'marvin.mabborang@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(209, 'mary.recla@pcaat.edu.ph.png', '', 'MARY FLORILYN', '', 'RECLA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'recla.webp', '', 'mary.recla@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(210, 'maryjoy.pacistol@pcaat.edu.ph.png', '', 'MARY JOY', 'PACISTO', 'HIDALGO', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'pacistol.webp', '', 'maryjoy.pacistol@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(211, 'meka.ayeras@pcaat.edu.ph.png', '', 'MEKA JELLA', '', 'AYERAS', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'ayeras.webp', '', 'meka.ayeras@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(212, 'melody.delman@pcaat.edu.ph.png', '', 'MELODY', 'A.', 'DELMAN', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'delman.webp', '', 'melody.delman@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(213, 'merylou.sabusap@pcaat.edu.ph.png', '', 'MERYLOU', 'D.', 'SABUSAP', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'sabusap.webp', '', 'merylou.sabusap@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(214, 'michael.bartolome@pcaat.edu.ph.png', '', 'MICHAEL', '', 'BARTOLOME', '', 'Female', '', '', '', '', '', '', '', 0, 'bartolome_michael.webp', '', 'michael.bartolome@pcaat.edu.ph', 'Liaison', ''),
(215, 'michelle.fernandez@pcaat.edu.ph.png', '', 'MICHELLE MAE', '', 'FERNANDEZ', '', 'Female', '', 'IT Head', '', '', '', '', '', 0, 'fernandez.webp', '', 'michelle.fernandez@pcaat.edu.ph', 'IT HEAD', ''),
(216, 'milan.ricarte@pcaat.edu.ph.png', '', 'MILAN', '', 'RICARTE', '', 'Male', '', '', '', '', '', '', '', 0, '', '', 'milan.ricarte@pcaat.edu.ph', 'Maintenance', ''),
(217, 'nheladrian.tanola@pcaat.edu.ph.png', '', 'NHEL ADRIAN', '', 'TANOLA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'tanola.webp', '', 'nheladrian.tanola@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(218, 'nicolyn.gauran@pcaat.edu.ph.png', '', 'NICOLYN', 'NICOLYN', 'GAURAN', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'gauran.webp', '', 'nicolyn.gauran@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(219, 'nollie.buenaventura@pcaat.edu.ph.png', '', 'NOLLIE', 'E.', 'BUENAVENTURA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'buenaventura.webp', '', 'nollie.buenaventura@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(220, 'noreen.grino@pcaat.edu.ph.png', '', 'NOREEN', '', 'GRINO', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'grino.webp', '', 'noreen.grino@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(221, 'patrick.angeles@pcaat.edu.ph.png', '', 'PATRICK', '', 'ANGELES', '', 'Male', '', 'Marketing Officer', '', '', '', '', '', 0, '', '', 'patrick.angeles@pcaat.edu.ph', 'Marketing Officer', ''),
(222, 'patrick.elopre@pcaat.edu.ph.png', '', 'JOHN PATRICK', '', 'ELOPRE', '', 'Male', '', 'HS Principal', '', '', '', '', '', 0, 'elopre.webp', '', 'patrick.elopre@pcaat.edu.ph', 'High School Principal', ''),
(223, 'pearl.mariano@pcaat.edu.ph.png', '', 'PEARL ANGELETTE', '', 'MARIANO', '', 'Female', '', 'HRD Head', '', '', '', '', '', 0, 'pearlmariano.webp', '', 'pearl.mariano@pcaat.edu.ph', 'Head, HRD/ OIC, Marketing Director', ''),
(224, 'perlita.datu@pcaat.edu.ph.png', '', 'PERLITA', '', 'DATU', '', 'Female', '', 'Consultant', '', '', '', '', '', 0, '', '', 'perlita.datu@pcaat.edu.ph', 'Internal and External Consultant', ''),
(225, 'philip.baldera@pcaat.edu.ph.png', '', 'PHILIP', 'R.', 'BALDERA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'philip.baldera@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(226, 'phoebe.claros@pcaat.edu.ph.png', '', 'PHOEBE', '', 'CLAROS', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'claros.webp', '', 'phoebe.claros@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(227, 'princess.deguia@pcaat.edu.ph.png', '', 'PRINCESS DIANE', '', 'DE GUIA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'dequia.webp', '', 'princess.deguia@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(228, 'princesswarlene.moyo@pcaat.edu.ph.png', '', 'PRINCESS WARLENE', 'S.', 'MOYO', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'moyo.webp', '', 'princesswarlene.moyo@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(229, 'psalm.caguia@pcaat.edu.ph.png', '', 'PSALM', 'DANIEL', 'CAGUIA', '', 'Female', '', 'Registrar Staff', '', '', '', '', '', 0, 'caguia.webp', '', 'psalm.caguia@pcaat.edu.ph', 'Registrar staff', ''),
(230, 'rexel.reyes@pcaat.edu.ph.png', '2021-100', 'REXEL IAN', '', 'REYES', '', 'Male', '', 'IT Staff', '', '', '', '', '', 0, 'reyes.webp', '', 'rexel.reyes@pcaat.edu.ph', 'IT Staff', ''),
(231, 'reynante.binan@pcaat.edu.ph.png', '', 'REYNANTE', '', 'BINAN', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'reynante.binan@pcaat.edu.ph', 'Maintenance', ''),
(232, 'reyneth.matta@pcaat.edu.ph.png', '', 'REYNETH', 'P.', 'MATTA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'matta.webp', '', 'reyneth.matta@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(233, 'rezlie.lineses@pcaat.edu.ph.png', '', 'REZ', '', 'LINESES', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'lineses.webp', '', 'rezlie.lineses@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(234, 'rhette.catada@pcaat.edu.ph.png', '', 'RHETT RYAN', '', 'CATADA', '', 'Male', '', 'Guidance', '', '', '', '', '', 0, '', '', 'rhette.catada@pcaat.edu.ph', 'GUIDANCE AND COUNSELING OFFICE', ''),
(235, 'rhossmark.auman@pcaat.edu.ph.png', '', 'RHOSS MARK', '', 'AUMAN', '', 'Male', '', 'Maintenance', '', '', '', '', '', 0, '', '', 'rhossmark.auman@pcaat.edu.ph', 'Maintenance', ''),
(236, 'rickardo.santiago@pcaat.edu.ph.png', '', 'RICKARDO', '', 'SANTIAGO', '', 'Male', '', '', '', '', '', '', '', 0, '', '', 'rickardo.santiago@pcaat.edu.ph', 'REGISTRAR Staff', ''),
(237, 'robert.devera@pcaat.edu.ph.png', '', 'ROBERT JEROME', 'J.', 'DE VERA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'devera.webp', '', 'robert.devera@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(238, 'roceline.soriquez@pcaat.edu.ph.png', '', 'ROCELINE', 'P.', 'SORIQUEZ', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'soriquez.webp', '', 'roceline.soriquez@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(239, 'rochell.pana@pcaat.edu.ph.png', '', 'ROCHELLE ANN', '', 'PANA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'pana.webp', '', 'rochell.pana@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(240, 'roderick.bugnos@pcaat.edu.ph.png', '', 'RODERICK', 'A.', 'BUGNOS', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'bugnos.webp', '', 'roderick.bugnos@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(241, 'rodolfo.palatao@pcaat.edu.ph.png', '', 'RODOLFO PAUL', 'PALATAO', 'PALATAO', '', 'Male', '', 'Corporate Secretary', '', '', '', '', '', 0, '', '', 'rodolfo.palatao@pcaat.edu.ph', 'Corporate Secretary', ''),
(242, 'romanalexis.gumayagay@pcaat.edu.ph.png', '', 'ROMAN ALEXIS', 'V', 'GUMAYAGAY', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'romanalexis.gumayagay@pcaat.edu.ph', 'TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(243, 'romeo.tan@pcaat.edu.ph.png', '', 'ROMEO', 'O.', 'TAN', '', 'Male', '', 'Guidance', '', '', '', '', '', 0, 'tan.webp', '', 'romeo.tan@pcaat.edu.ph', 'GUIDANCE AND COUNSELING OFFICE', ''),
(244, 'romil.zamora@pcaat.edu.ph.png', '', 'ROMIL', 'J.', 'ZAMORA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'zamora.webp', '', 'romil.zamora@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(245, 'rowena.garcia@pcaat.edu.ph.png', '', 'ROWENA', '', 'GARCIA', '', 'Female', '', '', '', '', '', '', '', 0, '', '', 'rowena.garcia@pcaat.edu.ph', 'Part time, Registrar Staff', ''),
(246, 'ruben.delima@pcaat.edu.ph.png', '', 'RUBEN', 'M.', 'DE LIMA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, 'delima.webp', '', 'ruben.delima@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', ''),
(247, 'samclaudette.stateresa@pcaat.edu.ph.png', '', 'SAM CLAUDETTE', '', 'STA TERESA', '', 'Female', '', '', '', '', '', '', '', 0, 'stateresa.webp', '', 'samclaudette.stateresa@pcaat.edu.ph', '', ''),
(248, 'servando.cruz@pcaat.edu.ph.png', '', 'SERVANDO', '', 'CRUZ', '', 'Male', '', '', '', '', '', '', '', 0, 'cruz.webp', '', 'servando.cruz@pcaat.edu.ph', 'MARKETING OFFICER', ''),
(249, 'shai.deleon@pcaat.edu.ph.png', '', 'GLOLAND SHAI', '', 'DE LEON', '', 'Female', '', 'Registrar Staff', '', '', '', '', '', 0, 'deleon.webp', '', 'shai.deleon@pcaat.edu.ph', 'Registrar Staff', ''),
(250, 'sherina.villanueva@pcaat.edu.ph.png', '', 'SHERINA', '', 'VILLANUEVA', '', 'Female', '', 'Department Head', '', '', '', '', '', 0, 'villanueva.webp', '', 'sherina.villanueva@pcaat.edu.ph', 'Dep. Head, Language and Literature', ''),
(251, 'teofilo.norombaba@pcaat.edu.ph.png', '', 'TEOFILO', 'R.', 'NOROMBABA', '', 'Male', '', 'Faculty', '', '', '', '', '', 0, '', '', 'teofilo.norombaba@pcaat.edu.ph', 'FACULTY/LANGUAGES AND LITERATURE', ''),
(252, 'vanessamae.ojeda@pcaat.edu.ph.png', '', 'VANESSA MAE', '', 'OJEDA', '', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'ojeda.webp', '', 'vanessamae.ojeda@pcaat.edu.ph', 'FACULTY/RESEARCH AND SOCIAL SCIENCES', ''),
(253, 'wilbur.alvarez@pcaat.edu.ph.png', '', 'WILBUR', '', 'ALVAREZ', '', 'Male', '', '', '', '', '', '', '', 0, '', '', 'wilbur.alvarez@pcaat.edu.ph', 'GUIDANCE AND COUNSELING OFFICE', ''),
(254, 'zoren.valdisimo@pcaat.edu.ph.png', '', 'ZOREN', '', 'VALDISIMO', '', 'Mawle', '', 'Faculty', '', '', '', '', '', 0, '', '', 'zoren.valdisimo@pcaat.edu.ph', 'FACULTY/TECHNICAL-VOCATIONAL-LIVELIHOOD', ''),
(258, 'kristina.agpaoa@pcaat.edu.ph.png', '', 'KRISTINA ANGELICA', '', 'AGPAOA', 'Manila', 'Female', '', 'Faculty', '', '', '', '', '', 0, 'agpaoa.webp', '', 'kristina.agpaoa@pcaat.edu.ph', 'FACULTY/BUSINESS AND SCIENCE', '');

-- --------------------------------------------------------

--
-- Table structure for table `qr_codes`
--

CREATE TABLE `qr_codes` (
  `id` int(11) NOT NULL,
  `qr_code` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `qr_image` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `qr_codes`
--

INSERT INTO `qr_codes` (`id`, `qr_code`, `email`, `qr_image`) VALUES
(151, '', 'angelo.cereno@pcaat.edu.ph', 'angelo.cereno@pcaat.edu.ph.png'),
(47, '', 'meka.ayeras@pcaat.edu.ph', 'meka.ayeras@pcaat.edu.ph.png'),
(51, '', 'flordelyn.baclig@pcaat.edu.ph', 'flordelyn.baclig@pcaat.edu.ph.png'),
(49, '', 'christian.arellano@pcaat.edu.ph', 'christian.arellano@pcaat.edu.ph.png'),
(50, '', 'mario.aviles@pcaat.edu.ph', 'mario.aviles@pcaat.edu.ph.png'),
(48, '', 'alyssa.apdon@pcaat.edu.ph', 'alyssa.apdon@pcaat.edu.ph.png'),
(52, '', 'leadanica.baloloy@pcaat.edu.ph', 'leadanica.baloloy@pcaat.edu.ph.png'),
(184, '', 'kristina.agpaoa@pcaat.edu.ph', 'kristina.agpaoa@pcaat.edu.ph.png'),
(185, '', 'marc.anastacio@pcaat.edu.ph', 'marc.anastacio@pcaat.edu.ph.png'),
(53, '', 'francis.bartolome@pcaat.edu.ph', 'francis.bartolome@pcaat.edu.ph.png'),
(54, '', 'michael.bartolome@pcaat.edu.ph', 'michael.bartolome@pcaat.edu.ph.png'),
(55, '', 'ailamarie.bata-anon@pcaat.edu.ph', 'ailamarie.bata-anon@pcaat.edu.ph.png'),
(56, '', 'christian.biando@pcaat.edu.ph', 'christian.biando@pcaat.edu.ph.png'),
(57, '', 'dandy.bonete@pcaat.edu.ph', 'dandy.bonete@pcaat.edu.ph.png'),
(58, '', 'nollie.buenaventura@pcaat.edu.ph', 'nollie.buenaventura@pcaat.edu.ph.png'),
(59, '', 'roderick.bugnos@pcaat.edu.ph', 'roderick.bugnos@pcaat.edu.ph.png'),
(60, '', 'psalm.caguia@pcaat.edu.ph', 'psalm.caguia@pcaat.edu.ph.png'),
(61, '', 'edward.caligner@pcaat.edu.ph', 'edward.caligner@pcaat.edu.ph.png'),
(62, '', 'mark.camacho@pcaat.edu.ph', 'mark.camacho@pcaat.edu.ph.png'),
(63, '', 'bermin.capellan@pcaat.edu.ph', 'bermin.capellan@pcaat.edu.ph.png'),
(64, '', 'josejoseph.cenete@pcaat.edu.ph', 'josejoseph.cenete@pcaat.edu.ph.png'),
(65, '', 'phoebe.claros@pcaat.edu.ph', 'phoebe.claros@pcaat.edu.ph.png'),
(66, '', 'jose.clemente@pcaat.edu.ph', 'jose.clemente@pcaat.edu.ph.png'),
(67, '', 'jordan.concepcion@pcaat.edu.ph', 'jordan.concepcion@pcaat.edu.ph.png'),
(68, '', 'servando.cruz@pcaat.edu.ph', 'servando.cruz@pcaat.edu.ph.png'),
(69, '', 'lilliane.cui@pcaat.edu.ph', 'lilliane.cui@pcaat.edu.ph.png'),
(70, '', 'angel.datu@pcaat.edu.ph', 'angel.datu@pcaat.edu.ph.png'),
(71, '', 'idel.datu@pcaat.edu.ph', 'idel.datu@pcaat.edu.ph.png'),
(72, '', 'princess.deguia@pcaat.edu.ph', 'princess.deguia@pcaat.edu.ph.png'),
(73, '', 'shai.deleon@pcaat.edu.ph', 'shai.deleon@pcaat.edu.ph.png'),
(74, '', 'ruben.delima@pcaat.edu.ph', 'ruben.delima@pcaat.edu.ph.png'),
(75, '', 'robert.devera@pcaat.edu.ph', 'robert.devera@pcaat.edu.ph.png'),
(76, '', 'frederick.deliva@pcaat.edu.ph', 'frederick.deliva@pcaat.edu.ph.png'),
(77, '', 'melody.delman@pcaat.edu.ph', 'melody.delman@pcaat.edu.ph.png'),
(78, '', 'gerlie.diozon@pcaat.edu.ph', 'gerlie.diozon@pcaat.edu.ph.png'),
(79, '', 'patrick.elopre@pcaat.edu.ph', 'patrick.elopre@pcaat.edu.ph.png'),
(80, '', 'aireen.evangelista@pcaat.edu.ph', 'aireen.evangelista@pcaat.edu.ph.png'),
(81, '', 'khiaramae.fabula@pcaat.edu.ph', 'khiaramae.fabula@pcaat.edu.ph.png'),
(82, '', 'michelle.fernandez@pcaat.edu.ph', 'michelle.fernandez@pcaat.edu.ph.png'),
(83, '', 'julie.flores@pcaat.edu.ph', 'julie.flores@pcaat.edu.ph.png'),
(84, '', 'iris.frani@pcaat.edu.ph', 'iris.frani@pcaat.edu.ph.png'),
(85, '', 'nicolyn.gauran@pcaat.edu.ph', 'nicolyn.gauran@pcaat.edu.ph.png'),
(86, '', 'frishelle.gonzales@pcaat.edu.ph', 'frishelle.gonzales@pcaat.edu.ph.png'),
(87, '', 'noreen.grino@pcaat.edu.ph', 'noreen.grino@pcaat.edu.ph.png'),
(88, '', 'maryjoy.pacistol@pcaat.edu.ph', 'maryjoy.pacistol@pcaat.edu.ph.png'),
(89, '', 'angelica.ilan@pcaat.edu.ph', 'angelica.ilan@pcaat.edu.ph.png'),
(90, '', 'editha.jalandoni@pcaat.edu.ph', 'editha.jalandoni@pcaat.edu.ph.png'),
(91, '', 'jake.leal@pcaat.edu.ph', 'jake.leal@pcaat.edu.ph.png'),
(92, '', 'clarissa.licuan@pcaat.edu.ph', 'clarissa.licuan@pcaat.edu.ph.png'),
(93, '', 'macecilia.lim@pcaat.edu.ph', 'macecilia.lim@pcaat.edu.ph.png'),
(94, '', 'rezlie.lineses@pcaat.edu.ph', 'rezlie.lineses@pcaat.edu.ph.png'),
(95, '', 'ailona.lumberio-lipt@pcaat.edu.ph', 'ailona.lumberio-lipt@pcaat.edu.ph.png'),
(96, '', 'marvin.mabborang@pcaat.edu.ph', 'marvin.mabborang@pcaat.edu.ph.png'),
(97, '', 'adrian.magtoto@pcaat.edu.ph', 'adrian.magtoto@pcaat.edu.ph.png'),
(98, '', 'john.manandeg@pcaat.edu.ph', 'john.manandeg@pcaat.edu.ph.png'),
(99, '', 'herlynne.manaoat@pcaat.edu.ph', 'herlynne.manaoat@pcaat.edu.ph.png'),
(100, '', 'andrywin.maquinto@pcaat.edu.ph', 'andrywin.maquinto@pcaat.edu.ph.png'),
(101, '', 'pearl.mariano@pcaat.edu.ph', 'pearl.mariano@pcaat.edu.ph.png'),
(102, '', 'reyneth.matta@pcaat.edu.ph', 'reyneth.matta@pcaat.edu.ph.png'),
(103, '', 'lyndon.mercado@pcaat.edu.ph', 'lyndon.mercado@pcaat.edu.ph.png'),
(104, '', 'david.montales@pcaat.edu.ph', 'david.montales@pcaat.edu.ph.png'),
(105, '', 'princesswarlene.moyo@pcaat.edu.ph', 'princesswarlene.moyo@pcaat.edu.ph.png'),
(106, '', 'jay.narag@pcaat.edu.ph', 'jay.narag@pcaat.edu.ph.png'),
(107, '', 'amiel.narciso@pcaat.edu.ph', 'amiel.narciso@pcaat.edu.ph.png'),
(108, '', 'justine.nogaliza@pcaat.edu.ph', 'justine.nogaliza@pcaat.edu.ph.png'),
(109, '', 'vanessamae.ojeda@pcaat.edu.ph', 'vanessamae.ojeda@pcaat.edu.ph.png'),
(110, '', 'mai.olaguer@pcaat.edu.ph', 'mai.olaguer@pcaat.edu.ph.png'),
(111, '', 'dominico.orbillo@pcaat.edu.ph', 'dominico.orbillo@pcaat.edu.ph.png'),
(112, '', 'rochell.pana@pcaat.edu.ph', 'rochell.pana@pcaat.edu.ph.png'),
(113, '', 'almhar.panelo@pcaat.edu.ph', 'almhar.panelo@pcaat.edu.ph.png'),
(114, '', 'alexander.parulan@pcaat.edu.ph', 'alexander.parulan@pcaat.edu.ph.png'),
(115, '', 'abegail.pasia@pcaat.edu.ph', 'abegail.pasia@pcaat.edu.ph.png'),
(116, '', 'kyla.pastoral@pcaat.edu.ph', 'kyla.pastoral@pcaat.edu.ph.png'),
(117, '', 'kreiza.patolot@pcaat.edu.ph', 'kreiza.patolot@pcaat.edu.ph.png'),
(118, '', 'elmerzon.pereira@pcaat.edu.ph', 'elmerzon.pereira@pcaat.edu.ph.png'),
(119, '', 'julieann.aranes@pcaat.edu.ph', 'julieann.aranes@pcaat.edu.ph.png'),
(120, '', 'mary.recla@pcaat.edu.ph', 'mary.recla@pcaat.edu.ph.png'),
(121, '', 'april.remigio@pcaat.edu.ph', 'april.remigio@pcaat.edu.ph.png'),
(122, '', 'ferdie.resurreccion@pcaat.edu.ph', 'ferdie.resurreccion@pcaat.edu.ph.png'),
(123, '', 'rexel.reyes@pcaat.edu.ph', 'rexel.reyes@pcaat.edu.ph.png'),
(124, '', 'elizabeth.rural@pcaat.edu.ph', 'elizabeth.rural@pcaat.edu.ph.png'),
(125, '', 'merylou.sabusap@pcaat.edu.ph', 'merylou.sabusap@pcaat.edu.ph.png'),
(126, '', 'crisanto.saunil@pcaat.edu.ph', 'crisanto.saunil@pcaat.edu.ph.png'),
(127, '', 'judy.sibayan@pcaat.edu.ph', 'judy.sibayan@pcaat.edu.ph.png'),
(128, '', 'roceline.soriquez@pcaat.edu.ph', 'roceline.soriquez@pcaat.edu.ph.png'),
(129, '', 'jonvic.soto@pcaat.edu.ph', 'jonvic.soto@pcaat.edu.ph.png'),
(130, '', 'samclaudette.stateresa@pcaat.edu.ph', 'samclaudette.stateresa@pcaat.edu.ph.png'),
(131, '', 'cherryrose.taguiam@pcaat.edu.ph', 'cherryrose.taguiam@pcaat.edu.ph.png'),
(132, '', 'romeo.tan@pcaat.edu.ph', 'romeo.tan@pcaat.edu.ph.png'),
(133, '', 'nheladrian.tanola@pcaat.edu.ph', 'nheladrian.tanola@pcaat.edu.ph.png'),
(134, '', 'jeanette.tusi@pcaat.edu.ph', 'jeanette.tusi@pcaat.edu.ph.png'),
(135, '', 'lovely.untal@pcaat.edu.ph', 'lovely.untal@pcaat.edu.ph.png'),
(136, '', 'johnlouie.verzosa@pcaat.edu.ph', 'johnlouie.verzosa@pcaat.edu.ph.png'),
(137, '', 'carissa.viduya@pcaat.edu.ph', 'carissa.viduya@pcaat.edu.ph.png'),
(138, '', 'sherina.villanueva@pcaat.edu.ph', 'sherina.villanueva@pcaat.edu.ph.png'),
(139, '', 'romil.zamora@pcaat.edu.ph', 'romil.zamora@pcaat.edu.ph.png'),
(140, '', 'eric.aguilar@pcaat.edu.ph', 'eric.aguilar@pcaat.edu.ph.png'),
(141, '', 'wilbur.alvarez@pcaat.edu.ph', 'wilbur.alvarez@pcaat.edu.ph.png'),
(142, '', 'basiliojr.amboya@pcaat.edu.ph', 'basiliojr.amboya@pcaat.edu.ph.png'),
(143, '', 'rhossmark.auman@pcaat.edu.ph', 'rhossmark.auman@pcaat.edu.ph.png'),
(144, '', 'arnold.avellanoza@pcaat.edu.ph', 'arnold.avellanoza@pcaat.edu.ph.png'),
(145, '', 'patrick.angeles@pcaat.edu.ph', 'patrick.angeles@pcaat.edu.ph.png'),
(146, '', 'philip.baldera@pcaat.edu.ph', 'philip.baldera@pcaat.edu.ph.png'),
(147, '', 'juliamhel.bacquillas@pcaat.edu.ph', 'juliamhel.bacquillas@pcaat.edu.ph.png'),
(148, '', 'demetrio.bacquillas@pcaat.edu.ph', 'demetrio.bacquillas@pcaat.edu.ph.png'),
(149, '', 'reynante.binan@pcaat.edu.ph', 'reynante.binan@pcaat.edu.ph.png'),
(150, '', 'lorna.candelario@pcaat.edu.ph', 'lorna.candelario@pcaat.edu.ph.png'),
(152, '', 'marlon.canete@pcaat.edu.ph', 'marlon.canete@pcaat.edu.ph.png'),
(153, '', 'rhette.catada@pcaat.edu.ph', 'rhette.catada@pcaat.edu.ph.png'),
(154, '', 'juris.cayas@pcaat.edu.ph', 'juris.cayas@pcaat.edu.ph.png'),
(155, '', 'bryanboy.cortez@pcaat.edu.ph', 'bryanboy.cortez@pcaat.edu.ph.png'),
(156, '', 'allysza.datu@pcaat.edu.ph', 'allysza.datu@pcaat.edu.ph.png'),
(157, '', 'perlita.datu@pcaat.edu.ph', 'perlita.datu@pcaat.edu.ph.png'),
(158, '', 'chiara.datu@pcaat.edu.ph', 'chiara.datu@pcaat.edu.ph.png'),
(159, '', 'louisajoyce.daulat@pcaat.edu.ph', 'louisajoyce.daulat@pcaat.edu.ph.png'),
(160, '', 'darmy.dejesus@pcaat.edu.ph', 'darmy.dejesus@pcaat.edu.ph.png'),
(161, '', 'joydee.dayrit@pcaat.edu.ph', 'joydee.dayrit@pcaat.edu.ph.png'),
(162, '', 'daryl.esquivel@pcaat.edu.ph', 'daryl.esquivel@pcaat.edu.ph.png'),
(163, '', 'mark.elaba@pcaat.edu.ph', 'mark.elaba@pcaat.edu.ph.png'),
(164, '', 'filipina.garcia@pcaat.edu.ph', 'filipina.garcia@pcaat.edu.ph.png'),
(165, '', 'davette.garcia@pcaat.edu.ph', 'davette.garcia@pcaat.edu.ph.png'),
(166, '', 'rowena.garcia@pcaat.edu.ph', 'rowena.garcia@pcaat.edu.ph.png'),
(167, '', 'arvin.grino@pcaat.edu.ph', 'arvin.grino@pcaat.edu.ph.png'),
(168, '', 'romanalexis.gumayagay@pcaat.edu.ph', 'romanalexis.gumayagay@pcaat.edu.ph.png'),
(169, '', 'eduard.joseph@pcaat.edu.ph', 'eduard.joseph@pcaat.edu.ph.png'),
(170, '', 'garryl.marino@pcaat.edu.ph', 'garryl.marino@pcaat.edu.ph.png'),
(171, '', 'martin.ronald@pcaat.edu.ph', 'martin.ronald@pcaat.edu.ph.png'),
(172, '', 'jimmy.matibag@pcaat.edu.ph', 'jimmy.matibag@pcaat.edu.ph.png'),
(173, '', 'ferdinand.matos@pcaat.edu.ph', 'ferdinand.matos@pcaat.edu.ph.png'),
(174, '', 'grace.mores@pcaat.edu.ph', 'grace.mores@pcaat.edu.ph.png'),
(175, '', 'teofilo.norombaba@pcaat.edu.ph', 'teofilo.norombaba@pcaat.edu.ph.png'),
(176, '', 'rodolfo.palatao@pcaat.edu.ph', 'rodolfo.palatao@pcaat.edu.ph.png'),
(177, '', 'francia.paor@pcaat.edu.ph', 'francia.paor@pcaat.edu.ph.png'),
(178, '', 'milan.ricarte@pcaat.edu.ph', 'milan.ricarte@pcaat.edu.ph.png'),
(179, '', 'rickardo.santiago@pcaat.edu.ph', 'rickardo.santiago@pcaat.edu.ph.png'),
(180, '', 'aries.sigue@pcaat.edu.ph', 'aries.sigue@pcaat.edu.ph.png'),
(181, '', 'edibiguez.topasi@pcaat.edu.ph', 'edibiguez.topasi@pcaat.edu.ph.png'),
(182, '', 'zoren.valdisimo@pcaat.edu.ph', 'zoren.valdisimo@pcaat.edu.ph.png'),
(183, '', 'kathleen.umali-valenzuela@pcaat.edu.ph', 'kathleen.umali-valenzuela@pcaat.edu.ph.png');

-- --------------------------------------------------------

--
-- Table structure for table `timelogs`
--

CREATE TABLE `timelogs` (
  `id` int(5) NOT NULL,
  `qr_code` text COLLATE latin1_general_ci NOT NULL,
  `emp_num` varchar(180) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `mname` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `login_date` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `timein` varchar(19) COLLATE latin1_general_ci NOT NULL,
  `timeout` varchar(19) COLLATE latin1_general_ci NOT NULL,
  `day` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `status` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `timelogs`
--

INSERT INTO `timelogs` (`id`, `qr_code`, `emp_num`, `fname`, `mname`, `lname`, `login_date`, `timein`, `timeout`, `day`, `time_in`, `time_out`, `status`, `position`) VALUES
(108, '', '2021-097', 'Juana', 'L', 'Delos Santos', '03/24/2022', '07:33:17', '17:00:00', 'Wednesday', '2022-03-23 08:33:17', '2022-03-23 16:35:53', '', 'MIS Officer'),
(112, '', '2021-097', 'Juana', 'L', 'Delos Santos', '03/24/2022', '07:44:28', '17:05:00', 'Wednesday', '2022-03-23 08:44:28', '2022-03-23 16:44:28', '', 'MIS Officer'),
(97, '2021-096', '2021-096', 'Juan', '-', 'Dela Cruz', '03/24/2022', '09:03:52', '13:03:32', 'Wednesday', '2022-03-23 09:03:52', '2022-03-23 17:03:52', '', 'TVL Faculty'),
(105, '', '2021-089', 'John', 'P', 'Johnson', '03/24/2022', '09:03:52', '16:06:35', 'Wednesday', '2022-03-23 09:46:02', '2022-03-23 16:44:28', '', 'Registrar'),
(113, '', '2021-097', 'Juana', 'L', 'Delos Santos', '03/24/2022', '07:44:28', '', 'Wednesday', '2022-03-23 08:44:28', '2022-03-23 16:44:28', '', 'MIS Officer'),
(114, '2021-096', '2021-096', 'Juan', 'P', 'Dela Cruz', '03/24/2022', '08:04:25', '', 'Thursday', '2022-03-24 08:04:25', '0000-00-00 00:00:00', 'Valid', 'TVL Faculty'),
(120, '', '2021-089', 'John', 'P', 'Johnson', '03/23/2022', '11:03:20', '', 'Thursday', '2022-03-24 11:03:20', '0000-00-00 00:00:00', '', 'Registrar'),
(118, '', '2021-090', 'John', 'M', 'Smith', '03/24/2022', '', '', 'Thursday', '2022-03-24 10:56:26', '0000-00-00 00:00:00', 'Absent', 'Assistant Principal'),
(119, '', '2021-097', 'Juana', 'L', 'Delos Santos', '03/23/2022', '10:57:09', '', 'Thursday', '2022-03-24 10:57:09', '0000-00-00 00:00:00', '', 'MIS Officer'),
(121, '', '2021-096', 'Juan', 'P', 'Dela Cruz', '03/23/2022', '09:09:31', '', 'Monday', '2022-03-28 09:09:31', '0000-00-00 00:00:00', 'Valid', 'TVL Faculty'),
(139, '2021-096', '2021-096', 'Juan', 'P', 'Dela Cruz', '03/23/2022', '10:45:25', '', 'Tuesday', '2022-04-05 10:45:25', '0000-00-00 00:00:00', '', 'TVL Faculty'),
(140, '2021-096', '2021-096', 'Juan', 'P', 'Dela Cruz', '03/24/2022', '16:00:16', '', 'Wednesday', '2022-04-06 16:00:16', '0000-00-00 00:00:00', '', 'TVL Faculty'),
(141, '2021-096', '2021-096', 'Juan', 'P', 'Dela Cruz', '03/23/2022', '09:23:31', '', 'Tuesday', '2022-04-26 09:23:31', '0000-00-00 00:00:00', '', 'TVL Faculty'),
(142, '2021-096', '2021-096', 'Juan', 'P', 'Dela Cruz', '03/23/2022', '09:45:35', '13:17:02', 'Thursday', '2022-04-28 09:45:35', '2022-04-28 13:17:02', '', 'TVL Faculty'),
(153, 'angelica.ilan@pcaat.edu.ph', '2021-080', 'ANGELICA', 'R.', 'ILAN', '09/12/2022', '14:37:22', '', 'Monday', '2022-09-12 14:37:22', '0000-00-00 00:00:00', 'Valid', 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `time_logs_2`
--

CREATE TABLE `time_logs_2` (
  `id` int(4) NOT NULL,
  `qr_code` text NOT NULL,
  `emp_num` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `login_date` varchar(12) NOT NULL,
  `timein` varchar(19) NOT NULL,
  `timeout` varchar(19) NOT NULL,
  `day` varchar(10) NOT NULL,
  `time_in` varchar(16) NOT NULL,
  `time_out` varchar(16) NOT NULL,
  `status` varchar(10) NOT NULL,
  `position` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time_logs_2`
--

INSERT INTO `time_logs_2` (`id`, `qr_code`, `emp_num`, `fname`, `mname`, `lname`, `login_date`, `timein`, `timeout`, `day`, `time_in`, `time_out`, `status`, `position`) VALUES
(1, 'abegail.pasia@pcaat.edu.ph', '2021-098', 'Abegail', '', 'Pasia', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'MIS Officer'),
(2, 'jose.clemente@pcaat.edu.ph', '2021-096', 'Jose Ariel', '', 'Clemente', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'IT Officer'),
(3, 'ailona.lumberio-lipit@pcaat.edu.ph', '2021-089', 'Ailona', '', 'Lipit', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(4, 'rochelle.pana@pcaat.edu.ph', '2021-099', 'Rochelle', '', 'Pana', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(5, 'jose.clemente@pcaat.edu.ph', '2021-096', 'Jose Ariel', '', 'Clemente', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'IT Officer'),
(6, 'bermin.capellan@pcaat.edu.ph', '2021-008', 'Bermin', '', 'Capellan', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'HRD Officer'),
(7, 'michelle.fernandez@pcaat.edu.ph', '2021-009', 'Michelle', '', 'Fernandez', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Dept. Head - Miso'),
(8, 'judy.sibayan@pcaat.edu.ph', '2021-007', 'Judy', '', 'Sibayan', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(9, 'juliamhel.bacquillas@pcaat.edu.ph', '2021-006', 'Juliamhel', '', 'Baquillas', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Registrar'),
(10, 'mai.olaguer@pcaat.edu.ph', '2021-005', 'Mai', '', 'Olaguer', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Asst. Principal'),
(11, 'chiara.datu@pcaat.edu.ph', '2021-001', 'Chiara', '', 'Datu', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(12, 'idel.datu@pcaat.edu.ph', '2021-002', 'Idelfonso', '', 'Datu', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'VP for Admin and Finan'),
(13, 'ailamarie.bata-anon@pcaat.edu.ph', '2021-003', 'Aila Marie', '', 'Bata-anon', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(14, 'sherina.villanueva@pcaat.edu.ph', '2021-004', 'Sherina', '', 'Villanueva', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'OSA Dept.Head'),
(15, 'mai.olaguer@pcaat.edu.ph', '2021-005', 'Mai', '', 'Olaguer', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Asst. Principal'),
(16, 'roceline.soriquez@pcaat.edu.ph', '2021-011', 'Roceline', '', 'Soriquez', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(17, 'iris.frani@pcaat.edu.ph', '2021-012', 'Iris', '', 'Frani', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Dept. Head'),
(18, 'angelica.ilan@pcaat.edu.ph', '2021-013', 'Angelica', '', 'Ilan', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(19, 'arnold.avellanoza@pcaat.edu.ph', '2021-014', 'Arnold', '', 'Abellanoza', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Marketing Officer'),
(20, 'christian.arellano@pcaat.edu.ph', '2021-015', 'Christian', '', 'Arellano', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(21, 'carissa.viduya@pcaat.edu.ph', '2021-016', 'Carissa', '', 'Biduya', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(22, 'almar.panelo@pcaat.edu.ph', '2021-017', 'Almar', '', 'Panelo', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(23, 'kylamarie.pastoral@pcaat.edu.ph', '2021-018', 'Kyla Marie', '', 'Pastoral', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(24, 'mark.elaba@pcaat.edu.ph', '2021-019', 'Mark', '', 'Elaba', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(25, 'vanessa.ojeda@pcaat.edu.ph', '2021-020', 'Vanessa', '', 'Ojeda', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(26, 'shai.deleon@pcaat.edu.ph', '2021-021', 'Gloland Shai', '', 'De Leon', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(27, 'servando.cruz@pcaat.edu.ph', '2021-022', 'Servando', '', 'Cruz', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'OIC_PPF'),
(28, 'ruben.delima@pcaat.edu.ph', '2021-023', 'Ruben', '', 'De Lima', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(29, 'rexelian.reyes@pcaat.edu.ph', '2021-024', 'Rexel Ian', '', 'Reyes', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'IT Officer'),
(30, 'angel.datu@pcaat.edu.ph', '2021-025', 'Angel', '', 'Datu', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(31, 'rickardo.santiago@pcaat.edu.ph', '2021-026', 'Rickardo', '', 'Santiago', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(32, 'phoebe.claros@pcaat.edu.ph', '2021-027', 'Phobe', '', 'Claros', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(33, 'pearl.mariano@pcaat.edu.ph', '2021-028', 'Pearl Angelette', '', 'Mariano', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'HRD Head'),
(34, 'paslm.caguia@pcaat.edu.ph', '2021-029', 'Psalm', '', 'Caguia', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Registrar'),
(35, 'dandy.bonete@pcaat.edu.ph', '2021-030', 'Dandy', '', 'Bonete', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(36, '2021-031', '2021-031', 'Jose', '', 'Kabayan', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(37, 'robert.devera@pcaat.edu.ph', '2021-032', 'Robert Jerome', '', 'De Vera', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(38, 'davette.garcia@pcaat.edu.ph', '2021-033', 'Davette', '', 'Garcia', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(39, '2021-034', '2021-034', 'Ian', '', 'Ramos', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(40, 'aireen.evangelizta@pcaat.edu.ph', '2021-035', 'Aireen', '', 'Evangelista', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(41, 'eduard.joseph@pcaat.edu.ph', '2021-036', 'Eduard', '', 'Joseph', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Maintenance'),
(42, '2021-037', '2021-037', 'Danna', '', 'Rivera', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(43, 'aries.segui@pcaat.edu.ph', '2021-038', 'Aries', '', 'Segui', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Maintenance'),
(44, '2021-039', '2021-039', 'Crispin', '', 'Rizal', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(45, 'princess.deguia@pcaat.edu.ph', '2021-040', 'Princess', '', 'De Guia', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(46, 'divina.alar@pcaat.edu.ph', '2021-041', 'Divina', '', 'Alar', '3/21/2022', '09:03:52', '17:05:00', 'Monday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'HR Officer'),
(47, '2021-042', '2021-042', 'Dencio', '', 'Pablo', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(48, 'clarissa.licuan@pcaat.edu.ph', '2021-043', 'Clarissa', '', 'Licuan', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(49, '2021-044', '2021-044', 'Alyssa', '', 'Tatsing', '3/21/2022', '07:44:28', '17:05:00', 'Monday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty Lang. and Lit'),
(50, 'cherryrose.taguiam@pcaat.edu.ph', '2021-045', 'Cherry Rose', '', 'Taguiam', '3/21/2022', '08:04:25', '17:05:00', 'Monday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(51, 'rexelian.reyes@pcaat.edu.ph', '2021-024', 'Rexel Ian', '', 'Reyes', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'IT Officer'),
(52, 'ruben.delima@pcaat.edu.ph', '2021-023', 'Ruben', '', 'De Lima', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(53, 'christian.arellano@pcaat.edu.ph', '2021-015', 'Christian', '', 'Arellano', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(54, 'kylamarie.pastoral@pcaat.edu.ph', '2021-018', 'Kyla Marie', '', 'Pastoral', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(55, '2021-044', '2021-044', 'Alyssa', '', 'Tatsing', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty Lang. and Lit'),
(56, 'carissa.viduya@pcaat.edu.ph', '2021-016', 'Carissa', '', 'Biduya', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(57, 'paslm.caguia@pcaat.edu.ph', '2021-029', 'Psalm', '', 'Caguia', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Registrar'),
(58, 'aries.segui@pcaat.edu.ph', '2021-038', 'Aries', '', 'Segui', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Maintenance'),
(59, 'sherina.villanueva@pcaat.edu.ph', '2021-004', 'Sherina', '', 'Villanueva', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'OSA Dept.Head'),
(60, 'mai.olaguer@pcaat.edu.ph', '2021-005', 'Mai', '', 'Olaguer', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Asst. Principal'),
(61, 'mark.elaba@pcaat.edu.ph', '2021-019', 'Mark', '', 'Elaba', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(62, 'roceline.soriquez@pcaat.edu.ph', '2021-011', 'Roceline', '', 'Soriquez', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(63, 'arnold.avellanoza@pcaat.edu.ph', '2021-014', 'Arnold', '', 'Abellanoza', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Marketing Officer'),
(64, 'shai.deleon@pcaat.edu.ph', '2021-021', 'Gloland Shai', '', 'De Leon', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(65, '2021-039', '2021-039', 'Crispin', '', 'Rizal', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(66, 'eduard.joseph@pcaat.edu.ph', '2021-036', 'Eduard', '', 'Joseph', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Maintenance'),
(67, '2021-037', '2021-037', 'Danna', '', 'Rivera', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(68, '2021-042', '2021-042', 'Dencio', '', 'Pablo', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(69, 'pearl.mariano@pcaat.edu.ph', '2021-028', 'Pearl Angelette', '', 'Mariano', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'HRD Head'),
(70, 'judy.sibayan@pcaat.edu.ph', '2021-007', 'Judy', '', 'Sibayan', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(71, 'davette.garcia@pcaat.edu.ph', '2021-033', 'Davette', '', 'Garcia', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(72, 'rickardo.santiago@pcaat.edu.ph', '2021-026', 'Rickardo', '', 'Santiago', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(73, 'bermin.capellan@pcaat.edu.ph', '2021-008', 'Bermin', '', 'Capellan', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'HRD Officer'),
(74, '\r\niris.frani@pcaat.edu.ph', '2021-012', 'Iris', '', 'Frani', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Dept. Head'),
(75, 'phoebe.claros@pcaat.edu.ph', '2021-027', 'Phobe', '', 'Claros', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(76, '2021-034', '2021-034', 'Ian', '', 'Ramos', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(77, 'ailona.lumberio-lipit@pcaat.edu.ph', '2021-089', 'Ailona', '', 'Lipit', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(78, 'vanessa.ojeda@pcaat.edu.ph', '2021-020', 'Vanessa', '', 'Ojeda', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(79, '2021-031', '2021-031', 'Jose', '', 'Kabayan', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(80, 'jose.clemente@pcaat.edu.ph', '2021-096', 'Jose Ariel', '', 'Clemente', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'IT Officer'),
(81, 'rochelle.pana@pcaat.edu.ph', '2021-099', 'Rochelle', '', 'Pana', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(82, 'almar.panelo@pcaat.edu.ph', '2021-017', 'Almar', '', 'Panelo', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(83, 'princess.deguia@pcaat.edu.ph', '2021-040', 'Princess', '', 'De Guia', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(84, 'idel.datu@pcaat.edu.ph', '2021-002', 'Idelfonso', '', 'Datu', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'VP for Admin and Finan'),
(85, 'michelle.fernandez@pcaat.edu.ph', '2021-009', 'Michelle', '', 'Fernandez', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Dept. Head - Miso'),
(86, 'jose.clemente@pcaat.edu.ph', '2021-096', 'Jose Ariel', '', 'Clemente', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'IT Officer'),
(87, 'angel.datu@pcaat.edu.ph', '2021-025', 'Angel', '', 'Datu', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(88, 'robert.devera@pcaat.edu.ph', '2021-032', 'Robert Jerome', '', 'De Vera', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(89, 'divina.alar@pcaat.edu.ph', '2021-041', 'Divina', '', 'Alar', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'HR Officer'),
(90, 'juliamhel.bacquillas@pcaat.edu.ph', '2021-006', 'Juliamhel', '', 'Baquillas', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Registrar'),
(91, 'servando.cruz@pcaat.edu.ph', '2021-022', 'Servando', '', 'Cruz', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'OIC_PPF'),
(92, 'abegail.pasia@pcaat.edu.ph', '2021-098', 'Abegail', '', 'Pasia', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'MIS Officer'),
(93, 'clarissa.licuan@pcaat.edu.ph', '2021-043', 'Clarissa', '', 'Licuan', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(94, 'angelica.ilan@pcaat.edu.ph', '2021-013', 'Angelica', '', 'Ilan', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(95, 'cherryrose.taguiam@pcaat.edu.ph', '2021-045', 'Cherry Rose', '', 'Taguiam', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(96, 'mai.olaguer@pcaat.edu.ph', '2021-005', 'Mai', '', 'Olaguer', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Asst. Principal'),
(97, 'ailamarie.bata-anon@pcaat.edu.ph', '2021-003', 'Aila Marie', '', 'Bata-anon', '3/22/2022', '09:03:52', '17:05:00', 'Tuesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(98, 'chiara.datu@pcaat.edu.ph', '2021-001', 'Chiara', '', 'Datu', '3/22/2022', '07:44:28', '17:05:00', 'Tuesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(99, 'aireen.evangelizta@pcaat.edu.ph', '2021-035', 'Aireen', '', 'Evangelista', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(100, 'dandy.bonete@pcaat.edu.ph', '2021-030', 'Dandy', '', 'Bonete', '3/22/2022', '08:04:25', '17:05:00', 'Tuesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(101, 'chiara.datu@pcaat.edu.ph', '2021-001', 'Chiara', '', 'Datu', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(102, 'idel.datu@pcaat.edu.ph', '2021-002', 'Idelfonso', '', 'Datu', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'VP for Admin and Finan'),
(103, 'ailamarie.bata-anon@pcaat.edu.ph', '2021-003', 'Aila Marie', '', 'Bata-anon', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(104, 'sherina.villanueva@pcaat.edu.ph', '2021-004', 'Sherina', '', 'Villanueva', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'OSA Dept.Head'),
(105, 'mai.olaguer@pcaat.edu.ph', '2021-005', 'Mai', '', 'Olaguer', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Asst. Principal'),
(106, 'mai.olaguer@pcaat.edu.ph', '2021-005', 'Mai', '', 'Olaguer', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Asst. Principal'),
(107, 'juliamhel.bacquillas@pcaat.edu.ph', '2021-006', 'Juliamhel', '', 'Baquillas', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Registrar'),
(108, 'judy.sibayan@pcaat.edu.ph', '2021-007', 'Judy', '', 'Sibayan', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(109, 'bermin.capellan@pcaat.edu.ph', '2021-008', 'Bermin', '', 'Capellan', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'HRD Officer'),
(110, 'michelle.fernandez@pcaat.edu.ph', '2021-009', 'Michelle', '', 'Fernandez', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Dept. Head - Miso'),
(111, 'roceline.soriquez@pcaat.edu.ph', '2021-011', 'Roceline', '', 'Soriquez', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(112, '\r\niris.frani@pcaat.edu.ph', '2021-012', 'Iris', '', 'Frani', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Dept. Head'),
(113, 'angelica.ilan@pcaat.edu.ph', '2021-013', 'Angelica', '', 'Ilan', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(114, 'arnold.avellanoza@pcaat.edu.ph', '2021-014', 'Arnold', '', 'Abellanoza', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Marketing Officer'),
(115, 'christian.arellano@pcaat.edu.ph', '2021-015', 'Christian', '', 'Arellano', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(116, 'carissa.viduya@pcaat.edu.ph', '2021-016', 'Carissa', '', 'Biduya', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(117, 'almar.panelo@pcaat.edu.ph', '2021-017', 'Almar', '', 'Panelo', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(118, 'kylamarie.pastoral@pcaat.edu.ph', '2021-018', 'Kyla Marie', '', 'Pastoral', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(119, 'mark.elaba@pcaat.edu.ph', '2021-019', 'Mark', '', 'Elaba', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(120, 'vanessa.ojeda@pcaat.edu.ph', '2021-020', 'Vanessa', '', 'Ojeda', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(121, 'shai.deleon@pcaat.edu.ph', '2021-021', 'Gloland Shai', '', 'De Leon', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(122, 'servando.cruz@pcaat.edu.ph', '2021-022', 'Servando', '', 'Cruz', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'OIC_PPF'),
(123, 'ruben.delima@pcaat.edu.ph', '2021-023', 'Ruben', '', 'De Lima', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(124, 'rexelian.reyes@pcaat.edu.ph', '2021-024', 'Rexel Ian', '', 'Reyes', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'IT Officer'),
(125, 'angel.datu@pcaat.edu.ph', '2021-025', 'Angel', '', 'Datu', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(126, 'rickardo.santiago@pcaat.edu.ph', '2021-026', 'Rickardo', '', 'Santiago', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Registrar'),
(127, 'phoebe.claros@pcaat.edu.ph', '2021-027', 'Phobe', '', 'Claros', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(128, 'pearl.mariano@pcaat.edu.ph', '2021-028', 'Pearl Angelette', '', 'Mariano', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'HRD Head'),
(129, 'paslm.caguia@pcaat.edu.ph', '2021-029', 'Psalm', '', 'Caguia', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Registrar'),
(130, 'dandy.bonete@pcaat.edu.ph', '2021-030', 'Dandy', '', 'Bonete', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(131, '2021-031', '2021-031', 'Jose', '', 'Kabayan', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(132, 'robert.devera@pcaat.edu.ph', '2021-032', 'Robert Jerome', '', 'De Vera', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(133, 'davette.garcia@pcaat.edu.ph', '2021-033', 'Davette', '', 'Garcia', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(134, '2021-034', '2021-034', 'Ian', '', 'Ramos', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(135, 'aireen.evangelizta@pcaat.edu.ph', '2021-035', 'Aireen', '', 'Evangelista', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(136, 'eduard.joseph@pcaat.edu.ph', '2021-036', 'Eduard', '', 'Joseph', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Maintenance'),
(137, '2021-037', '2021-037', 'Danna', '', 'Rivera', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(138, 'aries.segui@pcaat.edu.ph', '2021-038', 'Aries', '', 'Segui', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Maintenance'),
(139, '2021-039', '2021-039', 'Crispin', '', 'Rizal', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'Faculty Busines & Scie'),
(140, 'princess.deguia@pcaat.edu.ph', '2021-040', 'Princess', '', 'De Guia', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(141, 'divina.alar@pcaat.edu.ph', '2021-041', 'Divina', '', 'Alar', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'HR Officer'),
(142, '2021-042', '2021-042', 'Dencio', '', 'Pablo', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty TVL'),
(143, 'clarissa.licuan@pcaat.edu.ph', '2021-043', 'Clarissa', '', 'Licuan', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(144, '2021-044', '2021-044', 'Alyssa', '', 'Tatsing', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty Lang. and Lit'),
(145, 'cherryrose.taguiam@pcaat.edu.ph', '2021-045', 'Cherry Rose', '', 'Taguiam', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'Faculty'),
(146, 'ailona.lumberio-lipit@pcaat.edu.ph', '2021-089', 'Ailona', '', 'Lipit', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:46 AM', '3/23/22 04:44 PM', '', 'Faculty'),
(147, 'jose.clemente@pcaat.edu.ph', '2021-096', 'Jose Ariel', '', 'Clemente', '3/23/2022', '09:03:52', '17:05:00', 'Wednesday', '3/23/22 09:03 AM', '3/23/22 05:03 PM', '', 'IT Officer'),
(148, 'jose.clemente@pcaat.edu.ph', '2021-096', 'Jose Ariel', '', 'Clemente', '3/23/2022', '08:04:25', '17:05:00', 'Wednesday', '3/24/22 08:04 AM', '3/23/22 05:03 PM', '', 'IT Officer'),
(149, 'abegail.pasia@pcaat.edu.ph', '2021-098', 'Abegail', '', 'Pasia', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 05:03 PM', '', 'MIS Officer'),
(150, 'rochelle.pana@pcaat.edu.ph', '2021-099', 'Rochelle', '', 'Pana', '3/23/2022', '07:44:28', '17:05:00', 'Wednesday', '3/23/22 08:44 AM', '3/23/22 04:44 PM', '', 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `qr_code` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `accesslevel` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `qr_code`, `username`, `password`, `accesslevel`) VALUES
(1, 'e6925663-6c8f-470c-9b98-77b17de6c7c1', '2021-096', 'hindikoalam', 'Admin'),
(2, '', '2021-097', 'dikorinalam', 'IT'),
(3, '', '2021-090', 'ewanko', 'Marketing'),
(4, '', '2021-089', 'ewankodin', 'Registrar'),
(7, '', 'noelpagtalunan33@gmail.com', 'pcaat12345', 'Employee'),
(8, '', 'jason@gmail.com', 'pcaat12345', 'Employee'),
(9, '', 'dominico@gmail.com', 'pcaat12345', 'Employee'),
(10, '', 'michellefernandez@gmail.com', 'pcaat12345', 'Employee'),
(12, '', 'juandelacruz@gmail.com', 'pcaat12345', 'Employee'),
(17, '', 'abegail.pasia@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(18, '', 'adrian.magtoto@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(19, '', 'ailamarie.bata-anon@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(20, '', 'ailona.lumberio-lipt@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(21, '', 'aireen.evangelista@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(22, '', 'alexander.parulan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(23, '', 'allysza.datu@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(24, '', 'almhar.panelo@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(25, '', 'alyssa.apdon@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(26, '', 'amiel.narciso@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(27, '', 'andrywin.maquinto@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(28, '', 'angel.datu@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(29, '', 'angelica.ilan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(30, '', 'angelo.cereno@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(31, '', 'april.remigio@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(32, '', 'aries.sigue@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(33, '', 'arnold.avellanoza@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(34, '', 'arvin.grino@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(35, '', 'basiliojr.amboya@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(36, '', 'bermin.capellan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(37, '', 'bryanboy.cortez@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(38, '', 'carissa.viduya@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(39, '', 'cherryrose.taguiam@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(40, '', 'chiara.datu@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(41, '', 'christian.arellano@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(42, '', 'christian.biando@pcaat.edu.ph', 'pcaat12345', 'Admin'),
(43, '', 'clarissa.licuan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(44, '', 'crisanto.saunil@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(45, '', 'dandy.bonete@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(46, '', 'darmy.dejesus@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(47, '', 'daryl.esquivel@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(48, '', 'davette.garcia@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(49, '', 'david.montales@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(50, '', 'demetrio.bacquillas@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(51, '', 'dominico.orbillo@pcaat.edu.ph', 'pcaat12345', 'Admin'),
(52, '', 'edibiguez.topasi@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(53, '', 'editha.jalandoni@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(54, '', 'eduard.joseph@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(55, '', 'edward.caligner@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(56, '', 'elizabeth.rural@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(57, '', 'elmerzon.pereira@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(58, '', 'eric.aguilar@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(59, '', 'ferdie.resurreccion@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(60, '', 'ferdinand.matos@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(61, '', 'filipina.garcia@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(62, '', 'flordelyn.baclig@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(63, '', 'francia.paor@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(64, '', 'francis.bartolome@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(65, '', 'frederick.deliva@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(66, '', 'frishelle.gonzales@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(67, '', 'garryl.marino@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(68, '', 'gerlie.diozon@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(69, '', 'grace.mores@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(70, '', 'herlynne.manaoat@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(71, '', 'idel.datu@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(72, '', 'iris.frani@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(73, '', 'jake.leal@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(74, '', 'jay.narag@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(75, '', 'jeanette.tusi@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(76, '', 'jimmy.matibag@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(77, '', 'john.manandeg@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(78, '', 'johnlouie.verzosa@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(79, '', 'jonvic.soto@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(80, '', 'jordan.concepcion@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(81, '', 'jose.clemente@pcaat.edu.ph', 'pcaat12345', 'Admin'),
(82, '', 'josejoseph.cenete@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(83, '', 'joydee.dayrit@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(84, '', 'judy.sibayan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(85, '', 'juliamhel.bacquillas@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(86, '', 'julie.flores@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(87, '', 'julieann.aranes@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(88, '', 'juris.cayas@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(89, '', 'justine.nogaliza@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(90, '', 'kathleen.umali-valenzuela@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(91, '', 'khiaramae.fabula@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(92, '', 'kreiza.patolot@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(93, '', 'kristina.agpaoa@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(94, '', 'kyla.pastoral@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(95, '', 'leadanica.baloloy@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(96, '', 'lilliane.cui@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(97, '', 'lorna.candelario@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(98, '', 'louisajoyce.daulat@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(99, '', 'lovely.untal@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(100, '', 'lyndon.mercado@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(101, '', 'macecilia.lim@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(102, '', 'mai.olaguer@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(103, '', 'marc.anastacio@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(104, '', 'mario.aviles@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(105, '', 'mark.camacho@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(106, '', 'mark.elaba@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(107, '', 'marlon.canete@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(108, '', 'martin.ronald@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(109, '', 'marvin.mabborang@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(110, '', 'mary.recla@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(111, '', 'maryjoy.pacistol@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(112, '', 'meka.ayeras@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(113, '', 'melody.delman@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(114, '', 'merylou.sabusap@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(115, '', 'michael.bartolome@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(116, '', 'michelle.fernandez@pcaat.edu.ph', 'pcaat12345', 'Admin'),
(117, '', 'milan.ricarte@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(118, '', 'nheladrian.tanola@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(119, '', 'nicolyn.gauran@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(120, '', 'nollie.buenaventura@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(121, '', 'noreen.grino@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(122, '', 'patrick.angeles@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(123, '', 'patrick.elopre@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(124, '', 'pearl.mariano@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(125, '', 'perlita.datu@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(126, '', 'philip.baldera@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(127, '', 'phoebe.claros@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(128, '', 'princess.deguia@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(129, '', 'princesswarlene.moyo@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(130, '', 'psalm.caguia@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(131, '', 'rexel.reyes@pcaat.edu.ph', 'pcaat12345', 'Admin'),
(132, '', 'reynante.binan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(133, '', 'reyneth.matta@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(134, '', 'rezlie.lineses@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(135, '', 'rhette.catada@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(136, '', 'rhossmark.auman@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(137, '', 'rickardo.santiago@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(138, '', 'robert.devera@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(139, '', 'roceline.soriquez@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(140, '', 'rochell.pana@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(141, '', 'roderick.bugnos@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(142, '', 'rodolfo.palatao@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(143, '', 'romanalexis.gumayagay@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(144, '', 'romeo.tan@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(145, '', 'romil.zamora@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(146, '', 'rowena.garcia@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(147, '', 'ruben.delima@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(148, '', 'samclaudette.stateresa@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(149, '', 'servando.cruz@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(150, '', 'shai.deleon@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(151, '', 'sherina.villanueva@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(152, '', 'teofilo.norombaba@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(153, '', 'vanessamae.ojeda@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(154, '', 'wilbur.alvarez@pcaat.edu.ph', 'pcaat12345', 'Employee'),
(155, '', 'zoren.valdisimo@pcaat.edu.ph', 'pcaat12345', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deduction_rates`
--
ALTER TABLE `deduction_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timelogs`
--
ALTER TABLE `timelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_logs_2`
--
ALTER TABLE `time_logs_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deduction_rates`
--
ALTER TABLE `deduction_rates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `timelogs`
--
ALTER TABLE `timelogs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `time_logs_2`
--
ALTER TABLE `time_logs_2`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
