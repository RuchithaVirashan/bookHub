-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 07:51 PM
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
-- Table structure for table `productb`
--

CREATE TABLE `productb` (
  `id` int(2) NOT NULL,
  `product_name` varchar(25) DEFAULT NULL,
  `product_price` decimal(4,2) DEFAULT NULL,
  `second_price` decimal(3,1) DEFAULT NULL,
  `product_image` varchar(76) DEFAULT NULL,
  `product_description` varchar(437) DEFAULT NULL,
  `product_author` varchar(20) DEFAULT NULL,
  `product_category` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productb`
--

INSERT INTO `productb` (`id`, `product_name`, `product_price`, `second_price`, `product_image`, `product_description`, `product_author`, `product_category`) VALUES
(1, 'By Design', '17.88', '20.0', 'Image/By Design.jpg', 'A richly illustrated, authoritative global survey of the best and most creative interior designers and decorators working today', 'Maureen Johnson', 'Art,Comic'),
(2, 'Gelli Arts (R) Printing G', '15.18', '20.0', 'Image/Gelli Arts (R) Printing Guide.jpg', 'Discover the versatility of the amazing Gelli Arts?(R)?plate and learn all the latest techniques, with?Gelli Arts Printing Guide!', 'Maureen Johnson', 'Art,History'),
(3, 'Amazing Patterns', '14.69', '20.0', 'Image/Amazing Patterns.jpg', 'Relaxing adult coloring book with hand-drawn mandala style patterns.', 'Maureen Johnson', 'Art'),
(4, 'Chanel', '43.33', '50.0', 'Image/Chanel.jpg', 'Dazzling clothes, intricate accessories, beautiful models and timeless design leave no doubt as to the lasting fame of the brand and embody everything that has come to symbolize the magic of Chanel.', 'Terry McMillan', 'Art'),
(5, 'Architectural Digest at 1', '22.78', '25.0', 'Image/Architectural Digest at 100.jpg', 'Architectural Digest at 100?celebrates the best from the pages of the international design authority. The editors have delved into the archives and culled years of rich material covering a range of subjects.', 'Maureen Johnson', 'Art,Comic'),
(6, '123 things BIG and JUMBO ', '21.45', '25.0', 'Image/123 things BIG & JUMBO Coloring Book.jpg', 'JUMBO, GIANT and BIG Pictures:?Each picture is HUGE which is more fun to Color. Toddlers will definitely love it.', 'Terry McMillan', 'Art'),
(7, 'Lettering and Modern Call', '10.87', '15.0', 'Image/Lettering and Modern Calligraphy.jpg', 'Learn to letter and create beautiful designs with this beginner\'s guide and workbook! Every page is filled with tips, tricks encouragement and practice space to kickstart your lettering journey', 'James Patterson', 'Art'),
(8, 'Elements of Style', '12.76', '15.0', 'Image/Elements of Style.jpg', '?Elements of Style, a full-color, fully illustrated book packed with honest advice, inspiration, ideas, and lessons learned about designing a home that reflects your personality and style.', 'William W. Johnstone', 'Art'),
(9, 'Kate in Waiting', '15.19', '20.0', './Image/Kate in Waiting.jpg', 'From #1 New York Times bestselling author and rom-com queen Becky Albertalli comes a buoyant new novel about daring to step out of the shadows and into the spotlight in love, life, and, yes, theater.', 'Becky Albertalli', 'Comic,Art'),
(10, 'Simon vs the homo', '7.12', '10.0', './Image/Simon vs. the Homo Sapiens Agenda.jpg', ' Langford! This edition includes new Simon and Blue emails, a behind-the-scenes scrapbook from the Love, Simon movie set, and Becky Albertalli in conversation with fellow authors Adam Silvera and Angie Thomas.', 'Lee Child', 'Comic,Thriller'),
(11, 'Leah on the Offbeat', '8.87', '12.0', './Image/Leah on the Offbeat.jpg', 'In this sequel to the acclaimed Simon vs. the Homo Sapiens Agenda—now a major motion picture, Love, Simon—we follow Simon’s BFF Leah as she grapples with changing friendships, first love, and senior year angst.', 'Becky Albertalli', 'Comic,Thriller'),
(12, 'Love, Creekwood', '7.99', '9.0', './Image/Love, Creekwood,.jpg', 'bestselling Simonverse novels in this highly anticipated epilogue novella. Perfect for fans of Becky Albertalli, the movie Love, Simon, and the new Hulu series spin-off, Love, Victor!', 'Becky Albertalli', 'Comic'),
(13, 'Upside of Unrequited', '9.01', '10.0', 'Image/The Upside of Unrequited.jpg', 'From the award-winning author of Simon vs. the Homo Sapiens Agenda comes a funny, authentic novel about sisterhood, love, and identity. “Heart-fluttering, honest, and hilarious. I can’t stop hugging this book.” —Stephanie Perkins, New York Times bestselling author of Anna and the French Kiss.', 'Becky Albertalli', 'Comic'),
(14, 'What If It s Us', '43.33', '45.0', 'Image/What If It\'s Us.jpg', 'Critically acclaimed and bestselling authors Becky Albertalli and Adam Silvera combine their talents in this smart, funny, heartfelt collaboration about two very different boys who can’t decide if the universe is pushing them together—or pulling them apart.', 'Becky Albertalli', 'Comic,Horror'),
(15, 'Heres to Us', '23.77', '25.0', 'Image/Here\'s to Us.jpg', 'Becky Albertalli and Adam Silvera reunite to continue the story of Arthur and Ben, the boys readers first fell for in the New York Times bestselling rom-com What If It’s Us.', 'Becky Albertalli', 'Comic'),
(16, 'Yes No Maybe So', '17.88', '20.0', 'Image/Yes No Maybe So.jpg', 'A book about the power of love and resistance from New York Times bestselling authors Becky Albertalli and Aisha Saeed.', 'Becky Albertalli', 'Comic'),
(17, 'The Box in the Woods', '15.18', '17.0', 'Image/The Box in the Woods.jpg', 'After solving the case of Truly Devious, Stevie Bell investigates her first mystery outside of Ellingham Academy in this spine-chilling and hilarious stand-alone mystery from New York Times bestselling author Maureen Johnson.', 'Maureen Johnson', 'Fantacy,Fiction'),
(18, 'Truly Devious', '14.69', '16.5', 'Image/truly devious.jpg', 'New York Times bestselling author Maureen Johnson weaves a delicate tale of murder and mystery in the first book of a striking new series, perfect for fans of Agatha Christie and E. Lockhart.', 'Maureen Johnson', 'Fantacy'),
(19, 'The Vanishing Stair ', '12.76', '15.0', 'Image/The Vanishing Stair.jpg', 'In New York Times bestselling author Maureen Johnson’s second novel in the Truly Devious series, there are more twists and turns than Stevie Bell can imagine. No answer is given freely, and someone will pay for the truth with their life.', 'Maureen Johnson', 'Fantacy,Fiction,'),
(20, 'Hand on the Wall', '10.03', '12.0', 'Image/The hand on the wall.jpg', 'New York Times bestselling author Maureen Johnson delivers the witty and pulse-pounding conclusion to the Truly Devious series as Stevie Bell solves the mystery that has haunted Ellingham Academy for over 75 years.', 'Maureen Johnson', 'Fantacy,Thriller'),
(21, 'Hello, Cruel Heart', '10.99', '12.0', 'Image/Hello, Cruel Heart.jpg', 'An electric new story of teenage Cruella de Vil in an original novel inspired by the upcoming Walt Disney Studios Live Action Film, Cruella.', 'Maureen Johnson', 'Fantacy'),
(22, 'The Shadow Cabinet', '11.23', '14.0', 'Image/The Shadow Cabinet.jpg', 'Time is running out as Rory fights to find her friends and the ghost squad struggles to stop Jane from unleashing her spectral nightmare on the entire city. In the process, they’ll discover the existence of an organization that underpins London itself—and Rory will learn that someone she trusts has been keeping a tremendous secret.', 'Maureen Johnson', 'Fantacy,Love'),
(23, '13 Little Blue Envelopes', '12.99', '15.0', 'Image/13 Little Blue Envelopes.jpg', 'Ginny Blackstone never thought she’d spend her summer vacation backpacking across Europe. But that was before she received the first little blue envelope from Aunt Peg.', 'Maureen Johnson', 'Fantacy,Thriller'),
(24, 'The Madness Underneath', '20.00', '22.0', 'Image/The madness underneath.jpg', 'There’s a creepy new terror haunting modern-day London. Fresh from defeating a Jack the Ripper killer, Rory must put her new-found hunting skills to the test before all hell breaks loose…', 'Maureen Johnson', 'Fantacy,Art'),
(25, 'Blood Guts and Glory', '13.44', '15.0', 'Image/Blood, Guts, and Glory,.jpg', 'One of the greatest characters in Western fiction. Two of the wildest tales of frontier vengeance from William Johnstone’s classic bestselling saga. This is how Smoke Jensen became a legend.', 'William W. Johnstone', 'Fiction,Fantacy,'),
(26, 'Red River Vengeance', '22.78', '25.0', 'Image/Red River Vengeance.jpg', 'A good man like Perley Gates knows that when you race with the devil, you’d better cross the finish line first—or you won’t finish at all . . .', 'William W. Johnstone', 'Fiction,Art,Love'),
(27, 'North of Laramie', '21.45', '23.0', 'Image/North of Laramie.jpg', 'The bestselling Johnstones kick off their blazing new western series with a real bang—a fatal, fateful shootout that sends a man named Buck Trammel on the ride of his life . . .', 'William W. Johnstone', 'Fiction,Fantacy,'),
(28, 'The Kerrigans', '10.87', '13.0', 'Image/The Kerrigans.jpg', 'A compelling saga of a family\'s struggle to build an empire on the frontier, from the USA Today bestselling authors of The Family Jensen.', 'William W. Johnstone', 'Fiction'),
(29, 'Trail of the Mountain Man', '16.77', '18.0', 'Image/Trail of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'William W. Johnstone', 'Fiction,Love'),
(30, 'Out of the Ashes', '40.80', '42.0', 'Image/Out of the Ashes.jpg', 'In this western by the bestselling author of Return of the Mountain Man, legendary gunslingers unite to save a beleaguered mining town.', 'William W. Johnstone', 'Fiction,Humor'),
(31, 'Code of the Mountain Man', '35.20', '37.0', 'Image/Code of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'William W. Johnstone', 'Fiction,History'),
(32, 'Revenge of  Mountain Man', '32.60', '34.0', 'Image/Revenge of the Mountain Man.jpg', 'In this western by the USA Today–bestselling author of Trail of the Mountain Man, criminals go after the wrong man’s wife, and he’s out for revenge. Smoke Jensen—A One Man Judge and Jury.', 'William W. Johnstone', 'Fiction'),
(33, 'Trail of the Mountain Man', '16.77', '18.0', 'Image/Trail of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'William W. Johnstone', 'Fiction, Horror'),
(34, 'Out of the Ashes', '40.80', '42.0', 'Image/Out of the Ashes.jpg', 'In this western by the bestselling author of Return of the Mountain Man, legendary gunslingers unite to save a beleaguered mining town.', 'William W. Johnstone', 'fiction, mystery'),
(35, 'Code of the Mountain Man', '35.20', '37.0', 'Image/Code of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'William W. Johnstone', 'Fiction, Horror'),
(36, 'KETO DIET BOOK FOR BEGINN', '7.99', '10.0', 'Image/KETO DIET BOOK FOR BEGINNERS.jpg', 'This book will teach you different recipes to help you achieve your health goals', 'Becky Albertalli', 'Health'),
(37, 'THE VEGETARIAN DIABETIC A', '9.01', '15.0', 'Image/THE VEGETARIAN DIABETIC AND LOSE BELLY FAT COOKBOOK FOR BEGINNERS.jpg', 'This Complete 2 In 1Vegetarian Diabetic Cookbook and Lose Belly Weight is the perfect guide to diabetes and flat tummy you?ve been waiting for!', 'Becky Albertalli', 'Health'),
(38, 'Fix Your Fatty Liver Book', '43.33', '50.0', 'Image/Fix Your Fatty Liver Book.jpg?', 'FixInclusive Guide on How to Resourcefully Treat Fatty Liver Disease; the Main Causes, Signs, Therapy, Serving of Foods to Devour, Etc.', 'Becky Albertalli', 'Health'),
(39, 'Fast. Feast. Repeat', '22.78', '25.0', 'Image/Fast. Feast. Repeat.jpg', 'Change?when?you eat and change your body, your health, and your life!', 'Becky Albertalli', 'Health'),
(40, 'The 10-Day Belly Slimdown', '21.45', '25.0', 'Image/The 10-Day Belly Slimdown.jpg', 'The best gift you can give yourself is a slim, beautiful, healthy belly?and in this book, Dr. Kellyann, an expert I trust, tells you exactly how to get it.', 'Becky Albertalli', 'Health'),
(41, 'The 7-Day Bone Broth Diet', '10.87', '15.0', 'Image/The 7-Day Bone Broth Diet Plan.jpg', 'From Bison Bone Broth to Bone Broth Burgers and Paleo Pork Ramen,?The 7-Day Bone Broth Diet Plan?serves up a straightforward weight-loss program that you can start and stick to.', 'Mark R. Levin', 'Health'),
(42, 'Atomic Habits', '16.77', '20.0', 'Image/Atomic Habits.jpg', 'No matter your goals,?Atomic Habits?offers a proven framework for improving - every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.', 'Mark R. Levin', 'Health'),
(43, 'How Not to Die', '23.77', '30.0', 'Image/How Not to Die.jpg', 'The international bestseller,?Dr Michael Greger\'s?How Not To Die?gives effective, scientifically-proven nutritional advice to prevent our biggest killers ? including heart disease, breast cancer, prostate cancer, high blood pressure and diabetes ? and reveals the astounding health benefits that simple dietary choices can provide.', 'Mark R. Levin', 'Health'),
(44, 'A Promised Land', '10.03', '15.0', 'Image/A Promised Land.jpg', 'A riveting, deeply personal account of history in the making - from the president who inspired us to believe in the power of democracy', 'Doogie Horner', 'History'),
(45, 'Willie Nelson\'s Letters t', '10.99', '15.0', 'Image/Willie Nelson\'s Letters to America.jpg', 'From his opening letter ?Dear America? to his ?Dear Willie? epilogue, Willie digs deep into his heart and soul--and his music catalog--to lift us up in difficult times, and to remind us of the endless promise and continuous obligations of all Americans--to themselves, to one another, and to their nation.', 'Doogie Horner', 'History'),
(46, 'The Spy and the Traitor', '11.23', '15.0', 'Image/The Spy and the Traitor.jpg', 'The celebrated author of?Double Cross?and?Rogue Heroes?returns with his greatest spy story yet, a thrilling?Americans-era tale of Oleg Gordievsky, the Russian whose secret work helped hasten the end of the Cold War.', 'Doogie Horner', 'History'),
(47, 'How the Word Is Passed', '32.60', '34.0', 'Image/How the Word Is Passed.jpg', 'Beginning in his hometown of New Orleans, Clint Smith leads the reader on an unforgettable tour of monuments and landmarks?those that are honest about the past and those that are not?that offer an intergenerational story of how slavery has been central in shaping our nation?s collective history, and ourselves', 'Doogie Horner', 'History'),
(48, 'Ghost Soldiers', '15.19', '20.0', 'Image/Ghost Soldiers.jpg', 'On January 28, 1945, 121 hand-selected U.S. troops slipped behind enemy lines in the Philippines. Their mission: March thirty rugged miles to rescue 513 POWs languishing in a hellish camp, among them the last survivors of the infamous Bataan Death March. A recent prison massacre by Japanese soldiers elsewhere in the Philippines made the stakes impossibly high and left little time to plan the complex operation.', 'Doogie Horner', 'History'),
(49, 'When Brooklyn Was Queer', '7.12', '10.0', 'Image/When Brooklyn Was Queer.jpg', 'Hugh Ryan\'s?When Brooklyn Was Queer?is a groundbreaking exploration of the LGBT history of Brooklyn, from the early days of Walt Whitman in the 1850s up through the queer women who worked at the Brooklyn Navy Yard during World War II, and beyond. No other book, movie, or exhibition has ever told this sweeping story.', 'Lee Child', 'History'),
(50, 'Killing the Mob', '8.87', '10.0', 'Image/Killing the Mob.jpg', 'In the tenth book in the multimillion-selling?Killing?series, Bill O?Reilly and Martin Dugard take on their most controversial subject yet: The Mob.', 'Lee Child', 'History'),
(51, 'The Forgotten 500', '12.99', '15.0', 'Image/The Forgotten 500.jpg', 'The?astonishing, never before told story of the greatest rescue mission of World War II?when the OSS set out to recover more than 500 airmen trapped behind enemy lines in Yugoslavia', 'Lee Child', 'History'),
(52, 'Blood Guts and Glory', '13.44', '15.0', 'Image/Blood, Guts, and Glory,.jpg', 'One of the greatest characters in Western fiction. Two of the wildest tales of frontier vengeance from William Johnstone’s classic bestselling saga. This is how Smoke Jensen became a legend.', 'Lee Child', 'Horror'),
(53, 'Red River Vengeance', '22.78', '25.0', 'Image/Red River Vengeance.jpg', 'A good man like Perley Gates knows that when you race with the devil, you’d better cross the finish line first—or you won’t finish at all . . .', 'Lee Child', 'Horror'),
(54, 'North of Laramie', '21.45', '23.0', 'Image/North of Laramie.jpg', 'The bestselling Johnstones kick off their blazing new western series with a real bang—a fatal, fateful shootout that sends a man named Buck Trammel on the ride of his life . . .', 'Lee Child', 'Horror'),
(55, 'The Kerrigans', '10.87', '13.0', 'Image/The Kerrigans.jpg', 'A compelling saga of a family\'s struggle to build an empire on the frontier, from the USA Today bestselling authors of The Family Jensen.', 'Lee Child', 'Horror'),
(56, 'Trail of the Mountain Man', '16.77', '18.0', 'Image/Trail of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'Lee Child', 'Horror'),
(57, 'Out of the Ashes', '40.80', '42.0', 'Image/Out of the Ashes.jpg', 'In this western by the bestselling author of Return of the Mountain Man, legendary gunslingers unite to save a beleaguered mining town.', 'Lee Child', 'Horror'),
(58, 'Code of the Mountain Man', '35.20', '37.0', 'Image/Code of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'Lee Child', 'Horror'),
(59, 'Revenge of  Mountain Man', '32.60', '34.0', 'Image/Revenge of the Mountain Man.jpg', 'In this western by the USA Today–bestselling author of Trail of the Mountain Man, criminals go after the wrong man’s wife, and he’s out for revenge. Smoke Jensen—A One Man Judge and Jury.', 'Lee Child', 'Horror'),
(60, 'The Seven Day Switch', '15.19', '20.0', 'Image/The Seven Day Switch.jpg', 'Two moms as opposite as a Happy Meal and a quinoa bowl. What a difference a week makes in a heartfelt, laugh-out-loud novel by the?Washington Post?bestselling author of?The Overdue Life of Amy Byler', 'Terry McMillan', 'Humor'),
(61, 'Have We Met?', '7.12', '10.0', 'Image/Have We Met.jpg', 'What if you already met the soul mate you were destined to be with? And you didn?t even know it?With help from a new group of friends, her loving if annoying family, and maybe a touch of fate, can Corinne come to terms with the loss she?s still reeling from, take control of her career, and find love along the way?', 'Terry McMillan', 'Humor,Comic'),
(62, 'The Mixtape', '8.87', '10.0', 'Image/The Mixtape.jpg', 'Since the death of his twin brother, Oliver?s caught between pleasing his fans and finding himself. Emery finds him first.', 'Terry McMillan', 'Humor'),
(63, 'The Seven Day Switch', '15.19', '20.0', 'Image/The Seven Day Switch.jpg', 'Two moms as opposite as a Happy Meal and a quinoa bowl. What a difference a week makes in a heartfelt, laugh-out-loud novel by the?Washington Post?bestselling author of?The Overdue Life of Amy Byler', 'Terry McMillan', 'Humor,Fiction'),
(64, 'Have We Met?', '7.12', '10.0', 'Image/Have We Met.jpg', 'What if you already met the soul mate you were destined to be with? And you didn?t even know it?With help from a new group of friends, her loving if annoying family, and maybe a touch of fate, can Corinne come to terms with the loss she?s still reeling from, take control of her career, and find love along the way?', 'Terry McMillan', 'Humor, Thriller'),
(65, 'The Mixtape', '8.87', '10.0', 'Image/The Mixtape.jpg', 'Since the death of his twin brother, Oliver?s caught between pleasing his fans and finding himself. Emery finds him first.', 'Terry McMillan', 'Humor'),
(66, 'Heres to Us', '23.77', '25.0', 'Image/Here\'s to Us.jpg', 'Becky Albertalli and Adam Silvera reunite to continue the story of Arthur and Ben, the boys readers first fell for in the New York Times bestselling rom-com What If It’s Us.', 'Terry McMillan', 'Humor,Fantacy'),
(67, 'Yes No Maybe So', '17.88', '20.0', 'Image/Yes No Maybe So.jpg', 'A book about the power of love and resistance from New York Times bestselling authors Becky Albertalli and Aisha Saeed.', 'Terry McMillan', 'Humor'),
(68, 'The Box in the Woods', '15.18', '17.0', 'Image/The Box in the Woods.jpg', 'After solving the case of Truly Devious, Stevie Bell investigates her first mystery outside of Ellingham Academy in this spine-chilling and hilarious stand-alone mystery from New York Times bestselling author Maureen Johnson.', 'James Patterson', 'Humor'),
(69, 'Kate in Waiting', '15.19', '20.0', './Image/Kate in Waiting.jpg', 'From #1 New York Times bestselling author and rom-com queen Becky Albertalli comes a buoyant new novel about daring to step out of the shadows and into the spotlight in love, life, and, yes, theater.', 'James Patterson', 'Love,Fiction'),
(70, 'Simon vs the homo', '7.12', '10.0', './Image/Simon vs. the Homo Sapiens Agenda.jpg', ' Langford! This edition includes new Simon and Blue emails, a behind-the-scenes scrapbook from the Love, Simon movie set, and Becky Albertalli in conversation with fellow authors Adam Silvera and Angie Thomas.', 'James Patterson', 'Love,Comic'),
(71, 'Leah on the Offbeat', '8.87', '12.0', './Image/Leah on the Offbeat.jpg', 'In this sequel to the acclaimed Simon vs. the Homo Sapiens Agenda—now a major motion picture, Love, Simon—we follow Simon’s BFF Leah as she grapples with changing friendships, first love, and senior year angst.', 'James Patterson', 'Love, Fantacy'),
(72, 'Love, Creekwood', '7.99', '9.0', './Image/Love, Creekwood,.jpg', 'bestselling Simonverse novels in this highly anticipated epilogue novella. Perfect for fans of Becky Albertalli, the movie Love, Simon, and the new Hulu series spin-off, Love, Victor!', 'James Patterson', 'Love, Horror'),
(73, 'Upside of Unrequited', '9.01', '10.0', 'Image/The Upside of Unrequited.jpg', 'From the award-winning author of Simon vs. the Homo Sapiens Agenda comes a funny, authentic novel about sisterhood, love, and identity. “Heart-fluttering, honest, and hilarious. I can’t stop hugging this book.” —Stephanie Perkins, New York Times bestselling author of Anna and the French Kiss.', 'James Patterson', 'Love'),
(74, 'What If It s Us', '43.33', '45.0', 'Image/What If It\'s Us.jpg', 'Critically acclaimed and bestselling authors Becky Albertalli and Adam Silvera combine their talents in this smart, funny, heartfelt collaboration about two very different boys who can’t decide if the universe is pushing them together—or pulling them apart.', 'James Patterson', 'Love'),
(75, 'Heres to Us', '23.77', '25.0', 'Image/Here\'s to Us.jpg', 'Becky Albertalli and Adam Silvera reunite to continue the story of Arthur and Ben, the boys readers first fell for in the New York Times bestselling rom-com What If It’s Us.', 'James Patterson', 'Love,Fiction'),
(76, 'Yes No Maybe So', '17.88', '20.0', 'Image/Yes No Maybe So.jpg', 'A book about the power of love and resistance from New York Times bestselling authors Becky Albertalli and Aisha Saeed.', 'James Patterson', 'Love'),
(77, 'The Alchemist', '20.00', '25.0', 'Image/The Alchemist.jpg', 'Combining magic, mysticism, wisdom and wonder into an inspiring tale of self-discovery,?The Alchemist?has become a modern classic, selling millions of copies around the world and transforming the lives of countless readers across generations.', 'James Patterson', 'Sci-Fi,Fiction'),
(78, 'The Invisible Life of Add', '13.44', '15.0', 'Image/The Invisible Life of Addie LaRue.jpg', 'In the vein of?The Time Traveler?s Wife?and?Life After Life,?The Invisible Life of Addie LaRue?is?New York Times?bestselling author V. E. Schwab?s genre-defying tour de force.', 'James Patterson', 'Sci-Fi,Fiction'),
(79, 'The Midnight Library', '22.78', '25.0', 'Image/The Midnight Library.jpg', 'Winner of the Goodreads Choice Award for Fiction | A Good Morning America Book Club Pick |?Independent (London) Ten Best Books of the Year', 'Terry McMillan', 'Sci-Fi,Fantacy'),
(80, 'Harry Potter and the Sorc', '21.45', '25.0', 'Image/Harry Potter and the Sorcerer\'s Stone.jpg', 'A global phenomenon and cornerstone of contemporary children?s literature, J.K. Rowling?s?Harry Potter?series is both universally adored and critically acclaimed. Now, experience the magic as you?ve never heard it before. The inimitable Jim Dale brings to life an entire cast of characters - from the pinched, nasal whine of Petunia Dursley to the shrill huff of the Sorting Hat to the earnest, wondrous voice of the boy wizard himself.?', 'Terry McMillan', 'Sci-Fi,Horror'),
(81, 'Python Crash Course', '10.87', '15.0', 'Image/Python Crash Course.jpg', 'Second edition of the best-selling Python book in the world. A fast-paced, no-nonsense guide to programming in Python. Updated and thoroughly revised to reflect the latest in Python code and practices.', 'Mark R. Levin', 'Technology'),
(82, 'Designing Data-Intensive ', '16.77', '20.0', 'Image/Designing Data-Intensive Applications.jpg', 'Data is at the center of many challenges in system design today. Difficult issues need to be figured out, such as scalability, consistency, reliability, efficiency, and maintainability. In addition, we have an overwhelming variety of tools, including relational databases, NoSQL datastores, stream or batch processors, and message brokers. What are the right choices for your application? How do you make sense of all these buzzwords?', 'Mark R. Levin', 'Technology,Sci-F'),
(83, 'Hands-On Machine Learning', '40.80', '45.0', 'Image/Hands-On Machine Learning with Scikit-Learn.jpg', 'Through a series of recent breakthroughs, deep learning has boosted the entire field of machine learning. Now, even programmers who know close to nothing about this technology can use simple, efficient tools to implement programs capable of learning from data. This practical book shows you how.', 'Mark R. Levin', 'Technology'),
(84, 'Clean Code', '35.20', '40.0', 'Image/Clean Code.jpg', 'Even bad code can function. But if code isn?t clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn?t have to be that way.', 'Mark R. Levin', 'Technology'),
(85, 'Elon Musk', '23.77', '30.0', 'Image/Elon Musk.jpg', 'In the spirit of?Steve Jobs?and?Moneyball,?Elon Musk?is both an illuminating and authorized look at the extraordinary life of one of Silicon Valley\'s most exciting, unpredictable, and ambitious entrepreneurs - a real-life Tony Stark - and a fascinating exploration of the renewal of American invention and its new makers.', 'Mark R. Levin', 'Technology'),
(86, 'Refrigerant Charging and ', '17.88', '20.0', 'Image/Refrigerant Charging and Service Procedures for Air Conditioning.jpg', 'This Paperback is dedicated to those who are eager to learn the HVACR Trade and Refrigerant Charging/Troubleshooting Practices. In this book, you will find Step by Step Procedures for preparing an air conditioning and heat pump system for refrigerant, reading the manifold gauge set, measuring the refrigerants charge level, and troubleshooting problems with the system?s refrigerant flow.', 'Mark R. Levin', 'Technology'),
(87, 'Baby University Board Boo', '15.18', '20.0', 'Image/Baby University Board Book Set.jpg', 'The bestselling?Baby University?baby board book set includes educational books for toddlers written by an expert that features colorful, simple introductions to scientific principles for babies. Its approach to early learning is beloved by kids and grownups!', 'Mark R. Levin', 'Technology'),
(88, 'Classic Car', '14.69', '20.0', 'Image/Classic Car.jpg', 'Few things ignite such reverence as a classic car. With more than 250 iconic models from the 1940s to the 1980s, photographed from every angle, this title is a glorious celebration of the stars in the classic car firmament.?', 'Mark R. Levin', 'Technology'),
(89, 'The Box in the Woods', '15.18', '17.0', 'Image/The Box in the Woods.jpg', 'After solving the case of Truly Devious, Stevie Bell investigates her first mystery outside of Ellingham Academy in this spine-chilling and hilarious stand-alone mystery from New York Times bestselling author Maureen Johnson.', 'Mark R. Levin', 'Thriller,Lova'),
(90, 'Truly Devious', '14.69', '16.5', 'Image/truly devious.jpg', 'New York Times bestselling author Maureen Johnson weaves a delicate tale of murder and mystery in the first book of a striking new series, perfect for fans of Agatha Christie and E. Lockhart.', 'Doogie Horner', 'Thriller,Fantacy'),
(91, 'The Vanishing Stair ', '12.76', '15.0', 'Image/The Vanishing Stair.jpg', 'In New York Times bestselling author Maureen Johnson’s second novel in the Truly Devious series, there are more twists and turns than Stevie Bell can imagine. No answer is given freely, and someone will pay for the truth with their life.', 'Doogie Horner', 'Thriller,Horror'),
(92, 'Hand on the Wall', '10.03', '12.0', 'Image/The hand on the wall.jpg', 'New York Times bestselling author Maureen Johnson delivers the witty and pulse-pounding conclusion to the Truly Devious series as Stevie Bell solves the mystery that has haunted Ellingham Academy for over 75 years.', 'Doogie Horner', 'Thriller,Comic'),
(93, 'Hello, Cruel Heart', '10.99', '12.0', 'Image/Hello, Cruel Heart.jpg', 'An electric new story of teenage Cruella de Vil in an original novel inspired by the upcoming Walt Disney Studios Live Action Film, Cruella.', 'Doogie Horner', 'Thriller,Fantacy'),
(94, 'The Shadow Cabinet', '11.23', '14.0', 'Image/The Shadow Cabinet.jpg', 'Time is running out as Rory fights to find her friends and the ghost squad struggles to stop Jane from unleashing her spectral nightmare on the entire city. In the process, they’ll discover the existence of an organization that underpins London itself—and Rory will learn that someone she trusts has been keeping a tremendous secret.', 'Doogie Horner', 'Thriller,Fiction'),
(95, '13 Little Blue Envelopes', '12.99', '15.0', 'Image/13 Little Blue Envelopes.jpg', 'Ginny Blackstone never thought she’d spend her summer vacation backpacking across Europe. But that was before she received the first little blue envelope from Aunt Peg.', 'Doogie Horner', 'Thriller,Horror'),
(96, 'The Madness Underneath', '20.00', '22.0', 'Image/The madness underneath.jpg', 'There’s a creepy new terror haunting modern-day London. Fresh from defeating a Jack the Ripper killer, Rory must put her new-found hunting skills to the test before all hell breaks loose…', 'Doogie Horner', 'Thriller,Fantacy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productb`
--
ALTER TABLE `productb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productb`
--
ALTER TABLE `productb`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
