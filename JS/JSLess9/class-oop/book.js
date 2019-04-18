// КЛАССЫ // КЛАССЫ// КЛАССЫ// КЛАССЫ// КЛАССЫ// КЛАССЫ
console.log('Класссы');

class Book{

	//сеттеры
	set title (title){
		this._title = title;
		 if (title.length < 2) { 
			return;
	}

	set page (pageCount){
		if (pageCount <10){
			return;
		}
		this._page = pageCount;
	}
	//геттеры
	get title() {
		return this._title;
	}

	get page (){
		return this._page;
	}
}


//наследование
claas ChildBook extends Book{ // это функция тоже самое что и OtherLibrary.prototype = Object.create(Library.prototype);
	//переопределение метода
	get title(){ // дочерний элемент
		return "Детская книга: " + super.title; // super.title - обращаемся к методу родителя (как бутдо Book.prototype.getTitle.call(this) сахар
	}

}
