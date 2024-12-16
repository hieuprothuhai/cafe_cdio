<template>
  <div class="cart-container">
    <h1 class="text-center mb-4">Coffee Shop - Giỏ Hàng</h1>

    
    

    <!-- Giỏ hàng -->
    <div  class="cart-summary mt-5">
      <h2>Your Cart</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <td></td>
            <td></td>
            <td>$</td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3" class="text-end"><strong>Total:</strong></td>
            <td class="cart-total">$</td>
          </tr>
        </tbody>
      </table>
      <button class="btn checkout-btn w-100 mt-3">Proceed to Checkout</button>
    </div>

    <!-- Nếu giỏ hàng trống -->
    </div>
</template>
  
  <script>
export default {
}
</script>
  
  <style scoped>
.cart-container {
  max-width: 1200px;
  margin: 0 auto;
}

.product-card {
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.product-card img {
  object-fit: cover;
  height: 200px;
}

.cart-summary {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.cart-total {
  font-size: 1.25rem;
  font-weight: bold;
}

.checkout-btn {
  background-color: #28a745;
  color: white;
  font-size: 1.1rem;
}

.checkout-btn:hover {
  background-color: #218838;
}
</style>
  