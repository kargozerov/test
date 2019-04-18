console.log('Домашка про изменение цвета формы');

let form = document.forms.lesson;

let color = form.elements.color;

for (i=0; i<color.length; i++){
	color[i].addEventListener('click', showColor);

	function showColor () {
		console.log(this);
		form.elements.checkbox_fieldset.style.background = this.value; //   <fieldset name="checkbox_fieldset">
	};
}

console.log("задача про поле формы");
let elem = form.elements.disabledOnOff; // активация поля <label><input type="checkbox" id="disabledOnOff">Отметьте, если указать другую информацию?</label>  <input type="text" name="disable" disabled>
 elem.addEventListener('click', activated); 

function activated () {
	form.elements.disable.disabled = !this.checked;
}
	//if (fotm.elements.disable.hasAttribute('disabled')){

	//}
	//form.elements.disable.removeAttribute('disabled'){

	//}else {
	//	form.elements.disable.setAttribute('disable', 1)
	//}
//}