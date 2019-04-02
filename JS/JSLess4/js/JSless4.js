console.log('проверка');

//примеры функции с return

function  sum1 (a,b) {
	return a + b; // запоминает значениея и возвращают
}

let resSum1 = sum1(2,4);
console.log(resSum1);

// если есть return то не нужно else if протсо if

// arguments - переменное количество аргументов
function printUseInfo(){ //  на вход ничего не принимает, но мы можем передать ей все что захотим
	//arguments - хранит все элементы, которые передаются в функицию при вызове
	console.log("arguments: "+arguments);
	for (let i=0; i<arguments.length; i++){
		console.log("Info: "+ arguments[i]);
	}
}

printUseInfo("Mike",56,"+79999999");

// спецификация es6 оператор ... (оператор спред - это три точки)
function printUseInfo2(login, pwd,...other_args){ //ther_args собирает все остатки в этом примере 56,"+79999999"
	console.log(login);
	console.log(pwd);
	console.log(other_args);

}

printUseInfo("Mike","123A",56,"+79999999");

function sum3(a,b,c){
	return a+b+c;
}

let numArr = [2,3,5,10];
console.log(sum3(...numArr));//передали массив в функию ... спред его разпоковал (если массив длинее возмет первые три) 
let numArr1 = [2,3];
console.log(sum3(...numArr1)); // NaN потому что массив короче того что в функции тк с undefin

///////////////одинавковые функиции//////////////////////////

//анонимные функции у них нет имени они сохраняются в переменные

let sumNums = function (a,b){ //нет имени сохраняется в переменную
	return a-b;
};

console.log(sumNums(5,1));

// стрелочные функиции => es6 // она кстати анонимная и сохраняется в переменную
let subtraction = (a,b) => a-b; // стрелка => означает что начнется тело функции

console.log(subtraction(5,1));

///////////////одинавковые функиции//////////////////////////

subtraction = (a,b) => {
	// код
	// код
	// код
	return a+b; //a-b например, ОБЕЗАТЕЛЬНО return
}

console.log(subtraction(5,1));

// напишите функицию, которая принимает на вход функцию и массив и обрабатывает каждый элемент массива переданной функции

let sqrs =(num) =>{
	return num*num;
}

let  nums  = [1,2,3,4];
function PrinimaetFuncArr (fn,arr1){
			
	for (let i=0; i<arr1.length; i++){
	
		console.log(fn(arr1[i]));	
	
	} 
}

PrinimaetFuncArr(sqrs,nums);
//console.log(PrinimaetFuncArr);

//методы массивов 

//метод forEach
let arr = [12,9,0,-12,1,-7];
arr.forEach(function(elem, index, array){ //(элемент массива, индекс, сам массив) можно передать функицию в него (метод принимает функцию) 
	
	//arr[index] = 89; доступ к елементам массивам по индексу
	//элементы можно изменить
	console.log("Элемент "+elem+" с индексом "+index);
}) 
console.log(arr); //тоже самое значение что и forEach(
 for (let i = 0; i<arr.length; i++){
 	someFn(arr[i],i,arr);
 } 
 function someFn(elem, index, array){
 	console.log("Элемент "+elem+" с индексом "+index);
 }


console.log(arr);

//метод filter
// создает новый массив со всеми элементами прошедшими проверку в функцию
arr = [12,9,0,-12,1,-7];
let filterArr = arr.filter(function(elem,index,array){
	return elem < 0; // тут условия можно писать тру фолс
}) //создзает массив на основе массива arr

filterArr = arr.filter((elem,index,array) => elem < 0);
	console.log(filterArr);

//метод map
//создает новый массив с результатом вызова указанной функции для каждого элемента
arr = [12,9,0,-12,1,-7];
let mapArr = arr.map((elem,index,array) => elem*elem); // тут вместо функции стрелочной можно передать любую функцию
console.log(mapArr);


//метод som 
//проверяет на заданые условия и возвращает true или folse
arr = [12,9,0,-12,1,-7];
let someResult = arr.some((elem,index,array) => elem < 0); // просто проверка условия
console.log(someResult);

// метод every
// проверяет, удоволетворяют ли все элементы массива условию заданному функцией

arr = [12,9,0,-12,1,-7];
let everyResult = arr.every((elem,index,array) => elem < 0); // проверяет и если хоть одно не равно условию выдаст false
console.log(everyResult);

