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

        <main class="w-full">

            <!-- 
                +=============================================+
                =                                             =
                =----------------CAROUSEL---------------------=
                =                                             =
                +=============================================+
             -->
            <section
                class="mt-24 max-w-screen-xl mx-auto h-[800px] flex justify-around bg-no-repeat bg-cover items-center">
                <!-- LOGIN -->

                <div class="-translate-y-[34%]">
                    <h1 class="text-4xl font-bold">ĐĂNG NHẬP</h1>
                    <p class="text-xs my-9">Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận
                        được những <br> ưu đãi tốt hơn!</p>
                    <form action="login.php" method="post">
                        <div class="text-xs text-gray-500 mt-4">
                            <label for="">Tên Tài Khoản</label>
                            <input class="w-full border px-5 py-3 border-gray-300 mt-1 text-xs" type="text"
                                placeholder="Tên tài khoản" name="user-login">
                        </div>
                        <div class="text-xs mt-5 text-gray-500">
                            <label for="">Mật khẩu</label>
                            <input class="w-full border px-5 py-3 border-gray-300 mt-1 text-xs" type="password"
                                placeholder="Mật khẩu" name="password-login">
                        </div>
                        <p class="error-login text-xs font-light mt-2 text-red-700"></p>

                        <a class="text-xs flex justify-end my-4" href="forgot.php">Quên mật khẩu</a>
                        <button type="submit" name="btn-login"
                            class="w-full h-10 bg-black hover:text-black hover:bg-white hover:border duration-300 hover:border-black text-white font-medium">ĐĂNG
                            NHẬP</button>
                    </form>
                </div>

                <!-- SIGNUP -->

                <div class="border-l border-black pl-28">
                    <h1 class="text-4xl font-bold">ĐĂNG KÝ</h1>
                    <p class="text-xs my-9">Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt
                        hơn!</p>
                    <form action="login.php" class="form-signup" method="post">

                        <div class="text-xs text-gray-500 mt-4">
                            <label for="">Email</label>
                            <input id="email-signup" class="w-full border px-5 py-3 border-gray-300 mt-1 text-xs"
                                type="email" placeholder="Email" name="email-signup">
                            <p class="error-email text-xs font-light mt-2 text-red-700"></p>

                        </div>
                        <div class="text-xs text-gray-500 mt-4">
                            <label for="">Tên tài khoản</label>
                            <input id="user-name-signup" class="w-full border px-5 py-3 border-gray-300 mt-1 text-xs"
                                type="text" placeholder="Tên tài khoản" name="user-name-signup">
                            <p class="error-user text-xs font-light mt-2 text-red-700"></p>

                        </div>
                        <div class="text-xs mt-5 text-gray-500">
                            <label for="">Mật khẩu</label>
                            <input id="password-signup" class="w-full border px-5 py-3 border-gray-300 mt-1 text-xs"
                                type="password" placeholder="Mật khẩu" name="password-signup">
                            <p class="error-password text-xs font-light mt-2 text-red-700"></p>

                        </div>
                        <div class="text-xs mt-5 text-gray-500">
                            <label for="">Xác nhận mật khẩu</label>
                            <input id="re-pasword-signup" class="w-full border px-5 py-3 border-gray-300 mt-1 text-xs"
                                type="password" placeholder="Nhập lại mật khẩu" name="re-password-signup">
                            <p class="error-re-password text-xs font-light mt-2 text-red-700"></p>

                        </div>

                        <div class="text-xs text-gray-500 mt-4 ">
                            <input id="new" class="hover:cursor-pointer" type="checkbox">
                            <label class="ml-1 hover:cursor-pointer " for="new">Đăng ký nhận bản tin</label>
                        </div>
                        <p class="error-signup text-xs font-light mt-2 text-red-700"></p>
                        <p class="succes-signup text-xs font-light mt-2 text-green-700"></p>

                        <button type="submit" name="btn-signup"
                            class="w-full h-10 bg-black hover:text-black hover:bg-white hover:border duration-300 hover:border-black text-white font-medium mt-5">ĐĂNG
                            KÝ</button>
                    </form>
                </div>

            </section>

            <script>
                // Lấy tất cả các phần tử cần xác thực từ form
                const form = document.querySelector('.form-signup');
                const emailInput = form.querySelector('#email-signup');
                const userInput = form.querySelector('#user-name-signup'); // Corrected the selector
                const passwordInput = form.querySelector('#password-signup'); // Corrected the selector
                const rePasswordInput = form.querySelector('#re-pasword-signup'); // Corrected the selector

                const errorEmail = form.querySelector('.error-email');
                const errorUser = form.querySelector('.error-user'); // Added user error field
                const errorPassword = form.querySelector('.error-password');
                const errorRePassword = form.querySelector('.error-re-password'); // Added error field for rePassword

                // Regex cho email, số điện thoại và mật khẩu
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const userRegex = /^[a-zA-Z0-9]+$/; // Adjusted regex for user
                const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;

                // Hàm kiểm tra input với regex cung cấp và hiển thị thông báo lỗi nếu cần
                function validateInput(input, regex, errorField, errorMessage) {
                    if (!regex.test(input.value)) {
                        errorField.textContent = errorMessage;
                        input.style.borderColor = 'red';
                    } else {
                        errorField.textContent = "";
                        input.style.borderColor = 'green';
                    }
                }

                // Kiểm tra khi người dùng rời khỏi ô input
                emailInput.addEventListener('blur', function () {
                    validateInput(emailInput, emailRegex, errorEmail, 'Email không hợp lệ');
                });

                userInput.addEventListener('blur', function () {
                    validateInput(userInput, userRegex, errorUser, 'Tên tài khoản không hợp lệ');
                });

                passwordInput.addEventListener('blur', function () {
                    validateInput(passwordInput, passwordRegex, errorPassword, 'Mật khẩu phải lớn hơn 8 ký tự, chứa ít nhất 1 chữ hoa, 1 chữ thường và 1 kí tự đặc biệt');
                });

                rePasswordInput.addEventListener('blur', function () {
                    if (rePasswordInput.value !== passwordInput.value) {
                        errorRePassword.textContent = 'Xác nhận mật khẩu không khớp';
                        rePasswordInput.style.borderColor = 'red';
                    } else {
                        errorRePassword.textContent = '';
                        rePasswordInput.style.borderColor = 'green';
                    }
                });

                // Kiểm tra khi người dùng submit form
                form.addEventListener('submit', function (event) {
                    validateInput(emailInput, emailRegex, errorEmail, 'Email không hợp lệ');
                    validateInput(userInput, userRegex, errorUser, 'Tên tài khoản không hợp lệ');
                    validateInput(passwordInput, passwordRegex, errorPassword, 'Mật khẩu phải lớn hơn 8 ký tự, chứa ít nhất 1 chữ hoa, 1 chữ thường và 1 kí tự đặc biệt');

                    // Kiểm tra xác nhận mật khẩu
                    if (rePasswordInput.value !== passwordInput.value) {
                        errorRePassword.textContent = 'Xác nhận mật khẩu không khớp';
                        rePasswordInput.style.borderColor = 'red';
                    } else {
                        errorRePassword.textContent = '';
                        rePasswordInput.style.borderColor = 'green';
                    }

                    // Ngăn chặn việc submit form nếu có lỗi
                    if (errorEmail.textContent || errorUser.textContent || errorPassword.textContent || errorRePassword.textContent) {
                        event.preventDefault();
                    }
                });
            </script>

            <?php

            include "../config/connect.php";
            if (isset($_POST["btn-login"])) {
                $user_name = $_POST["user-login"];
                $password = $_POST["password-login"];
                $sql = "SELECT * FROM tbl_users WHERE user_name =:user_name AND password =:password";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":user_name", $user_name);
                $stmt->bindParam(":password", $password);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);


                if ($result) {
                    $_SESSION['role'] = $result['role'];
                    $_SESSION['user-email'] = $result['user_email'];
                    $_SESSION['user-name'] = $user_name;
                    if ($_SESSION['role'] == "1") {
                        echo "<script>window.location.href='../admin/products/view_product.php';</script>";
                    } else {
                        echo "<script>window.location.href='../index.php';</script>";
                    }
                } else {
                    echo "
                            <script>
                                const errorLogin = document.querySelector('.error-login')
                                errorLogin.textContent ='Tài khoản hoặc Mật khẩu không chính xác. Vui lòng kiểm tra lại'
                                if(errorLogin) {
                                    const btnLogin = document.querySelector('.btn-login')
                                    btnLogin.addEventListener('click', (e) => {
                                        e.preventDefault()
                                    })
                                }
                            </script>  
                        ";
                }
            }
            if (isset($_POST['btn-signup'])) {
                $user_name = $_POST['user-name-signup'];
                $email = $_POST['email-signup'];
                $password = $_POST['password-signup'];

                $sql = "SELECT * FROM tbl_users WHERE user_name = :user_name";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":user_name", $user_name);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (!$result) {
                    $sql = "INSERT INTO `tbl_users`( `user_email`, `user_name`, `password`) VALUES (:email,:user_name,:password)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(":user_name", $user_name);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $password);
                    $stmt->execute();
                    echo "
                        <script>
                            const succesSignup = document.querySelector('.succes-signup')
                             succesSignup.textContent ='Đăng ký thành công.'
                            if(succesSignup) {
                            const btnForgot = document.querySelector('.btn-signup')
                            btnForgot.addEventListener('click', (e) => {
                                e.preventDefault()
                             })
                            }
                        </script>  
                        ";
                } else {
                    echo "<script> 
                            const errorSignup = document.querySelector('.error-signup')
                            errorSignup.textContent ='Tài khoản đã tồn tại, Vui lòng nhập tài khoản khác'
                            if(errorSignup) {
                                const btnSignup = document.querySelector('.btn-signup')
                                btnSignup.addEventListener('click', (e) => {
                                e.preventDefault()
                            })
                        }
                        </script>";
                }



            }
            ?>




        </main>

        <footer class="w-full bg-black text-white">
            <section class="max-w-screen-xl mx-auto flex justify-between items-center py-10">
                <div>
                    <h1 class="font-bold mb-6"><span class="text-red-600">MIDORA </span>SIMPLE - THỜI TRANG CÔNG SỞ</h1>
                    <p class="text-sm my-3">Địa chỉ : Cổ nhuế 2, Bắc Từ Liêm, Hà Nội</p>
                    <p class="text-sm my-3">Chăm sóc khách hàng : 0378786847</p>
                    <p class="text-sm my-3">Email: tranhongquan.dev@gmail.com</p>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <span class="mx-4">Copyright ©2023 MIDORA. Powered by Tran Hong Quan.</span>
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