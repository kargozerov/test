(function () { // все функци, переменные и т.д. будут спрятаны функцией
	'use strict'; // приводим к современному стандарту js
//Функциии используются для того что бы выполнятьо одно и тоже в разных частях программы
console.log("функции");
let a=12, b=22;
let res = a + b;
let n =34, m=78;

let res2 = n + m;

//функции
// объявление функции
// именованые функции
function sum(num1,num2){ //аргументы num1,num2
	// тело функиции
	let res = num1 + num2;
	return res; // не куда не выводит просто возвращает для того что бы записать в переменную res = sum()
}

//вызов функии
//передача элементов
sum(a, b);
sum(n, m);

res = sum(a, b);
res2 = sum(n, m);

console.log(sum(a, b));

function greeting(userName = "User"){ // User - значение по умолчанию типо, будет подставляться в пустые greeting();
	//userName = userName || "User"; раньше делали так но теперь можно сверху писать
	console.log("hello " + userName);
}
greeting ("Alex");
greeting ("Mike");
greeting(); // User

function greeting2(userName){ // undefined
	if (!userName) { // undefined => false => !false => true 
		console.log("аргумент не передан");
		return;
	}
	console.log("hello " + userName);
}
greeting ("Alex");
greeting ("Mike");
greeting2(); // аргумен не передан

// функия принимает на вход два числа и возвращает минимальное из них

function getMin(num1,num2){
	if (!num1 || !num2) {            // проверка что данные переданы
		console.log("Данные не переданы");
		return;
	}


	if (typeof num1 !== 'number' && typeof num2 !== 'number'){
		console.log("Данные не числа");
		return;
	}
	return (num1<num2)? num1:num2;
}


let min = getMin (34, 78);
console.log("min", min);
getMin();


// напишите функцию которая принимает на вход массив целых чисел и возвращает сумму его элементов
//Array.isArray (Ваш массив)


function getArrSum(someArr){
	if (!Array.isArray(someArr)){
	console.log("Это не массив")
	return;
	} 
	let sumarr = 0;
	for (let i = 0; i < someArr.length; i++) {
		sumarr += someArr[i];
    }
    return sumarr;
}
let arr33 = [2,3,5,6,10,11];
console.log(getArrSum(arr33));


console.log(window); // показывает все функции js

let aVar = "some data";


//задачка/////////////////////////////////////////
let someStr = "Строка";
let someArr = [34, 56, 33];

function changeStr (str) {
	str += "Новая строка";
}
function changeArr (arr){
	for (let i = 0; i < arr.length; i++){
		arr[i] += 3;
	}
}

changeStr(someStr);
changeArr(someArr);

console.log(someStr);
console.log(someArr);
//задачка/////////////////////////////////////////

//примитивные типы данных: (передается по значению)

//числа
//строки
//булевый тип
//null
//undfined

// не приметивные:
//объекты (массивы, функции и т.д.) (передаются по ссылке)

let numVar = 3;
let numVar2 = numVar;

let arr1 = [1, 2, 3];
let arr2 = arr1;

numVar = 56;

console.log(numVar, numVar2); // 56, 3

arr1[1] = 22;

console.log(arr1, arr2);

// arr1 === arr2 // нельзя так сравнивать объекты

// создать копию массива

let oldArr = [1, 2, 3];
let copyArr = oldArr.slice(); // метод слайс (дома посмотреть эти методыц)


// рекурсия

// написать функцию, которая будет выводить в консоль числа от 0 до n в обратном порядке

// это циклом
function printNums1(num){
	let i = num;
	while (i >= 0){
		console.log(num);
		i--;
	}
}

// это рекурсия
function printNums(num){ //4//3//2//1//0
	if (num >= 0) {
	console.log(num);//4//3//2//1//0
	printNums(num - 1);//3//2//1//0
	}
}
 printNums(4);





}()); // function () - куруглые скобки самовызывающаяся функция

