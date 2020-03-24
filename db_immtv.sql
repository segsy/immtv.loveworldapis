/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.5.55-log : Database - db_immtv
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_immtv` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_immtv`;

/*Table structure for table `anglescomments` */

DROP TABLE IF EXISTS `anglescomments`;

CREATE TABLE `anglescomments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eventID` varchar(20) NOT NULL,
  `comments` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `timePosted` int(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15570 DEFAULT CHARSET=latin1;

/*Table structure for table `archives` */

DROP TABLE IF EXISTS `archives`;

CREATE TABLE `archives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `ceeu_paypal_registration_log` */

DROP TABLE IF EXISTS `ceeu_paypal_registration_log`;

CREATE TABLE `ceeu_paypal_registration_log` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(50) NOT NULL,
  `log` varchar(50) NOT NULL,
  `posted_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `ceflix_premium_users` */

DROP TABLE IF EXISTS `ceflix_premium_users`;

CREATE TABLE `ceflix_premium_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `church` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `registration_fee` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `time` int(50) NOT NULL,
  `posted_date` varchar(50) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `log_id` varchar(50) NOT NULL,
  `country` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Table structure for table `ceim_categories` */

DROP TABLE IF EXISTS `ceim_categories`;

CREATE TABLE `ceim_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_bg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ceim_downloads` */

DROP TABLE IF EXISTS `ceim_downloads`;

CREATE TABLE `ceim_downloads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `photo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ceim_encoding_outputs` */

DROP TABLE IF EXISTS `ceim_encoding_outputs`;

CREATE TABLE `ceim_encoding_outputs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job_media_id` int(30) unsigned NOT NULL,
  `task_id` varchar(30) NOT NULL,
  `output_type` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `completed_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `ceim_jobs` */

DROP TABLE IF EXISTS `ceim_jobs`;

CREATE TABLE `ceim_jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(10) unsigned NOT NULL,
  `media_id` int(30) NOT NULL,
  `source` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=483 DEFAULT CHARSET=latin1;

/*Table structure for table `ceim_photo_tag` */

DROP TABLE IF EXISTS `ceim_photo_tag`;

CREATE TABLE `ceim_photo_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ceim_photo_tag_photo_id_foreign` (`photo_id`),
  KEY `ceim_photo_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `ceim_photo_tag_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `ceim_photos` (`id`),
  CONSTRAINT `ceim_photo_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `ceim_tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1903 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ceim_photos` */

DROP TABLE IF EXISTS `ceim_photos`;

CREATE TABLE `ceim_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=679 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ceim_profiles` */

DROP TABLE IF EXISTS `ceim_profiles`;

CREATE TABLE `ceim_profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `uid` bigint(20) unsigned NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_secret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ceim_tags` */

DROP TABLE IF EXISTS `ceim_tags`;

CREATE TABLE `ceim_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ceim_users` */

DROP TABLE IF EXISTS `ceim_users`;

CREATE TABLE `ceim_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `is_contributor` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ceim_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `channel_views` */

DROP TABLE IF EXISTS `channel_views`;

CREATE TABLE `channel_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` varchar(100) NOT NULL,
  `views` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `channelcomments` */

DROP TABLE IF EXISTS `channelcomments`;

CREATE TABLE `channelcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `channel_id` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `com_time` int(11) NOT NULL,
  `action` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `channels` */

DROP TABLE IF EXISTS `channels`;

CREATE TABLE `channels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `description` varchar(500) NOT NULL,
  `tags` varchar(500) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `url` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'admin',
  `position` int(11) NOT NULL,
  `urlprefix` varchar(250) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/channel/thumbs/',
  `total_comments` varchar(250) NOT NULL DEFAULT '0',
  `total_views` varchar(250) NOT NULL DEFAULT '0',
  `hidden` enum('0','1') NOT NULL,
  `channelType` int(1) DEFAULT '1',
  `userID` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `channel` (`channel`,`description`,`tags`)
) ENGINE=MyISAM AUTO_INCREMENT=376 DEFAULT CHARSET=latin1;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `connect_activities` */

DROP TABLE IF EXISTS `connect_activities`;

CREATE TABLE `connect_activities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `_type` int(10) unsigned NOT NULL,
  `initiator_id` int(11) unsigned NOT NULL,
  `initiator_data` text NOT NULL,
  `recipient_id` int(11) unsigned DEFAULT NULL,
  `recipient_data` text,
  `video_id` varchar(60) DEFAULT NULL,
  `video_data` text,
  `time_stamp` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `_type` (`_type`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `connect_activities_ibfk_1` FOREIGN KEY (`_type`) REFERENCES `connect_activity_types` (`id`),
  CONSTRAINT `connect_activities_ibfk_3` FOREIGN KEY (`video_id`) REFERENCES `connect_videos` (`uuid`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30261 DEFAULT CHARSET=latin1;

/*Table structure for table `connect_activity_types` */

DROP TABLE IF EXISTS `connect_activity_types`;

CREATE TABLE `connect_activity_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `connect_connections` */

DROP TABLE IF EXISTS `connect_connections`;

CREATE TABLE `connect_connections` (
  `follower_id` int(11) NOT NULL,
  `followee_id` int(11) NOT NULL,
  KEY `Index1` (`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `connect_encoding_job` */

DROP TABLE IF EXISTS `connect_encoding_job`;

CREATE TABLE `connect_encoding_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mediaID` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `returnPayload` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2381 DEFAULT CHARSET=latin1;

/*Table structure for table `connect_likes` */

DROP TABLE IF EXISTS `connect_likes`;

CREATE TABLE `connect_likes` (
  `user_id` int(11) unsigned NOT NULL,
  `video_id` varchar(60) NOT NULL,
  UNIQUE KEY `user_id_video_id` (`user_id`,`video_id`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `connect_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `connect_likes_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `connect_videos` (`uuid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `connect_reported_videos` */

DROP TABLE IF EXISTS `connect_reported_videos`;

CREATE TABLE `connect_reported_videos` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `video_id` varchar(60) NOT NULL,
  `report` text NOT NULL,
  `report_status` int(11) NOT NULL DEFAULT '1',
  `reported_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `connect_reported_videos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `connect_reported_videos_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `connect_videos` (`uuid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `connect_tags` */

DROP TABLE IF EXISTS `connect_tags`;

CREATE TABLE `connect_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Table structure for table `connect_tags_videos` */

DROP TABLE IF EXISTS `connect_tags_videos`;

CREATE TABLE `connect_tags_videos` (
  `tag_id` int(10) unsigned NOT NULL,
  `video_id` varchar(60) NOT NULL,
  KEY `tag_id` (`tag_id`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `connect_tags_videos_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `connect_videos` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `connect_video_comments` */

DROP TABLE IF EXISTS `connect_video_comments`;

CREATE TABLE `connect_video_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `video_id` varchar(60) CHARACTER SET latin1 NOT NULL,
  `comment` text COLLATE utf8mb4_bin NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `reply_to` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `connect_video_comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `connect_video_comments_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `connect_videos` (`uuid`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Table structure for table `connect_videos` */

DROP TABLE IF EXISTS `connect_videos`;

CREATE TABLE `connect_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(60) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `caption` text NOT NULL,
  `default_video_url` varchar(255) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `tags` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `num_shares` int(11) NOT NULL,
  `num_views` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `num_comments` int(11) NOT NULL,
  `enc_status` varchar(15) NOT NULL,
  `enc_media_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `uuid` (`uuid`),
  CONSTRAINT `connect_videos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2401 DEFAULT CHARSET=latin1;

/*Table structure for table `featured` */

DROP TABLE IF EXISTS `featured`;

CREATE TABLE `featured` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vid_id` varchar(30) NOT NULL,
  `time` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`vid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=354 DEFAULT CHARSET=latin1;

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `mfac_output` */

DROP TABLE IF EXISTS `mfac_output`;

CREATE TABLE `mfac_output` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_media_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `output_type` varchar(100) NOT NULL,
  `status` varchar(150) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `completed_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3751 DEFAULT CHARSET=latin1;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `pinpost` */

DROP TABLE IF EXISTS `pinpost`;

CREATE TABLE `pinpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `position` varchar(20) NOT NULL,
  `upload_time` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `playlist` */

DROP TABLE IF EXISTS `playlist`;

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88954 DEFAULT CHARSET=latin1;

/*Table structure for table `ratings_tbl` */

DROP TABLE IF EXISTS `ratings_tbl`;

CREATE TABLE `ratings_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid_title` varchar(100) NOT NULL,
  `ratings` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `saturday` */

DROP TABLE IF EXISTS `saturday`;

CREATE TABLE `saturday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `ios_url` varchar(255) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `recommended` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `subscribers` */

DROP TABLE IF EXISTS `subscribers`;

CREATE TABLE `subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tags` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tags_channel_id` */

DROP TABLE IF EXISTS `tags_channel_id`;

CREATE TABLE `tags_channel_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_active` */

DROP TABLE IF EXISTS `tbl_active`;

CREATE TABLE `tbl_active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `group_id` int(2) NOT NULL,
  `active` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `code` varchar(250) DEFAULT NULL,
  `channel_id` varchar(11) DEFAULT NULL,
  `catID` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_all_devicetokens` */

DROP TABLE IF EXISTS `tbl_all_devicetokens`;

CREATE TABLE `tbl_all_devicetokens` (
  `appID` varchar(35) NOT NULL,
  `deviceToken` varchar(255) DEFAULT NULL,
  `deviceType` varchar(20) DEFAULT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `dateCreated` varchar(30) DEFAULT NULL,
  `isValid` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`appID`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=756420 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_android_tokens` */

DROP TABLE IF EXISTS `tbl_android_tokens`;

CREATE TABLE `tbl_android_tokens` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `deviceToken` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146220 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_angles_comments` */

DROP TABLE IF EXISTS `tbl_angles_comments`;

CREATE TABLE `tbl_angles_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventID` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `comment` text COLLATE utf8mb4_bin,
  `com_time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `totalreplies` int(11) NOT NULL DEFAULT '0',
  `userID` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `platform` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `randNumber` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `hashComment` varchar(40) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `randNumber` (`randNumber`),
  UNIQUE KEY `hashComment` (`hashComment`),
  KEY `vid_id` (`eventID`)
) ENGINE=InnoDB AUTO_INCREMENT=1152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Table structure for table `tbl_angles_videos` */

DROP TABLE IF EXISTS `tbl_angles_videos`;

CREATE TABLE `tbl_angles_videos` (
  `eventID` varchar(30) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `eventDesc` text,
  `dateCreated` varchar(40) DEFAULT NULL,
  `fmsLink` varchar(255) DEFAULT NULL,
  `streamName` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `enabled` enum('0','1') DEFAULT '1',
  `status` enum('0','1') DEFAULT NULL,
  `views` int(50) DEFAULT '0',
  `thumbnail` varchar(255) DEFAULT NULL,
  `isPublic` enum('0','1') DEFAULT '1',
  `numOfComments` int(11) DEFAULT '0',
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_banner` */

DROP TABLE IF EXISTS `tbl_banner`;

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentID` varchar(255) NOT NULL,
  `contentName` varchar(255) NOT NULL,
  `bannerType` enum('category','channels','tunes','tunes_album','tunes_artist','tunes_track','tunes_radio_channel','video') NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `position` int(2) DEFAULT NULL,
  `filename` varchar(200) NOT NULL DEFAULT 'avatar.png',
  `path` varchar(250) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/banners/',
  `isLive` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=655 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_banner_type` */

DROP TABLE IF EXISTS `tbl_banner_type`;

CREATE TABLE `tbl_banner_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bannertype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_banner_v2` */

DROP TABLE IF EXISTS `tbl_banner_v2`;

CREATE TABLE `tbl_banner_v2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentID` varchar(255) NOT NULL,
  `contentName` varchar(255) NOT NULL,
  `bannerType` enum('category','channels','tunes','tunes_album','tunes_artist','tunes_track','tunes_radio_channel','video') NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `position` int(2) DEFAULT NULL,
  `filename` varchar(200) NOT NULL DEFAULT 'avatar.png',
  `path` varchar(250) NOT NULL DEFAULT 'https://d3c5pcohbexzc4.cloudfront.net/banners/',
  `isLive` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=464 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `time_created` int(11) NOT NULL,
  `position` int(4) DEFAULT NULL,
  `stringID` varchar(25) DEFAULT NULL,
  `premium` enum('0','1') DEFAULT '0',
  `urlprefix` varchar(250) DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/category/thumb/',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_channel_likes` */

DROP TABLE IF EXISTS `tbl_channel_likes`;

CREATE TABLE `tbl_channel_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `likes` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_channel_subscription` */

DROP TABLE IF EXISTS `tbl_channel_subscription`;

CREATE TABLE `tbl_channel_subscription` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `userID` varchar(50) DEFAULT NULL,
  `channelID` varchar(10) NOT NULL,
  `timeSubscribed` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`,`channelID`)
) ENGINE=InnoDB AUTO_INCREMENT=34476 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_comment_replies` */

DROP TABLE IF EXISTS `tbl_comment_replies`;

CREATE TABLE `tbl_comment_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentID` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `comment` text NOT NULL,
  `com_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tunes` int(11) NOT NULL DEFAULT '0',
  `userID` varchar(15) DEFAULT NULL,
  `randNumber` varchar(50) DEFAULT NULL,
  `platform` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4675 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_device` */

DROP TABLE IF EXISTS `tbl_device`;

CREATE TABLE `tbl_device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `deviceToken` varchar(255) NOT NULL,
  `deviceType` varchar(25) NOT NULL,
  `time_created` int(11) NOT NULL,
  `appID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `appID` (`appID`,`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=124134 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_device_v2` */

DROP TABLE IF EXISTS `tbl_device_v2`;

CREATE TABLE `tbl_device_v2` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `userID` varchar(5) DEFAULT NULL,
  `deviceToken` varchar(255) DEFAULT NULL,
  `deviceType` varchar(20) DEFAULT NULL,
  `timeCreated` varchar(40) DEFAULT NULL,
  `isValid` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`,`deviceToken`),
  KEY `userID_2` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=291488 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_dispatch` */

DROP TABLE IF EXISTS `tbl_dispatch`;

CREATE TABLE `tbl_dispatch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `church` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_encodedvideos` */

DROP TABLE IF EXISTS `tbl_encodedvideos`;

CREATE TABLE `tbl_encodedvideos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoID` int(11) NOT NULL,
  `mediaID` varchar(25) NOT NULL,
  `source` varchar(250) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1415 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_encodestatus` */

DROP TABLE IF EXISTS `tbl_encodestatus`;

CREATE TABLE `tbl_encodestatus` (
  `id` int(11) NOT NULL,
  `encodestatus` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_groups` */

DROP TABLE IF EXISTS `tbl_groups`;

CREATE TABLE `tbl_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_live_comments` */

DROP TABLE IF EXISTS `tbl_live_comments`;

CREATE TABLE `tbl_live_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoid` varchar(255) NOT NULL,
  `eventID` varchar(100) NOT NULL,
  `livecomments` text NOT NULL,
  `userid` varchar(255) NOT NULL,
  `com_time` int(11) NOT NULL DEFAULT '0',
  `stream_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=506 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_logger` */

DROP TABLE IF EXISTS `tbl_logger`;

CREATE TABLE `tbl_logger` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userID` varchar(70) DEFAULT NULL,
  `browser` text,
  `ipAddress` varchar(20) DEFAULT NULL,
  `activity` text,
  `timeLog` varchar(30) DEFAULT NULL,
  `meta` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215727 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_login_attempts` */

DROP TABLE IF EXISTS `tbl_login_attempts`;

CREATE TABLE `tbl_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_mediacenter_category` */

DROP TABLE IF EXISTS `tbl_mediacenter_category`;

CREATE TABLE `tbl_mediacenter_category` (
  `cateID` varchar(15) DEFAULT NULL,
  `categoryName` varchar(100) DEFAULT NULL,
  `categoryIcon` varchar(150) DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_mediacenter_comments` */

DROP TABLE IF EXISTS `tbl_mediacenter_comments`;

CREATE TABLE `tbl_mediacenter_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `vid_id` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `comment` text COLLATE utf8mb4_bin,
  `com_time` int(11) NOT NULL,
  `isLive` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `totalreplies` int(11) NOT NULL DEFAULT '0',
  `tunes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `vid_id` (`vid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55049 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Table structure for table `tbl_mediacenter_newreleases` */

DROP TABLE IF EXISTS `tbl_mediacenter_newreleases`;

CREATE TABLE `tbl_mediacenter_newreleases` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `videoID` varchar(30) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_mediacenter_subscription_options` */

DROP TABLE IF EXISTS `tbl_mediacenter_subscription_options`;

CREATE TABLE `tbl_mediacenter_subscription_options` (
  `subID` varchar(20) NOT NULL,
  `subName` varchar(40) NOT NULL,
  `packageID` varchar(150) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`subID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_mediacenter_user_subscription` */

DROP TABLE IF EXISTS `tbl_mediacenter_user_subscription`;

CREATE TABLE `tbl_mediacenter_user_subscription` (
  `subID` varchar(70) NOT NULL,
  `userID` varchar(10) DEFAULT NULL,
  `packageID` varchar(40) DEFAULT NULL,
  `timeSub` varchar(30) DEFAULT NULL,
  `expiryDate` varchar(80) DEFAULT NULL,
  `expiryTimeStamp` int(50) DEFAULT NULL,
  PRIMARY KEY (`subID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_mediacenter_views` */

DROP TABLE IF EXISTS `tbl_mediacenter_views`;

CREATE TABLE `tbl_mediacenter_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoID` int(11) NOT NULL,
  `userID` varchar(250) NOT NULL,
  `datecr` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `vid` (`videoID`)
) ENGINE=InnoDB AUTO_INCREMENT=271911 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_music_album` */

DROP TABLE IF EXISTS `tbl_music_album`;

CREATE TABLE `tbl_music_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `artiste_id` int(11) NOT NULL,
  `thumbnail` varchar(250) DEFAULT NULL,
  `datecr` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_single` int(11) NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL DEFAULT 'filename',
  `urlprefix` varchar(250) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/tunesassets/album',
  `descr` varchar(250) NOT NULL DEFAULT '""',
  PRIMARY KEY (`id`),
  KEY `user_id` (`artiste_id`,`datecr`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_music_artiste` */

DROP TABLE IF EXISTS `tbl_music_artiste`;

CREATE TABLE `tbl_music_artiste` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `album_count` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `datecr` varchar(25) NOT NULL,
  `urlprefix` varchar(250) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/tunesassets/artiste/',
  `filename` varchar(250) NOT NULL DEFAULT '""',
  PRIMARY KEY (`id`),
  UNIQUE KEY `artist_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=198 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_music_category` */

DROP TABLE IF EXISTS `tbl_music_category`;

CREATE TABLE `tbl_music_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_music_like` */

DROP TABLE IF EXISTS `tbl_music_like`;

CREATE TABLE `tbl_music_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoID` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `datecr` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_music_live_tunes` */

DROP TABLE IF EXISTS `tbl_music_live_tunes`;

CREATE TABLE `tbl_music_live_tunes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_title` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `urlprefix` varchar(250) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/tunesassets/album/',
  `filename` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `audio_stream` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `likeCount` int(11) NOT NULL DEFAULT '0',
  `commentCount` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_music_playlist` */

DROP TABLE IF EXISTS `tbl_music_playlist`;

CREATE TABLE `tbl_music_playlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `playlistID` int(11) NOT NULL,
  `musicID` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `datecr` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_music_playlist_title` */

DROP TABLE IF EXISTS `tbl_music_playlist_title`;

CREATE TABLE `tbl_music_playlist_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `datacr` varchar(25) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_music_track` */

DROP TABLE IF EXISTS `tbl_music_track`;

CREATE TABLE `tbl_music_track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `datecr` varchar(250) DEFAULT NULL,
  `total_plays` int(11) DEFAULT '0',
  `total_downloads` int(11) NOT NULL DEFAULT '0',
  `url` varchar(100) NOT NULL,
  `ios_url` varchar(200) NOT NULL,
  `windows_url` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `commentCount` int(11) DEFAULT '0',
  `likeCount` int(11) DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0',
  `filename` varchar(250) DEFAULT NULL,
  `isDownloadable` enum('0','1') NOT NULL DEFAULT '0',
  `downCount` int(11) DEFAULT '0',
  `duration` varchar(15) DEFAULT '0',
  `listenCount` int(11) NOT NULL DEFAULT '0',
  `urlprefix` varchar(250) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/tunesassets/album/',
  PRIMARY KEY (`id`),
  KEY `total_views` (`total_plays`),
  KEY `total_downloads` (`total_downloads`)
) ENGINE=MyISAM AUTO_INCREMENT=746 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_music_tunes_likes` */

DROP TABLE IF EXISTS `tbl_music_tunes_likes`;

CREATE TABLE `tbl_music_tunes_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `track_id` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `like_time` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `live` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54436 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_platform_subscription` */

DROP TABLE IF EXISTS `tbl_platform_subscription`;

CREATE TABLE `tbl_platform_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ios` int(11) NOT NULL,
  `windows` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=343 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_ppv_purchases` */

DROP TABLE IF EXISTS `tbl_ppv_purchases`;

CREATE TABLE `tbl_ppv_purchases` (
  `purchaseID` varchar(30) NOT NULL,
  `ppvID` varchar(40) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `purchaseTime` varchar(30) NOT NULL,
  `txnRef` varchar(60) NOT NULL,
  `ipAddress` varchar(30) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `meta` text,
  `platform` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`purchaseID`),
  UNIQUE KEY `ppvID` (`ppvID`,`userID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_ppv_users` */

DROP TABLE IF EXISTS `tbl_ppv_users`;

CREATE TABLE `tbl_ppv_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userID` varchar(10) DEFAULT NULL,
  `ppvID` varchar(30) DEFAULT NULL,
  `numOfPurchases` int(5) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ppvID` (`ppvID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_ppvadmin_bankdetails` */

DROP TABLE IF EXISTS `tbl_ppvadmin_bankdetails`;

CREATE TABLE `tbl_ppvadmin_bankdetails` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `acct_name` varchar(50) NOT NULL,
  `acct_num` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_added` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_ppvadmin_events` */

DROP TABLE IF EXISTS `tbl_ppvadmin_events`;

CREATE TABLE `tbl_ppvadmin_events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(150) NOT NULL,
  `event_description` text NOT NULL,
  `event_url` text NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `event_thumb` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `event_air_date` varchar(50) NOT NULL,
  `event_date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_ppvadmin_mappings` */

DROP TABLE IF EXISTS `tbl_ppvadmin_mappings`;

CREATE TABLE `tbl_ppvadmin_mappings` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `ppvID` varchar(40) NOT NULL,
  `numOfPurchase` varchar(10) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_ppvadmin_pivotusers` */

DROP TABLE IF EXISTS `tbl_ppvadmin_pivotusers`;

CREATE TABLE `tbl_ppvadmin_pivotusers` (
  `id` int(11) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/profile/avatar.png',
  `username` varchar(50) DEFAULT NULL,
  `bio` text,
  `ppv_admin` int(1) NOT NULL DEFAULT '0',
  `token` varchar(100) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_purchases_owners` */

DROP TABLE IF EXISTS `tbl_purchases_owners`;

CREATE TABLE `tbl_purchases_owners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userID` varchar(10) DEFAULT NULL,
  `ppvID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ppvID` (`ppvID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_pushstate` */

DROP TABLE IF EXISTS `tbl_pushstate`;

CREATE TABLE `tbl_pushstate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channelID` int(11) DEFAULT NULL,
  `pushtime` varchar(100) DEFAULT NULL,
  `expiredtime` varchar(100) DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_recommended` */

DROP TABLE IF EXISTS `tbl_recommended`;

CREATE TABLE `tbl_recommended` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recommended` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_recommended_videos` */

DROP TABLE IF EXISTS `tbl_recommended_videos`;

CREATE TABLE `tbl_recommended_videos` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `videoID` varchar(20) NOT NULL,
  `position` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_report` */

DROP TABLE IF EXISTS `tbl_report`;

CREATE TABLE `tbl_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `videoID` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_reservedusernames` */

DROP TABLE IF EXISTS `tbl_reservedusernames`;

CREATE TABLE `tbl_reservedusernames` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_sendemail` */

DROP TABLE IF EXISTS `tbl_sendemail`;

CREATE TABLE `tbl_sendemail` (
  `id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receipient` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `code` varchar(20) NOT NULL DEFAULT 'youflixTeam',
  `when` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_specialeventusers` */

DROP TABLE IF EXISTS `tbl_specialeventusers`;

CREATE TABLE `tbl_specialeventusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `eventID` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_subscription` */

DROP TABLE IF EXISTS `tbl_subscription`;

CREATE TABLE `tbl_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `subscription` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93855 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_tunes_listen` */

DROP TABLE IF EXISTS `tbl_tunes_listen`;

CREATE TABLE `tbl_tunes_listen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `track_id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT 'DEFAULT',
  `listened` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `listentime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=728275 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_upld_data` */

DROP TABLE IF EXISTS `tbl_upld_data`;

CREATE TABLE `tbl_upld_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `uploadpath` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_upload_videos` */

DROP TABLE IF EXISTS `tbl_upload_videos`;

CREATE TABLE `tbl_upload_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `mail_status` varchar(100) DEFAULT 'Mail Not Sent',
  `approval_status` varchar(50) DEFAULT 'Not Processed',
  `when` varchar(250) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1219 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_users_tokens` */

DROP TABLE IF EXISTS `tbl_users_tokens`;

CREATE TABLE `tbl_users_tokens` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `token` varchar(100) DEFAULT NULL,
  `dateCreated` varchar(100) DEFAULT NULL,
  `userID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=128125 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_version` */

DROP TABLE IF EXISTS `tbl_version`;

CREATE TABLE `tbl_version` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `versionCode` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67137 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_vidcomment` */

DROP TABLE IF EXISTS `tbl_vidcomment`;

CREATE TABLE `tbl_vidcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `vid_id` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `com_time` int(11) NOT NULL,
  `isLive` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `totalreplies` int(11) NOT NULL DEFAULT '0',
  `tunes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `vid_id` (`vid_id`,`username`,`comment`(100))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_like` */

DROP TABLE IF EXISTS `tbl_video_like`;

CREATE TABLE `tbl_video_like` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `userID` int(15) NOT NULL,
  `videoID` varchar(25) NOT NULL,
  `timeLiked` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`,`videoID`),
  KEY `videoID` (`videoID`)
) ENGINE=InnoDB AUTO_INCREMENT=62235 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_like_copy` */

DROP TABLE IF EXISTS `tbl_video_like_copy`;

CREATE TABLE `tbl_video_like_copy` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `userID` varchar(15) NOT NULL,
  `videoID` varchar(25) NOT NULL,
  `timeLiked` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`,`videoID`),
  KEY `videoID` (`videoID`)
) ENGINE=InnoDB AUTO_INCREMENT=26154 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_likes` */

DROP TABLE IF EXISTS `tbl_video_likes`;

CREATE TABLE `tbl_video_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `likes` int(25) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL,
  `datecr` varchar(250) NOT NULL,
  `migrated` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `video_id` (`video_id`,`email`),
  KEY `video_id_2` (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26162 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_sample` */

DROP TABLE IF EXISTS `tbl_video_sample`;

CREATE TABLE `tbl_video_sample` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `stamp` int(11) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `thumb_small` varchar(255) NOT NULL,
  `thumb_big` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_time` */

DROP TABLE IF EXISTS `tbl_video_time`;

CREATE TABLE `tbl_video_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoID` int(11) NOT NULL,
  `webID` varchar(200) NOT NULL,
  `timeFrom` varchar(200) NOT NULL,
  `timeTo` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_views` */

DROP TABLE IF EXISTS `tbl_video_views`;

CREATE TABLE `tbl_video_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `datecr` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `migrated` int(1) DEFAULT '0',
  `userID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=7151691 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_video_views_v2` */

DROP TABLE IF EXISTS `tbl_video_views_v2`;

CREATE TABLE `tbl_video_views_v2` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `videoID` int(11) NOT NULL,
  `userID` varchar(250) NOT NULL,
  `datecr` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `vid` (`videoID`)
) ENGINE=InnoDB AUTO_INCREMENT=272496 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_watchlater` */

DROP TABLE IF EXISTS `tbl_watchlater`;

CREATE TABLE `tbl_watchlater` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `userID` varchar(15) NOT NULL,
  `videoID` varchar(15) NOT NULL,
  `dateAdded` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`,`videoID`),
  KEY `userID_2` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=11011 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_watchlive` */

DROP TABLE IF EXISTS `tbl_watchlive`;

CREATE TABLE `tbl_watchlive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `streamID` varchar(100) NOT NULL DEFAULT 'ceflixwatchlive',
  `eventName` varchar(255) NOT NULL,
  `eventID` varchar(255) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `stream_url` varchar(255) NOT NULL DEFAULT 'http://154.obj.netromedia.net/IMMPowered/ceflixwatchlive/playlist.m3u8',
  `status` int(11) NOT NULL DEFAULT '0',
  `streamerURL` varchar(200) NOT NULL DEFAULT 'rtmp://154.obj.netromedia.net/IMMPowered',
  `bbURL` varchar(200) NOT NULL DEFAULT 'rtsp://154.obj.netromedia.net/IMMPowered/ceflixwatchlive',
  `token` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_web_banner` */

DROP TABLE IF EXISTS `tbl_web_banner`;

CREATE TABLE `tbl_web_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentID` int(11) NOT NULL,
  `contentName` varchar(100) NOT NULL,
  `bannerType` enum('category','channels','tunes','tunes_album','tunes_artist','tunes_track','tunes_radio_channel','video') NOT NULL,
  `prefix` varchar(250) NOT NULL DEFAULT 'https://d3c5pcohbexzc4.cloudfront.net/',
  `filename` varchar(200) NOT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `isLive` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=579 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_youflixuser` */

DROP TABLE IF EXISTS `tbl_youflixuser`;

CREATE TABLE `tbl_youflixuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `group` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `loggedin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `top_videos` */

DROP TABLE IF EXISTS `top_videos`;

CREATE TABLE `top_videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vid_id` varchar(30) NOT NULL,
  `time` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`vid_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `group` int(11) NOT NULL DEFAULT '0',
  `profile_pic` varchar(255) NOT NULL DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/profile/avatar.png',
  `datecr` varchar(255) NOT NULL DEFAULT '1427241600',
  `userID` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pwdHash` varchar(255) DEFAULT NULL,
  `bio` text,
  `numOfFollowers` int(8) DEFAULT '0',
  `anglesDuration` int(7) NOT NULL DEFAULT '3600',
  `allowPasswordReset` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=105368 DEFAULT CHARSET=utf8;

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `vidcomment` */

DROP TABLE IF EXISTS `vidcomment`;

CREATE TABLE `vidcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `vid_id` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `comment` text COLLATE utf8mb4_bin,
  `com_time` int(11) NOT NULL,
  `isLive` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `totalreplies` int(11) NOT NULL DEFAULT '0',
  `tunes` int(11) NOT NULL DEFAULT '0',
  `userID` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `platform` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `randNumber` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `hashComment` varchar(40) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `randNumber` (`randNumber`),
  UNIQUE KEY `hashComment` (`hashComment`),
  KEY `username` (`username`),
  KEY `vid_id` (`vid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117815 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Table structure for table `video_tbl` */

DROP TABLE IF EXISTS `video_tbl`;

CREATE TABLE `video_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `videos_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `ios_url` varchar(255) NOT NULL,
  `schedule` varchar(10) NOT NULL DEFAULT '',
  `uploadtime` varchar(255) NOT NULL,
  `start` varchar(100) NOT NULL DEFAULT '',
  `end` varchar(100) NOT NULL DEFAULT '',
  `showdate` varchar(255) NOT NULL DEFAULT '',
  `recommended` enum('0','1') NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL,
  `isDownloadable` enum('0','1') NOT NULL DEFAULT '0',
  `rawUrl` varchar(200) DEFAULT NULL,
  `isLive` enum('1','0') NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL,
  `windowsurl` varchar(250) DEFAULT NULL,
  `mediaID` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `downcount` int(11) DEFAULT '0',
  `url_prefix` varchar(250) DEFAULT 'https://d3c5pcohbexzc4.cloudfront.net/videos/thumbs/',
  `type` enum('audio','video') DEFAULT 'video',
  `token` varchar(250) DEFAULT '0',
  `hideFrom` enum('all','web','mobile','none') DEFAULT 'none',
  `likes` varchar(250) DEFAULT '0',
  `email` varchar(250) DEFAULT 'admin',
  `numOfComments` int(5) DEFAULT '0',
  `numOfViews` int(10) DEFAULT '0',
  `isPremium` enum('0','1') DEFAULT '0',
  `premiumToken` varchar(40) DEFAULT NULL,
  `isPublic` enum('0','1') DEFAULT '1',
  `isPPV` enum('0','1') DEFAULT '0',
  `ppvAmount` float DEFAULT NULL,
  `ppvID` varchar(50) DEFAULT NULL,
  `ppvDate` varchar(30) DEFAULT NULL,
  `ppvPromo` varchar(150) DEFAULT NULL,
  `isPPVEnded` enum('0','1') DEFAULT '1',
  `connectUUID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `connectUUID` (`connectUUID`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1849263 DEFAULT CHARSET=latin1;

/*Table structure for table `video_tbl_04Jun` */

DROP TABLE IF EXISTS `video_tbl_04Jun`;

CREATE TABLE `video_tbl_04Jun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `videos_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `ios_url` varchar(255) NOT NULL,
  `schedule` varchar(10) NOT NULL DEFAULT '',
  `uploadtime` varchar(255) NOT NULL,
  `start` varchar(100) NOT NULL DEFAULT '',
  `end` varchar(100) NOT NULL DEFAULT '',
  `showdate` varchar(255) NOT NULL DEFAULT '',
  `recommended` enum('0','1') NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL,
  `isDownloadable` enum('0','1') NOT NULL DEFAULT '0',
  `rawUrl` varchar(200) DEFAULT NULL,
  `isLive` enum('1','0') NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL,
  `windowsurl` varchar(250) DEFAULT NULL,
  `mediaID` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `downcount` int(11) DEFAULT '0',
  `url_prefix` varchar(250) DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/videos/thumbs/',
  `type` enum('audio','video') DEFAULT 'video',
  `token` varchar(250) DEFAULT '0',
  `hideFrom` enum('all','web','mobile','none') DEFAULT 'none',
  `likes` varchar(250) DEFAULT '0',
  `email` varchar(250) DEFAULT 'admin',
  `numOfComments` int(5) DEFAULT '0',
  `numOfViews` int(10) DEFAULT '0',
  `isPremium` enum('0','1') DEFAULT '0',
  `premiumToken` varchar(40) DEFAULT NULL,
  `isPublic` enum('0','1') DEFAULT '1',
  `isPPV` enum('0','1') DEFAULT '0',
  `ppvAmount` float DEFAULT NULL,
  `ppvID` varchar(50) DEFAULT NULL,
  `ppvDate` varchar(30) DEFAULT NULL,
  `ppvPromo` varchar(150) DEFAULT NULL,
  `isPPVEnded` enum('0','1') DEFAULT '1',
  `connectUUID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `connectUUID` (`connectUUID`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1848875 DEFAULT CHARSET=latin1;

/*Table structure for table `video_tbl_copy` */

DROP TABLE IF EXISTS `video_tbl_copy`;

CREATE TABLE `video_tbl_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `videos_title` varchar(100) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `tags` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `ios_url` varchar(255) NOT NULL,
  `schedule` varchar(10) NOT NULL DEFAULT '',
  `uploadtime` varchar(255) NOT NULL,
  `start` varchar(100) NOT NULL DEFAULT '',
  `end` varchar(100) NOT NULL DEFAULT '',
  `showdate` varchar(255) NOT NULL DEFAULT '',
  `recommended` enum('0','1') NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL,
  `isDownloadable` enum('0','1') NOT NULL DEFAULT '0',
  `rawUrl` varchar(200) DEFAULT NULL,
  `isLive` enum('1','0') NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL,
  `windowsurl` varchar(250) DEFAULT NULL,
  `mediaID` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `downcount` int(11) DEFAULT '0',
  `url_prefix` varchar(250) DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/videos/thumbs/',
  `type` enum('audio','video') DEFAULT 'video',
  `token` varchar(250) DEFAULT '0',
  `hideFrom` enum('all','web','mobile','none') DEFAULT 'none',
  `likes` varchar(250) DEFAULT '0',
  `email` varchar(250) DEFAULT 'admin',
  `numOfComments` int(5) DEFAULT '0',
  `numOfViews` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2898 DEFAULT CHARSET=latin1;

/*Table structure for table `video_tbl_copy_29Oct2018` */

DROP TABLE IF EXISTS `video_tbl_copy_29Oct2018`;

CREATE TABLE `video_tbl_copy_29Oct2018` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `videos_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `ios_url` varchar(255) NOT NULL,
  `schedule` varchar(10) NOT NULL DEFAULT '',
  `uploadtime` varchar(255) NOT NULL,
  `start` varchar(100) NOT NULL DEFAULT '',
  `end` varchar(100) NOT NULL DEFAULT '',
  `showdate` varchar(255) NOT NULL DEFAULT '',
  `recommended` enum('0','1') NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL,
  `isDownloadable` enum('0','1') NOT NULL DEFAULT '0',
  `rawUrl` varchar(200) DEFAULT NULL,
  `isLive` enum('1','0') NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL,
  `windowsurl` varchar(250) DEFAULT NULL,
  `mediaID` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `downcount` int(11) DEFAULT '0',
  `url_prefix` varchar(250) DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/videos/thumbs/',
  `type` enum('audio','video') DEFAULT 'video',
  `token` varchar(250) DEFAULT '0',
  `hideFrom` enum('all','web','mobile','none') DEFAULT 'none',
  `likes` varchar(250) DEFAULT '0',
  `email` varchar(250) DEFAULT 'admin',
  `numOfComments` int(5) DEFAULT '0',
  `numOfViews` int(10) DEFAULT '0',
  `isPremium` enum('0','1') DEFAULT '0',
  `premiumToken` varchar(40) DEFAULT NULL,
  `isPublic` enum('0','1') DEFAULT '1',
  `isPPV` enum('0','1') DEFAULT '0',
  `ppvAmount` float DEFAULT NULL,
  `ppvID` varchar(50) DEFAULT NULL,
  `ppvDate` varchar(30) DEFAULT NULL,
  `ppvPromo` varchar(150) DEFAULT NULL,
  `isPPVEnded` enum('0','1') DEFAULT '1',
  `connectUUID` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `connectUUID` (`connectUUID`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49107 DEFAULT CHARSET=latin1;

/*Table structure for table `video_tbl_search` */

DROP TABLE IF EXISTS `video_tbl_search`;

CREATE TABLE `video_tbl_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `videos_title` varchar(100) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `tags` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  `ios_url` varchar(255) NOT NULL,
  `schedule` varchar(10) NOT NULL DEFAULT '',
  `uploadtime` varchar(255) NOT NULL,
  `start` varchar(100) NOT NULL DEFAULT '',
  `end` varchar(100) NOT NULL DEFAULT '',
  `showdate` varchar(255) NOT NULL DEFAULT '',
  `recommended` enum('0','1') NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL,
  `isDownloadable` enum('0','1') NOT NULL DEFAULT '0',
  `rawUrl` varchar(200) DEFAULT NULL,
  `isLive` enum('1','0') NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL,
  `windowsurl` varchar(250) DEFAULT NULL,
  `mediaID` int(11) DEFAULT '0',
  `position` int(11) DEFAULT '0',
  `downcount` int(11) DEFAULT '0',
  `url_prefix` varchar(250) DEFAULT 'http://d3c5pcohbexzc4.cloudfront.net/videos/thumbs/',
  `type` enum('audio','video') DEFAULT 'video',
  `token` varchar(250) DEFAULT '0',
  `hideFrom` enum('all','web','mobile','none') DEFAULT 'none',
  `likes` varchar(250) DEFAULT '0',
  `email` varchar(250) DEFAULT 'admin',
  `numOfComments` int(5) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`),
  FULLTEXT KEY `videos_title` (`videos_title`,`description`)
) ENGINE=MyISAM AUTO_INCREMENT=2847 DEFAULT CHARSET=latin1;

/*Table structure for table `video_views` */

DROP TABLE IF EXISTS `video_views`;

CREATE TABLE `video_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3579 DEFAULT CHARSET=latin1;

/* Trigger structure for table `tbl_comment_replies` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tbl_comment_replies_bi` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `tbl_comment_replies_bi` AFTER INSERT ON `tbl_comment_replies` FOR EACH ROW UPDATE vidcomment 
	SET vidcomment.totalreplies = vidcomment.totalreplies + 1
	WHERE id = new.commentID */$$


DELIMITER ;

/* Trigger structure for table `tbl_comment_replies` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tbl_comment_replies_delete` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `tbl_comment_replies_delete` AFTER DELETE ON `tbl_comment_replies` FOR EACH ROW UPDATE vidcomment 
	SET vidcomment.totalreplies = vidcomment.totalreplies - 1
	WHERE id = old.commentID */$$


DELIMITER ;

/* Trigger structure for table `tbl_mediacenter_views` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `MemberVideosUpdateViews_AfterInsert` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `MemberVideosUpdateViews_AfterInsert` AFTER INSERT ON `tbl_mediacenter_views` FOR EACH ROW BEGIN
    DECLARE totalNum INTEGER;
    
      UPDATE tbl_mediacenter_videos SET views=views+1 WHERE id=NEW.videoID;
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_ppv_purchases` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `PPV_UPDATEPURCHASECOUNT_AfterInsert` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `PPV_UPDATEPURCHASECOUNT_AfterInsert` AFTER INSERT ON `tbl_ppv_purchases` FOR EACH ROW BEGIN
    DECLARE totalNum INTEGER;
    SELECT COUNT(purchaseID) INTO totalNum FROM tbl_ppv_purchases WHERE ppvID=NEW.ppvID;
    UPDATE tbl_ppv_users SET numOfPurchases=totalNum WHERE ppvID=NEW.ppvID;
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_ppv_purchases` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `PPV_UPDATEPURCHASECOUNT_AfterDelete` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `PPV_UPDATEPURCHASECOUNT_AfterDelete` AFTER DELETE ON `tbl_ppv_purchases` FOR EACH ROW BEGIN
    DECLARE totalNum INTEGER;
    SELECT COUNT(purchaseID) INTO totalNum FROM tbl_ppv_purchases WHERE ppvID=OLD.ppvID;
    UPDATE tbl_ppv_users SET numOfPurchases=totalNum WHERE ppvID=OLD.ppvID;
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_video_like` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `LikesCountUpdate_AfterInsert` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `LikesCountUpdate_AfterInsert` AFTER INSERT ON `tbl_video_like` FOR EACH ROW BEGIN
    
    
     UPDATE video_tbl SET likes=likes+1 WHERE id=NEW.videoID;
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_video_views` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `ViewsCountUpdate_AfterInsert` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `ViewsCountUpdate_AfterInsert` AFTER INSERT ON `tbl_video_views` FOR EACH ROW BEGIN
    
    
     UPDATE video_tbl SET numOfViews=numOfViews+1 WHERE id=NEW.vid;
    END */$$


DELIMITER ;

/* Trigger structure for table `vidcomment` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `CommentsCountUpdate_AfterInsert` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `CommentsCountUpdate_AfterInsert` AFTER INSERT ON `vidcomment` FOR EACH ROW BEGIN
    
    
     UPDATE video_tbl SET numOfComments=numOfComments+1 WHERE id=NEW.vid_id;
    END */$$


DELIMITER ;

/*Table structure for table `v_android_tokens_old` */

DROP TABLE IF EXISTS `v_android_tokens_old`;

/*!50001 DROP VIEW IF EXISTS `v_android_tokens_old` */;
/*!50001 DROP TABLE IF EXISTS `v_android_tokens_old` */;

/*!50001 CREATE TABLE  `v_android_tokens_old`(
 `deviceToken` varchar(255) 
)*/;

/*Table structure for table `vw_android_tokens` */

DROP TABLE IF EXISTS `vw_android_tokens`;

/*!50001 DROP VIEW IF EXISTS `vw_android_tokens` */;
/*!50001 DROP TABLE IF EXISTS `vw_android_tokens` */;

/*!50001 CREATE TABLE  `vw_android_tokens`(
 `deviceToken` varchar(255) 
)*/;

/*View structure for view v_android_tokens_old */

/*!50001 DROP TABLE IF EXISTS `v_android_tokens_old` */;
/*!50001 DROP VIEW IF EXISTS `v_android_tokens_old` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_android_tokens_old` AS select distinct `tbl_device`.`deviceToken` AS `deviceToken` from `tbl_device` where (`tbl_device`.`deviceType` = 'android') */;

/*View structure for view vw_android_tokens */

/*!50001 DROP TABLE IF EXISTS `vw_android_tokens` */;
/*!50001 DROP VIEW IF EXISTS `vw_android_tokens` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_android_tokens` AS select `tbl_all_devicetokens`.`deviceToken` AS `deviceToken` from `tbl_all_devicetokens` where (`tbl_all_devicetokens`.`deviceType` = 'android') union select `tbl_device_v2`.`deviceToken` AS `deviceToken` from `tbl_device_v2` where ((`tbl_device_v2`.`deviceType` = 'android') and (`tbl_device_v2`.`isValid` = '1')) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
