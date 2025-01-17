<form method="POST" action="<?= BASE_URL_ADMIN ?>&action=orders-update">
    <!-- <input type="hidden" name="order_id" value="<?= $orderDetails['order_id'] ?>"> -->

    <label for="customer_name">Customer Name</label>
    <input type="text" id="customer_name" name="customer_name" value="<?= isset($orderDetails['customer_name']) ? $orderDetails['customer_name'] : '' ?>">

    <label for="customer_email">Customer Email</label>
    <input type="email" id="customer_email" name="customer_email" value="<?= isset($orderDetails['customer_email']) ? $orderDetails['customer_email'] : '' ?>">

    <label for="customer_phone">Customer Phone</label>
    <input type="text" id="customer_phone" name="customer_phone" value="<?= isset($orderDetails['customer_phone']) ? $orderDetails['customer_phone'] : '' ?>">

    <label for="total_amount">Total Amount</label>
    <input type="text" id="total_amount" name="total_amount" value="<?= isset($orderDetails['total_amount']) ? $orderDetails['total_amount'] : '' ?>">

    <label for="order_status">Order Status</label>
    <select id="order_status" name="order_status">
        <option value="pending" <?= isset($orderDetails['order_status']) && $orderDetails['order_status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="completed" <?= isset($orderDetails['order_status']) && $orderDetails['order_status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
        <!-- Thêm các lựa chọn khác -->
    </select>

    <label for="payment_status">Payment Status</label>
    <select id="payment_status" name="payment_status">
        <option value="pending" <?= isset($orderDetails['payment_status']) && $orderDetails['payment_status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="paid" <?= isset($orderDetails['payment_status']) && $orderDetails['payment_status'] == 'paid' ? 'selected' : '' ?>>Paid</option>
        <!-- Thêm các lựa chọn khác -->
    </select>

    <label for="payment_method">Payment Method</label>
    <select id="payment_method" name="payment_method">
        <option value="credit_card" <?= isset($orderDetails['payment_method']) && $orderDetails['payment_method'] == 'credit_card' ? 'selected' : '' ?>>Credit Card</option>
        <option value="paypal" <?= isset($orderDetails['payment_method']) && $orderDetails['payment_method'] == 'paypal' ? 'selected' : '' ?>>PayPal</option>
        <!-- Thêm các lựa chọn khác -->
    </select>

    <button type="submit">Cập nhật</button>
</form>
