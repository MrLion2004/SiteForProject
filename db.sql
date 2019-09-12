--
-- Структура таблицы `authme`
--

CREATE TABLE IF NOT EXISTS `authme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL DEFAULT '127.0.0.1',
  `lastlogin` bigint(20) DEFAULT '0',
  `x` double NOT NULL DEFAULT '0',
  `y` double NOT NULL DEFAULT '0',
  `z` double NOT NULL DEFAULT '0',
  `world` varchar(255) DEFAULT 'world',
  `email` varchar(255) DEFAULT 'your@email.com',
  `isLogged` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `record_players`
--

CREATE TABLE IF NOT EXISTS `record_players` (
  `record` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `record_players`
--

INSERT INTO `record_players` (`record`) VALUES
(2);

-- --------------------------------------------------------

--
-- Структура таблицы `shopcart`
--

CREATE TABLE IF NOT EXISTS `shopcart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `item` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `extra` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Структура таблицы `unitpay_payments`
--

CREATE TABLE IF NOT EXISTS `unitpay_payments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `unitpayId` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `sum` float NOT NULL,
  `itemsCount` int(11) NOT NULL DEFAULT '1',
  `dateCreate` datetime NOT NULL,
  `dateComplete` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
