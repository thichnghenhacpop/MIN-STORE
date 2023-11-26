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
                                <a href="../products/view_product.php">SẢN PHẨM</a>
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
                                 $sql_record_order = "SELECT COUNT(*) as total FROM tbl_orders";
                                 $stmt_record_order = $conn->prepare($sql_record_order);
                                 $stmt_record_order->execute();
                                 $row_order = $stmt_record_order->fetch(PDO::FETCH_ASSOC);
                                 if ($row_order){
                                     echo $row_order['total'];
                                 }
                                 else{
                                     echo 0;
                                 }

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
                                        exit();
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
                class="w-full h-full bg-black bg-opacity-50  hidden justify-center items-center z-10">
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
                            $stmt = $conn->prepare("INSERT INTO products (product_name, product_img, product_category, product_model, product_collection, product_price) VALUES (?, ?, ?, ?, ?, ?)");

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
                    <a href="view_product.php" class="text-xl font-medium">TÀI KHOẢN</a>
                    <div >
                        

                        
                    </div>
                </div>
                <table class="w-full mt-6">
                    <tr class="bg-gray-400">
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">ID</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Email</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Tên tài khoản</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Chức vụ</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Ngày tạo</th>
                        <th class="border-x border-gray-400 bg-slate-300 text-sm">Thao tác</th>
                    </tr>

                    <?php

                    
                    $records_per_page = 6;

                    // Lấy tổng số bản ghi
                    $sql_record = "SELECT COUNT(*) as total FROM tbl_users";

                   

                    $stmt_record = $conn->prepare($sql_record);

                    

                    $stmt_record->execute();
                    $row = $stmt_record->fetch(PDO::FETCH_ASSOC);
                    $total_records = $row['total'];

                    // Tính toán số trang
                    $total_pages = ceil($total_records / $records_per_page);

                    // Kiểm tra và gán giá trị trang hiện tại
                    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    // Xác định chỉ số bản ghi cần lấy
                    $start_from = ($page - 1) * $records_per_page;

                    $sql = "SELECT * FROM tbl_users WHERE 1=1";


                    $sql .= " LIMIT :start, :per_page";

                    $stmt = $conn->prepare($sql);

                    
                    $stmt->bindParam(':start', $start_from, PDO::PARAM_INT);
                    $stmt->bindParam(':per_page', $records_per_page, PDO::PARAM_INT);

                    $stmt->execute();

                    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($users as $user) {
                        ?>
                        <tr class="text-xs border-b border-b-gray-200 ">
                            <td class="text-center">
                                <?php echo $user['user_id'] ?>
                                <input type="hidden" name="txt_id" value="<?php echo $user['user_id'] ?>">
                            </td>
                            <td class="text-center">
                                <?php echo $user['user_email'] ?>
                            </td>
                            <td class="text-center">
                                <?php echo $user['user_name'] ?>
                            </td>
                            <td >
                                <div class="flex gap-x-4 justify-center items-center">
                                    <a id="role1" href="?id=<?php echo $user['user_id'] ?>&role=1"  class="text-xs border border-black hover:text-white hover:bg-black duration-500 w-28 h-7 flex items-center justify-center <?php echo ($user['role'] == 1) ? 'bg-black text-white' : ''; ?>">QUẢN TRỊ VIÊN</a>
                                    <a id="role2" href="?id=<?php echo $user['user_id'] ?>&role=2"  class="text-xs border border-black hover:text-white hover:bg-black duration-500 w-28 h-7 flex items-center justify-center <?php echo ($user['role'] == 2) ? 'bg-black text-white' : ''; ?>">KHÁCH</a>   
                                </div>
                           
                            </td>
                            <td class="text-center">
                                <?php echo $user['created_at'] ?>
                            </td>
                            <td class="text-center py-4">
                                <form action="" method="post">
                                    <input type="hidden" name="user_id-info" value="<?php echo $user['user_id'] ?>">
                                    <button name="btn-remove" type="submit" ><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                           
                        </tr>
                    <?php } ?>
                        
                    
                    
                        <?php
                            if (isset($_GET['id']) && isset($_GET['role'])) {
                                $userId = $_GET['id'];
                                $selectedRole = $_GET['role'];
                                $sql = "UPDATE `tbl_users` SET `role` = :selectedRole WHERE `user_id` = :userId";
                                $stmt = $conn->prepare($sql);
                                $stmt->bindParam(":selectedRole", $selectedRole, PDO::PARAM_INT);
                                $stmt->bindParam(":userId", $userId, PDO::PARAM_INT);
                                $stmt->execute();
                                echo "
                                    <script>
                                     window.location.href='remove_account.php'
                                    </script>
                                
                                ";
                            }
                        ?>
                        
                    <?php
                        if(isset($_POST['btn-remove'])) {
                            $id = $_POST['user_id-info'];
                            $sql = 'DELETE FROM `tbl_users` WHERE user_id = :user_id';
                            $stmt = $conn->prepare($sql);
                            $stmt->bindParam(':user_id', $id, PDO::PARAM_INT);
                           
                            if($stmt->execute()) {
                                echo "
                                    <script>
                                        alert('Xóa thành công');
                                        window.location.href='remove_account.php'
                                    </script>
                                ";
                            }
                            else {
                                echo "
                                    <script>
                                        alert('Có lỗi xảy ra');
                                        
                                    </script>
                                ";

                            }

                        }
                    
                    ?>

                </table>
                <div class="mt-6">
                    <ul class="flex justify-center">
                        <?php
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($i == $page) {
                                echo '<li class="h-10 w-10 font-bold bg-black text-white flex justify-center items-center text-base mr-3">' . $i . '</li>';
                            } else {
                                echo '<li><a href="?page=' . $i . '" class=" h-10 w-10 bg-gray-200 text-black flex mr-3 justify-center items-center text-base group-hover:cursor-pointer hover:bg-black hover:text-white duration-700">' . $i . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </section>


        </section>



    </div>
</body>

</html>l