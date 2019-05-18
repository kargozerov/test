CREATE TABLE IF NOT EXISTS library_kargozerov.book (

 idbook INT NOT NULL AUTO_INCREMENT,

 title VARCHAR(45) NOT NULL,

 price DECIMAL NOT NULL,

 author VARCHAR(45) NOT NULL,

 PRIMARY KEY (idbook))

ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS library_kargozerov.book_stat (

 idStat INT NOT NULL AUTO_INCREMENT,

 bookCount INT NOT NULL,

 bookId INT NOT NULL,

 PRIMARY KEY (idStat))

ENGINE = InnoDB;

INSERT INTO book(title, price, author) VALUES ('War and Peace', 1500, 'Lev Tolstoy');

INSERT INTO book(title, price, author) VALUES ('The Prince and Pearing', 700, 'Mark Twen');

INSERT INTO book(title, price, author) VALUES ('The Adventures of Tom Sawyer', 1200, 'Mark Twen');

INSERT INTO book(title, price, author) VALUES ('The Cherry Orcher ', 300, 'Anton Chehov');


INSERT INTO book_stat(bookCount, bookId) VALUES (3, 1);

INSERT INTO book_stat(bookCount, bookId) VALUES (7, 2);

INSERT INTO book_stat(bookCount, bookId) VALUES (20, 3);

select*from book
where price>(select avg(price) from book);

select*from book
where idbook in (select bookId from book_stat);

select*from book
where exists(select*from book_stat where book_stat.bookId=book.idbook );

select*from book
where NOT exists(select*from book_stat where book_stat.bookId=book.idbook );

select title
from  book
where idbook=any
(select bookId from book_stat where bookCount > 5);

select title
from  book
where idbook=all
(select bookId from book_stat where bookCount > 5);

create view v as  select title from book;

create view book_view 
as select title, price*2 as price 
from book;

update book  set  price=4000 where idbook=2;


delimiter $$
create function getBookCount() returns integer
begin
declare val integer;
select count(*) into val from book;
return ifnull(val, 0);
end $$
delimiter ;

select getBookCount() ;

delimiter $$
create procedure getPrice(in some_data double)
begin
	select price-price*some_data from book;

end $$
delimiter ;

call getPrice(0.7);


delimiter $$
create procedure getMaxPriceByAuthor(out max_price int, in author_name varchar(255))
begin 
	select  max(price) into max_price from book
	where author=author_name;

end $$
delimiter ;

call getMaxPriceByAuthor(@m, 'Mark Twen');

select @m as max_price;


delimiter $$
create procedure selectProc1(in firstParam int , in secondparam int)
begin 
select b.price, b.title,
case
 when price < firstParam then 'Deshevue Knigi'
when b.price > firstParam and b.price < secondparam then 'Srednya Cena'
else 'Dorogie Knigi'
end as result
from book b;

end $$
delimiter ;


call selectProc1(1000, 2000);



