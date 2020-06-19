<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {margin:0;}

  .topnav {
    overflow: hidden;
    background-color: #d05b5b;
    padding-right: 600px;
    min-width: 700px;
  }
  .topnav button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
    background-color: #d05b5b;
    padding-bottom: 0px;
    margin-top:70px;
    padding-top: 0px;
    float: right;
    color: #f2f2f2;
    text-align: middle;
    text-decoration: none;
    font-size: 17px;

  }  
  .topnav a {
    float: right;
    color: #f2f2f2;
    text-align: middle;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    padding-bottom: 0px;
    padding-top: 70px;
  }
  input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }
  button{
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15%; /* 5% from the top, 15% from the bottom and centered */
    max-width: 500px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }
  .isiModalLogin button{
    padding: 14px 20px;
    margin: 8px 0;
    width: 100%;
  }
  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }
  .isiModalLogin {
    padding: 10px;
  }
  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */

</style>
</head>
<body>

  <div class="topnav">
   <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
   <div id="id01" class="modal">
    <form class="modal-content animate" action="">
      <div class="isiModalLogin">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email"  name="emailPengguna" id="inputEmail" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="inputPassword" required>
        
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me

        </label>
      </div>
    </form>
  </div>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<a href="#about">About</a>
<a href="#contact">Contact</a>
<a href="#news">News</a>
<a class="active" href="#home">Home</a>
</div>
</body>
</html>
