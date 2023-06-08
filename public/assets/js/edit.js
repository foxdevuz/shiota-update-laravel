"use strick";
const current_url = window.location.href;
let params = (new URL(current_url)).searchParams;
let getDo = params.get('id');
// variables for inputs
let edit_name = document.getElementById('edit_name');
let edit_desc = document.getElementById('edit_desc');
let edit_cost = document.getElementById('edit_cost');
if(getDo){
    let id= getDo;
    // check id
    fetch(`./edit.php?id=${id}`).then((res)=>res.json()).then((data)=>{
        edit_name.value = data.res[0].food_name;
        edit_desc.value = data.res[0].food_desc;
        edit_cost.value = data.res[0].food_cost;
    })
}
//send updates
let formdata = document.getElementById("form-data");
let save_edit = document.getElementById("save_edit");
save_edit.addEventListener("click", ()=>{
    event.preventDefault();
    let request = new XMLHttpRequest();
    request.open("POST", `./edit.php?id_change=${getDo}`,true);
    request.addEventListener('load', ()=>{
        let data = JSON.parse(request.responseText);
        if(data.message == "Success"){
            alert("O'zgartirish amalga oshirildi");
            location.reload();
        } else {
            alert("Texnik xatolik, keyinroq qayta urinib ko'ring yoki dasturchi bilan bog'laning +998 90 750 71 05")
        }
    })  
    let formdata_ = new FormData(formdata);
    request.send(formdata_)
})