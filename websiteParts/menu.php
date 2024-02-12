<!-- top panel -->
<div class="mry-top-panel">
    <div class="mry-logo-frame">
        <a href="index.php" class="mry-default-link mry-anima-link">
            <img class="mry-logo" src="logo.png" alt="aka">
        </a>
    </div>
    <div class="mry-menu-button-frame">
        <div class="mry-label">Menu</div>

        <div class="mry-menu-btn mry-magnetic-link">
            <div class="mry-burger mry-magnetic-object">
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- top panel end -->

<!-- menu -->
<div class="mry-menu">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <nav id="mry-dynamic-menu">
                    <ul>
                        <li class="menu-item current-menu-item"><a href="index.php" class="mry-default-link">Home</a>
                        </li>
                        <li class="menu-item"><a href="about.php" class="mry-anima-link mry-default-link">About Us</a></li>
                        <li class="menu-item "><a href="portfolio.php" class="mry-default-link">Portfolio</a>
                        </li>
                        <li class="menu-item"><a href="contact.php" class="mry-anima-link mry-default-link">Contact</a></li>
                        <li class="menu-item"><a href="faqs.php" class="mry-anima-link mry-default-link">FAQs</a></li>
                        <!--
                        <li class="menu-item menu-item-has-children"><a href="blog.php" class="mry-default-link">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blog.php" class="mry-anima-link mry-default-link">Blog list</a></li>
                                <li class="menu-item"><a href="publication.php" class="mry-anima-link mry-default-link">Publication</a></li>
                            </ul>
                        </li>
-->
                    </ul>
                </nav>

            </div>
            <div class="col-md-4">
                <div class="mry-info-box-frame">
                    <div class="mry-info-box">
                        <div class="mry-mb-20">
                            <div class="mry-label mry-mb-5">Country:</div>
                            <div class="mry-text"><?php echo $editDataContact['country'] ?></div>
                        </div>
                        <div class="mry-mb-20">
                            <div class="mry-label mry-mb-5">City:</div>
                            <div class="mry-text"><?php echo $editDataContact['city'] ?></div>
                        </div>
                        <div class="mry-mb-20">
                            <div class="mry-label mry-mb-5">Address:</div>
                            <a class="mry-text" href=""><?php echo $editDataContact['address'] ?></a>
                        </div>
                        <div class="mry-mb-20">
                            <div class="mry-label mry-mb-5">Email:</div>
                            <a class="mry-text" href="mailto:<?php echo $editDataContact['email'] ?>"><?php echo $editDataContact['email'] ?></a>
                        </div>
                        <?php
                        $phone = $editDataContact['phone'];
                        $phone = str_replace(' ', '', $phone);
                        ?>
                        <div class="mry-mb-20">
                            <div class="mry-label mry-mb-5">Phone:</div>
                            <a class="mry-text" href="tel:<?php echo $phone; ?>"><?php echo $editDataContact['phone'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- menu end -->