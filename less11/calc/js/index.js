console.log('Калькулятор');

let calculator  = new Calculator ("сложение и вычитание");

calculator.addOperation ("+", new Addition()); // положили Addition в массив _operation по ключу +  
calculator.addOperation ("-", new Subtraction()); // положили Subtraction в массив _operation по ключу -  

let res  = calculator.calculate (3, 55, "-");
console.log(res);