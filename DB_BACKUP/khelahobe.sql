-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 07:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khelahobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `post_id` int(5) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `post_thumb` text NOT NULL,
  `post_date` date NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`post_id`, `post_title`, `post_desc`, `post_thumb`, `post_date`, `post_author`, `post_category`, `post_status`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '45085781_2207764686147311_2084305134342373376_n.jpg', '2019-07-14', 'Faisal Hamid hemel', 'Sports', 0),
(2, 'England crush Australia to reach ICC CWC 2019 final', 'England cricket team entered their first ICC Cricket World Cup final after 9,969 days, decimating five-time champions Australia cricket team by eight wickets after a fearless knock from Jason Roy. \r\n\r\nEngland cricket team entered their first ICC Cricket World Cup final after 9,969 days, decimating five-time champions Australia cricket team by eight wickets after a fearless knock from Jason Roy at The Edgbaston cricket ground in Birmingham on Thursday. Chasing 224 in a World Cup semifinal was not expected to be a walk in the park but England made it just that with an aggressive approach that has become synonymous with them over the past four years. Openers Roy (85 off 65) and Jonny Bairstow (34 off 43) shared a 124-run stand, their fourth century stand in a row, to do bulk of the job for their team after the bowlers put up an all-round show to dismiss Australia for 223 despite a valiant effort from Steve Smith (85). Joe Root (49 not out off 46) and captain Eoin Morgan (45 not out off 39) knocked off the remaining runs to complete a famous win in just 32.1 overs. England, who lost three World Cup finals in 1979, 1987 and 1992, now have a golden opportunity to win the elusive crown with a victory against New Zealand at Lord\'s on Sunday.', '46451679_2221548634765882_8309889281053163520_n.jpg', '2019-07-15', 'Omar Faruque', 'Life Style', 0),
(3, 'EDUCATION in Bangladesh', 'Over the last decade, Bangladesh has made notable progress in expanding access to education. In a country of over 18 million primary school students, Bangladesh has achieved near universal net primary enrollment, with over 97.9% of children of primary school age enrolling in school. Bangladesh has also achieved gender parity in access to education, and 50.9% of all enrolled students were girls in 2016.\r\n\r\nNonetheless, the quality of education in Bangladesh remains low. The most essential measure of quality in a school system is whether its students are learning the foundational skill for all future learning: reading. In Bangladesh most children are not acquiring basic reading fluency. A USAID-funded assessment by Save the Children in spring 2018 found that 44% of students finish first grade unable to read their first word, and 27% of third grade students cannot read with comprehension. These poor learning outcomes contribute to grade repetition and dropout, and 20% of all students drop out before completing fifth grade. Poor literacy in the early grades also inhibits Bangladeshï¿½s economic growth, as the pipeline of youth workers lack the foundational skills to be productive and engage in a knowledge-based economy.\r\nTo tackle these challenges, USAID supports the Government of Bangladesh to improve early grade reading. To support the acquisition of this foundational skill, USAID works in partnership with the Ministry of Primary and Mass Education to enhance investments in teacher training, teaching and learning materials, and community reading camps to ensure that all children learn to read in their first years of schooling. USAID also co-chairs the Education Local Consultative Group, which brings together 12 development partners to coordinate and advocate for education.', '39105117_1865472033540385_6233272958509383680_n.jpg', '2019-07-14', 'Fariha Afrin', 'Sports', 0),
(4, 'MUSIC OF BANGLADESH, CULTURE, MUSICIANS', 'Bangladesh has a very rich musical heritage since music has always played an important role in the lives of the people. In ancient times, song was usually linked to prayer and this can still be seen somewhat today in the singing of folksongs that often praise certain gods and their creation. Over time new influences where introduced and musical styles changed. Musical development was better than many other spheres of life because such development was often well patronized by the rulers of the time. Today Bangladesh music is varied and distinctive.\r\nGenerally speaking, Bangladesh music can be categorized into a number of genres. The main genres are: classical music, rabindra sangeet, nazrul geeti, folk songs, adhunik gaan and modern music with western influences. Each of these categories is very broad and can incorporate a number of different styles and musical movements. The most distinguishable characteristic of classical music is that it is based on raqas modes. Rabindra sangeet is more often characterized by the words used, which are usually either prayer songs, love songs, seasonal songs or patriotic songs. All rabindra sangeet music has a theme of philosophy and love and often they incorporate masterful poetry.', '39072699_1865473183540270_6293544127199969280_n.jpg', '2019-07-14', 'Sadia Afrin ', 'Sports', 0),
(9, 'Android attendance system now free for all', 'In Bangladesh, Our study system is not that much systemic or strong enough for students learning. Thatâ€™s why there are many Coaching centers, Private centers and Home Tutor services available for all over the country. Even too many students are in these jobs for their own earning. The number of students those are taking these service is also huge. So itâ€™s a common deal for every institution or these kinds of centers to take the attendance of the students. Android Attendance system is mainly for these issues. It will take the attendance through any android based smart devices (mobile phone) where as it is taking manually in every institution.  In Bangladesh, Our study system is not that much systemic or strong enough for students learning. Thatâ€™s why there are many Coaching centers, Private centers and Home Tutor services available for all over the country. Even too many students are in these jobs for their own earning. The number of students those are taking these service is also huge. So itâ€™s a common deal for every institution or these kinds of centers to take the attendance of the students. Android Attendance system is mainly for these issues. It will take the attendance through any android based smart devices (mobile phone) where as it is taking manually in every institution.  In Bangladesh, Our study system is not that much systemic or strong enough for students learning. Thatâ€™s why there are many Coaching centers, Private centers and Home Tutor services available for all over the country. Even too many students are in these jobs for their own earning. The number of students those are taking these service is also huge. So itâ€™s a common deal for every institution or these kinds of centers to take the attendance of the students. Android Attendance system is mainly for these issues. It will take the attendance through any android based smart devices (mobile phone) where as it is taking manually in every institution.  ', 'motivational-wallpaper-46.jpg', '2019-07-18', 'Omar Faruque', 'Technology', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Sports'),
(2, 'Education'),
(3, 'Technology'),
(15, 'Politics'),
(16, 'Health & Fitness'),
(17, 'Life Style'),
(19, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avater` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `address`, `avater`) VALUES
(1, 'Md. Faisal Hamid Hemel', 'Faisal_Hamid', 'fc3707fa908df1e82e30ecbdae3d094804a8f87d', 'faisalhamidhemel@gmail.com', '01815234605', 'Mirpur, Dhaka', 'hemel.jpg'),
(2, 'Omar Faruque', 'Omar', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'omarfaruque1996@gmail.com', '01773357272', 'Kazi Para, DHaka', 'faruk.jpg'),
(3, 'KH Mehedi Hasan', 'Mehedi', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'kh.mehedi.hasan@gmail.com', '01734333752', 'Mirpur, Dhaka', 'nibir.jpg'),
(4, 'Asif Iqbal', 'Asif', '0e8d714842cdaf7c9d9bbd79ae96ee63acc8e642', 'asifriyad6@gmail.com', '01673832243', 'Mirpur - 2, Dhaka', 'setu.jpg'),
(8, 'Shawon Shurid', 'Shawon', 'd7a065fe9bad55ad20b6ebde1f8e6076e5e8c22c', 'shurid45@gmail.com', '01829995341', 'Shewra Para', 'sourav.jpg'),
(11, 'Muzahidul Islam Arno', 'Arno', '9100bcd025682de01431ae8548768c535a5bc30d', 'muzahidulislamarno@gmail.com', '01773357272', 'Khulna', '901533arno.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
