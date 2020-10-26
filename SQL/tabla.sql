drop table if exists Users;
create table Users(
	IdUser serial PRIMARY KEY,
	username varchar(50) not null,
	email varchar(255) unique not null
);


