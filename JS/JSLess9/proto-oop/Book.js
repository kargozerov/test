console.log('проверка1');
//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ

function  Book() {
	//this._title; // _ делает условно приватное свойсто (не приватное свойство)
}
// запишим все метоты в прототип

 //метод - сеттер
Book.prototype.setTitle = function(title){  
	//проверка
    if (title.length < 2) { 
			return;
	}
	this._title = title;
};

Book.prototype.setPage = function(pageCount){
	//проверка
	if (pageCount < 10){
			return;
	}
	this._page = pageCount;
};

 //метод - геттер
Book.prototype.getTitle = function(){                 // присваиваем значение
	return this._title;
};

Book.prototype.getPage = function(){
	return this._page;
};


//let alphabet = new Book(); // создали первый объект объект
//alphabet.setTitle("Алфавит"); 
//console.log(alphabet.getTitle()); //выводим для книги 1

//let tails = new Book();
//tails.setTitle("Сказки");
//console.log(tails.getTitle());  //выводим для книги 2

//console.log(alphabet);
//console.log(tails);

