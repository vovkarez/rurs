
function go(event) {
    event.preventDefault();
    let data = document.getElementById("data").value;
    let span=document.querySelector(".error");
    
    let formData = new FormData();
    formData.append("data", data);
  
    fetch("script/rewie.php",{
        method: "POST",
        body:formData
})
    .then(response=>response.json())
    .then(data=>{
       if(data.success){
        alert(data.message);
        location.href="user.php";
       }else
        {
            alert(success.message);
            span.innerHTML(success.message);
        }
    })
    .catch(error=>{
   console.error(error);
    });
};

