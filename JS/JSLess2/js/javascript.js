//if (условие){
//	код. который выполняется если условие выполняется true
//}

let checked = true;

if (checked) {
	checked = false; //что бы проверить состояние кнопки
	console.log("условие  true - блок кода выполнился");
}

console.log("checked: " + checked);


// дополнительный блок else
let age = 45;
if (age < 18){
	console.log("Вы не можете войти на сайт"); // trur
} else{
	console.log("добро пожаловать"); // false

}


// lдополнительные else if

let season = 'summer'; 

if (season === 'summer'){ // работает до первого истинного знаячения
	document.body.style.background = 'green';
} else if (season === 'winter'){
	document.body.style.background = 'white';
} else if (season === 'autumn'){
	document.body.style.background = 'orange';
} else {
	document.body.style.background = 'yellow';

}

// логические операторы
//&& и
// || или
//! не

let day = "суббота";
if (day === "суббота" || day === "воскресенье"){   //  true или true  false или true true или false
	console.log("Выходные")
	console.log("Выходные")
}

let a =12, b =56, c = 23;

if (c > a && c < b){ // оба должны быть true -  если будет false дальше проверять не будет
	console.log("с между а и b")
}
// checked = false
if (!checked){ // меняет значение на противоположное
	console.log("!checked: " + checked);
}


// оператор выбора switch
//switch(выражение){
//	case значение1:
//	код;
//	[break;]//[break] квадтратные скобки означаю что не обезательное писать , может быть а может и не быть
//	case значение2:
//	код;
//	[break;]
//	case значение3:
//	case значение4:
//	код;
//	[break;]
//	[default:
//	код];
//}

//пример
let ticketNumber = '222222';
switch (ticketNumber) {
	case '111111':
		console.log("большой приз");
		break;
	case '222222':
	case '333333':
		console.log("средний приз");
		break;
	case '444444': // объединение кейсов
	case '555555':
	case '666666':
		console.log("малый приз");
		break;
	default: // выполнится если не одно из значений кейс не совпадет
		console.log("попробуйте еще");
}
//пример переопределения переменных
//a = 5;
//b = 2;

//a = a + b;
//b = a - b;
//a = a - b;

//циклы нужны для того. что бы выполнять однотипные действия нескольок раз

// цикл while с предусловием
//while (условие){
//тело цикла
//}
let pwd  = null;

while (pwd !== 'admin'){
	pwd = prompt("Введите пароль");
}

// цикл while с постусловием

//do {
//	тело цикла
//} while (условие);

a = 4;
do {
	console.log("a= " + a);
	a--;
} while (a); // 3,2,1 true когда a=0 значение false и цикл останавливается


//цикл for

//for (начало/инициализация; проверка условия; шаг/обновление счетчика){
//	тело цикла
//}

let attemCount = 5;
let answer = 456;

for (let i = 1; i <= attemCount; i++){
	let data = prompt("Угадайте число");
	if (parseInt(data) === answer){
		alert("Вы угадали");
		break; // директива бреак позволяет выйти из цикла (если пользоватиль угодал)
		// continue; // директива continue прерывает текущую итерацию (не весь цикл)
	}
	alert("Попыток осталось: " + (attemCount - i));
}

let login = "qwe";
let pwd = "2A34";
let age = 56;

let userInfo = [0];
let userInfo = [1];
let userInfo = [2];

for (let i = 0; i < userInfo.lenght; i++){
	// 1 итерация i < userInfo.lenght --> 0<3
	// 	console.log("Info: ", userInfo[0]);
	//qwe

	// i < i < userInfo.lenght --> 1 < 3
	// 2 итерация
	// 	console.log("Info: ", userInfo[1]);
	//2A34  

	// i < i < userInfo.lenght --> 2 < 3
	// 3 итерация
	// 	console.log("Info: ", userInfo[2]);
	//56
	console.log("Info: ", userInfo[i]);
}

//пользователь вводит число, создать массив заданного размера, вывести элементы массива в обратном порядке.

let num = prompt("введите число")
//let num = 400;
arrNum = [];
//arr.lenght = 400 ;

for (let i = 0; i < userInfo.lenght; i++){
console.log("значения ", arr.lenght[i]);
}


// fill();

arr = [-3,10,34,11,1,6,3,3];
