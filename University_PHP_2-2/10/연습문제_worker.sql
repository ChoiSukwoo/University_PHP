create table worker( 
	num int not null auto_increment, 
	id char(20) not null, 
	name char(10) not null, 
	gender char(1) not null,
	age int,
	department char(20) not null,
	phone char(20) not null, 
	address char(100), 
	primary key(num) );
