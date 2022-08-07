let moreBtn = document.querySelector("#more");
let submit = document.querySelector("#submit");
let renewBtn = document.querySelector("#renew");
var i = 2;

let poll_form = document.querySelector("#poll-form");

document.body.style.overflow = "hidden";
moreBtn.addEventListener("click", function(e) {
	e.preventDefault();
	console.log("more clicked");
	let newinput = document.createElement("div");
	newinput.setAttribute("class", "form-group py-4");
	i += 1;
	newinput.innerHTML =
		"<label for='formGroupExampleInput" +
		i +
		"'>Pell " +
		i +
		"</label><input type='text' class='form-control' id='formGroupExampleInput" +
		i +
		"'>";
	console.log("now u have " + i + " pells");
	let where = document.querySelector("form");
	where.append(newinput);

	poll_form.animate({'height': '+=5vh'});
});

renewBtn.addEventListener("click", function(e){
	e.preventDefault();
	
})




//collect input's value, push into array
//array[0] is the poll's question
submit.addEventListener("click", function (e) {
	e.preventDefault();
	window.location.href = "slideshow.php";
	let array = [];
	for (var j = 0; j <= i; j++) {
		array.push(document.querySelector("#formGroupExampleInput" + j).value);
	}
	localStorage.setItem("array", JSON.stringify(array));
});

