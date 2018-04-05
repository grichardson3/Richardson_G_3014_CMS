-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2018 at 07:10 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moviereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(30) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Family'),
(4, 'Horror'),
(5, 'Scifi-Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `movies_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movies_title` varchar(120) NOT NULL,
  `movies_cover` varchar(150) NOT NULL,
  `movies_date` varchar(30) NOT NULL,
  `movies_desc` varchar(400) NOT NULL,
  `movies_director` varchar(50) NOT NULL,
  `movies_genre` varchar(50) NOT NULL,
  PRIMARY KEY (`movies_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_title`, `movies_cover`, `movies_date`, `movies_desc`, `movies_director`, `movies_genre`) VALUES
(1, 'Step Brothers', 'step-brothers-cover.jpg', 'July 25, 2008', 'Two aimless middle-aged losers still living at home are forced against their will to become roommates when their parents marry.', 'Adam McKay', 'Comedy'),
(2, 'Anchorman: The Legend of Ron Burgundy', 'anchorman-cover.jpg', 'July 9, 2004', 'Ron Burgundy is San Diego\'s top-rated newsman in the male-dominated broadcasting of the 1970s, but that\'s all about to change for Ron and his cronies when an ambitious woman is hired as a new anchor.', 'Adam McKay', 'Comedy'),
(3, 'Pacific Rim', 'pacific-rim-cover.jpg', 'July 12, 2013', 'As a war between humankind and monstrous sea creatures wages on, a former pilot and a trainee are paired up to drive a seemingly obsolete special weapon in a desperate effort to save the world from the apocalypse.', 'Guillermo del Toro', 'Action'),
(4, 'Godzilla (2014)', 'godzilla-2014-cover.jpg', 'May 16, 2014', 'The world is beset by the appearance of monstrous creatures, but one of them may be the only one who can save humanity.', 'Gareth Edwards', 'Action'),
(5, 'Airplane', 'airplane-cover.jpg', 'July 2, 1980', 'A man afraid to fly must ensure that a plane lands safely after the pilots become sick.', 'Jim Abrahams', 'Comedy'),
(6, 'RED', 'red-cover.jpg', 'October 15, 2010', 'When his peaceful life is threatened by a high-tech assassin, former black-ops agent Frank Moses reassembles his old team in a last ditch effort to survive and uncover his assailants.', 'Robert Schwentke', 'Action'),
(7, 'The Expendables', 'the-expendables-cover.jpg', 'August 13, 2010', 'A CIA operative hires a team of mercenaries to eliminate a Latin dictator and a renegade CIA agent.', 'Sylvester Stallone', 'Action'),
(8, 'Star Wars: Episode II - Attack of the Clones', 'attack-of-the-clones-cover.jpg', 'May 16, 2002', 'Ten years after initially meeting, Anakin Skywalker shares a forbidden romance with Padmé Amidala, while Obi-Wan investigates an assassination attempt on the senator and discovers a secret clone army crafted for the Jedi.', 'George Lucas', 'Sci-Fi / Fantasy'),
(9, 'It (2017)', 'it-2017-cover.jpg', 'September 8, 2017', 'In the summer of 1989, a group of bullied kids band together to destroy a shapeshifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.', 'Andy Muschietti', 'Horror'),
(10, 'Superbad', 'superbad-cover.jpg', 'August 17, 2007', 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.', 'Greg Mottola', 'Comedy'),
(11, 'Let\'s Be Cops', 'lets-be-cops-cover.jpg', 'August 13, 2014', 'Two struggling pals dress as police officers for a costume party and become neighborhood sensations. But when these newly-minted \"heroes\" get tangled in a real life web of mobsters and dirty detectives, they must put their fake badges on the line.', 'Luke Greenfield', 'Comedy'),
(12, 'The Lord of the Rings: Return of the King', 'return-of-the-king-cover.jpg', 'December 17, 2003', 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.', 'Peter Jackson', 'Sci-Fi / Fantasy'),
(13, 'Battle Royale', 'battle-royale-cover.jpg', 'December 16, 2000', 'In the future, the Japanese government captures a class of ninth-grade students and forces them to kill each other under the revolutionary \"Battle Royale\" act.', 'Kinji Fukasaku', 'Sci-Fi / Fantasy'),
(14, 'Signs', 'signs-cover.jpg', 'August 2, 2002', 'A family living on a farm finds mysterious crop circles in their fields which suggests something more frightening to come.', 'M. Night Shyamalan', 'Sci-Fi / Fantasy'),
(15, 'Project X', 'project-x-cover.jpg', 'March 2, 2012', '3 high school seniors throw a birthday party to make a name for themselves. As the night progresses, things spiral out of control as word of the party spreads.', 'Nima Nourizadeh', 'Comedy'),
(16, 'Tropic Thunder', 'tropic-thunder-cover.jpg', 'August 13, 2008', 'Through a series of freak occurrences, a group of actors shooting a big-budget war movie are forced to become the soldiers they are portraying.', 'Ben Stiller', 'Comedy'),
(17, 'Talladega Nights: The Ballad of Ricky Bobby', 'talladega-nights-cover.jpg', 'August 4, 2006', 'Number one NASCAR driver Ricky Bobby stays atop the heap thanks to a pact with his best friend and teammate, Cal Naughton, Jr. But when a French Formula One driver, makes his way up the ladder, Ricky Bobby\'s talent and devotion are put to the test.', 'Adam McKay', 'Comedy'),
(18, 'The Ring', 'the-ring-cover.jpg', 'October 18, 2002', 'A journalist must investigate a mysterious videotape which seems to cause the death of anyone in a week of viewing it.', 'Gore Verbinski', 'Horror'),
(19, 'Napolean Dynamite', 'napolean-dynamite-cover.jpg', 'August 27, 2004', 'A listless and alienated teenager decides to help his new friend win the class presidency in their small western high school, while he must deal with his bizarre family life back home.', 'Jared Hess', 'Comedy'),
(20, 'The Longest Yard', 'the-longest-yard-cover.jpg', 'May 27, 2005', 'Prison inmates form a football team to challenge the prison guards.', 'Peter Segal', 'Comedy'),
(21, 'The Waterboy', 'the-waterboy-cover.jpg', 'November 6, 1998', 'A waterboy for a college football team discovers he has a unique tackling ability and becomes a member of the team.', 'Frank Coraci', 'Comedy'),
(22, 'Shrek', 'shrek-cover.jpg', 'May 18, 2001', 'After his swamp is filled with magical creatures, Shrek agrees to rescue Princess Fiona for a villainous lord in order to get his land back.', 'Andrew Adamson', 'Family'),
(23, 'Chicken Run', 'chicken-run-cover.jpg', 'June 23, 2000', 'When a cockerel apparently flies into a chicken farm, the chickens see him as an opportunity to escape their evil owners.', 'Peter Lord', 'Family'),
(24, 'Borat: Cultural Learnings of America for Make Benefit Glorious Nation of Kazakhstan', 'borat-cover.jpg', 'November 3, 2006', 'Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson.', 'Larry Charles', 'Comedy'),
(25, 'Jackass: The Movie', 'jackass-movie-cover.jpg', 'October 25, 2002', 'Johnny Knoxville and his band of maniacs perform a variety of stunts and gross-out gags on the big screen for the first time.', 'Jeff Tremaine', 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_moviesgenre`
--

DROP TABLE IF EXISTS `tbl_moviesgenre`;
CREATE TABLE IF NOT EXISTS `tbl_moviesgenre` (
  `movies_id` tinyint(4) NOT NULL,
  `genre_id` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_moviesgenre`
--

INSERT INTO `tbl_moviesgenre` (`movies_id`, `genre_id`) VALUES
(1, 2),
(2, 2),
(3, 1),
(4, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 5),
(9, 4),
(10, 2),
(11, 2),
(12, 5),
(13, 5),
(14, 5),
(15, 2),
(16, 2),
(17, 2),
(18, 4),
(19, 2),
(20, 2),
(21, 2),
(22, 3),
(23, 3),
(24, 2),
(25, 2),
(28, 1),
(29, 2),
(30, 2),
(31, 1),
(32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(40) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_date` timestamp NULL DEFAULT NULL,
  `user_level` varchar(15) NOT NULL,
  `user_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_ip`) VALUES
(1, 'Gareth', 'grich', 'test123', 'grichardson@live.ca', NULL, '1', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
