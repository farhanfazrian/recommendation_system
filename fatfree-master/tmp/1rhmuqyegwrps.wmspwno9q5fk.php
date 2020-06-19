  <div class="carousel_top_header row m0">
    <div class="container">
      <div class="carousel_top_h_inner">
        <div class="float-md-left">
          <div class="top_header_left">
            <div class="selector">
              <select class="language_drop" name="countries" id="countries" style="width:300px;">
                <option value='yt' data-image="../../ui/images/icon/flag-1.png" data-imagecss="flag yt" data-title="English">INA</option>
                  <!--<option value='yu' data-image="../../ui/images/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                  <option value='yt' data-image="../../ui/images/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                  <option value='yu' data-image="../../ui/images/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>-->
                </select>
              </div>
              <select class="selectpicker usd_select">
                <option>IDR</option>
              </select>
            </div>
          </div>
          <div class="float-md-right">
            <div class="top_header_middle">
              <a href="#"><h6> Hai <span> <?= $pgn['namaPengguna'] ?></span></h6></a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel_menu_inner">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img src="../../ui/images/logo.png" alt="" height="100px" width="200px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
               <li class="nav-item"><a class="nav-link" href="/Admin">Home</a></li>
              <!--<li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                </ul>
              </li>-->
              <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  List Products <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="/category_admin/1">Gitar Listrik</a></li>
                  <li class="nav-item"> <a href="/category_admin/2">Gitar Akustik</a></li>
                  <li class="nav-item"> <a href="/category_admin/6">Efek</a></li>
                  <li class="nav-item"><a href="/category_admin/3">Pick</a></li>
                  <li class="nav-item"> <a href="/category_admin/5">Strap</a></li>
                  <li class="nav-item">  <a href="/category_admin/4">Senar</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
               <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Modify <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="/insert">Insert</a></li>
                  <li class="nav-item"> <a href="/update">Update</a></li>
                  <li class="nav-item"> <a href="/delete">Delete</a></li>	
                </ul>
              </li>
            </ul>
            <form>
              <ul class="navbar-nav justify-content-end">    
                <?php if ($PARAMS['category']): ?>      
                  <div class="input-group" style="padding-right: 10px;">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="pencarian">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit"><i class="icon-magnifier"></i></button>
                    </span>

                  </div>
                <?php endif; ?>
                <!--<li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>-->
                <li class="logout_icon"><a href="\keluar"><i class="fa fa-sign-out"></i></a></li>
                <!--<li class="cart_cart"><a href="\Shopping"><i class="icon-handbag icons"></i></a></li>-->
              </ul>
            </form>
          </div>
        </nav>
      </div>
    </div>