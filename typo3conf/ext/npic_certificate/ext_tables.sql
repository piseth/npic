#
# Table structure for table 'tx_npiccertificate_domain_model_certificate'
#
CREATE TABLE tx_npiccertificate_domain_model_certificate (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name_english varchar(255) DEFAULT '' NOT NULL,
	name_khmer varchar(255) DEFAULT '' NOT NULL,
	certificate_id varchar(255) DEFAULT '' NOT NULL,
	student_id varchar(255) DEFAULT '' NOT NULL,
	exam_date int(11) DEFAULT '0' NOT NULL,
	major int(11) DEFAULT '0' NOT NULL,
	certificate_bachelor int(11) unsigned NOT NULL default '0',
	certificate_bachelor_temp int(11) unsigned NOT NULL default '0',
	certificate_associate int(11) unsigned NOT NULL default '0',
	certificate_associate_temp int(11) unsigned NOT NULL default '0',
	certificate_foundation int(11) unsigned NOT NULL default '0',
	transcript int(11) unsigned NOT NULL default '0',
	dob int(11) DEFAULT '0' NOT NULL,
	photo int(11) unsigned NOT NULL default '0',
	pob text NOT NULL,
	certificate_master int(11) unsigned NOT NULL default '0',
	certficate_master_temp int(11) unsigned NOT NULL default '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);
