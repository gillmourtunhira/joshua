<section class="site__footer">
    <footer>
        <div class="footer__content row">
            <div class="footer__content--main">
                <div class="footer__content--logo">
                    <div class="logo">
                        <?php
                        the_custom_logo();
                        ?>
                    </div>
                </div>
                <div class="footer__content--menu">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'footer_menu'
                    ));
                    ?>
                </div>
                <div class="footer__content--social">
                    <div class="join__buttons">
                        <a href="#">Become a Member</a>
                        <a href="#">Donate</a>
                    </div>
                    <div class="social__links--bottom">
                        <ul>
                            <li><a href="https://bit.ly/3hQU2hK"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://bit.ly/3i2bkby"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__content--copyright">
                <h3>&copy; 2020 The Joshua Generation Platforms. All Rights Reserved</h3>
            </div>
        </div>
    </footer>
</section>

<?php wp_footer(); ?>
</body>

</html>