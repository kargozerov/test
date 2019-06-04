console.log('проверка');
//обхевление переменных
//кнопка открытия модально окна
let open_modal_btn = document.getElementById('open_modal'); // 	<a href="open_modal">Войти</a>
//кнопка закрытия модального окна
let cansel_btn = document.getElementById('cansel');
//модальное окно
let modal = document.querySelector('.modal'); //пернвый элемент с id = "modal" <div id="modal">....весь див с модалкой</div>
//форма (получили эелементы формы по значению атрибута name)
let form = document.forms.auth_form;
//элемент для вывода ошибок авторизации
let error_filed = document.getElementById('errors');

//варианты ответа сервера
const AUTH_OK = 'OK';
const AUTH_ERROR = 'ERROR';

//ФУНКЦИИ

//открытие модального окна
function open_modal() {
	modal.classList.add('open'); //добавили класс open из css к нему let modal = document.querySelector('.modal'); 
}

//закрытие модального окна
function close_modal(){
	modal.classList.remove('open'); //удалили класс open
	error_filed.innerHTML = ''; //убираем информацию об ощибках
}
//обработка ответа от сервера
function responseHandler (serverResponse){
	console.log('Ответ сервера',serverResponse);
	if (serverResponse === AUTH_OK){
		//значит, авторизация прошла успешно
				window.location.replace('account.php'); //перенаправляем пользователя на account.php
	}else if (serverResponse === AUTH_ERROR){;
	//если авторизация не удалась, выводим пользователю сообщение
	error_filed.innerTEXT === 'Обишка авторизации';
	}
}
//отправка данных формы ajax запросом
function send_form(event){
	//отменили отправку по умолчанию
	event.preventDefault();

	//получили все элементы по css селектору .validate
	let validate_filed = document.querySelectorAll('.validate');
	for (let i = 0; i < validate_filed.length; i++){
		if(validate_filed[i].value.length < 3){ //если длина введеного текста меньше 3 символов
		error_filed.innerHTML = "Не все поля коректно заполнены";
		return;
		}
	}

	//объект FormData хранит все данные из формы, введеные пользователем
	let form_data = new FormData(this); // FormData стандартная функция js (когда клиент ввел данные формы и нажал кнопку отправить сформируется)

	//формирование ajax запроса
	let xhr = new XMLHttpRequest();
	xhr.open("POST", this.action, true);// this.action ---- это form name="auth_form" action="form_handler.php" (this это form)
	xhr.send(form_data);
	//когда придет ответ отработает эта функция  onload
	xhr.onload = function(){
		if(xhr.status == 200){
			//с сервер ответит на запрпос, будет вызвана данная функиция - обработчик события load для объекта запроса
			responseHandler(xhr.responseText); // responseText тут запишется то что ответил сервер (например приедт AUTH_ERROR)
		}
	};

}
//добавляем обработчик событий
//при нажатии на кнопку (событие click) open_modal_btn  будет вызвана функция open_modal
open_modal_btn.addEventListener('click', open_modal);

//при нажатии на кнопку (событие click) на кнопку cancel_btn будет вызваная функция close_modal
cancel_btn.addEventListener('click', close_modal);

//отправка формы (событие subnit) будет вызвана будет вызвана send_form
form.addEventListener('click', send_form);
