function prm(event) {
    event.preventDefault();
    let veg=document.getElementById("veget").value;
    let  diab=document.getElementById("diabet").value;
  let que=document.getElementById("query").value;
  let aler=document.getElementById("alerg").value;


    let formData = new FormData();
    formData.append("veget", veg);
    formData.append("diabet",diab);
    formData.append("alerg", aler);
    formData.append("que",que);
    


    fetch("script/parametr.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log("данные занесены." + data.message);
        localStorage.setItem('veget', veg);
        localStorage.setItem('diabet', diab);
        localStorage.setItem('alerg', aler);
        localStorage.setItem('diabet', diab); 
          
            location.href = "user.php";
        
        } else {
            console.log("Ошибка: " + data.message);
            
        }
    })
    .catch(error => {
        
        console.error("Ошибка при отправке данных:", error);
    });

    









}








