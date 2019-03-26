-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 30 jan. 2019 à 09:01
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogp3`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number` int(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `title`, `creation_date`, `number`, `text`) VALUES
(1, 'Le début', '2018-11-06 11:05:12', 1, 'Ut consectetur posuere diam quis viverra. Proin a metus luctus, interdum nibh sit amet, finibus leo. Duis iaculis blandit est nec consequat. Vivamus leo leo, iaculis id arcu quis, dapibus commodo enim. Proin convallis convallis augue eget pretium. Aliquam eget purus non dolor feugiat laoreet. Proin sollicitudin et dui nec fermentum. Aenean pretium lacus id quam fermentum scelerisque. Nam lacinia lacus sit amet urna semper, ornare blandit lorem rhoncus. Quisque accumsan feugiat commodo. Vivamus bibendum porta risus quis porta.\r\n\r\nPhasellus in cursus nibh. Cras a posuere sem, eu sollicitudin tellus. Curabitur condimentum faucibus nunc ac laoreet. Etiam massa leo, dictum non viverra et, faucibus quis orci. Vivamus eu magna sapien. Morbi massa ex, pretium quis leo non, lacinia tincidunt urna. Fusce vehicula auctor sem, id mattis leo dignissim a. Cras sit amet felis fringilla, consectetur sapien quis, vehicula ex. Ut tristique dignissim justo id eleifend. Phasellus ac felis porta, gravida lectus in, sagittis mi. Proin eleifend risus varius, rhoncus nisl at, eleifend justo.\r\n\r\nDonec suscipit vitae neque at vulputate. Quisque quis ante nibh. Phasellus semper nulla id tincidunt pretium. Praesent ut nunc vitae nulla condimentum cursus et a ligula. Duis mi elit, placerat nec consequat eget, rhoncus mollis mi. Aenean sit amet justo euismod, ornare nulla non, accumsan leo. Cras sollicitudin vulputate nulla, nec imperdiet diam tempus quis. Maecenas scelerisque euismod fermentum. Aenean a arcu sed nunc blandit euismod. Curabitur a mauris id diam vestibulum mollis ut sed nisl. Sed iaculis viverra magna, sed euismod libero imperdiet accumsan. Maecenas porta ante vel massa hendrerit facilisis. Nulla aliquet laoreet dolor, a dictum lorem finibus vel. Pellentesque ac erat enim. Mauris gravida blandit lorem non aliquet. Duis non fringilla sapien, vel semper orci.\r\n\r\nNunc lacinia posuere elementum. Curabitur augue nunc, dignissim ut ornare eget, tempor eget justo. Cras ante arcu, imperdiet auctor ligula non, sodales tempus leo. Pellentesque tincidunt a tortor a luctus. Donec faucibus eget arcu quis rutrum. Sed tempor porttitor purus sed ullamcorper. Nam rutrum pulvinar ex eu tempor. Nulla eget nisi in magna blandit ullamcorper ac a lacus. Nullam suscipit in ex non pharetra. Phasellus quis enim at lectus ultricies fringilla a id neque. Fusce posuere, lacus sit amet hendrerit tristique, tortor dolor scelerisque ipsum, id vestibulum lacus neque et sem. Nulla gravida fermentum est, at porttitor enim placerat et. In quis arcu sit amet orci imperdiet malesuada ac id augue. Integer ac dignissim tortor. Donec vitae pulvinar arcu. Pellentesque eget pretium nunc, et vestibulum nisi.\r\n\r\nUt ultricies metus vel pharetra porta. Sed ullamcorper arcu ac tellus lobortis viverra. Aenean eu nisl in sem viverra pharetra nec a felis. Pellentesque ut felis libero. Nulla facilisis est sed eros hendrerit, non aliquet diam vulputate. Praesent eu pharetra erat. Curabitur vel faucibus libero, sed vestibulum ex. Etiam ut augue tincidunt, vestibulum dolor sed, sagittis lacus. Proin vitae magna metus. Cras vitae lorem ligula.\r\n\r\nNam tellus neque, ullamcorper eget pretium a, mattis et metus. Donec et nunc quis metus euismod elementum ut scelerisque ipsum. Nunc tristique tincidunt cursus. Donec bibendum condimentum consectetur. Maecenas nec orci at arcu semper rutrum. Nunc ac maximus libero. Suspendisse porttitor tempor augue, et imperdiet eros vestibulum id. Nam non fringilla nunc. Proin a dolor luctus, sodales odio sed, rhoncus dolor. Fusce ligula orci, imperdiet quis sem vel, tristique commodo libero. Quisque pulvinar ante ac justo posuere, at convallis nulla volutpat. Donec a vulputate justo.\r\n\r\nNulla ultricies at turpis nec pulvinar. Vestibulum elit velit, mollis sed porttitor ut, ullamcorper id eros. Aliquam erat volutpat. Cras sed tortor eleifend, posuere elit maximus, rhoncus nulla. Quisque gravida lorem diam, cursus laoreet nisl maximus eu. Proin fringilla augue non justo scelerisque faucibus. Vestibulum aliquet diam metus, sed tristique eros vulputate ac. Curabitur vel rutrum libero, nec consequat risus. Ut molestie porta interdum. Sed tincidunt neque eget tristique fringilla. Etiam ut magna non velit cursus rutrum. Suspendisse efficitur a felis id feugiat. Vestibulum tincidunt dapibus quam semper dapibus. Vivamus tincidunt risus elementum pretium luctus. Aliquam rutrum libero vel tristique scelerisque.\r\n\r\nPellentesque mattis tellus ac finibus finibus. Fusce sit amet lacus sit amet tortor dapibus suscipit. Praesent feugiat risus at lectus fermentum, eu finibus mauris iaculis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In non erat facilisis, lobortis justo id, vulputate erat. Donec odio felis, elementum sed nunc at, consectetur accumsan neque. Integer cursus eros urna, sit amet facilisis augue faucibus aliquet. Aenean nec mauris posuere, tempor turpis quis, efficitur neque. Curabitur accumsan arcu a porta auctor. Vivamus mattis massa ut mauris elementum, vitae iaculis eros dignissim. Vivamus eget metus vel mauris lobortis venenatis. Mauris sed placerat justo. Phasellus quis placerat orci. Quisque eget gravida nunc.\r\n\r\nMorbi sit amet nibh purus. Integer nec ullamcorper turpis. Ut nec consectetur enim. Sed feugiat lorem volutpat mauris lacinia fermentum. Donec laoreet lorem a aliquam fringilla. Etiam aliquet nisi eget tortor aliquet, ut interdum nibh porttitor. Aliquam consequat erat in lorem elementum tincidunt. Fusce sit amet bibendum mauris. Suspendisse convallis, tortor a vulputate pharetra, erat lectus sollicitudin ipsum, vitae efficitur tortor nulla eu odio.\r\n\r\nNullam imperdiet elementum nulla nec vehicula. Sed suscipit laoreet luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ut tortor et dui congue faucibus. Phasellus dapibus cursus orci eget tempus. Aliquam ultricies ex non aliquam dapibus. Donec ut ante id orci maximus volutpat. Morbi ut elit eu purus auctor lacinia in nec lacus.'),
(2, 'L\'après début', '2018-11-16 11:05:10', 2, 'Nam erat felis, elementum ac accumsan in, accumsan laoreet purus. Nulla euismod sapien vitae nunc dictum, ut bibendum ligula egestas. Nullam feugiat lorem odio, at sollicitudin sapien rutrum sed. Duis accumsan odio at ligula scelerisque, finibus porta nisl porttitor. Aenean mollis quam lorem, fermentum faucibus arcu iaculis vulputate. Morbi nec metus ac tortor egestas pharetra vitae ac elit. Donec et egestas velit, id tristique lacus. Quisque ornare molestie porta. Donec interdum sagittis leo, eu vehicula enim tincidunt gravida. Aliquam faucibus tempor magna.\r\n\r\nDonec pellentesque congue est. Mauris mi felis, iaculis et dui quis, aliquam luctus massa. Nullam lobortis eleifend facilisis. Praesent vitae neque congue, blandit tortor at, rutrum nibh. Aenean sit amet fermentum lacus. Sed vulputate lectus venenatis orci auctor interdum. Aliquam eget purus arcu. Aliquam erat volutpat.\r\n\r\nAliquam pretium purus ut nisl ornare fringilla. Aliquam hendrerit luctus erat. Suspendisse malesuada lacus vitae luctus mollis. Fusce id nunc laoreet, mattis augue porta, luctus augue. Proin convallis semper felis, sed dictum lacus dictum at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Integer sit amet orci dignissim, rutrum mauris at, sollicitudin enim.\r\n\r\nMorbi malesuada risus risus, eget accumsan ligula lobortis sed. Suspendisse egestas sem ac tortor bibendum, a malesuada nisl efficitur. Ut dignissim feugiat justo, sed maximus nisi auctor ornare. Integer volutpat sit amet mi eu efficitur. Duis vehicula elit ante, quis rutrum quam venenatis non. Fusce sed tincidunt ligula, in pulvinar ligula. Aliquam ultricies, nibh a mattis facilisis, orci mi maximus risus, a pharetra diam ante ut eros. Proin eget ligula ac risus sollicitudin fringilla. Maecenas vestibulum lectus non dolor aliquam tristique. Etiam nibh lectus, sagittis non bibendum at, ultricies vitae lectus. Etiam nec ex at nisl lobortis sagittis. Integer sollicitudin ex id neque tincidunt consectetur. Cras at ante quis quam scelerisque tincidunt. Curabitur porttitor urna eu nulla vulputate, non imperdiet arcu porta.\r\n\r\nDuis dui metus, rhoncus nec auctor et, molestie eget risus. Suspendisse molestie massa libero, aliquet tristique leo sollicitudin ut. Nullam dignissim ipsum et orci iaculis euismod. Quisque rhoncus, purus sit amet suscipit lacinia, purus neque imperdiet elit, quis feugiat justo eros et ligula. Cras imperdiet ut ligula at rutrum. Pellentesque in rhoncus leo. Nullam sem nulla, aliquet nec rutrum a, tempus at est. Fusce hendrerit, libero id fermentum tristique, tortor lorem scelerisque nibh, at vulputate lorem urna eu sem. In placerat posuere consequat. Aliquam in nisi ut ante lobortis auctor. Nullam volutpat blandit mollis. Fusce iaculis at nisi et dictum. Mauris nec auctor nisl, eu rutrum diam. Praesent risus sapien, gravida vel tempor in, volutpat nec nibh. Nulla tincidunt mauris vel nisl suscipit lacinia.\r\n\r\nCras sit amet vulputate arcu. Nunc mi eros, porta in ex et, hendrerit vulputate tellus. Nunc quis lorem cursus, convallis sem et, tempus lacus. Donec arcu ipsum, interdum et leo eu, venenatis vulputate tellus. Nunc rhoncus lectus mi, gravida aliquet nisi consectetur at. Etiam vitae dolor vulputate, placerat massa et, ultricies nibh. Etiam lacinia eros turpis, quis congue metus blandit quis.\r\n\r\nMorbi nibh sem, interdum eu nisi et, pharetra laoreet sapien. Donec ut vestibulum dui, at scelerisque lacus. Ut nec eros urna. Proin ultrices sit amet justo non congue. Cras quis ex enim. Nulla lorem lectus, porttitor eget purus nec, ultricies porta mi. Vivamus gravida ipsum suscipit nisl hendrerit, sed volutpat ipsum fermentum. Ut quis neque ac orci mattis accumsan. Sed quis tincidunt mauris, in bibendum quam. Curabitur maximus sem nec odio lacinia vestibulum. Aenean eget nulla sollicitudin, dapibus dui at, laoreet turpis. Nullam at ornare ligula.\r\n\r\nDonec ac turpis tempor, tempus dui et, facilisis ante. Suspendisse placerat mi vitae rhoncus viverra. Praesent id tempus lacus. Ut commodo dolor et eros dignissim gravida. Vivamus et varius turpis, varius aliquam justo. Nullam luctus urna vitae ante vehicula, id ornare odio finibus. Maecenas imperdiet feugiat ipsum, vel ultricies tortor. Curabitur non lectus congue, facilisis neque imperdiet, varius lacus. Vivamus arcu eros, lobortis id enim quis, maximus laoreet dui. Curabitur pharetra tellus nisi, id facilisis massa fermentum sit amet. Duis mollis nisl ac nunc iaculis semper. Aliquam eu tellus semper metus egestas efficitur laoreet ac ante. Nam sit amet velit est. Ut libero leo, dictum eget lacus et, luctus dignissim neque. Nullam nec augue velit.\r\n\r\nAliquam id accumsan dolor. Nam eget sem sit amet arcu bibendum pretium. Cras congue tellus efficitur diam maximus, ullamcorper vestibulum massa porttitor. Sed tincidunt neque a libero aliquam gravida. Pellentesque luctus elit vel risus dapibus tincidunt. Maecenas metus neque, fermentum sed sollicitudin eget, euismod id turpis. Nullam id urna scelerisque, bibendum mi condimentum, sodales nisi.\r\n\r\nQuisque id dolor sed dolor consectetur tempus quis non est. Suspendisse malesuada sollicitudin arcu, vel iaculis urna mollis tempor. Nulla facilisi. Ut rutrum elit nibh, ut egestas arcu tempor id. Nulla non mauris ut magna ornare tempor venenatis id libero. Praesent luctus efficitur dolor eu pharetra. In non arcu eleifend lacus tincidunt luctus. Maecenas tempor turpis imperdiet ipsum vestibulum, ac porta diam hendrerit. Suspendisse ultrices ex nibh, nec congue ipsum tincidunt ac. Duis sit amet ornare elit. Proin cursus vitae ex at ultricies. Vestibulum fringilla turpis id massa ultricies, et lobortis ligula blandit. Proin hendrerit porta ultricies.'),
(3, 'Le milieu', '2018-12-11 16:07:32', 3, 'In lacinia, ex convallis aliquet mollis, ante lectus vulputate dolor, fringilla mattis diam velit at metus. Nullam id lectus nulla. Etiam semper velit vel nunc pellentesque venenatis. Phasellus eu congue lacus. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempus, sapien eget condimentum tempus, quam ipsum cursus est, ut vehicula leo mauris vitae sapien. Cras in orci quam. Nulla facilisi. Vivamus ipsum lorem, sollicitudin porta dui id, molestie ultricies erat. Etiam euismod tellus massa, vulputate eleifend nisi porta a. Curabitur porta orci sit amet nisi pulvinar hendrerit. Duis pretium fermentum nisl, sit amet ultricies nibh dignissim et. Vivamus purus enim, maximus sit amet risus et, consectetur pharetra augue. Donec hendrerit mollis ex, id ultrices massa tincidunt a. Nam sodales augue urna, in posuere nisl condimentum eu.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In vitae nisl nunc. Donec tincidunt luctus turpis, vitae vehicula velit pulvinar in. Pellentesque aliquam tellus augue, convallis aliquet enim imperdiet quis. Etiam maximus ex at risus egestas eleifend. Nam volutpat felis lectus, vel imperdiet enim egestas in. Duis auctor euismod iaculis. Nulla consequat mollis ante ullamcorper fringilla. Proin convallis fringilla massa, ac porta dolor tempus et. Morbi tempus nec lacus sed iaculis. Nullam justo ex, ultricies sit amet nulla ac, porttitor finibus massa. Praesent quis ornare nunc. Praesent varius diam vitae tortor faucibus facilisis. In non enim ante. Vestibulum sed leo ante.\r\n\r\nCurabitur posuere non odio ut ultrices. Nunc viverra rhoncus lorem eget suscipit. Nulla enim lacus, ullamcorper in porta a, lobortis ac augue. Etiam a varius lectus. Aliquam tortor mauris, lacinia in tortor at, luctus laoreet dui. Vestibulum in dolor interdum, placerat libero in, convallis nisi. Nulla dignissim faucibus molestie. Etiam id neque eu lacus semper interdum. Praesent et orci id lacus consectetur maximus eget et lacus. Praesent vulputate sapien quis est gravida, sit amet vehicula tellus blandit.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Nunc semper congue orci, in scelerisque leo rhoncus at. Phasellus cursus elit eget nibh mollis placerat. Fusce sem odio, eleifend quis neque sit amet, egestas interdum lorem. Proin efficitur eu elit eget sollicitudin. Sed convallis ipsum lorem, et ornare ex luctus quis. Nulla tincidunt tellus turpis, eu porttitor odio porta eu. Aliquam erat volutpat. Vestibulum non consectetur orci.\r\n\r\nMaecenas lobortis consectetur justo, at dignissim justo. Vestibulum cursus nec massa non convallis. Aliquam id condimentum libero. Sed at lorem ac urna mattis volutpat. Integer ullamcorper suscipit egestas. Integer ut justo volutpat, interdum nulla nec, pretium libero. Vestibulum id egestas nulla. Donec massa quam, congue nec dignissim in, laoreet sed mi. Suspendisse dictum sem vitae convallis interdum. Pellentesque sodales magna in diam vehicula, ut dapibus diam mollis. Duis semper, erat sed consequat pharetra, lectus eros porta ex, ac congue urna ligula vel ligula. Ut ex dui, rutrum non ullamcorper nec, vestibulum ac mi. Duis posuere blandit finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In venenatis dolor libero, tempus pellentesque tellus ullamcorper eget. Vestibulum et mauris eu enim dignissim fermentum. Vestibulum eleifend elit eget tincidunt varius. In hac habitasse platea dictumst. Morbi blandit erat laoreet arcu aliquet, pellentesque varius justo congue. Phasellus pharetra mauris mi, quis elementum magna scelerisque ac. Sed pulvinar fringilla lorem, tempor venenatis quam molestie vel. Donec cursus viverra elit sit amet lobortis. Sed est nisl, rhoncus non facilisis ut, laoreet sit amet nisl. Maecenas vulputate fermentum laoreet.\r\n\r\nMorbi luctus in lorem maximus volutpat. Quisque in elementum ipsum. Proin id mi scelerisque, tempor urna ut, volutpat neque. Duis lacinia sollicitudin tellus sit amet laoreet. Aliquam maximus turpis at diam tristique cursus vitae et ante. Praesent nec mauris urna. Duis tempus pellentesque lorem consequat bibendum. Pellentesque quis quam suscipit, pulvinar lorem et, pulvinar purus. In sit amet auctor velit. Vestibulum dignissim, mauris id egestas faucibus, enim sapien eleifend nisl, eu volutpat tellus ipsum vitae leo. Suspendisse ipsum ligula, hendrerit et vehicula bibendum, sagittis at urna.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed erat ac ex accumsan consequat. Duis quis massa tempor justo porttitor iaculis sit amet ac tortor. Cras consectetur lacus id tincidunt bibendum. Vestibulum gravida tortor blandit lorem luctus tristique. Vestibulum sed sapien eget libero tincidunt luctus et vel felis. Nulla sed finibus urna, et consectetur tortor. Sed eget luctus dui. Ut placerat tortor metus, finibus laoreet sem blandit pharetra. Praesent posuere nunc eget tempus efficitur.\r\n\r\nCurabitur ut velit sodales, facilisis tellus nec, luctus sem. In justo metus, consequat vel tincidunt gravida, eleifend id elit. Donec pretium dapibus molestie. Sed interdum tempus diam hendrerit dignissim. Cras purus neque, mollis in varius dignissim, commodo id ligula. Aliquam in tempor risus. Suspendisse tristique, quam a condimentum tincidunt, justo orci convallis purus, ut finibus turpis elit ut est. Aliquam eget convallis tellus. Proin sed facilisis nunc.\r\n\r\nNunc gravida orci quis blandit elementum. Mauris nec fermentum nibh. Cras non tortor non orci facilisis imperdiet. Nunc ac porttitor lorem. Duis luctus vel massa in viverra. Etiam in ultricies magna. Etiam ac tincidunt ante. Nam condimentum mattis porttitor.');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `reported` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `Commentary` (`id_chapter`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `pseudo`, `date`, `message`, `id_chapter`, `reported`) VALUES
(1, 'Janclod', '2018-11-06 11:16:53', 'Praesent pretium magna eget urna finibus, id dapibus ipsum sodales. Quisque diam ligula, feugiat a pharetra sed, fermentum vel erat.', 1, 0),
(2, 'Michui', '2018-11-06 11:16:53', 'Sed elit ipsum, congue ac tortor vitae, lacinia venenatis ex. Fusce sit amet leo id odio convallis egestas. Donec vitae.', 1, 0),
(3, 'Kanar', '2018-11-06 11:17:38', 'Aliquam tincidunt massa in ante bibendum semper. Sed faucibus scelerisque elementum. Nam eleifend pharetra diam, ac commodo dui laoreet vitae.', 2, 0),
(4, 'Vaicé', '2018-11-06 11:17:38', 'Maecenas sagittis nisi eu urna egestas, ut tempus justo auctor. Nullam sit amet tellus ipsum. Quisque nisl quam, venenatis at.', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `identification`
--

DROP TABLE IF EXISTS `identification`;
CREATE TABLE IF NOT EXISTS `identification` (
  `pseudo` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `identification`
--

INSERT INTO `identification` (`pseudo`, `admin_password`, `id`) VALUES
('admin', '$2y$10$5E/ZQQMZ/9gp0sGNTCWsYerC9nkAn4XI.4f8CEmOFGFvqy10ovs22', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Commentary` FOREIGN KEY (`id_chapter`) REFERENCES `chapter` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
