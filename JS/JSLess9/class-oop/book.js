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


