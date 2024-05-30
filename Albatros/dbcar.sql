# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     dbcar
# Server version:               5.0.51b-community-nt
# Server OS:                    Win32
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2019-10-12 16:33:11
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'dbcar'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "dbcar" /*!40100 DEFAULT CHARACTER SET latin1 */;

USE "dbcar";


#
# Table structure for table 'tbl_admin'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_admin" (
  "admin_username" varchar(50) default NULL,
  "admin_password" varchar(50) default NULL
);



#
# Dumping data for table 'tbl_admin'
#

LOCK TABLES "tbl_admin" WRITE;
/*!40000 ALTER TABLE "tbl_admin" DISABLE KEYS;*/
REPLACE INTO "tbl_admin" ("admin_username", "admin_password") VALUES
	('admin','admin');
REPLACE INTO "tbl_admin" ("admin_username", "admin_password") VALUES
	('admin','admin');
REPLACE INTO "tbl_admin" ("admin_username", "admin_password") VALUES
	('admin','admin');
/*!40000 ALTER TABLE "tbl_admin" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_carphotos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_carphotos" (
  "photo_id" int(11) NOT NULL auto_increment,
  "submodel_id" int(11) NOT NULL,
  "photo_name" varchar(1000) NOT NULL,
  PRIMARY KEY  ("photo_id")
) AUTO_INCREMENT=7;



#
# Dumping data for table 'tbl_carphotos'
#

LOCK TABLES "tbl_carphotos" WRITE;
/*!40000 ALTER TABLE "tbl_carphotos" DISABLE KEYS;*/
REPLACE INTO "tbl_carphotos" ("photo_id", "submodel_id", "photo_name") VALUES
	(1,1,'kona1.jpg');
REPLACE INTO "tbl_carphotos" ("photo_id", "submodel_id", "photo_name") VALUES
	(2,2,'creta1.jpg');
REPLACE INTO "tbl_carphotos" ("photo_id", "submodel_id", "photo_name") VALUES
	(3,3,'venue1.jpg');
REPLACE INTO "tbl_carphotos" ("photo_id", "submodel_id", "photo_name") VALUES
	(4,4,'elanta1.jpg');
REPLACE INTO "tbl_carphotos" ("photo_id", "submodel_id", "photo_name") VALUES
	(5,5,'elitei201.jpg');
REPLACE INTO "tbl_carphotos" ("photo_id", "submodel_id", "photo_name") VALUES
	(6,6,'tucson1.jpg');
/*!40000 ALTER TABLE "tbl_carphotos" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_cart'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_cart" (
  "cart_id" int(11) NOT NULL auto_increment,
  "user_id" int(11) NOT NULL,
  "showroom_id" int(11) NOT NULL,
  "submodel_id" int(11) NOT NULL,
  "no_of_vehicle" varchar(50) NOT NULL,
  "grand_total" varchar(50) NOT NULL,
  "order_date" date NOT NULL,
  "delivery_date" date default NULL,
  "payment_status" int(11) NOT NULL default '0',
  "showroom_status" int(11) NOT NULL default '0',
  PRIMARY KEY  ("cart_id")
) AUTO_INCREMENT=4;



#
# Dumping data for table 'tbl_cart'
#

LOCK TABLES "tbl_cart" WRITE;
/*!40000 ALTER TABLE "tbl_cart" DISABLE KEYS;*/
REPLACE INTO "tbl_cart" ("cart_id", "user_id", "showroom_id", "submodel_id", "no_of_vehicle", "grand_total", "order_date", "delivery_date", "payment_status", "showroom_status") VALUES
	(1,1,1,1,'1','2300000','2019-10-02','2019-10-03',1,1);
REPLACE INTO "tbl_cart" ("cart_id", "user_id", "showroom_id", "submodel_id", "no_of_vehicle", "grand_total", "order_date", "delivery_date", "payment_status", "showroom_status") VALUES
	(2,1,1,1,'2','4600000','2019-10-02','2019-10-24',0,1);
REPLACE INTO "tbl_cart" ("cart_id", "user_id", "showroom_id", "submodel_id", "no_of_vehicle", "grand_total", "order_date", "delivery_date", "payment_status", "showroom_status") VALUES
	(3,1,1,1,'4','92','2019-10-12',NULL,0,0);
/*!40000 ALTER TABLE "tbl_cart" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_district'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_district" (
  "district_id" int(11) NOT NULL auto_increment,
  "district_name" varchar(50) NOT NULL,
  PRIMARY KEY  ("district_id")
) AUTO_INCREMENT=21;



#
# Dumping data for table 'tbl_district'
#

LOCK TABLES "tbl_district" WRITE;
/*!40000 ALTER TABLE "tbl_district" DISABLE KEYS;*/
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(6,'THIRUVANATHAPURAM');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(8,'KOLLAM');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(9,'PATHANAMTHITTA');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(10,'IDUKKI');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(11,'ALAPPUZHA');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(12,'ERNAKULAM');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(13,'KOTTAYAM');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(14,'THRISSUR');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(15,'MALAPPURAM');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(16,'KOZHIKKODE');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(17,'WAYANAD');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(18,'PALAKKAD');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(19,'KANNUR');
REPLACE INTO "tbl_district" ("district_id", "district_name") VALUES
	(20,'KASARKODE');
/*!40000 ALTER TABLE "tbl_district" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_documents'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_documents" (
  "document_id" int(11) NOT NULL auto_increment,
  "cart_id" int(11) NOT NULL,
  "photo" varchar(1000) NOT NULL,
  "proof_of_nationality" varchar(1000) NOT NULL,
  "id_proof" varchar(1000) NOT NULL,
  "address_proof" varchar(1000) NOT NULL,
  "income_certificate" varchar(1000) NOT NULL,
  "bank_passbook" varchar(1000) NOT NULL,
  "user_id" int(11) NOT NULL,
  "document_status" int(11) NOT NULL default '0',
  PRIMARY KEY  ("document_id")
) AUTO_INCREMENT=4;



#
# Dumping data for table 'tbl_documents'
#

LOCK TABLES "tbl_documents" WRITE;
/*!40000 ALTER TABLE "tbl_documents" DISABLE KEYS;*/
REPLACE INTO "tbl_documents" ("document_id", "cart_id", "photo", "proof_of_nationality", "id_proof", "address_proof", "income_certificate", "bank_passbook", "user_id", "document_status") VALUES
	(1,1,'IMG_9735.JPG','IMG_9692.JPG','IMG_9786.JPG','IMG_9786.JPG','IMG_9692.JPG','IMG_9767.JPG',1,1);
REPLACE INTO "tbl_documents" ("document_id", "cart_id", "photo", "proof_of_nationality", "id_proof", "address_proof", "income_certificate", "bank_passbook", "user_id", "document_status") VALUES
	(2,1,'_DSC0158.JPG','IMG_9690.JPG','IMG_9766.JPG','IMG_9773.JPG','IMG_9786.JPG','IMG_9692.JPG',1,1);
REPLACE INTO "tbl_documents" ("document_id", "cart_id", "photo", "proof_of_nationality", "id_proof", "address_proof", "income_certificate", "bank_passbook", "user_id", "document_status") VALUES
	(3,1,'IMG_9689.JPG','IMG_9741.JPG','IMG_9773.JPG','IMG_9767.JPG','IMG_9770.JPG','IMG_9772.JPG',1,1);
/*!40000 ALTER TABLE "tbl_documents" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_experience'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_experience" (
  "eid" int(10) unsigned NOT NULL auto_increment,
  "user_id" int(10) unsigned NOT NULL,
  "experience" varchar(2500) NOT NULL,
  PRIMARY KEY  ("eid")
) AUTO_INCREMENT=4;



#
# Dumping data for table 'tbl_experience'
#

LOCK TABLES "tbl_experience" WRITE;
/*!40000 ALTER TABLE "tbl_experience" DISABLE KEYS;*/
REPLACE INTO "tbl_experience" ("eid", "user_id", "experience") VALUES
	('1','1','lkjkjk');
REPLACE INTO "tbl_experience" ("eid", "user_id", "experience") VALUES
	('2','1','good');
REPLACE INTO "tbl_experience" ("eid", "user_id", "experience") VALUES
	('3','1','nice');
/*!40000 ALTER TABLE "tbl_experience" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_models'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_models" (
  "model_id" int(11) NOT NULL auto_increment,
  "model_name" varchar(50) NOT NULL,
  PRIMARY KEY  ("model_id")
) AUTO_INCREMENT=8;



#
# Dumping data for table 'tbl_models'
#

LOCK TABLES "tbl_models" WRITE;
/*!40000 ALTER TABLE "tbl_models" DISABLE KEYS;*/
REPLACE INTO "tbl_models" ("model_id", "model_name") VALUES
	(1,'KONA ELECTRIC');
REPLACE INTO "tbl_models" ("model_id", "model_name") VALUES
	(2,'CRETA');
REPLACE INTO "tbl_models" ("model_id", "model_name") VALUES
	(3,'VENUE');
REPLACE INTO "tbl_models" ("model_id", "model_name") VALUES
	(4,'ELANTA');
REPLACE INTO "tbl_models" ("model_id", "model_name") VALUES
	(6,'i20');
REPLACE INTO "tbl_models" ("model_id", "model_name") VALUES
	(7,'TUCSON');
/*!40000 ALTER TABLE "tbl_models" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_place'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_place" (
  "district_id" int(11) NOT NULL,
  "place_id" int(11) NOT NULL auto_increment,
  "place_name" varchar(50) NOT NULL,
  PRIMARY KEY  ("place_id")
) AUTO_INCREMENT=31;



#
# Dumping data for table 'tbl_place'
#

LOCK TABLES "tbl_place" WRITE;
/*!40000 ALTER TABLE "tbl_place" DISABLE KEYS;*/
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(0,5,'VIZHINJAM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(0,6,'VIZHINJAM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(6,8,'VIZHINJAM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(10,9,'MUNNAR');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(10,10,'ADIMALI');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(0,11,'KATTAPPANA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(0,12,'MUNNAR');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(0,13,'THODUPUZHA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(10,14,'KATTAPPANA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(10,15,'THODUPUZHA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(12,16,'MUVATTUPUZHA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(14,17,'CHALAKKUDY');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(6,18,'KAZHAKKUTTAM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(6,19,'TAMBANOOR');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(8,20,'kIZHAKKEKKOTTA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(8,21,'KOLLAM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(9,22,'KAYAMKULAM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(9,23,'PATHANAMTHITTA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(11,24,'KUTTANAD');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(11,25,'ALAPPUZHA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(12,26,'KALADY');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(12,27,'PIRAVOM');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(13,28,'CHENGANNOOR');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(13,29,'PALA');
REPLACE INTO "tbl_place" ("district_id", "place_id", "place_name") VALUES
	(14,30,'THRISSUR');
/*!40000 ALTER TABLE "tbl_place" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_service_booking'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_service_booking" (
  "service_id" int(11) NOT NULL auto_increment,
  "user_id" int(11) NOT NULL,
  "submodel_id" int(11) NOT NULL,
  "showroom_id" int(11) NOT NULL,
  "vehicle_no" varchar(50) NOT NULL,
  "km_status" varchar(50) NOT NULL,
  "service_date" date NOT NULL,
  "service_status" varchar(50) NOT NULL default 'Booked',
  PRIMARY KEY  ("service_id")
);



#
# Dumping data for table 'tbl_service_booking'
#

# No data found.



#
# Table structure for table 'tbl_service_remider'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_service_remider" (
  "reminder_id" int(11) NOT NULL auto_increment,
  "reminder_date" int(11) NOT NULL,
  PRIMARY KEY  ("reminder_id")
);



#
# Dumping data for table 'tbl_service_remider'
#

# No data found.



#
# Table structure for table 'tbl_showroom_reg'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_showroom_reg" (
  "showroom_id" int(11) NOT NULL auto_increment,
  "showroom_name" varchar(50) NOT NULL,
  "address" varchar(500) NOT NULL,
  "place_id" int(11) NOT NULL,
  "contact" varchar(50) NOT NULL,
  "email" varchar(100) NOT NULL,
  "service_availability" varchar(50) NOT NULL,
  "user_name" varchar(100) NOT NULL,
  "password" varchar(100) NOT NULL,
  "showroom_proof" varchar(100) NOT NULL,
  "proof_no" varchar(100) NOT NULL,
  "status" int(11) NOT NULL default '0',
  PRIMARY KEY  ("showroom_id")
) AUTO_INCREMENT=3;



#
# Dumping data for table 'tbl_showroom_reg'
#

LOCK TABLES "tbl_showroom_reg" WRITE;
/*!40000 ALTER TABLE "tbl_showroom_reg" DISABLE KEYS;*/
REPLACE INTO "tbl_showroom_reg" ("showroom_id", "showroom_name", "address", "place_id", "contact", "email", "service_availability", "user_name", "password", "showroom_proof", "proof_no", "status") VALUES
	(1,'popular','aaaa',9,'1234565432','c@gmail.com','Yes','popular','popular','IMG_9692.JPG','33',0);
REPLACE INTO "tbl_showroom_reg" ("showroom_id", "showroom_name", "address", "place_id", "contact", "email", "service_availability", "user_name", "password", "showroom_proof", "proof_no", "status") VALUES
	(2,'sai','aaaaaaaa',8,'1234321234','s@gmail.com','Yes','sai','sai','_DSC0158.JPG','12345',0);
/*!40000 ALTER TABLE "tbl_showroom_reg" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_specs'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_specs" (
  "spec_id" int(11) NOT NULL auto_increment,
  "submodel_id" int(11) NOT NULL,
  "body_type" varchar(50) NOT NULL,
  "price" varchar(50) NOT NULL,
  "color" varchar(50) NOT NULL,
  "insurance" varchar(50) NOT NULL,
  "avg_service_cost" varchar(50) NOT NULL,
  "engine_type" varchar(50) NOT NULL,
  "displacement" varchar(50) NOT NULL,
  "max_power" varchar(50) NOT NULL,
  "max_torque" varchar(50) NOT NULL,
  "fuel_supply_system" varchar(50) NOT NULL,
  "transmission_type" varchar(50) NOT NULL,
  "gear_box" varchar(50) NOT NULL,
  "drive_type" varchar(50) NOT NULL,
  "length" varchar(50) NOT NULL,
  "width" varchar(50) NOT NULL,
  "height" varchar(50) NOT NULL,
  "boot_space" varchar(50) NOT NULL,
  "seat_capacity" varchar(50) NOT NULL,
  "ground_clearence" varchar(50) NOT NULL,
  "wheel_base" varchar(50) NOT NULL,
  "no_of_doors" varchar(50) NOT NULL,
  "fuel_type" varchar(50) NOT NULL,
  "mileage" varchar(50) NOT NULL,
  "fuel_tank_capacity" varchar(50) NOT NULL,
  "top_speed" varchar(50) NOT NULL,
  "front_suspension" varchar(50) NOT NULL,
  "rear_suspension" varchar(50) NOT NULL,
  "shock_absorber_type" varchar(50) NOT NULL,
  "steering_type" varchar(50) NOT NULL,
  "front_brake_type" varchar(50) NOT NULL,
  "rear_brake_type" varchar(50) NOT NULL,
  "acceleration" varchar(50) NOT NULL,
  PRIMARY KEY  ("spec_id")
) AUTO_INCREMENT=3;



#
# Dumping data for table 'tbl_specs'
#

LOCK TABLES "tbl_specs" WRITE;
/*!40000 ALTER TABLE "tbl_specs" DISABLE KEYS;*/
REPLACE INTO "tbl_specs" ("spec_id", "submodel_id", "body_type", "price", "color", "insurance", "avg_service_cost", "engine_type", "displacement", "max_power", "max_torque", "fuel_supply_system", "transmission_type", "gear_box", "drive_type", "length", "width", "height", "boot_space", "seat_capacity", "ground_clearence", "wheel_base", "no_of_doors", "fuel_type", "mileage", "fuel_tank_capacity", "top_speed", "front_suspension", "rear_suspension", "shock_absorber_type", "steering_type", "front_brake_type", "rear_brake_type", "acceleration") VALUES
	(1,1,'SUV','2300000','White,Black,Blue,Red','aaaa','5000','Permanent Magnetic Synchron','000','134','394','Electric','Automatic','Yes','Manual','','1800','1570','4500 L','5','150 mm','2600','5','Electric','452 km Full Charge','txttankcapacity','250','Mcpherson Strut','Multi Link','ab','ab','Disk','Disk','');
REPLACE INTO "tbl_specs" ("spec_id", "submodel_id", "body_type", "price", "color", "insurance", "avg_service_cost", "engine_type", "displacement", "max_power", "max_torque", "fuel_supply_system", "transmission_type", "gear_box", "drive_type", "length", "width", "height", "boot_space", "seat_capacity", "ground_clearence", "wheel_base", "no_of_doors", "fuel_type", "mileage", "fuel_tank_capacity", "top_speed", "front_suspension", "rear_suspension", "shock_absorber_type", "steering_type", "front_brake_type", "rear_brake_type", "acceleration") VALUES
	(2,1,'SUV','23.9 Lakh','White,Black,Blue,Red','aaaa','5000','Permanent Magnetic Synchron','000','134','394','Electric','Automatic','Yes','Manual','','1800','1570','4500 L','5','150 mm','2600','5','Electric','452 km Full Charge','txttankcapacity','250','Mcpherson Strut','Multi Link','ab','ab','Disk','Disk','');
/*!40000 ALTER TABLE "tbl_specs" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_submodel'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_submodel" (
  "submodel_id" int(11) NOT NULL auto_increment,
  "model_id" int(11) NOT NULL,
  "submodel_name" varchar(50) NOT NULL,
  PRIMARY KEY  ("submodel_id")
) AUTO_INCREMENT=7;



#
# Dumping data for table 'tbl_submodel'
#

LOCK TABLES "tbl_submodel" WRITE;
/*!40000 ALTER TABLE "tbl_submodel" DISABLE KEYS;*/
REPLACE INTO "tbl_submodel" ("submodel_id", "model_id", "submodel_name") VALUES
	(1,1,'Premium Dual Tone');
REPLACE INTO "tbl_submodel" ("submodel_id", "model_id", "submodel_name") VALUES
	(2,2,'Sports');
REPLACE INTO "tbl_submodel" ("submodel_id", "model_id", "submodel_name") VALUES
	(3,3,'SX Plus Turbo');
REPLACE INTO "tbl_submodel" ("submodel_id", "model_id", "submodel_name") VALUES
	(4,4,'SX option AT');
REPLACE INTO "tbl_submodel" ("submodel_id", "model_id", "submodel_name") VALUES
	(5,6,'Elite Asta');
REPLACE INTO "tbl_submodel" ("submodel_id", "model_id", "submodel_name") VALUES
	(6,7,'2.0 VGT 4WD GLS');
/*!40000 ALTER TABLE "tbl_submodel" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'tbl_user_reg'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "tbl_user_reg" (
  "user_id" int(11) NOT NULL auto_increment,
  "fname" varchar(50) NOT NULL,
  "lname" varchar(50) NOT NULL,
  "address" varchar(500) NOT NULL,
  "place_id" int(11) NOT NULL,
  "id_proof" varchar(500) NOT NULL,
  "proof_no" varchar(100) NOT NULL,
  "contact" varchar(50) NOT NULL,
  "email" varchar(50) NOT NULL,
  "dob" date NOT NULL,
  "uname" varchar(50) NOT NULL,
  "password" varchar(50) NOT NULL,
  "status" int(11) NOT NULL default '0',
  PRIMARY KEY  ("user_id")
) AUTO_INCREMENT=3;



#
# Dumping data for table 'tbl_user_reg'
#

LOCK TABLES "tbl_user_reg" WRITE;
/*!40000 ALTER TABLE "tbl_user_reg" DISABLE KEYS;*/
REPLACE INTO "tbl_user_reg" ("user_id", "fname", "lname", "address", "place_id", "id_proof", "proof_no", "contact", "email", "dob", "uname", "password", "status") VALUES
	(1,'negil','babu','qqqqq',20,'IMG_9689.JPG','1112222','1234567890','a@gmail.com','2019-10-02','negil','1234',1);
REPLACE INTO "tbl_user_reg" ("user_id", "fname", "lname", "address", "place_id", "id_proof", "proof_no", "contact", "email", "dob", "uname", "password", "status") VALUES
	(2,'sreehari','sajeevan','aaaa',27,'IMG_9769.JPG','22','2211221122','b@gmail.com','2019-09-30','sree','111',0);
/*!40000 ALTER TABLE "tbl_user_reg" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
