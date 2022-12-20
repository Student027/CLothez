<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Css Styles -->
    <link href="css/tailwind.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light-green">
        <div class="container-xxl px-4 px-lg-5">
            <a class="navbar-brand" href="#!">CLOTHEZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="Index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Customer Page Top.php">Top</a></li>
                            <li><a class="dropdown-item" href="Customer Page Bottom.php">Bottom</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Order</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Customer Order.php">Ordered Item</a></li>
                            <li><a class="dropdown-item" href="Customer Order history.php">Order History</a></li>
                        </ul>
                    </li>
                </ul>

                <?php
                include "phpconnect.php";

                $sql = "SELECT * FROM cart";
                $runsql = mysqli_query($conn, $sql);
                $num = 0;
                while ($rec = mysqli_fetch_row($runsql)) {
                    $num = $num + 1;
                }

                ?>

                <form class="d-flex" action="Customer Cart.php">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $num; ?></span>
                    </button>
                </form>

                <div class="topbar-divider"></div>

                <?php
                if ($_SESSION['CurUser'] == "") { ?>
                    <a class='btn btn-outline-dark' href='Log In Customer.php'>
                        <i class='bi-box-arrow-right me-1'></i>
                        Log In
                    </a>

                    <div class="topbar-divider"></div>

                    <a class='btn btn-outline-dark' href='Log In Admin.php'>
                        <i class='bi-box-arrow-right me-1'></i>
                        Admin
                    </a>
                <?php
                } else { ?>
                    <a class='btn btn-outline-dark' href="Log Out.php">
                        <i class='bi-box-arrow-right me-1'></i>
                        Log Out
                    </a>
                <?php
                }
                ?>

                <div class="topbar-divider"></div>

                <!--Current User-->
                <span>
                    <?php
                    echo $_SESSION['CurUser'];
                    ?>
                </span>
            </div>
        </div>
    </nav>