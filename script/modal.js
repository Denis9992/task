var modalOpen = document.getElementById('create')


modalOpen.addEventListener('click', () => {
    var modal = document.getElementById('modalWin')
    var back = document.getElementById('backModal')
    var close = document.getElementById('close')

    modal.style.display = 'block'
    back.style.display = 'block'

    back.addEventListener('click', () => {
        modal.style.display = 'none'
        back.style.display = 'none'
    })
    
    close.addEventListener('click', () => {
        modal.style.display = 'none'
        back.style.display = 'none'
    })
})



var form = document.getElementById('form');

form.addEventListener('submit',async (e)=>{
  e.preventDefault();
  let response = await fetch('../config/create.php',{
    method: 'POST',
    body: new FormData(form)
  });
  var result = await response.json(); 
  console.log(result)
  if(result.a == true){
    alert('Задача создана.')
    location.reload()
  }

})
