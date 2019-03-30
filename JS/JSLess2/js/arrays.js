// массивы

// сохраняют набор данных

let arr = []; // создали пустой массив
let lessons = ['история', 'химия', 'математика'];// массив из трех переменных// элементы лежат под индексами которые начинаются с 0 0-история,1-химия,2-математика.
// доступ к элементам массива осуществляется по индексу
console.log(lessons);
console.log(lessons[0]);// имя массива [номер элемента который хотим получить] 
console.log(lessons[1]);
console.log(lessons[2]);

console.log(lessons[67]); // вернет undefined, ткт нет в массиве

// изменить элементы массива

lessons[1] = "литература"; // изменили химия на литература

console.log(lessons);

//добавление элементов в массив

lessons[89] = "русский язык";
console.log(lessons);

// размер массива (узнать длину массива)

let lessonsLenght = lessons.length; // . дает доступ к свойству
console.log(lessonsLenght);

// перебор массива (когла не занем сколько в массиве элементов)
lessons = ['история', 'химия', 'математика']; //lessons.length; три элемента массива
// инициализация (один раз)let i = 0  --> проверка условия i < lessons.length --> тело цикла console.log("Lesson: ", lessons[i] --> счетчик i++ и по кругу.
for (let i = 0; i < lessons.length; i++){ // счетчик обновляется в самом конце
	console.log("Lesson: ", lessons[i]);
}

let pics = ['1img.jpg','2img.jpg','3img.jpg',];

for (let i = 0; i < pics.length; i++){
	let img = document.createElement('img'); // создаем тег img
	img.setAttribute('src', 'img/' + pics[i]);

	document.getElementById('pictures').appendChild(img); // получили элемент по айди getElementById, appendChild добавили в элемент.

}

// методы 
//имя-метот-()
let lastElem = lessons.pop(); // удаляет и возвращает последний элемент
lessons.push("физкультура"); // добавляет элементы в конец массива

let lastElem2 = lessons.shift(); //удаляет и возвращает первый элемент массива
lessons.unshift("физкультура");// добавляет элементы в начало массива

lessons.includes ("литература"); // проверяет есль или нет элементы в массиве, возвращает true или folse

console.log(lessons.includes ("литература"));