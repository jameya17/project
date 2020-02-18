<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	<!-- </div> --><!-- #content -->

	<footer class="footer">
    <div class="footer-wrap">
        <div class="foot-col copyright-sec">
            <div class="copyright-block">
                <a class="foot-logo" href="/">
                    <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/foot-logo.svg" alt="Megaplus Logo" title="Megaplus Logo">   
                </a>
                <span>Magplus is a registered Trademark Copyright &copy 2020</span>
            </div>    
            <div class="follow-us-block">
                <h6>Follow Us</h6>
                <ul class="follow-us-listing">
                    <li><a href="" title="Slack"><img src="<?php bloginfo('template_directory'); ?>/images/icons/slack.svg" alt="Slack"/></a></li>
                    <li><a href="" title="Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.svg" alt="Twitter"/></a></li>
                    <li><a href="" title="facebook"><img src="<?php bloginfo('template_directory'); ?>/images/icons/facebook.svg" alt="facebook"/></a></li>
                    <li><a href="" title="G+"><img src="<?php bloginfo('template_directory'); ?>/images/icons/gplus.svg" alt="G+"/></a></li>
                    <li><a href="" title="Instagram"><img src="<?php bloginfo('template_directory'); ?>/images/icons/instagram.svg" alt="Instagram"/></a></li> 
                </ul>
            </div>
        </div>
        <div class="foot-col">
            <h6>Resources</h6>
            <ul class="foot-link-block">
                <li><a href="" class="foot-link" title="Case Studies ">Case Studies </a></li>
                <li><a href="" class="foot-link" title="Tutorials ">Tutorials </a></li>
                <li><a href="" class="foot-link" title="Blogs">Blogs</a></li>
                <li><a href="?page_id=11" class="foot-link" title="FAQs">FAQs</a></li>
            </ul>    
        </div>
        <div class="foot-col">
            <h6>Legal</h6>
            <ul class="foot-link-block">
                <li><a href="/mega-plus/www/privacy.php" class="foot-link" title="Privacy Policy  ">Privacy Policy  </a></li>
                <li><a href="/mega-plus/www/tmc.php" class="foot-link" title="Terms of Use">Terms of Use</a></li>
                <li><a href="?page_id=14" class="foot-link" title="License and Agreement">License and Agreement</a></li>
            </ul>    
        </div>
        <div class="foot-col">
            <h6>Products</h6>
            <ul class="foot-link-block">
                <li><a href="" class="foot-link" title="Services ">Services </a></li>
                <li><a href="" class="foot-link" title="Pricing">Pricing</a></li>
                <li><a href="" class="foot-link" title="Mag Plus Pro">Mag Plus Pro</a></li>
            </ul>    
        </div>
        <div class="foot-col">
            <h6>Company</h6>
            <ul class="foot-link-block">
                <li><a href="" class="foot-link" title="About Us">About Us</a></li>
                <li><a href="" class="foot-link" title="Events ">Events </a></li>
                <li><a href="" class="foot-link" title="Try For Free ">Try For Free </a></li>
            </ul>    
        </div>
        <div class="foot-col subscription-sec">
            <h6>Subscribe</h6>
            <p class="small">At half-past eight the door opened, the policeman appeared.</p>
            <div class="subscription-form">
                <div class="inline-form error-block">
                    <input type="email" id="email" placeholder="Enter your email" name="email">
                    <button type="button" id="btnClick" alt="newsletter-submit" class="btn"></button>
                    <span class="error"></span>
                </div>    
            </div>

            <h6>Contact: <a href="tel:+91 80876 00106" title="tel:+91 80876 00106">+91 80876 00106</a></h6>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.1.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.js"></script> 

    <script type="text/javascript">
        $(document).ready(function() {
            $(".icon-burger").click(function(){
                if($(this).hasClass("is-open")){
                    $(this).removeClass("is-open");
                    $(".sticky-nav-tabs").removeClass("open-slide");
                    return false;
                }else{
                    $(this).addClass("is-open");
                    $(".sticky-nav-tabs").addClass("open-slide");
                    return false;
                }
            });

            var selector = '.sticky-nav-tabs-container li';
            $(selector).on('click', function(){  
                $(selector).removeClass('active');
                $(this).addClass('active');  
            });

            $('.acc-item').click(function () {
                if($(this).hasClass("open")){
                    $(this).removeClass("open");
                    $(".acc-item").children(".acc-ans").slideUp();
                }else{
                    $(".acc-item").removeClass("open");
                    $(this).addClass("open");
                    $(".acc-item").children(".acc-ans").slideUp();
                    $(this).children(".acc-ans").slideDown(); 
                }
                return false;
            });

            $(".loop").owlCarousel({
                nav: true,
                navText: [$('.next'),$('.prev')],
                // items: 1,
                // loop: true,
                // center: true,
                // margin: 10,
                // //lazyLoad:true,
                dots: false,

                center: true, 
                // items:2,
                loop:true,
                // margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        dots:true  
                    },
                    767:{
                        items:3,
                        dots:false  
                    }
                }
            });
            
            // var owl = $("#owl-demo");
            // // Custom Navigation Events
            // $(".next").click(function(){
            //     alert("hi"); 
            //     owl.trigger('owl-next');
            // });
            // $(".prev").click(function(){
            //     owl.trigger('owl-prev');
            // });
        }); 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 130) {
                $('.sticky-nav-block').addClass('fixed');
            } else {
                $('.sticky-nav-block').removeClass('fixed');
            }
        });

    </script>

<!-- </div> --><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
