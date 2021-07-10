-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 11:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_movie`
--

CREATE TABLE `all_movie` (
  `m_sno` int(100) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `price` int(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `link` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_movie`
--

INSERT INTO `all_movie` (`m_sno`, `m_name`, `price`, `date`, `link`) VALUES
(1, 'Radhe', 100, '2021-07-08', 'https://www.filmibeat.com/ph-big/2019/10/radhe_157140421800.jpg'),
(2, 'Roohi', 220, '2021-07-09', 'https://wallpapercave.com/wp/wp8964750.jpg'),
(3, 'Pugglait', 210, '2021-07-10', 'https://cdn.bollywoodmdb.com/movies/largethumb/2020/pagglait/poster.jpg\r\n'),
(4, 'Saina', 190, '2021-07-11', 'https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2021/03/saina-1614907731.jpg'),
(5, 'Fauji Calling', 200, '2021-07-12', 'https://1.bp.blogspot.com/-sIwkGjkBcLA/YEjzNshC9GI/AAAAAAAAIjs/Fv2ueUuTaA0ZYfXVCG0AAsltFYh8VHdswCLcBGAsYHQ/s720/Fauji-Calling-Movie.jpg'),
(6, 'Mumbai Saga', 160, '2021-07-13', 'https://wallpapercave.com/wp/wp9059434.jpg'),
(7, 'The Wife', 180, '2021-07-14', 'https://static.toiimg.com/photo/81510916.cms'),
(8, 'The Girl On The Train', 210, '2021-07-15', 'https://7wallpapers.net/wp-content/uploads/4_The-Girl-on-the-Train.jpg'),
(9, 'Madam cheif Minister', 170, '2021-07-16', 'https://media.santabanta.com/medium1/bollywood%20movies/madam%20chief%20minister/madam-chief-minister-2a.jpg'),
(10, 'The Big Bull', 200, '2021-07-17', 'https://akm-img-a-in.tosshub.com/indiatoday/images/story/202103/the-big-bull-trailer_1200x768.jpeg?sZ3WSeyacdiaWsnucNIyet5qYrXlu_Hd&size=770:433'),
(11, 'Underwater', 180, '2021-07-08', 'https://i.ytimg.com/vi/hz_yJyrCpjw/maxresdefault.jpg'),
(12, 'The Invisible Man', 150, '2021-07-09', 'https://i.ytimg.com/vi/WO_FJdiY9dA/maxresdefault.jpg'),
(13, 'Wonder Women 1984', 190, '2021-07-10', 'https://www.koimoi.com/wp-content/new-galleries/2020/12/wonder-woman-1984-gal-gadot-starrer-to-enjoy-the-widest-release-but-without-3d-shows-deets-inside001.jpg'),
(14, 'Parasite', 160, '2021-07-11', 'https://www.hellokpop.com/wp-content/uploads/2019/08/Parasite_1-648x400.jpg'),
(15, '1917', 170, '2021-07-12', 'https://upload.wikimedia.org/wikipedia/en/f/fe/1917_%282019%29_Film_Poster.jpeg'),
(16, 'The Outpost', 190, '2021-07-13', 'https://i.ytimg.com/vi/f4LM9a02q9Q/maxresdefault.jpg'),
(17, 'Ternet', 150, '2021-07-14', 'https://i.zoomtventertainment.com/story/Tenet_Movie_Review.jpg'),
(18, 'Onward', 180, '2021-07-15', 'https://i.ytimg.com/vi/gn5QmllRCn4/maxresdefault.jpg'),
(19, 'Little Women', 150, '2021-07-16', 'https://i.ytimg.com/vi/AST2-4db4ic/maxresdefault.jpg'),
(20, 'Richard jewell', 170, '2021-07-17', 'https://1.bp.blogspot.com/-xHau7WSWhOM/Xxa5cTwnSmI/AAAAAAAAO5I/dtaFWnpP5OwgSZxMVtznNe92kBfpoGNLwCLcBGAsYHQ/s1600/richard%2Bjewell2.jpg'),
(21, 'Pattas', 170, '2021-07-08', 'https://pbs.twimg.com/media/EPds7MzU4AE93Zm.jpg'),
(22, 'Ayyappanum Hashiyam', 190, '2021-07-09', 'https://mir-s3-cdn-cf.behance.net/projects/404/75f3da91666559.Y3JvcCw2MTE0LDQ3ODMsMTEwNCww.jpg'),
(23, 'Bheeshma Theatrical', 200, '2021-07-10', 'https://moviegalleri.net/wp-content/gallery/bheeshma-movie-hd-wallpapers/bheeshma-movie-hd-wallpapers-nitin-rashmika-mandanna-474e7ca.jpg'),
(24, 'Karnan', 210, '2021-07-11', 'https://i0.wp.com/www.letsott.com/assets/uploads/news/Karnan-Thumbnail.jpg'),
(25, 'Krack', 170, '2021-07-12', 'https://www.filmibeat.com/ph-big/2020/04/krack_158796445100.jpg'),
(26, 'Vijay The Master', 180, '2021-07-13', 'https://wallpapercave.com/wp/wp9059434.jpg'),
(27, 'Red', 190, '2021-07-14', 'https://i.ytimg.com/vi/yjR6kc7ZSkg/sddefault.jpg#404_is_fine'),
(28, 'Roberrt', 200, '2021-07-15', 'https://static.toiimg.com/photo/msid-80196926/80196926.jpg?502180'),
(29, 'The Priest', 210, '2021-07-16', 'https://www.xooon.in/wp-content/uploads/2021/02/mammootty-the-priest-release-date-1613888472.jpg'),
(30, 'Uppena', 170, '2021-07-17', 'https://lh4.googleusercontent.com/proxy/M_R4Jgb9Hk40c_ylrZFdk90hHRdDeeR_49ba76QR9ulHDfRzV0UGVt3Cgjq__Qcwb_NBAKyvYpkKnXFU0ikvYa0PvM5OcGq5Q8tuECjfXlsOx-pgcQ=w1200-h630-p-k-no-nu'),
(31, 'Raado', 150, '2021-07-08', 'https://i.ytimg.com/vi/mNpG1td2lkM/maxresdefault.jpg'),
(32, 'Tari yaado ma jindagi jawani', 160, '2021-07-09', 'https://i.ytimg.com/vi/DjUDoTT9Np4/hqdefault.jpg'),
(33, 'Baki mathi badbaki', 140, '2021-07-10', 'https://i.ytimg.com/vi/Aw-EeO41DpM/maxresdefault.jpg'),
(34, 'Hellaro', 160, '2021-07-11', 'https://i.ytimg.com/vi/qb8uOylK3R4/maxresdefault.jpg'),
(35, 'Romiyo Whisky', 130, '2021-07-12', 'https://static.toiimg.com/photo/msid-81406600/81406600.jpg'),
(36, 'Hure Pujaran Tara Soor ni', 150, '2021-07-13', 'https://i.ytimg.com/vi/jZCve9R-gRg/maxresdefault.jpg'),
(37, 'Kehvu Kone', 130, '2021-07-14', 'https://i.ytimg.com/vi/syUHB8U88ig/maxresdefault.jpg'),
(38, 'Kadak Mitthi', 140, '2021-07-15', 'https://i.ytimg.com/vi/MIvJ-quCxiE/maxresdefault.jpg'),
(39, 'Ekde Ek', 150, '2021-07-16', 'https://i.ytimg.com/vi/vC4CX4CqX9c/maxresdefault.jpg'),
(40, 'Preet Katari', 130, '2021-07-17', 'https://i.ytimg.com/vi/w7qsom41_L8/maxresdefault.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
