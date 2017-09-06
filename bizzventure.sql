-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2017 at 10:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `SNO` int(20) NOT NULL,
  `H_NAME` text NOT NULL,
  `H_BRANCH` text NOT NULL,
  `H_INST` text NOT NULL,
  `H_SEM` text NOT NULL,
  `H_PHONE` text NOT NULL,
  `H_EMAIL` varchar(50) NOT NULL,
  `T0_NAME` text,
  `T0_BRANCH` text,
  `T0_INST` text,
  `T0_SEM` text,
  `T0_PHONE` text,
  `T0_EMAIL` varchar(50) DEFAULT NULL,
  `T1_NAME` text,
  `T1_BRANCH` text,
  `T1_INST` text,
  `T1_SEM` text,
  `T1_PHONE` text,
  `T1_EMAIL` varchar(50) DEFAULT NULL,
  `T2_NAME` text,
  `T2_BRANCH` text,
  `T2_INST` text,
  `T2_SEM` text,
  `T2_PHONE` text,
  `T2_EMAIL` varchar(50) DEFAULT NULL,
  `T3_NAME` text,
  `T3_BRANCH` text,
  `T3_INST` text,
  `T3_SEM` text,
  `T3_PHONE` text,
  `T3_EMAIL` varchar(50) DEFAULT NULL,
  `T4_NAME` text,
  `T4_BRANCH` text,
  `T4_INST` text,
  `T4_SEM` text,
  `T4_PHONE` text,
  `T4_EMAIL` varchar(50) DEFAULT NULL,
  `M_NAME` text,
  `M_BRANCH` text,
  `M_INST` text,
  `M_PHONE` text,
  `M_EMAIL` varchar(50) DEFAULT NULL,
  `E_SUMMARY` text NOT NULL,
  `PRODUCT` text NOT NULL,
  `MARKET` text NOT NULL,
  `COMPET` text NOT NULL,
  `RISK` text NOT NULL,
  `MARK_STRGY` text NOT NULL,
  `TITLE_0` text,
  `CONT_0` text,
  `TITLE_1` text,
  `CONT_1` text,
  `TITLE_2` text,
  `CONT_2` text,
  `TITLE_3` text,
  `CONT_3` text,
  `TITLE_4` text,
  `CONT_4` text,
  `TITLE_H` text,
  `CONT_H` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`SNO`, `H_NAME`, `H_BRANCH`, `H_INST`, `H_SEM`, `H_PHONE`, `H_EMAIL`, `T0_NAME`, `T0_BRANCH`, `T0_INST`, `T0_SEM`, `T0_PHONE`, `T0_EMAIL`, `T1_NAME`, `T1_BRANCH`, `T1_INST`, `T1_SEM`, `T1_PHONE`, `T1_EMAIL`, `T2_NAME`, `T2_BRANCH`, `T2_INST`, `T2_SEM`, `T2_PHONE`, `T2_EMAIL`, `T3_NAME`, `T3_BRANCH`, `T3_INST`, `T3_SEM`, `T3_PHONE`, `T3_EMAIL`, `T4_NAME`, `T4_BRANCH`, `T4_INST`, `T4_SEM`, `T4_PHONE`, `T4_EMAIL`, `M_NAME`, `M_BRANCH`, `M_INST`, `M_PHONE`, `M_EMAIL`, `E_SUMMARY`, `PRODUCT`, `MARKET`, `COMPET`, `RISK`, `MARK_STRGY`, `TITLE_0`, `CONT_0`, `TITLE_1`, `CONT_1`, `TITLE_2`, `CONT_2`, `TITLE_3`, `CONT_3`, `TITLE_4`, `CONT_4`, `TITLE_H`, `CONT_H`) VALUES
(1, 'dfhjkdsfg', 'dfhjkdsfg', 'dfhjkdsfg', '', 'dfhjkdsfg', 'dfhjkdsfg', 'asdfhj', 'ljfkghsdfg', 'dlfkgjhf', '7', '123456789089', 'kra@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'uashdfkjsdhfgkjsdhfgkjhdfsgjdhsfgj', '', 'lkdsjfhglkjdhfglksjdhfglkjsdlhfgkjsdhfgkjsdhfg', '', 'sdfkjglhdlfkgjhsdfkgjhsdlkfgjhlskdjfghlkjh', 'sdflkgjhsdflgkjhsdflgkjhsdflgjkhsdflkgjhsdflkjgh', 'dfskgjsdhfg', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'dfhjkdsfg', 'dfhjkdsfg', 'dfhjkdsfg', '', 'dfhjkdsfg', 'dfhjkdsfg', 'asdfhj', 'ljfkghsdfg', 'dlfkgjhf', '7', '123456789089', 'kra@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'uashdfkjsdhfgkjsdhfgkjhdfsgjdhsfgj', '', 'lkdsjfhglkjdhfglksjdhfglkjsdlhfgkjsdhfgkjsdhfg', '', 'sdfkjglhdlfkgjhsdfkgjhsdlkfgjhlskdjfghlkjh', 'sdflkgjhsdflgkjhsdflgkjhsdflgjkhsdflkgjhsdflkjgh', 'dfskgjsdhfg', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'asdfkjashdf', 'lskdjfhsdflkgh', 'lsjdkhflsdkfjghf', '67', '123456789089', 'asdjkf@gmial.om', 'skdfjhj', 'aklsfjh', 'lakjfdh', '56', '3234343434', 'asldkjf@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfghjkpoiuytrewqasxcvbnmkjuytr', '', 'skfhgdsfgdfljksghljdsfhglkjdhsfglkjhdfgklh', 'dfsjkhgdskjfghdsjfhgkjdsfghkjsdhfgkljhdsfg', 'lskdfjhglsdgfhlkdsfjghlkdsfhglkjsdhfglksdhgflkjhgs', 'dlfkjghdklfghdklfjghlksjdhfglkjsdhfglkjhsdflkghsdfjgkh', 'sfghbdfg', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'sadflkjasdfhlksadfh', 'dlfkgjhdsfglkjdshgf', 'lkajdhgfdlkfjgh', '4', '123456789789', 'asdlkfjha@gmail.com', 'asfksjsdfh', 'sdlkfjghsdfg', 'asdfjlksf', '567', '12434343434', 'skadfg@gmial.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sadfkasjdf', 'ahslkdfjh', 'lsadkfjhsdgf', '123456789098', 'hkjdsfg@gmail.com', 'asdkfjhgasdfjhasldkfjhaslkdfhjklasjdhflkajsdhfkljasdfhlkh', '', 'asdlkjfghsdfklgjhdslkjfghklsdjfghkjlsdfhgkljsdhfgkjlshdfgkjlsdhfglkjhdsfg', 'sdkjfghsdfglkjhsdlfgjhsdlfkjghsldkfjghsdklfjghdskflgh', 'sdflgkjhsdfgkljsdhfgkljsdfghksldfjghsdlkjfghldskjfghlskjdfgh', 'sdfkgljhsdfgkljhsdfglkjhsdfgkljshdfgkljsdhfgkjlshdfgkjlsdhfgkljhd', 'dskjfghdsfgkljh', 'dflkgjhsdfgkjlh', '', '', '', '', '', '', '', '', '', ''),
(5, 'dlskfjghsd', 'sdlfkgjhsdfgkh', 'lskdjfghsdflkghj', '34567', '123456789098', 'ksjdfgh@gmail.com', 'asdfjashf', 'lkjsfhg', 'ldkjfgh', '9', '1234567890987', 'lkjdsfg@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sldkjfhasdfkljh', 'lskdfjhsfdkljh', 'aslkfdjghsdfgkjh', '2345678909876', 'aldskfhj@gmail.com', 'asjhsdfbgjsdhfglahflashdflhaslkdfhalskjdhfklasdhflkjasdhflkajshdfkljhs', '', 'dlkfgjhsdflgkjhsdfkljghksdljfhgklsdjfghsldkjfghlksdjfghlksjdfghlkjsdfhglkjsdhfgls', 'sldkgjhsdfglkjhsdlkfgjhsdlfkjghlsdkjfghlksdfghlksdjfghljsdkfghlkjsdghf', 'dflkjghsdflgjkhsdlkfjghsdlfkjghsdljfkghlksjdfghlksdjfhglksjdfhglkjsdhfglkhs', 'adlkfsgjhsdlkfgjhsldkjfghlskdjfhglksdjhfgklsdjhfglksdhfglksjdfhglkjshdfg', 'asdfglksdjfgh', 'sdlkfjghsddfsglsjkdfgh', '', '', '', '', '', '', '', '', '', ''),
(6, 'laskdjfhsadfgklj', 'hlsdkfgjhsdfglkjh', 'lksjhfgdsklfgjhsdgfkjh', '1', '123456789098', 'laskdfh@gmail.co', 'asdfkajsfh', 'lkajshdflkajshf', 'lkjahsflshdf', '3', '12345678987', 'la@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdlfkjhsaf', 'lksjhdf', 'aldkfgjhsdg', '1234567890987', 'sdlkjfh@gmail.com', 'lasjkdfhaslkjfhlkasdjhflakjsdhflkahsdflkjasdfh', '', 'lkjahdslkjghdsflgkjhsdflkjghsldkjfghlkjsdfhgkjlsdfghs', 'sadkfagsjfgewliugfileruglfierugliuergliu', 'aduifgsdlrgblisdrbvlidrblrifglaieurgflierfg', 'dslfgiuhsdlfgiuheslriugselirughliesrughliseruhg', 'sdfgjkhjsdf', 'sadflkjhsfdlkashjdfals', '', '', '', '', '', '', '', '', '', ''),
(7, 'asdlfkjashfdlkjahs', 'lkjsahdfglkadfjgh', 'lksjdfglksjdfhg', '7', '12345678987', 'alsdfkh@gmail.com', 'mnzc', 'lakjsghlkdjfgh', 'lkjshdfglkjsdfgh', '7', '12345678987', 'ukjabsdf@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sadf', 'sdkfj', 'lkjdf', '3789348738', 'kalsjdfh@gmail.com', 'ldkjlhfglksdjfghkdsfghklsdfhglksdjfghlkjsdghfkljsdfgh', '', 'sldkfjghslkdjfghlksdjfghlkjsdfghlksjdfghlkjsdfghkjsdfghlsdfg', 'asdfkljashdflkjashdfkljashdflkjashdfkjlashdfljkashdf', 'alkfjdghdklsfjghskljdfghklsdfjhglskjdfghlkdsfghlskdjfgh', 'ldfkjghskdlgfhslkdfgjhslkdfghlksdfghlksdfjghskdjfhg', 'khgljghkjhgkj', 'jhgjkhgasdfasdfasdf', '', '', '', '', '', '', '', '', '', ''),
(8, 'askdjfhasdfjkh', 'askdjfhaskjhfaskdfjh', 'askjfhaskdfjhaskfjh', '7', '4567898765678', 'aslkjdfha@gmail.com', 'slkdfjhasfd', 'sdlgkjhdfg', 'dflkgjhdsgf', '6', '12345678900', 'smafdh@gmail.com', 'asdlkfjh', 'sadlkfjhsadf', 'sldkfgjhdsfgh', '7', '123456789876', 'lodhisf@gmail.com', 'asdlkfj', 'sjkdafha', 'lkashjflk', '2', '6789876789', 'kajsf@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'lkjxzchclkjfsdhflkjshdflkjshadflkjasdhlkjfjashdk', '', 'asldkfjhaskldjfhaskljdfhkasjdhfkjlasdfhkljashdfkljasdhf', 'sadklfjhaskdflhaskdlfhklajsdfhklajsdfhkljahs', 'aslkdfjhaskldfjhaksfhkadsljhfkasjhfkladshf', 'asdlfkjhasdklfjhasdklfjhahsklfhaskldjfhaskljdfh', 'laskdjhas', 'laskdjfhaslkjdfhasdlfkjh', 'sadlfkjhasfd', 'asdlkfjhasdfkljhasdfklh', 'asldfkjh', 'asdflkjhasdflkjhasdfkljh', '', '', '', '', '', ''),
(9, 'sadkfljashdf', 'asldkjfhasdfjkh', 'askdlfjhasdfkljh', '4', '12345678987', 'askjdfh@gmai.com', 'asdfkljh', 'alskdfjh', 'asldkfhasf', '6', '456787652121', 'a@gmail.com', 'asdfdd', 'sdklfjhsfd', 'sadklfjhasdf', '8', '123456789654', 'asdlfjkhasdf@gmail.com', 'askjfh', 'alskfh', 'asdlkfh', '1', '345678987657', 'sadfjk@gmail.com', 'asdflkjh', 'asdlfkjhsadf', 'lksdjhfsfdkjh', '2', '2345678987654', 'skadfjh@gmail.com', 'asldkfjh', 'sldkfjh', 'sadflkjashdf', '7', '1234567898765', 'kjsd@gmail.com', 'saldkfjhasdf', 'dsalfkh', 'asldfkjh', '345678765456', 'sddjk@gmail.com', 'sadflashdfkjlasldkfjhlaskjdhfklasjdfhklasjdfh', '', 'aslkfjhaklsdjfhaslkjdfhaslkdjfhaskljdfhlaskdhf', 'asdlkfjhasldkfjhaslkdfjhalskjdfhsalkjdfhlkjhf', 'asdlfkjhasdlkfjhaslkdfhadslkjfhkalsdjfhaksljdf', 'alfkjhasdfkjlhasdfklhasdfkjhsadflkjhasdklfjhasdflkjh', 'sadfklasdfh', 'asdlkfjhsafdasdflkjh', 'asldkfjhasdflkjh', 'asdfkljhasdflkjahsdf', 'asdfklhasdfkh', 'asdflkjhasdflkjhasdf', 'asdflkhasdfasd', 'sadlkfjhasdflkhsadflakjh', 'asdkfjlhadsf', 'asdlfkjhasdfkljhasdfkljhfasd', '', ''),
(10, 'Kshitij Rana', 'CSE', 'MIT', '5', '7838859439', 'krana191@gmail.com', 'abcd', 'CSE', 'MIT', '5', '1234566563', 'abcd@gmail.com', 'lmno', 'CSE', 'MIT', '5', '2122332332', 'lmno@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'lkjasdhflkjashdfljkasdhfkjh', '', 'asldkjfhalskdjfhlkasdhjflkajsdhfljkh', 'aslkdjfhasldkfjhaskldfhakldsjfh', 'asdlkfjhasdlfkjhdfglkhjsdflgkhsdfglkh', 'asdfkjlhsdfglkjhsdfglkjhsdfglkjsdhfghk', 'asdkj', 'askdjfhaskdfjlhasdfasd', 'aslkdjf', 'sdfkljasdflkjasdflkjasdf', '', '', '', '', '', '', 'asdlkfjhasdf', 'asdlfjkhasdflkjhasdflh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`SNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `SNO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
