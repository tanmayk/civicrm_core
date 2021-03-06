CREATE TABLE `civicrm_iats_journal` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'CiviCRM Journal Id',
  `iats_id` int unsigned DEFAULT NULL COMMENT 'iATS Journal Id',
  `tnid` varchar(255) NOT NULL COMMENT 'Transaction ID',
  `tntyp` varchar(255) NOT NULL COMMENT 'Transaction type: Credit card or ACHEFT',
  `agt` varchar(255) NOT NULL COMMENT 'Agent',
  `cstc` varchar(255) NOT NULL COMMENT 'Customer code',
  `inv` varchar(255) COMMENT 'Invoice Number',
  `dtm` datetime NOT NULL COMMENT 'DateTime',
  `amt` decimal(20,2) COMMENT 'Amount',
  `rst` varchar(255) COMMENT 'Result',
  `cm` varchar(255) COMMENT 'Comment',
  `currency` varchar(3) COMMENT 'Currency',
  `status_id` int(10) unsigned DEFAULT '0' COMMENT 'Status of the payment',
  `financial_trxn_id` int(10) unsigned DEFAULT '0' COMMENT 'Foreign key into CiviCRM financial trxn table id',
  `cid` int(10) unsigned DEFAULT '0' COMMENT 'CiviCRM contact id',
  `contribution_id` int(10) unsigned DEFAULT '0' COMMENT 'CiviCRM contribution table id',
  `recur_id` int(10) unsigned DEFAULT '0' COMMENT 'CiviCRM recurring_contribution table id',
  `verify_datetime` datetime COMMENT 'Date time of verification',
  PRIMARY KEY ( `id` ),
  UNIQUE KEY (`tnid`),
  UNIQUE KEY (`iats_id`),
  KEY (`tnid`),
  KEY (`tntyp`),
  KEY (`inv`),
  KEY (`rst`),
  KEY (`dtm`),
  KEY (`financial_trxn_id`),
  KEY (`contribution_id`),
  KEY (`verify_datetime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table to iATS journal transactions imported via the iATSPayments ReportLink.' 
