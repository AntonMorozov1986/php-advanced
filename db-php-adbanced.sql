-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql:3306
-- Время создания: Май 23 2022 г., 19:37
-- Версия сервера: 8.0.29
-- Версия PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db-php-adbanced`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`) VALUES
(1, 'lorem', 'pellentesque consectetur metus facilisi justo pulvinar eleifend commodo inceptos himenaeos scelerisque euismod', 83034),
(2, 'pretium', 'quis rhoncus ligula massa luctus fermentum vitae tempus iaculis augue vulputate eget', 27552),
(3, 'nulla', 'tempus enim nec lorem himenaeos blandit praesent ornare suspendisse mollis elit venenatis', 13445),
(4, 'mattis', 'malesuada risus mus vestibulum libero tempor tempus vulputate ante tristique commodo sodales', 32673),
(5, 'aenean', 'rutrum facilisis dapibus sapien finibus mus neque vitae luctus accumsan nullam ligula', 65763),
(6, 'cras', 'viverra venenatis ipsum dis posuere sodales aenean mollis nunc interdum pharetra gravida', 83812),
(7, 'ipsum', 'eleifend feugiat montes pharetra cras lectus rhoncus turpis ad venenatis massa enim', 71554),
(8, 'litora', 'mauris habitasse mattis enim viverra potenti turpis augue sollicitudin accumsan eleifend lacus', 41646),
(9, 'placerat', 'ante feugiat aliquet mus finibus bibendum imperdiet vestibulum suscipit consequat ultricies praesent', 56840),
(10, 'maximus', 'fusce fames purus ipsum eget natoque vitae aliquet tempus facilisi rhoncus non', 76912),
(11, 'facilisis', 'neque nullam habitasse lacus lectus ornare quis ad enim cubilia imperdiet nunc', 77498),
(12, 'pulvinar', 'amet litora fusce etiam nec egestas fames nulla convallis interdum nibh morbi', 31360),
(13, 'potenti', 'magnis consectetur sapien et aliquam efficitur bibendum sodales ante ligula massa finibus', 44116),
(14, 'taciti', 'accumsan ad ipsum vel sem risus erat id orci sodales fringilla varius', 52347),
(15, 'molestie', 'sapien feugiat est in proin quis at class vivamus posuere nec molestie', 96568),
(16, 'diam', 'eleifend dictumst ridiculus enim malesuada tempor blandit etiam convallis mi erat fermentum', 11904),
(17, 'ridiculus', 'pellentesque erat libero quisque nisl blandit lectus aptent quam aliquam elit sollicitudin', 27061),
(18, 'aenean', 'consectetur at facilisi cras eleifend primis eu ut dui litora himenaeos lectus', 52528),
(19, 'penatibus', 'sem quisque eleifend molestie feugiat fermentum natoque ex aptent posuere tortor potenti', 41573),
(20, 'nostra', 'iaculis etiam rutrum conubia sollicitudin adipiscing phasellus maximus pellentesque quam enim egestas', 78912),
(21, 'tristique', 'aliquet congue dui consectetur tempus est class suscipit tempor imperdiet odio id', 91529),
(22, 'mauris', 'erat ac dictum sem velit vehicula suscipit aptent pretium enim aliquet netus', 35000),
(23, 'libero', 'parturient quisque nascetur suspendisse accumsan est proin tincidunt sem odio netus elementum', 22970),
(24, 'facilisis', 'arcu neque orci hendrerit ultrices maecenas vel faucibus turpis class sodales taciti', 28747),
(25, 'curae', 'molestie accumsan sapien eu vehicula placerat metus in parturient inceptos fames id', 39578),
(26, 'facilisi', 'vulputate purus luctus primis vel curabitur mattis augue pellentesque non semper accumsan', 44839),
(27, 'massa', 'velit dis elementum interdum fames ex arcu natoque erat hac pharetra suspendisse', 94825),
(28, 'auctor', 'ac mollis et euismod metus odio aliquet libero consequat dapibus nec vestibulum', 43975),
(29, 'est', 'eleifend nostra eu tristique iaculis pharetra ullamcorper montes id augue dictumst pellentesque', 36580),
(30, 'accumsan', 'blandit dui congue per imperdiet porta sem pharetra suspendisse hac nec mi', 41019),
(31, 'mollis', 'tempor aliquam conubia mattis eleifend maximus ut parturient nam inceptos aliquet commodo', 90906),
(32, 'laoreet', 'aptent lectus montes phasellus arcu nascetur cubilia eget libero tellus leo sapien', 80011),
(33, 'nisi', 'ante euismod ornare ex magnis egestas mauris est libero dictumst volutpat sagittis', 92463),
(34, 'nam', 'interdum vehicula pretium aenean inceptos tellus faucibus ipsum ultricies varius himenaeos lobortis', 79082),
(35, 'magnis', 'ante class nibh potenti risus luctus feugiat aliquam rutrum nostra urna congue', 73217),
(36, 'id', 'ac ut suscipit nisi inceptos platea neque cras hac habitasse congue ad', 34464),
(37, 'phasellus', 'lobortis at bibendum adipiscing vel tellus mi egestas molestie curae fermentum neque', 55963),
(38, 'suspendisse', 'in sagittis pulvinar a eleifend quisque tempor interdum dui quis rutrum molestie', 55403),
(39, 'libero', 'pellentesque proin consequat ornare lectus hac nisi scelerisque est aliquam pulvinar duis', 53425),
(40, 'conubia', 'torquent netus id urna iaculis dui libero erat fames maximus pharetra fringilla', 23745),
(41, 'et', 'auctor nec mi aptent etiam vehicula ultricies nam nisl bibendum amet volutpat', 94876),
(42, 'lacinia', 'montes cras accumsan congue neque proin enim ligula odio blandit venenatis id', 14284),
(43, 'vehicula', 'imperdiet fringilla primis senectus suscipit mauris venenatis blandit phasellus elementum cubilia odio', 2805),
(44, 'eget', 'vitae etiam commodo amet nunc hac conubia faucibus mi donec vivamus congue', 54036),
(45, 'consequat', 'pellentesque luctus volutpat hac montes curabitur rhoncus magnis molestie purus urna imperdiet', 77989),
(46, 'pellentesque', 'sollicitudin convallis at vel tincidunt himenaeos parturient natoque purus eget ultrices ornare', 75915),
(47, 'leo', 'posuere dui venenatis accumsan ad viverra nisl praesent urna maecenas ullamcorper eu', 43870),
(48, 'convallis', 'elit parturient montes vel neque natoque tortor tempor ad nascetur pretium mus', 93066),
(49, 'ac', 'senectus vestibulum convallis erat phasellus rhoncus finibus sapien torquent lectus malesuada dapibus', 79152),
(50, 'vulputate', 'iaculis blandit lacus quisque ornare pretium interdum at montes arcu tellus parturient', 8577),
(51, 'dapibus', 'sapien orci aenean nam id turpis erat volutpat placerat quisque imperdiet penatibus', 91052),
(52, 'maecenas', 'parturient neque fermentum cubilia montes vestibulum non sollicitudin eget himenaeos potenti fames', 17429),
(53, 'ultrices', 'aliquet odio convallis platea adipiscing rhoncus feugiat netus ut blandit nascetur metus', 93684),
(54, 'sodales', 'erat lectus vel est aliquam laoreet senectus vivamus turpis tempus torquent aenean', 69144),
(55, 'commodo', 'pretium luctus dolor leo facilisi non nullam torquent vehicula erat adipiscing proin', 42695),
(56, 'amet', 'augue mauris natoque efficitur interdum adipiscing lacinia tristique vulputate eget tempor facilisis', 18007),
(57, 'aliquet', 'himenaeos cubilia mus ad faucibus feugiat mattis pretium dui accumsan dictumst vitae', 42018),
(58, 'habitasse', 'iaculis ac et maximus pretium faucibus malesuada arcu proin parturient augue vivamus', 45683),
(59, 'ut', 'eget iaculis suscipit penatibus sagittis aliquet tempus facilisis massa quis dolor nibh', 69674),
(60, 'fermentum', 'potenti ex nascetur fringilla vivamus pretium eu sit ad cursus tortor elementum', 87130),
(61, 'fusce', 'consequat egestas quisque nibh platea lacus vulputate est id magnis natoque lobortis', 74955),
(62, 'iaculis', 'ultricies commodo cubilia penatibus class curae egestas nisl aenean in ultrices pharetra', 98700),
(63, 'a', 'faucibus fusce blandit finibus mattis lobortis varius hac rutrum quam litora himenaeos', 7870),
(64, 'consectetur', 'dolor et hendrerit efficitur metus mollis suscipit pharetra ad pellentesque hac natoque', 72031),
(65, 'ipsum', 'a sit hendrerit diam ut etiam penatibus potenti praesent leo vivamus montes', 86995),
(66, 'commodo', 'gravida maximus ad ultricies fusce venenatis lectus habitasse bibendum ultrices feugiat tempus', 23023),
(67, 'neque', 'arcu nullam litora scelerisque curae nunc praesent posuere conubia iaculis taciti augue', 75625),
(68, 'mi', 'congue tortor etiam venenatis adipiscing accumsan nec justo ad sagittis ultrices nibh', 65072),
(69, 'mattis', 'molestie bibendum lectus nostra orci viverra per potenti non senectus nunc magnis', 16892),
(70, 'eu', 'phasellus etiam erat arcu fringilla fusce est feugiat eget quisque senectus accumsan', 15522),
(71, 'fames', 'suscipit sem velit primis duis pretium mollis maecenas rhoncus litora tristique et', 27909),
(72, 'imperdiet', 'praesent ac sit pharetra dolor volutpat dis iaculis suscipit quisque est per', 83229),
(73, 'nunc', 'urna tincidunt velit cubilia potenti suscipit at nascetur fringilla sollicitudin elit parturient', 794),
(74, 'fusce', 'elit vivamus fames donec aliquam est proin eleifend neque orci at curae', 80569),
(75, 'hac', 'lobortis ut ipsum a duis sem lacinia erat ridiculus posuere adipiscing proin', 27432),
(76, 'tempus', 'nascetur quis ac duis ad tristique orci parturient amet efficitur ut non', 72354),
(77, 'cras', 'blandit sem elit eros aptent dolor amet arcu tempus dui lorem interdum', 88589),
(78, 'class', 'molestie nulla nisl torquent velit duis iaculis curae blandit senectus dolor nec', 32272),
(79, 'litora', 'leo montes fringilla vel volutpat lorem in ultricies purus eros convallis cubilia', 45825),
(80, 'aliquam', 'elementum fringilla mattis congue aptent sodales orci nisl convallis taciti cras natoque', 49981),
(81, 'consectetur', 'quam netus vehicula dictumst per mus fusce eget iaculis ipsum conubia parturient', 44079),
(82, 'conubia', 'dapibus mus elementum tempor cras ut mattis ex euismod rhoncus sem fermentum', 2185),
(83, 'ornare', 'auctor tellus vel dictum at lobortis et ligula malesuada adipiscing duis vehicula', 79907),
(84, 'cursus', 'ac mattis laoreet sapien curae tempor malesuada suscipit dis nisl sagittis iaculis', 34373),
(85, 'dolor', 'gravida taciti laoreet dictum sit nascetur pulvinar finibus nulla consectetur accumsan tristique', 75229),
(86, 'feugiat', 'ullamcorper ligula libero ipsum phasellus lectus taciti tortor aenean nec quam dictum', 62146),
(87, 'himenaeos', 'ac senectus ex bibendum dis pharetra interdum laoreet odio molestie rutrum placerat', 52958),
(88, 'lacinia', 'nunc eget curabitur dui himenaeos mattis lacus id velit ex augue ridiculus', 87599),
(89, 'viverra', 'nascetur tempus lacinia dolor ante sagittis porta luctus nullam egestas nunc arcu', 63655),
(90, 'consequat', 'faucibus ante gravida molestie in mi diam ad maecenas imperdiet ex fames', 37708),
(91, 'curabitur', 'consectetur ornare in fermentum ante himenaeos varius curabitur ullamcorper nunc suscipit vel', 4634),
(92, 'varius', 'eu venenatis dictum vulputate vestibulum vehicula tristique sagittis morbi etiam litora justo', 90575),
(93, 'pulvinar', 'ultricies amet sem mattis risus aenean lectus velit primis quis sagittis porta', 371),
(94, 'ad', 'maximus donec massa iaculis elit dictum velit nullam sagittis orci pellentesque mattis', 54381),
(95, 'fringilla', 'fusce hac proin iaculis aenean ex ante vestibulum at vehicula mauris mi', 71504),
(96, 'vel', 'est feugiat ipsum himenaeos cursus litora aenean fringilla ultrices ullamcorper platea urna', 12956),
(97, 'a', 'dictumst ultricies suspendisse lacinia maecenas at pellentesque commodo urna aenean semper in', 46707),
(98, 'blandit', 'facilisi quam justo lobortis semper ultricies cursus commodo tempus primis adipiscing et', 1226),
(99, 'libero', 'massa potenti egestas imperdiet bibendum libero vivamus class est eget auctor penatibus', 90493),
(100, 'tristique', 'per class ut nunc laoreet leo tellus efficitur magnis interdum euismod posuere', 91948),
(101, 'metus', 'class est cursus risus tellus libero finibus ut vel commodo conubia ultricies', 73312),
(102, 'congue', 'sapien adipiscing ligula tempus odio euismod fermentum lectus commodo porta imperdiet mus', 64483),
(103, 'varius', 'morbi sodales nisl sociosqu bibendum varius sollicitudin nullam ullamcorper tincidunt egestas mi', 58013),
(104, 'varius', 'natoque mollis odio purus laoreet maximus aliquam mauris sollicitudin dictum donec vehicula', 93865),
(105, 'scelerisque', 'ornare hendrerit finibus et turpis sollicitudin quis phasellus vehicula risus congue posuere', 39774),
(106, 'consequat', 'mollis nascetur ad elit ac nibh per eget lectus ex diam vitae', 38171),
(107, 'eros', 'dolor ex aliquet vel metus nam proin efficitur sagittis class neque aenean', 15815),
(108, 'curae', 'consequat interdum pretium dui venenatis egestas blandit eget elit aliquam dapibus cubilia', 96533),
(109, 'maecenas', 'curae taciti nibh cursus natoque senectus imperdiet torquent cubilia fermentum eleifend leo', 86156),
(110, 'litora', 'turpis ipsum penatibus fames massa nostra vel congue vitae facilisi amet etiam', 42308),
(111, 'varius', 'faucibus finibus convallis feugiat vitae inceptos turpis senectus montes urna dolor duis', 50181),
(112, 'feugiat', 'feugiat fames tellus nisl tincidunt dis nulla ullamcorper hendrerit cras lorem laoreet', 71472),
(113, 'potenti', 'inceptos lorem sem erat est imperdiet donec morbi elit mattis quisque senectus', 98770),
(114, 'venenatis', 'vehicula facilisis cursus nam nullam curae scelerisque hendrerit lobortis fames molestie erat', 77498),
(115, 'nostra', 'at urna molestie hac parturient faucibus elit scelerisque semper himenaeos nam erat', 14035),
(116, 'facilisis', 'ipsum netus feugiat pulvinar convallis suscipit fermentum vitae mi ultrices rutrum semper', 73971),
(117, 'laoreet', 'cubilia et mattis tellus lobortis tincidunt eleifend curae non quisque vitae posuere', 42235),
(118, 'penatibus', 'euismod vel platea et dictumst taciti inceptos vivamus hac enim in nullam', 31737),
(119, 'nec', 'ultricies placerat pulvinar molestie mus non sociosqu nibh magnis venenatis id etiam', 30641),
(120, 'rutrum', 'sodales senectus sapien faucibus hac vel platea interdum mauris parturient ad lorem', 87631),
(121, 'justo', 'habitasse ante in purus primis finibus id tristique nullam morbi mattis nunc', 94265),
(122, 'ultricies', 'sit maximus tortor taciti dapibus odio nisl facilisis neque hac nam tempus', 74954),
(123, 'himenaeos', 'massa lorem nisi ut tempor class mollis primis aliquam tempus pellentesque malesuada', 50251),
(124, 'morbi', 'lobortis proin pretium magnis praesent aenean vitae arcu leo vestibulum mus augue', 42377),
(125, 'ex', 'ut gravida auctor tortor consectetur massa molestie torquent arcu nec dolor parturient', 93440),
(126, 'hendrerit', 'justo tristique in mi natoque convallis velit netus finibus turpis ultricies nisi', 72479),
(127, 'cursus', 'conubia natoque nec inceptos quisque massa donec ridiculus mollis lacus congue semper', 48647),
(128, 'nulla', 'mollis pretium sem nostra dui elit mauris nascetur molestie varius vulputate ornare', 22383),
(129, 'nunc', 'dictum amet netus iaculis vulputate tellus elit mauris enim in nisi hac', 22686),
(130, 'tempus', 'nascetur iaculis imperdiet quisque convallis parturient in nostra commodo venenatis hendrerit feugiat', 79738),
(131, 'aliquam', 'mauris diam libero rutrum vitae lectus volutpat risus venenatis ultricies class ut', 4040),
(132, 'dui', 'ligula aptent purus vehicula magnis suscipit hac in pulvinar vitae fringilla ipsum', 85479),
(133, 'mattis', 'taciti dui cras curabitur ligula dis sem blandit cursus consequat eros in', 34038),
(134, 'etiam', 'mollis class scelerisque tortor rutrum fusce sapien vitae faucibus dolor pharetra euismod', 47992),
(135, 'volutpat', 'et in curae elementum suspendisse fringilla cubilia quis ultricies varius rhoncus porta', 16507),
(136, 'vel', 'ultrices ridiculus gravida accumsan sit ipsum id ullamcorper odio eros ut dapibus', 1686),
(137, 'ultrices', 'ut aptent cubilia habitasse aliquam id tristique eros morbi efficitur ac facilisi', 7741),
(138, 'conubia', 'quisque placerat finibus odio ligula luctus sodales nisi varius egestas eleifend amet', 22826),
(139, 'maximus', 'nam egestas diam mattis vulputate id accumsan cursus erat primis iaculis neque', 78163),
(140, 'nunc', 'potenti eu maecenas aliquam enim mattis dolor libero fringilla quisque rhoncus facilisi', 88907),
(141, 'etiam', 'fringilla sapien nascetur ridiculus ipsum facilisis nisl fames lacus fermentum aenean accumsan', 40027),
(142, 'eget', 'non maecenas nisl lacinia montes tincidunt ut conubia ridiculus adipiscing maximus proin', 84167),
(143, 'gravida', 'gravida ligula facilisis luctus fringilla a aenean ex turpis potenti aliquam pretium', 16944),
(144, 'non', 'ad scelerisque sem arcu tristique sit quisque nam praesent id luctus primis', 70757),
(145, 'elementum', 'laoreet senectus eu accumsan suspendisse at vehicula bibendum auctor morbi mollis enim', 67889),
(146, 'egestas', 'vehicula suscipit accumsan erat rutrum velit inceptos praesent hendrerit cursus class mi', 60461),
(147, 'natoque', 'eu primis sodales auctor litora consequat faucibus urna iaculis dapibus habitasse justo', 35281),
(148, 'mi', 'neque nec ipsum adipiscing platea conubia id praesent accumsan sociosqu pellentesque phasellus', 32968),
(149, 'curabitur', 'cubilia fames vivamus dictumst tempus facilisi curae sollicitudin metus ridiculus nisl rhoncus', 65442),
(150, 'rhoncus', 'nec venenatis tempor nullam fames morbi vehicula tellus suspendisse tincidunt nascetur sem', 49053),
(151, 'elementum', 'litora dis egestas dictumst posuere neque orci ultrices feugiat ut mus rhoncus', 23371),
(152, 'consequat', 'curabitur amet vehicula mauris elementum donec pharetra nullam platea interdum vitae dis', 91769),
(153, 'suspendisse', 'himenaeos ornare dis mollis diam elementum rhoncus mattis fermentum sodales nisi ac', 64265),
(154, 'lobortis', 'id ridiculus vivamus erat bibendum fusce taciti pharetra tempus torquent eleifend rutrum', 99742),
(155, 'tortor', 'nascetur tristique etiam et fames libero aenean blandit commodo sagittis molestie ultricies', 7468),
(156, 'mi', 'ipsum aenean justo potenti lacus phasellus tempus viverra egestas ultrices at quis', 64064),
(157, 'taciti', 'rutrum consectetur duis enim mollis ornare phasellus potenti vehicula finibus quam tempor', 33793),
(158, 'semper', 'at diam libero iaculis efficitur aenean penatibus fusce est eu ultrices rutrum', 26366),
(159, 'litora', 'netus mollis sociosqu imperdiet nisl lacus turpis facilisi ullamcorper platea bibendum fringilla', 85624),
(160, 'nunc', 'ad montes suscipit maximus dapibus elementum accumsan maecenas eleifend metus luctus habitasse', 59672),
(161, 'placerat', 'consectetur bibendum mauris cubilia phasellus enim duis aptent rutrum diam est ultricies', 82259),
(162, 'sollicitudin', 'risus turpis penatibus sem vestibulum cras aliquam leo facilisi quisque conubia vitae', 958),
(163, 'arcu', 'lectus ad lacinia placerat dictumst augue eleifend laoreet cursus lorem mauris interdum', 95752),
(164, 'euismod', 'porta class semper sit quis urna tortor sapien lectus venenatis metus imperdiet', 62707),
(165, 'hendrerit', 'lacinia aliquam pellentesque viverra velit nostra tincidunt suscipit accumsan enim eget egestas', 55535),
(166, 'bibendum', 'ipsum aliquet mattis posuere diam amet ullamcorper auctor dictumst inceptos ultrices torquent', 33515),
(167, 'fusce', 'mi hac penatibus odio ornare dui vel tortor habitasse vitae finibus suscipit', 74896),
(168, 'nulla', 'lacus consequat tincidunt consectetur viverra ultricies aliquet praesent sit blandit dis molestie', 99447),
(169, 'praesent', 'lectus diam per auctor fermentum risus augue iaculis turpis semper est facilisi', 49226),
(170, 'pretium', 'quis donec bibendum gravida commodo sagittis diam magnis sapien risus rhoncus facilisi', 64979),
(171, 'praesent', 'dui turpis potenti duis amet adipiscing congue quam scelerisque rhoncus praesent bibendum', 85593),
(172, 'himenaeos', 'orci facilisis montes risus magnis dictum tristique nulla dui fames mus in', 2053),
(173, 'rhoncus', 'curae lacinia id volutpat laoreet sociosqu auctor elementum cursus egestas arcu venenatis', 71963),
(174, 'fusce', 'praesent rutrum penatibus sociosqu himenaeos elit augue iaculis elementum mi duis facilisis', 21914),
(175, 'euismod', 'fringilla commodo sit elit aliquet sem interdum dictum taciti diam proin torquent', 67523),
(176, 'conubia', 'ultrices posuere euismod torquent lorem neque nibh proin ullamcorper gravida sapien nam', 78857),
(177, 'neque', 'euismod vivamus lorem tempor volutpat dapibus lobortis etiam ac vulputate est aenean', 93873),
(178, 'laoreet', 'sagittis dis at euismod litora curabitur fusce lorem vestibulum interdum commodo elit', 46640),
(179, 'euismod', 'odio congue himenaeos quis fringilla duis aptent lacus torquent cubilia taciti bibendum', 30572),
(180, 'aptent', 'primis vivamus quam non ut libero facilisis cras rutrum accumsan parturient magnis', 20559),
(181, 'a', 'elementum vitae montes mattis tincidunt odio justo quis nulla sociosqu massa risus', 56145),
(182, 'purus', 'quisque nascetur justo fames massa ipsum rhoncus sem convallis aliquam primis bibendum', 82104),
(183, 'vivamus', 'molestie feugiat a sapien fermentum nam nec nulla viverra leo tincidunt potenti', 53429),
(184, 'non', 'purus eget feugiat iaculis sodales id ultrices primis pretium lectus pellentesque auctor', 5795),
(185, 'massa', 'mi ipsum commodo sodales fames tempor eget fusce nostra platea semper id', 88299),
(186, 'velit', 'odio potenti himenaeos metus suscipit maecenas nostra vehicula curabitur vitae platea volutpat', 56793),
(187, 'adipiscing', 'neque odio turpis tellus fringilla nec quam nunc congue porta est gravida', 37734),
(188, 'malesuada', 'arcu eget eleifend hendrerit fusce interdum himenaeos eu placerat diam auctor sodales', 31838),
(189, 'torquent', 'at quam neque sem ultrices pulvinar mattis vel ad diam porta aliquam', 80457),
(190, 'arcu', 'facilisis pellentesque aliquet natoque tempus id eros maecenas rhoncus fringilla conubia sollicitudin', 50713),
(191, 'curae', 'ac sodales montes luctus nostra cubilia vehicula hac vitae non nisl commodo', 60450),
(192, 'fringilla', 'pulvinar euismod curabitur libero auctor penatibus suspendisse id facilisi elementum inceptos accumsan', 2867),
(193, 'neque', 'litora enim ex tempor scelerisque aptent dictumst consectetur ipsum sagittis dictum feugiat', 25414),
(194, 'fusce', 'venenatis inceptos dapibus tortor ex sociosqu sollicitudin sodales natoque suscipit duis metus', 15073),
(195, 'auctor', 'lacus lorem sodales scelerisque interdum id justo accumsan vestibulum etiam ullamcorper malesuada', 82917),
(196, 'habitasse', 'mattis odio turpis porta luctus pretium mauris taciti eleifend himenaeos maecenas auctor', 75785),
(197, 'torquent', 'ut sodales faucibus tristique augue parturient montes lacus lorem mauris semper class', 47797),
(198, 'sem', 'et feugiat turpis cras ultrices venenatis inceptos efficitur maximus libero ridiculus fusce', 34672),
(199, 'mi', 'odio convallis nulla nisl scelerisque sapien ex nunc dolor fames mattis lacinia', 99312),
(200, 'justo', 'tortor nec orci luctus nisi morbi semper gravida congue sit faucibus magnis', 69108);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(39, 'anton', 'anton@anton.ru', '$2y$10$Ti7HL/Qknh1gB0sK0SX27OMtqTFXbgEopay4e1JdrWn0wfZV0qcde'),
(40, 'john', 'john@john.ru', '$2y$10$oTfUEkchEEKPwFxeWxmEvO36VjGRG8e716QRZotqJpZ/yfDc5igv2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
