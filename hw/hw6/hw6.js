let newP = document.createElement("p");
newP.classList.add('author');
let body = document.body;
body.appendChild(newP);
newP.textContent = 'Христо Ботев';

let newB1 = document.createElement("div");
newB1.classList.add('book');
body.appendChild(newB1);
newB1.textContent = 'Хаджи Димитър';

let newB2 = document.createElement("div");
newB2.classList.add('book');
body.appendChild(newB2);
newB2.textContent = 'Борба';

function newBook() {
	newB1.textContent = 'Нова Книга';
}

