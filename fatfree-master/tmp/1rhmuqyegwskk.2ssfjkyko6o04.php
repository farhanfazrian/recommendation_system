
<style>

.sidenav {
    width: 200px;
    position: fixed;        
    background:  #d05b5b;
    overflow-x: hidden;
    padding: 50px 0;

}

.sidenav button {
    padding: 6px;
    text-decoration: none;
    font-size: 17px;
    color: white;
    background-color: #b45d5d;
    display: block;
    border:none;
    margin-left: 10px;

}

.sidenav button:focus {
    outline: none;
    border:none;
}

.main {
    margin-left: 140px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
#myDIV {
    width: 100%;
    padding: 5px 0;
    text-align: center;
    color:white;

    display: none;
}
.slidecontainer {

    margin-top: 0px;
    width: 100%;
    padding-left:0px;
}

.slider {
    -webkit-appearance: none;
    width: 95%;
    height: 25px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;

}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
    margin-left: x;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}

</style>
<div class="sidenav">
  <button onclick="myFunction()">Filter</button>
  <div id="myDIV">
    <div class="slidecontainer">
      <p>Price</p>
      <form>

          <input type="range" min="100000" max="50000000" value="1000000" class="slider" id="sliderMin" step="100000" name="batasMin">
          <input type="range" min="100000" max="50000000" value="1000000" class="slider" id="sliderMax" step="100000" name="batasMax">
          <p> From Rp  <span id="nilaiMin"></span></p>
          <p> To Rp  <span id="nilaiMax"></span></p>
          <input type="text" placeholder="Search" name="search" required>
          <button type="submit">submit</button>
      </form>
  </div>
</div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");

        if (x.style.display === 'block') {
            x.style.display = 'none';
        } else {
            x.style.display = 'block';
        }
    }
    var sliderMax = document.getElementById("sliderMax");
    var outputMax = document.getElementById("nilaiMax");
    outputMax.innerHTML = sliderMax.value;

    var sliderMin = document.getElementById("sliderMin");
    var outputMin = document.getElementById("nilaiMin");
    outputMin.innerHTML = sliderMin.value;

    sliderMax.oninput = function() {
        outputMax.innerHTML = this.value;
    }
    sliderMin.oninput = function() {
        outputMin.innerHTML = this.value;
    }
</script>



