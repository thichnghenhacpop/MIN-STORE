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
        <main class="my-14">
            <section class="max-w-screen-xl mx-auto">
                <form action="" method="post" class="w-full mt-10">
                    <table class="w-full">
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">ID</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">TÊN SẢN PHẨM</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">ẢNH SẢN PHẨM</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">KÍCH CỠ</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">MÀU SẮC</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">SỐ LƯỢNG</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">ĐƠN GIÁ</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">THÀNH TIỀN</th>
                        <th class="text-sm bg-gray-400 border-x border-x-slate-100">THAO TÁC</th>

                        <?php
                        include "../config/connect.php";
                        $sql = "SELECT * FROM tbl_cart INNER JOIN tbl_products ON tbl_cart.product_id = tbl_products.product_id WHERE cart_name = :cart_name";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(":cart_name", $_SESSION["user-name"], PDO::PARAM_STR);
                        $stmt->execute();
                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $all_items = array();

                        foreach ($result as $cart) {
                            ?>
                            <tr>
                                <td class="text-center border-b border-b-gray-200 text-xs">
                                    <?php echo $cart['product_id'] ?>
                                </td>
                                <td class="text-center border-b border-b-gray-200 text-xs">
                                    <?php echo $cart['product_name'] ?>
                                </td>
                                <td class="text-center border-b border-b-gray-200 text-xs w-10 h-10 py-3 object-contain">
                                    <img src="../assets/img/products/<?php echo $cart['product_img'] ?>" alt="">
                                </td>
                                <td class="text-center border-b border-b-gray-200 text-xs">
                                    <?php echo $cart['size'] ?>
                                </td>
                                <td class="text-center border-b border-b-gray-200 text-xs">
                                    <?php echo $cart['color'] ?>
                                </td>
                                <td class="text-center border-b border-b-gray-200 text-xs ">
                                    <div class="relative">
                                        <i
                                            class="decrease absolute left-1/4 translate-x-3 top-1/2 -translate-y-1/2 hover:cursor-pointer fa-solid fa-chevron-left"></i>
                                        <input type="text" name="txt_quantity" value="<?php echo $cart['quantity'] ?>"
                                            class=" quantity text-center ouline-none border border-gray-400 w-20 h-7">
                                        <i
                                            class="increase absolute right-1/4 -translate-x-3 top-1/2 -translate-y-1/2 hover:cursor-pointer fa-solid fa-chevron-right"></i>
                                    </div>

                                </td>
                                <input class="price" type="hidden" value="<?php echo $cart['product_price'] ?>">
                                <td class="text-center border-b border-b-gray-200 text-xs font-bold">
                                    <?php echo number_format($cart['product_price'], 0, ',', ',') ?> đ
                                </td>
                                <td class="total-price-only text-center border-b border-b-gray-200 text-xs font-bold">
                                </td>

                                <td class="text-center border-b border-b-gray-200 text-xs">
                                    <button type="submit" name="btn-remove"><i class="fa-solid fa-trash"></i></button>
                                </td>
                                <?php
                                $array_list = array(
                                    'id' => $cart['product_id'],
                                    'name' => $cart['product_name'],
                                    'size' => $cart['size'],
                                    'color' => $cart['color'],
                                    'quantity' => $cart['quantity']
                                );
                                $all_items[] = $array_list;
                                ?>
                            </tr>
                        <?php } ?>

                    </table>
                    <div class="w-full flex justify-end">
                        <p class="mt-4 text-xs">Tổng Thanh Toán : <span id="total-price-all" class="font-bold"></span>
                        </p>
                        <input id="get-total-price-all" name="total_price" type="hidden" value>
                        <script>
                            const increaseBtns = document.querySelectorAll('.increase');
                            const decreaseBtns = document.querySelectorAll('.decrease');
                            const quantityInputs = document.querySelectorAll('.quantity');
                            const priceInputs = document.querySelectorAll('.price');
                            const totalPriceOnly = document.querySelectorAll('.total-price-only');



                            increaseBtns.forEach((increaseBtn, index) => {
                                increaseBtn.addEventListener('click', () => {
                                    quantityInputs[index].value = parseInt(quantityInputs[index].value) + 1;
                                    updateTotalPrice();
                                    totalPriceAll();
                                });
                            });

                            decreaseBtns.forEach((decreaseBtn, index) => {
                                decreaseBtn.addEventListener('click', () => {
                                    if (quantityInputs[index].value > 1) {
                                        quantityInputs[index].value = parseInt(quantityInputs[index].value) - 1;
                                    }
                                    updateTotalPrice();
                                    totalPriceAll();
                                });
                            });

                            function updateTotalPrice() {
                                quantityInputs.forEach((quantityInput, index) => {
                                    const quantity = parseInt(quantityInput.value);
                                    const price = parseFloat(priceInputs[index].value);
                                    const totalPriceRow = quantity * price;
                                    const formattedString = totalPriceRow.toLocaleString('vi-VN', {
                                        style: 'decimal',
                                        minimumFractionDigits: 0,
                                        maximumFractionDigits: 0,
                                        minimumIntegerDigits: 1,
                                    }).replaceAll('.', ',');
                                    totalPriceOnly[index].textContent = formattedString + ' đ';
                                });
                            }

                            quantityInputs.forEach(input => {
                                input.addEventListener('change', updateTotalPrice);
                            });

                            function totalPriceAll() {
                                let totalPrice = 0;
                                totalPriceOnly.forEach(value => {
                                    totalPrice += parseFloat(value.textContent.replace(' đ', '').replaceAll(',', ''));
                                });

                                const formattedTotalPrice = totalPrice.toLocaleString('vi-VN', {
                                    style: 'decimal',
                                    minimumFractionDigits: 0,
                                    maximumFractionDigits: 0,
                                    minimumIntegerDigits: 1,
                                }).replaceAll('.', ',');

                                document.getElementById('get-total-price-all').value = totalPrice;
                                document.querySelector('#total-price-all').textContent = formattedTotalPrice + ' đ';
                            }
                            totalPriceAll();

                            document.addEventListener('DOMContentLoaded', updateTotalPrice);
                            document.addEventListener('DOMContentLoaded', totalPriceAll);
                        </script>

                    </div>

                    <div class="mt-4 w-1/2">
                        <h1 class="font-bold text-2xl uppercase">Xác nhận thông tin đơn hàng</h1>
                        <div class="text-xs mt-3 ">
                            <label class="mr-4 font-bold " for="">Email: </label>
                            <input name="txt_email" type="text" value="<?php echo $_SESSION['user-email'] ?>"
                                class="outline-none mt-1 px-4 w-full h-10 border border-gray-400">
                        </div>
                        <div class="text-xs mt-3 ">
                            <label class="mr-4 font-bold" for="">Người nhận hàng: </label>
                            <input name="txt_name" type="text"
                                class="outline-none mt-1 px-4 w-full h-10 border border-gray-400"
                                placeholder="Họ và tên...VD: Nguyễn Văn A" required>
                        </div>
                        <div class="text-xs mt-3">
                            <label class="mr-4 font-bold" for="">Số điện thoại : </label>
                            <input name="txt_phone" type="text"
                                class="outline-none mt-1 px-4 w-full h-10 border border-gray-400"
                                placeholder="Số điện thoại nhận hàng..." required>
                        </div>
                        <div class="text-xs mt-3">
                            <label class="mr-4 font-bold" for="">Địa chỉ: </label>
                            <input name="txt_address" type="text"
                                class="outline-none mt-1 px-4 w-full h-10 border border-gray-400"
                                placeholder="Địa chỉ giao hàng...VD : Hà Nội, VN" required>
                        </div>
                        <div class="flex justify-end mt-6 text-xs w-full">
                            <button name="btn-order" type="submit"
                                class=" w-28 h-10 border border-black text-xs font-medium hover:cursor-pointer hover:bg-black hover:text-white duration-500">XÁC
                                NHẬN</button>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['btn-order'])) {
                    include "../config/connect.php";

                    $email = $_POST['txt_email'];
                    $user = $_SESSION['user-name'];
                    $name = $_POST['txt_name'];
                    $phone = $_POST['txt_phone'];
                    $address = $_POST['txt_address'];
                    $total = $_POST['total_price'];

                    $detail = ''; // Initialize $detail here
                
                    foreach ($all_items as $item) {
                        $detail .= 'Mã SP: ' . $item['id'] . ', ' . $item['name'] . ', ' . $item['size'] . ', ' . $item['color'] . ', SL: ' . $item['quantity'] . "<br>";
                    }

                    $sql = "INSERT INTO `tbl_orders` (`order_email`, `order_user`, `order_name`, `order_detail`, `total_price`, `order_phone`, `order_address`) VALUES (:email, :user, :name, :detail, :total, :phone, :address)";
                    $stmt_insert = $conn->prepare($sql);
                    $stmt_insert->bindParam(":email", $email, PDO::PARAM_STR);
                    $stmt_insert->bindParam(":user", $user, PDO::PARAM_STR);
                    $stmt_insert->bindParam(":name", $name, PDO::PARAM_STR);
                    $stmt_insert->bindParam(":detail", $detail, PDO::PARAM_STR);
                    $stmt_insert->bindParam(":total", $total, PDO::PARAM_STR);
                    $stmt_insert->bindParam(":phone", $phone, PDO::PARAM_INT);
                    $stmt_insert->bindParam(":address", $address, PDO::PARAM_STR);

                    $stmt_insert->execute();

                    // Check for success or handle errors
                    if ($stmt_insert->rowCount() > 0) {
                        echo "<script>alert('Đặt hàng thành công.')</script>";
                        echo "<script>window.location.href='order.php'</script>";
                    } else {
                        echo "<script>alert('Đặt hàng thất bại.')</script>";
                    }
                }
                ?>

                <?php
                if (isset($_POST['btn-remove'])) {
                    include '../config/connect.php';
                    $id = $cart['product_id'];
                    $size = $cart['size'];
                    $color = $cart['color'];
                    $cart_name = $_SESSION['user-name'];

                    $sql_remove = "DELETE FROM `tbl_cart` WHERE product_id = :product_id AND size = :size AND color =:color AND cart_name = :cart_name";
                    $stmt_remove = $conn->prepare($sql_remove);
                    $stmt_remove->bindParam(":product_id", $id, PDO::PARAM_INT);
                    $stmt_remove->bindParam(":size", $size, PDO::PARAM_STR);
                    $stmt_remove->bindParam(":color", $color, PDO::PARAM_STR);
                    $stmt_remove->bindParam(":cart_name", $cart_name, PDO::PARAM_STR);
                    if ($stmt_remove->execute()) {
                        echo "<script>window.location.href='cart.php'</script>";
                    }
                }
                ?>
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