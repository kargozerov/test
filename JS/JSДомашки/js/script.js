console.log('проверка');

//добавление коментария добавление коментария добавление коментариядобавление коментария
console.log('Домашка про коментарий');
let elem = document.getElementById("button"); 
elem.addEventListener("click", addComment); 

function addComment () {
	let comentValue = document.getElementById("newComment").value; //значение textarea (сам коментарий)
	if (!comentValue){
		console.log("нет коментария");
		return;
	}let comment = document.createElement("p");
		comment.innerText = comentValue;
        comment.classList.add ("commentP");
        let fieldset = document.getElementById("comFieldset");
        let div = document.createElement("div");
        div.classList.add("commentDiv");
        let data = new Date();
        let ComDate = document.createElement("p");
        ComDate.classList.add("ComDate");
        ComDate.innerText = data;
        let comName = document.createElement("p");
        comName.classList.add("comName");
        comName.innerText = "By Name";
        let comAva = document.createElement("img");
        comAva.setAttribute("scr", "img/ava.jpg"); //картинка ава
        fieldset.insertBefore(div, comFieldset.firstChild); // <fieldset id="comFieldset"> <div class="commentDiv"> </div></fieldset> див будет всегда сверту firstChild
        div.appendChild(comAva);
        div.appendChild(comName);
        div.appendChild(ComDate);
        div.appendChild(comment);
}




