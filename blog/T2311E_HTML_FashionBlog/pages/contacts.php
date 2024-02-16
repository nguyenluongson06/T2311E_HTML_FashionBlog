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
                                            <p><input type="text" name="name" placeholder="Phhone number..."></p>
                                            <p><input type="text" name="name" placeholder="Your email..."></p>
                                            <p><input type="text" name="name" placeholder="Subject..."></p>
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

                    <div class="col-sm-4 sidebar">
                    <div class="widget">
                            <h5 class="widget-title">
                                <span>Popular Posts</span>
                            </h5>

                            <div class="popular-posts">
                                <div class="rp-featured">
                                    <div class="rp-media">
                                        <a href="javascript:;">
                                            <img src="../images/about/sb1.png" alt="thumb">
                                        </a>
                                        <span>1</span>
                                    </div>

                                    <div class="rp-category">
                                        <a href="javascript:;">Fashion Lite</a>
                                    </div>
                                    <h5><a href="javascript:;">Got a dream and we just know now</a></h5>
                                </div>

                                <ol class="rp-items">
                                    <li></li>
                                    <li>
                                        <a href="javascript:;" class="link-post">Now the world don't move to the beat of just one drum</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="link-post">These are the voyages of the Starship Enterprise</a>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="widget widget-subscribe">
                            <div class="entry-subscribe">
                                <h2>Daily News about</h2>
                                <h3>Fashion</h3>
                                <div class="separator">
                                    <span></span>
                                </div>
                                <form>
                                    <input type="text" placeholder="Your E-mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <div class="widget">
                            <h5 class="widget-title">
                                <span>Follow on Flickr</span>
                            </h5>
                            <div class="image-feed">
                                <a href="javascript:;">
                                    <img src="../images/about/sf1.png">
                                </a>
                                <a href="javascript:;">
                                    <img src="../images/about/sf2.png">
                                </a>
                                <a href="javascript:;">
                                    <img src="../images/about/sf3.png">
                                </a>
                                <a href="javascript:;">
                                    <img src="../images/about/sf4.png">
                                </a>
                                <a href="javascript:;">
                                    <img src="../images/about/sf5.png">
                                </a>
                                <a href="javascript:;">
                                    <img src="../images/about/sf6.png">
                                </a>
                            </div>
                        </div>

                        <div class="widget">
                            <form class="search_form">
                                <input type="text" name="2" placeholder="Search....">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include("../components/footer.html") ?>

    <script src="js/main.js"></script>
</body>
</html>