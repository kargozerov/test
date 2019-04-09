console.log('Слайдер');

let slaider = {
	init: function (){ // данные
		this.elem = document.getElementById(id); //this ссылка на объект 
	},

	add: function (image, alt){ // добавляем картинки
		let li = document.createElement("li"); // <li></li>
		let img = document.createElement("img"); // <img>
		img.setAttribute("src", image); // <img =src="path">
		img.setAttribute("alt", alt); // <img =src="path" alt="alt">
		li.appendChild(img); //<li><img =src="path" alt="alt"></li>
		this.elem.appendChild(li);
	},

	start: function(){ //переключение слайдов

	}


};