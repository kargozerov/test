console.log('Тут объекты котов');
//битва котов 

//создать класс кот - name
//возвраст -age
// вес - weight
// сила - strenght
// Метод fight(anotherCat)

//создаем котов с помошью классов
class Cat{
	constructur (name, age, weight, strenght){ // constructur это такой синтаксис для классов
		this._name = name;
		this._age = age;
		this._weight = weight;
		this._strenght = strenght;
	}
	
	fight (enemyCat){ 
		// механизм драки котов
		//в зависимости от их веса, возвраста и силы
		console.log(this._name, "напал на кота по имени", enemyCat.name)
		//к мараметра кота которы напал обращзатся через this
		//к коту на которого напили через name, age, weight, strenght

		//описываем через if сравнение параметров котов
	}

	get name() { // геттеры котов
		return this._name;
	}
	get age() {
		return this._age;
	}
	get weight() {
		return this._weight;
	}
	get strenght() {
		return this._strenght;
	}
}

//new Cat();
//new Cat();