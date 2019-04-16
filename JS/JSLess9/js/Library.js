function Library(title, size){
	let libTitle = title;
	let maxSize = size; // максимальный размер библиотеки
	let books =[]; //книги будем вклыдвать в массив books

	//методы 
	this.addToLibrary = function (book){ //сюда придет книга из другого js файла
		if (!(book instanceof Book)) {// Book объект из другой js (если придет не объект из другого файла то функция прекращает работу) instanceof - проверяеет
			console.log("объекты не являются объектом");
			return;
		};
		if (books.length === maxSize){
			console.log('нет места');
			return;
			
			
		}
		books.push(book);
		console.log("книг в библиотеке: ", books.length);
		console.log("макстимальное количество: ", maxSize);
	};

	 this.swowAllBooks = function(book){
		if (books.length === 0){
			console.log("В библиотеке нет книг");
			return;
		}

		for (let i = 0; i <books.length; i++){
			console.log(books[i].getTitle(), books[i].getPage());
		}
	};

}


let book = new Book();
book.setTitle("Книга");
book.setPage(10);


let alphabet = new Book(); // создали первый объект объект
alphabet.setTitle("Алфавит"); 
alphabet.setPage(23);


let tails = new Book();
tails.setTitle("Сказки");
tails.setPage(25);


let library = new Library("Библиотека", 2); // 3 это maxSize (количество книг)
library.swowAllBooks(); //  библиотеке нет книг
library.addToLibrary(book); 
library.addToLibrary(alphabet);
library.addToLibrary(tails);
library.swowAllBooks(); // вывод функции с книгами

console.log(book);
