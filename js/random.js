  
const static_polls = [
  {
    question: 'Are you gay?',
    answer: ['yes', 'no', 'yes but no', 'no but yes']
  },
  {
    question: 'Are you les?',
    answer: ['yes', 'no', 'yes but no', 'no but yes']
  }
]
  // document.body.style.overflow = "hidden";
  //Get the button:
  // mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  // window.onscroll = function() {scrollFunction()};
  
  // function scrollFunction() {
  //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  //     mybutton.style.display = "block";
  //   } else {
  //     mybutton.style.display = "none";
  //   }
  // }
  
  // When the user clicks on the button, scroll to the top of the document
  // function topFunction() {
  //   document.body.scrollTop = 0; // For Safari
  //   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  // }
  
  // $(document).ready(function () {
  // 	$(".owl-carousel").owlCarousel({
  // 		loop: true,
  // 		margin: 10,
  // 		nav: true,
  // 		responsive: {
  // 			0: {
  // 				items: 1,
  // 			},
  // 			600: {
  // 				items: 3,
  // 			},
  // 			1000: {
  // 				items: 5,
  // 			},
  // 		},
  // 	});
  // });
  
  //init polls in
  
  var polls = [];

  // function getRandomPolls() {
  //   return $.ajax({
  //     type : 'GET', // type of the HTTP request
  //     url : '../pollgenz-php/Handlers/PollHandler.php', // your php file
  //     dataType: "text",
  //     data: {'polls': '2'},
  //     async: false,
  //     success: handleRandomPolls
  //   });
  // }
  
  let questionField = document.getElementById("question");
  let answerFields = [...document.getElementsByClassName("poll-answer")];
  var pollData = JSON.parse(localStorage.getItem("data")); 

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

  let poll = {};
  if (!pollData) {
    poll = polls[Math.floor(Math.random() * polls.length)]
    poll.answer = poll.options.split('||||');

  } else {
    let answer = pollData.toSpliced(0, 1);
    poll = {
      question: pollData[0],
      answer: answer
    }
  }
  questionField.value = poll.question;
  for (let [key, value] of Object.entries(answerFields)) {
    value.innerHTML = poll.answer[key]
  }

const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", ()=>{
    for (let j = 0; j < options.length; j++) {
      if(options[j].classList.contains("selected")){
        options[j].classList.remove("selected");
      }
    }

    options[i].classList.add("selected");
    for (let k = 0; k < options.length; k++) {
      options[k].classList.add("selectall");
    }

    let forVal = options[i].getAttribute("for");
    let selectInput = document.querySelector("#"+forVal);
    let getAtt = selectInput.getAttribute("type");
    if(getAtt == "checkbox"){
      selectInput.setAttribute("type", "radio");
    }else if(selectInput.checked == true){
      options[i].classList.remove("selected");
      selectInput.setAttribute("type", "checkbox");
    }

    let array = [];
    for (let l = 0; l < options.length; l++) {
      if(options[l].classList.contains("selected")){
        array.push(l);
      }
    }
    if(array.length == 0){
      for (let m = 0; m < options.length; m++) {
        options[m].removeAttribute("class");
      }
    }
  });
}
  