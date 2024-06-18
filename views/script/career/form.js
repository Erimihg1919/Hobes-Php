// for cv button label text change
const uploadcv = document.getElementById('uploadcv');
const cvchosenlavel=document.querySelector('label[for="uploadcv"]')
const cvchosen = document.querySelector('label[for="uploadcv"]>span')


uploadcv.addEventListener('change', function(e){
    // console.log(e.target.files[0].name)
  cvchosen.textContent = e.target.files[0].name
})


const uploadcoverletter = document.getElementById('uploadcoverletter');
const coverchosen = document.querySelector('label[for="uploadcoverletter"]>span')


uploadcoverletter.addEventListener('change', function(e){
  coverchosen.textContent = e.target.files[0].name
})

// for input button enter click
const inputbox=document.querySelectorAll('input');
const selectbox=document.querySelector('select');
inputbox[0].addEventListener('keydown',(e)=>{
  if(e.key=="Enter"){
    e.preventDefault()
    inputbox[1].focus()
  }
})

inputbox[1].addEventListener('keydown',(e)=>{
  if(e.key=="Enter"){
    e.preventDefault()
    selectbox.focus()
  }
})










