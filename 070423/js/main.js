document.getElementById("fio").addEventListener("invalid", check);
let inputs = document.getElementsByClassName("validate");
for (let i = 0; i < inputs.length; i++){
    inputs[i].addEventListener("invalid", check)
};
inputs[i].addEventListener("input", reset);
    function reset(){
        this.classList.remove("error");
    }
console.log("Сообщение!!!");
function check(event){
    this.classList.add("error");
    document.getElementById("error").innerText = "Ошибка при заполнении полей";
    document.getElementById("error").style.display = "block";
    event.preventDefault();  
}
document.getElementById("regform").addEventListener("submit", checkPassword);
function checkPassword(event){
    document.getElementById("error").style.display = "none";
    let password = document.getElementById("error").value;
    let confirm = document.getElementById("confirm").value;
    if(password !=confirm){
        document.getElementById("error").innerText = "Пароли не совпадают";
        document.getElementById("error").style.display = "block";
        event.preventDefault();
    }
    else {
        let flag = document.getElementById("pd").checked;
        if(!flag){
            document.getElementById("error").innerText = "Нет согласия на ПД";
            document.getElementById("error").style.display = "block";
            event.preventDefault();
            checkLogin();
        }
    }
}
async function checkLogin(){
    let data = new FormData();
    let login = document.getElementById("login").value;
    data.append('login', login);
    let response = await fetch('chackLogin.php', {method: "POST", body: data});
    let result = await response.json();
    if(result.status == "error"){
        document.getElementById("error").innerText = result.message;
            document.getElementById("error").style.display = "block";
    }
    else{
        document.getElementById("regform").submit();
    }
}