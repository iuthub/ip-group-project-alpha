CREATE TABLE book(
  user_id int (11) AUTO_INCREMENT PRIMARY KEY not null,
  name  text  not null,
  phone varchar(256) not null,
  date date not null,
  time time not null,
  person varchar(256) not null,
);

INSERT INTO book (name,phone,date,time,person)
 VALUES('Daniel','Nielsen','user@gmail.com','Admin', 'test123');
