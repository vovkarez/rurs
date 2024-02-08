function into(event) {
    event.preventDefault();
    let name = document.getElementById("name").value;
    let pass = document.getElementById("pass").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let span = document.querySelector(".error");
    let formData = new FormData();
    formData.append("name", name);
    formData.append("pass", pass);
    formData.append("phone", phone);
    formData.append("email", email);

    if (name === "" || pass === "" || phone === "" || email === "") {
        span.innerHTML = "не все поля введены";


    } else {
        fetch("script/regist.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.href = "auth.php";
                } else {
                    span.innerHTML(success.message);
                }
            })
            .catch(error => {
                console.error(error);
            });
    };



}

