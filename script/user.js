let ip=window.localStorage.getItem('id_user');


if(ip){
      fetch("script/user.php")
      .then(response => response.json())
      .then(data => {
        
          display(data);
      })
      .catch(error => {
          console.error("Ошибка при получении данных:", error);
      });
  }
   


    function display(ord) {

        output = document.querySelector(".or");
        output.innerHTML = "";
      
   
        ord.forEach(ord => {
            let orderEl = document.createElement("div");
            orderEl.className = "bloc";
            orderEl.innerHTML = `<p>содержание:${ord.content}</p>
            `;
            output.appendChild(orderEl);
          
        });
      }   
    
