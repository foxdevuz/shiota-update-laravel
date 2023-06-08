"use strick";
const current_url = window.location.href;
let params = (new URL(current_url)).searchParams;
let getDo = params.get('id');
// variable for input
let name_food = document.getElementById("name_food");
let food_cost = document.getElementById("food_cost");
// take data from id
fetch(`../admin/edit.php?id=${getDo}`).then((res)=>res.json()).then((data)=>{
    name_food.value = data.res[0].food_name;
    food_cost.value = data.res[0].food_cost;
})
// send message to admin
let send_text = document.getElementById('send_text');
let form_data = document.getElementById('form_data');
send_text.addEventListener("click", ()=>{
    event.preventDefault();
    // taking input values start
    let name = document.getElementById("name")
    let surname = document.getElementById("surname")
    let phone = document.getElementById("phone")
    let name_food = document.getElementById("name_food")
    let food_cost = document.getElementById("food_cost")
    let amount_food = document.getElementById("amount_food")
    let number_visitors = document.getElementById("number_visitors")
    // check input value
    if(name.value != "" && surname.value != "" && phone.value != "" && name_food.value != "" && food_cost.value != "" && amount_food.value != "" && number_visitors.value != ""){
        // taking input values end
        let xml = new XMLHttpRequest();
        xml.open("POST",`../beckend/sendMessage.php?do=order&name_food=${name_food.value}&food_cost=${food_cost.value}&name=${name.value}&surname=${surname.value}&phone=${phone.value}&amount_food=${amount_food.value}&number_visitors=${number_visitors.value}`,true);
        xml.addEventListener('load', ()=>{
            console.log(xml);
            if(xml.status == 200){
                alert("Xabaringiz adminlarga yuborildi, tez oraqa siz bilan bog'lanamiz");
                location.reload();
            } else {
                alert("Teznik xatolik yuzaga keldi, iltimos birozdan so'ng urinib ko'ring");
                location.reload();
            }
        })
        xml.send();
    } else {
        alert("Barcha maydonlarni to'ldiring!!!");
    }
})