<?php
session_start();

if (isset($_POST['action']) && $_POST['action'] == 'add') {
    addToCart($_POST['name'], $_POST['price']);
}

function addToCart($productName, $productPrice) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = [
        'name' => $productName,
        'price' => $productPrice
    ];
    var_dump($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Include Bootstrap CSS (You can replace this with your preferred styling) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../view/index.php">Trang chủ</a>
    </nav>

    <div class="container my-3 py-3">
        <h1 class="text-center">Giỏ hàng</h1>
        <hr>

        <!-- Cart Content -->
        <div class="container">
            <!-- ShowCart -->
            <section class="h-100 gradient-custom">
                <div class="container py-5">
                    <?php
                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $item) {
                            echo "<p>{$item['name']} - {$item['price']} Đ</p>";
                        }
                    } else {
                        echo "<p>Có 0 sản phẩm</p>";
                    }
                    ?>
                </div>
            </section>
            <div className="col-md-4">
                <div className="card mb-4">
                  <div className="card-header py-3 bg-light">
                    <h5 className="mb-0">Thanh toán</h5>
                  </div>
                  <div className="card-body">
                    <ul className="list-group list-group-flush">
                      <li className="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Sản phẩm ({totalItems})<span>{Math.round(subtotal)} đ</span>
                      </li>
                      <li className="list-group-item d-flex justify-content-between align-items-center px-0">
                        Phí giao hàng (Tạm tính)
                        <span>{shipping} đ</span>
                      </li>
                      <li className="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                          <strong>Tổng thanh toán</strong>
                        </div>
                        <span>
                          <strong>{Math.round(subtotal + shipping)} đ</strong>
                        </span>
                      </li>
                    </ul>

                    <Link
                      to="/checkout"
                      className="btn btn-dark btn-lg btn-block"
                    >
                      Đi đến xác nhận thanh toán
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>

           

        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <!-- Your footer content -->
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS (Optional, for some Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>