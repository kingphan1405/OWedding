<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OWedding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,700&family=Sigmar+One&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('landing/reset.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('landing/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('header/style.css')); ?>">
</head>

<body>
    <!-- firstpage //////////////////////////////////////////////////////////// -->
    <div class="header">
        <div class="header_logo">
            <img class="logo-white logoactive" width="229" height="93"
                src="<?php echo e(asset('image/Picture1.png')); ?>" />
            <img class="logo-red" width="229" height="93" src="<?php echo e(asset('image/Picture2.png')); ?>" />
        </div>
        <nav class="header_nav">
            <ul class="header_ul">
                <li class="header_menuitem">
                    <a href="#">Xem hướng dẫn</a>
                </li>
                <li class="header_menuitem">
                    <a href="#2">Công cụ lập kế hoạch</a>
                </li>
                <li class="header_menuitem">
                    <a href="#">Cặp đôi đã tạo</a>
                </li>
                <li class="header_menuitem">
                    <a href="#">Điểm nổi bật</a>
                </li>
                <li class="header_menuitem"><a href="#">Bảng giá</a></li>
            </ul>
        </nav>
        <?php
        $user = session('user');
        ?>
        <?php if(auth()->guard()->check()): ?>
            <button class="header-btn"><?php echo e($user['name']); ?></button>
    </div>
    <div class="dropdown__wrapper hide dropdown__wrapper--fade-in none">
        <div class="dropdown__group">
            <div class="dropdown__group-username"><?php echo e($user['name']); ?></div>
            <div class="dropdown__group-email"><?php echo e($user['email']); ?></div>
        </div>
        <form action="<?php echo e(route('users.logout')); ?>" method="POST">
            <div class="dropdown-btn">
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route('users.showProfile')); ?>" class="dropdown-btn_website">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <span>Thiết lập tài khoảng</span>
                </a>
                <?php if($userWeb): ?>
                    <a href="<?php echo e(route('users.managementWeb')); ?>" class="dropdown-btn_website">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span>Quản lý website</span>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('templates.index')); ?>" class="dropdown-btn_website">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span>Quản lý website</span>
                    </a>
                <?php endif; ?>
                <button type="submit" class="dropdown-btn_logout">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <span>Đăng xuất</span>
                </button>
            </div>
        </form>
    </div>
<?php else: ?>
    <a class="header-btn" href="<?php echo e(route('users.showlogin')); ?>">Đăng nhập</a>
    </div>
    <?php endif; ?>
    <div class="firstpage">
        <div class="firstcontent">
            <h2 class="firstcontent_top">oWedding</h2>
            <h1 class="firstcontent_title">
                NỀN TẢNG TẠO WEBSITE ĐÁM CƯỚI MIỄN PHÍ
            </h1>
            <h2 class="firstcontent_sub">
                Cho đám cưới trở nên độc đáo hơn theo cách riêng của bạn!
            </h2>
            <div class="firstcontent_wrap">
                <?php if($user): ?>
                    <a class="Button" href="<?php echo e(route('templates.index')); ?>">BẮT ĐẦU MIỄN PHÍ</a>
                    <a class="Button Button2"
                        href="<?php echo e(route('userwebs.index', $user['id'])); ?>">WEBSITES
                        ĐÃ TẠO</a>
                <?php else: ?>
                    <a class="Button" href="<?php echo e(route('users.login')); ?>">BẮT ĐẦU MIỄN PHÍ</a>
                    <a class="Button Button2" href="<?php echo e(route('users.login')); ?>">WEBSITES ĐÃ TẠO</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="firstpage_line">
            <img src="/image/wave-line-bw-long.svg" alt="">
        </div>
    </div>

    <!-- ////////secondpage//////////////////////////////////////////////////////////////////////// -->
    <div class="secondpage">
        <div class="secondtitle-wrap" id="2">
            <div class="secondtitle_top">Đầy đủ những tính năng hữu ích </div>
            <div class="secondtitle_mid">CHO MỘT ĐÁM CƯỚI NHƯ MƠ</div>
            <div class="secondtitle_sub">Với những công cụ cần thiết, giúp bạn quản lý mọi kế hoạch cho ngày trọng đại
                một cách thông minh hơn.</div>
        </div>
        <div class="secondtitle-content">
            <div class="secondtitle-content_item">
                <div class="itemcontent">
                    <div class="itemcontent_title">
                        <div class="second-item_title">
                            <h3 class="itemcontent_title_h">QUẢN LÍ</h3>
                            <h3 class="itemcontent_title_h">KẾ HOẠCH CƯỚI</h3>
                        </div>
                        <p class="itemcontent_title_p">Tạo và theo dõi công việc cho ngày trọng đại của bạn, đảm bảo mọi
                            thứ theo kế hoạch, cho đám cưới của bạn được vẹn toàn</p>
                    </div>
                    <div class="itemcontent_img">
                        <img src="<?php echo e(asset('image\cal.jpg')); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="secondtitle-content_item s">
                <div class="itemcontent">
                    <div class="itemcontent_title">
                        <div class="second-item_title">
                            <h3 class="itemcontent_title_h">QUẢN LÍ</h3>
                            <h3 class="itemcontent_title_h">NGÂN SÁCH CƯỚI</h3>
                        </div>
                        <p class="itemcontent_title_p">Lập kế hoạch tài chính chi tiết và quản lý chi tiêu một cách
                            thông minh. Tận hưởng ngày cưới mà không cần lo lắng về tài chính</p>
                    </div>
                    <div class="itemcontent_img">
                        <img src="<?php echo e(asset('image\money.jpg')); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="secondtitle-content_item t">
                <div class="itemcontent">
                    <div class="itemcontent_title">
                        <div class="second-item_title">
                            <h3 class="itemcontent_title_h">QUẢN LÍ</h3>
                            <h3 class="itemcontent_title_h">KHÁCH MỜI</h3>
                        </div>
                        <p class="itemcontent_title_p">Lên danh sách và quản lý thông tin khách mời giúp dễ dàng xác
                            định được số lượng người tham dự, và lưu trữ thông tin mừng cưới</p>
                    </div>
                    <div class="itemcontent_img">
                        <img src="<?php echo e(asset('image\party.jpg')); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="secondtitle-content_item f">
                <div class="itemcontent">
                    <div class="itemcontent_title">
                        <div class="second-item_title">
                            <h3 class="itemcontent_title_h">THIỆP CƯỚI</h3>
                            <h3 class="itemcontent_title_h">ONLINE</h3>
                        </div>
                        <p class="itemcontent_title_p">Tự tay thiết kế những tấm thiệp mời online độc đáo với những mẫu
                            thiệp chuyên nghiệp, và mời cưới bạn bè một cách ấn tượng</p>
                    </div>
                    <div class="itemcontent_img">
                        <img src="<?php echo e(asset('image\Letter.jpg')); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="secondpage_sub">
            <div class="secondpage_sub-content">
                <p>Tự tay xây dựng <strong>Website đám cưới</strong> của riêng bạn?</p>
                <button class="Button">BẮT ĐẦU NGAY <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
    <!-- thirdpage ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="thirdpage">
        <div class="secondtitle-wrap">
            <div class="secondtitle_top">TẠI SAO NÊN TẠO</div>
            <div class="secondtitle_mid">WEBSITE ĐÁM CƯỚI</div>
            <div class="secondtitle_sub">Cho ngày cưới của bạn trở nên ấn tượng hơn,<br> để câu chuyện tình yêu của bạn
                dễ dàng chia sẻ đến mọi người, và để sự kiện trọng đại của bạn được lưu giữ mãi theo thời gian.</div>
        </div>
        <div class="thirdpage_content">
            <div class="item_item">
                <img src="<?php echo e(asset('image\ser1.jpg')); ?>" alt="" class="item_image">
                <div class="item_content">
                    <div class="item_title">CÓ NGAY WEBSITE MIỄN PHÍ CHỈ SAU 3 NỐT NHẠC</div>
                    <p class="item_sub">Bất cứ ai cũng có thể dễ dàng tạo ra một website đám cưới đẹp một cách nhanh
                        chóng mà không cần phải có kiến thức về lập trình.</p>
                </div>
            </div>
            <div class="item_item">
                <img src="<?php echo e(asset('image\ser2.jpg')); ?>" alt="" class="item_image">
                <div class="item_content">
                    <div class="item_title">KHÔNG GIAN KỶ NIỆM ĐỘC ĐÁO LƯU GIỮ MÃI MÃI</div>
                    <p class="item_sub">Giúp bạn lưu giữ những khoảnh khắc tuyệt vời cho ngày trọng đại, sẽ thật tuyệt
                        vời khi bạn có thể nhìn lại và nhớ về nó như chỉ mới ngày hôm qua.</p>
                </div>
            </div>
            <div class="item_item">
                <img src="<?php echo e(asset('image\ser3.jpg')); ?>" alt="" class="item_image">
                <div class="item_content">
                    <div class="item_title">CHO MỌI KẾ HOẠCH CƯỚI TRỞ NÊN DỄ DÀNG HƠN</div>
                    <p class="item_sub">Cung cấp những công cụ hữu ích, giúp bạn quản lý mọi kế hoạch cho ngày trọng
                        đại một cách thông minh hơn như: Chi tiêu, Việc cần làm, Khách mời,...</p>
                </div>
            </div>
            <div class="item_item">
                <img src="<?php echo e(asset('image\ser4.jpg')); ?>" alt="" class="item_image">
                <div class="item_content">
                    <div class="item_title">GIAO DIỆN ĐẸP - ĐA DẠNG VÀ CẬP NHẬT LIÊN TỤC</div>
                    <p class="item_sub">Bất cứ ai cũng có thể dễ dàng tạo ra một website đám cưới đẹp một cách nhanh
                        chóng mà không cần phải có kiến thức về lập trình.</p>
                </div>
            </div>
            <div class="item_item">
                <img src="<?php echo e(asset('image\ser5.jpg')); ?>" alt="" class="item_image">
                <div class="item_content">
                    <div class="item_title">DỄ DÀNG CHIA SẺ CÂU CHUYỆN TÌNH YÊU CỦA BẠN</div>
                    <p class="item_sub">Không phải lúc nào bạn cũng có thể kể về chuyện tình của mình cho ai đó. Hãy
                        cùng iWedding xuất bản câu chuyện của bạn và chia sẻ nó đến tất cả mọi người.</p>
                </div>
            </div>
            <div class="item_item">
                <img src="<?php echo e(asset('image\ser6.jpg')); ?>" alt="" class="item_image">
                <div class="item_content">
                    <div class="item_title">NHẬN LỜI CHÚC PHÚC TỪ BẠN BÈ DỄ DÀNG HƠN</div>
                    <p class="item_sub">Để lời chúc của bạn bè làm đám cưới của bạn thêm một phần hạnh phúc. Hơn hết,
                        những lời chúc đó sẽ được lưu giữ mãi theo thời gian.</p>
                </div>
            </div>

        </div>
    </div>


    <!-- lastpage///////////////////// -->
    <div class="lastpage">
        <div class="lastpage_content">
            <div class="lastpage_content-title">
                <div class="secondtitle_mid">04 BƯỚC ĐỂ TẠO</div>
                <div class="secondtitle_top">WEBSITE ĐÁM CƯỚI MIỄN PHÍ</div>
            </div>
            <div class="lastpage_content-step">
                <div class="step"><span>1</span>
                    <p>TẠO TÀI KHOẢN & ĐĂNG NHẬP VÀO NỀN TẢNG</p>
                </div>
                <div class="step"><span>2</span>
                    <p>CHỌN MẪU GIAO DIỆN YÊU THÍCH</p>
                </div>
                <div class="step"><span>3</span>
                    <p>TẠO, TUỲ CHỈNH THÔNG TIN & HÌNH ẢNH WEB</p>
                </div>
                <div class="step"><span>4</span>
                    <p>CHIA SẺ WEB ĐÁM CƯỚI VỚI MỌI NGƯỜI</p>
                </div>
            </div>
            <div class="lastpage_content-btn">
                <a href="#">Xem hướng dẫn chi tiết tại đây <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="lastpage_img">
            <img src="/image/lastpageimg.png" alt="">
        </div>
    </div>
    <!-- finalpage ////////////////////////////////////////-->
    <div class="finalpage">
        <div class="finalpage_content">
            <div class="finalpage_content-title">
                <div class="secondtitle_top">ĐƯỢC TIN TƯỞNG BỞI</div>
                <div class="secondtitle_mid">HÀNG NGÀN CẶP ĐÔI GIỐNG NHƯ BẠN</div>
            </div>
            <div class="finalpage_content-img">
                <img src="https://th.bing.com/th/id/R.086c5d5b5a88a356e6e8d226e25076dc?rik=qLcwkONyJ7OQDA&riu=http%3a%2f%2felariophotography.com%2fwp-content%2fuploads%2f2016%2f09%2fsagamore_wedding_photos-29.jpg&ehk=txVFWu8JOU%2fsLHbkNaJMIpKsYtICS%2ba%2bClH%2bdpKElrE%3d&risl=&pid=ImgRaw&r=0"
                    alt="" class="finalpage_content-img-item">
                <img src="https://cajphotography335.zenfolio.com/img/s/v-10/p2450054690-4.jpg" alt=""
                    class="finalpage_content-img-item">
                <img src="https://cajphotography335.zenfolio.com/img/s/v-10/p2450047733-4.jpg" alt=""
                    class="finalpage_content-img-item">
                <img src="https://th.bing.com/th/id/OIP.zVJGmUeZpS__l9ahNOGkrAHaE8?pid=ImgDet&w=1500&h=1001&rs=1" alt=""
                    class="finalpage_content-img-item">
                <img src="https://www.lindabeansperfectmaine.com/wp-content/uploads/2014/12/GP302-580x385.jpg" alt=""
                    class="finalpage_content-img-item">
                <img src="https://i.pinimg.com/originals/be/dd/06/bedd0625abb8a06454e286a6598e2f38.jpg" alt=""
                    class="finalpage_content-img-item">

            </div>
        </div>
        <!-- <div class="finalpage_thanks">
      <div class="finalpage_thanks-wrap">
        <div class="finalpage_thanks-content">
          <h3>Cảm ơn bạn vì đã lựa chọn <strong>oWedding</strong>!</h3>
          <div class="finalpage_thanks-content-a">
            <a href="#">BẮT ĐẦU MIỄN PHÍ</a>
          </div>
        </div>
        <figure class="finalpage_thanks-img">
          <img class="" src="/image/thankspng.png">
        </figure>
      </div>
    </div> -->
    </div>



    <!-- ////footer -->
    <footer class="footer" id="footer">
        <div class="container_1">
            <div class="row">
                <div class="footer-col">
                    <h4>Về oWedding</h4>
                    <ul>
                        <li>
                            <p class="text">Trang chủ</p>
                        </li>
                        <li>
                            <p class="text">Giới thiệu về oWedding</p>
                        </li>
                        <li>
                            <p class="text">Liên hệ</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Liên kết</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/truong08.11.2004">fb/truong08.11.2004</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Công cụ</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Thông tin</h4>
                    <div class="social-links">
                        <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot-bottom">
            <p>Copyright &copy;2023, designed by designer</p>
        </div>
    </footer>
</body>
<script src="<?php echo e(asset('header/js.js')); ?>"></script>

</html>
<?php /**PATH D:\oWeddinggit\OWedding\resources\views/user/landing.blade.php ENDPATH**/ ?>