<?php

/* :FrontOffice:layout.html.twig */
class __TwigTemplate_f499ad71da9986072fed169fe6d3184c81fcace656a89df0a839574b8c2fd992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"><![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"><!--<![endif]-->
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset=\"utf-8\">
        <title>TravelSite Theme</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\">

        <!-- Mobile Specific
        ================================================== -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <!-- CSS
        ================================================== -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/responsive.css"), "html", null, true);
        echo "\" />

        <!-- Java Script
        ================================================== -->
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery-ui-1.8.24.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/camera.min.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/selectnav.min.js"), "html", null, true);
        echo "\"></script>
        <!--<script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyB3tShW1hLlV2lYW8_sCVln6TLF2bWvgU8\"></script>-->
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.googlemaps.1.01.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/theme.js"), "html", null, true);
        echo "\"></script>

        <!--[if lt IE 9]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
    </head>

    <body class=\"home\">
        <div id=\"slider-wrap\">
            <div class=\"camera_wrap\" id=\"camera-wrap\">
                <div data-src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/uploads/1280x800/st-basil.jpg"), "html", null, true);
        echo "\">

                    <div class=\"camera_caption moveFromBottom camera_text_center\">
                        <div class=\"caption_slider h2\">
                            30% Discount : 3 days travel to Moscow
                        </div>
                    </div>

                </div>
                <div data-src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/uploads/1280x800/castle-schwerin.jpg"), "html", null, true);
        echo "\">

                    <div class=\"camera_caption moveFromLeft camera_text_center\">
                        <div class=\"caption_slider h2\">
                            Luxurious holiday in Castle
                        </div>
                    </div>

                </div>
                <div data-src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/uploads/1280x800/moscow.jpg"), "html", null, true);
        echo "\">

                    <div class=\"camera_caption fadeIn camera_text_center\">
                        <div class=\"caption_slider h2\">
                            30% Discount : 3 days travel to Moscow
                        </div>
                    </div>

                </div>
                <div data-src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/uploads/1280x800/temple-kyoto.jpg"), "html", null, true);
        echo "\">

                    <div class=\"camera_caption moveFromBottom camera_text_center\">
                        <div class=\"caption_slider h2\">
                            Japan most interesting spot
                        </div>
                    </div>

                </div>


            </div><!--camera-wrap -->
        </div>

        <div id=\"wrapper\">
            <div id=\"container\">

                <!--start header -->
                <header id=\"header\">
                    <div id=\"logo\">
                        <a href=\"index.html\"><strong>Travel</strong>Site</a>
                    </div>\t
                    <div id=\"searchbox\">
                        <form action=\"#\">
                            <input type=\"text\" id=\"search\" placeholder=\"Search\" />
                            <button type=\"submit\"></button>
                        </form>
                    </div>
                    <div id=\"navigation\">
                        <ul id=\"nav\">
                            <li class=\"selected\"><a href=\"index.html\">Home</a></li>
                            <li><a href=\"browse.html\">Browse</a>
                                <ul>
                                    <li><a href=\"browse-result.html\">Browse Result</a></li>
                                    <li><a href=\"browse-detail.html\">Browse Detail</a></li>
                                </ul>
                            </li>
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"element.html\">Element</a></li>
                        </ul>
                    </div>
                </header>
                <!--end header -->

                <!--start content -->
                <section id=\"content\">
                    <div class=\"two-third\">
                        <div id=\"searchmodule\" class=\"tabs\">
                            <ul class=\"tab-control\">
                                <li><a href=\"#flight-search\">Search Flight</a></li>
                                <li><a href=\"#hotel-search\">Find Hotel</a></li>
                                <li><a href=\"#travel-search\">Holiday Plan</a></li>
                            </ul>
                            <div id=\"flight-search\" class=\"tab-content\">
                                <form action=\"#\">
                                    <div class=\"field\">
                                        <label for=\"flight-from\">From:</label>
                                        <input type=\"text\" id=\"flight-from\" class=\"input-text\" placeholder=\"Origin\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field\">
                                        <label for=\"flight-to\">To:</label>
                                        <input type=\"text\" id=\"flight-to\" class=\"input-text\" placeholder=\"Destination\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half\">
                                        <label for=\"flight-depart\">Depart:</label>
                                        <input type=\"text\" id=\"flight-depart\" class=\"input-text input-cal\" placeholder=\"2012-10-01\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half even\">
                                        <label for=\"flight-return\">Return:</label>
                                        <input type=\"text\" id=\"flight-return\" class=\"input-text input-cal\" placeholder=\"2012-10-01\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half\">
                                        <label for=\"flight-class\">Class:</label>
                                        <select id=\"flight-class\">
                                            <option>Any</option>
                                            <option>VIP</option>
                                            <option>Business</option>
                                        </select>
                                    </div>
                                    <div class=\"field half even\">
                                        <label for=\"flight-person\">Person:</label>
                                        <select id=\"flight-person\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <button type=\"submit\" class=\"submit\">Search</button>
                                    <br class=\"clear\" />
                                </form>
                            </div>
                            <!--flight search -->

                            <div id=\"hotel-search\" class=\"tab-content\">
                                <form action=\"#\">
                                    <div class=\"field\">
                                        <label for=\"hotel-to\">City:</label>
                                        <input type=\"text\" id=\"hotel-to\" class=\"input-text\" placeholder=\"Destination\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half\">
                                        <label for=\"hotel-depart\">Check-In:</label>
                                        <input type=\"text\" id=\"hotel-depart\" class=\"input-text input-cal\" placeholder=\"2012-10-01\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half even\">
                                        <label for=\"hotel-return\">Check-Out:</label>
                                        <input type=\"text\" id=\"hotel-return\" class=\"input-text input-cal\" placeholder=\"2012-10-01\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half\">
                                        <label for=\"hotel-class\">Class:</label>
                                        <input type=\"text\" id=\"hotel-class\" class=\"input-text\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half even\">
                                        <label for=\"hotel-room\">Person:</label>
                                        <select id=\"hotel-room\">
                                            <option>1</option>
                                        </select>
                                    </div>
                                    <button type=\"submit\" class=\"submit\">Search</button>
                                    <br class=\"clear\" />
                                </form>
                            </div>
                            <!--hotel search -->

                            <div id=\"travel-search\" class=\"tab-content\">
                                <form action=\"#\">
                                    <div class=\"field\">
                                        <label for=\"travel-from\">From:</label>
                                        <input type=\"text\" id=\"travel-from\" class=\"input-text\" placeholder=\"Origin\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field\">
                                        <label for=\"travel-to\">To:</label>
                                        <input type=\"text\" id=\"travel-to\" class=\"input-text\" placeholder=\"Destination\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half\">
                                        <label for=\"travel-depart\">Depart:</label>
                                        <input type=\"text\" id=\"travel-depart\" class=\"input-text input-cal\" placeholder=\"2012-10-01\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half even\">
                                        <label for=\"travel-return\">Return:</label>
                                        <input type=\"text\" id=\"travel-return\" class=\"input-text input-cal\" placeholder=\"2012-10-01\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half\">
                                        <label for=\"travel-class\">Class:</label>
                                        <input type=\"text\" id=\"travel-class\" class=\"input-text\" autocomplete=\"off\" />
                                    </div>
                                    <div class=\"field half even\">
                                        <label for=\"travel-person\">Person:</label>
                                        <select id=\"travel-person\">
                                            <option>1</option>
                                        </select>
                                    </div>
                                    <button type=\"submit\" class=\"submit\">Search</button>
                                    <br class=\"clear\" />
                                </form>
                            </div>
                            <!--travel search -->
                        </div>
                    </div>
                    <!--searchmodule -->

                    <div class=\"one-third last\">
                        <div id=\"newsletter\" class=\"module\">
                            <div class=\"module-content\">
                                <div class=\"module-content-wrap\">
                                    <div class=\"h3\">Newsletter</div>
                                    <p>Subscribe to get travel deals sent to your email each week!</p>
                                    <p>
                                        <label for=\"newsletter-email\">Your Email :</label>
                                        <input type=\"text\" id=\"newsletter-email\" class=\"input-text\" />
                                    </p>
                                    <div>
                                        <button type=\"submit\">Subscribe</button>
                                    </div>

                                    <br class=\"clear\" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--newsletter -->

                    <div class=\"hr\"><hr /></div>

                    <div class=\"one-third\">
                        <h3 class=\"icon32 icon-tick thin\">Book Easy</h3>
                        <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et dolore magna aliqua adipisicing elit seddo eiusmod tempor.</p>
                    </div>

                    <div class=\"one-third\">
                        <h3 class=\"icon32 icon-tick thin\">Save Cost</h3>
                        <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et dolore magna aliqua adipisicing elit seddo eiusmod tempor.</p>
                    </div>

                    <div class=\"one-third last\">
                        <h3 class=\"icon32 icon-tick thin\">Enjoy Flight</h3>
                        <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et dolore magna aliqua adipisicing elit seddo eiusmod tempor.</p>
                    </div>

                    <div class=\"hr\"><hr /></div>\t\t\t

                    <!--newsection -->
                    <div class=\"section-title\">
                        <span class=\"h3\">Popular Destination</span>
                        <a class=\"right\" href=\"\">See all destination</a>\t\t
                    </div>

                    <div class=\"one-fourth\">
                        <div class=\"post-item\">
                            <div class=\"image-place\">
                                <img src=\"images/uploads/220x135/auckland-city.jpg\" alt=\"image\" />
                            </div>
                            <div class=\"post-content\">
                                <h4 class=\"post-title\">Maldives Travel</h4>
                                <p class=\"post-excerpt\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus vehicula dui.</p>
                            </div>
                            <div class=\"post-meta\">
                                <span class=\"comment-count\">12 Comments</span>
                                <a class=\"read-more\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"one-fourth\">
                        <div class=\"post-item\">
                            <div class=\"image-place\">
                                <img src=\"images/uploads/220x135/rio-de-jainero.jpg\" alt=\"image\" />
                            </div>
                            <div class=\"post-content\">
                                <h4 class=\"post-title\">Maldives Travel</h4>
                                <p class=\"post-excerpt\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus vehicula dui.</p>
                            </div>
                            <div class=\"post-meta\">
                                <span class=\"comment-count\">27 Comments</span>
                                <a class=\"read-more\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"one-fourth\">
                        <div class=\"post-item\">
                            <div class=\"image-place\">
                                <img src=\"images/uploads/220x135/stupa.jpg\" alt=\"image\" />
                            </div>
                            <div class=\"post-content\">
                                <h4 class=\"post-title\">Maldives Travel</h4>
                                <p class=\"post-excerpt\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus vehicula dui.</p>
                            </div>
                            <div class=\"post-meta\">
                                <span class=\"comment-count\">51 Comments</span>
                                <a class=\"read-more\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"one-fourth last\">
                        <div class=\"post-item\">
                            <div class=\"image-place\">
                                <img src=\"images/uploads/220x135/st-basil-2.jpg\" alt=\"image\" />
                            </div>
                            <div class=\"post-content\">
                                <h4 class=\"post-title\">Maldives Travel</h4>
                                <p class=\"post-excerpt\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce luctus vehicula dui.</p>
                            </div>
                            <div class=\"post-meta\">
                                <span class=\"comment-count\">32 Comments</span>
                                <a class=\"read-more\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>

                    <br class=\"clear\" />

                    <div class=\"action-box\">
                        <div class=\"left\">
                            <div class=\"action-title\">30% Discount : 3 Nights Deluxe Escape to Kuta Bali</div>
                            <div class=\"action-desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla mi et eros ornare quis</div>
                        </div>
                        <div class=\"right\">
                            <a class=\"button\">
                                Book Now
                            </a>
                        </div>
                    </div>
                    <!--action-box -->


                    <br class=\"clear\" />
                </section>
                <!--end content -->

            </div>
            <!--container -->

            <!--start footer -->
            <footer id=\"footer\">
                <div class=\"wrap\">
                    <div class=\"one-fourth\">
                        <div class=\"theme-logo\"><strong>Travel</strong>Site</div>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <p>Integer hendrerit bibendum luctus. Nam vel porttitor leo</p>
                    </div>

                    <div class=\"one-fourth\">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href=\"#\">Browse Cheap Holidays</a></li>
                            <li><a href=\"#\">Holiday Travel Guide</a></li>
                            <li><a href=\"#\">Holiday Travel Blog</a></li>
                            <li><a href=\"#\">Compares Holidays Packets</a></li>
                        </ul>
                    </div>

                    <div class=\"one-fourth\">
                        <h3>Our Office</h3>
                        <ul>
                            <li class=\"glyph-home\">Sudirman Kav.52-53<br>Central Business Distric<br>South Jakarta 12040</li>
                            <li class=\"glyph-briefcase\">Phone : +621 760 4020</li>
                            <li class=\"glyph-envelope\">Email : info@domain.com</li>
                        </ul>
                    </div>

                    <div class=\"one-fourth last\">
                        <h3>Flickr Galleries</h3>
                        <!-- Start of Flickr Badge -->
                        <div id=\"flickr_badge_uber_wrapper\">
                            <div id=\"flickr_badge_wrapper\">
                                <script type=\"text/javascript\" src=\"http://www.flickr.com/badge_code_v2.gne?show_name=1&amp;count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=all_tag&amp;tag=scenery\"></script>
                            </div>
                        </div>
                        <!-- End of Flickr Badge -->
                    </div>

                    <br class=\"clear\" />
                </div>
                <!--footer wrap -->
            </footer>
            <!--end footer -->

            <section id=\"subfooter\">
                <div class=\"wrap\">
                    <div class=\"left\">
                        &copy; TravelSite 2012. All right reserved. Shared on www.MafiaShare.net
                    </div>

                    <div class=\"foot-links right\">
                        <a href=\"#\">Terms and Condition</a>
                        <a href=\"#\">Privacy Policy</a>
                        <a href=\"http://www.mafiashare.net\">MafiaShare.net</a>
                    </div>

                    <br class=\"clear\" />
                </div>
            </section>
            <!--subfooter -->

        </div>
        <!--wrapper -->
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return ":FrontOffice:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 70,  123 => 61,  111 => 52,  99 => 43,  88 => 35,  84 => 34,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  44 => 21,  40 => 20,  19 => 1,);
    }
}
