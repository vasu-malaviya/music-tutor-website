-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2021 at 02:55 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenvideo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl`
--

DROP TABLE IF EXISTS `acl`;
CREATE TABLE IF NOT EXISTS `acl` (
  `name` varchar(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `rent` varchar(20) NOT NULL,
  PRIMARY KEY (`name`,`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `psw`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `name` varchar(20) NOT NULL,
  `blog` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`name`, `blog`, `date`, `time`) VALUES
('Denny', 'Thanks for very good services.', '2019-01-19', '06:28:36am');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `cal_id` int(11) NOT NULL AUTO_INCREMENT,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `days` int(10) NOT NULL,
  `image_id` int(10) NOT NULL,
  PRIMARY KEY (`cal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`cal_id`, `start`, `end`, `days`, `image_id`) VALUES
(58, '2021-02-05', '2021-02-07', 2, 1),
(57, '2021-01-29', '2021-01-31', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `g_bassoon`
--

DROP TABLE IF EXISTS `g_bassoon`;
CREATE TABLE IF NOT EXISTS `g_bassoon` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_bassoon`
--

INSERT INTO `g_bassoon` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '9.jpg', 'Alvaro Pestana Diez', 'Hello, my name is Alvaro. I am a Spanish bassoonist, and I am very excited about being part of this wonderful project. Teaching has always been one of my dreams. I love playing, but the most important part lies in the art of pedagogy, how you interact, and create an excellent teacher-student relationship with your students through your thoughts. I have always had really good teachers, from whom I learned and continue learning a lot.\r\n<br></br>\r\n<b>Instrument: Bassoon </b>', 'Price: $300/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_cs`
--

DROP TABLE IF EXISTS `g_cs`;
CREATE TABLE IF NOT EXISTS `g_cs` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_cs`
--

INSERT INTO `g_cs` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '8.jpg', 'Alessandro Giovanetto', 'Whether you are a passionate cinephile curious to learn the practices of what is referred to as film scoring in the industry or you are a musician/composer wishing to expand your craft into a different creative and challenging environment or whether you are an aspiring film composer eager to learn about everything required to make it professionally, then I can help you offering my knowledge and experience.\r\n<br></br>\r\n<b>Instrument: Composition for Screen </b>', 'Price: $255/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_euphonium`
--

DROP TABLE IF EXISTS `g_euphonium`;
CREATE TABLE IF NOT EXISTS `g_euphonium` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_euphonium`
--

INSERT INTO `g_euphonium` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '7.jpg', 'Bente Illevold', 'Bente Illevold comes from Rendalen, Osterdalen in Norway, and plays the euphonium. Over the past few years, she has left her mark as an innovative performer and has gained recognition for her performances of several new works for the instrument, both at home and abroad. She has a masters degree from the Norwegian Academy of Music.\r\n<br></br>\r\n<b>Instrument: Euphonium </b>\r\n', 'Price: $250/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_flute`
--

DROP TABLE IF EXISTS `g_flute`;
CREATE TABLE IF NOT EXISTS `g_flute` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_flute`
--

INSERT INTO `g_flute` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '1.jpg', 'Alina Gorgea', 'Alina Gorgea holds a Master\'s Degree in Music Performance from the Conservatory of Music Amsterdam, The Netherlands\r\nand a Bachelor\'s Degree in Music Teaching from the Conservatory of Music Prins Claus Groningen, The Netherlands.\r\n<br></br>\r\n<b>Instrument: Flute </b>', 'Price: $200/Month'),
(2, '4.jpg', 'Eftihia Arkoudis', 'Greek flutist Eftihia Arkoudis is a versatile performer and educator. He is a winner of WVU Young Artist and International Grand Prize Virtuoso Competition (2016), an alternate winner of Pittsburgh Concert Society and National Flute Association Convention Into the Music Masterclass, a finalist for The American Prize Competition (2018-2019), and an alternate finalist of Byron Hester Competition (2015).\r\n<br></br>\r\n<b>Instrument: Flute </b>\r\n', 'Price: $250/Month'),
(3, '13.jpg', 'Bianca Torrente', 'Hi everyone! My name is Bianca Torrente and I am a beginner to intermediate voice and musical theatre instructor as well as a beginning flute instructor. I am currently a student at New York University and am studying drama at Tisch School of the Arts. After performing in over 18 musicals, engaging in various forms of musical instruction, and simply being a musician, I want nothing more than to share my passion for the arts with you all via our virtual lessons. My phone number is (209) 471-7200, contact me for more info!\r\n<br></br>\r\n<b>Instrument: Flute </b>', 'Price: $275/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_guitar`
--

DROP TABLE IF EXISTS `g_guitar`;
CREATE TABLE IF NOT EXISTS `g_guitar` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_guitar`
--

INSERT INTO `g_guitar` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '2.jpg', 'Rodrigo Checa', 'As a teacher, Mr. Rodrigo develops the creativity and awareness of the student, rather than imposing ideas, in order to let the student grow as both guitarist and musician. As a teacher, Rodrigo balances technique and musicality, providing tools to the student to explore, improve, and enjoy his/her playing.\r\n<br></br>\r\n<b>Instrument: Guitar </b>\r\n', 'Price: $225/Month'),
(2, '10.jpg', 'Alias Franco', 'Hi there! For those of you who haven\'t met me yet, I\'m Alias Franco and I have lived and breathed music all my life. I started taking piano lessons at the age of 5 and enrolled in the Royal Conservatory of Music where I eventually graduated and obtained my ARCT (Associate of the Royal Conservatory) diploma in Guitar Performance with Honours and Advanced Theory Certificate.\r\n<br></br>\r\n<b>Instrument: Guitar </b>', 'Price: $235/Month'),
(3, '14.jpg', 'Keelan Bozman', 'Keelan Bozman is a performer, educator and outdoor enthusiast. He first started playing when his father challenged him to put down the Guitar Hero video game and pick up a real instrument. He soon began taking formal lessons and writing his own songs. Keelan is a graduate of East Carolina University and Central Piedmont Community College, and has plans to pursue a graduate level music degree in the future.\r\n<br></br>\r\n<b>Instrument: Guitar </b>', 'Price: $200/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_horn`
--

DROP TABLE IF EXISTS `g_horn`;
CREATE TABLE IF NOT EXISTS `g_horn` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_horn`
--

INSERT INTO `g_horn` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '6.jpg', 'Andres Bercellini', 'I\'m a freelancer and I have been enjoying teaching for the past ten years in my hometown and abroad. Whether you are a beginner, intermediate, or advanced player I will help you explore and refine your skills in order to take your playing to the next level. My teaching method equally focuses on both the F-Horn and Bb-Horn in order to enhance your sound and optimize your playing and musical expression.\r\n<br></br>\r\n<b>Instrument: Horn </b>', 'Price: $200/Month'),
(2, '15.jpg', 'Cooper White', 'Bachelor\'s Degree from the Berklee College of Music in Boston. Also studied Classical Performance at the Lionel Hampton School of Music. Ten Years professional performing experience road touring in the U.S.A., and international on cruise ships. Most recently with For The Record Live from Los Angeles, CA. Jazz and popular music, as well as classical.\r\n<br></br>\r\n<b>Instrument: Horn </b>', 'Price: $250/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_sexophone`
--

DROP TABLE IF EXISTS `g_sexophone`;
CREATE TABLE IF NOT EXISTS `g_sexophone` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_sexophone`
--

INSERT INTO `g_sexophone` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '5.jpg', 'John Maujor', 'I have always loved the classical saxophone with all its diverse repertoire - from the classical standard repertoire to the challenging contemporary pieces. Next to that, I have always liked to play Jazz. If you study with me, I can help you develop skills in various styles based on solid knowledge of the instrument and its technique. My teaching experience ranges from beginners to experienced players up to conservatory level students.\r\n<br></br>\r\n<b>Instrument: Sexophone </b>', 'Price: $275/Month'),
(2, '12.jpg', 'Brandi Perkins', 'I grew up in Louisiana and attended Southeastern Louisiana University, where I received my Bachelor\'s in Music Education. After graduating, I moved to Florida and taught music for a few years. I have recently completed my Master\'s in music performance in Ohio. I am currently teaching music at a Christian private school in Florida. While my primary instrument is flute and piccolo, I have taken over four years of intensive lessons on voice, piano, and oboe. \r\n<br></br>\r\n<b>Instrument: Sexophone </b>', 'Price: $200/Month');

-- --------------------------------------------------------

--
-- Table structure for table `g_violin`
--

DROP TABLE IF EXISTS `g_violin`;
CREATE TABLE IF NOT EXISTS `g_violin` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_violin`
--

INSERT INTO `g_violin` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '3.jpeg', 'Coco Wang', 'As a teacher, Mrs. Coco is dedicated to helping each student develop an individual voice at their own pace; she focuses on developing an organic, resonant, and free sound through the release of physical and mental tension. Coco finds it especially rewarding to watch her students grow over time and believes that music lessons are essentially collaborations in storytelling and communication.\r\n<br></br>\r\n<b>Instrument: Violin </b>\r\n', 'Price: $199/Month'),
(2, '11.jpg', 'Jessica Bailey', 'I am classically trained professional violinist/violist with over 12 years of combined teaching experience (2 years specifically online!) and classical playing experience. I hold a Bachelors Degree in Music Performance from Shenandoah Conservatory, a Graduate Certificate in Contemporary Music Studies From University of Maryland (BC), am currently working towards my Master of Music degree in Music Eduction from Boston University. I am a registered Suzuki teacher for books 1-5, with affiliations in ASTA and SAA.\r\n<br></br>\r\n<b>Instrument: Violin </b>', 'Price: $300/Month');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `title`, `des`, `price`) VALUES
(1, '1.jpg', 'Alina Gorgea', 'Alina Gorgea holds a Master\'s Degree in Music Performance from the Conservatory of Music Amsterdam, The Netherlands\r\nand a Bachelor\'s Degree in Music Teaching from the Conservatory of Music Prins Claus Groningen, The Netherlands.\r\n<br></br>\r\n<b>Instrument: Flute </b>', 'Price: $200/Month'),
(2, '2.jpg', 'Rodrigo Checa', 'As a teacher, Mr. Rodrigo develops the creativity and awareness of the student, rather than imposing ideas, in order to let the student grow as both guitarist and musician. As a teacher, Rodrigo balances technique and musicality, providing tools to the student to explore, improve, and enjoy his/her playing.\r\n<br></br>\r\n<b>Instrument: Guitar </b>\r\n', 'Price: $225/Month'),
(3, '3.jpeg', 'Coco Wang', 'As a teacher, Mrs. Coco is dedicated to helping each student develop an individual voice at their own pace; she focuses on developing an organic, resonant, and free sound through the release of physical and mental tension. Coco finds it especially rewarding to watch her students grow over time and believes that music lessons are essentially collaborations in storytelling and communication.\r\n<br></br>\r\n<b>Instrument: Violin </b>\r\n', 'Price: $199/Month'),
(4, '4.jpg', 'Eftihia Arkoudis', 'Greek flutist Eftihia Arkoudis is a versatile performer and educator. He is a winner of WVU Young Artist and International Grand Prize Virtuoso Competition (2016), an alternate winner of Pittsburgh Concert Society and National Flute Association Convention Into the Music Masterclass, a finalist for The American Prize Competition (2018-2019), and an alternate finalist of Byron Hester Competition (2015).\r\n<br></br>\r\n<b>Instrument: Flute </b>\r\n', 'Price: $250/Month'),
(5, '5.jpg', 'John Maujor', 'I have always loved the classical saxophone with all its diverse repertoire - from the classical standard repertoire to the challenging contemporary pieces. Next to that, I have always liked to play Jazz. If you study with me, I can help you develop skills in various styles based on solid knowledge of the instrument and its technique. My teaching experience ranges from beginners to experienced players up to conservatory level students.\r\n<br></br>\r\n<b>Instrument: Sexophone </b>', 'Price: $275/Month'),
(6, '6.jpg', 'Andres Bercellini', 'I\'m a freelancer and I have been enjoying teaching for the past ten years in my hometown and abroad. Whether you are a beginner, intermediate, or advanced player I will help you explore and refine your skills in order to take your playing to the next level. My teaching method equally focuses on both the F-Horn and Bb-Horn in order to enhance your sound and optimize your playing and musical expression.\r\n<br></br>\r\n<b>Instrument: Horn </b>', 'Price: $200/Month'),
(7, '7.jpg', 'Bente Illevold', 'Bente Illevold comes from Rendalen, Osterdalen in Norway, and plays the euphonium. Over the past few years, she has left her mark as an innovative performer and has gained recognition for her performances of several new works for the instrument, both at home and abroad. She has a masters degree from the Norwegian Academy of Music.\r\n<br></br>\r\n<b>Instrument: Euphonium </b>\r\n', 'Price: $250/Month'),
(8, '8.jpg', 'Alessandro Giovanetto', 'Whether you are a passionate cinephile curious to learn the practices of what is referred to as film scoring in the industry or you are a musician/composer wishing to expand your craft into a different creative and challenging environment or whether you are an aspiring film composer eager to learn about everything required to make it professionally, then I can help you offering my knowledge and experience.\r\n<br></br>\r\n<b>Instrument: Composition for Screen </b>', 'Price: $255/Month'),
(9, '9.jpg', 'Alvaro Pestana Diez', 'Hello, my name is Alvaro. I am a Spanish bassoonist, and I am very excited about being part of this wonderful project. Teaching has always been one of my dreams. I love playing, but the most important part lies in the art of pedagogy, how you interact, and create an excellent teacher-student relationship with your students through your thoughts. I have always had really good teachers, from whom I learned and continue learning a lot.\r\n<br></br>\r\n<b>Instrument: Bassoon </b>', 'Price: $300/Month'),
(10, '10.jpg', 'Alias Franco', 'Hi there! For those of you who haven\'t met me yet, I\'m Alias Franco and I have lived and breathed music all my life. I started taking piano lessons at the age of 5 and enrolled in the Royal Conservatory of Music where I eventually graduated and obtained my ARCT (Associate of the Royal Conservatory) diploma in Guitar Performance with Honours and Advanced Theory Certificate.\r\n<br></br>\r\n<b>Instrument: Guitar </b>\r\n', 'Price: $235/Month'),
(11, '11.jpg', 'Jessica Bailey', 'I am classically trained professional violinist/violist with over 12 years of combined teaching experience (2 years specifically online!) and classical playing experience. I hold a Bachelors Degree in Music Performance from Shenandoah Conservatory, a Graduate Certificate in Contemporary Music Studies From University of Maryland (BC), am currently working towards my Master of Music degree in Music Eduction from Boston University. I am a registered Suzuki teacher for books 1-5, with affiliations in ASTA and SAA.\r\n<br></br>\r\n<b>Instrument: Violin </b>', 'Price: $300/Month'),
(12, '12.jpg', 'Brandi Perkins', 'I grew up in Louisiana and attended Southeastern Louisiana University, where I received my Bachelor\'s in Music Education. After graduating, I moved to Florida and taught music for a few years. I have recently completed my Master\'s in music performance in Ohio. I am currently teaching music at a Christian private school in Florida. While my primary instrument is flute and piccolo, I have taken over four years of intensive lessons on voice, piano, and oboe. \r\n<br></br>\r\n<b>Instrument: Sexophone </b>', 'Price: $200/Month'),
(13, '13.jpg', 'Bianca Torrente', 'Hi everyone! My name is Bianca Torrente and I am a beginner to intermediate voice and musical theatre instructor as well as a beginning flute instructor. I am currently a student at New York University and am studying drama at Tisch School of the Arts. After performing in over 18 musicals, engaging in various forms of musical instruction, and simply being a musician, I want nothing more than to share my passion for the arts with you all via our virtual lessons. My phone number is (209) 471-7200, contact me for more info!\r\n<br></br>\r\n<b>Instrument: Flute </b>', 'Price: $275/Month'),
(14, '14.jpg', 'Keelan Bozman', 'Keelan Bozman is a performer, educator and outdoor enthusiast. He first started playing when his father challenged him to put down the Guitar Hero video game and pick up a real instrument. He soon began taking formal lessons and writing his own songs. Keelan is a graduate of East Carolina University and Central Piedmont Community College, and has plans to pursue a graduate level music degree in the future.\r\n<br></br>\r\n<b>Instrument: Guitar </b>', 'Price: $200/Month'),
(15, '15.jpg', 'Cooper White', 'Bachelor\'s Degree from the Berklee College of Music in Boston. Also studied Classical Performance at the Lionel Hampton School of Music. Ten Years professional performing experience road touring in the U.S.A., and international on cruise ships. Most recently with For The Record Live from Los Angeles, CA. Jazz and popular music, as well as classical.\r\n<br></br>\r\n<b>Instrument: Horn </b>', 'Price: $250/Month');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `reg_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  KEY `reg_id` (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_register1`
--

DROP TABLE IF EXISTS `user_register1`;
CREATE TABLE IF NOT EXISTS `user_register1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register1`
--

INSERT INTO `user_register1` (`id`, `name`, `email`, `psw`) VALUES
(23, 'vasu', 'vasumalaviya3999@gmail.com', '12'),
(24, 'tre', 're@yahooo.com', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `reg_id` FOREIGN KEY (`reg_id`) REFERENCES `user_register1` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
