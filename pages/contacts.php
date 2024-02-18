<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include("../components/header.html") ?>
    <div class="">
        <section class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-8">
                        <article class="blog-item blog-single">
                            <div class="entry-date">
                                <span>Contact Us</span>
                            </div>

                            <h1 class="post-title">
                                We Love to Hear from You
                            </h1>

                            <div class="entry-excerpt">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p><input type="text" name="name" placeholder="Your name..."></p>
                                            <p><input type="text" name="phoneNum" placeholder="Phone number..."></p>
                                            <p><input type="email" name="email" placeholder="Your email..."></p>
                                            <p><input type="text" name="subject" placeholder="Subject..."></p>
                                        </div>

                                        <div class="col-sm-6">
                                            <textarea placeholder="Message..."></textarea>
                                            <button type="submit" class="button-full button-fill">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>

                    <?php include("../components/sidebar.html")?>
                </div>
            </div>
        </section>
    </div>

    <?php include("../components/footer.html") ?>

    <script src="js/main.js"></script>
</body>
</html>