#
# SQL definitions
#
CREATE TABLE pages (
    `heading_content` text NOT NULL,
    `show_canonical` SMALLINT(6) unsigned NOT NULL DEFAULT '1',
    `robots_all` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
    `no_archive` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
    `ext_script` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
    `show_banner` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
    `show_bottomcontent` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
    `show_mediapanel` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
    `show_infobutton` SMALLINT(6) unsigned NOT NULL DEFAULT '0',
);

CREATE TABLE tx_mrsitepackage_domain_model_faqitem (
	`element_headline` varchar(255) NOT NULL DEFAULT '',
	`question_headline` varchar(255) NOT NULL DEFAULT '',
	`question` text NOT NULL DEFAULT '',
	`answer_headline` varchar(255) NOT NULL DEFAULT '',
	`answer` text NOT NULL DEFAULT '',
	`categories` int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tt_content (
	`header` varchar(255) NOT NULL DEFAULT '',
	`subheader` varchar(255) NOT NULL DEFAULT '',
	`bodytext` text,
	`image` int(11) unsigned NOT NULL DEFAULT '0',
	`date` int(11) NOT NULL DEFAULT 0,
	`header_link` varchar(255) NOT NULL DEFAULT '',
	`layout` int(11) unsigned DEFAULT '0' NOT NULL,
    `select_key` VARCHAR(20) NOT NULL DEFAULT '',
    `no_scale` SMALLINT(5) unsigned NOT NULL DEFAULT '0',
    `json_field` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '(DC2Type:json)'
);
