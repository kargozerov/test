console.log('ООП')
// ооп в функциональном програмировании

//функция конструктор
function Book(){
	//описываем свойства объектов
	let title; // приватное свойство (они снаружи не доступы через . например alphabet.title не прокатит) поэтому тут используем всю эту свадьбу с сеттеры и геттеры
	let page;
	//this.publicTitle = 'publicTitle'; // публичное свойство

	//методы (для получения значений и свойств)

	//сеттеры
	this.setTitle = function (bookTitle){ // setTitle - метод которым будут обладать все объекты
		if (bookTitle.length < 2) { // название меньше двух не может быть (типо) 
			return;
		}
		title = bookTitle;
	};
	// еще один сетер
	this.setPage = function (pageCount){
		if (pageCount < 10){
			return;
		}
		page = pageCount;
	};

	//геттеры (для получения значений свойств)
	this.getTitle = function (){
		return title;
	};

	this.getPage = function(){
		return page;
	};
}

//let alphabet = new Book(); // создали первый объект объект
//alphabet.setTitle("Алфавит"); 
//alphabet.setPage(23);
//console.log(alphabet.getTitle()); //выводим для книги 1
//console.log(alphabet.getPage());

//let tails = new Book();
//tails.setTitle("Сказки");
//tails.setPage(25);
//console.log(tails.getTitle());  //выводим для книги 2
//console.log(tails.getPage());

















