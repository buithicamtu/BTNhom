
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea House Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('home/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <!-- Start header -->
        <div id="header">
            <!-- Nav bar -->
            <div class="header__navbar-wrap">
                <div class="grid wide ">
                    
                    <div class="header__navbar hide-on-mobile-and-tablet">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                <img src="{{asset('home/img/header__navbar-logo.webp')}}" alt="" class="header__navbar-img">
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link-left">Hotline:</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link-left header__navbar-link-number">0338455991</a>
                            </li>
                        </ul>
    
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                
                            </li>
                            <li class="header__navbar-item navbar-item-display">
                                <a href="#" class="header__navbar-link-right">
                                    <i class="header__navbar-icon bx bx-search" style="font-weight:600 ;"></i>
                                    Tìm kiếm
                                </a>
                                <div class="header__navbar-search">
                                    <input class="header__navbar-search-input" type="text " placeholder="Tìm kiếm...">
                                    <i class="header__navbar-search-icon bx bx-search" style="font-weight:600 ;"></i>
                                </div>
                            </li>
                            <li class="header__navbar-item navbar-item-display">
                                <a href="" class="header__navbar-link-right ">
                                    <i class="header__navbar-icon bx bxs-user"></i>
                                    Tài Khoản
                                </a>
                                <div class="user__notify">
                                    <ul class="user__notify-list">
                                        <li class="user__notify-item">
                                            <span href="" class="user__notify-link sign-up-show">Đăng ký</span>
                                        </li>
                                        <li class="user__notify-item">
                                            <span href="" class="user__notify-link sign-in-show">Đăng nhập</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header__navbar-item navbar-item-display">
                                <a href="#" class="header__navbar-link-right">
                                    <i class='header__navbar-icon bx bx-shopping-bag'></i>
                                    <span class="header__navbar-icon-quantity">0</span>
                                    Giỏ hàng
                                </a>
                                <div class="header__cart-no-cart">
                                    <div class="header__cart-no-cart-img">
                                        <img src="{{asset('home/img/empty-cart.webp')}}" alt="">
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
            <!-- category -->
            <div class="grid wide">
                <div class="header__category hide-on-mobile-and-tablet">
                    <ul class="header__category-list">
                        <li class="header__category-item">
                            <a href="" class="header__category-link header__category-link--active">Trang chủ</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Giới thiệu</a>
                        </li>
                        
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Sản phẩm
                                <i class='header__category-icon bx bxs-down-arrow' ></i>
                            </a>

                            <ul class="header__category-menu">
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">Cà phê</a>
                                </li>
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">Bánh ngọt</a>
                                </li>
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">Smoothies</a>
                                </li>
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">Trà hoa quả</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                    <div class="header_-category-img">
                        <a href="" class="header__category-link">
                            <img src="./assets/img/logo.webp" alt="">
                        </a>
                    </div>
                    <ul class="header__category-list">
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Tin tức</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Khuyến mãi</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Thực đơn</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- mobile-and-tablet-header -->
            
            <input type="radio" id="checkbox-hidden" name="display-on-mt" hidden>
            <input type="radio" id="checkbox-list-on-mt" name="display-on-mt" hidden >
            <label class="mt__header-overlay" for="checkbox-hidden"></label>
            <div class="mt__header-menu">
                <div class="mt__header-menu-heading">
                    <span href="" class="mt__header-menu-login">Đăng nhập</span>
                    <a href="" class="mt__header-menu-special">/</a>
                    <span href="" class="mt__header-menu-register">Đăng ký</span>
                </div>
                <div class="mt__header-menu-list">
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Trang chủ</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Giới thiệu</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Sản phẩm</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Tin tức</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Thực đơn</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Liên hệ</a>
                    </li>
                </div>
            </div>
            <label class="mt__header-icon" for="checkbox-list-on-mt"><i class='mt__header-icon bx bx-list-ul'></i></label>

            <div class="grid wide">
                <div class="mt__header">
                    <div class="mt__header-item">
                        <div class="mt__header-img">
                            <a href=""><img src="{{asset('home/img/logo_white.webp')}}" alt=""></a>
                        </div>
                        <div class="header__navbar-item navbar-item-display">
                            <a href="#" class="header__navbar-link-right">
                                <i class='header__navbar-icon bx bx-shopping-bag'></i>
                                <span class="header__navbar-icon-quantity">0</span>
                                Giỏ hàng
                            </a>
                            <div class="header__cart-no-cart">
                                <div class="header__cart-no-cart-img">
                                    <img src="{{asset('home/img/empty-cart.webp')}}" alt="">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt__header-search">
                        <input type="text" placeholder="Tìm sản phẩm bạn mong muốn...">
                        <i class="header__navbar-icon bx bx-search" style="font-weight:600 ;"></i>
                    </div>
                </div>
            </div>    

        </div>

        <!-- slider -->
        <div id="slider">
            <img src="{{asset('home/img/slider_1.webp')}}" alt="">
        </div>

        <!-- body -->
        <div id="app__container">
            <div class="body__product-warp">
                <div class="grid wide">
                    <div class="content__header">
                        <div class="content__header-logo">
                            <img src="{{asset('home/img/title_base.webp')}}" alt="">
                        </div>
                        <div class="content__header-title">DANH MỤC SẢN PHẨM</div>
                    </div>
                    <ul class="row body__product-list">
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-1.webp')}}" alt="">
                                <span class="body__product-link-desc">Trà nóng</span>
                            </a>
                        </li>
                        
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-2.webp')}}" alt="">
                                <span class="body__product-link-desc">Trà hoa quả</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-3.webp')}}" alt="">
                                <span class="body__product-link-desc">Smoothies</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-4.webp')}}" alt="">
                                <span class="body__product-link-desc">Bánh ngọt</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-1.webp')}}" alt="">
                                <span class="body__product-link-desc">Danh mục 5</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-1.webp')}}" alt="">
                                <span class="body__product-link-desc">Danh mục 6</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="body__about-wrap">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-6 m-8 body__about">
                            <div class="content__header align-left">
                                <div class="content__header-logo">
                                    <img src="{{asset('home/img/title_base.webp')}}" alt="">
                                </div>
                                <div class="content__header-title">TẠI SAO CHỌN CHÚNG TÔI</div>
                            </div>
                            <div class="body__about-text">Với những nghệ nhân rang tâm huyết và đội ngũ tài năng cùng những câu chuyện trà đầy cảm hứng, ngôi nhà Tea House là không gian dành riêng cho những ai trót yêu say đắm hương vị của những lá trà tuyệt hảo.</div>
                            <ul class="body__about-list">
                                <li class="body__about-item">
                                    <div class="body__about-item-icon">
                                        <img src="{{asset('home/img/about-icon-1.webp')}}" alt="">
                                    </div>
                                    <div class="body__about-item-content">
                                        <div class="body__about-item-head">Giá cả phải chăng</div>
                                        <div class="body__about-item-desc">Cam kết chỉ cung cấp cà phê có nguồn gốc được kiểm soát chất lượng</div>
                                    </div>
                                </li>
                                <li class="body__about-item">
                                    <div class="body__about-item-icon">
                                        <img src="{{asset('home/img/about-icon-2.webp')}}" alt="">
                                    </div>
                                    <div class="body__about-item-content">
                                        <div class="body__about-item-head">Hương vị tuyệt hảo</div>
                                        <div class="body__about-item-desc">Những giọt trà được lựa chọn cẩn thận ngay từ lúc đang ngâm mình trong sương</div>
                                    </div>
                                </li>
                                <li class="body__about-item">
                                    <div class="body__about-item-icon">
                                        <img src="{{asset('home/img/about-icon-3.webp')}}" alt="">
                                    </div>
                                    <div class="body__about-item-content">
                                        <div class="body__about-item-head">Sản phẩm tự nhiên</div>
                                        <div class="body__about-item-desc">Cam kết chỉ cung cấp lá trà có nguồn gốc được kiểm soát chất lượng chặt</div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body__menu-wrap">
                <div class="grid wide">
                    <div class="content__header">
                        <div class="content__header-logo">
                            <img src="{{asset('home/img/title_base.webp')}}" alt="">
                        </div>
                        <div class="content__header-title">MENU HÔM NAY</div>
                    </div>
                    <ul class=" body__menu-nav">
                        <li class="body__menu-nav-item ">
                            <div class="body__menu-nav-link active">Trà nóng</div>
                        </li>
                        <li class="body__menu-nav-item">
                            <div class="body__menu-nav-link">Trà hoa quả</div>
                        </li>
                        <li class="body__menu-nav-item">
                            <div class="body__menu-nav-link">Smoothies</div>
                        </li>
                        <li class="body__menu-nav-item">
                            <div class="body__menu-nav-link">Bánh ngọt</div>
                        </li>
                    </ul>
                    <ul class="row body__menu-list active">
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">
                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ PHÚC BỒN TỬ</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">
                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ VẢI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tracamdao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">


                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ CAM ĐÀO</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tratao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ TÁO</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travietquat.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ VIỆT QUẤT</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tradautay.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ DÂU TÂY</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/traxoai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ XOÀI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/trachanh.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ CHANH</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="row body__menu-list">
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tratao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ TÁO</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/trachanh.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ CHANH</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/phucbontu.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ PHÚC BỒN TỬ</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ VẢI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tracamdao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ CAM ĐÀO</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        
                        
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tradautay.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ DÂU TÂY</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/traxoai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ XOÀI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travietquat.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TRÀ VIỆT QUẤT</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    40.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="row body__menu-list">                      
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smchuoidua.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES CHUỐI DỪA</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    55.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smdauvietquat.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES DÂU VIỆT QUẤT</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    55.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smdau.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES DÂU</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    55.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smdauchuoi.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES DÂU CHUỐI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    55.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="row body__menu-list">                      
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/banhcaphephomai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">BÁNH CÀ PHÊ PHOMAI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    25.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tiramisu.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TIRAMISU</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    25.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/caramen.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">CARAMEL PHOMAI</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    25.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/bonglancuon.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Thêm vào giỏ hàng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">BÔNG LAN CUỘN TRÀ XANH</p>
                                <p class="body__menu-list-link-price">Giá: <span>
                                    25.000đ
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="body__time-wrap">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-7 m-12 c-12 body__time-left">
                            <div class="body__time-left-wrap">
                                <div class="content__header align-left margin-small" >
                                    <div class="content__header-logo ">
                                        <img src="{{asset('home/img/title_base_2.webp')}}" class="ccc-color" alt="">

                                    </div>
                                    <div class="content__header-title white-color">THỜI GIAN MỞ CỬA</div>
                                </div>
                                <p class="body__time-left-text">“Cà phê nhé" - Một lời hẹn rất riêng của người Việt. Một lời ngỏ mộc mạc để mình ngồi lại bên nhau và sẻ chia câu chuyện của riêng mình. Tea House hẹn gặp bạn chốn quen thuộc.</p>
                                <ul class="body__time-left-list">
                                    <li class="body__time-left-item">T2 - T6: 8h30 - 21h30</li>
                                    <li class="body__time-left-item">T7 - CN: 8h00 - 22h00</li>
                                </ul>
                                <button class="body__time-left-btn">Đặt bàn ngay</button>
                            </div>
                        </div>
                        <div class="col l-5 m-0 c-0 body__time-right">
                        </div>
                    </div>
                </div>
            </div>

            <div class="body__news-wrap">
                <div class="grid wide">
                    <div class="content__header">
                        <div class="content__header-logo">
                            <img src="./assets/img/title_base.webp" alt="">
                        </div>
                        <div class="content__header-title">TIN TỨC NỔI BẬT</div>
                    </div>
                    <ul class="row body__news-list">
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-1.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">NHÂM NHI CÀ PHÊ BAO LÂU NHƯNG BẠN
                                    TẬN MẮT NHÌN KỸ XEM HẠT CÀ PHÊ
                                    CHƯA ?</p>
                            </a>
                            <p class="body__news-desc">Cốc cafe vị đăng đắng, lẫn thêm chút ngọt bùi của sữa đặc sao mà gây nghiện đến thế. Không chỉ cuốn hút ở mùi vị, một cốc cafe sáng còn giúp ngày mới tràn đầy năng lượng với người trẻ, sẵn sàng ch...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-2.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">UỐNG 1-4 TÁCH CÀ PHÊ MỖI NGÀY GIÚP
                                    BỆNH NHÂN UNG THƯ KÉO DÀI SỰ SỐNG</p>
                            </a>
                            <p class="body__news-desc">Uống từ một đến bốn tách cà phê mỗi
                                ngày có thể giúp bệnh nhân ung thư
                                đại trực tràng giai đoạn cuối sống lâu
                                hơn và làm chậm sự tiến triển của
                                bệnh . Phát hiện này được các nhà
                                khoa học rút ra từ ...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-3.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">DÙNG CỐC GIẤY ĐỰNG CÀ PHÊ NÓNG , THỨ
                                    BẠN UỐNG ĐẦY ẮP NHỮNG THỨ ĐÁNG SỢ
                                    NÀY</p>
                            </a>
                            <p class="body__news-desc">Đối với nhiều người , một ngày mới chỉ
                                có thể khởi đầu tốt đẹp bằng một
                                tách cà phê nóng . Nhờ cafein , bộ não
                                dường như không thể nhận được tín
                                hiệu " mệt mỏi " , từ đó tạo cho con
                                người ta một nguồn n ...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-4.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">UỐNG TRÀ CÓ MẤT NGỦ KHÔNG?</p>
                            </a>
                            <p class="body__news-desc">Uống trà có mất ngủ không ? Đây có
                                lẽ là câu hỏi kinh điển , nhất là với
                                những người mới tập uống trà . Có
                                những người chỉ nhấp một chén trà
                                thôi cũng có thể khiến họ trằn trọc
                                khó ngủ cả đêm . Nhưng ...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-5.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">CÀ PHÊ HAY THỂ DỤC : LỰA CHỌN NÀO
                                    GIÚP ĐÁNH BẠI CƠN BUỒN NGỦ TỐT HƠN ?</p>
                            </a>
                            <p class="body__news-desc">Có hai trường phải để đánh bại những
                                cơn buồn ngủ vào sáng sớm và đầu
                                giờ chiều , hai thời điểm trong ngày mà
                                bạn cần lấy lại sự tỉnh táo của mình
                                nhất . Một số người sẽ chọn giải pháp
                                nhanh chóng v ...</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="body__banner-wrap">
                <div class="grid ">
                    <ul class="row body__banner-list">
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_1.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_2.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_3.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_4.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_5.webp" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="grid wide">
                <ul class="row footer__list">
                    <li class="col l-4 m-12 c-12 footer__list-item">
                        <a href="" class="header__category-link footer-logo" style="display:block ;">
                            <img src="./assets/img/logo.webp" alt="">
                        </a>
                        <p class="footer__list-item-desc footer__list-item-desc--margin">Chúng tôi mong muốn Tea House sẽ trở thành “Nhà Trà", nơi mọi người xích lại gần nhau và tìm thấy niềm vui, sự sẻ chia thân tình bên những tách cà phê đượm hương, chất lượng.</p>
                        <div class="footer__list-item-icon">
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-twitter'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-tiktok'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </div>
                    </li>
                    <li class="col l-4 m-6 c-12 footer__list-item">
                        <div class="footer__list-item-header">LIÊN HỆ VỚI CHÚNG TÔI</div>
                        <ul class="footer__list-item-text footer__list-item-desc--2">
                            <li class="footer__list-item-text-icon"><i class='bx bxs-location-plus' ></i></li>
                            <li class="footer__list-item-desc ">Địa chỉ: Tâng 6 toà nhà Ladeco, 266 Đội Cấn, phường Liễu Giai, Hà Nội, Vietnam</li>
                        </ul>
                        <ul class="footer__list-item-text">
                            <li class="footer__list-item-text-icon"><i class='bx bxs-phone' ></i></li>
                            <li class="footer__list-item-text-desc" >
                                <p class="footer__list-item-desc">Hotline đặt bàn: 1900 6750</p>
                                <p class="footer__list-item-desc">Hotline giao hàng: 1900 6750</p>

                            </li>
                        </ul>

                    </li>
                    <li class="col l-4 m-6 c-12 footer__list-item">
                        <div class="footer__list-item-header">ĐĂNG KÝ NHẬN KHUYẾN MÃI</div>
                        <p class="footer__list-item-desc footer__list-item-desc--margin">Đừng bỏ lỡ những sản phẩm và chương trình khuyến mãi hấp dẫn</p>
                        <div class="footer__list-item-sign">
                            <input type="email" placeholder="Email của bạn" class="footer__list-item-sign-email">
                            <button class="footer__list-item-sign-login" >Đăng ký</button>
                        </div>
                    </li>
                </ul>    
            </div>
            <div class="footer__last">
                <p class="footer__last-text footer__last-text--after">© Bản quyền thuộc về Cafein Team  </p>
                <p class="footer__last-text">Cung cấp bởi <a href="#">Sapo</a></p>
            </div>
        </div>

        <div class="go-to-head">
            <a href="#header" title="Lên đầu trang"><i class='bx bxs-chevron-up-circle'></i></a>
        </div>

        
        <div class="overlay-login"></div>
        <div class="login">
            <div class="login-img">
                <img src="./assets/img/banner/picture_3.webp" alt="">
            </div>
            <!-- Đăng kí -->
            <div id="toast"></div>
            <form action="" id="form-signup">
                <div class="signup-close">
                    <i class='bx bxs-x-circle'></i>
                </div>
                <div class="signup-head">
                    <h3>Đăng kí</h3>
                    <div class="signup-head-icon">
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-google'></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="fullname-signup" class="form-label">Tên đăng nhập</label>
                    <input id="fullname-signup" name="fullname-signup" type="text" placeholder="VD: Quân Đào" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="email-signup" class="form-label">Email</label>
                    <input id="email-signup" name="email-signup" type="email" placeholder="VD:quan@gmail.com" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password-signup" class="form-label">Mật khẩu</label>
                    <input id="password-signup" name="password-signup" type="password" placeholder="Nhập mật khẩu" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="confirm-password-signup" class="form-label">Nhập lại mật khẩu</label>
                    <input id="confirm-password-signup" name="confirm-password-signup" type="password" placeholder="Nhập lại mật khẩu" class="form-control">
                    <span class="form-message"></span>
                </div>

                <button class="form-submit">Đăng ký</button>

                <div class="signup-help">
                    <span>Bạn đã có tài khoản ?</span>
                    <span class="signup-help-show-signin">Đăng nhập</span>
                </div>
            </form>
            <!-- Đăng nhập -->
            <form action="" id="form-signin">
                <div class="signin-close">
                    <i class='bx bxs-x-circle'></i>
                </div>
                <div class="signin-head">
                    <h3>Đăng Nhập</h3>
                    <div class="signin-head-icon">
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-google'></i>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="fullname-signin" class="form-label">Tên đăng nhập</label>
                    <input id="fullname-signin" name="fullname-signin" type="text" placeholder="VD: Quân Đào" class="form-control">
                    <span class="form-message"></span>
                </div>
            
                <div class="form-group">
                    <label for="password-signin" class="form-label">Mật khẩu</label>
                    <input id="password-signin" name="password-signin" type="password" placeholder="Nhập mật khẩu" class="form-control">
                    <span class="form-message"></span>
                </div>

                <button class="form-submit">Đăng nhập</button>

                <div class="signin-help">
                    <span>Bạn chưa có tài khoản ?</span>
                    <span class="signin-help-show-signup">Đăng kí</span>
                </div>
            </form>
        </div>
        
    </div>

    <script src="{{asset('home/js/product.js')}}"></script>
    <script src="{{asset('home/js/form.js')}}" type="module"></script>
    <script src="{{asset('home/js/toast.js')}}"></script>
</body>
</html>