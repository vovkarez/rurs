function auto(event) {
    event.preventDefault();
    let  name=document.getElementById("nameaut").value;
    let  pass=document.getElementById("passaut").value;
  let span=document.querySelector(".error");


  let formData = new FormData();
    formData.append("login", name);
    formData.append("pass", pass);

    fetch("script/autt.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log("Вход успешен." + data.message);
            
            localStorage.setItem('id_user', data.messageId_user)
           
          
            location.href = "user.php";
        
        } else {
            console.log("Ошибка входа: " + data.message);
            span.innerHTML = data.message;
        }
    })
    .catch(error => {
        
        console.error("Ошибка при отправке данных:", error);
    });
};




