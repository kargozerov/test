(function(){
'use strict';
console.log('JSLess5 Объекты');

//Объекты как ассоциативные массивы
let obj = {}; // создали пустой объект

//литеральный способ создания объекта

let articleArr = [1,"фотография","Описание статьи"];
let article = {
	id:1,     //ключ(свойство, поле) id значение(значение свойства) 1
	title: "фотография", // ключ(свойство) title занчение "фотография"
	description: "Описание статьи",
	author:"Peter",
	date: null // указываем когда не занем будет свойство или нет 
	//[] : "bdfh"
	//для примера напишем еще ключей
	/*null: null,
	true: true,
	2: 2,
	undefined: undefined,
	'': ''*/
};
console.log(article);
//получаем доступ к свойтвам объекта через .
//имя_объекта.имя_свойства

//доступ к существующему свойству
//let title = article.title; // можем передать в переменную типо пример

console.log(article.title); // фотография
//или
console.log(article["title"]); // фотография

// обращение к несуществующему свойству
console.log(article.date); // undefined - если свойства вообще не указано 

//изменить значение свойства

article.title = "Путишествие"; // заменили фотография на Путишествие
console.log(article.title); 


//добавить новое свойсто

article.date = new Date().toDateString();

console.log(article);

// проверка на наличие свойствав объекте
//1 вариант
if (article.img === undefined){ // спроверка с помощью undefined, но это не тру метод т.к может быть написано значение undefined у ключа
	console.log('В объекте нет свойства img');
}

//2 вариант
if ("img" in article){ // имя свойства в " " проверка in (типо img в article)
	console.log('В объекте есть свойсто img')
}

if (!("img" in article)){ // имя свойства в " " проверка на отрицание ! (типо img в article нет)
	console.log('В объекте нет свойста img')
}


//3 вариант
console.log(article.hasOwnProperty("img")); //(false т.к. нет такого свойства ключа) на выходе true или fale

// доступ к свойству объекта через переменную
let propName = 'title';//в переменной лежит ключ что бы динамически добавить свойство 
article[propName] = "Автомобили";

let imgProp = "img";
article[imgProp] = "car.png"; // img : car.png добавилось в объект

console.log(article);

// перебор объекта

for (let propNameVAR in article){
	console.log(propNameVAR, article[propNameVAR]); //
}

 
// 1 итерация for (let id in article){
	//console.log(id, article[id]);

//2 итерация for (let title in article){
	//console.log(title, article[title]);

let arr  = [45,67,89];
for (let ind in arr){
	console.log(ind,arr[ind]); // так делать нельзя с массивами!
}




console.log(Object.keys(article));
console.log(Object.getOwnPropertyNames(article));





console.log(Object.keys(arr));
console.log(Object.getOwnPropertyNames(arr));




    let articles = [
        {
            id: 1,
            title: "JS",
            description: "Описание",
            author: "Mike"
        },
        {
            id: 2,
            title: "PHP",
            description: "Описание",
            author: "Mike"
        },
        {
            id: 3,
            title: "HTML",
            description: "Описание",
            author: "Alex"
        },
        {
            id: 4,
            title: "Базы Данных",
            description: "Описание",
            author: "Peter"
        }
    ];



//написать функцию которая принимает на вход массив имя_свойства и значение
//функция возвращает массив со статьями



function getData (arr,kluch,znachenie){// 
	let resArr =[];
	for (let i=0; i<arr.length; i++){
		if (arr[i][kluch] === znachenie){ // 1===4 // 2===4 // 3===4 // 4===4
			resArr.push(arr[i]);
		}
	}
	console.log(resArr);
	return resArr;
}

getData(articles,"author","Mike");

//getData(articles,id,4);
//getData(articles,"author","Mike");


// методы объекта

article ={
			id: 1,
            title: "Фотография",
            description: "Описание",
            author: "Mike",
            logInfo: function(){
            	console.log(`Стаья: ${this.id},"${this.title}"автора ${this.author}`);
            }
};
//доступ к объектам
article.logInfo();  // вызов метода logInfo объекта article

//добавить иетод объекту
article.logInfo = function(){
	console.log(this);  // onsole.log(article)
};
article.logInfo();


//деструкторизация es6

let userData = ["qwe", "2323GJ3",56, "Peter"];

let [login, pwd, age, name] = userData;
/*
login  = userData[0];
pwd  = userData[1];
age  = userData[2];
name  = userData[3];*/
console.log(login, pwd, age, name);

let [login1,qwe1,...other1] = userData;
console.log(login1,qwe1, other1);



article ={
			id: 1,
            title: "Фотография",
            description: "Описание",
            author: "Mike",
            
};





let {id,title,description,author} = article; // деструктуризация объекта


console.log(id,title,description,author);






// для домашки это объект

let goods = {
	piano : {
		tirle: "Пианино",
		price: 3000,
		count: 30
	},
}






}());

