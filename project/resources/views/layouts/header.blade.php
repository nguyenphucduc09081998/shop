<style>
    .container .row {
        height: 65px;
    }

    #pri-menu li {
        display: inline-block;
    }

    #site-header {
        background: #ddd;
    }

    .menu-item {
        padding: 20px 10px;
        position: relative;
    }

    .phone {
        padding: 20px 10px 15px 10px;
        position: relative;
        background: #777;
    }

    .menu-item:hover {
        background: red;
    }

    .menu-item a {
        font-size: 14px;
    }

    .sub-menu a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;

        padding-top: 10px;
        display: block;
        width: 200px;
    }

    .sub-menu a:hover {
        background: #ddd;
    }

    .sub-menu {
        padding-left: 0px !important;
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        margin-top: 20px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

    }

    .menu-item:hover .sub-menu {
        display: block;
    }

    .item1 {
        background: #777;
    }
</style>
<header id="site-header">
    <div class="container">
        <div class="row">
            <div class=" col-sm-3 col-md-3">
                <div id="dd" class="">
                    <a class="" href="#" title="Duc  Nguyen">
                        <img src="https://mona.media/wp-content/uploads/2017/08/cropped-banner-co-1-1.png" alt="Duc Nguyen">
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <nav id="main-nav" class="">
                    <ul id="pri-menu" class="">
                        <li id="" class="menu-item">
                            <a>
                                trang chủ
                            </a>
                        </li>
                        <li id="" class="menu-item">
                            <a>
                                Giới thiệu
                            </a>
                        </li>
                        <li id="" class="menu-item">
                            <a>
                                Dự Án
                            </a>
                        </li>
                        <li id="" class="menu-item abc">
                            <a>
                                Dịch Vụ&nbsp;
                                <i class="arrow fa fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li id="" class="">
                                    <a href="#">Mẫu website Nhà hàng</a>
                                </li>
                                <li id="" class="">
                                    <a href="#">Nhà hàng</a>
                                </li>
                                <li id="" class="">
                                    <a href="#">Mẫu Nhà hàng</a>
                                </li>
                                <li id="" class="">
                                    <a href="#">Mẫu website Nhà </a>
                                </li>
                                <li id="" class="">
                                    <a href="#"> website Nhà hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li id="" class="menu-item">
                            <a>
                                Mẫu Website &nbsp;
                                <i class="arrow fa fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li id="" class="">
                                    <a href="#">Mẫu website Nhà hàng</a>
                                </li>
                                <li id="" class="">
                                    <a href="#">Nhà hàng</a>
                                </li>
                                <li id="" class="">
                                    <a href="#">Mẫu Nhà hàng</a>
                                </li>
                                <li id="" class="">
                                    <a href="#">Mẫu website Nhà </a>
                                </li>
                                <li id="" class="">
                                    <a href="#"> website Nhà hàng</a>
                                </li>
                            </ul>
                        </li>

                        <li id="" class="menu-item item1">
                            <a>
                                Đặt Hang
                            </a>
                        </li>
                        <li id="" class="phone">
                            <a href="tel:1900636648" title="Điện thoại tư vấn" class="" onclick='open_search(this)'>
                                <span class="ico"><img src="https://mona.media/template/images/dien-thoai-mona-media.png" alt="Điện thoại Mona Media"></span>
                                <span class="val">1900 636 648</span>

                            </a>
                        </li>


                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>


