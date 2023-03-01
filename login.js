
     /* function submitForm(event) {
        event.preventDefault();
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
       // document.write(email);
       var xhr = new XMLHttpRequest();
        xhr.open("POST", "login.php");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
          }
        };
        xhr.send("email="+email+"&password=" + password);

      }
      */

      function submitForm(event) {
        event.preventDefault(); // prevent the form from submitting normally
      
        // get the email and password values from the input fields
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
      
        // create a new XMLHttpRequest object
        const xhr = new XMLHttpRequest();
      
        // set the request URL and method
        xhr.open("POST", "login.php", true);
      
        // set the request headers
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      
        // define the callback function for when the request completes
        xhr.onload = function () {
          if (xhr.status === 200) {
            // request successful, do something with the response
            console.log(xhr.responseText);
          } else {
            // request error, handle the error
            console.error("Error:", xhr.status);
          }
        };
      
        // send the request with the email and password values as POST parameters
        xhr.send("email=" + email + "&password=" + password);
      }
      
    