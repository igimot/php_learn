/**
 * Created by Oleg on 29.11.2016.

 */
function getTypeFromInputs() {

    var cost_car = document.keyup("cost_car").value;
    var initial_fee = document.keyup("initial_fee").value;
   // var quantity = document.getElementById("quantity").value;

    var percent = (initial_fee / cost_car) * 100;

    var div = document.createElement("div");

    div.innerHTML = "<h3>Ваша заявка:<\/h3>\n <p>"+percent+" %</p>"; // Наполняем созданный div содержанием с подстановкой значения price

    document.getElementById("contenCost_car").appendChild(div); // Все вкладывается в <div id=zayavka></div>

    return false;




alert(percent);

}
function timeOutOutputinblock() {
    setTimeout(getTypeFromInputs, 3000);
}
