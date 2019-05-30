let form = document.forms.someForm;
//form.addEventListener('submit', formHandler); // перехватываем форму по нажатию на кнопку

//отправка 
function formHandler(event){ //функция перехвата
	event.preventDefault();
	let validate_fileds = document.querySelectorAll('validate');
	if(!formValid(validate_fileds)){ //если проверка не прошла выводим  не все поля заполены
		document.getElementById("errors").innerHTML = 'не все поля заполены';
		return;
	} 
	this.submit();// если прошла проверка отправляем форму на сервер
}


function formValid(fields) {
	for (let i = 0; i < fields.length; i++){
		if (fields[i].value.length < 3){
			return false;
		}
	}
	return true;
}
//отправка без перезагрузки страницы 
//отправка ajax-запросом

form.addEventListener('submit', ajaxHandler);
function ajaxHandler(event){
	event.preventDefault();
	let validate_fileds = document.querySelectorAll('validate');
	if(!formValid(validate_fileds)){ //если проверка не прошла выводим  не все поля заполены
		document.getElementById("errors").innerHTML = 'не все поля заполены';
		return;
	}
	let form_data = new FormData(this);

       //запрос бутет отправлен методом POST на обработчик формы обработчиком
       //в данном случае form_handler.php - Это this (что бы не писать 100500 раз на каждую форму н сайте)
	let xhr = new XMLHttpRequest(); // объект запроса встроеный (пойдет на сервер) ЭТО ajax
	xhr.open("POST", this.action, true); // соединяемся сервером настройки (action="form_handler.php">)
	xhr.send(form_data); //соединение с сервером
       
           //функция будет вызвана когда придет ответ от сервера
	xhr.onload = function (event){ //когда придет ответ от сервера load то будет вызвана эта функция
		if (xhr.status == 200){ //200 нет ошибок все хорошо (стандартные ошибки такие как 404)
			responseHandler(xhr.responseText);
		}
	}
}

// ответ от сервера
function responseHandler(text){
	console.log('ответ от сервера: ' + text);
}