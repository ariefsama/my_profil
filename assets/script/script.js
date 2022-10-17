const txtElement = ['Freelancer', 'Programmer', 'Mahasiswa UBSI'];
let count = 0;
let txtIndex = 0;
let currentTxt = 0;
let words = '';

(function ketik(){
  
  if(count == txtElement.length) {
    count = 0
  }

  currentTxt = txtElement[count];

  words = currentTxt.slice(0, ++txtIndex);
  document.querySelector('.efek-ketik').textContent = words;

  if(words.length == currentTxt.length) {
    count++;
    txtIndex = 0;
  } 
  setTimeout(ketik, 300)
})();
