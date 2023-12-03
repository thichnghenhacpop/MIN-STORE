<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinStore - MINSTORE</title>
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/tailwind.css">

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
        <header class="w-full h-[96px] shadow-md">
            <nav
                class="max-w-screen-xl h-full mx-auto flex justify-between items-center animate__animated animate__slideInDown">
                <!-- logo -->
                <a href="../index.php" class="text-4xl font-medium">
                    <span class="text-red-600">MIN</span>STORE
                </a>
                <!-- menu -->
                <div>
                    <ul class=" text-gray-400 font-medium text-sm flex justify-center gap-x-6">
                        <li class=" hover:text-black duration-500 flex items-center gap-x-1 relative group/submenu">
                            <a class="" href="product.php">SẢN PHẨM</a>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            <ul
                                class="absolute top-full -left-10 bg-white w-44 translate-y-2 shadow-xl hidden group-hover/submenu:block animate__animated animate__fadeInUp duration-150">
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pt-4 pb-4 font-light text-black  block "
                                        href="product.php?category=dam">Đầm <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px]"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=dam&model=damsuong">Đầm
                                                suông</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=dam&model=dangA">Đầm
                                                dáng A</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=dam&model=dangom">Đầm
                                                ôm</a>

                                        </div>
                                    </a>
                                </li>
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pb-4 font-light text-black  block "
                                        href="product.php?category=somi">Áo Sơ Mi <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px] duration-300"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=somi&model=daitay">Tay
                                                dài</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=somi&model=taylo">Tay
                                                lỡ</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=somi&model=ngantay">Tay
                                                ngắn</a>

                                        </div>
                                </li>
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pb-4 font-light text-black  block "
                                        href="product.php?category=quan">Quần <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px] duration-300"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=quan&model=short">Quần
                                                short</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=quan&model=lung">Quần
                                                lửng</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=quan&model=dai">Quần
                                                dài</a>

                                        </div>
                                </li>
                                <li class="relative group/items">
                                    <a class="pr-5 pl-6 pb-4 font-light text-black  block "
                                        href="product.php?category=vay">Chân váy <i
                                            class="fa-solid fa-chevron-right text-[8px] -translate-y-[2px] duration-300"></i>
                                        <div
                                            class="absolute bg-white w-52 shadow-xl -right-full top-0 hidden group-hover/items:block animate__animated animate__slideInRight">
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=vay&model=xepli">Chân
                                                váy xếp li</a>
                                            <a class="pr-5 pl-6 pb-4 font-light text-black block text-sm"
                                                href="product.php?category=vay&model=butchi">Chân
                                                váy bút chì</a>

                                        </div>
                                </li>
                                <a class="pr-5 pl-6 pb-4 font-light text-black  block"
                                    href="product.php?category=setbo">Set Bộ</a>

                            </ul>
                        </li>
                        <li class="hover:text-black duration-500 ">
                            <a class="text-black" href="lastest.php">SẢN PHẨM MỚI</a>
                        </li>
                        <li class="hover:text-black duration-500 flex items-center gap-x-1 relative group">
                            <a href="collections.php?collection=PARISIAN%20LADY">BỘ SƯU TẬP</a>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            <div
                                class="absolute top-full -left-10 bg-white w-44 translate-y-2 shadow-xl hidden group-hover:block animate__animated animate__fadeInUp duration-150">
                                <a class="pr-5 pl-6 pt-4 font-light text-black  block"
                                    href="collections.php?collection=PARISIAN%20LADY">PARISIAN LADY</a>
                                <a class="pr-5 pl-6 py-6 font-light text-black  block"
                                    href="collections.php?collection=STARRY%20NIGHT">STARRY NIGHT</a>
                                <a class="pr-5 pl-6 pb-4 font-light text-black  block"
                                    href="collections.php?collection=WINTER%20MEMORIES">WINTER MEMORIES</a>
                            </div>
                        </li>

                        <li class="hover:text-black duration-500 flex items-center gap-x-1 relative group">
                            <a href="sale.php?price=500">ĐỒNG GIÁ</a>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            <div
                                class="absolute top-full -left-10 bg-white w-44 translate-y-2 shadow-xl hidden group-hover:block animate__animated animate__fadeInUp duration-150 ">
                                <a class="pr-5 pl-6 pt-4 font-light text-black  block" href="sale.php?price=500">Dưới
                                    500K</a>
                                <a class="pr-5 pl-6 py-6 font-light text-black  block" href="sale.php?price=500-1000">Từ
                                    500K - 1 Triệu</a>
                                <a class="pr-5 pl-6 pb-4 font-light text-black  block" href="sale.php?price=>1000">Trên
                                    1 Triệu</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- left -->
                <ul class="text-xs font-light flex justify-between items-center">
                    <i class="fa-solid fa-heart text-xl px-4"></i>
                    <li class="relative group">
                        <a href="login.php"
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
                            <a class=' py-4' href='../admin/products/view_product.php'>Trang quản trị</a>
                        </li>
                        ";

                            }
                            echo "
                        <li class='px-4'>
                            <i class='fa-solid fa-gift'></i>
                            <a class=' py-4' href='order.php'>Xem đơn hàng</a>
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
                                        <script>window.location.href='login.php';</script>
                                    ";
                        }
                        ?>
                    </li>
                    <li>
                        <a href="cart.php" class="px-4 flex items-center">
                            <div class="relative">
                                <img src="../assets/img/cart.jpg" alt="" class="-translate-y-[1px]">
                                <?php
                                $quantity = 0;
                                if (isset($_SESSION["user-name"])) {
                                    include "../config/connect.php";
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
        <main class="mb-10">
            <section>
                <img src="../assets/img/banner-product.jpg" alt="">
            </section>


            <!-- products -->
            <section class="max-w-screen-xl mx-auto text-xs grid grid-cols-12 max-h-full " style="margin-top:50px;">

                <!-- filter -->
                <section class="grid col-span-3">
                    <ul>
                        <li class="mb-2 font-bold">
                            <p>Danh mục</p>
                        </li>
                        <li class="font-bold">
                            <a href="lastest.php">Tất cả sản phẩm</a>
                        </li>
                        <li class="mt-4">
                            <a href="lastest.php?category=dam" class="font-bold">Đầm</a>
                            <ul>
                                <li class="mt-2"><a href="lastest.php?category=dam&model=damsuong">Đầm Suông</a></li>
                                <li class="my-1"><a href="lastest.php?category=dam&model=dangA">Đầm Dáng A</a></li>
                                <li class="mb-2"><a href="lastest.php?category=dam&model=dangom">Đầm Ôm</a></li>
                            </ul>
                        </li>
                        <li class="mt-4">
                            <a href="lastest.php?category=somi" class="font-bold">Áo sơ mi</a>
                            <ul>
                                <li class="mt-2"><a href="lastest.php?category=somi&model=daitay">Dài Tay</a></li>
                                <li class="my-1"><a href="lastest.php?category=somi&model=ngantay">Ngắn Tay</a></li>
                                <li class="mb-2"><a href="lastest.php?category=somi&model=taylo">Tay Lỡ</a></li>
                            </ul>
                        </li>
                        <li class="mt-4">
                            <a href="lastest.php?category=quan" class="font-bold">Quần</a>
                            <ul>
                                <li class="mt-2"><a href="lastest.php?category=quan&model=short">Quần Short</a></li>
                                <li class="my-1"><a href="lastest.php?category=quan&model=lung">Quần Lửng</a></li>
                                <li class="mb-2"><a href="lastest.php?category=quan&model=dai">Quần Dài</a></li>
                            </ul>
                        </li>
                        <li class="mt-4">
                            <a href="lastest.php?category=vay" class="font-bold">Chân Váy</a>
                            <ul>
                                <li class="mt-2"><a href="lastest.php?category=vay&model=xepli">Chân Váy Xếp Li</a>
                                </li>
                                <li class="my-1"><a href="lastest.php?category=vay&model=butchi">Chân Váy Bút Chì</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mt-4">
                            <a href="lastest.php?category=setbo" class="font-bold">Set Bộ</a>
                        </li>
                    </ul>
                </section>

                <!-- view -->
                <section class=" col-span-9 h-full ">
                    <!-- header-content -->
                    <div class="flex justify-between items-center" style="height:40px;">
                        <!-- content-left -->
                        <div class="">
                            <?php
                            $title = '';

                            if (isset($_GET['category'])) {
                                $category = $_GET['category'];
                                if ($category == 'dam') {
                                    $title = 'ĐẦM';
                                }
                                if ($category == 'somi') {
                                    $title = 'ÁO SƠ MI';
                                }
                                if ($category == 'quan') {
                                    $title = 'QUẦN';
                                }
                                if ($category == 'vay') {
                                    $title = 'CHÂN VÁY';
                                }
                                if ($category == 'setbo') {
                                    $title = 'SET BỘ';
                                }
                            } else {
                                $title = 'SẢN PHẨM MỚI';
                            }
                            ?>
                            <h1 class="font-bold " style="font-size:18px">
                                <?php echo $title ?>
                            </h1>

                        </div>
                        <!-- content-right -->
                        <div class="flex items-center ">
                            <div class="mr-5">
                                <i class="fa-solid fa-magnifying-glass text-sm hover:cursor-pointer"
                                    id="btn-fake-input"></i>
                                <form action="" method="post"
                                    class="relative w-[300px] text-sm hidden mb-2 animate__animated animate__slideInLeft"
                                    id="form-search">
                                    <input type="text" name="txt_search"
                                        class=" outline-none border-b border-b-gray-400 w-full h-10 px-4"
                                        placeholder="Tìm kiếm sản phẩm">
                                    <button name="btn-search" type="submit"
                                        class="absolute text-base bottom-0 -translate-y-1 right-0"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <script>
                                const fakeButtonSearch = document.querySelector('#btn-fake-input');
                                const formSearch = document.querySelector('#form-search');

                                fakeButtonSearch.addEventListener('click', () => {
                                    fakeButtonSearch.classList.add('hidden')
                                    formSearch.classList.replace('hidden', 'block')
                                })
                            </script>
                            <div class="text-sm relative group hover:cursor-pointer">
                                <span class="inline-block w-10">Giá</span>
                                <i class="fa-solid fa-sort"></i>
                                <div
                                    class="border border-gray-400 shadow-md bg-white absolute hidden group-hover:block animate__animated animate__fadeInUp w-44">
                                    <ul class="px-4 ">
                                        <li class="py-2 hover:cursor-pointer">
                                            <a href="lastest.php?sort=low">
                                                <i class="fa-solid fa-arrow-up-wide-short"></i>
                                                <span class="text-xs">Giá từ thấp đến cao</span>
                                            </a>
                                        </li>
                                        <li class="pb-2 hover:cursor-pointer">
                                            <a href="lastest.php?sort=high">
                                                <i class="fa-solid fa-arrow-down-wide-short"></i>
                                                <span class="text-xs">Giá từ cao đến thấp</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- body-content -->
                    <div class="grid grid-cols-3 grid-rows-2 gap-x-4 gap-y-6 mt-4">
                        <?php
                        include "../config/connect.php";

                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $limit = 6;
                        $start = ($current_page - 1) * $limit;

                        $sql_records = "SELECT COUNT(*) as total FROM tbl_products ";

                        if (isset($_POST['btn-search'])) {
                            $txt_search = $_POST['txt_search'];
                            $search_term = '%' . str_replace('d', 'đ', $txt_search) . '%';
                            $sql_records .= " WHERE product_name LIKE :search_term";
                        } else {
                            $sql_records .= " WHERE 1=1";
                        }
                        if (isset($_GET['category'])) {
                            $category = $_GET['category'];
                            $sql_records .= " AND product_category = :category";
                        }
                        if (isset($_GET['model'])) {
                            $model = $_GET['model'];
                            $sql_records .= " AND product_model = :model";
                        }

                        $sort = isset($_GET['sort']) ? $_GET['sort'] : 'default';
                        if ($sort == 'low') {
                            $sql_records .= ' ORDER BY product_price ASC';
                        } elseif ($sort == 'high') {
                            $sql_records .= ' ORDER BY product_price DESC';
                        }



                        $stmt_records = $conn->prepare($sql_records);

                        if (isset($_POST['btn-search'])) {
                            $stmt_records->bindParam(':search_term', $search_term, PDO::PARAM_STR);
                        }
                        if (isset($_GET['category'])) {
                            $stmt_records->bindParam(':category', $category, PDO::PARAM_STR);
                        }
                        if (isset($_GET['model'])) {
                            $stmt_records->bindParam(':model', $model, PDO::PARAM_STR);
                        }

                        $stmt_records->execute();

                        $total_records = $stmt_records->fetch(PDO::FETCH_ASSOC);

                        // Kiểm tra xem truy vấn có thành công hay không trước khi sử dụng dữ liệu
                        
                        if ($total_records) {
                            $total_pages = ceil($total_records['total'] / $limit);

                            // fetch-products
                            $sql = "SELECT * FROM tbl_products ";
                            $param_category = '';
                            $param_model = '';

                            if (isset($_POST['btn-search'])) {
                                $sql .= " WHERE product_name LIKE :search_term";
                                $txt_search = str_replace('d', 'đ', $txt_search);
                            } else {
                                $sql .= " WHERE 1=1";
                            }
                            if (isset($_GET['category'])) {
                                $sql .= " AND product_category = :category";
                                $param_category = '&category='.$_GET['category'];                                
                            }
                            if (isset($_GET['model'])) {
                                $sql .= " AND product_model = :model";
                                $param_model = '&model='.$_GET['model'];

                            }

                            if ($sort == 'low') {
                                $sql .= ' ORDER BY product_price ASC, created_at DESC';
                            } elseif ($sort == 'high') {
                                $sql .= ' ORDER BY product_price DESC, created_at DESC';
                            } else {
                                $sql .= ' ORDER BY created_at DESC';
                            }
                            $param_sort = isset($_GET['sort']) ? '&sort='.$_GET['sort']: '';


                            $sql .= " LIMIT :start, :limit";

                            $stmt = $conn->prepare($sql);

                            if (isset($_POST['btn-search'])) {
                                $stmt->bindParam(':search_term', $search_term, PDO::PARAM_STR);
                            }
                            if (isset($_GET['category'])) {
                                $stmt->bindParam(':category', $category, PDO::PARAM_STR);
                            }
                            if (isset($_GET['model'])) {
                                $stmt->bindParam(':model', $model, PDO::PARAM_STR);
                            }
                            $stmt->bindParam(':start', $start, PDO::PARAM_INT);
                            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);

                            $stmt->execute();
                            $total_product = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($total_product as $product) {
                                ?>
                                <a href="detail.php?id=<?php echo $product['product_id'] ?>"
                                    class="w-full overflow-hidden group hover:cursor-pointer">
                                    <div class="overflow-hidden">
                                        <img src="../assets/img/products/<?php echo $product['product_img'] ?>" alt=""
                                            class="w-full hover:scale-110 duration-700">
                                    </div>
                                    <div class="text-center mt-4">
                                        <h1 class="text-sm font-medium uppercase text-gray-500 group-hover:text-black">
                                            <?php echo $product['product_name'] ?>
                                        </h1>
                                        <p class="text-sm mt-4 font-bold">
                                            <?php echo number_format($product['product_price'], 0, ','); ?> đ
                                        </p>
                                    </div>
                                    <div>

                                    </div>
                                </a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="col-span-10 w-full mt-10">
                        <ul class="flex justify-center">
                            <?php
                            $showPrevNext = $total_pages > 3;
                            if ($showPrevNext && $current_page > 1) {

                                echo '<li><a href="?page=' . ($current_page - 1) . $param_sort . $param_category . $param_model .'" class="h-10 w-16 bg-gray-200 text-black flex mr-3 justify-center items-center text-base group-hover:cursor-pointer hover:bg-black hover:text-white duration-700">Prev</a></li>';
                            }

                            for ($i = max(1, $current_page - 2); $i <= min($current_page + 2, $total_pages); $i++) {

                                if ($i == $current_page) {
                                    echo '<li class="h-10 w-10 font-bold bg-black text-white flex justify-center items-center text-base mr-3">' . $i . '</li>';
                                } else {
                                    echo '<li><a href="?page=' . $i .  $param_sort . $param_category . $param_model .'" class="h-10 w-10 bg-gray-200 text-black flex mr-3 justify-center items-center text-base group-hover:cursor-pointer hover:bg-black hover:text-white duration-700">' . $i . '</a></li>';
                                }
                            }

                            if ($showPrevNext && $current_page < $total_pages) {

                                echo '<li><a href="?page=' . ($current_page + 1) .  $param_sort . $param_category . $param_model .'" class="h-10 w-16 bg-gray-200 text-black flex mr-3 justify-center items-center text-base group-hover:cursor-pointer hover:bg-black hover:text-white duration-700">Next</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </section>
            </section>
        </main>
        <footer class="w-full bg-black text-white">
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
    <script src="../assets/js/app.js"></script>

    <script>
        ScrollReveal({ reset: true });
        ScrollReveal().reveal('.reveal', { delay: 500 });
        ScrollReveal().reveal('.new-arrival', { delay: 300 });

    </script>
</body>

</html>