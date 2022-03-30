var card = document.getElementById("card");
var cvv = document.getElementById("cvv");
// var submit = document.querySelector("form");
// document.getElementById("orderpopup").style.display = "none";
// submit.addEventListener("submit", orderplcd);
// function orderplcd(e) {
//   e.preventDefault();
//   if (card.value.length == 16 && cvv.value.length == 3) {
//     // document.getElementById("orderpopup").style.display = "block";
//     return true;
//   } else {
//     alert("Error. Check Card number or CVV. Card number should have 16 digits and CVV should have 3");
//   }
// }

function orderplcd() {
  // e.preventDefault();
  var card = document.getElementById("card");
  var cvv = document.getElementById("cvv");
  if (card.value.length == 16 && cvv.value.length == 3) {
    // document.getElementById("orderpopup").style.display = "block";
    return true;
  } else {
    alert("Error. Check Card number or CVV. Card number should have 16 digits and CVV should have 3");
    return false;
  }
}


