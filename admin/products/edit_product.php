<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm - MINSTORE</title>
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/tailwind.css">
</head>
<?php
session_start();

if (!isset($_SESSION["user-name"]) && $_SESSION["role"] != 1) {
    echo "
        <script>window.location.href='login.php'</script>
    ";
}
include "../../config/connect.php";
?>

<body>
    <div id="app" class="grid grid-cols-12 grid-rows-1 w-full overflow-hidden">
        <section id="side-bar" class="col-span-2 overflow-hidden bg-[#1C2434] h-full">
            <!-- logo -->
            <div class="h-[96px] w-full flex justify-center items-center border-b border-red-500">
                <a href="../../index.php">
                    <span class="font-bold text-white text-4xl "><span class="text-red-600">MIN</span>STORE</span>
                </a>
            </div>
            <!-- logo -->
            <div>
                <ul>
                    <li class="text-white text-sm w-full h-30 px-4  hover:cursor-pointer group ">
                        <div class="w-full flex justify-between items-center mt-4 ">
                            <div>
                                <i class="fa-solid fa-chart-simple mr-4"></i>
                                <a href="view_product.php">SẢN PHẨM</a>
                            </div>
                            <p class="w-6 h-6 flex justify-center items-center bg-red-600 rounded-full">
                                <?php
                                $stmt = $conn->prepare("SELECT COUNT(*) as total FROM tbl_products");
                                $stmt->execute();
                                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                echo $result['total'];
                                ?>
                            </p>
                        </div>
                        <!-- dropdown-menu__products -->
                        <ul class="w-full px-4 mt-2">
                            <li class="p-2 hover:bg-red-400" id="add-product">
                                <i class=" mr-2 fa-solid fa-plus"></i>
                                <a href="#">Thêm sản phẩm</a>
                                <script>
                                    document.getElementById("add-product").addEventListener("click", () => {
                                        document.querySelector('#overlay-modal').classList.replace('hidden', 'flex')
                                        document.querySelector('#toggle-modal').classList.replace('hidden', 'block')
                                    });
                                    document.getElementById("btn-cancel").addEventListener("click", () => {
                                        document.querySelector('#overlay-modal').classList.replace('flex', 'hidden')
                                        document.querySelector('#toggle-modal').classList.replace('block', 'hidden')
                                    })

                                </script>

                            </li>

                        </ul>
                        <!-- dropdown-menu__products -->

                    </li>
                    <li
                        class="text-white text-sm w-full h-12 mt-1 flex justify-between px-4 items-center hover:bg-red-400 hover:cursor-pointer ">
                        <div>
                            <i class="fa-solid fa-address-book mr-4"></i>
                            <a href="../accounts/remove_account.php">TÀI KHOẢN</a>
                        </div>
                        <p class="w-6 h-6 flex justify-center items-center bg-red-600 rounded-full">
                            <?php
                            $stmt = $conn->prepare("SELECT COUNT(*) as total FROM tbl_users");
                            $stmt->execute();
                            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                            echo $result['total'];
                            ?>
                        </p>


                    </li>
                    <li
                        class="text-white text-sm w-full h-12 flex justify-between px-4 items-center hover:bg-red-400 hover:cursor-pointer ">
                        <div>
                            <i class="fa-solid fa-cart-arrow-down mr-4"></i>
                            <a href="../orders/view-order.php">ĐƠN HÀNG</a>
                        </div>
                        <p class="w-6 h-6 flex justify-center items-center bg-red-600 rounded-full">
                            <?php
                            $stmt = $conn->prepare("SELECT COUNT(*) as total FROM tbl_orders");
                            $stmt->execute();
                            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                            echo $result['total'];
                            ?>
                        </p>


                    </li>

                </ul>
            </div>

        </section>
        <section id="container" class="col-span-10 overflow-hidden h-full">
            <!-- +-----------------------------HEADER---------------------------- -->
            <header class="w-full h-[96px] flex shadow-md">
                <nav class="w-full mx-10 h-full flex justify-between items-center">
                    <!-- search-box -->
                    <ul>

                    </ul>
                    <!-- search-box -->

                    <!-- user-info -->
                    <ul class="h-full">
                        <li class="text-base flex items-center relative group hover:cursor-pointer h-full">
                            <i class="fa-solid fa-user mr-2"></i>
                            <span> Xin chào,
                                <?php echo $_SESSION['user-name'] ?>
                            </span>

                            <!-- dropdown-menu__logout -->
                            <ul
                                class="absolute bg-white top-3/4 group-hover:block hidden right-0 text-xs  w-32 border border-gray-300 h-8 shadow-md hover:cursor-pointer animate__animated animate__fadeInUp animate__fast">
                                <li class="flex px-6 py-2">
                                    <form action="" method="post">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        <button type="submit" name="btn-logout">Đăng Xuất</button>
                                    </form>
                                    <?php
                                    if (isset($_POST['btn-logout'])) {
                                        $_SESSION = array();
                                        session_destroy();
                                        echo "<script>window.location.href='../../pages/login.php'</script>";
                                        
                                    }

                                    ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- user-info -->
                </nav>


            </header>

            <!-- +-----------------------------ADD PRODUCT MODAL---------------------------- -->

            <section id="overlay-modal"
                class="w-full h-full bg-black bg-opacity-10  hidden justify-center items-center z-10">
                <div id="toggle-modal"
                    class="z-20 bg-white hidden -translate-y-5  w-[1000px] h-[600px] animate__animated animate__fadeIn">
                    <div class="px-6 py-4">
                        <h1 class="text-xl font-medium py-5 border-b border-gray-400"> <i
                                class=" mr-2 fa-solid fa-plus"></i>THÊM SẢN PHẨM</h1>
                        <form action="" method="post" enctype="multipart/form-data" class="w-full h-full ">
                            <div class="grid grid-cols-12 gap-x-6">
                                <!-- content-left -->
                                <div class="col-span-7">
                                    <div class="mt-4 mb-2">
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Tên sản phẩm: </label>
                                            <input type="text" name="txt_product_name"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Nhập tên sản phẩm">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Phân loại: </label>
                                            <input type="text" name="txt_product_category"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Phân loại...VD; Đầm, Sơ Mi, Quần, Chân váy">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Kiểu dáng: </label>
                                            <input type="text" name="txt_product_model"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Kiểu dáng...VD: dáng A, Dài tay, Lửng, Short....">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Bộ sưu tập: </label>
                                            <input type="text" name="txt_product_collection"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Bộ sưu tập...VD: WINTER MEMORIES, PARISIAN LADY, STARRY NIGHT">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Giá: </label>
                                            <input type="number" name="txt_product_price"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Nhập giá sản phẩm - Đơn vị : VND">

                                        </div>

                                    </div>
                                </div>

                                <!-- content-right -->
                                <div class="mt-4 mb-2 col-span-5">
                                    <label class="mr-4 ml-4" for="">Ảnh sản phẩm: </label>
                                    <input id="uploadInput" accept="image/*" type="file" name="txt_product_img"
                                        class="px-4 w-full mt-2 py-2 text-sm   outline-none">
                                    <img id="preview" class="hidden w-[300px] h-[300px] object-contain" src="#"
                                        alt="preview">
                                    <script>
                                        document.getElementById('uploadInput').addEventListener('change', function (e) {
                                            var file = e.target.files[0];
                                            if (file) {
                                                var reader = new FileReader();
                                                reader.onload = function (e) {
                                                    document.getElementById('preview').classList.replace('hidden', 'block');
                                                    document.getElementById('preview').src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="mt-6 flex justify-end gap-x-4">
                                <button type="submit" id="btn-cancel"
                                    class="text-black bg-white border border-black hover:bg-red-600 hover:text-white hover:border-none w-40 h-10 duration-300 ">HỦY</button>
                                <button type="submit" name="btn-add-product"
                                    class="bg-black text-white w-40 h-10 hover:text-black hover:border hover:border-black hover:bg-white duration-300 ">XÁC
                                    NHẬN</button>
                            </div>
                        </form>
                        <?php

                        if (isset($_POST['btn-add-product'])) {

                            $productName = $_POST["txt_product_name"];
                            $productCategory = $_POST["txt_product_category"];
                            $productModel = $_POST["txt_product_model"];
                            $productCollection = $_POST["txt_product_collection"];
                            $productPrice = $_POST["txt_product_price"];

                            // Upload image
                            $uploadPath = "../../assets/img/products/";
                            $imageName = $_FILES["txt_product_img"]["name"];
                            $imagePath = $uploadPath . $imageName;

                            move_uploaded_file($_FILES["txt_product_img"]["tmp_name"], $imagePath);

                            // Insert data into the database
                            $stmt = $conn->prepare("INSERT INTO tbl_products (product_name, product_img, product_category, product_model, product_collection, product_price) VALUES (?, ?, ?, ?, ?, ?)");

                            $stmt->bindParam(1, $productName);
                            $stmt->bindParam(2, $imageName);
                            $stmt->bindParam(3, $productCategory);
                            $stmt->bindParam(4, $productModel);
                            $stmt->bindParam(5, $productCollection);
                            $stmt->bindParam(6, $productPrice);
                            // Execute the statement
                            $success = $stmt->execute();

                            if ($success) {
                                echo "<script>
                                            alert('Thêm sản phẩm thành công');
                                            window.location.href = 'view_product.php';
                                          </script>";
                            } else {
                                echo "<script>
                                            alert('Có lỗi xảy ra, vui lòng thử lại');
                                          </script>";
                            }

                        }
                        ?>
                    </div>
                </div>
            </section>

            <!-- +-----------------------------VIEW PRODUCT ---------------------------- -->
            <section class="max-w-screen-2xl mx-auto mt-10">
                <div class="w-full flex justify-between items-center mb-6 ">
                <div>

                </div>
                </div>
                <table class="w-full mt-6">
                    <tr class="bg-gray-400">
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">ID</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Tên sản phẩm</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Ảnh sản phẩm</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Phân loại</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Kiểu dáng</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Bộ sưu tập</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Giá</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Ngày nhập</th>

                    </tr>

                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM tbl_products WHERE product_id = :product_id";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':product_id', $id, PDO::PARAM_INT);
                    $stmt->execute();

                    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($products as $product) {
                        ?>
                        <tr class="text-sm">
                            <td class="text-center">
                                <?php echo $product['product_id'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $product['product_name'] ?>
                            </td>
                            <td class="flex justify-center">
                                <img class="w-16" src="../../assets/img/products/<?php echo $product['product_img'] ?>"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <?php echo $product['product_category'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $product['product_model'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $product['product_collection'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($product['product_price'], 0, ','); ?> đ
                            </td>
                            <td class="text-center">
                                <?php echo $product['created_at'] ?>
                            </td>

                        </tr>
                    <?php } ?>
                </table>

                <div 
                    class="z-20 bg-white -translate-y-5 w-full animate__animated animate__fadeIn">
                    <div class="px-6 py-4">
                        <h1 class="text-xl font-medium py-5 border-b border-gray-400"> <i
                                class=" mr-2 fa-solid fa-pen-to-square"></i>SỬA SẢN PHẨM</h1>
                        <form action="" method="post" enctype="multipart/form-data" class="w-full h-full ">
                            <div class="grid grid-cols-12 gap-x-6">
                                <!-- content-left -->
                                <div class="col-span-7">
                                    <div class="mt-4 mb-2">
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Tên sản phẩm: </label>
                                            <input type="text" name="txt_product_name"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Nhập tên sản phẩm">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Phân loại: </label>
                                            <input type="text" name="txt_product_category"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Phân loại...VD; Đầm, Sơ Mi, Quần, Chân váy">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Kiểu dáng: </label>
                                            <input type="text" name="txt_product_model"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Kiểu dáng...VD: dáng A, Dài tay, Lửng, Short....">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Bộ sưu tập: </label>
                                            <input type="text" name="txt_product_collection"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Bộ sưu tập...VD: WINTER MEMORIES, PARISIAN LADY, STARRY NIGHT">
                                        </div>
                                        <div class="mt-4  mb-2">
                                            <label class="mr-4 ml-2" for="">Giá: </label>
                                            <input type="number" name="txt_product_price"
                                                class="w-full mt-2 py-2 px-4 text-sm border-b border-gray-300 outline-none"
                                                placeholder="Nhập giá sản phẩm - Đơn vị : VND">

                                        </div>

                                    </div>
                                </div>

                                <!-- content-right -->
                                <div class="mt-4 mb-2 col-span-5">
                                    <label class="mr-4 ml-4" for="">Ảnh sản phẩm: </label>
                                    <input id="uploadInput" accept="image/*" type="file" name="txt_product_img"
                                        class="px-4 w-full mt-2 py-2 text-sm   outline-none">
                                    <img id="preview" class="hidden w-[300px] h-[300px] object-contain" src="#"
                                        alt="preview">
                                    <script>
                                        document.getElementById('uploadInput').addEventListener('change', function (e) {
                                            var file = e.target.files[0];
                                            if (file) {
                                                var reader = new FileReader();
                                                reader.onload = function (e) {
                                                    document.getElementById('preview').classList.replace('hidden', 'block');
                                                    document.getElementById('preview').src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="mt-6 flex justify-end gap-x-4">
                                <a href="view_product.php"
                                    class="text-black bg-white border justify-center flex items-center border-black hover:bg-red-600 hover:text-white hover:border-none w-40 h-10 duration-300 ">HỦY</a>
                                <button type="submit" name="btn-edit-product"
                                    class="bg-black text-white w-40 h-10 hover:text-black hover:border hover:border-black hover:bg-white duration-300 ">XÁC
                                    NHẬN</button>
                            </div>
                        </form>
                        <?php

                        if (isset($_POST['btn-edit-product'])) {
                            $productID = $_GET['id'];
                            $productName = $_POST["txt_product_name"];
                            $productCategory = $_POST["txt_product_category"];
                            $productModel = $_POST["txt_product_model"];
                            $productCollection = $_POST["txt_product_collection"];
                            $productPrice = $_POST["txt_product_price"];

                            // Upload image
                            $uploadPath = "../../assets/img/products/";
                            $imageName = $_FILES["txt_product_img"]["name"];
                            $imagePath = $uploadPath . $imageName;

                            move_uploaded_file($_FILES["txt_product_img"]["tmp_name"], $imagePath);

                            // Insert data into the database
                            $sql = "UPDATE `tbl_products` SET product_name=:name,product_img=:img, product_category=:category, product_model=:model, product_collection =:collection, product_price=:price WHERE product_id = :product_id";
                            $stmt = $conn->prepare($sql);

                            $stmt->bindParam(":name", $productName);
                            $stmt->bindParam(":img", $imageName);
                            $stmt->bindParam(":category", $productCategory);
                            $stmt->bindParam(":model", $productModel);
                            $stmt->bindParam(":collection", $productCollection);
                            $stmt->bindParam(":price", $productPrice);
                            $stmt->bindParam(":product_id", $productID);
                            // Execute the statement
                            $success = $stmt->execute();

                            if ($success) {
                                echo "<script>
                                            alert('Sửa sản phẩm thành công');
                                            window.location.href = 'view_product.php';
                                          </script>";
                            } else {
                                echo "<script>
                                            alert('Có lỗi xảy ra, vui lòng thử lại');
                                          </script>";
                            }

                        }
                        ?>
                    </div>
                </div>

            </section>
        </section>



    </div>
</body>

</html>