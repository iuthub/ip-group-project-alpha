CREATE TABLE contact(
  user_id int (11) AUTO_INCREMENT PRIMARY KEY not null,
  name  text  not null,
  phone varchar(256) not null,
  email text not null,
  message text not null,
);

INSERT INTO contact (name,phone,email,message)
 VALUES('Daniel','Nielsen','user@gmail.com','Hello world');
