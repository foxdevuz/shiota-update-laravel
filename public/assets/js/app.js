'use strick';
let foods_section = document.getElementById('foods_section');
let food_container_as = document.querySelector(".food_container_as");
window.addEventListener('load', () => {
    fetch("./beckend/food.php?action=getFoods")
        .then((res) => res.json())
        .then((data) => {
            let i = 0;
            let arr = data.result;
            arr.forEach(element => {
                i ++;
                if(i < 4){
                    food_container_as.innerHTML += `
                    <div data-aos="fade-up" class="food_card">
                        <div class="food_image">
                            <img src="./assets/uploads/${element.food_image}" alt="Grill rasmi">
                        </div>
                        <div class="info-food">
                            <div class="name_food">
                            ${element.food_name}
                            </div>
                            <div class="desc_food">
                            ${element.food_desc}
                            </div>
                            <div class="footer_food">
                                <a href="./order/orderfood.html?id=${element.food_id}" class="order_food"><i class="fa-solid fa-basket-shopping"></i> Buyurtyma qilish</a>
                            </div>
                        </div>
                        <div class="food-dignity"><h5>Narxi: ${element.food_cost} so'm</h5></div>
                    </div>
                    `
                }
            });
        });
})

// send message to user with telegra
let sendMessage = document.querySelector("#sendMessage");
let send_text_btn = document.querySelector("#send_text");

send_text_btn.addEventListener('click', () => {
    event.preventDefault();
    console.log(12);
    // take input values
    let name = document.getElementById("name");
    let surname = document.getElementById("surname");
    let phone = document.getElementById("phone");
    let text = document.getElementById("text_");
    // check inputs value
    if (name.value != "" && surname.value != "" && phone.value != "" && text.value != "") {
        let req = new XMLHttpRequest();
        req.open("POST", "./beckend/sendMessage.php", true);
        req.addEventListener('load', () => {
            alert("Xabar adminlarga yuborildi!!!")
            location.reload();
        })
        let formdata = new FormData(sendMessage)
        req.send(formdata);
    } else {
        alert("Barcha maydonlarni to'ldiring!");
    }
})