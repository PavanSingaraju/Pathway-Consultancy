-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2020 at 05:25 AM
-- Server version: 5.6.40-84.0-log
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathwayconsultancy`
--
CREATE DATABASE IF NOT EXISTS `pathwayconsultancy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pathwayconsultancy`;

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE `Appointment` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `AssignedStudents`
--

CREATE TABLE `AssignedStudents` (
  `EmployeeName` varchar(255) NOT NULL,
  `StudentID` int(255) NOT NULL,
  `studentEmail` varchar(255) NOT NULL,
  `StudentUnis` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AssignedStudents`
--

INSERT INTO `AssignedStudents` (`EmployeeName`, `StudentID`, `studentEmail`, `StudentUnis`, `studentName`, `id`) VALUES
('employee1', 10, 'test2@gmail.com', '2-1-4-3-2-5-7-10-9-11-12', 'test2', 1),
('employee1', 12, 'nayananarlapuram95@gmail.com', '1-9', 'nana', 2),
('employee1', 8, 'chandankore1994@gmail.com', '23-25-28-1-6', 'chandan', 3),
('employee1', 9, 'test1@gmail.com', '20-19-18-17-16', 'test1', 4),
('employee1', 11, 'pavansingaraju1412@gmail.com', '', 'pavan', 5),
('rohit', 10, 'test2@gmail.com', '4-3-5-7-10-11-12', 'test2', 7),
('rohit', 9, 'test1@gmail.com', '20-19-18-17-16', 'test1', 8),
('employee1', 9, 'test1@gmail.com', '20-19-18-17-16', 'test1', 9),
('rohit', 9, 'test1@gmail.com', '20-19-18-17-16', 'test1', 10),
('rohit', 8, 'chandankore1994@gmail.com', '25-6', 'chandan', 11),
('employee1', 8, 'chandankore1994@gmail.com', '25-6', 'chandan', 12),
('employee1', 9, 'test1@gmail.com', '20-19-18-17-16', 'test1', 13),
('employee1', 10, 'test2@gmail.com', '4-3-5-7-10-11-12', 'test2', 14),
('Bhanu Kumar', 8, 'chandankore1994@gmail.com', '25-6', 'chandan', 15),
('Bhanu Kumar', 10, 'test2@gmail.com', '4-3-5-7-10-11-12', 'test2', 16),
('Bhanu Kumar', 12, 'nayananarlapuram95@gmail.com', '1-1', 'nana', 17);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `EmployeeID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `workType` varchar(255) NOT NULL,
  `mobileNumber` int(255) NOT NULL,
  `TempPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`EmployeeID`, `username`, `email`, `role`, `workType`, `mobileNumber`, `TempPassword`) VALUES
(5, 'employee1', 'mikeross1909@gmail.com', 'councelor', 'part time', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Bhanu Kumar', 'pavansundersingaraju@gmail.com', 'Supervisor', 'Full time', 2147483647, 'f8784f1a6478ffe1f8d8de47432c8253');

-- --------------------------------------------------------

--
-- Table structure for table `HomePageContent`
--

CREATE TABLE `HomePageContent` (
  `id` int(11) NOT NULL,
  `welcomeParagraph` mediumtext NOT NULL,
  `ServicesHeader` mediumtext NOT NULL,
  `StudentServicesParagraph` mediumtext NOT NULL,
  `MigrationServicesParagraph` mediumtext NOT NULL,
  `StudyInAustraliaParagraph` mediumtext NOT NULL,
  `StudyInCanadaParagraph` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HomePageContent`
--

INSERT INTO `HomePageContent` (`id`, `welcomeParagraph`, `ServicesHeader`, `StudentServicesParagraph`, `MigrationServicesParagraph`, `StudyInAustraliaParagraph`, `StudyInCanadaParagraph`) VALUES
(1, 'Work With a Consultancy That Gets It.', 'Your dedicated Pathway counsellor will work with you closely to prepare you for your study abroad journey and help you every step of the way.', 'Talking with an Education Counsellor from Pathway Consultancy can help. You can tell us your career goals and we’ll provide you with expert guidance on the study choices that will get you there.', 'Applying for a visa to study or live anywhere can be a confusing and complicated process with the ever-changing rules and documentation requirements. Our team of registered and experienced migration agents can offer comprehensive guidance and end to end management of your visa application for you.', 'Over 1.4 million local and international students choose to study in Australia’s universities each year. They pursue a wide range of academic disciplines, from health and education to engineering and information technology.', 'Canadian universities are known for their high quality and excellence in academic standards and are consistently ranked among the top universities internationally.');

-- --------------------------------------------------------

--
-- Table structure for table `shortlisteduni`
--

CREATE TABLE `shortlisteduni` (
  `studentName` varchar(255) NOT NULL,
  `UNiversityID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shortlisteduni`
--

INSERT INTO `shortlisteduni` (`studentName`, `UNiversityID`) VALUES
('pavan1412', 21),
('pavan1412', 14),
('chandan', 25),
('chandan', 6),
('test1', 20),
('test1', 19),
('test1', 18),
('test1', 17),
('test1', 16),
('test2', 4),
('test2', 3),
('test2', 5),
('test2', 7),
('test2', 10),
('test2', 11),
('test2', 12),
('Disco Raj', 11),
('nana', 1),
('nana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TrendingCoursesAustralia`
--

CREATE TABLE `TrendingCoursesAustralia` (
  `id` int(255) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `Universities` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TrendingCoursesAustralia`
--

INSERT INTO `TrendingCoursesAustralia` (`id`, `CourseName`, `description`, `img`, `Universities`) VALUES
(1, 'Accountancy', 'An accountancy degree opens up a huge range of options, both for specialisation with further study options and for employment. They are roles that are in demand at present, with tax and management accountancy roles are both listed on the trade shortage list.', 'img/trending_aus/accountancy.jpg', 'The University of New South Wales (UNSW Sydney) The University of Melbourne. The University of Sydney. The Australian National University (ANU) Monash University'),
(2, 'Architecture', 'It’s an industry that is being challenged and changed by environmental needs. Accounting for sun, rain, wind and designing homes and businesses that are energy efficient and have minimal impact on the landscape is incredibly important. Architecture, both commercial and residential, is a career option that’s in demand in Australia.\r\n\r\n', 'img/trending_aus/architecture.jpg', 'RMIT University,Queensland University of Technology,University of New South Wales,Curtin University of Technology'),
(3, 'Computer science and information technology', 'Software and computer science engineers are in demand, both in Australia and world-wide. With the explosion of AI, the possibilities and growth potential for those in this field are rich. Specialising in areas such as machine learning, data management and banking give great career outcomes.', 'img/trending_aus/IT.jpg', 'Queensland University of Technology (QUT),University of Technology Sydney (UTS), The University of Queensland (UQ), The University of New South Wales (UNSW)'),
(4, 'Psychology', 'Another broad field, the study of human behaviour and mind can be applied to a range of careers. In Australia, the skills shortage list includes clinical psychologists, educational psychologists, organisational psychologists and psychotherapists. The intersection of psychology and machine learning has interesting prospects as well.', 'img/trending_aus/psychology.jpg', 'Monash University,Curtin University,University of Sydney,University of Melbourne,Swinburne University'),
(5, 'Tourism and hospitality management', 'With breath-taking scenery and an array of things to do, there is a large tourism industry in Australia. People come from all over the world to laze on white sandy beaches, explore vast deserts, indulge in everything that metropolitan cities offer, and try to see some of Australia’s unique wildlife.', 'img/trending_aus/tourism.jpg', 'Griffith University,Bond University,University of Queensland,Murdoch University');

-- --------------------------------------------------------

--
-- Table structure for table `TrendingCoursesCanada`
--

CREATE TABLE `TrendingCoursesCanada` (
  `id` int(255) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `Universities` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TrendingCoursesCanada`
--

INSERT INTO `TrendingCoursesCanada` (`id`, `CourseName`, `description`, `img`, `Universities`) VALUES
(1, 'Business and Finance', 'The levels and programs offered by the university help building the foundation of a financial professional.\r\n\r\nSome famous courses in finance for international students in Canada: -\r\n\r\nBusiness Finance\r\nBusiness Administration Finance\r\nAccounting and Finance', 'img/trending_can/business.jpg', 'University of Toronto,Centennial College,Douglas College,University of Regina,Thompson Rivers University'),
(2, 'Nursing', 'Canadian schools are very famous for certain programs, out of which most popular specializations - children’s nursing, general nursing, mental health nursing, disability nursing, and nursing administration are few well-known ones and are available for both.', 'img/trending_can/nursing.jpg', 'Dalhousie University,University of New Brunswick,University of Calgary,University of Toronto,University of British Columbia'),
(3, 'Dentistry', 'Dentistry is a regular profession. One must have any of the mentioned degrees BDS/DDS/DMD certified by NDEB for being a dentist. Some famous courses in Dentistry for international students in Canada: -\r\n\r\nDental Surgery\r\nOrthodontics\r\nDental Hygiene', 'img/trending_can/Dentistry.jpg', 'McGill University,University of Alberta,Dalhousie University,University of British Columbia,University of Toronto'),
(4, 'Engineering', 'With a number of fields to choose from, four courses mentioned below are together considered as “big four”. Engineering has always been a popular choice among the students.', 'img/trending_can/engineering.jpg', 'University of Toronto,McGill University,University of British Columbia,University of Montreal,University of Alberta'),
(5, 'Pharmacy', 'This field of education provides an opportunity to know about various health problems and medical substances provided to patients for therapeutic use. Pharmacy focuses on Physics, Chemistry, Biology and Physiology.', 'img/trending_can/pharmacy.jpg', 'University of British Columbia,University of Waterloo,University of Alberta,University of Toronto,Dalhousie University');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `world_ranking` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `country`, `url`, `city`, `world_ranking`, `img`, `description`) VALUES
(1, 'Australian National University', 'Australia', 'https://www.anu.edu.au/', 'canberra', 24, 'img/uni_aus/anu.jpg', 'Established in 1946, the Australian National University (ANU) was originally created as a postgraduate research university by the Parliament of Australia. It is located in Canberra, Australia’s capital city and seat of government. \r\n\r\nIt counts six Nobel prizewinners among its faculty and alumni, and is even run by a Nobel laureate. Brian Schmidt, who won the 2011 Nobel Prize in Physics (with Saul Perlmutter and Adam Riess) for providing evidence that the expansion of the universe is accelerating, is the institution’s vice-chancellor.\r\n\r\nThe university has many partnerships with international universities, including Yale University, the University of Oxford, ETH Zurich, and the National University of Singapore.  '),
(2, 'University of Melbourne', 'Australia', 'https://www.unimelb.edu.au/', 'Melbourne', 48, 'img/uni_aus/uom.jpg', 'The University of Melbourne was founded in 1853, making it the second oldest in the country (keep reading to find out the oldest).\r\n\r\nIt is home to 47,000 students and 6,500 members of staff, and has 280,000 alumni around the world (some 15 per cent of whom live outside Australia).\r\n\r\nMore than 12,000 international students are enrolled at the University of Melbourne, and if you do get a place there, you will be joining students from 130 different countries.\r\n\r\nYou will also be rubbing shoulders with some pretty famous scholars. Nobel prizewinner Peter Doherty (physiology and medicine) and fellows of the Royal Society David Solomon and David Boger all teach or research at Melbourne.'),
(3, 'University of Sydney', 'Australia', 'https://sydney.edu.au/', 'Sydney', 42, 'img/uni_aus/uos.jpeg', 'Founded in 1851, the University of Sydney is the oldest university in Australia.  Currently, 45,000 students attend the University of Sydney, representing some 134 nations. About 280 overseas exchange programmes are in place with more than 30 countries.  No fewer than five Australian prime ministers attended the university, including Edmund Barton, who in 1901, won Australia’s first ever federal election.  Sydney is also considered one of the best university cities for students. '),
(4, 'University of New South Wales (UNSW)', 'Australia', 'https://www.unsw.edu.au\r\n', 'Sydney', 45, 'img/uni_aus/unsw.jpg', 'UNSW Sydney was established in 1949.   There are more than 52,000 students at the university, including 13,000 international students from 130 countries.  The university has more than 200 agreements with universities in 39 countries to facilitate student exchanges and research projects.   The university recently launched the Michael Crouch Innovation Centre, which aims to support students to design and experiment with business ideas. The team then helps students turn their ideas into reality through partnerships with commercial companies.'),
(5, 'University of Queensland (UQ)', 'Australia', 'https://www.uq.edu.au', 'Brisbane', 48, 'img/uni_aus/uq.jpg', 'The motto of the University of Queensland (UQ) motto is Scientia ac Labore, which is Latin for “by means of knowledge and hard work” – so be prepared to do some grafting!  UQ has about 39,000 students enrolled, including 12,000 international students from 141 countries. It also has one of Australia’s largest PhD cohorts with about 13,800 postgraduate students registered.  Famous graduates include a Nobel laureate, two Fortune 500 company CEOs, Oscar winner Geoffrey Rush and poet Bronwyn Lea.    The university’s main campus is located in the green and leafy inner Brisbane suburb of St Lucia – one of the most affluent areas of the city.'),
(6, 'Monash University', 'Australia', 'https://www.monash.edu', 'Melbourne', 59, 'img/uni_aus/monash.jpg', 'Monash University was founded in 1958 and is the second oldest university in the state of Victoria in Australia. It is also the largest university in Australia. It was named after the engineer, military leader and public administrator Sir John Monash.  It is a member of the Group of Eight, a group of Australia\'s eight leading research universities.  Students can choose from more than 6,000 course across 10 faculties: art, design and architecture, arts, business and economics, education, engineering, information technology, law, medicine, nursing and health sciences, pharmacy and pharmaceutical sciences and science.  The university has many campuses across Victoria and Australia as well as international campuses in Malaysia, Italy, India and China.  '),
(7, 'University of Western Australia (UWA)', 'Australia', 'https://www.uwa.edu.au', 'Perth', 91, 'img/uni_aus/uwa.jpeg', 'The University of Western Australia (UWA) is one of Australia’s “sandstone universities”: universities dating back a century or more. UWA is the youngest of the sandstones, having been founded in 1911. It was the first university in the state of Western Australia.    Australian Prime Minister Bob Hawke, comedian Tim Minchin and Nobel Prize winning medic Barry Marshall are among UWA’s alumni.  UWA’s main campus is located in Perth, the capital city of Western Australia. The central business district is just ten minutes away from UWA. Students don’t have to venture far to find entertainment and amenities as the campus has its own hairdresser, weekly market, dentist, bank and outdoor cinema, among other facilities. The Matilda Bay nature reserve and Swan River border the campus, and the beach is a short distance away.  '),
(8, 'University of Adelaide', 'Australia ', 'https://www.adelaide.edu.au', 'Adelaide', 114, 'img/uni_aus/uoa.jpg', 'Adelaide has 25,000 registered students (about 30 per cent of whom are international students from over 100 countries) and 3,600 members of staff. The university has four campuses located throughout South Australia and degree programmes are also offered in Singapore through its partnership with the Ngee Ann-Adelaide Education Centre. Other study abroad opportunities are available to students in Hong Kong, France, the Netherlands, and more.  The university claims associations with five Nobel laureates and 110 Rhodes scholars, as well as many other notable alumni, including Julia Gillard, the first female Prime Minister of Australia, and Robin Warren. It is a member of the Group of Eight association of Australia’s leading research-intensive universities, with degrees offered across five faculties: arts, engineering, computer and mathematical sciences, health sciences, as well as the professions and faculty of sciences. '),
(9, 'University of Technology, Sydney (UTS)', 'Australia ', 'https://www.uts.edu.au', 'Sydney ', 160, 'img/uni_aus/uts.jpg', 'At the University of Technology Sydney, our vision is to be a world-leading university of technology. UTS is known for its practice-oriented teaching programs, focus on high-impact research, and strong, enduring partnerships with industry and the professions.  UTS has invested in world-class facilities to create an environment that supports innovative learning approaches. This \"campus of the future\", includes four new buildings, cutting-edge equipment, purpose-built facilities and increased public spaces to encourage collaboration.  UTS is part of the Australian Technology Network of universities: a group of five prominent universities committed to working with industry and government to deliver practical and professional courses.'),
(10, 'University of Newcastle', 'Australia ', 'https://www.newcastle.edu.au', 'Newcastle', 214, 'img/uni_aus/unc.jpg', 'For over 50 years the University of Newcastle has delivered education to talented students from diverse backgrounds, developed professional leaders of the future and harnessed the capacity of world-class research to pursue solutions to the world’s greatest challenges. With over 37,000 students from 114 countries, and more than 143,000 alumni in 134 countries, the outlook is truly global. Their degrees focus on real-world experience, strong connections to industry, entrepreneurial opportunities and interactive teaching and learning.'),
(11, 'University of Wollongong', 'Australia ', 'https://www.uow.edu.au', 'Wollongong', 218, 'img/uni_aus/uow.jpg', 'UOW has a strong international focus and reputation, with close to 6000 international students studying across its Australian campuses each year. UOW Dubai has been in operation for more than 20 years. In 2015 UOW became the first ever overseas-based university to enter Hong Kong when it was selected to take custodianship of the Community College of City University Hong Kong (CCCU) and transform CCCU into an international campus.  The University also has three campuses in Greater Sydney (Sydney CBD, Southern Sydney at Loftus and South West Sydney at Liverpool), as well as campuses at Nowra, Batemans Bay and Bega on the NSW South Coast, and at Moss Vale in the Southern Highlands.'),
(12, 'Queensland University of Technology (QUT) ', 'Australia ', 'https://www.qut.edu.au', 'Brisbane', 244, 'img/uni_aus/qut.jpeg', 'Queensland University of Technology (QUT) is a major Australian university with a global outlook and a \'real-world\' focus.  With around 50,000 students, including approximately 9000 international students from more than 120 countries, QUT maintains close links with business representatives and industry professionals who contribute to course development and lend practical perspectives to students’ theoretical education.  QUT is located in subtropical Brisbane, which is Australia’s third largest city and known for its vibrant urban precincts, outdoor lifestyle, friendly locals, superb climate and natural attractions.  QUT offers hundreds of undergraduate and postgraduate study options that include extensive research programs and delivers real world outcomes for students through its provision of leading academics, state-of the-art-teaching facilities and a focussed approach to learning.'),
(13, 'Curtin University', 'Australia ', 'https://www.curtin.edu.au', 'Perth', 250, 'img/uni_aus/curtin.png', 'Curtin is a vibrant, young university where ideas and cultures combine to create a place of enthusiasm, endeavour and achievement.  When you choose Curtin, you are choosing an innovative, global university with extensive industry connections and campuses in Western Australia, Malaysia, Singapore, Dubai and Mauritius.  The university offers a range of undergraduate and postgraduate degrees in business, humanities, health sciences, resources, engineering and related sciences.  You’ll learn in technology-rich environments and feel inspired by our high-impact research spanning many areas including astronomy and planetary science, emerging technologies, economics, health, minerals, energy and sustainability'),
(14, 'University of South Australia (UNISA)', 'Australia ', 'https://www.unisa.edu.au', 'Adelaide', 264, 'img/uni_aus/usa.jpg', 'The University of South Australia is a globally connected and engaged university with industry-informed teaching and research that is inventive and adventurous.  Ranked number one in Australia for quality education^ and with 100% of assessed research rated at or above world-class*, the University is young, innovative and offers students the chance to gain real-world experience.  Focused on life beyond the classroom, the University of South Australia offers a practical approach to teaching and learning. Its graduates are the new professionals, global citizens at ease with the world and ready to create and respond to change. '),
(15, 'Deakin University', 'Australia ', 'https://www.deakin.edu.au', 'Geelong', 309, 'img/uni_aus/deakin.jpeg', 'A high quality education, excellent employment prospects and a university experience you will love – that’s what Deakin University has to offer.  Deakin University, Australia, is ranked among the top 50 young universities in the world. We have a reputation for being innovative and visionary, forging new paths both locally and globally. With hundreds of courses on offer across five great campuses and flexible study options, you can choose a course that suits your lifestyle now while pursuing your goals for the future.  With our Times Higher Education rankings in teaching, research, industry income and international outlook increasing year after year, you can see why Deakin’s world-class education attracts students from all over the globe.'),
(16, 'Griffith University', 'Australia ', 'https://www.griffith.edu.au', 'Brisbane, Goldcoast', 329, 'img/uni_aus/griffith.jpg', 'Griffith University is a public research university in Queensland, situated on the East coast of Australia. It is still a relatively young university, having been formally established in 1971 and first opening its doors for students in 1975.  The university started with one campus in the Brisbane suburb of Nathan with 451 students. It has now expanded to five campuses across three cities: Gold Coast campus, Logan Campus, Nathan Campus, Mount Gravatt Campus and the South Bank Campus.  The teaching at Griffith University is structured across four academic groups, with a number of disciplines within each group. These groups are arts, education and law, business, health and science. Across these schools around 200 degrees are available at undergraduate, postgraduate and PhD level'),
(17, 'James Cook University (JCU)', 'Australia', 'https://www.jcu.edu.au', 'Brisbane', 369, 'img/uni_aus/jcu.jpg', 'James Cook University (JCU) is a leader in teaching and research that addresses the critical challenges facing the Tropics. Our Australian campuses in Cairns and Townsville are on the doorstep of some of the world’s most spectacular environments: the Great Barrier Reef Marine Park and the rainforests of the Wet Tropics, the savannahs of Cape York Peninsula and the deserts of the arid outback. Their footprint extends beyond northern Queensland to include our Singapore campus, which combines research and teaching and demonstrates our commitment to the Asian region and internationalisation, particularly in the Tropics. Our Singapore campus offers both international and Australian JCU students the opportunity to study in South East Asia’s commercial, technological and academic hub. JCU also has a presence in Brisbane, with a campus operated by Russo Higher Education, providing courses to international students on behalf of JCU.'),
(18, 'Swinburne University of Technology ', 'Australia', 'https://www.swinburne.edu.au', 'Melbourne', 387, 'img/uni_aus/swinburne.jpg', 'Swinburne University of Technology (Swinburne) is an Australian public university based in Melbourne. Founded in 1908 as a technical college, the institution received official university status in the early 1990s. Frequently performing well in the rankings of universities under 50 years old, Swinburne has a reputation for preparing graduates for life in the working world as well as for its research in science and technology.  The university fosters close ties with industry, business and governmental organisations to ensure that the research undertaken at Swinburne finds practical applications. The university offers courses over 17 broad subject areas providing qualifications at undergraduate and postgraduate level as well as shorter courses for professional development.'),
(19, 'La Trobe University', 'Australia', 'https://www.latrobe.edu.au', 'Melbourne', 397, 'img/uni_aus/latrobe.jpg', 'Do you want to gain a degree from an Australian university that combines academic and research excellence with practical industry connections? Welcome to La Trobe, where you’ll find world-class teaching, programs that help you put your learning into real-world practice and stunning campus environments.  Of the 20,000 universities in the world, La Trobe is ranked in the top 1.5 %. Our university was rated number 56 in the world in the Times Higher Education 150 Under 50 rankings in 2017. In 2018 we were ranked 59th in the world in the Times Higher Education Golden Age list, a catalogue of 200 universities from around the world between 50 and 80 years old (established during a post-war boom in higher education expansion). '),
(20, 'Bond University', 'Australia', 'https://bond.edu.au', 'GoldCoast', 443, 'img/uni_aus/bond.png', 'Bond University is a private, non-profit institution based in the city of Gold Coast in eastern Australia. A relatively small institution, Bond University is primarily based on a modern campus located on the south side of Gold Coast. Most of the university’s teaching resources are located in and around the University Centre Building, which houses every university lecture theatre and study room. The university also maintains an extensive library, with a large number of materials across a variety of formats. Aside from academic facilities, Bond’s man-made lake dominates the campus’ scenery, and is circled by a number of student restaurants, cafes, and bars, complemented by a flexible dining plan.'),
(21, 'University of Toronto', 'Canada', 'https://www.utoronto.ca', 'Toronto', 18, 'img/uni_aus/bond.png', 'Originally controlled by the Church of England, the first university founded in the colony of “Upper Canada” is structured as a collegiate system, much like prestigious universities in the UK. The seven colleges all have distinct history and traditions.  The University of Toronto has many pioneering achievements to its name, including Canada’s first academic publishing house, the first forest science faculty in the country, and becoming the first Canadian university to reach more than C$1 billion (£586 million) in endowment.'),
(22, 'McGill University', 'Canada', 'https://www.mcgill.ca', 'Montreal', 33, 'img/uni_canada/uot.jpg', 'McGill University is the only Canadian institution represented in the World Economic Forum’s Global University Leaders Forum, which comprises the heads of 26 of the world’s top higher education institutions.  It was founded in 1821 and the main campus is at the base of Mount Royal in downtown Montreal. Many first-year students also live on the park-like campus.  All original buildings were constructed using local grey limestone, giving the campus a striking aesthetic.'),
(23, 'University of British Columbia', 'Canada', 'https://www.ubc.ca', 'Endowment Lands', 47, 'img/uni_canada/ubc.jpeg', 'The University of British Columbia (UBC) is a global centre for teaching, learning and research, consistently ranked among the top 20 public universities in the world and recently recognized as North America’s most international university.  Since 1915, our motto, Tuum Est (It is Yours), has been a declaration of our commitment to attracting and supporting those who have the drive to shape a better world. As a result, UBC students, faculty and staff continue to embrace innovation and challenge the status quo, placing us at the forefront of discovery, learning and engagement. UBC encourages bold thinking, curiosity and initiative, so you can realize your greatest potential.'),
(24, 'University of Alberta', 'Canada', 'https://www.ualberta.ca', 'Edmonton', 109, 'img/uni_canada/uoa.jpeg', 'Established in 1908 in Edmonton, the capital of Alberta, the University of Alberta is a public research university in Canada, located at the edge of the North Saskatchewan River valley.  Its main campus spans about 50 blocks of the city, and the university comprises a total of 150 buildings spread over four campuses.  Edmonton is home to the world’s second biggest fringe theatre festival, a folk music festival, and the university’s ‘festival of ideas’.  Its South Campus focuses on agricultural research and is also home to a 32,516m2 sports centre, which incorporates various sports clubs, 14 varsity teams and the Canadian women’s national basketball team.'),
(25, 'McMaster University', 'Canada', 'https://www.mcmaster.com', 'Hamilton', 146, 'img/uni_canada/mcmaster.jpg', 'Since 1887, McMaster University has been dedicated to the cultivation of human potential, a commitment we demonstrate everyday through our ground-breaking approaches to teaching and learning and our world-class, interdisciplinary research.  One of only four Canadian Universities consistently ranked in the world’s top 100, McMaster has a proud tradition of academic and research excellence, evidenced by the achievements of our best and brightest whose ranks include three Nobel Prize winners, global business leaders, technological innovators, prominent politicians, public intellectuals, philanthropists and performers.'),
(26, 'Université de Montréal', 'Canada', 'https://www.umontreal.ca', 'Montreal', 149, 'img/uni_canada/udm.jpg', 'Deeply rooted in Montreal and dedicated to its international mission, University of Montreal is a leading research university.  With its affiliated schools, Polytechnique Montreal (engineering), and HEC Montreal (business), University of Montreal is one of the largest university complexes in North America.  University of Montreal attracts over $500 million in research funding every year, making it one of the three foremost university research hubs in Canada.  Many renowned laboratories were born at University of Montreal, including: MILA, the world\'s leading university research centre in deep learning; the Institute for Research in Immunology and Cancer (IRIC), one of the most productive in its domain; and the Centre de recherche en droit public (CRDP), the most comprehensive public-law research centre in Canada.'),
(27, 'University of Waterloo', 'Canada', 'https://uwaterloo.ca', 'Waterloo', 163, 'img/uni_canada/uow.jpg', 'In just half a century, the University of Waterloo, located at the heart of Canada\'s technology hub, has become one of Canada\'s leading comprehensive universities with 35,000 full- and part-time students in undergraduate and graduate programs.   Waterloo, as home to the world\'s largest post-secondary co-operative education program, embraces its connections to the world and encourages enterprising partnerships in learning, research and discovery. In the next decade, the university is committed to building a better future for Canada and the world by championing innovation and collaboration to create solutions relevant to the needs of today and tomorrow. '),
(28, 'Western University', 'Canada', 'https://www.uwo.ca', 'London', 214, 'img/uni_canada/western.jpeg', 'Known for its exceptional academic programs, breakthrough research discoveries and outstanding student experience, Western offers a full complement of disciplines including more than 400 undergraduate programs and 88 different graduate degree programs, allowing students to tailor their education to personal strengths and career ambitions.  More than 38,000 students from 121 countries share in classroom experiences and engage in study-abroad, research and volunteer opportunities to broaden perspectives and knowledge. Western students balance academic achievement with opportunities for athletic, volunteer and social engagement, fostering a strong community that extends to more than 300,000 alumni worldwide.'),
(29, 'University of Calgary', 'Canada', 'www.ucalgary.ca', 'Calgary', 229, 'img/uni_canada/uoc.jpeg', 'Founded in 1966 and situated close to the Rocky Mountains, the University of Calgary is a public research university based in the city of Calgary, in Alberta, Canada.  It attracts around 30,000 students, around 25,000 of which are undergraduates, 6,000 are graduates, and around 500 are postdoctoral fellows.  About 3,000 or so of its student body are international, hailing from around 125 countries.  Through the university’s study abroad programme, it sends more than 1,100 students each year to over 80 destinations worldwide. This is made possible by partnerships and collaboration agreements with universities in 140 countries.  As well as the main institution in Canada, the university has a campus in Doha, Qatar, which opened in 2007. Across its faculties, the university has close to 1,823 faculty members in total with over 50 per cent of them holding a degree from an overseas university.'),
(30, 'Queen\'s University', 'Canada', 'https://www.queensu.ca', 'Kingston', 239, 'img/uni_canada/queens.png', 'Queen’s University is one of Canada’s oldest degree-granting institutions, established in 1841 by Queen Victoria.  The university is located in the city of Kingston, on the shores of Lake Ontario, in Canada, mid-way between Montreal and Toronto, and near the entrance of the Rideau Canal, a UNESCO world heritage site.  A medium-sized, research-intensive university, the university is home to around 22,000 students from more than 100 different countries. It is organised across several faculties, colleges and professional schools, as well as the Bader International Study Centre located in the UK county of East Sussex.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `Assigned_Employee` varchar(255) NOT NULL,
  `studentStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `Admin`, `Assigned_Employee`, `studentStatus`) VALUES
(2, 'admin', 'admin@test.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Yes', '', ''),
(8, 'chandan', 'chandankore1994@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'No', 'Bhanu Kumar', 'Application Processing'),
(9, 'test1', 'test1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'No', 'employee1', ''),
(10, 'test2', 'test2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'No', 'Bhanu Kumar', 'Application Processing'),
(12, 'nana', 'nayananarlapuram95@gmail.com', '5a8a32c3db2b1173d9bd7ee023626b3d', 'No', 'Bhanu Kumar', ''),
(13, 'Disco Raj', 'pavansundersingaraju@gmail.com', '44b5b9d16482bdbfcc622107cb198220', 'No', 'employee1', ''),
(15, 'ram', 'ramakhil90@gmail.com', 'e5d284b6015067eaa11e06b809fe6f13', 'No', '', ''),
(16, 'Annify', 'annitw@gmail.com', 'c4d62df34aef07a6f710957028500193', 'No', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AssignedStudents`
--
ALTER TABLE `AssignedStudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `HomePageContent`
--
ALTER TABLE `HomePageContent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortlisteduni`
--
ALTER TABLE `shortlisteduni`
  ADD KEY `UNiversityID` (`UNiversityID`);

--
-- Indexes for table `TrendingCoursesAustralia`
--
ALTER TABLE `TrendingCoursesAustralia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TrendingCoursesCanada`
--
ALTER TABLE `TrendingCoursesCanada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
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
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AssignedStudents`
--
ALTER TABLE `AssignedStudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `EmployeeID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `HomePageContent`
--
ALTER TABLE `HomePageContent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TrendingCoursesAustralia`
--
ALTER TABLE `TrendingCoursesAustralia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `TrendingCoursesCanada`
--
ALTER TABLE `TrendingCoursesCanada`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shortlisteduni`
--
ALTER TABLE `shortlisteduni`
  ADD CONSTRAINT `shortlisteduni_ibfk_1` FOREIGN KEY (`UNiversityID`) REFERENCES `universities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
