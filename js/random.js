  
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

// const static_polls_1 = [
//   [
//     question: 'Are you gay?',
//     answer: ['yes', 'no', 'yes but no', 'no but yes']
//   ],
//   [
//     question: 'Are you les?',
//     answer: ['yes', 'no', 'yes but no', 'no but yes']
//   ]
// ]
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
  
  function exec() {
    for (var i = 0; i < init.length; i++) {
      if (this.innerHTML = init[i][0]){
        console.log(this.innerHTML);
        localStorage.setItem("array",JSON.stringify(init[i]));
      }
    }
  }
  
  
  // exec();
  let question = document.getElementById("poll-question")
  let answer = document.getElementsByClassName("poll-answer")
  var pollData = JSON.parse(localStorage.getItem("data")); 
  document.addEventListener("DOMContentLoaded", function () {
    let poll = {}
    if (!pollData) {
      poll = static_polls[Math.floor(Math.random() * static_polls.length)]

    } else {
      let answer = pollData.toSpliced(0, 1)
      poll = {
        question: pollData[0],
        answer: answer
      }
    }
    question.innerHTML = poll.question;
    for (let [key, value] of Object.entries(answer)) {
      value.innerHTML = poll.answer[key]
    }

  })

  
  // let where = document.getElementsByClassName("ttt");
  // document.addEventListener("DOMContentLoaded",function(){
  //   for(let i= 0; i<init.length; i++) {
  //     let txt = document.createTextNode(`${init[i][0]}`);
  //     where[i].appendChild(txt);
  //   }
  
  // })
  
  // let llink = document.querySelectorAll('.display-2.text-center');
  