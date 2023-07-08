let more = document.querySelector("#more");
let submit = document.querySelector(".btn.submit");
var i = 4;
let data = [];

document.addEventListener("DOMContentLoaded", function(e) {

	more.addEventListener("click", function (e) {
		e.preventDefault();
	
		let newinput = document.createElement("div");
		newinput.classList.add("form-group");
		i += 1;
		newinput.innerHTML =
			"<input type='text' class='form-control' id='answer" +
			i +
			"'>";
		console.log("now u have " + i + " option");
		let where = document.querySelector("div.poll-answers");
		where.append(newinput);
	});
	

	//collect input's value, push into array
	//array[0] is the poll's question

	const flipPoll = new MutationObserver(entries => {
		console.log(entries)
	})

	flipPoll.observe(submit, { childList: true })
	submit.addEventListener("click", function (e) {
		e.preventDefault();
		$(".container-form").toggleClass('hover')
		// document.getElementById("form").classList.add("form-finished")
		// $(document).on("click", ".flip-container", function () {
		// 	$(this).toggleClass('hover');
		// });
		// window.location.href = "slideshow.html";
		// for (var j = 1; j <= i; j++) {
		// 	data.push(document.querySelector("#answer" + j).value);
		// }
		// localStorage.setItem("array", JSON.stringify(array));

		answers = document.getElementsByClassName('answer-card');
		// questionDisplay = document.querySelector('#question-display');

		// setTimeout(function(){
		// 	for (let k in answers){
		// 		if (k == parseInt(k, 10)) {
		// 			k = parseInt(k, 10)
		// 			answers[k].innerHTML = document.querySelector("#answer" + (k + 1)).value;
		// 			answers[k].style.visibility = 'visible';
		// 		};
		// 	}
		// 	console.log(questionDisplay)
		// 	questionDisplay.textContent = document.querySelector('#question').value;
		// }, 2000);

		// let targetNode = document.querySelector("")
	});

	let resetBtn = document.getElementById("reset");

	resetBtn.addEventListener("click", function(e) {
		console.log("reset Clicked")
	})


	let flip_back_btn = document.querySelector(".btn.flip-back");
	flip_back_btn.addEventListener("click", function(e) {
		$(".container-form").toggleClass('hover')
	})
})


function presentPoll() {
    location.assign("random");

	// for (let k in answers){
	// 	if (k == parseInt(k, 10)) {
	// 		k = parseInt(k, 10)
	// 		answers[k].innerHTML = document.querySelector("#answer" + (k + 1)).value;
	// 		answers[k].style.visibility = 'visible';
	// 	};
	// }
	data.push(document.querySelector("#question").value);
	for (var j = 1; j <= i; j++) {
		data.push(document.querySelector("#answer" + j).value);
	}
	localStorage.setItem("data", JSON.stringify(data));
}




//basic ultilities may be needed
function fadeIn(el) {
	el.style.display = "initial";
	setTimeout(function () {
		el.style.opacity = "1";
	}, 10);
}

function fadeOut(el) {
	el.style.opacity = "0";
	setTimeout(function () {
		el.style.display = "none";
	}, 10);
}
