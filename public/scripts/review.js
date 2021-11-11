const reviewImg = document.querySelector('.reviewImg');
const nameR = document.querySelector('.name');
const profession = document.querySelector('.profession');
const revieew = document.querySelector('.revieew');
const btn = document.querySelector('.btn');



const change = () => {

  console.log(info);

  nameR.innerText = info[count].title;
  profession.innerText = info[count].email;
  revieew.innerText = info[count].desc;
  reviewImg.src = info[count].img;

}

let info = [];
let count;
let total = 0;

db.collection('reviews').get().then(data => {
  
  data.forEach(doc => {
    info.push(doc.data());
    total++;
  });

  console.log(info);
  count = 0;
  change();

  setInterval(() => {

    console.log(count);
    count++;
    if(count > total) {
      count = 0;
    }
    change();

  }, 5000);

});




btn.addEventListener('click', () => {

  console.log(count);
  count++;
  if(count > total) {
    count = 0;
  }
  change();

})