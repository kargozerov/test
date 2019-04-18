console.log('проверка1');
//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ//ПРОТОТИПЫ

function  Book() {
	//this._title; // _ делает условно приватное свойсто (не приватное свойство)
}
// запишим все метоты в прототип

 //метод - сеттер
Book.prototype.setTitle = function(title){  
	//проверка
    if (title.length < 2) { //длина строки
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


//НАСЛЕДОВАНИЕ //НАСЛЕДОВАНИЕ//НАСЛЕДОВАНИЕ//НАСЛЕДОВАНИЕ//НАСЛЕДОВАНИЕ

function ChildBook () { // дочерняя функция - конструктор
	
}
// наследование

ChildBook.prototype = Object.create(Book.prototype); // вот на этом моменте функция ChildBook получет все методы от Book (setTitle, setPage, getTitle,  getPage )

//добавление новых методов
ChildBook.prototype.setAge = function(age){
	this._age = age;
};			

ChildBook.prototype.getAge = function (){
	return this._age;
};

// переопределение метода родителя
ChildBook.prototype.getTitle = function  () {
	// вызов метода родителя
	return "Детская книга: " + Book.prototype.getTitle.call(this); // call говорит о вызове метода getTitle
};

let masha = new ChildBook();
masha.setTitle("Маша и медведи");
masha.setPage(45);
masha.setAge("4+");
console.log(masha.getTitle());
console.log(masha.getAge());









