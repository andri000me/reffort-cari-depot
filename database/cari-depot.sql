CREATE TABLE `cari_depot`.`users`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`email` varchar(255) NULL,
`password` varchar(255) NULL,
`phone_number` varchar(255) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`partners`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name`	varchar(255) NULL,
`email`	varchar(255) NULL,
`password`	varchar(255) NULL,
`phone_number`	varchar(255) NULL,
`icon`	varchar(255) NULL,
`highlight`	varchar(255) NULL,
`description`	varchar(255) NULL,
`langtitude`	DECIMAL(20,8),
`longtitude`	DECIMAL(20,8),
`address`	varchar(255) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`partner_services`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`id_service` int(11) NULL,
`id_partner` int(11) NULL,
`status`  enum('ready in stock','limited stock', 'out of stock') DEFAULT 'ready in stock',
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`services`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`icon` varchar(255) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`partner_contacts`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`id_contact` int(11) NULL,
`id_partner` int(11) NULL,
`contact` varchar(255) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`contacts`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`type` varchar(255) NULL,
`icon` varchar(255) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`partner_gallerys`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`id_partner` int(11) NULL,
`source` varchar(255) NULL,
`type` varchar(255) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`parner_likes`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`id_partner` int(11) NULL,
`id_user` int(11) NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`partner_schedules`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`id_schedule_day`	int(11) NULL,
`open_time`	time NULL,
`close_time`	time NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`schedule_days`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`day` varchar(15) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`partner_license`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`source`	varchar(255) NULL,
`start_date`	datetime(0) NULL,
`end_date`	datetime(0) NULL,
`status`	enum('registered','approved','rejected') DEFAULT 'registered',
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);

CREATE TABLE `cari_depot`.`admins`  (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name`	varchar(255) NULL,
`email`	varchar(255) NULL,
`password`	varchar(255) NULL,
`role`	enum('admin','super admin') NULL,
`created_at` datetime(0) NULL,
`updated_at` datetime(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
PRIMARY KEY (`id`)
);
