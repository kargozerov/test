// Калькулятор
// на протатипах будет сделан


//опишим функицию для выбрасывания ошибок при вводе не валидных данных

function CalculatorException (message) {
	this._message = message;
};

// созхдаем операцию (базовый класс родительский)

function Operation () {} // функция конструктор

Operation.prototype.execute = function (first, second){ // execute метод выполнить операцию
	return;
};

// операция сложения
function Addition (){} // функция конструктор

//наследование от Operation
Addition.prototype = Object.create(Operation.prototype);
// переопределяем метод execute родительского класа
Addition.prototype.execute = function (first, second){
	return first + second;
};

// операция умножение


// операция сложения
function Multiplication (){} // функция конструктор

//наследование от Operation
Multiplication.prototype = Object.create(Operation.prototype);
// переопределяем метод execute родительского класа
Multiplication.prototype.execute = function (first, second){
	return first * second;
};

// операция вычитание

function Subtraction (){} // функция конструктор

//наследование от Operation
Subtraction.prototype = Object.create(Operation.prototype);
// переопределяем метод execute родительского класа
Subtraction.prototype.execute = function (first, second){
	return first - second;
};

// операция деление

function Division(){} // функция конструктор

//наследование от Operation
Division.prototype = Object.create(Operation.prototype);
// переопределяем метод execute родительского класа
Division.prototype.execute = function (first, second){
	if (!second){ // проверка деления на 0 (т.к. 0 - false)
		//выбросить  CalculatorException
		throw new CalculatorException("На ноль делить нельзя!") // throw выводит сообщения в формате ошибки в консоль (это на этапе разработке только для разработчиков)
	}
	return first / second;
};


// калькулятор хвранит в себе операции значит у него должнен быть метод операции и добавить операцию
// ключ оператор а значение сама операция +:сложение , *: умножение и т.д

//калькулятор

function Calculator (name) {
	this._name = name; // названия калькулятора
	this._operations = {}; // объект
}

//метод добавления операции

Calculator.prototype.addOperation = function (operator, operation){ //addOperation создает объект 
	//проверяем что operation это опрецая а не что то другое
	if ((!operation instanceof Operation)) { // если не пренадлежит классу Operation выводит throw
		throw new CalculatorException("Это не операция");
	}
	this._operations[operator] = operation; // добавляем по ключу   (  *: умножение и т.д ) 
};

Calculator.prototype.calculate = function (first, second, operator){ // operator это + - * /
	if (!(operator in this._operations)){
		throw "Данное действие не поддерживается";
	} 
		// получаем из значка  + - * / значение 
		let operationValue = this._operations[operator]; //  operationValue  это какой то объект (умножение, сложение, деление, вычитаеие)
		return operationValue.execute (first, second);

}; 