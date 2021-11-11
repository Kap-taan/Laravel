// Number Animation

let client = parseInt(document.querySelector('#client').count.value);
let topics = parseInt(document.querySelector('#client').countT.value);

console.log(client);
console.log(topics);

let temp = 0;
let temp2 = 0;

  const timeOut = setInterval(() => {
    numClients.innerText = temp;
    if(temp === client) {
      clearInterval(timeOut);
    }
    temp++;
  }, 10);

  const timeOut2 = setInterval(() => {
    
    numTopics.innerText = temp2;
    if(temp2 === topics) {
      clearInterval(timeOut2);
    }
    temp2++;
  }, 10);

  