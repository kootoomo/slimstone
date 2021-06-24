<?php
/**
 * Template Name: Template - Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <div class="banner banner-left-side" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/home-banner-left.jpg);">
        <a href="#" class="banner-button">
            I'm interested in Bathrooms
        </a>
    </div>
    <div class="banner-separator"></div>
    <div class="banner banner-right-side" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/home-banner-right.jpg);">
        <a href="#" class="banner-button">
            I'm interested in Kitchens
        </a>
    </div>
</div>

<div class="home-about-info">
    <div class="container">
        <div class="home-about-info-holder">
            <h2>Affordable Luxury</h2>
            <div class="tagline">Resurface old tiling and units and go grout free for no mould</div>
            <div class="quote">Turn your tired bathrooms and kitchens into something from your dreams and all at the fraction of the cost of a complete demolition and rebuild. Our fully qualified and experienced installers specialise in renovating your rooms using your existing surfaces to create a new, fresh and modern look.</div>
            <div class="buttons">
                <a href="#" class="button">Explore Bathrooms <i class="fa fa-chevron-right"></i></a>
                <a href="#" class="button">Explore Kitchens <i class="fa fa-chevron-right"></i></a>
                <a href="#" class="button">Commercial Projects <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="home-feature-image"></div>

<div class="home-experience">
    <div class="container">
        <div class="info-holder">
            <h2>For a Seamless Experience</h2>
            <div class="quote">Our engineered surfaces are finished to optimal thickness, outperforming natural or engineered stone surfaces. They combine the world's finest granites, quartz and polymer technology to create a brilliantly engineered stone surface that's ideal for a range of applications.
            </div>
            
            <div class="row">
                <div class="col-sm-4">
                    <div class="circle one">
                        <div class="image"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="circle two">
                        <div class="image"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="circle three">
                        <div class="image"></div>
                    </div>
                </div>
            </div>

            <a href="#" class="button">Surfaces Information <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="home-view-our-range">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="circle">
                    <div class="image"></div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <h2>A diverse range to suit your own style</h2>
                <p>Wherever you use them, our surfaces add a distinctive and luxurious look that is hard to beat, however, our surfaces are much more than just a pretty face, outperforming the alternatives at every level.</p>
                <a href="#" class="button">View Our Full Stone Range <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="home-newsletter-background">
    <div class="container">
        <div class="home-newsletter">
            <h2>Sign up to the Slimstone Newsletter</h2>
            <div class="row">
                <div class="col-lg-4">
                    <input type="text" placeholder="Name">
                </div>
                <div class="col-lg-5">
                    <input type="text" placeholder="Email Address">
                </div>
                <div class="col-lg-3">
                    <input type="submit" value="Subscribe">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-case-studies">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2>Kitchen Installation and Renovation, Bunbury</h2>
                
                <div class="circle d-block d-lg-none d-xl-none">
                    <div class="image"></div>
                </div>

                <div class="tagline">
                    <strong>Case Studies:</strong> 3 Feb 2020
                </div>
                <p>Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna.</p>
                <div class="buttons">
                    <a href="#" class="button">Read More<i class="fa fa-chevron-right"></i></a>
                    <a href="#" class="button alt">See all Case Studies<i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="circle d-md-none d-sm-none d-none d-lg-block d-xl-block">
                    <div class="image"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
