console.log('work!!!');

class Article{
	constructor(title, author){
		this._title = title;
		this._author = author;
	}

	showAuthorName(){
		console.log("Автор статьи: "+ this._title + " - " + this._author._name);
	}
}

class Author{
	//конструктор
	constructor(name){
		this._name = name;
	}
	//сеттер
	set name (value){
		if (value.length < 1){
			return;
		}
		this._name = value;
	}
	//геттер
	get name(){
		return this._name;
	}
}

let author = new Author("Kargozerov"); // "Kargozerov" это name
console.log(author);
console.log(author.name);

author.name = "Вася"; // задали новое имя автора
console.log(author); // объект Author {_name: "Вася"}
console.log(author.name); // Вася


let article = new Article("Интересное ООП",author); // "Интересное ООП"  это _title (автора author подсасывает из класса class Author)
console.log(article);

article.showAuthorName(); // Автор статьи: Интересное ООП - Вася
//////////////////////////////////////////

// это не касается классов

//Локальное хранилище Локальное хранилищеЛокальное хранилищеЛокальноеЛокальное хранилище Локальное хранилище

let storageName = localStorage; // тут можно хроанить последнии данные пользователя ( но НЕ пароли) 
console.log(storageName);

// добавить значения в localStorage (локальное хранилище) по ключу
storageName.setItem("key", "value"); // это объект поэтому через . setItem(ключ, значение) (видно во вкладке local Storage в chrome) 

// получить значение  по ключу
let val = storageName.getItem("key"); // getItem(ключ) получаем значение по ключу
console.log(val);


// удалить значение по ключу
storageName.removeItem("key"); // удалит key и value

//очистить
storageName.clear(); // полностью очищает все key и value УДАЛИТ ВСЕ

// поработаем с объектами

let data ={
	name:"Alex",
	age:78
};

storageName.setItem("data", data);
console.log(storageName);

let dataFromStorage = storageName.getItem("data");
console.log(dataFromStorage); //[object Object] ничего не получить так делать НЕ надо!!

//приводим к типу jsonObj для того что бы получить данные из объекта
let jsonObj = JSON.stringify(data); // JSON хранит данные ключ:значение
console.log("Вывод JSON: ",jsonObj); // Вывод JSON:  {"name":"Alex","age":78} - это строка в формате JSON !!!НЕ объект!!!  


storageName.setItem("НазваниеjsonObj",jsonObj);

let jsonObjFromStorage = storageName.getItem("jsonObj");
jsonObjFromStorage = JSON.parse(jsonObjFromStorage); // перевод из JSON в строку (объект)


let arr = [1, 5, 8];
console.log(JSON.stringify(arr)); // JSON.stringify переобразует значение JS  в строку JSON
 
let num = 89;
console.log(JSON.stringify(num)); // JSON.stringify переобразует значение JS  в строку JSON

storageName.setItem("arr", JSON.stringify(arr)); // добавили в локалхост

let arrFromStorage = storageName.getItem("arr"); 

let fiveFromArr = JSON.parse(arrFromStorage)[1]; // выводим второе значение массима arr
console.log(fiveFromArr); // 5 