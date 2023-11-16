<div class="banner_index">
    <img src="./img/anh0.jpg" id="banner" alt="">
    <div class="banner_bnt">
        <!-- <div class="pre">
                <i class="fa-solid fa-chevron-left" onclick="pre()"></i>
            </div>
            <div class="next">
                <i class="fa-solid fa-chevron-right" onclick="next()"></i>
            </div> -->
    </div>
</div>
<div class="container">

    <div class="box_danh_muc">
        <div class="danh_muc">
            <?php
            foreach ($danh_muc as $dm) {
                extract($dm);
                $link = "index.php?act=iphone&iddm_nho=" . $id;
                $hinh = $img_path . $img;
                echo '<div class="danh_muc_one">
                        <a href="' . $link . '">
                            <img src="' . $hinh . '" alt="">
                            <div class="dm_headinh">' . $name . '</div>
                        </a>
                    </div>';
            }
            ?>;
        </div>

    </div>

    <a href="index.php?act=mac">
        <div class="headinh">
            <h1></i>Sản phẩm bán chạy</h1>
        </div>
    </a>
    <div class="box_san_pham">

        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
    </div>

    <a href="index.php?act=iphone">
        <div class="headinh">
            <h1><i class="fa-brands fa-apple"></i>Iphone</h1>
        </div>
    </a>
    <div class="box_san_pham">
        <?php
        foreach ($san_pham_moi as $sanpham) {
            extract($sanpham);
            $hinh = $img_path . $img;
            $link_sp = "index.php?act=san_pham_ct&idsp=" . $id;
            echo '<div class="san_pham">
            <a href="' . $link_sp . '">
                <div class="img">
                    <img src="' . $hinh . '" alt="">
                </div>
                <div class="title">
                    <h2>' . $name . '</h2>
                </div>
                <div class="price">' . $price . '</div>
            </a>
        </div>';
        }
        ?>
        <!-- <div class="san_pham">
            <a href="index.php?act=san_pham_ct">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div> -->
    </div>

    <a href="index.php?act=mac">
        <div class="headinh">
            <h1><i class="fa-brands fa-apple"></i>Mac</h1>
        </div>
    </a>
    <div class="box_san_pham">

        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
    </div>

    <a href="index.php?act=watch">
        <div class="headinh">
            <h1><i class="fa-brands fa-apple"></i>Watch</h1>
        </div>
    </a>
    <div class="box_san_pham">

        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
    </div>

    <a href="index.php?act=phu_kien">
        <div class="headinh">
            <h1>Phụ kiện</h1>
        </div>
    </a>
    <div class="box_san_pham">

        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
        <div class="san_pham">
            <a href="#">
                <div class="img">
                    <img src="./img/iphone-15-pro-black-thumbtz-1-2-650x650.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iphone 15 Pro Max</h2>
                </div>
                <div class="price">33.790.000</div>
            </a>
        </div>
    </div>

</div>