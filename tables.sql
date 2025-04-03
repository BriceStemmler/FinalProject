CREATE table useraccount(
	user_id int not null auto_increment,
	first_name varchar (255),
	last_name varchar (255),
	email varchar (255),
	username varchar (255),
	password varchar (255),
    primary key (user_id)
);
CREATE table spaceobjects(
	ID int not null auto_increment,
	objname varchar (255),
	objtype varchar (255),
	username varchar (255),
	info varchar (255),
    primary key (ID)
);
