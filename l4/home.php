<?php
include 'header.html';
?>

<link rel="stylesheet" href="css/stylePage1.css">
<body>
    <?php
    if (isset($_POST['fio'])) {
        $fio = $_POST['fio'];
        $file = $_POST['file'];
        $message = $_POST['message'];
        $topic = $_POST['topic'];
        if (isset($_POST['source'])) {
            $source = $_POST['source'];
        } else {
            $source = '';
        }
    }

    echo "<h1>Ответ на ваше обращение:</h1>";
    echo "<p><h2>ФИО:</h2> <h1>$fio</h1></p>";
    echo "<p><h2>Текст обращения:</h2> <h1>$message</h1></p>";
    echo "<p><h2>Источник:</h2> <h1>$source</h1></p></h2>";
    echo "<p><h2>Вы прикрепили файл:</h2><h1>$file</h1></p></h2>";

    echo '<br><a class="button" href="index.php?N=' . $_POST['fio'] . '&E=' . $_POST['email'] . '&R='.$source. '">Заполнить снова</a></p></br>';
    ?>
</body>

</html> 