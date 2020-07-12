var task = document.getElementById('task')

task.addEventListener('click',(e)=>{
    let target = e.target
    let id = target.id
    let clas = target.getAttribute('class')

    if(clas == 'sub'){
        let save = 'save' + id
        let value = document.getElementById(save)
        if(value.value == '' || value.value == '  '){
            alert('Текстовое поле не может быть пусты.')
        }else{
            saved(value.value, id)
        }
    }

    if(target.type == 'checkbox'){
        let stateId = target.id
        let state = document.getElementById(stateId)
        state.onchange = ()=>{
            let NewId = stateId.replace('state', '')
            checked(state.checked, NewId)
        }
    }
})


async function saved(text, id){
    let data = new FormData()
    data.append('text', text)
    data.append('id', id)
    let response = await fetch('./config/save.php',{
        method: 'POST',
        body: data
      });
      var result = await response.json(); 
      console.log(result)
      if(result.a == true){
       location.reload()
      }else{
          if(result.a == 'exit'){
              alert('Авторизуйтесь для редактирования информации.')
              window.location.href ='http://testttts.zzz.com.ua/login.php'
          }
      }
}

async function checked(ch, id){
    let data = new FormData()
    data.append('checked', ch)
    data.append('id', id)
    let response = await fetch('./config/checked.php',{
        method: 'POST',
        body: data
      });
      var result = await response.json(); 
      console.log(result)
      if(result.a == true){
       location.reload()
      }else{
        if(result.a == 'exit'){
            alert('Авторизуйтесь для редактирования информации.')
            window.location.href ='http://testttts.zzz.com.ua/login.php'
        }
    }
}