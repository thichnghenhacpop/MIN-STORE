<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinStore - MINSTORE</title>
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/tailwind.css">

</head>

<body>
    <?php
    session_start();
    ?>

    <div id="app">
        <!-- 
                +=============================================+
                =                                             =
                =----------------HEADER-----------------------=
                =                                             =
                +=============================================+
             -->
        <header class="w-full h-[96px] shadow-md fixed top-0 bg-white z-10">
            <nav
                class=" max-w-screen-xl h-full mx-auto flex justify-between items-center animate__animated animate__slideInDown">
                <!-- logo -->
                <a href="index.php" class="text-4xl font-medium">
                    <span class="text-red-600">MIN</span>STORE
                </a>
                <!-- menu -->
                <div>
                    <ul class=" text-gray-400 font-medium text-sm flex justify-center gap-x-6">
                        <li class=" hover:text-black duration-500 flex items-center gap-x-1 relative group/submenu">
                            <a class="text-black" href="./pages/product.php">SẢN PHẨM</a>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            <ul
                                class="absolute top-full -left-10 bg-white w-44 translate-y-2 shadow-xl hidden group-hover/submenu:block animate__animated animate__fadeInUp duration-150">
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pt-4 pb-4 font-light text-black  block "
                                        href="./pages/product.php?category=dam">Đầm <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px]"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=dam&model=damsuong">Đầm
                                                suông</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=dam&model=dangA">Đầm
                                                dáng A</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=dam&model=dangom">Đầm
                                                ôm</a>

                                        </div>
                                    </a>
                                </li>
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pb-4 font-light text-black  block "
                                        href="./pages/product.php?category=somi">Áo Sơ Mi <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px] duration-300"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=somi&model=daitay">Tay
                                                dài</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=somi&model=taylo">Tay
                                                lỡ</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=somi&model=ngantay">Tay
                                                ngắn</a>

                                        </div>
                                </li>
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pb-4 font-light text-black  block "
                                        href="./pages/product.php?category=quan">Quần <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px] duration-300"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=quan&model=short">Quần
                                                short</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=quan&model=lung">Quần
                                                lửng</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=quan&model=dai">Quần
                                                dài</a>

                                        </div>
                                </li>
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pb-4 font-light text-black  block "
                                        href="./pages/product.php?category=vay">Chân váy <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px] duration-300"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=vay&model=xepli">Chân
                                                váy xếp li</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="./pages/product.php?category=vay&model=butchi">Chân
                                                váy bút chì</a>

                                        </div>
                                </li>
                                <a class="pr-5 pl-6 pb-4 font-light text-black  block"
                                    href="./pages/product.php?category=setbo">Set Bộ</a>

                            </ul>
                        </li>
                        <li class="hover:text-black duration-500 ">
                            <a href="./pages/lastest.php">SẢN PHẨM MỚI</a>
                        </li>
                        <li class="hover:text-black duration-500 flex items-center gap-x-1 relative group">
                            <a href="./pages/collections.php?collection=PARISIAN%20LADY">BỘ SƯU TẬP</a>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            <div
                                class="absolute top-full -left-10 bg-white w-44 translate-y-2 shadow-xl hidden group-hover:block animate__animated animate__fadeInUp duration-150">
                                <a class="pr-5 pl-6 pt-4 font-light text-black  block"
                                    href="./pages/collections.php?collection=PARISIAN%20LADY">PARISIAN LADY</a>
                                <a class="pr-5 pl-6 py-6 font-light text-black  block"
                                    href="./pages/collections.php?collection=STARRY%20NIGHT">STARRY NIGHT</a>
                                <a class="pr-5 pl-6 pb-4 font-light text-black  block"
                                    href="./pages/collections.php?collection=WINTER%20MEMORIES">WINTER MEMORIES</a>
                            </div>
                        </li>

                        <li class="hover:text-black duration-500 flex items-center gap-x-1 relative group">
                            <a href="./pages/sale.php?price=500">ĐỒNG GIÁ</a>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            <div
                                class="absolute top-full -left-10 bg-white w-44 translate-y-2 shadow-xl hidden group-hover:block animate__animated animate__fadeInUp duration-150 ">
                                <a class="pr-5 pl-6 pt-4 font-light text-black  block"
                                    href="./pages/sale.php?price=500">Dưới
                                    500K</a>
                                <a class="pr-5 pl-6 py-6 font-light text-black  block"
                                    href="./pages/sale.php?price=500-1000">Từ
                                    500K - 1 Triệu</a>
                                <a class="pr-5 pl-6 pb-4 font-light text-black  block"
                                    href="./pages/sale.php?price=>1000">Trên
                                    1
                                    Triệu</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- left -->
                <ul class="text-xs font-light flex justify-between items-center">
                    <i class="fa-solid fa-heart text-xl px-4"></i>
                    <li class="relative group">
                        <a href="./pages/login.php"
                            class="px-4 border-x border-gray-300  flex items-center hover:cursor-pointer">
                            <i class="fa-solid fa-user text-xl mr-2"></i>
                            <span>
                                <?php
                                $username = 'Tài khoản';

                                if (isset($_SESSION["user-name"])) {
                                    $username = $_SESSION["user-name"];
                                }
                                echo $username;

                                ?>
                            </span>
                        </a>


                        <?php
                        if (isset($_SESSION["user-name"])) {
                            echo "
                                <ul class='absolute bg-white w-32 h-20 hidden group-hover:flex flex-col justify-evenly shadow-md animate__animated animate__fadeInUp'>";
                            if (($_SESSION["role"] == 1)) {
                                echo "
                                <li class='px-4'>
                                    <i class='fa-solid fa-gear'></i>
                                    <a class=' py-4' href='./admin/products/view_product.php'>Trang quản trị</a>
                                </li>
                                ";

                            }
                            echo "
                                <li class='px-4'>
                                    <i class='fa-solid fa-gift'></i>
                                    <a class=' py-4' href='./pages/order.php'>Xem đơn hàng</a>
                                </li>
                            ";
                            echo "
                            <li>
                                <form action='' method='post' class='px-4'>
                                    <i class='fa-solid fa-arrow-right-from-bracket'></i>
                                    <button type='submit' name='logout' class=''>
                                        Đăng xuất
                                    </button>
                                </form>
                            </li>
                            ";
                            echo "
                            </ul>
                            ";

                        }
                        if (isset($_POST["logout"])) {
                            $_SESSION = array();
                            session_destroy();
                            echo "
                                        <script>window.location.href='./pages/login.php';</script>
                                    ";
                        }
                        ?>
                    </li>
                    <li>
                        <a href="./pages/cart.php" class="px-4 flex items-center">
                            <div class="relative">
                                <img src="./assets/img/cart.jpg" alt="" class="-translate-y-[1px]">
                                <?php
                                $quantity = 0;
                                if (isset($_SESSION["user-name"])) {
                                    include "./config/connect.php";
                                    $sql = "SELECT COUNT(*) as total FROM tbl_cart WHERE cart_name = :user_name";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bindParam(":user_name", $_SESSION["user-name"]);
                                    $stmt->execute();
                                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                    $quantity = $result['total'];
                                }

                                ?>
                                <p class="absolute text-white " style="top:6px; left:7px;">
                                    <?php echo $quantity ?>
                                </p>

                            </div>
                            <span class="ml-2 mt-1">Giỏ hàng</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="progess-nav-bar">
                <div class="value bg-red-500 h-1 w-0">

                </div>
            </div>
        </header>

        <main>
            <!-- ----------------------------BANNER------------------------- -->

            <section class="grid grid-rows-2 gap-y-2 mt-24">
                <a href="./pages/collections.php?collection=WINTER%20MEMORIES">
                    <img class="row-span-1 animate__animated animate__fadeInRight "
                        src="./assets/img/ms_banner_img4.webp" alt="">
                </a>
                <div class="flex gap-x-2">
                    <a href="./pages/product.php?category=somi" class="animate__animated animate__fadeInLeft">
                        <img src="./assets/img/home_new_banner_1.webp" alt="">
                        <span class="flex justify-between items-center bg-gray-200 px-4 py-4 ">
                            <h1 class="uppercase font-medium">ÁO SƠ MI</h1>
                            <p class="text-sm font-light">SHOP NOW</p>
                        </span>
                    </a>
                    <a href="./pages/product.php?category=dam" class="animate__animated animate__fadeInRight">
                        <img src="./assets/img/home_new_banner_2.webp" alt="">
                        <span class="flex justify-between items-center bg-gray-200 px-4 py-4 ">
                            <h1 class="uppercase font-medium">ĐẦM THIẾT KẾ</h1>
                            <p class="text-sm font-light">SHOP NOW</p>
                        </span>
                    </a>

                </div>
            </section>
            <!-- ------------------------------------NEW PRODUCT----------------------------------- -->
            <section class="max-w-screen-xl mx-auto">
                <h1 class="text-center w-full text-2xl mb-10">SẢN PHẨM MỚI</h1>

                <div class="grid grid-cols-4 grid-rows-2 gap-x-4 gap-y-6 mt-4 new-arrival">
                    <?php
                    include "./config/connect.php";

                    $sql = "SELECT * FROM tbl_products ORDER BY created_at DESC LIMIT 0,8 ";

                    $stmt = $conn->prepare($sql);


                    $stmt->execute();
                    $total_product = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($total_product as $product) {
                        ?>
                        <a href="./pages/detail.php?id=<?php echo $product['product_id'] ?>"
                            class=" overflow-hidden group hover:cursor-pointer">
                            <div class="overflow-hidden">
                                <img src="./assets/img/products/<?php echo $product['product_img'] ?>" alt=""
                                    class=" hover:scale-110 duration-700">
                            </div>
                            <div class="text-center mt-4">
                                <h1 class="text-sm font-medium uppercase text-gray-500 group-hover:text-black">
                                    <?php echo $product['product_name'] ?>
                                </h1>
                                <p class="text-sm mt-4 font-bold">
                                    <?php echo number_format($product['product_price'], 0, ','); ?> đ
                                </p>
                            </div>

                        </a>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- -------------------------------------COLLECTIONS---------------------------------- -->
            <section class="mt-24 max-w-screen-2xl mx-auto">
                <!-- -------------------------WINTER MEMORIES--------------------------------- -->
                <div class="grid grid-cols-12 gap-x-5 ">
                    <div class="relative col-span-7 animate__animated animate__slideInLeft">
                        <img src="./assets/img/parisian.webp" class="w-full " alt="">
                        <div class="absolute bg-white bg-opacity-70 top-1/2 -translate-y-1/2 py-7">
                            <h1 class="text-4xl text-center mb-5">𝐖𝐈𝐍𝐓𝐄𝐑 𝐌𝐄𝐌𝐎𝐑𝐈𝐄𝐒</h1>
                            <p class="text-justify text-sm px-7">Cơn gió lạnh bất chợt về sau những ngày nắng gắt, mang theo hơi lạnh cùng cơn mưa đầu mùa rả rích trên khắp các nẻo đường. Hóa ra, khung cảnh mùa đông trong kí ức vẫn đẹp và miên man đến thế. Bắt nguồn từ vẻ đẹp nhẹ nhàng chớm Đông ấy, chúng tôi cho ra mắt bộ sưu tập Winter Memories với mong muốn được cùng bạn tận hưởng và tạo nên một mùa Đông thật đẹp và đáng nhớ.
                            Xuyên suốt bộ sưu tập là các thiết kế và chất liệu đa dạng, phù hợp với nhiều vóc dáng và cá tính riêng của mỗi quý cô. Đó có thể là áo khoác măng tô dài, áo kiểu hay đầm midi nữ tính. Kết hợp cùng điểm nhấn ấn tượng từ các dòng chất liệu cao cấp - dạ cashmere, dạ tweed và gấm được NEM chọn lọc kỹ lưỡng, cùng kỹ thuật may, dựng form cầu kỳ tạo nên những thiết kế vô cùng tinh tế và sang trọng.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-5 grid grid-cols-2 grid-rows-2 w-full gap-x-2 gap-y-1 winter">
                        <?php 
                            $sql = "SELECT * FROM tbl_products WHERE product_collection = 'WINTER MEMORIES' LIMIT 0,6 ";

                            $stmt = $conn->prepare($sql);
    
    
                            $stmt->execute();
                            $total_product = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($total_product as $product) {
                        ?>
                        <a href="./pages/detail.php?id=<?php echo $product['product_id'] ?>"
                            class="h-full overflow-hidden group hover:cursor-pointer">
                            <div class="overflow-hidden">
                                <img src="./assets/img/products/<?php echo $product['product_img'] ?>" alt=""
                                    class=" hover:scale-110 duration-700 object-cover ">
                            </div>
                            <div class="text-center mt-4">
                                
                                <!-- <p class="text-sm mt-4 font-bold">
                                     đ
                                </p> -->
                            </div>

                        </a>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                
                <!-- -------------------------STARRY NIGHT--------------------------------- -->
                
                <div class="grid grid-cols-12 gap-x-5 ">
                    <div class="col-span-7 grid grid-cols-3 grid-rows-2 w-full gap-x-2 gap-y-3 -translate-y-24 night">
                        <?php 
                            $sql = "SELECT * FROM tbl_products WHERE product_collection = 'STARRY NIGHT' LIMIT 0,6 ";
                            
                            $stmt = $conn->prepare($sql);
                            
    
                            $stmt->execute();
                            $total_product = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($total_product as $product) {
                        ?>
                        <a href="./pages/detail.php?id=<?php echo $product['product_id'] ?>"
                            class="h-full overflow-hidden group hover:cursor-pointer">
                            <div class="overflow-hidden">
                                <img src="./assets/img/products/<?php echo $product['product_img'] ?>" alt=""
                                    class=" hover:scale-110 duration-700 object-cover ">
                            </div>
                            <div class="text-center mt-4">
                                
                                <!-- <p class="text-sm mt-4 font-bold">
                                     đ
                                </p> -->
                            </div>

                        </a>
                        <?php
                    }
                    ?>
                    <a href="./pages/collections.php?collection=PARISIAN%20LADY" class="text-center translate-y-1  col-span-1 mt-14 px-7 py-3 hover:bg-black hover:text-white bg-white border border-black text-black duration-500" href="">PARISIAN LADY</a>
                    <a href="./pages/collections.php?collection=STARRY%20NIGHT" class="text-center translate-y-1 col-span-1 mt-14 px-7 py-3 hover:bg-black hover:text-white bg-white border border-black text-black duration-500" href="">WINTER MEMORIES</a>
                    <a href="./pages/collections.php?collection=WINTER%20MEMORIES" class="text-center translate-y-1 col-span-1 mt-14 px-7 py-3 hover:bg-black hover:text-white bg-white border border-black text-black duration-500" href="">STARRY NIGHT</a>
                    </div>
                    <div class="relative col-span-5 animate__animated animate__slideInRight">
                        <img src="./assets/img/strarrynight.webp" class="w-full " alt="">
                        <div class="absolute bg-white bg-opacity-70 top-1/2 -translate-y-1/2 py-7">
                            <h1 class="text-4xl text-center mb-5">𝐒𝐓𝐀𝐑𝐑𝐘 𝐍𝐈𝐆𝐇𝐓</h1>
                            <p class="text-justify text-sm px-7">Với thông điệp: "Hãy tỏa sáng rạng rỡ như một ngôi sao dù bạn có là ai". NEM cho ra mắt bộ sưu tập Starry Night với các thiết kế đầm tiệc sang trọng và quyến rũ giúp quý cô toả sáng như những vì sao rạng rỡ và trở thành tâm điểm trong mọi bữa tiệc.
                                Bước ra khỏi vùng an toàn với các trang phục hàng ngày, ở Starry Night, quý cô của NEM thật sự tạo ấn tượng, và gây thương nhớ từ ánh nhìn đầu tiên. Với các mẫu đầm tiệc ấn tượng không chỉ ở phom dáng mà còn là sự thăng hoa trong cách phối chất liệu, điểm nhấn. Ngoài sử dụng gam màu đỏ kinh điển, bảng màu pastel cũng được chúng tôi đưa vào bộ sưu tập và làm mới hơn khi thêm thắt sức hút từ những chi tiết xếp lớp, đính kết cầu kì.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-----------------------------------------------------SALE BANNER---------------------------------  -->
           
            
        </main>
        
    
        <footer class="w-full bg-black text-white mt-5">
            <section class="max-w-screen-xl mx-auto flex justify-between items-center py-10">
                <div>
                    <h1 class="font-bold mb-6"><span class="text-red-600">MIN </span>STORE - THỜI TRANG CÔNG SỞ</h1>
                    <p class="text-sm my-3">Địa chỉ : Cổ nhuế 2, Bắc Từ Liêm, Hà Nội</p>
                    <p class="text-sm my-3">Chăm sóc khách hàng : 0378786847</p>
                    <p class="text-sm my-3">Email: tranhongquan.dev@gmail.com</p>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <span class="mx-4">Copyright ©2023 MINSTORE. Powered by Tran Hong Quan.</span>
                </div>
            </section>


        </footer>










    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./assets/js/app.js"></script>

    <script>
        ScrollReveal({ reset: true });
        ScrollReveal().reveal('.winter', { delay: 100 });
        ScrollReveal().reveal('.night', { delay: 100 });
        ScrollReveal().reveal('.new-arrival', { delay: 100 });

    </script>
</body>

</html>