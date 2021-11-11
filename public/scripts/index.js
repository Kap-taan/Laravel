
console.log('Hello World');

const bar = document.querySelector('.lines');
const navUl = document.querySelector('.navUl');
const navBar = document.querySelector('.nav');
const list = document.querySelector('.nav ul');

// Progress Bar Effect

// const progressBar = document.querySelector('#progress-bar');
const progressBar = document.getElementById('progressbar');
const section = document.querySelector('.scroll');
const numClients = document.querySelector('.num_clients');
const numChapters = document.querySelector('.num_chapters');
const numTopics = document.querySelector('.num_topics');

bar.addEventListener('click', () => {

  console.log('Bar is Clicked');
  navUl.classList.toggle('none');
})

const animateProgressBar = () => {

  let scrollDistance = -section.getBoundingClientRect().top;
  console.log(section.clientHeight);
  let progressWidth = (scrollDistance / (section.getBoundingClientRect().height - 755))  * 100;

  let value = Math.floor(progressWidth);
  progressBar.style.width = value + '%';

}

window.addEventListener('scroll', animateProgressBar);

