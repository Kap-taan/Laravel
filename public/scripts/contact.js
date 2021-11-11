

const form = document.querySelector('form');
const send = document.querySelector('.send');
form.addEventListener('submit', (e) => {

  e.preventDefault();
  send.style.display = 'none';
  const email = form.email.value;
  const title = form.nameV.value;
  const desc = form.message.value;

  const ref = firebase.storage().ref();
      const file = document.querySelector("#photo").files[0];
      const name1 = file.name;
      const metadata = {
        contentType: file.type
      };
      const task = ref.child(name1).put(file, metadata);
      task
        .then(snapshot => snapshot.ref.getDownloadURL())
        .then(url => {
          console.log(url);
          const review = {
            email, title, desc, img: url
          }
          db.collection('reviews').add(review).then(() => {
            alert('Reviewed Added Successfully :)');
            send.style.display = 'initial';
            form.reset();
          });
        })
        .catch(console.error);
    




})
 