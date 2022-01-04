-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 30 2021 г., 14:12
-- Версия сервера: 8.0.13
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aprince_PrUFI5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_commentmeta`
--

CREATE TABLE `Tls_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_comments`
--

CREATE TABLE `Tls_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_comments`
--

INSERT INTO `Tls_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Автор комментария', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-04-17 12:14:47', '2019-04-17 09:14:47', 'Привет! Это комментарий.\nЧтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.\nАватары авторов комментариев загружаются с сервиса <a href=\"https://ru.gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_links`
--

CREATE TABLE `Tls_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_options`
--

CREATE TABLE `Tls_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_options`
--

INSERT INTO `Tls_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://adplug.net/', 'yes'),
(2, 'home', 'http://adplug.net/', 'yes'),
(3, 'blogname', 'Adplug', 'yes'),
(4, 'blogdescription', 'token', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'avprinciple@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'd.m.Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'd.m.Y H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:97:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:13:\"favicon\\.ico$\";s:19:\"index.php?favicon=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=6&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:2:{i:0;s:19:\"clearfy/clearfy.php\";i:1;s:47:\"robin-image-optimizer/robin-image-optimizer.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '3', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:52:\"/sites/adplug.net/wp-content/themes/adplug/style.css\";i:2;s:0:\"\";}', 'no'),
(40, 'template', 'adplug', 'yes'),
(41, 'stylesheet', 'adplug', 'yes'),
(171, 'finished_updating_comment_type', '1', 'yes'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '49752', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '6', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '85', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'initial_db_version', '44719', 'yes'),
(94, 'Tls_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(95, 'fresh_site', '0', 'yes'),
(96, 'WPLANG', '', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(103, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'cron', 'a:9:{i:1640168088;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1640175648;a:1:{s:17:\"wmac_cachechecker\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640207688;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1640207717;a:1:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1640250917;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640251043;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640251045;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640682917;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(113, 'theme_mods_twentynineteen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1635758153;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(366, 'wbcr_clearfy_plugin_activated', '1636114847', 'yes'),
(367, 'wbcr_clearfy_plugin_version', '2.0.0', 'yes'),
(369, 'wbcr_clearfy_robots_txt_text_cache', '# This space intentionally left blank\n# If you want to learn about why our robots.txt looks like this, read this post: https://yoa.st/robots-txt\nUser-Agent: *\nHost: https://adplug.net\nSitemap: https://adplug.net/wp-sitemap.xml\n', 'yes'),
(377, 'wbcr_clearfy_disable_emoji', '1', 'yes'),
(378, 'wbcr_clearfy_remove_bloat', '1', 'yes'),
(379, 'wbcr_clearfy_yoast_remove_head_comment', '1', 'yes'),
(380, 'wbcr_clearfy_remove_meta_generator', '1', 'yes'),
(381, 'wbcr_clearfy_remove_style_version', '1', 'yes'),
(382, 'wbcr_clearfy_remove_js_version', '1', 'yes'),
(383, 'wbcr_clearfy_protect_author_get', '1', 'yes'),
(384, 'wbcr_clearfy_change_login_errors', '1', 'yes'),
(385, 'wbcr_clearfy_content_image_auto_alt', '1', 'yes'),
(386, 'wbcr_clearfy_set_last_modified_headers', '1', 'yes'),
(387, 'wbcr_clearfy_if_modified_since_headers', '1', 'yes'),
(388, 'wbcr_clearfy_remove_last_item_breadcrumb_yoast', '1', 'yes'),
(389, 'wbcr_clearfy_redirect_archives_date', '1', 'yes'),
(390, 'wbcr_clearfy_redirect_archives_author', '1', 'yes'),
(391, 'wbcr_clearfy_attachment_pages_redirect', '1', 'yes'),
(392, 'wbcr_clearfy_remove_replytocom', '1', 'yes'),
(393, 'wbcr_clearfy_remove_unneeded_widget_page', '1', 'yes'),
(394, 'wbcr_clearfy_remove_unneeded_widget_calendar', '1', 'yes'),
(395, 'wbcr_clearfy_remove_unneeded_widget_tag_cloud', '1', 'yes'),
(396, 'wbcr_clearfy_remove_unneeded_widget_archives', '1', 'yes'),
(397, 'wbcr_clearfy_remove_unneeded_widget_links', '1', 'yes'),
(398, 'wbcr_clearfy_remove_unneeded_widget_meta', '1', 'yes'),
(399, 'wbcr_clearfy_remove_unneeded_widget_search', '1', 'yes'),
(400, 'wbcr_clearfy_remove_unneeded_widget_text', '1', 'yes'),
(401, 'wbcr_clearfy_remove_unneeded_widget_categories', '1', 'yes'),
(402, 'wbcr_clearfy_remove_unneeded_widget_recent_posts', '1', 'yes'),
(403, 'wbcr_clearfy_remove_unneeded_widget_recent_comments', '1', 'yes'),
(404, 'wbcr_clearfy_remove_unneeded_widget_rss', '1', 'yes'),
(405, 'wbcr_clearfy_remove_unneeded_widget_menu', '1', 'yes'),
(406, 'wbcr_clearfy_remove_unneeded_widget_twenty_eleven_ephemera', '1', 'yes'),
(407, 'wbcr_clearfy_html_optimize', '1', 'yes'),
(408, 'wbcr_clearfy_html_keepcomments', '0', 'yes'),
(409, 'wbcr_clearfy_disable_embeds', '1', 'yes'),
(410, 'wbcr_clearfy_disable_gravatars', '1', 'yes'),
(411, 'wbcr_clearfy_lazy_load_font_awesome', '1', 'yes'),
(412, 'wbcr_clearfy_disable_dashicons', '0', 'yes'),
(413, 'wbcr_clearfy_lazy_load_google_fonts', '1', 'yes'),
(414, 'wbcr_clearfy_disable_google_fonts', '0', 'yes'),
(415, 'wbcr_clearfy_disable_google_maps', '0', 'yes'),
(416, 'wbcr_clearfy_remove_iframe_google_maps', '0', 'yes'),
(417, 'wbcr_clearfy_exclude_from_disable_google_maps', '', 'yes'),
(418, 'wbcr_clearfy_disable_heartbeat', 'default', 'yes'),
(419, 'wbcr_clearfy_heartbeat_frequency', '60', 'yes'),
(420, 'wbcr_clearfy_optimize_scripts_for_logged', '1', 'yes'),
(421, 'wbcr_clearfy_css_optimize', '1', 'yes'),
(422, 'wbcr_clearfy_css_aggregate', '0', 'yes'),
(423, 'wbcr_clearfy_css_exclude', 'wp-content/cache/, wp-content/uploads/, admin-bar.min.css, dashicons.min.css', 'yes'),
(424, 'wbcr_clearfy_css_include_inline', '0', 'yes'),
(425, 'wbcr_clearfy_css_datauris', '0', 'yes'),
(426, 'wbcr_clearfy_css_defer', '0', 'yes'),
(427, 'wbcr_clearfy_css_inline', '0', 'yes'),
(428, 'wbcr_clearfy_css_critical', '', 'yes'),
(429, 'wbcr_clearfy_css_critical_style', '', 'yes'),
(430, 'wbcr_clearfy_js_optimize', '1', 'yes'),
(431, 'wbcr_clearfy_js_aggregate', '0', 'yes'),
(432, 'wbcr_clearfy_js_exclude', 'seal.js, js/jquery/jquery.js', 'yes'),
(433, 'wbcr_clearfy_js_include_inline', '0', 'yes'),
(434, 'wbcr_clearfy_move_js_to_footer', '0', 'yes'),
(435, 'wbcr_clearfy_dont_move_jquery_to_footer', '1', 'yes'),
(436, 'wbcr_clearfy_excluded_move_to_footer_scripts', '', 'yes'),
(437, 'wbcr_clearfy_js_forcehead', '0', 'yes'),
(438, 'wbcr_clearfy_js_trycatch', '0', 'yes'),
(439, 'wbcr_clearfy_right_robots_txt', '1', 'yes'),
(440, 'wbcr_clearfy_robots_txt_text', '# This space intentionally left blank\r\n# If you want to learn about why our robots.txt looks like this, read this post: https://yoa.st/robots-txt\r\nUser-Agent: *\r\nHost: https://adplug.net\r\nSitemap: https://adplug.net/wp-sitemap.xml', 'yes'),
(441, 'wbcr_clearfy_disable_frontpage_last_modified_headers', '1', 'yes'),
(442, 'wbcr_clearfy_last_modified_exclude', '', 'yes'),
(443, 'wbcr_clearfy_remove_x_pingback', '1', 'yes'),
(444, 'wbcr_clearfy_remove_html_comments', '1', 'yes'),
(445, 'wbcr_clearfy_hide_admin_notices', 'only_selected', 'yes'),
(446, 'wbcr_clearfy_show_notices_in_adminbar', '0', 'yes'),
(447, 'wbcr_clearfy_disable_feed', '0', 'yes'),
(448, 'wbcr_clearfy_disabled_feed_behaviour', 'redirect_301', 'yes'),
(449, 'wbcr_clearfy_revisions_disable', '0', 'yes'),
(450, 'wbcr_clearfy_revision_limit', '15', 'yes'),
(451, 'wbcr_clearfy_gutenberg_autosave_control', '0', 'yes'),
(454, 'wbcr_clearfy_factory_dismissed_notices', 'a:1:{s:60:\"wbcr_factory_notice_adverts_508eae6a6a37234d86536762b0ce82e4\";i:0;}', 'yes'),
(455, 'wbcr_clearfy_combined_google_fonts_requests_number', '0', 'yes'),
(456, 'wbcr_clearfy_combined_font_awesome_requests_number', '0', 'yes'),
(473, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:21:\"avprinciple@gmail.com\";s:7:\"version\";s:5:\"5.8.2\";s:9:\"timestamp\";i:1638449745;}', 'no'),
(488, 'factory_plugin_versions', 'a:0:{}', 'yes'),
(492, 'wbcr_io_image_optimization_server', 'server_1', 'yes'),
(493, 'wbcr_io_backup_origin_images', '1', 'yes'),
(494, 'wbcr_io_save_exif_data', '1', 'yes'),
(495, 'wbcr_io_db_version', '2', 'yes'),
(496, 'wbcr_io_plugin_activated', '1638452266', 'yes'),
(497, 'wbcr_io_plugin_version', '1.5.6', 'yes'),
(500, 'wbcr_io_image_optimize_flush_usage', '1641044267', 'yes'),
(501, 'wbcr_io_image_optimize_all_usage', '0', 'yes'),
(1111, 'wbcr_clearfy_last_check_update_time', '1640164500', 'yes'),
(1112, 'wbcr_clearfy_last_check_update', 'O:8:\"stdClass\":4:{s:4:\"slug\";s:7:\"clearfy\";s:6:\"plugin\";s:19:\"clearfy/clearfy.php\";s:11:\"new_version\";s:5:\"1.8.5\";s:7:\"package\";s:100:\"https://github.com/Creative-Motion-Development/wp-plugin-clearfy/releases/download/1.8.5/clearfy.zip\";}', 'yes'),
(1116, '_transient_doing_cron', '1640741266.2606289386749267578125', 'yes'),
(1001, 'category_children', 'a:0:{}', 'yes'),
(948, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.8.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.8.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.8.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.8.2-new-bundled.zip\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.8.2\";s:7:\"version\";s:5:\"5.8.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1640164500;s:15:\"version_checked\";s:5:\"5.8.2\";s:12:\"translations\";a:0:{}}', 'no'),
(949, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1640164501;s:7:\"checked\";a:2:{s:6:\"adplug\";s:3:\"1.0\";s:15:\"twentytwentyone\";s:3:\"1.4\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:1:{s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.4\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.4.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}}s:12:\"translations\";a:0:{}}', 'no'),
(1113, '_site_transient_timeout_theme_roots', '1640166300', 'no'),
(1114, '_site_transient_theme_roots', 'a:2:{s:6:\"adplug\";s:7:\"/themes\";s:15:\"twentytwentyone\";s:7:\"/themes\";}', 'no'),
(950, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1640164501;s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:2:{s:47:\"robin-image-optimizer/robin-image-optimizer.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:35:\"w.org/plugins/robin-image-optimizer\";s:4:\"slug\";s:21:\"robin-image-optimizer\";s:6:\"plugin\";s:47:\"robin-image-optimizer/robin-image-optimizer.php\";s:11:\"new_version\";s:5:\"1.5.6\";s:3:\"url\";s:52:\"https://wordpress.org/plugins/robin-image-optimizer/\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/plugin/robin-image-optimizer.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:74:\"https://ps.w.org/robin-image-optimizer/assets/icon-256x256.gif?rev=2395842\";s:2:\"1x\";s:74:\"https://ps.w.org/robin-image-optimizer/assets/icon-128x128.gif?rev=2395842\";}s:7:\"banners\";a:0:{}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.8\";}s:19:\"clearfy/clearfy.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:21:\"w.org/plugins/clearfy\";s:4:\"slug\";s:7:\"clearfy\";s:6:\"plugin\";s:19:\"clearfy/clearfy.php\";s:11:\"new_version\";s:5:\"2.0.0\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/clearfy/\";s:7:\"package\";s:50:\"https://downloads.wordpress.org/plugin/clearfy.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:60:\"https://ps.w.org/clearfy/assets/icon-256x256.gif?rev=2392119\";s:2:\"1x\";s:60:\"https://ps.w.org/clearfy/assets/icon-128x128.gif?rev=2392119\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/clearfy/assets/banner-1544x500.jpg?rev=2395892\";s:2:\"1x\";s:62:\"https://ps.w.org/clearfy/assets/banner-772x250.jpg?rev=2395892\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"5.2\";}}s:7:\"checked\";a:2:{s:47:\"robin-image-optimizer/robin-image-optimizer.php\";s:5:\"1.5.6\";s:19:\"clearfy/clearfy.php\";s:5:\"2.0.0\";}}', 'no'),
(200, 'new_admin_email', 'avprinciple@gmail.com', 'yes'),
(363, 'wbcr_clearfy_deactive_preinstall_components', 'a:7:{i:0;s:9:\"yoast_seo\";i:1;s:9:\"cyrlitera\";i:2;s:14:\"comments_tools\";i:3;s:15:\"updates_manager\";i:4;s:14:\"assets_manager\";i:5;s:8:\"ga_cache\";i:6;s:16:\"adminbar_manager\";}', 'yes'),
(364, 'wbcr_clearfy_deactivated_unused_modules', '1', 'yes'),
(180, 'current_theme', 'Adplug', 'yes'),
(181, 'theme_mods_twentytwentyone', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1635758340;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(182, 'theme_switched', '', 'yes'),
(162, 'widget_block', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(163, 'admin_email_lifespan', '1651312196', 'yes'),
(164, 'disallowed_keys', '', 'no'),
(165, 'comment_previously_approved', '1', 'yes'),
(166, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(167, 'auto_update_core_dev', 'enabled', 'yes'),
(168, 'auto_update_core_minor', 'enabled', 'yes'),
(169, 'auto_update_core_major', 'unset', 'yes'),
(170, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(172, 'db_upgraded', '', 'yes'),
(178, 'can_compress_scripts', '1', 'no'),
(176, 'recovery_keys', 'a:0:{}', 'yes'),
(177, 'https_detection_errors', 'a:0:{}', 'yes'),
(179, 'recently_activated', 'a:0:{}', 'yes'),
(195, 'theme_mods_adplug', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:11:\"header_menu\";i:2;}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1635758338;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(210, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(215, 'recovery_mode_email_last_sent', '1635766462', 'yes'),
(260, '_transient_health-check-site-status-result', '{\"good\":16,\"recommended\":3,\"critical\":0}', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_postmeta`
--

CREATE TABLE `Tls_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_postmeta`
--

INSERT INTO `Tls_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 6, '_edit_lock', '1635784822:1'),
(4, 6, '_edit_last', '1'),
(5, 6, '_wp_page_template', 'templates/home.php'),
(6, 8, '_edit_lock', '1635758719:1'),
(7, 8, '_wp_page_template', 'templates/about-us.php'),
(8, 8, '_edit_last', '1'),
(9, 12, '_edit_lock', '1635759138:1'),
(10, 14, '_edit_lock', '1635759130:1'),
(11, 14, '_edit_last', '1'),
(12, 14, '_wp_page_template', 'templates/brands.php'),
(13, 12, '_edit_last', '1'),
(14, 12, '_wp_page_template', 'templates/models.php'),
(15, 16, '_edit_lock', '1635759479:1'),
(16, 16, '_edit_last', '1'),
(17, 16, '_wp_page_template', 'templates/team.php'),
(18, 18, '_edit_lock', '1635759621:1'),
(19, 18, '_edit_last', '1'),
(20, 18, '_wp_page_template', 'templates/help.php'),
(21, 20, '_menu_item_type', 'post_type'),
(22, 20, '_menu_item_menu_item_parent', '0'),
(23, 20, '_menu_item_object_id', '6'),
(24, 20, '_menu_item_object', 'page'),
(25, 20, '_menu_item_target', ''),
(26, 20, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(27, 20, '_menu_item_xfn', ''),
(28, 20, '_menu_item_url', ''),
(143, 49, '_edit_lock', '1635778237:1'),
(30, 21, '_menu_item_type', 'post_type'),
(31, 21, '_menu_item_menu_item_parent', '0'),
(32, 21, '_menu_item_object_id', '8'),
(33, 21, '_menu_item_object', 'page'),
(34, 21, '_menu_item_target', ''),
(35, 21, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(36, 21, '_menu_item_xfn', ''),
(37, 21, '_menu_item_url', ''),
(142, 47, '_edit_lock', '1635778113:1'),
(39, 22, '_menu_item_type', 'post_type'),
(40, 22, '_menu_item_menu_item_parent', '0'),
(41, 22, '_menu_item_object_id', '14'),
(42, 22, '_menu_item_object', 'page'),
(43, 22, '_menu_item_target', ''),
(44, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(45, 22, '_menu_item_xfn', ''),
(46, 22, '_menu_item_url', ''),
(150, 63, '_edit_lock', '1635783147:1'),
(151, 65, '_edit_lock', '1635783332:1'),
(149, 61, '_edit_lock', '1635783037:1'),
(148, 59, '_edit_lock', '1635783619:1'),
(147, 57, '_edit_lock', '1635782653:1'),
(145, 53, '_edit_lock', '1635781035:1'),
(146, 55, '_edit_lock', '1635781585:1'),
(144, 51, '_edit_lock', '1635778403:1'),
(57, 24, '_menu_item_type', 'post_type'),
(58, 24, '_menu_item_menu_item_parent', '0'),
(59, 24, '_menu_item_object_id', '12'),
(60, 24, '_menu_item_object', 'page'),
(61, 24, '_menu_item_target', ''),
(62, 24, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(63, 24, '_menu_item_xfn', ''),
(64, 24, '_menu_item_url', ''),
(129, 38, '_edit_lock', '1635771947:1'),
(130, 40, '_edit_lock', '1635769282:1'),
(131, 42, '_edit_lock', '1635769287:1'),
(132, 40, '_edit_last', '1'),
(133, 40, '_wp_page_template', 'templates/sign-up-details-advertiser.php'),
(134, 42, '_edit_last', '1'),
(135, 42, '_wp_page_template', 'templates/sign-up-details-creator.php'),
(136, 38, '_edit_last', '1'),
(137, 38, '_wp_page_template', 'templates/profile.php'),
(138, 44, '_edit_lock', '1635781860:1'),
(139, 44, '_wp_page_template', 'templates/profile-edit.php'),
(141, 44, '_edit_last', '1'),
(128, 35, '_wp_page_template', 'templates/sign-up-advertiser.php'),
(127, 35, '_edit_last', '1'),
(126, 31, '_wp_page_template', 'templates/login.php'),
(125, 31, '_edit_last', '1'),
(124, 33, '_wp_page_template', 'templates/sign-up-creator.php'),
(123, 33, '_edit_last', '1'),
(122, 35, '_edit_lock', '1635768118:1'),
(121, 33, '_edit_lock', '1635768124:1'),
(120, 31, '_edit_lock', '1635767503:1'),
(152, 67, '_edit_lock', '1635783442:1'),
(153, 69, '_edit_lock', '1635783485:1'),
(154, 67, '_edit_last', '1'),
(155, 67, '_wp_page_template', 'templates/bank-account.php'),
(156, 65, '_edit_last', '1'),
(157, 65, '_wp_page_template', 'templates/password.php'),
(158, 69, '_edit_last', '1'),
(159, 69, '_wp_page_template', 'templates/settings-notifications.php'),
(160, 63, '_edit_last', '1'),
(161, 63, '_wp_page_template', 'templates/personal-settings.php'),
(162, 47, '_edit_last', '1'),
(163, 47, '_wp_page_template', 'templates/messages.php'),
(164, 49, '_edit_last', '1'),
(165, 49, '_wp_page_template', 'templates/my-castings.php'),
(166, 51, '_edit_last', '1'),
(167, 51, '_wp_page_template', 'templates/my-photos.php'),
(168, 53, '_edit_last', '1'),
(169, 53, '_wp_page_template', 'templates/social.php'),
(170, 55, '_edit_last', '1'),
(171, 55, '_wp_page_template', 'templates/notifications.php'),
(172, 57, '_edit_last', '1'),
(173, 57, '_wp_page_template', 'templates/favourites.php'),
(174, 59, '_edit_last', '1'),
(175, 59, '_wp_page_template', 'templates/payment.php'),
(176, 61, '_edit_last', '1'),
(177, 61, '_wp_page_template', 'templates/follower.php'),
(178, 73, '_edit_lock', '1635784072:1'),
(179, 73, '_wp_page_template', 'templates/search.php'),
(180, 75, '_edit_lock', '1635784372:1'),
(181, 75, '_wp_page_template', 'templates/forgot.php'),
(182, 77, '_edit_lock', '1635784593:1'),
(183, 77, '_wp_page_template', 'templates/offer.php'),
(184, 79, '_edit_lock', '1635784964:1'),
(185, 79, '_wp_page_template', 'templates/profile-view.php'),
(186, 81, '_edit_lock', '1635785903:1'),
(187, 81, '_edit_last', '1'),
(188, 81, '_wp_page_template', 'templates/profile-brand-view.php'),
(189, 84, '_wp_attached_file', '2021/11/android-chrome-512x512-1.png'),
(190, 84, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:36:\"2021/11/android-chrome-512x512-1.png\";s:5:\"sizes\";a:2:{s:6:\"medium\";a:4:{s:4:\"file\";s:36:\"android-chrome-512x512-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:36:\"android-chrome-512x512-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(191, 84, '_wp_attachment_image_alt', 'AdPlug'),
(192, 85, '_wp_attached_file', '2021/11/cropped-android-chrome-512x512-1.png'),
(193, 85, '_wp_attachment_context', 'site-icon'),
(194, 85, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:44:\"2021/11/cropped-android-chrome-512x512-1.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:44:\"cropped-android-chrome-512x512-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:44:\"cropped-android-chrome-512x512-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-270\";a:4:{s:4:\"file\";s:44:\"cropped-android-chrome-512x512-1-270x270.png\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-192\";a:4:{s:4:\"file\";s:44:\"cropped-android-chrome-512x512-1-192x192.png\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-180\";a:4:{s:4:\"file\";s:44:\"cropped-android-chrome-512x512-1-180x180.png\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"site_icon-32\";a:4:{s:4:\"file\";s:42:\"cropped-android-chrome-512x512-1-32x32.png\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(197, 3, '_edit_last', '1'),
(198, 3, '_edit_lock', '1635788907:1');

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_posts`
--

CREATE TABLE `Tls_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_posts`
--

INSERT INTO `Tls_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-04-17 12:14:47', '2019-04-17 09:14:47', '<!-- wp:paragraph -->\n<p>Добро пожаловать в WordPress. Это ваша первая запись. Отредактируйте или удалите ее, затем начинайте создавать!</p>\n<!-- /wp:paragraph -->', 'Привет, мир!', '', 'publish', 'open', 'open', '', '%d0%bf%d1%80%d0%b8%d0%b2%d0%b5%d1%82-%d0%bc%d0%b8%d1%80', '', '', '2019-04-17 12:14:47', '2019-04-17 09:14:47', '', 0, 'http://adplug.net//?p=1', 0, 'post', '', 1),
(2, 1, '2019-04-17 12:14:47', '2019-04-17 09:14:47', '<!-- wp:paragraph -->\n<p>Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...или так:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Перейдите <a href=\"http://adplug.net//wp-admin/\">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!</p>\n<!-- /wp:paragraph -->', 'Пример страницы', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2019-04-17 12:14:47', '2019-04-17 09:14:47', '', 0, 'http://adplug.net//?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-04-17 12:14:47', '2019-04-17 09:14:47', '<!-- wp:heading -->\r\n<h2>Who are we</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Our website address is: https://adplug.net/.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What personal data we collect and for what purpose</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Comments</h3>\r\n<p>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Media files</h3>\r\n<p>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Contact forms<br />Cookies</h3>\r\n<p>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Embedded content from other websites</h3>\r\n<p>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Web analytics</h3>\r\n<h2>Who we share your data with</h2>\r\n<p>How long do we keep your data<br />If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What are your rights to your data</h2>\r\n<p>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Where do we send your data</h2>\r\n<p>User comments can be checked by an automated spam detection service.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Your contact information<br />Additional Information</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>How we protect your data<br />What procedures are taken against data breach<br />From which third parties we receive data<br />What automatic decisions are made based on user data<br />Industry Regulatory Disclosure Requirements</h3>\r\n<!-- /wp:heading -->', 'Privacy Policy', '', 'publish', 'closed', 'closed', '', 'privacy-policy', '', '', '2021-11-01 20:41:06', '2021-11-01 17:41:06', '', 0, 'http://adplug.net//?page_id=3', 0, 'page', '', 0),
(87, 1, '2021-11-01 20:30:08', '2021-11-01 17:30:08', '<!-- wp:heading --><h2>Кто мы</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Наш адрес сайта: http://adplug.net/.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Какие персональные данные мы собираем и с какой целью</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Комментарии</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Если посетитель оставляет комментарий на сайте, мы собираем данные указанные в форме комментария, а также IP адрес посетителя и данные user-agent браузера с целью определения спама.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Анонимизированная строка создаваемая из вашего адреса email (\"хеш\") может предоставляться сервису Gravatar, чтобы определить используете ли вы его. Политика конфиденциальности Gravatar доступна здесь: https://automattic.com/privacy/ . После одобрения комментария ваше изображение профиля будет видимым публично в контексте вашего комментария.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Медиафайлы</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Если вы зарегистрированный пользователь и загружаете фотографии на сайт, вам возможно следует избегать загрузки изображений с метаданными EXIF, так как они могут содержать данные вашего месторасположения по GPS. Посетители могут извлечь эту информацию скачав изображения с сайта.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Формы контактов</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Куки</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Если вы оставляете комментарий на нашем сайте, вы можете включить сохранение вашего имени, адреса email и вебсайта в куки. Это делается для вашего удобства, чтобы не заполнять данные снова при повторном комментировании. Эти куки хранятся в течение одного года.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Если у вас есть учетная запись на сайте и вы войдете в неё, мы установим временный куки для определения поддержки куки вашим браузером, куки не содержит никакой личной информации и удаляется при закрытии вашего браузера.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>При входе в учетную запись мы также устанавливаем несколько куки с данными входа и настройками экрана. Куки входа хранятся в течение двух дней, куки с настройками экрана - год. Если вы выберете возможность \"Запомнить меня\", данные о входе будут сохраняться в течение двух недель. При выходе из учетной записи куки входа будут удалены.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>При редактировании или публикации статьи в браузере будет сохранен дополнительный куки, он не содержит персональных данных и содержит только ID записи отредактированной вами, истекает через 1 день.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Встраиваемое содержимое других вебсайтов</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Статьи на этом сайте могут включать встраиваемое содержимое (например видео, изображения, статьи и др.), подобное содержимое ведет себя так же, как если бы посетитель зашел на другой сайт.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Эти сайты могут собирать данные о вас, использовать куки, внедрять дополнительное отслеживание третьей стороной и следить за вашим взаимодействием с внедренным содержимым, включая отслеживание взаимодействия, если у вас есть учетная запись и вы авторизовались на том сайте.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Веб-аналитика</h3><!-- /wp:heading --><!-- wp:heading --><h2>С кем мы делимся вашими данными</h2><!-- /wp:heading --><!-- wp:heading --><h2>Как долго мы храним ваши данные</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Если вы оставляете комментарий, то сам комментарий и его метаданные сохраняются неопределенно долго. Это делается для того, чтобы определять и одобрять последующие комментарии автоматически, вместо помещения их в очередь на одобрение.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Для пользователей с регистрацией на нашем сайте мы храним ту личную информацию, которую они указывают в своем профиле. Все пользователи могут видеть, редактировать или удалить свою информацию из профиля в любое время (кроме имени пользователя). Администрация вебсайта также может видеть и изменять эту информацию.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Какие у вас права на ваши данные</h2><!-- /wp:heading --><!-- wp:paragraph --><p>При наличии учетной записи на сайте или если вы оставляли комментарии, то вы можете запросить файл экспорта персональных данных, которые мы сохранили о вас, включая предоставленные вами данные. Вы также можете запросить удаление этих данных, это не включает данные, которые мы обязаны хранить в административных целях, по закону или целях безопасности.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Куда мы отправляем ваши данные</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Комментарии пользователей могут проверяться автоматическим сервисом определения спама.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Ваша контактная информация</h2><!-- /wp:heading --><!-- wp:heading --><h2>Дополнительная информация</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Как мы защищаем ваши данные</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Какие принимаются процедуры против взлома данных</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>От каких третьих сторон мы получаем данные</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Какие автоматические решения принимаются на основе данных пользователей</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Требования к раскрытию отраслевых нормативных требований</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:30:08', '2021-11-01 17:30:08', '', 3, 'https://adplug.net/?p=87', 0, 'revision', '', 0),
(6, 1, '2021-11-01 12:17:10', '2021-11-01 09:17:10', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2021-11-01 19:40:22', '2021-11-01 16:40:22', '', 0, 'http://adplug.net/?page_id=6', 0, 'page', '', 0),
(10, 1, '2021-11-01 12:25:06', '2021-11-01 09:25:06', '', 'Home', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2021-11-01 12:25:06', '2021-11-01 09:25:06', '', 6, 'http://adplug.net/?p=10', 0, 'revision', '', 0),
(7, 1, '2021-11-01 12:17:10', '2021-11-01 09:17:10', '', 'Главная', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2021-11-01 12:17:10', '2021-11-01 09:17:10', '', 6, 'http://adplug.net/?p=7', 0, 'revision', '', 0),
(8, 1, '2021-11-01 12:24:56', '2021-11-01 09:24:56', '', 'About Us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2021-11-01 12:25:19', '2021-11-01 09:25:19', '', 0, 'http://adplug.net/?page_id=8', 0, 'page', '', 0),
(9, 1, '2021-11-01 12:24:56', '2021-11-01 09:24:56', '', 'О нас', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2021-11-01 12:24:56', '2021-11-01 09:24:56', '', 8, 'http://adplug.net/?p=9', 0, 'revision', '', 0),
(11, 1, '2021-11-01 12:25:19', '2021-11-01 09:25:19', '', 'About Us', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2021-11-01 12:25:19', '2021-11-01 09:25:19', '', 8, 'http://adplug.net/?p=11', 0, 'revision', '', 0),
(12, 1, '2021-11-01 12:27:44', '2021-11-01 09:27:44', '', 'Models', '', 'publish', 'closed', 'closed', '', 'models', '', '', '2021-11-01 12:32:18', '2021-11-01 09:32:18', '', 0, 'http://adplug.net/?page_id=12', 0, 'page', '', 0),
(13, 1, '2021-11-01 12:27:44', '2021-11-01 09:27:44', '', 'Models', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2021-11-01 12:27:44', '2021-11-01 09:27:44', '', 12, 'http://adplug.net/?p=13', 0, 'revision', '', 0),
(14, 1, '2021-11-01 12:27:54', '2021-11-01 09:27:54', '', 'Brands', '', 'publish', 'closed', 'closed', '', 'brands', '', '', '2021-11-01 12:32:10', '2021-11-01 09:32:10', '', 0, 'http://adplug.net/?page_id=14', 0, 'page', '', 0),
(15, 1, '2021-11-01 12:27:54', '2021-11-01 09:27:54', '', 'Brands', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2021-11-01 12:27:54', '2021-11-01 09:27:54', '', 14, 'http://adplug.net/?p=15', 0, 'revision', '', 0),
(16, 1, '2021-11-01 12:33:43', '2021-11-01 09:33:43', '', 'Team', '', 'publish', 'closed', 'closed', '', 'team', '', '', '2021-11-01 12:37:59', '2021-11-01 09:37:59', '', 0, 'http://adplug.net/?page_id=16', 0, 'page', '', 0),
(17, 1, '2021-11-01 12:33:43', '2021-11-01 09:33:43', '', 'Team', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2021-11-01 12:33:43', '2021-11-01 09:33:43', '', 16, 'http://adplug.net/?p=17', 0, 'revision', '', 0),
(18, 1, '2021-11-01 12:38:53', '2021-11-01 09:38:53', '', 'Help', '', 'publish', 'closed', 'closed', '', 'help', '', '', '2021-11-01 12:40:21', '2021-11-01 09:40:21', '', 0, 'http://adplug.net/?page_id=18', 0, 'page', '', 0),
(19, 1, '2021-11-01 12:38:53', '2021-11-01 09:38:53', '', 'Help', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2021-11-01 12:38:53', '2021-11-01 09:38:53', '', 18, 'http://adplug.net/?p=19', 0, 'revision', '', 0),
(20, 1, '2021-11-01 14:25:05', '2021-11-01 11:18:33', ' ', '', '', 'publish', 'closed', 'closed', '', '20', '', '', '2021-11-01 14:25:05', '2021-11-01 11:25:05', '', 0, 'https://adplug.net/?p=20', 1, 'nav_menu_item', '', 0),
(21, 1, '2021-11-01 14:25:05', '2021-11-01 11:18:33', ' ', '', '', 'publish', 'closed', 'closed', '', '21', '', '', '2021-11-01 14:25:05', '2021-11-01 11:25:05', '', 0, 'https://adplug.net/?p=21', 2, 'nav_menu_item', '', 0),
(22, 1, '2021-11-01 14:25:05', '2021-11-01 11:18:33', ' ', '', '', 'publish', 'closed', 'closed', '', '22', '', '', '2021-11-01 14:25:05', '2021-11-01 11:25:05', '', 0, 'https://adplug.net/?p=22', 4, 'nav_menu_item', '', 0),
(24, 1, '2021-11-01 14:25:05', '2021-11-01 11:18:33', ' ', '', '', 'publish', 'closed', 'closed', '', '24', '', '', '2021-11-01 14:25:05', '2021-11-01 11:25:05', '', 0, 'https://adplug.net/?p=24', 3, 'nav_menu_item', '', 0),
(34, 1, '2021-11-01 14:42:22', '2021-11-01 11:42:22', '', 'Sign Up for Creator', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2021-11-01 14:42:22', '2021-11-01 11:42:22', '', 33, 'https://adplug.net/?p=34', 0, 'revision', '', 0),
(33, 1, '2021-11-01 14:42:22', '2021-11-01 11:42:22', '', 'Sign Up as Creator', '', 'publish', 'closed', 'closed', '', 'sign-up-as-creator', '', '', '2021-11-01 15:02:04', '2021-11-01 12:02:04', '', 0, 'https://adplug.net/?page_id=33', 0, 'page', '', 0),
(32, 1, '2021-11-01 14:41:40', '2021-11-01 11:41:40', '', 'Login', '', 'inherit', 'closed', 'closed', '', '31-revision-v1', '', '', '2021-11-01 14:41:40', '2021-11-01 11:41:40', '', 31, 'https://adplug.net/?p=32', 0, 'revision', '', 0),
(31, 1, '2021-11-01 14:41:40', '2021-11-01 11:41:40', '', 'Login', '', 'publish', 'closed', 'closed', '', 'login', '', '', '2021-11-01 14:51:43', '2021-11-01 11:51:43', '', 0, 'https://adplug.net/?page_id=31', 0, 'page', '', 0),
(35, 1, '2021-11-01 14:43:31', '2021-11-01 11:43:31', '', 'Sign Up as Advertiser', '', 'publish', 'closed', 'closed', '', 'sign-up-as-advertiser', '', '', '2021-11-01 15:01:58', '2021-11-01 12:01:58', '', 0, 'https://adplug.net/?page_id=35', 0, 'page', '', 0),
(36, 1, '2021-11-01 14:43:31', '2021-11-01 11:43:31', '', 'Sign Up as Advertiser', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2021-11-01 14:43:31', '2021-11-01 11:43:31', '', 35, 'https://adplug.net/?p=36', 0, 'revision', '', 0),
(37, 1, '2021-11-01 14:43:40', '2021-11-01 11:43:40', '', 'Sign Up as Creator', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2021-11-01 14:43:40', '2021-11-01 11:43:40', '', 33, 'https://adplug.net/?p=37', 0, 'revision', '', 0),
(38, 1, '2021-11-01 15:10:59', '2021-11-01 12:10:59', '', 'Profile', '', 'publish', 'closed', 'closed', '', 'profile', '', '', '2021-11-01 16:05:47', '2021-11-01 13:05:47', '', 0, 'https://adplug.net/?page_id=38', 0, 'page', '', 0),
(39, 1, '2021-11-01 15:10:59', '2021-11-01 12:10:59', '', 'Profile', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2021-11-01 15:10:59', '2021-11-01 12:10:59', '', 38, 'https://adplug.net/?p=39', 0, 'revision', '', 0),
(40, 1, '2021-11-01 15:12:41', '2021-11-01 12:12:41', '', 'Sign Up Details for Advertiser', '', 'publish', 'closed', 'closed', '', 'sign-up-details-for-advertiser', '', '', '2021-11-01 15:21:22', '2021-11-01 12:21:22', '', 0, 'https://adplug.net/?page_id=40', 0, 'page', '', 0),
(41, 1, '2021-11-01 15:12:41', '2021-11-01 12:12:41', '', 'Sign Up Details for Advertiser', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2021-11-01 15:12:41', '2021-11-01 12:12:41', '', 40, 'https://adplug.net/?p=41', 0, 'revision', '', 0),
(42, 1, '2021-11-01 15:12:50', '2021-11-01 12:12:50', '', 'Sign Up Details for Creator', '', 'publish', 'closed', 'closed', '', 'sign-up-details-for-creator', '', '', '2021-11-01 15:21:27', '2021-11-01 12:21:27', '', 0, 'https://adplug.net/?page_id=42', 0, 'page', '', 0),
(43, 1, '2021-11-01 15:12:50', '2021-11-01 12:12:50', '', 'Sign Up Details for Creator', '', 'inherit', 'closed', 'closed', '', '42-revision-v1', '', '', '2021-11-01 15:12:50', '2021-11-01 12:12:50', '', 42, 'https://adplug.net/?p=43', 0, 'revision', '', 0),
(44, 1, '2021-11-01 17:02:48', '2021-11-01 14:02:48', '', 'Profile Edit', '', 'publish', 'closed', 'closed', '', 'edit', '', '', '2021-11-01 18:51:00', '2021-11-01 15:51:00', '', 38, 'https://adplug.net/?page_id=44', 0, 'page', '', 0),
(45, 1, '2021-11-01 17:02:48', '2021-11-01 14:02:48', '', 'Profile Edit', '', 'inherit', 'closed', 'closed', '', '44-revision-v1', '', '', '2021-11-01 17:02:48', '2021-11-01 14:02:48', '', 44, 'https://adplug.net/?p=45', 0, 'revision', '', 0),
(73, 1, '2021-11-01 19:30:16', '2021-11-01 16:30:16', '', 'Search', '', 'publish', 'closed', 'closed', '', 'search', '', '', '2021-11-01 19:30:16', '2021-11-01 16:30:16', '', 0, 'https://adplug.net/?page_id=73', 0, 'page', '', 0),
(47, 1, '2021-11-01 17:20:03', '2021-11-01 14:20:03', '', 'Messages', '', 'publish', 'closed', 'closed', '', 'messages', '', '', '2021-11-01 17:48:33', '2021-11-01 14:48:33', '', 38, 'https://adplug.net/?page_id=47', 0, 'page', '', 0),
(48, 1, '2021-11-01 17:20:03', '2021-11-01 14:20:03', '', 'Messages', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2021-11-01 17:20:03', '2021-11-01 14:20:03', '', 47, 'https://adplug.net/?p=48', 0, 'revision', '', 0),
(49, 1, '2021-11-01 17:20:35', '2021-11-01 14:20:35', '', 'My castings', '', 'publish', 'closed', 'closed', '', 'my-castings', '', '', '2021-11-01 17:50:37', '2021-11-01 14:50:37', '', 38, 'https://adplug.net/?page_id=49', 0, 'page', '', 0),
(50, 1, '2021-11-01 17:20:35', '2021-11-01 14:20:35', '', 'My castings', '', 'inherit', 'closed', 'closed', '', '49-revision-v1', '', '', '2021-11-01 17:20:35', '2021-11-01 14:20:35', '', 49, 'https://adplug.net/?p=50', 0, 'revision', '', 0),
(51, 1, '2021-11-01 17:20:55', '2021-11-01 14:20:55', '', 'My photos', '', 'publish', 'closed', 'closed', '', 'my-photos', '', '', '2021-11-01 17:53:23', '2021-11-01 14:53:23', '', 38, 'https://adplug.net/?page_id=51', 0, 'page', '', 0),
(52, 1, '2021-11-01 17:20:55', '2021-11-01 14:20:55', '', 'My photos', '', 'inherit', 'closed', 'closed', '', '51-revision-v1', '', '', '2021-11-01 17:20:55', '2021-11-01 14:20:55', '', 51, 'https://adplug.net/?p=52', 0, 'revision', '', 0),
(53, 1, '2021-11-01 17:21:13', '2021-11-01 14:21:13', '', 'Social', '', 'publish', 'closed', 'closed', '', 'social', '', '', '2021-11-01 18:37:15', '2021-11-01 15:37:15', '', 38, 'https://adplug.net/?page_id=53', 0, 'page', '', 0),
(54, 1, '2021-11-01 17:21:13', '2021-11-01 14:21:13', '', 'Social', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2021-11-01 17:21:13', '2021-11-01 14:21:13', '', 53, 'https://adplug.net/?p=54', 0, 'revision', '', 0),
(55, 1, '2021-11-01 17:21:30', '2021-11-01 14:21:30', '', 'Notifications', '', 'publish', 'closed', 'closed', '', 'notifications', '', '', '2021-11-01 18:46:25', '2021-11-01 15:46:25', '', 38, 'https://adplug.net/?page_id=55', 0, 'page', '', 0),
(56, 1, '2021-11-01 17:21:30', '2021-11-01 14:21:30', '', 'Notifications', '', 'inherit', 'closed', 'closed', '', '55-revision-v1', '', '', '2021-11-01 17:21:30', '2021-11-01 14:21:30', '', 55, 'https://adplug.net/?p=56', 0, 'revision', '', 0),
(57, 1, '2021-11-01 17:21:43', '2021-11-01 14:21:43', '', 'Favourites', '', 'publish', 'closed', 'closed', '', 'favourites', '', '', '2021-11-01 19:04:13', '2021-11-01 16:04:13', '', 38, 'https://adplug.net/?page_id=57', 0, 'page', '', 0),
(58, 1, '2021-11-01 17:21:43', '2021-11-01 14:21:43', '', 'Favourites', '', 'inherit', 'closed', 'closed', '', '57-revision-v1', '', '', '2021-11-01 17:21:43', '2021-11-01 14:21:43', '', 57, 'https://adplug.net/?p=58', 0, 'revision', '', 0),
(59, 1, '2021-11-01 17:22:00', '2021-11-01 14:22:00', '', 'Payment', '', 'publish', 'closed', 'closed', '', 'payment', '', '', '2021-11-01 19:20:18', '2021-11-01 16:20:18', '', 38, 'https://adplug.net/?page_id=59', 0, 'page', '', 0),
(60, 1, '2021-11-01 17:22:00', '2021-11-01 14:22:00', '', 'Payment', '', 'inherit', 'closed', 'closed', '', '59-revision-v1', '', '', '2021-11-01 17:22:00', '2021-11-01 14:22:00', '', 59, 'https://adplug.net/?p=60', 0, 'revision', '', 0),
(61, 1, '2021-11-01 17:22:11', '2021-11-01 14:22:11', '', 'Follower', '', 'publish', 'closed', 'closed', '', 'follower', '', '', '2021-11-01 19:10:37', '2021-11-01 16:10:37', '', 38, 'https://adplug.net/?page_id=61', 0, 'page', '', 0),
(62, 1, '2021-11-01 17:22:11', '2021-11-01 14:22:11', '', 'Follower', '', 'inherit', 'closed', 'closed', '', '61-revision-v1', '', '', '2021-11-01 17:22:11', '2021-11-01 14:22:11', '', 61, 'https://adplug.net/?p=62', 0, 'revision', '', 0),
(63, 1, '2021-11-01 17:22:31', '2021-11-01 14:22:31', '', 'Personal settings', '', 'publish', 'closed', 'closed', '', 'personal-settings', '', '', '2021-11-01 19:12:27', '2021-11-01 16:12:27', '', 38, 'https://adplug.net/?page_id=63', 0, 'page', '', 0),
(64, 1, '2021-11-01 17:22:31', '2021-11-01 14:22:31', '', 'Personal settings', '', 'inherit', 'closed', 'closed', '', '63-revision-v1', '', '', '2021-11-01 17:22:31', '2021-11-01 14:22:31', '', 63, 'https://adplug.net/?p=64', 0, 'revision', '', 0),
(65, 1, '2021-11-01 17:22:44', '2021-11-01 14:22:44', '', 'Password', '', 'publish', 'closed', 'closed', '', 'password', '', '', '2021-11-01 19:15:32', '2021-11-01 16:15:32', '', 38, 'https://adplug.net/?page_id=65', 0, 'page', '', 0),
(66, 1, '2021-11-01 17:22:44', '2021-11-01 14:22:44', '', 'Password', '', 'inherit', 'closed', 'closed', '', '65-revision-v1', '', '', '2021-11-01 17:22:44', '2021-11-01 14:22:44', '', 65, 'https://adplug.net/?p=66', 0, 'revision', '', 0),
(67, 1, '2021-11-01 17:22:57', '2021-11-01 14:22:57', '', 'Bank account', '', 'publish', 'closed', 'closed', '', 'bank-account', '', '', '2021-11-01 19:17:22', '2021-11-01 16:17:22', '', 38, 'https://adplug.net/?page_id=67', 0, 'page', '', 0),
(68, 1, '2021-11-01 17:22:57', '2021-11-01 14:22:57', '', 'Bank account', '', 'inherit', 'closed', 'closed', '', '67-revision-v1', '', '', '2021-11-01 17:22:57', '2021-11-01 14:22:57', '', 67, 'https://adplug.net/?p=68', 0, 'revision', '', 0),
(69, 1, '2021-11-01 17:23:24', '2021-11-01 14:23:24', '', 'Settings Notifications', '', 'publish', 'closed', 'closed', '', 'settings-notifications', '', '', '2021-11-01 19:18:05', '2021-11-01 16:18:05', '', 38, 'https://adplug.net/?page_id=69', 0, 'page', '', 0),
(70, 1, '2021-11-01 17:23:24', '2021-11-01 14:23:24', '', 'Settings Notifications', '', 'inherit', 'closed', 'closed', '', '69-revision-v1', '', '', '2021-11-01 17:23:24', '2021-11-01 14:23:24', '', 69, 'https://adplug.net/?p=70', 0, 'revision', '', 0),
(72, 1, '2021-11-01 17:24:16', '2021-11-01 14:24:16', '', 'Bank account', '', 'inherit', 'closed', 'closed', '', '67-revision-v1', '', '', '2021-11-01 17:24:16', '2021-11-01 14:24:16', '', 67, 'https://adplug.net/?p=72', 0, 'revision', '', 0),
(71, 1, '2021-11-01 17:23:40', '2021-11-01 14:23:40', '', 'Settings Bank account', '', 'inherit', 'closed', 'closed', '', '67-revision-v1', '', '', '2021-11-01 17:23:40', '2021-11-01 14:23:40', '', 67, 'https://adplug.net/?p=71', 0, 'revision', '', 0),
(74, 1, '2021-11-01 19:30:16', '2021-11-01 16:30:16', '', 'Search', '', 'inherit', 'closed', 'closed', '', '73-revision-v1', '', '', '2021-11-01 19:30:16', '2021-11-01 16:30:16', '', 73, 'https://adplug.net/?p=74', 0, 'revision', '', 0),
(75, 1, '2021-11-01 19:35:16', '2021-11-01 16:35:16', '', 'Forgot', '', 'publish', 'closed', 'closed', '', 'forgot', '', '', '2021-11-01 19:35:16', '2021-11-01 16:35:16', '', 0, 'https://adplug.net/?page_id=75', 0, 'page', '', 0),
(76, 1, '2021-11-01 19:35:16', '2021-11-01 16:35:16', '', 'Forgot', '', 'inherit', 'closed', 'closed', '', '75-revision-v1', '', '', '2021-11-01 19:35:16', '2021-11-01 16:35:16', '', 75, 'https://adplug.net/?p=76', 0, 'revision', '', 0),
(77, 1, '2021-11-01 19:38:55', '2021-11-01 16:38:55', '', 'Offer', '', 'publish', 'closed', 'closed', '', 'offer', '', '', '2021-11-01 19:38:55', '2021-11-01 16:38:55', '', 0, 'https://adplug.net/?page_id=77', 0, 'page', '', 0),
(78, 1, '2021-11-01 19:38:55', '2021-11-01 16:38:55', '', 'Offer', '', 'inherit', 'closed', 'closed', '', '77-revision-v1', '', '', '2021-11-01 19:38:55', '2021-11-01 16:38:55', '', 77, 'https://adplug.net/?p=78', 0, 'revision', '', 0),
(79, 1, '2021-11-01 19:45:04', '2021-11-01 16:45:04', '', 'Profile View', '', 'publish', 'closed', 'closed', '', 'profile-view', '', '', '2021-11-01 19:45:04', '2021-11-01 16:45:04', '', 0, 'https://adplug.net/?page_id=79', 0, 'page', '', 0),
(80, 1, '2021-11-01 19:45:04', '2021-11-01 16:45:04', '', 'Profile View', '', 'inherit', 'closed', 'closed', '', '79-revision-v1', '', '', '2021-11-01 19:45:04', '2021-11-01 16:45:04', '', 79, 'https://adplug.net/?p=80', 0, 'revision', '', 0),
(81, 1, '2021-11-01 19:56:07', '2021-11-01 16:56:07', '', 'Profile Brand View', '', 'publish', 'closed', 'closed', '', 'profile-brand-view', '', '', '2021-11-01 19:58:23', '2021-11-01 16:58:23', '', 0, 'https://adplug.net/?page_id=81', 0, 'page', '', 0),
(82, 1, '2021-11-01 19:56:07', '2021-11-01 16:56:07', '', 'Profile brand view', '', 'inherit', 'closed', 'closed', '', '81-revision-v1', '', '', '2021-11-01 19:56:07', '2021-11-01 16:56:07', '', 81, 'https://adplug.net/?p=82', 0, 'revision', '', 0),
(83, 1, '2021-11-01 19:58:23', '2021-11-01 16:58:23', '', 'Profile Brand View', '', 'inherit', 'closed', 'closed', '', '81-revision-v1', '', '', '2021-11-01 19:58:23', '2021-11-01 16:58:23', '', 81, 'https://adplug.net/?p=83', 0, 'revision', '', 0),
(84, 1, '2021-11-01 20:29:04', '2021-11-01 17:29:04', '', 'AdPlug', '', 'inherit', 'open', 'closed', '', 'android-chrome-512x512', '', '', '2021-11-01 20:29:11', '2021-11-01 17:29:11', '', 0, 'http://adplug.net/wp-content/uploads/2021/11/android-chrome-512x512-1.png', 0, 'attachment', 'image/png', 0),
(85, 1, '2021-11-01 20:29:11', '2021-11-01 17:29:11', 'http://adplug.net/wp-content/uploads/2021/11/cropped-android-chrome-512x512-1.png', 'cropped-android-chrome-512x512-1.png', '', 'inherit', 'open', 'closed', '', 'cropped-android-chrome-512x512-1-png', '', '', '2021-11-01 20:29:11', '2021-11-01 17:29:11', '', 0, 'http://adplug.net/wp-content/uploads/2021/11/cropped-android-chrome-512x512-1.png', 0, 'attachment', 'image/png', 0),
(90, 1, '2021-11-01 20:35:27', '2021-11-01 17:35:27', '<!-- wp:heading -->\n<h2>Who are we</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our website address is: https://adplug.net/.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and for what purpose</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments </h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media files</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms<br>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Embedded content from other websites<br>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Web analytics<br>Who we share your data with<br>How long do we keep your data<br>If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>What are your rights to your data<br>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Where do we send your data<br>User comments can be checked by an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Your contact information<br>Additional Information<br>How we protect your data<br>What procedures are taken against data breach<br>From which third parties we receive data<br>What automatic decisions are made based on user data<br>Industry Regulatory Disclosure Requirements</p>\n<!-- /wp:paragraph -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:35:27', '2021-11-01 17:35:27', '', 3, 'https://adplug.net/?p=90', 0, 'revision', '', 0),
(88, 1, '2021-11-01 20:30:33', '2021-11-01 17:30:33', '<!-- wp:heading -->\n<h2>Кто мы</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Наш адрес сайта: https://adplug.net/.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Какие персональные данные мы собираем и с какой целью</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Комментарии</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Если посетитель оставляет комментарий на сайте, мы собираем данные указанные в форме комментария, а также IP адрес посетителя и данные user-agent браузера с целью определения спама.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Анонимизированная строка создаваемая из вашего адреса email (\"хеш\") может предоставляться сервису Gravatar, чтобы определить используете ли вы его. Политика конфиденциальности Gravatar доступна здесь: https://automattic.com/privacy/ . После одобрения комментария ваше изображение профиля будет видимым публично в контексте вашего комментария.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Медиафайлы</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Если вы зарегистрированный пользователь и загружаете фотографии на сайт, вам возможно следует избегать загрузки изображений с метаданными EXIF, так как они могут содержать данные вашего месторасположения по GPS. Посетители могут извлечь эту информацию скачав изображения с сайта.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Формы контактов</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Куки</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Если вы оставляете комментарий на нашем сайте, вы можете включить сохранение вашего имени, адреса email и вебсайта в куки. Это делается для вашего удобства, чтобы не заполнять данные снова при повторном комментировании. Эти куки хранятся в течение одного года.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Если у вас есть учетная запись на сайте и вы войдете в неё, мы установим временный куки для определения поддержки куки вашим браузером, куки не содержит никакой личной информации и удаляется при закрытии вашего браузера.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>При входе в учетную запись мы также устанавливаем несколько куки с данными входа и настройками экрана. Куки входа хранятся в течение двух дней, куки с настройками экрана - год. Если вы выберете возможность \"Запомнить меня\", данные о входе будут сохраняться в течение двух недель. При выходе из учетной записи куки входа будут удалены.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>При редактировании или публикации статьи в браузере будет сохранен дополнительный куки, он не содержит персональных данных и содержит только ID записи отредактированной вами, истекает через 1 день.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Встраиваемое содержимое других вебсайтов</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Статьи на этом сайте могут включать встраиваемое содержимое (например видео, изображения, статьи и др.), подобное содержимое ведет себя так же, как если бы посетитель зашел на другой сайт.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Эти сайты могут собирать данные о вас, использовать куки, внедрять дополнительное отслеживание третьей стороной и следить за вашим взаимодействием с внедренным содержимым, включая отслеживание взаимодействия, если у вас есть учетная запись и вы авторизовались на том сайте.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Веб-аналитика</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>С кем мы делимся вашими данными</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Как долго мы храним ваши данные</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Если вы оставляете комментарий, то сам комментарий и его метаданные сохраняются неопределенно долго. Это делается для того, чтобы определять и одобрять последующие комментарии автоматически, вместо помещения их в очередь на одобрение.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Для пользователей с регистрацией на нашем сайте мы храним ту личную информацию, которую они указывают в своем профиле. Все пользователи могут видеть, редактировать или удалить свою информацию из профиля в любое время (кроме имени пользователя). Администрация вебсайта также может видеть и изменять эту информацию.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Какие у вас права на ваши данные</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>При наличии учетной записи на сайте или если вы оставляли комментарии, то вы можете запросить файл экспорта персональных данных, которые мы сохранили о вас, включая предоставленные вами данные. Вы также можете запросить удаление этих данных, это не включает данные, которые мы обязаны хранить в административных целях, по закону или целях безопасности.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Куда мы отправляем ваши данные</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Комментарии пользователей могут проверяться автоматическим сервисом определения спама.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Ваша контактная информация</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2>Дополнительная информация</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Как мы защищаем ваши данные</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Какие принимаются процедуры против взлома данных</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>От каких третьих сторон мы получаем данные</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Какие автоматические решения принимаются на основе данных пользователей</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Требования к раскрытию отраслевых нормативных требований</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:30:33', '2021-11-01 17:30:33', '', 3, 'https://adplug.net/?p=88', 0, 'revision', '', 0),
(89, 1, '2021-11-01 20:37:18', '2021-11-01 17:37:18', '<!-- wp:heading -->\n<h2>Who are we</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our website address is: https://adplug.net/.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and for what purpose</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments </h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media files</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms<br>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Embedded content from other websites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Web analytics</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2><br>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>How long do we keep your data<br>If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What are your rights to your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where do we send your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>User comments can be checked by an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Your contact information<br>Additional Information</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3><br>How we protect your data<br>What procedures are taken against data breach<br>From which third parties we receive data<br>What automatic decisions are made based on user data<br>Industry Regulatory Disclosure Requirements</h3>\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-autosave-v1', '', '', '2021-11-01 20:37:18', '2021-11-01 17:37:18', '', 3, 'https://adplug.net/?p=89', 0, 'revision', '', 0);
INSERT INTO `Tls_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(91, 1, '2021-11-01 20:37:25', '2021-11-01 17:37:25', '<!-- wp:heading -->\n<h2>Who are we</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our website address is: https://adplug.net/.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and for what purpose</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments </h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media files</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms<br>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Embedded content from other websites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Web analytics</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2><br>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>How long do we keep your data<br>If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What are your rights to your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where do we send your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>User comments can be checked by an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Your contact information<br>Additional Information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>How we protect your data<br>What procedures are taken against data breach<br>From which third parties we receive data<br>What automatic decisions are made based on user data<br>Industry Regulatory Disclosure Requirements</h3>\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:37:25', '2021-11-01 17:37:25', '', 3, 'https://adplug.net/?p=91', 0, 'revision', '', 0),
(92, 1, '2021-11-01 20:37:42', '2021-11-01 17:37:42', '<!-- wp:heading -->\n<h2>Who are we</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our website address is: https://adplug.net/.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and for what purpose</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments </h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media files</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms<br>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Embedded content from other websites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Web analytics</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2><br>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>How long do we keep your data<br>If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What are your rights to your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where do we send your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>User comments can be checked by an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Your contact information<br>Additional Information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>How we protect your data<br>What procedures are taken against data breach<br>From which third parties we receive data<br>What automatic decisions are made based on user data<br>Industry Regulatory Disclosure Requirements</h3>\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:37:42', '2021-11-01 17:37:42', '', 3, 'https://adplug.net/?p=92', 0, 'revision', '', 0),
(94, 1, '2021-11-01 20:40:23', '2021-11-01 17:40:23', '<!-- wp:heading -->\r\n<h2>Who are we</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Our website address is: https://adplug.net/.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What personal data we collect and for what purpose</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Comments</h3>\r\n<p>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Media files</h3>\r\n<p>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Contact forms<br />Cookies</h3>\r\n<p>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Embedded content from other websites</h3>\r\n<p>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Web analytics</h3>\r\n<h2>Who we share your data with</h2>\r\n<p>How long do we keep your data<br />If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What are your rights to your data</h2>\r\n<p>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Where do we send your data</h2>\r\n<p>User comments can be checked by an automated spam detection service.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Your contact information<br />Additional Information</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>How we protect your data<br />What procedures are taken against data breach<br />From which third parties we receive data<br />What automatic decisions are made based on user data<br />Industry Regulatory Disclosure Requirements</h3>\r\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:40:23', '2021-11-01 17:40:23', '', 3, 'https://adplug.net/?p=94', 0, 'revision', '', 0),
(93, 1, '2021-11-01 20:38:10', '2021-11-01 17:38:10', '<!-- wp:heading -->\n<h2>Who are we</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our website address is: https://adplug.net/.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What personal data we collect and for what purpose</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Comments </h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Media files</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Contact forms<br>Cookies</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><br>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Embedded content from other websites</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>Web analytics</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2><br>Who we share your data with</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>How long do we keep your data<br>If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>What are your rights to your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Where do we send your data</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><br>User comments can be checked by an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2>Your contact information<br>Additional Information</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3>How we protect your data<br>What procedures are taken against data breach<br>From which third parties we receive data<br>What automatic decisions are made based on user data<br>Industry Regulatory Disclosure Requirements</h3>\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:38:10', '2021-11-01 17:38:10', '', 3, 'https://adplug.net/?p=93', 0, 'revision', '', 0),
(95, 1, '2021-11-01 20:40:29', '2021-11-01 17:40:29', '<!-- wp:heading -->\r\n<h2>Who are we</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Our website address is: https://adplug.net/.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What personal data we collect and for what purpose</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Comments</h3>\r\n<p>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Media files</h3>\r\n<p>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Contact forms<br />Cookies</h3>\r\n<p>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Embedded content from other websites</h3>\r\n<p>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Web analytics</h3>\r\n<h2>Who we share your data with</h2>\r\n<p>How long do we keep your data<br />If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What are your rights to your data</h2>\r\n<p>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Where do we send your data</h2>\r\n<p>User comments can be checked by an automated spam detection service.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Your contact information<br />Additional Information</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>How we protect your data<br />What procedures are taken against data breach<br />From which third parties we receive data<br />What automatic decisions are made based on user data<br />Industry Regulatory Disclosure Requirements</h3>\r\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:40:29', '2021-11-01 17:40:29', '', 3, 'https://adplug.net/?p=95', 0, 'revision', '', 0),
(96, 1, '2021-11-01 20:41:06', '2021-11-01 17:41:06', '<!-- wp:heading -->\r\n<h2>Who are we</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Our website address is: https://adplug.net/.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What personal data we collect and for what purpose</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Comments</h3>\r\n<p>When visitors leave comments on the site, we collect the data shown in the comment form, as well as the visitor\'s IP address and browser user agent string to help spam detection.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>An anonymized string generated from your email address (“hash”) can be provided to the Gravatar service to determine if you are using it. The Gravatar privacy policy is available here: https://automattic.com/privacy/. After the comment is approved, your profile picture will be publicly visible in the context of your comment.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Media files</h3>\r\n<p>If you are a registered user and upload photos to the site, you should probably avoid uploading images with EXIF ​​metadata, as they may contain your GPS location data. Visitors can extract this information by downloading images from the site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Contact forms<br />Cookies</h3>\r\n<p>If you leave a comment on our site, you can enable cookies to store your name, email address and website. This is done for your convenience, so as not to fill in the data again when you comment again. These cookies are stored for one year.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>If you have an account on the site and you log into it, we will set a temporary cookie to determine if your browser supports cookies, the cookie does not contain any personal information and is deleted when you close your browser.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you log into your account, we also set several cookies with login details and screen settings. Login cookies are stored for two days, cookies with screen settings - for a year. If you choose the “Remember me” option, your login information will be saved for two weeks. When you log out of your account, the login cookies will be deleted.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>When you edit or publish an article in the browser, an additional cookie will be saved, it does not contain personal data and only contains the ID of the entry you edited, expires in 1 day.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Embedded content from other websites</h3>\r\n<p>Articles on this site may include embedded content (such as videos, images, articles, etc.), such content behaves in the same way as if the visitor had visited the other site.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>These sites may collect data about you, use cookies, implement additional third-party tracking, and track your interactions with the embedded content, including interaction tracking if you have an account and are logged into that site.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>Web analytics</h3>\r\n<h2>Who we share your data with</h2>\r\n<p>How long do we keep your data<br />If you leave a comment, the comment itself and its metadata are retained indefinitely. This is done in order to detect and approve follow-up comments automatically, instead of placing them in an approval queue.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>For users who register on our site, we store the personal information that they indicate in their profile. All users can see, edit, or delete their profile information at any time (except for their username). The website administration can also see and change this information.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>What are your rights to your data</h2>\r\n<p>If you have an account on the site or if you left comments, then you can request an export file of personal data that we have stored about you, including the data you provided. You can also request the deletion of this data, this does not include data that we are required to store for administrative, legal or security purposes.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Where do we send your data</h2>\r\n<p>User comments can be checked by an automated spam detection service.</p>\r\n<p>&nbsp;</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:heading -->\r\n<h2>Your contact information<br />Additional Information</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"level\":3} -->\r\n<h3>How we protect your data<br />What procedures are taken against data breach<br />From which third parties we receive data<br />What automatic decisions are made based on user data<br />Industry Regulatory Disclosure Requirements</h3>\r\n<!-- /wp:heading -->', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2021-11-01 20:41:06', '2021-11-01 17:41:06', '', 3, 'https://adplug.net/?p=96', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_rio_process_queue`
--

CREATE TABLE `Tls_rio_process_queue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `server_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_id` bigint(20) UNSIGNED DEFAULT NULL,
  `object_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_hash` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'sha256 size',
  `item_hash_alternative` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'sha256 size',
  `result_status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_level` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_backed_up` tinyint(1) NOT NULL DEFAULT '0',
  `original_size` int(11) UNSIGNED NOT NULL,
  `final_size` int(11) UNSIGNED NOT NULL,
  `original_mime_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_mime_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_data` text COLLATE utf8mb4_unicode_ci,
  `created_at` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_termmeta`
--

CREATE TABLE `Tls_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_terms`
--

CREATE TABLE `Tls_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_terms`
--

INSERT INTO `Tls_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Без рубрики', '%d0%b1%d0%b5%d0%b7-%d1%80%d1%83%d0%b1%d1%80%d0%b8%d0%ba%d0%b8', 0),
(2, 'Main menu', 'main-menu', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_term_relationships`
--

CREATE TABLE `Tls_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_term_relationships`
--

INSERT INTO `Tls_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(20, 2, 0),
(21, 2, 0),
(24, 2, 0),
(22, 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_term_taxonomy`
--

CREATE TABLE `Tls_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_term_taxonomy`
--

INSERT INTO `Tls_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_usermeta`
--

CREATE TABLE `Tls_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_usermeta`
--

INSERT INTO `Tls_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'aprinciple'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'Tls_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'Tls_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy,theme_editor_notice'),
(15, 1, 'show_welcome_panel', '0'),
(17, 1, 'Tls_dashboard_quick_press_last_post_id', '97'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:12:\"188.163.45.0\";}'),
(19, 1, 'session_tokens', 'a:1:{s:64:\"25f5344f56ce700701b40328f1d54921788ecc9ef97b4b11545813827062b72b\";a:4:{s:10:\"expiration\";i:1639661821;s:2:\"ip\";s:14:\"188.163.45.221\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36\";s:5:\"login\";i:1638452221;}}'),
(20, 1, 'closedpostboxes_dashboard', 'a:0:{}'),
(21, 1, 'metaboxhidden_dashboard', 'a:5:{i:0;s:21:\"dashboard_site_health\";i:1;s:19:\"dashboard_right_now\";i:2;s:18:\"dashboard_activity\";i:3;s:21:\"dashboard_quick_press\";i:4;s:17:\"dashboard_primary\";}'),
(22, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(23, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(24, 1, 'nav_menu_recently_edited', '2'),
(25, 1, 'Tls_user-settings', 'libraryContent=browse&editor=tinymce'),
(26, 1, 'Tls_user-settings-time', '1635788461');

-- --------------------------------------------------------

--
-- Структура таблицы `Tls_users`
--

CREATE TABLE `Tls_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Tls_users`
--

INSERT INTO `Tls_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'aprinciple', '$P$Bk0aUUls//0IEsW0lVdyseme9Sw9fT/', 'Alexander', 'avprinciple@gmail.com', '', '2021-11-01 09:14:05', '', 0, 'Alexander');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Tls_commentmeta`
--
ALTER TABLE `Tls_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `Tls_comments`
--
ALTER TABLE `Tls_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Индексы таблицы `Tls_links`
--
ALTER TABLE `Tls_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Индексы таблицы `Tls_options`
--
ALTER TABLE `Tls_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Индексы таблицы `Tls_postmeta`
--
ALTER TABLE `Tls_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `Tls_posts`
--
ALTER TABLE `Tls_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Индексы таблицы `Tls_rio_process_queue`
--
ALTER TABLE `Tls_rio_process_queue`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index-hash` (`item_hash`),
  ADD KEY `index-type-status` (`item_type`,`result_status`),
  ADD KEY `index-type-status-level` (`item_type`,`result_status`,`processing_level`),
  ADD KEY `index-hash-alternative` (`item_hash_alternative`),
  ADD KEY `index-type-attachments` (`object_id`,`item_type`);

--
-- Индексы таблицы `Tls_termmeta`
--
ALTER TABLE `Tls_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `Tls_terms`
--
ALTER TABLE `Tls_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Индексы таблицы `Tls_term_relationships`
--
ALTER TABLE `Tls_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Индексы таблицы `Tls_term_taxonomy`
--
ALTER TABLE `Tls_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Индексы таблицы `Tls_usermeta`
--
ALTER TABLE `Tls_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `Tls_users`
--
ALTER TABLE `Tls_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Tls_commentmeta`
--
ALTER TABLE `Tls_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Tls_comments`
--
ALTER TABLE `Tls_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Tls_links`
--
ALTER TABLE `Tls_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Tls_options`
--
ALTER TABLE `Tls_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1117;

--
-- AUTO_INCREMENT для таблицы `Tls_postmeta`
--
ALTER TABLE `Tls_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT для таблицы `Tls_posts`
--
ALTER TABLE `Tls_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT для таблицы `Tls_rio_process_queue`
--
ALTER TABLE `Tls_rio_process_queue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Tls_termmeta`
--
ALTER TABLE `Tls_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Tls_terms`
--
ALTER TABLE `Tls_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Tls_term_taxonomy`
--
ALTER TABLE `Tls_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Tls_usermeta`
--
ALTER TABLE `Tls_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `Tls_users`
--
ALTER TABLE `Tls_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
