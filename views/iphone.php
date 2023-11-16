<div class="container">
    <div class="headinh">
        <h1><i class="fa-brands fa-apple"></i>Iphone</h1>
    </div>
    <div class="banner">
        <img src="img/anh0.jpg" alt="">
        <div class="banner_bnt">
            <!-- <div class="pre">
            <i class="fa-solid fa-chevron-left" onclick="pre()"></i>
        </div>
        <div class="next">
            <i class="fa-solid fa-chevron-right" onclick="next()"></i>
        </div> -->
        </div>
    </div>
    <main>
        <div class="products">
            <div class="list">
                <ul>
                    <li><a href="#">Tất cả</a></li>
                    <!-- <li><a href="#">Iphone 15</a></li>
                    <li><a href="#">Iphone 14</a></li>
                    <li><a href="#">Iphone 13</a></li>
                    <li><a href="#">Iphone 12</a></li>
                    <li><a href="#">Iphone 11</a></li> -->

                    <?php
                    // foreach ($danh_muc_nho as $dm) {
                    //     extract($dm);
                    //     $link = "index.php?act=sanpham&iddm=" . $id;
                    //     echo '<li><a href="' . $link . '">' . $name . '</a></li>';
                    // }
                    ?>;

                </ul>
                <div class="loc">
                    <select name="" id="">
                        <option value="0">Tất cả</option>
                        <option value="1">Giá thấp</option>
                        <option value="2">Giá cao</option>
                    </select>
                </div>

            </div>
            <div class="box_products">
                <?php
                foreach ($ddsp as $sanpham) {
                    extract($sanpham);
                    $hinh = $img_path . $img;
                    $link_sp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<a href="' . $link_sp . '">
                            <div class="list_products">
                                <div class="thumb">
                                    <img src="' . $hinh . '" alt="">
                                </div>
                                <div class="title">
                                    <h2>' . $name . '</h2>
                                </div>
                                <div class="price">' . $price . '</div>
                            </div>
                        </a> ';
                }
                ?>
                <!-- <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-pro-max-blue-thumbtz-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>Giày đá bóng NIKE</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>

                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>FG Messi Soccer shoes</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>
                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-plus-blue-thumbtz-1-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>FG C Ronaldo Mercurial CR7</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>

                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-pro-max-blue-thumbtz-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>Giày đá bóng NIKE</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    >
                </div>

                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>FG Messi Soccer shoes</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>
                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-plus-blue-thumbtz-1-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>FG C Ronaldo Mercurial CR7</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>

                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-pro-max-blue-thumbtz-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>Giày đá bóng NIKE</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>

                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>FG Messi Soccer shoes</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                    
                </div>
                <div class="list_products">
                    <div class="thumb">
                        <img src="img/iphone-15-plus-blue-thumbtz-1-650x650.webp" alt="">
                    </div>
                    <div class="title">
                        <h2>FG C Ronaldo Mercurial CR7</h2>
                    </div>
                    <div class="price">
                        200.000 VND
                    </div>
                </div> -->


            </div>
    </main>
</div>