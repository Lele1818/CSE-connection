<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        select, button {
            padding: 10px;
            margin-bottom: 10px;
        }

        .total {
            font-weight: bold;
            font-size: 1.2em;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <header>
        <h1>Giỏ hàng</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <!-- Đây là nơi bạn sẽ thêm sản phẩm từ giỏ hàng của bạn -->
                <tr>
                    <td>Product 1</td>
                    <td>$19.99</td>
                    <td>2</td>
                    <td>$39.98</td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>$29.99</td>
                    <td>1</td>
                    <td>$29.99</td>
                </tr>
            </tbody>
        </table>

        <label for="promo">Chọn chương trình khuyến mãi:</label>
        <select id="promo">
            <option value="none">Không có khuyến mãi</option>
            <option value="discount_10">Giảm giá 10%</option>
            <option value="free_shipping">Miễn phí giao hàng</option>
        </select>

        <label for="shipping">Chọn đơn vị giao hàng:</label>
        <select id="shipping">
            <option value="standard">Giao hàng tiêu chuẩn</option>
            <option value="express">Giao hàng nhanh</option>
        </select>

        <label for="location">Chọn địa điểm giao hàng:</label>
        <select id="location">
            <option value="1">KTX khu A</option>
            <option value="2">KTX khu B</option>
        </select>

        <label for="phone">Chọn số điện thoại:</label>
        <select id="phone">
            <option value="1">0123456789</option>
            <option value="2">0987654321</option>
        </select>

        <p class="total">Tổng giá trị: $69.97</p>

        <button onclick="confirmPayment()">Xác nhận thanh toán</button>
    </main>

    <script>
        function confirmPayment() {
            // Đây là nơi bạn có thể thêm logic xác nhận thanh toán
            const promo = document.getElementById('promo').value;
            const shipping = document.getElementById('shipping').value;

            alert(`Chương trình khuyến mãi: ${promo}\nĐơn vị giao hàng: ${shipping}\nThanh toán thành công!`);
        }
    </script>

</body>
</html>