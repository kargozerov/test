console.log('Canvas');
 let canvasCollection  = document.getElementsByTagName('canvas');
 let canvas = canvasCollection[0]; // взяли первый тег из html

 canvas.width = 900;
 canvas.height = 600;

 let context = canvas.getContext('2d'); // getContext('2d') это стандартное свойство (получили context)
context.fillStyle = 'green'; // заполняем облать зеленым
context.fillRect (0,0,900,600); // 0,0, начальные координаты 900, 600 размеры поля

let catImg = new Image();
catImg.src = "img/111.png";
catImg.onload = function  () { // onload подргужает картинку
	context.drawImage(catImg, 22, 15, 120, 120); // drawImage - это метод 20, 15 - расположение картинки
};

let x = 22;
let y = 20;

document.addEventListener("keypress", movePic); // обработчик событий
//function movePic(){
	//стираем изображение и отрисвоываем со сдвигом
	//x +=3;

	//context.drawImage(catImg, x, 26, 15, 120, 120);
//}

function movePic(event){
	console.log(event);
	context.fillStyle = 'green';
	context.fillRect (x,y,120,900,600);
	
	if (event.code === "KeyD"){
	x += 4; 
	}
	else if (event.code === "KeyA"){
	x -= 4; 
	}
	else if (event.code === "KeyW"){
	y -= 4; 
	}
	else if (event.code === "KeyS"){
	y += 4; 
	}
	context.drawImage (catImg, x, y, 120, 120);
}

