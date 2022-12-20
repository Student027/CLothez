<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light-green">
        <div class="container-xxl px-4 px-lg-5">
            <a class="navbar-brand" href="#!">CLOTHEZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link" href="Admin Item.php" role="button" aria-expanded="false">Item</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Order</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Admin Order Approval.php">Order Approval</a></li>
                            <li><a class="dropdown-item" href="Admin Order History.php">Order History</a></li>
                        </ul>
                    </li>
                </ul>

                <!--Current User-->
                <span><?php
                session_start();
                if (empty($_SESSION['CurAdmin'])) {
                    $_SESSION['CurAdmin']="";
                }
                
                echo $_SESSION['CurAdmin']; 
                
                ?></span>

                <div class="topbar-divider"></div>

                <?php
                if ($_SESSION['CurAdmin'] == "") { ?>
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
                    <a class='btn btn-outline-dark' href="Log Out admin.php">
                        <i class='bi-box-arrow-right me-1'></i>
                        Log Out
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</body>