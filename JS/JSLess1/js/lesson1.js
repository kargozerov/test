// Это однострочный коментарий
/*многострочный
*коментарий
*/


console.log("Выводимая инфа");


// переменные - облать памяти кторой дается имя
// объявление переменных
var	login; // глобальная облать видимость (видим везде)
let pwd;// локальная (видим только в определенном блоке)
const CONST_VALUE = 123;// константа (значение не меняется)


// присвоеним переменным значения
login = "qwe";
pwd = "1234";

//переобпределим значение переменной
login = "asd";
pwd = "56Ad56";

console.log(login, pwd); // вывод в консоль переменных

let height, width; // несколько переменных за раз можно объявить
/*
let height = 123;
let width = 346;// объявили и присвоили значения
**/
//типы данных

//числа - тип number (отрицательные, положительные, дроби)

height = 234.5;
width = -789;

// строки - тип string
let str = "Строка";
let str2 = 'Строка';

str = '"Строка"';
str = '\'Строка\''; // заэкнаированы
console.log(str);

//логический - тип boolean

let active = true; // без ковычек булини записыаются active = "true" - Это уже строка
let stopped = false;

console.log(active, stopped);


//тип null - значение не известно

let unrnowValue = null;
console.log(unrnowValue);

let undefinedVal; //значение не присвоено

console.log(undefinedVal); // выведет в консоле undefined если значенеи не присвоили

// определить тип данных

console.log(typeof active); // проверка типа данных active

let age = '13 лет';
height = '300.67px';

age = parseInt(age); //функция преобразования строки в целое число (считывает число до первого не числа)


height = parseFloat(height); //функция преобразования строки в число с плавающей точкой (считывает число до первого не числа)

console.log(age);
console.log(typeof age);

console.log(height);
console.log(typeof height);

// арифметические операторы
// + -
// * /
// %(взятие остатка от деления)

height = 45;
height = height*2;
console.log(height);

console.log(3+5); // 8
console.log('3'+5);// строка+число=строка 35 (console.log(+'3'+5) = 8 (+переводит строку в число);)
console.log("строка"+"еще строка") // строкаеще строка

console.log(34/'2'); // 17 строка преобразуется в число
console.log(34*'2'); // 68 строка преобразуется в число
console.log(34-'2'); // 32 строка преобразуется в число

console.log(34/"str"); // NaN не возможно вычислить не число

console.log(isNaN("str")); // true  isNaN - проверяет число или нет если не число то значение true
console.log(isNaN("23")); // false
console.log(isNaN("23er")); // true
console.log(isNaN(45)); // false
console.log(isNaN(false)); // false

console.log(34/0); // Infinity бесконечность
console.log(-34/0); // -Infinity -бесконечность


// взятие остатка от деления нацело
console.log(9%2); // 1
console.log(8%2); // 0
console.log(348%10); // 8

// 64-бит Number
console.log(Number.MAX_VALUE);
console.log(Number.MIN_VALUE);
console.log(Number.MAX_SAFE_INTEGER);
console.log(Number.MIN_SAFE_INTEGER);

//операторы присваивания
// = присваивание
// +=
// *=
// /=
// %=

let a = 12;
a = a +10; // 22 
console.log(a);
a += 10; // 32
console.log(a);

a = a*10; // a *= 10;
console.log(a);
a = a/10; // a /= 10;
console.log(a);
a = a - 10; // a -= 10;
console.log(a);
a = a % 10; // a %= 10;
console.log(a);

// операторы сравнения
// > < >= <=
// == равенсто
// != не равно
// === строгое равенство  // использовать предпочтительние 
// !== строгое неравенство // использовать предпочтительние 

height = 123;
width = '123';
let num = 500;
login = "asd";
login2 = "fre";

console.log(height > width); // false строка преобразовалась в число и сравнились
console.log(height >= width); // true строка преобразовалась в число и сравнились
console.log(height == width);  // true строка преобразовалась в число и сравнились
console.log(height === width); // false строка  НЕ преобразовалась в число и сравнились (сначало сравнивает типы данных, если разные сразу выдает false) - более предпочтительный способ сравнения


console.log(login > login2); // false короче тут много свойств потом будет проходить

// инкремент(увеличивает значение на 1)++ и декремент(уменьшает значение на 1)--
//префиксная форма ++i
num = 2;
console.log(++num); // 3 (увеличел на 1 и вернул значение в num)
console.log(num); // 3

//постфиксная форма i++

num = 2;
console.log(num++); // 2 (увеличел на 1 и запомнил)
console.log(num); // 3

num = 7;
let res  = num++ - num++ + num++ - --num; // -1 (8-8+9-10)????разобраться дома
console.log(res);

height = 23;
width = '65px';

// условие ? значение1 : значение2;
//1. проверка условия , если условие true, оператор вернет значение1, если false - значение2

res = (height >= parseInt(width)) ? "Высота больше" : "Ширина больше"; // сначало parseInt(width) преобразует 65px в 65 потом сравнит и выдаст Ширина больше

console.log(res);

//попросить у пользователя

let data = prompt ("Введите данные"); // модальные окна приостанавливают работу скрипта, пока в модальное окно не введут данные или его не закроют
console.log(data);