<form action="add-item.php" enctype="multipart/form-data" method="post">
    <p>Введите название товара:</p>
    <input type="text" name="item-name" required>
    <p>Введите описание товара:</p>
    <textarea style="width: 50%" name="item-description" rows="3" required></textarea>
    <p>Введите цену товара:</p>
    <input type="number" name="item-price" required>
    <p>Загрузите картинку с изображением товара:</p>
    <input name="userfile" type="file" />
    <input type="submit" value="Отправить">
</form>