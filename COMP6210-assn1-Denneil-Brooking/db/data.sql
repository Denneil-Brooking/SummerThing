use containerdb;

drop table IF EXISTS tbl_blog;

create table tbl_blog
 (
     id int auto_increment,
     Title varchar(20),
     Content varchar(3000),
     primary key(id)
 )auto_increment = 1;


 insert into tbl_blog(Title, Content)
 values('Subject one', 'information on week 1-2');

 insert into tbl_blog(Title, Content)
 values('Subject two', 'information on week 3-4');

 insert into tbl_blog(Title, Content)
 values('Subject three', 'information on week 5-6');

 insert into tbl_blog(Title, Content)
 values('Subject four', 'information on week 7-8');

 insert into tbl_blog(Title, Content)
 values('Subject five', 'information on week 9-10');

 insert into tbl_blog(Title, Content)
 values('Subject six', 'information on week 11-12');



