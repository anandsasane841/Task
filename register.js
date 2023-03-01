
function submitForm(event) {
  event.preventDefault();
  var name = document.getElementById("name").value;
  var last = document.getElementById("last").value;
  var date = document.getElementById("date").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var password = document.getElementById("password").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "register.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send("name=" + name + "&last=" + last +"&date="+date +"&email="+email+"&phone="+phone+ "&password=" + password);
}


