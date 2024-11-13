// const username = document.querySelector('.username');
// const h1 = document.querySelector('.head1');
// console.log(username);

// function border(){
//    username.classList.add('noborder')
// }

// username.addEventListener('focus',border);


const hiding = document.querySelector('.about');


function unhide(){
   const about1 =document.querySelector('.about1');
   about1.style.visibility = 'visible';
   about1.classList.add('slideinnleft');
   const about2 = document.querySelector('.about2');
   about2.style.visibility = 'visible';
   about2.classList.add('slideinnright'); 


}

hiding.addEventListener('mouseover',unhide);

// making the pictures bounce when mouse over
function bounce(){
   const picture1 = document.querySelector('.picture1');
   picture1.classList.add('bouncer');
}

const picture1 = document.querySelector('.picture1');
picture1.addEventListener('mouseover',bounce);
console.log(picture1);


//making an array to contain three images
const images = ['images/8.jpg','image2.jpg','image3.jpg']

function bchange(){
   const bg = document.querySelector('.maincontainer');
   let value = Math.ceil(Math.random()* 10);

   let value2 = iamges[value];
   bg.style.backgroundImage = "url(value2)"
}
setInterval(bchange,5000);

