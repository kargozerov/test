(function(){
'use strict';

console.log('Лекция 6 JS');



//DOM  дерево
console.log(document); // выводит весь html целиком
console.log(document.body); // body

// для каждого элемента можно получить 
let elem = document.getElementById("list");
console.log(elem);
console.log(elem.childNodes); // все дочерние узлы узлы (текст коментарии и тд) [text, ul, text]
console.log(elem.children); //  узлы html теги [ul]


console.log(elem.firstChild); // первый дочерний элемет
console.log(elem.lastChild);// последний дочерний эленот

console.log(elem.firstElementChild); // первый дочерний тег
console.log(elem.lastElementChild);// последний дочерний тег

console.log(elem.previousSibling);// предыдущий узел
console.log(elem.nextSibling); // следующий узел

console.log(elem.previousElementSibling); // пердыдущий элемент(тег)
console.log(elem.nextElementSibling); // следующий элемент (тег)

console.log(elem.parentNode); // родительский узел
console.log(elem.parentElement); // родительский узел-тег

// поиск элемента
// 1 получение элемнета по id (id должны быть уникальными)
let list = document.getElementById("list");
console.log(list);
// 2 получение по атрибуду name
let getElementsByName111 = document.getElementsByName("data"); // сформирует массив
console.log(getElementsByName111);


console.log(getElementsByName111[0]); // доступ к первому элемнту (0 т.к. массив)
// 3 по имени тега
let ulTag = document.getElementsByTagName("li");
console.log(ulTag); // выввели массив с лишками li
console.log(ulTag[1]); // Второй пункт

// 4 по имени класса

let getelemClass = document.getElementsByClassName("menu","some-class"); // 
console.log(getelemClass); 

let getelemClass2 = document.getElementsByClassName("some-class");
console.log(getelemClass2);

// 5 по css селектору

let ulLi = document.querySelector("ul>li");//дочерний // первый найденый элемент выведет 
console.log(ulLi);

let queryAll1 = document.querySelectorAll("input[type = text]"); // ко всем тайп у которых тип текст

console.log(queryAll1);














}());

