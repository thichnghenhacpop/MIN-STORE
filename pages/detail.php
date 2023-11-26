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
                            <a class="text-black" href="product.php">SẢN PHẨM</a>
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
        <main class="mb-10 mt-28">
            <section class="max-w-screen-xl mx-auto grid grid-cols-12 gap-x-24">
                <?php
                include "../config/connect.php";
                $id = $_GET['id'];
                $sql = 'SELECT * FROM tbl_products WHERE product_id = :id';
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $product) {
                    ?>

                    <div class="col-span-8 ">
                        <img src="../assets/img/products/<?php echo $product['product_img'] ?>" alt=""
                            class="object-cover w-full ">
                    </div>
                    <div class="col-span-4 mt-4">
                        <form action="" method="post" class="w-full h-full" id="form-detail">
                            <h1 class="font-bold">
                                <?php echo $product['product_name'] ?>
                            </h1>
                            <p class="text-xs mt-5">Thương hiệu : MINSTORE</p>
                            <p class="text-xs mt-1">Mã SP :
                                <?php echo $product['product_id'] ?>
                            </p>
                            <p class="font-bold text-xl my-10">
                                <?php echo number_format($product['product_price'], 0, ','); ?> đ
                            </p>
                            <div>
                                <h6 class="text-xs mb-4 font-bold">Màu Sắc</h6>
                                <select class="w-full flex gap-x-2" name="color">
                                    <option value="TRẮNG"
                                        class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                        TRẮNG
                                    </option>
                                    <option value="XANH"
                                        class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                        XANH
                                    </option>
                                    <option value="HỒNG"
                                        class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                        HỒNG
                                    </option>
                                    <option value="ĐEN"
                                        class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                        ĐEN
                                    </option>
                                </select>
                            </div>
                            <div>
                                <h6 class="text-xs mt-6 mb-4 font-bold">Kích Thước</h6>
                                <div class="w-full flex gap-x-2">
                                    <select class="w-full flex gap-x-2" name="size">
                                        <option value="M"
                                            class="size-label text-xs px-3 py-4 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                            Size M
                                        </option>
                                        <option value="L"
                                            class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                            Size L
                                        </option>
                                        <option value="XL"
                                            class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                            Size XL
                                        </option>
                                        <option value="2XL"
                                            class="size-label text-xs px-3 py-2 border border-black hover:cursor-pointer hover:bg-black hover:text-white duration-300">
                                            Size 2XL
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                const labelSelected = document.querySelectorAll('.size-label')

                                labelSelected.forEach(label => {
                                    label.style.backgroundColor = ''

                                })

                                labelSelected.forEach(label => {
                                    label.addEventListener('click', (e) => {
                                        label.style.backgroundColor = 'black'
                                        label.style.color = 'white'
                                    })
                                })






                            </script>
                            <div class="mt-10 flex items-center gap-x-32">
                                <label class="text-xs font-bold " for="quantity">Số lượng</label>
                                <div class="relative">
                                    <i id="decrease"
                                        class="text-xs fa-solid fa-chevron-left hover:cursor-pointer absolute left-2 top-1/2 -translate-y-1/2"></i>
                                    <input type="text" id="quantity" name="quantity" value="1"
                                        class="py-2 outline-none border border-black text-center w-[80px] text-sm h-7">
                                    <i id="increase"
                                        class="text-xs fa-solid fa-chevron-right hover:cursor-pointer absolute right-2 top-1/2 -translate-y-1/2"></i>
                                </div>
                                <script>
                                    const decreaseBtn = document.querySelector('#decrease')
                                    const increaseBtn = document.querySelector('#increase')
                                    const quantity = document.querySelector('#quantity')

                                    decreaseBtn.addEventListener('click', () => {
                                        if (quantity.value > 1) {
                                            quantity.value = parseInt(quantity.value) - 1;
                                        }
                                    });

                                    increaseBtn.addEventListener('click', () => {
                                        quantity.value = parseInt(quantity.value) + 1;
                                    });

                                </script>
                            </div>
                            <div class="mt-12">
                                <p class="text-red-600 text-xs ml-4 mb-2" id="non-login"></p>
                                <button type="submit" name="btn-add"
                                    class=" text-center text-white hover:bg-white border hover:border-black w-full h-10 hover:cursor-pointer hover:text-black bg-black duration-300">THÊM
                                    VÀO GIỎ HÀNG</button>
                            </div>
                        </form>
                    </div>

                <?php } ?>

            </section>
            <?php
            if (isset($_POST['btn-add'])) {
                if (isset($_SESSION['user-name'])) {
                    include "../config/connect.php";
                    $id = $_GET['id'];
                    $size = $_POST['size'];
                    $color = $_POST['color'];
                    $quantity = $_POST['quantity'];


                    // Check if a record with the same size and color exists
                    $sql_existing = "SELECT * FROM tbl_cart WHERE product_id = :product_id AND size = :size AND color = :color AND cart_name = :cart_name";
                    $stmt_existing = $conn->prepare($sql_existing);
                    $stmt_existing->bindParam(":product_id", $id, PDO::PARAM_INT);
                    $stmt_existing->bindParam(":size", $size, PDO::PARAM_STR);
                    $stmt_existing->bindParam(":color", $color, PDO::PARAM_STR);
                    $stmt_existing->bindParam(":cart_name", $_SESSION['user-name'], PDO::PARAM_STR);
                    $stmt_existing->execute();
                    $result_existing = $stmt_existing->fetch(PDO::FETCH_ASSOC);

                    if ($result_existing) {
                        // Update the quantity if the same product with the same size and color is in the cart
                        $sql_update = "UPDATE `tbl_cart` 
                                            SET `quantity` = `quantity` + :newQuantity 
                                            WHERE `product_id` = :productID 
                                                AND `size` = :size 
                                                AND `color` = :color 
                                                AND `cart_name` = :cartName";

                        $stmt_update = $conn->prepare($sql_update);
                        $stmt_update->bindParam(':newQuantity', $quantity, PDO::PARAM_INT);
                        $stmt_update->bindParam(':productID', $id, PDO::PARAM_INT);
                        $stmt_update->bindParam(':size', $size, PDO::PARAM_STR);
                        $stmt_update->bindParam(':color', $color, PDO::PARAM_STR);
                        $stmt_update->bindParam(':cartName', $_SESSION['user-name'], PDO::PARAM_STR);
                        $stmt_update->execute();

                        if ($stmt_update->rowCount() > 0) {
                            echo "<script>alert('Cập nhật số lượng thành công.')</script>";
                            echo "<script>window.location.href='product.php'</script>";

                        } else {
                            echo "<script>alert('Có lỗi xảy ra khi cập nhật số lượng.')</script>";

                        }
                    } else {
                        // Insert a new record if the product with the same size and color is not in the cart
                        $sql_insert = "INSERT INTO `tbl_cart`(`product_id`, `cart_name`, `size`, `color`, `quantity`) 
                                            VALUES (:product_id, :cart_name, :size, :color, :quantity)";

                        $stmt_insert = $conn->prepare($sql_insert);
                        $stmt_insert->bindParam(":product_id", $id, PDO::PARAM_INT);
                        $stmt_insert->bindParam(":cart_name", $_SESSION['user-name'], PDO::PARAM_STR);
                        $stmt_insert->bindParam(":size", $size, PDO::PARAM_STR);
                        $stmt_insert->bindParam(":color", $color, PDO::PARAM_STR);
                        $stmt_insert->bindParam(":quantity", $quantity, PDO::PARAM_INT);
                        $stmt_insert->execute();

                        if ($stmt_insert->rowCount() > 0) {
                            echo "<script>alert('Thêm vào giỏ hàng thành công.')</script>";
                            echo "<script>window.location.href='product.php'</script>";

                        } else {
                            echo "<script>alert('Có lỗi xảy ra khi thêm vào giỏ hàng.')</script>";

                        }
                    }

                } else {
                    echo "<script>
                                document.querySelector('#non-login').textContent = 'Bạn cần đăng nhập để thực hiện chức năng này.';
                                document.querySelector('#form-detail').addEventListener('submit', (e) => {
                                    e.preventDefault();
                                })
                            </script>";
                }

            }
            ?>


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