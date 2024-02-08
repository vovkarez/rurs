function sel(event) {
    event.preventDefault();
    let country = document.getElementById("selcountry").value;
    let time = document.getElementById("selecttime").value;
    
    let formData = new FormData();
    formData.append("selcountry", country);
    formData.append("selecttime", time);

    fetch("script/dinner.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
      
           displayOrder(data);
    })
    .catch(error => {
        console.error("Ошибка при отправке данных:", error);
    });


    function displayOrder(orders) {

        outputContainer = document.querySelector(".order");
        outputContainer.innerHTML = "";
      
   
        orders.forEach(order => {
            let orderElement = document.createElement("div");
            orderElement.className = "block";
            orderElement.innerHTML = `<p>название:${order.name}</p><p>рецепт:${order.prescription}</p>
            <button class="try" value="${order.id_product}" onclick="sav(event)">сохранить</button>
            <p>`;
            outputContainer.appendChild(orderElement);
          
        });
      }   
    }


    
setTimeout(()=>{
    btn_up = document.querySelectorAll('.try');
  
    for(let i = 0; i<btn_up.length; i++){

                btn_up[i].addEventListener('click', sav)
               
            }
       },100)


function sav(event) {
    event.preventDefault();

    let clickName=event.target.value;

var formData = new FormData();
formData.append("id",clickName);
    
fetch("script/scav.php",{
    method: "POST",
    body:formData
})
.then(response=>response.json())
.then(data=>{
   if(data.success){
    alert(data.message);
    location.href="index.php";
   }else
    {
        alert(success.message);
    }
})
.catch(error=>{
console.error(error);
});

}