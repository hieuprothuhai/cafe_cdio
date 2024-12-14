<template>

    <body>
        <section class="cart-section">
            <h1>Giỏ Hàng Cà Phê</h1>
            <div class="cart-container">
                <!-- Header -->
                <div class="cart-header">
                    <div>Sản Phẩm</div>
                    <div>Đơn Giá</div>
                    <div>Số Lượng</div>
                    <div>Thành Tiền</div>
                    <div>Thao Tác</div>
                </div>

                <!-- Item List -->
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="product-info">
                            <img src="https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2024/7/12/4488115714284869268282814526348938690174100n-17207808676821263041745.jpg"
                                alt="Cà phê sữa" />
                            <div class="product-name">Cà Phê Sữa</div>
                        </div>
                        <div class="product-price">30,000 VND</div>
                        <div class="product-quantity">
                            <button class="btn-decrease">-</button>
                            <input type="number" value="1" min="1" />
                            <button class="btn-increase">+</button>
                        </div>
                        <div class="product-total">30,000 VND</div>
                        <div class="product-actions">
                            <button class="btn-remove">Xóa</button>
                        </div>
                    </div>

                    <!-- Thêm sản phẩm khác -->
                    <div class="cart-item">
                        <div class="product-info">
                            <img src="https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2024/7/12/4488115714284869268282814526348938690174100n-17207808676821263041745.jpg"
                                alt="Latte" />
                            <div class="product-name">Latte</div>
                        </div>
                        <div class="product-price">45,000 VND</div>
                        <div class="product-quantity">
                            <button class="btn-decrease">-</button>
                            <input type="number" value="1" min="1" />
                            <button class="btn-increase">+</button>
                        </div>
                        <div class="product-total">45,000 VND</div>
                        <div class="product-actions">
                            <button class="btn-remove">Xóa</button>
                        </div>
                    </div>
                </div>

                <!-- Cart Footer -->
                <div class="cart-footer">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="cart-summary mb-2">
                                <span>Tổng Cộng:</span>
                                <span class="cart-total">75,000 VND</span>
                            </div>
                            <div>
                                <img src="https://img.vietqr.io/image/970436-1025617315-qr_only.jpg?amount={amount}&addInfo={info}&accountName=PHAM_VAN_HIEU"
                                    alt="" style="height: 200px;width: 200px;">

                            </div>
                        </div>

                        <div class="col-6 ">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-info">In Hóa Đơn</button>
                                <button class="btn-checkout">Thanh Toán</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</template>
<script>
export default {
}
</script>

<style scoped>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.cart-section {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.cart-container {
    margin-top: 20px;
}

.cart-header,
.cart-item {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.cart-header {
    font-weight: bold;
    background-color: #f4f4f4;
}

.cart-item img {
    width: 50px;
    height: 50px;
    border-radius: 4px;
    margin-right: 10px;
}

.product-info {
    display: flex;
    align-items: center;
}

.product-name {
    font-size: 16px;
    color: #333;
}

.product-price,
.product-total {
    text-align: center;
    font-size: 14px;
    color: #555;
}

.product-quantity {
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-quantity button {
    width: 30px;
    height: 30px;
    background-color: #ddd;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.product-quantity input {
    width: 50px;
    text-align: center;
    margin: 0 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.product-actions .btn-remove {
    background-color: #ff6b6b;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 4px;
}

.product-actions .btn-remove:hover {
    background-color: #ff4b4b;
}

/* .cart-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    margin-top: 20px;
    background-color: #f4f4f4;
    border-radius: 4px;
}

.cart-summary {
    font-size: 18px;
    font-weight: bold;
} */
.cart-summary {
    font-size: 18px;
    font-weight: bold;
}

.btn-checkout {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-checkout:hover {
    background-color: #45a049;
}
</style>
