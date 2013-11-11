<?php
 /*
  * MariaDB dislikes '
  */
$installer = $this;
 
$installer->startSetup();
 
$installer->run("

CREATE TABLE IF NOT EXISTS basiccrud (
   basiccrud_id  int(11) NOT NULL auto_increment,
   name  varchar(50) DEFAULT NULL,
   email  varchar(30) DEFAULT NULL,
   message  varchar(254) DEFAULT NULL,
   created_time  datetime DEFAULT NULL,
   update_time  datetime DEFAULT NULL,
  PRIMARY KEY (basiccrud_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
    ");
 
$installer->endSetup();