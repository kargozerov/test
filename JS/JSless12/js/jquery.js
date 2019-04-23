$(function(){
	console.log("document ready");

	/*jQuery(поиск/создание элемента) // получаем элемент
	.method1(стили) // например, применяем стили
	.method2() // добавили атрибуты
	.method3() // вставили текст 
	.size(); // получили размер
	*/

	//поиск элементов по CSS селекторам
	jQuery("#menu"); // селектор ID
	jQuery(".empty"); // селектор класса
	jQuery("ul > li"); // селектор дочерний

	console.log(jQuery("#menu"));

	let elems = jQuery("nav").children();
	console.log(elems); // [ul#menu, prevObject: jQuery.fn.init[1]]

	elems = jQuery("ul") // обратились к ul
		.find('a') //получили доступ к а котороый внутри ul
		.css("color", "red") // подключаем стили так 
		.css({					// подключаем стили так или так
			fontSize : '20pt',
			background : 'blue'
		})
		.end(); // вышли из свойства а все что написано дальше применяется для ul
		
});

