<?php get_header(); ?>

<section class="site__carousel">
    <div class="carousel__wrapper row">
        <div class="carousel__wrapper--left">
            <?php get_template_part('template-parts/content', 'slider') ?>
        </div>
        <div class="carousel__wrapper--right">
            <?php get_template_part('template-parts/content', 'events') ?>
        </div>
    </div>
</section>
<section class="site__links">
    <div class="site__links--menu row">
        <ul>
            <li>
                <h3> <a href="<?php echo bloginfo('url') . '/general-information'; ?>">WHAT WE DO</a></h3>
                <h4>Understanding TJG Work</h4>
            </li>
            <li>
                <h3>GET INVOLVED</h3>
                <h4>Join our movement for change</h4>
            </li>
            <li>
                <h3><a href="<?php echo bloginfo('url') . '/category/stories'; ?>">NEWS & MEDIA</a></h3>
                <h4>The Latest news and Stories</h4>
            </li>
            <li>
                <h3>DONATE NOW</h3>
                <h4>Support TJG Work in the world</h4>
            </li>
        </ul>
    </div>
</section>
<section class="site__mission">
    <div class="mission row">
        <div class="mission--title">
            <h3>Vision</h3>
        </div>
        <div class="mission--statement">
            <p>To raise a generation that will COLLECTIVLEY pursue and turn their dreams into tangible reality.</p>
        </div>
    </div>
    <div class="objectives row">
        <div class="objectives--card">
            <div class="objectives--title">
                <h3>Mission</h3>
            </div>
            <div class="objectives--statement">
                <div>
                    <p>The coordination of youth and the corporate sector around relief, empowerment and awareness
                        programmes which otherwise would be difficult to pursue alone, building equity capital through
                        UNIT TRUST. This will be facilitated in conjunction with national chairs, their committees,
                        membership, and stakeholders.
                    </p>
                </div>
            </div>
        </div>
        <div class="objectives--card">
            <div class="objectives--title">
                <h3>Goals</h3>
            </div>
            <div class="objectives--statement">
                <div>
                    <ul>
                        <li><i class="material-icons">blur_on</i> To empower disadvantaged people through school programs, recreational clubs, Bible clubs, relief programme. As well as addressing some of other needs within schools.</li>
                        <li><i class="material-icons">blur_on</i>To raise a Unit Trusts awareness campaign well represented at the international Continental, Regional, National, Provincial, District, Constituency, Ward, Branch and Cell level.</li>
                        <li><i class="material-icons">blur_on</i>Become a movement that offers Relief, Humanitarian and Recreational services to
                            impoverished youths, orphans, widows, and vulnerable children.</li>
                    </ul>
                </div>
                <span>
                    <i class="material-icons">arrow_forward</i>
                </span>
            </div>
        </div>
        <div class="objectives--card">
            <div class="objectives--title">
                <h3>Values</h3>
            </div>
            <div class="objectives--statement">
                <div>
                    <ul>
                        <li><i class="material-icons">blur_on</i>Love- In John 13:34-35, Jesus commanded His followers to love one another and Paul affirms it in Romans 12:10.</li>
                        <li><i class="material-icons">blur_on</i>Order- From Genesis to Revelation, we see that God is a God of order, not confusion. We model this through our 7 member committees.</li>
                        <li><i class="material-icons">blur_on</i>Unity- Our God is one, and He is Lord of all. Christ is not divided and where there is unity God commands a blessing.</li>
                        <li><i class="material-icons">blur_on</i>Voluntary mutual submission- Jesus is our model.</li>
                    </ul>
                </div>
                <span>
                    <i class="material-icons">arrow_forward</i>
                </span>
            </div>
        </div>
    </div>
</section>
<section class="site__sponsors">
    <div class="sponsors row">
        <h4>Our Partners</h4>
        <?php get_template_part('template-parts/content', 'partners'); ?>
    </div>
</section>
<section class="site__work">
    <div class="site__work--wrapper row">
        <?php get_template_part('template-parts/content', 'impact') ?>
    </div>
</section>
<section class="site__posts">
    <div class="site__posts--content row">
        <h2>Find stories that inspire</h2>
        <?php get_template_part('template-parts/content', 'stories') ?>
    </div>
</section>

<?php get_footer(); ?>