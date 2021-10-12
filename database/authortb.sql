-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 07:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `authortb`
--

CREATE TABLE `authortb` (
  `id` int(11) NOT NULL,
  `author_name` varchar(25) NOT NULL,
  `author_since` float DEFAULT NULL,
  `author_image` varchar(100) DEFAULT NULL,
  `author_description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authortb`
--

INSERT INTO `authortb` (`id`, `author_name`, `author_since`, `author_image`, `author_description`) VALUES
(1, 'Becky Albertalli', 2017, './image/author_BA.jpg', 'Becky Albertalli is the author of the acclaimed novels Simon vs. the Homo Sapiens Agenda (film: Love, Simon), The Upside of Unrequited, and Leah on the Offbeat. She is also the co-author of What If It\'s Us with Adam Silvera. A former clinical psychologist who specialized in working with children and teens, Becky lives with her family in Atlanta. You can visit her online at www.beckyalbertalli.com.'),
(2, 'Maureen Johnson', 2020, './image/author_MJ.jpg', 'Maureen Johnson is the New York Times and USA Today bestselling author of several YA novels, including 13 Little Blue Envelopes, Suite Scarlett, The Name of the Star, and Truly Devious. She has also done collaborative works, such as Let It Snow (with John Green and Lauren Myracle), and The Bane Chronicles (with Cassandra Clare and Sarah Rees Brennan). Her work has appeared in publications such as The New York Times, Buzzfeed, and The Guardian, and she has also served as a scriptwriter for EA Games. She has an MFA in Writing from Columbia University and lives in New York City'),
(3, 'William W. Johnstone', 1991, './Image/author_WJ.jpg', 'William W. Johnstone is the USA Today and New York Times bestselling author of over 300 books, including Preacher, The Last Mountain Man, Luke Jensen Bounty Hunter, Flintlock, Savage Texas, Matt Jensen, The Last Mountain Man; The Family Jensen, Sidewinders, and Shawn O\'Brien Town Tamer . His thrillers include Phoenix Rising, Home Invasion, The Blood of Patriots, The Bleeding Edge, and Suicide Mission. Visit his website at www.williamjohnstone.net or by email at dogcia2006@aol.com.'),
(4, 'James Patterson', 2007, './image/author_JP.jpg', 'JAMES PATTERSON is one of the best-known and biggest-selling writers of all time. His books have sold in excess of 375 million copies worldwide. He is the author of some of the most popular series of the past two decades - the Alex Cross, Women\'s Murder Club, Detective Michael Bennett and Private novels - and he has written many other number one bestsellers including romance novels and stand-alone thrillers.\r\n\r\nJames is passionate about encouraging children to read. Inspired by his own son who was a reluctant reader, he also writes a range of books for young readers including the Middle School, I Funny, Treasure Hunters, Dog Diaries and Max Einstein series. James has donated millions in grants to independent bookshops and has been the most borrowed author of adult fiction in UK libraries for the past eleven years in a row. He lives in Florida with his wife and son.'),
(5, 'Mark R. Levin ', 2012, './image/author_ML.jpg', ' Mark R. Levin is a nationally syndicated talk radio host and president of Landmark Legal Foundation. He has also worked as an attorney in the private sector and as a top adviser and administrator to several members of President Reagan\'s cabinet. He is the author of the #1 New York Times bestselling book Liberty and Tyranny, as well as New York Times bestselling books Rescuing Sprite and Men in Black: How the Supreme Court Is Destroying America, Mark holds a B.A. from Temple University and a J.D. from Temple University School of Law.'),
(6, 'Lee Child', 2013, './image/author_LC.jpg', 'Lee Child is one of the world\'s leading thriller writers. He was born in Coventry, raised in Birmingham, and now lives in New York. It is said one of his novels featuring his hero Jack Reacher is sold somewhere in the world every nine seconds. His books consistently achieve the number-one slot on bestseller lists around the world and have sold over one hundred million copies. Two blockbusting Jack Reacher movies have been made so far. He is the recipient of many awards, most recently Author of the Year at the 2019 British Book Awards. He was appointed CBE in the 2019 Queen\'s Birthday Honours.'),
(7, 'Doogie Horner', 2011, './image/author_DH.jpg', 'Doogie Horner is an author, illustrator, and comedian. His books include Some Very Interesting Cats Perhaps You Weren\'t Aware of (Workman, 2015), Everything Explained Through Flowcharts (Harper Collins 2010), and 100 Ghosts (Quirk Books, 2013), among others. He is the illustrator of the Kid Legends series (Quirk Books, 2014-2017).\r\n\r\nDoogie was a semi-finalist on America\'s Got Talent where he famously won over a hostile NYC audience. His comedy album, A Delicate Man, was an AV Club staff pick. He is a frequent guest on Doug Loves Movies and has been featured on Dave Chapelle\'s Oddball Comedy Tour. His live show The Ministry of Secret Jokes won a Best of Philly award from Philadelphia Magazine.\r\n\r\nHis humor writing has also appeared in McSweeney\'s, Wired, Playboy, Fast Company, the London Times, Boing Boing, and other publications.'),
(8, 'Terry McMillan', 2015, './image/author_TM.jpg', 'Terry McMillan is the #1 New York Times bestselling author of Waiting to Exhale, How Stella Got Her Groove Back, A Day Late and a Dollar Short, andThe Interruption of Everything and the editor of Breaking Ice: An Anthology of Contemporary African-American Fiction. Each of Ms. McMillan\'s seven previous novels was a New York Times bestseller, and four have been made into movies: Waiting to Exhale (Twentieth Century Fox, 1995); How Stella Got Her Groove Back (Twentieth Century Fox, 1998); Disappearing Acts (HBO Pictures, 1999); and A Day Late and a Dollar Short (Lifetime, 2014). She lives in California.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authortb`
--
ALTER TABLE `authortb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authortb`
--
ALTER TABLE `authortb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
