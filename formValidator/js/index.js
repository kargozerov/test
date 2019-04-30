class FormValidator{
    constructor(form) {
        this._form = form;
    }
    addRules(rules){
      this._rules = rules.rules;
      this._messages = rules.messages;
    }
}

function FormValidator(form) {
    this._form = form;
}

FormValidator.prototype.addRules = function(rules){}

for (let i = 0; i < elem.length; i++){
    if (!this._rules[elem[i].name].test(elem[i].value)) {
        // вывести сообщение об ошибке
    }
}

let form = document.forms.someForm;
let formValidator = new FormValidator(form);
/login/.test(fieldValue);
formValidator.addRules({
    rules: {
        login: /login/,
        pwd: /pwd/
    },
    messages: {
        login: "Сообщение для поля login",
        pwd: "Сообщения для поля pwd"
    }
});
formValidator.validate();
