let id=window.localStorage.getItem('id_user');


if(id){
      fetch("script/sv.php")
      .then(response => response.json())
      .then(data => {
         
          displayOrder(data);
      })
      .catch(error => {
          console.error("Ошибка при получении данных:", error);
      });
  }
   


    function displayOrder(sv) {

        outputContainer = document.querySelector(".order");
        outputContainer.innerHTML = "";
      
   
        sv.forEach(sv => {
            let orderElement = document.createElement("div");
            orderElement.className = "block";
            orderElement.innerHTML = `<p>название:${sv.name}</p>
            <p>рецепт:${sv.prescription}</p>
            <p>`;
            outputContainer.appendChild(orderElement);
          
        });
      }  