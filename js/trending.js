//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
	scrollFunction();
};
let spinner = document.querySelector("#spinner");

// document.addEventListener("DOMContentLoaded",function(){
//   spinner.style.display = "none";
//   setTimeout(function(){
//     spinner.style.display = "block";
//   },3000);
// })
function scrollFunction() {
	if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

$(document).ready(function () {
	$(".owl-carousel").owlCarousel({
		loop: false,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 5,
			},
		},
	});
});
// fetch and display 
var polls = [];

$.ajax({
    type : 'GET', // type of the HTTP request
    url : '../pollgenz-php/Handlers/PollHandler.php', // your php file
    dataType: "text",
    data: {'polls': '2'},
    async: false,
    success : function (data){
      while (data.indexOf('{') > -1) {
        let subs = data.substring(data.indexOf('{'), data.indexOf('}') + 1);
        polls.push(JSON.parse(subs));
        data = data.replace(subs, '');
      }
    }
 });

 let pollTemplate = document.getElementById("poll-card");

 let cardColumns = document.querySelector(".card-columns");

for (const poll of polls) {
	let tempContent = pollTemplate.content.cloneNode(true);
	let titleField = tempContent.querySelector(".card-title");
	titleField.innerHTML = poll.question;
	cardColumns.appendChild(tempContent);
	// console.log(titleField);
	// console.log(tempContent);
}

 