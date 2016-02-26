<?php
$installer = $this;
$installer->startSetup();
$installer->run("

INSERT INTO `{$installer->getTable('directory_country_region')}` VALUES
(NULL , 'IN', 'AP','Andhra Pradesh'),
(NULL , 'IN', 'AR','Arunachal Pradesh'),
(NULL , 'IN', 'AS','Assam'),
(NULL , 'IN', 'BR','Bihar'),
(NULL , 'IN', 'CT','Chhattisgarh'),
(NULL , 'IN', 'GA','Goa'),
(NULL , 'IN', 'GJ','Gujarat'),
(NULL , 'IN', 'HR','Haryana'),
(NULL , 'IN', 'HP','Himachal Pradesh'),
(NULL , 'IN', 'JK','Jammu and Kashmir'),
(NULL , 'IN', 'JH','Jharkhand'),
(NULL , 'IN', 'KA','Karnataka'),
(NULL , 'IN', 'KL','Kerala'),
(NULL , 'IN', 'MP','Madhya Pradesh'),
(NULL , 'IN', 'MH','Maharashtra'),
(NULL , 'IN', 'MN','Manipur'),
(NULL , 'IN', 'ML','Meghalaya'),
(NULL , 'IN', 'MZ','Mizoram'),
(NULL , 'IN', 'NL','Nagaland'),
(NULL , 'IN', 'OR','Orissa'),
(NULL , 'IN', 'PB','Punjab'),
(NULL , 'IN', 'RJ','Rajasthan'),
(NULL , 'IN', 'SK','Sikkim'),
(NULL , 'IN', 'TN','Tamil Nadu'),
(NULL , 'IN', 'TG','Telangana'),
(NULL , 'IN', 'TR','Tripura'),
(NULL , 'IN', 'UT','Uttarakhand'),
(NULL , 'IN', 'UP','Uttar Pradesh'),
(NULL , 'IN', 'WB','West Bengal'),

(NULL , 'IN', 'AN','Andaman and Nicobar Islands'),
(NULL , 'IN', 'CH','Chandigarh'),
(NULL , 'IN', 'DN','Dadra and Nagar Haveli'),
(NULL , 'IN', 'DD','Daman and Diu'),
(NULL , 'IN', 'DL','Delhi'),
(NULL , 'IN', 'LD','Lakshadweep'),
(NULL , 'IN', 'PY','Puducherry');

INSERT INTO `{$installer->getTable('directory_country_region_name')}`  (`locale` ,`region_id` ,`name` ) 
SELECT 'en_US', tmp.region_id, tmp.default_name FROM `{$installer->getTable('directory_country_region')}` 
AS tmp WHERE tmp.country_id='IN';
");

$installer->endSetup();

