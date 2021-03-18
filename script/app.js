

const url = "http://localhost:8000/config/traitement.php";

// console.log(url);

const messagesbloc = document.querySelector(".nameUser")
// const userConnect = document.querySelector(".message").textContent
// console.log(userConnect,messagesbloc );

function getMessage () {
    fetch(url)
    .then ( response=>response.json())
    .then (data=>{
        console.log(data);
        // messagesbloc.innerHTML = "";
    })
}
getMessage()
// setInterval(getMessage, 500);