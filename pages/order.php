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
                            <a href="product.php">SẢN PHẨM</a>
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
                            <a href="lastest.php">SẢN PHẨM MỚI</a>
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

        <main class="my-14 max-w-screen-2xl mx-auto">
            <h1 class="font-bold mb-4 text-xl">THÔNG TIN ĐƠN HÀNG</h1>
            <table class="w-full">
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">MÃ ĐƠN HÀNG</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">EMAIL</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">NGƯỜI NHẬN HÀNG</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">SỐ ĐIỆN THOẠI</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">ĐỊA CHỈ</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">THÔNG TIN ĐƠN HÀNG</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">THANH TOÁN</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">TRẠNG THÁI</th>
                <th class="text-sm bg-gray-400 border-x border-x-slate-100">NGÀY ĐẶT HÀNG</th>

                <?php
                include "../config/connect.php";

                $sql = "SELECT * FROM tbl_orders WHERE order_user = :user ";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":user", $_SESSION["user-name"]);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $row) {
                    ?>
                    <tr class="text-xs text-center py-5 border-b border-gray-200">
                        <td class="px-4 py-4">
                            <?php echo $row['order_id'] ?>
                        </td>
                        <td class="px-4 py-4">
                            <?php echo $row['order_email'] ?>
                        </td>
                        <td class="px-4 py-4">
                            <?php echo $row['order_name'] ?>
                        </td>
                        <td class="px-4 py-4">
                            <?php echo $row['order_phone'] ?>
                        </td>
                        <td class="px-4 py-4">
                            <?php echo $row['order_address'] ?>
                        </td>
                        <td class="px-4 py-4">
                            <?php echo $row['order_detail'] ?>
                        </td>
                        <td class="px-4 py-4 font-bold">
                            <?php echo number_format($row['total_price'], 0, ',', ',') ?> đ
                        </td>
                        <td class="px-4 py-4">
                            <?php
                            if ($row['order_status'] == 0) {
                                echo "<span class='text-xs text-red-600'>Chưa hoàn thành</span>";
                            } else {
                                echo "<span class='text-xs text-green-400'>Đã hoàn thành</span>";
                            }

                            ?>
                        </td>
                        <td class="px-4 py-4">
                            <?php echo $row['created_at'] ?>
                        </td>
                    </tr>


                <?php } ?>
            </table>


        </main>


        <footer class="w-full bg-black text-white fixed bottom-0">
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