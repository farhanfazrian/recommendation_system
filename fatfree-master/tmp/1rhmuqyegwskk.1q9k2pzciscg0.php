<div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="top_header_left">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="top_header_middle">

            <img src="ui/images/logo.png" alt="">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="top_right_header">
            <ul class="header_social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>

            <ul class="top_right">
              <li class="user"><a href="#" data-toggle="modal" data-target="#id01"><i class="icon-user icons"></i></a></li>



              <!-- Button to Open the Modal -->
                           <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Open modal
                            </button>-->

                            <!-- The Modal -->

                            <div class="modal animate" id="id01">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Login</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-content">
                                    <form class="modal-content" method="POST" action="\authenticate" >
                                      <div class="isiModalLogin">
                                        <label for="email"><p>Email</p></label>
                                        <input type="email" placeholder="Enter Email"  name="emailPengguna" id="inputEmail" required>
                                        <label for="psw"><p>Password</p></label>
                                        <input type="password" placeholder="Enter Password" name="password" id="inputPassword" required>
                                        <div style="text-align: center;">
                                          <button type="submit">Login</button>
                                        </div>
                                      </div>
                                      <center>
                                        <label>
                                          <p>Tidak punya akun ? <a href="#" data-toggle="modal" data-target="#id02" id="nextSignUp0" data-dismiss = "modal">Sign up </a></a> </p>
                                        </label></center>
                                      </form>
                                    </div>

                                    <!-- Modal footer -->
                                  </div>
                                </div>
                              </div>

                              <!-- Modal Sign up -->

                              <div id="id02" class="modalSignUp modal">
                                <form class="modal-content animate" method="POST" action="\register" >
                                  <div class="isiSignUp">   
                                    <div class="modal-header">
                                      <h4 class="modal-title">Sign up</h4>

                                    </div>
                                    <label for="email"><b>New Email</b></label>
                                    <input type="email" placeholder="Enter New Email" name="emailBaru" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter New Password" name="passwordBaru" required>

                                    <label for="name"><b>Full Name</b></label>
                                    <input type="text" placeholder="Full Name" name="namaBaru" required>

                                    <label for="Address"><b>Address</b></label>
                                    <input type="text" placeholder="Address" name="alamatBaru" required>

                                    <label for="telpon"><b>Phone</b></label>
                                    <input type="text" placeholder="Phone" name="teleponBaru" required>

                                    <button type=button class="buttonNext" id="nextSignUp" style="margin-top: 20px;" data-toggle="modal" data-target="#id03" id="nextSignUp1" data-dismiss = "modal" disabled>Next</button>

                                  </div>

                                </div>
                                <div id="id03" class="modal">
                                  <div class="modal-content animate"  >
                                    <div class="modal-header">
                                      <h4 class="modal-title">Pilih gitar yang anda sukai</h4>

                                    </div>
                                    <div class="checkBoxLuar" id="checkbox1">   

                                      <div class="checkbox">
                                        <p><input type="checkbox" id="isi1" value="5" name="satu">CORT AD-810-OP ACOUSTIC GUITAR</p>
                                        <div class="gambarpilihan">
                                          <img src="..\..\ui\images\Acoustic_Gitar\ad810e.jpg"   alt="Northern Lights" width="175" height="175">
                                        </div>
                                      </div>
                                      <div class="checkbox"> 
                                        <p><input type="checkbox" id="isi2"  value="1" name="dua">Epiphone E/Guitar G-400 PRO-EB</p>
                                        <div class="gambarpilihan">
                                          <img src="..\..\ui\images\Elektrik_Guitar\epiphone-eguitar-g-400-pro-eb.jpg" alt="Northern Lights" width="175" height="175"> 
                                        </div>
                                      </div>
                                      <div class="checkbox">
                                        <p><input type="checkbox" id="isi3" value="4"  name="tiga" >CORT CLASSIC TC-SBN ELECTRIC GUITAR</p>
                                        <div class="gambarpilihan">
                                          <img src="..\..\ui\images\Elektrik_Guitar\classic-tc_sbn_.png"   alt="Northern Lights" width="175" height="175"> 
                                        </div>
                                      </div>

                                      <button type=button class="buttonNext" id="nextSignUp2" disabled data-toggle="modal" data-target="#id04" id="nextSignUp1" data-dismiss = "modal">Next</button>
                                      <button type=button class="buttonNext" id="prevSignUp2" data-toggle="modal" data-target="#id02" id="nextSignUp1" data-dismiss = "modal">Prev</button>
                                    </div>

                                  </div>
                                </div>
                                <div id="id04" class="modal">
                                  <div class="modal-content animate" >
                                    <div class="modal-header">
                                      <h4 class="modal-title">Pilih efek gitar yang anda sukai</h4>

                                    </div>
                                    <div class="checkBoxLuar" id="checkbox2">   

                                      <div class="checkbox">
                                        <p><input type="checkbox" value="22"  name="empat">ELECTRO HARMONIX LUMBERJACK LOGARRITHMIC</p>
                                        <div class="gambarpilihan">
                                          <img src="..\..\ui\images\Efek\lumberjack.jpg" alt="Northern Lights" width="175" height="175">
                                        </div>
                                      </div>
                                      <div class="checkbox">
                                        <p><input type="checkbox" value="24"  name="lima">ELECTRO HARMONIX POCKET METAL MUFF</p>
                                        <div class="gambarpilihan">
                                          <img src="..\..\ui\images\Efek\pocket-metal-muff.jpg"   alt="Northern Lights" width="175" height="175">
                                        </div>
                                      </div>
                                      <div class="checkbox">
                                        <p><input type="checkbox" value="25"  name="enam" >ELECTRO HARMONIX SUPEREGO SYNTH ENGINE</p>
                                        <div class="gambarpilihan">
                                          <img src="..\..\ui\images\Efek\ELECTROHARMONIXSUPEREGOSYNTHENGINE.jpg"  alt="Northern Lights" width="175" height="175"> 
                                        </div>
                                      </div>
                                    </div>
                                    <button type=button class="buttonNext" id="nextSignUp3" data-toggle="modal" data-target="#id05" id="nextSignUp1" data-dismiss = "modal" disabled>Next</button>
                                    <button type=button class="buttonNext" id="prevSignUp3" data-toggle="modal" data-target="#id03" id="nextSignUp1" data-dismiss = "modal">Prev</button>
                                  </div>
                                </div>

                                <div id="id05" class="modal">
                                  <div class="modal-content animate" >
                                    <div class="modal-header">
                                      <h4 class="modal-title">Seberapa tertarik anda dengan aksesoris ini  ? </h4>

                                    </div>
                                    <div class="checkBoxLuar" id="checkbox3">   
                                      <div class="checkbox">
                                        <input type="text" class="inputIdProduk" name="Epiphone" value="19" readonly style="display: none">
                                        <p>LOCKIT MYTHICAL SWORDS GUITAR STRAP</p>
                                        <div class="gambarpilihan" id="gambarSlider">
                                          <img src="..\..\ui\images\Strap\34-bm4-mythicalswords.jpg" alt="Northern Lights" width="175" height="175">
                                        </div>

                                        <input type="range" min="0" max="5" class="slider" id='19' name="inputRating" value="0" style="margin-left: 50px;" >

                                        <p style="margin-left: 50px;margin-top: 5px;">Rating: <span id="nilai"></span></p> 
                                        <input  class="inputRating" type="text" placeholder="Enter Review" name="review" style="display: none" >

                                      </div>

                                    </div>
                                    <button type="submit" class="buttonNext" >Sign Up</button>
                                    <button type=button class="buttonNext" id="prevSignUp4" data-toggle="modal" data-target="#id04" id="nextSignUp1" data-dismiss = "modal">Prev</button>
                                  </div>
                                </div>
                              </form>



                              <li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                              <li class="h_price">
                                <select class="selectpicker">
                                  <option>$0.00</option>
                                  <option>$0.00</option>
                                  <option>$0.00</option>
                                </select>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>