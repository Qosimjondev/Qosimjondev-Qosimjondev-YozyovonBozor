  <?php
        use yii\helpers\Url;
  ?>
  
  <!--================ Start Header Menu Area =================--> 
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">

              <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/index'])?>">Bosh sahifa</a></li>

              <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/index'])?>">Home</a></li>

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Do'kon</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Do'kon toifasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Blog tafsilotlari</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Mahsulotlarni tekshirish</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Tasdiqlash</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Xarid savati</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/blog'])?>">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Blog tafsilotlari</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Sahifa</a>
                <ul class="dropdown-menu">

                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/login'])?>">Kirish</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Ro'hatdan o'tish</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Kuzatuv</a></li>

                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/login'])?>">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/register'])?>">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/#'])?>">Tracking</a></li>
                </ul>
              </li>

              <li class="nav-item active"><a class="nav-link" href="<?=Url::to(['site/contact'])?>">Aloqa</a></li>

              <li class="nav-item active"><a class="nav-link" href="<?=Url::to(['site/contact'])?>">Contact</a></li>

            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Hozir xarid qilish</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

