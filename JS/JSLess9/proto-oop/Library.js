console.log('проверка2');
//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ

function Library (libTitle, size) { // инициализировали свойства
	this._libTitle = libTitle; // прописываем
	this._maxSize = size;
	this._books = [];
}

Library.prototype.addToLibrary = function(book){
	// проверка
	if (!(book instanceof Book)) {
		return;
	};
	if (this._books.length === this._maxSize){
		console.log('нет места', book.getTitle());
		return;
				
	}
	this._books.push(book);
};

Library.prototype.swowAllBooks = function(){
	if (!this._books.length ){
			console.log("В библиотеке нет книг");
			return;
		}
	for (let i = 0; i <this._books.length; i++){
		console.log(this._books[i].getTitle(), this._books[i].getPage());
		}
};

function OtherLibrary (libTitle, size){
	Library.call(this, libTitle, size); // вызываем функцию конструктор Library и передаем туда аргументы
}

OtherLibrary.prototype = Object.create(Library.prototype); // создали объект на основе Library








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