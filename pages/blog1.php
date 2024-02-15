<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        .post {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post h2 {
            color: #333;
        }
        .post p {
            line-height: 1.6;
        }
        .post img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <?php include("components/header.html") ?>
    </header>

    <main>
        <div class="post">
            <h2>Spring Fashion Trends 20XX</h2>
            <img src="spring-fashion.jpg" alt="Spring Fashion Trends">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat euismod bibendum. Donec sed metus in velit finibus vehicula nec nec justo. Integer ac dui ac nisl efficitur ultricies.</p>
            <p>Phasellus non tortor justo. Integer nec ipsum magna. Nulla facilisi. Cras fringilla augue id libero tristique, a pharetra ex venenatis. Nullam nec quam eu risus fringilla malesuada.</p>
        </div>

        <div class="post">
            <h2>Summer Wardrobe Essentials</h2>
            <img src="summer-essentials.jpg" alt="Summer Wardrobe Essentials">
            <p>Nullam eget arcu ut sapien mattis mattis. In at magna sit amet elit auctor pharetra. Nullam mattis, enim vel ultrices accumsan, odio purus fringilla nisi, nec condimentum lorem metus in urna.</p>
            <p>Quisque suscipit odio sit amet erat interdum, vel dictum nulla fermentum. Integer facilisis scelerisque nibh, sit amet mattis lorem convallis ac. Aenean eget consectetur eros.</p>
        </div>

    </main>

    <footer>
        <?php include("components/footer.html") ?>
    </footer>

</body>
</html>
