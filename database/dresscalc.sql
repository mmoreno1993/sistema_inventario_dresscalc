create database dresscalc;
use dresscalc;
create table users
(
	id bigint auto_increment primary key,
	full_name varchar(250),
	email varchar(250),
	`password` varchar(30),
	created_at datetime(3),
	created_by varchar(200),
	enabled tinyint(1)
);

create table types_clothes
(
	id bigint auto_increment primary key,
	description varchar(250),
	created_at datetime(3),
	created_by varchar(200),
	enabled tinyint(1)
);
create table clothes
(
	id bigint auto_increment primary key,
	type_clothe_id bigint references types_clothes(id),
	description varchar(250),
	created_at datetime(3),
	created_by varchar(200),
	enabled tinyint(1)
);

create table stock
(
	id bigint auto_increment primary key,
	clothes_id bigint references clothes(id),
	user_id bigint references users(id),
	entry tinyint(1),
	`value` float,
	created_at datetime(3),
	created_by varchar(200),
	enabled tinyint(1)
);

alter table clothes add cliente varchar(250);
alter table clothes add proveedor varchar(250);

insert into types_clothes(description, created_at, enabled) values('Abrigos', now(), 1);
insert into types_clothes(description, created_at, enabled) values('Chompas', now(), 1);
insert into types_clothes(description, created_at, enabled) values('Polos', now(), 1);
