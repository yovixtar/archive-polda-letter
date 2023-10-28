<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/polda.png">
    <link rel="icon" type="image/png" href="assets/images/polda.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css" id="theme-styles">

    <title>Login Page</title>

    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-6">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="card-body px-md-5 mx-md-4 pb-0 pt-md-5">

                                    <div class="text-center">
                                        <img src="assets/images/polda.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">POLDA JAWA TENGAH</h4>
                                    </div>

                                    <form method="POST">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username</label>
                                            <input type="text" name="username" id="" class="form-control" placeholder="Username Admin" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" id="" class="form-control" placeholder="Password Admin" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1 d-grid gap-2">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="login" type="submit">Log in</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['login'])) {
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $sql = 'SELECT * FROM users WHERE username = ? and password = md5(?)';
        $row = $config->prepare($sql);
        $row->execute(array($username, $password));
        $check = $row->rowCount();
        if ($check > 0) {
            $hasil = $row->fetch();
            $_SESSION['admin'] = $hasil;
    ?>
            <script>
                let timerInterval
                Swal.fire({
                    icon: "success",
                    title: 'Login Success!',
                    html: 'Redirecting to Home...',
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        window.location = "?";
                    }
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                let timerInterval
                Swal.fire({
                    title: 'Login Failed!',
                    html: 'Try Again...',
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        window.location = "?";
                    }
                })
            </script>
    <?php
        }
    }
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>