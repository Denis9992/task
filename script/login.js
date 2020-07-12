
var form = document.getElementById('form');

form.addEventListener('submit',async (e)=>{
  e.preventDefault();
  let response = await fetch('./config/log.php',{
    method: 'POST',
    body: new FormData(form)
  });
  var result = await response.json(); 
  console.log(result)
  if(result.a == true){
    location.reload()
  }else{
      alert('Неверный логин или пароль.')
  }
})