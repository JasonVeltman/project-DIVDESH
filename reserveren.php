<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Umami Sushi - De beste sushi in Leiden. Geniet van onze heerlijke gerechten en reserveer vandaag nog!">
    <meta name="keywords" content="Umami Sushi, sushi, restaurant, Leiden, reserveren, Japanse gerechten">
    <meta name="author" content="Jason Veltman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require 'HF/header.php'; ?>
    <main>

        <section class="main-img">
            <img src="img/Reserveren.png" alt="Sushi Image" class="begin_img">
        </section>
        <form class="content">
            <label for="L/D">Lunch/Diner</label><br>
            <select name="L/D" class="options">
                <option value="Lunch">Lunch</option>
                <option value="Diner">Diner</option>
            </select>

            <br><br><br><br>

            <label for="aantal-p">Hoeveel personen?</label><br>
            <input type="text" class="options">

            <br><br><br><br>

            <label for="Dag">Welke dag?</label><br>
            <select name="L/D" class="options">
                <option value="30/3/2025">30/3/2025</option>
                <option value="31/3/2025">31/3/2025</option>
                <option value="32/3/2025">32/3/2025</option>
                <option value="33/3/2025">33/3/2025</option>
                <option value="34/3/2025">34/3/2025</option>
                <option value="35/3/2025">35/3/2025</option>
                <option value="36/3/2025">36/3/2025</option>
            </select>
        </form>

        <br><br>

        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0&t=2s" class="button">reserveren</a>

    </main>
    <?php require 'HF/footer.php'; ?>

</body>

</html>