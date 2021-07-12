<?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

                        include("menu2.php");
                    }else{
//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {

    include ("menubar.php");
                    }

?>
<!-- Hero Section -->
<section class="hero-section">
    <div class="layer">
        <div class="home-banner"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-search">
                        <h3>World's Largest <span>Marketplace</span></h3>
                        <p>Search From 150 Awesome Verified Ads!</p>
                        <div class="search-box">
                            <form action="https://truelysell-html.dreamguystech.com/template/search.html">
                                <div class="search-input line">
                                    <i class="fas fa-tv bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="What are you looking for?">
                                    </div>
                                </div>
                                <div class="search-input">
                                    <i class="fas fa-location-arrow bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Your Location">
                                        <a class="current-loc-icon current_location" href="javascript:void(0);"><i class="fas fa-crosshairs"></i></a>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn search_service" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="search-cat">
                            <i class="fas fa-circle"></i>
                            <span>Popular Searches</span>
                            <a href="search.html">Electrical  Works</a>
                            <a href="search.html">Cleaning</a>
                            <a href="search.html">AC Repair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<?php include ("footer.php"); ?>
