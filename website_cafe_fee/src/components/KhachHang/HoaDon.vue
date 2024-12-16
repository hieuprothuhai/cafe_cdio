<template>
  <div class="invoice-container">
    <div class="invoice-header">
      <h2>Invoice</h2>
      <div class="invoice-details">
        <p><strong>Invoice ID:</strong> </p>
        <p><strong>Date:</strong></p>
        <p><strong>Customer Name:</strong> </p>
        <p><strong>Address:</strong> </p>
      </div>
    </div>

    <div class="invoice-body">
      <table class="table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="invoice-footer">
      <p><strong>Total Amount: </strong> </p>
      <div class="buttons">
        <button >Print Invoice</button>
        <button >Pay Now</button>
      </div>
    </div>
  </div>
</template>
  
  <script>
export default {
}
  
</script>
  
 <style>
 .invoice-container {
  width: 80%;
  margin: 20px auto;
  padding: 30px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.invoice-header {
  text-align: center;
  margin-bottom: 30px;
}

.invoice-header h2 {
  margin: 0;
  font-size: 36px;
  color: #333;
  font-weight: 600;
}

.invoice-details p {
  margin: 10px 0;
  font-size: 16px;
  color: #555;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 30px;
}

.table th,
.table td {
  padding: 15px;
  border: 1px solid #ddd;
  text-align: center;
  font-size: 16px;
}

.table th {
  background-color: #abebc6;
  color: rgb(6, 6, 6);
}

.table tr:hover {
  background-color: #f1f9ff; /* Light blue hover effect */
  transition: background-color 0.3s ease-in-out;
}

.invoice-footer {
  margin-top: 20px;
  text-align: right;
}

.invoice-footer p {
  font-size: 20px;
  font-weight: 600;
  color: #333;
}

.buttons {
  margin-top: 20px;
  display: flex;
  justify-content: flex-end;
}

.buttons button {
  padding: 12px 25px;
  margin: 0 10px;
  border: none;
  background-color: #85c1e9; /* Green background */
  color: rgb(12, 12, 12);
  font-size: 18px;
  font-weight: 600;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}

/* Hover effects for buttons */
.buttons button:hover {
  background-color: #218838; /* Darker green on hover */
  transform: scale(1.1); /* Slightly larger size on hover */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
}

.buttons button:active {
  transform: scale(1.05); /* A little smaller when clicked */
  box-shadow: none; /* Remove shadow on click */
}

</style>