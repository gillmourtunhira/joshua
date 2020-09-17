<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="page__layout">
                <div class="page__layout--title">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div class="page__layout--content">
                    <div class="contact__wrapper">
                        <div class="contact__layout">
                            <!-- <div class="contact__layout--card">
                                <div>
                                    <h4>Department: <span>IT Help Desk</span></h4>
                                </div>
                                <div>
                                    <ul>
                                        <li><i class="material-icons">local_phone</i> +263 8787 4858 69</li>
                                        <li><i class="material-icons">alternate_email</i> helpdesk@tjg.org</li>
                                        <li><i class="material-icons">place</i>5 Umguza Close, Wilmington Park Harare, Zimbabwe</li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="contact__layout--card">
                                <div>
                                    <h4>Department: <span>Corporate Office</span></h4>
                                </div>
                                <div>
                                    <ul>
                                        <!-- <li><i class="material-icons">local_phone</i> +263 8677 180 180</li>
                                        <li><i class="material-icons">alternate_email</i> corporate@tjg.org</li> -->
                                        <li><i class="material-icons">place</i>5 Umguza Close, Wilmington Park Harare, Zimbabwe</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact__form">
                            <div class="contact__form--map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.8422667498858!2d31.07671391549972!3d-17.846027681499702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4b3290ad17f%3A0x2c52bac425844260!2sUmguza%20Cl%2C%20Harare!5e0!3m2!1sen!2szw!4v1599759592712!5m2!1sen!2szw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/officemap.png" alt="office"> -->
                            </div>
                            <div class="contact__form--form">
                                <form action="#">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="contact_email">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>