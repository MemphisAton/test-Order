<?php include 'page/header.php'; ?>

<div class="main-content container">
    <h2>Форма заказа</h2>
    <form id="orderForm" action="../server/submit_order.php" method="POST">
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="text" class="form-control" id="phone" name="phone" required pattern="\+\d{1,2}\(\d{3}\)\d{3}-\d{2}-\d{2}">
        </div>
        <input type="hidden" name="sub1" value="test">
        <button type="submit" class="btn btn-primary">Отправить заказ</button>
    </form>
</div>

<?php include 'page/footer.php'; ?>
