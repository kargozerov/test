let valeGenerator = {
	value: 0,
	increment: function(){
		this.value++;
		return this;
	},
	add: function(num){
		this.value += num;
		return this;
	},
	logVal: function(){
		console.log(this.value);
		return this;
	}
};

//valeGenerator.add(valeGenerator.add(5)); // добавили к value 5 , а птом еще раз прибавили 5

// последовательное выполнение методов (цепочка вызова)
valeGenerator.add(5)
.add(3) 
.logVal() // 8
.increment() // +1
.increment() // +1
.logVal(); //10 

//Библиотека //Библиотека //Библиотека //Библиотека //Библиотека //Библиотека //Библиотека //Библиотека 
