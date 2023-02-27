
function showhide(id) {
   var e = document.getElementById(id);
   e.style.display = (e.style.display == 'block') ? 'none' : 'block';
}

 
 function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

}
function myFunctionn() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheckEdit");
  var prevoius_check_box = document.getElementById("myCheckEdit");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

}
function myFun() 
{
  // Get the checkbox
  var checkBox = document.getElementById("FriedCoffee");
  // Get the output text
  var text = document.getElementById("Fried");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

}
var i = 0;
function delete_confirm()
{

  {if(confirm("Are You sure You Want To Delete This Row of Data")){}else{return false;}}
  
}function move() {
  
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width + "%";
        elem.innerHTML = sleep(1);
      }
    }
  }
}