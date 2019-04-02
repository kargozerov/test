(function(){
'use strict';
console.log("Строки");

let str1 = "Строка в двойных ковычках";
let str2 = 'Строка в одинархых ковычках';
console.log(str1);
console.log(str2);

str1 = 'Строка "в ковычках"';
str2 = "Строка 'в ковычках'";


let str3 = "Строка \"в ковычках\"";
console.log(str1);
console.log(str2);
console.log(str3);

console.log(str1+str2);

console.log(str1.toLowerCase()); //маленким
console.log(str1.toUpperCase()); // БОЛЬШИМ
console.log(str1);

console.log(str1.startsWith("С")); // true
console.log(str1.endsWith("ПКП")); //false

console.log(str1.repeat(4)); //склеивает строку нужное количесто раз

str1 = "ab";
str2 = "bb";
 console.log(str1.localeCompare(str2)); // 0 т.к. строки равны 
// этот метод  сравнивает и возвращает -1 если str1 < str2 (и по символам юникода) и 1 если str1>str2 (и по символам юникода) 0 когда str1=str2


let age = 34;
let name = "Alex";
//es6 `` апостраф
console.log(`Имя пользователя: ${name}, возвраст: ${age}`); // склеивает вместо +
console.log("Имя пользователя: "+ name + ", возвраст: " + age);





























}());



