<?php
include_once __DIR__ . '/ArrayWorker.php';

$worker = new ArrayWorker();

$worker->dump();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Buro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="flex-container">
        <div class="container">
            <ul class="link-list">
                <li><a href="#">Junior</a></li>
                <li><a href="#">Middle</a></li>
                <li><a href="#">Senior</a></li>
            </ul>
            <h1 class="main-header">Тестовое задание для Junior веб-разработчика</h1>
            <p class="beginning-text">Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.<br> Ознакомиться со списком актуальных вакансий можно по ссылке: <a href="https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a></p>
            <section class="description">
                <p>Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений<br> на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.</p>
                <p>У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)</p>
            </section>
            <p class="disclaimer">Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.</p>
        </div>
        <footer>
            <p>© 2009-2019 IT-Buro</p>
        </footer>
    </div>
</body>
<script src="js/script.js"></script>
</html>