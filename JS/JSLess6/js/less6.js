

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

let ulLi = document.querySelector("ul>li");//дочерний // первый найденый элемент выведет (в стилях не обезательно должен быть) #elemID .class как в css бы указали
console.log(ulLi);

let queryAll1 = document.querySelectorAll("input[type = text]"); // ко всем тайп у которых тип текст

console.log(queryAll1);


// создание элементов и добавление в html 09-04-2019

let ul = document.createElement("ul"); // создание элемента
 console.log(ul);

let li1 = document.createElement("li"); // создали ли (они не связаны с ul)
let li2 = document.createElement("li");
let li3 = document.createElement("li");

let text1 = document.createTextNode("Elem1"); // создает текстовый узел (пока не связан с ли и ул)
let text2 = document.createTextNode("Elem2");
let text3 = document.createTextNode("Elem3");

// работа с атрибутами
console.log(ul.hasAttribute("id")); // проверяет наличие атрибута (вернул фолс т.к у ул нет айди)
ul.setAttribute("id","js_ul"); // устанавливаем атрибут
//получаем значение атрибута
console.log(ul.getAttribute("id"));

// атрибут style

// это как будто пишем стили в style прямо в html

ul.style.background = "blue";

// по нормальному нужно делать вот так:
// работа с классами css
ul.classList.add("class-name"); // добавить класс
ul.classList.remove("class-name"); // убаляет класс элемента
ul.classList.toggle("class-name"); // проверяет и если нет класса то добавляет
ul.classList.contains("class-name"); //проверяет ??

//list.style.background = "red"; 

// Добавление элементов
//appendChild можно вызвать только к элементу к массиву нельзя его применить
ul.appendChild(li1); // добавили в ul один элемент li1
li1.appendChild(text1); // добваили текст в ли Elem
ul.appendChild(li2);
li2.appendChild(text2);
ul.appendChild(li3);
li3.appendChild(text3);

let nav = document.getElementById("nav");
nav.appendChild(ul);


// innerHtml еще один метод добавить элеvtyn (вставляет строчку)
//document.body.innerHTML = "<h2>Заголовок</h2>"; // что бы небыло написано в эелеенте innerHtml сотрет его и запишет
//console.log(nav.innerHTML); // вывели в консоль кусок когда (просто строчка)

//for (let i = 0; i<3; i++){
//	document.body.innerHTML += "<p>TEXT</p>"; // каждый раз создание новой строки и отрисовка html заново по итогу в браузере у видим html файл и добавленый TEXT три раза


let div = document.createElement("div");
div.innerHTML = "<p>Создали ДИВ</p>";
nav.insertBefore(div, ul); // добавили
nav.removeChild(div); // удаление элементов (удалили ДИВ)

//elem.replaceChild(new_elem, old_elem); // замена элементов новый на старый

// Таблички

//получаем таблицу из html

let allTable = document.getElementsByTagName("table"); // собираем все таблички на странице
let table = allTable[0];
table.setAttribute("border", "1") // устанавливаем атриьбут (название, значение)
let caption = table.createCaption(); // заголовок таблицы
caption.innerText = "Caption"; // заголовок

let row = table.insertRow(0); // сделали ряд

let cell1 = row.insertCell(0); // ячейка
let cell2 = row.insertCell(1); // ячейка

cell1.innerText = "Cell 1"; // вставили текс в табличку
cell2.innerText = "Cell 2"; // вставили текс в табличку



























