<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')

    <!-- Meta Tags -->

    <meta property="og:title" content="Istanbul City Tours">
    <meta name="twitter:title" content="Istanbul City Tours">

    <meta property="og:url" content="https://cooltravelistanbul.com">
    <meta name="twitter:url" content="https://cooltravelistanbul.com">

    <meta property="article:section" content="Home">

    <!-- Meta Tags -->

    <title>Istanbul City Tours</title>

    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/extensions/faq.css">
    <link rel="stylesheet" href="css/extensions/focus.css">
    <link rel="stylesheet" href="css/extensions/safety.css">
    <link rel="stylesheet" href="css/extensions/jobcard.css">
</head>
<body>
    <section class="notification" id="notification">
        <button id="closeNotification">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496"/></svg>
        </button>
        <div class="notification-container">
            <div class="notification-content">
                <p id="notificationText"></p>
            </div>
        </div>
    </section>
    <nav>
        @include('layouts.navbar')
    </nav>
    <header>
        <div class="header-container">
            <div class="header-content">
                <h1>Istanbul City Tours</h1>
                <h2>History and More</h2>
                <button class="main-btn link-btn" href="#products" target="_self"><span>Discover Istanbul Now</span></button>
            </div>
        </div>
        <div class="header-video">
            <div class="header-video-anim"></div>
            <div class="header-video-container">
                <video autoplay muted loop id="header-bg-video">
                    <source src="img/header-video/video-1.mp4">
                </video>
            </div>
        </div>
    </header>
    <div class="space"></div>
    <section class="features section-container" id="products">
        <div class="features-container">
            <div class="features-title">
                <h1 class="subTitle"><span class="magicText">Best Quality</span> Istanbul Daily Tours</h1>
            </div>
            <div class="features-col">
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Romantic Istanbul Daily Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/romantic-istanbul-daily-tour/romantic-istanbul-daily-tour-2025.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/romantic-istanbul-daily-tour/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Historical Istanbul Daily Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/historical-istanbul-daily-tour-2025/historical-istanbul-daily-tour-2025.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/historical-istanbul-daily-tour/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Bosphorus Istanbul Daily Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/bosphorus-istanbul-daily-tour/bosphorus-istanbul-daily-tour-2025.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/bosphorus-istanbul-daily-tour/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Modern Istanbul Daily Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/modern-istanbul-daily-tour/modern-istanbul-daily-tour-2025.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/modern-istanbul-daily-tour/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-col">
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Istanbul Daily Art Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/istanbul-daily-art-tour/Istanbul-Daily-Art-Tour-2025.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/istanbul-art-tour/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Istanbul Evening Bosphorus Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/istanbul-evening-bosphorus-tour/istanbul-evening-bosphorus-tour-3.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/istanbul-evening-bosphorus-tour/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Underground Istanbul Daily Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/underground-istanbul-daily-tour/underground-istanbul-daily-tour.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/underground-istanbul-daily-tour-2025/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-card-container">
                        <div class="feature-card-header">
                            <span class="discount">Save up to %10</span>
                        </div>
                        <div class="feature-card-detail">
                            <h4>Mystical Istanbul Daily Tour</h4>
                        </div>
                        <div class="feature-card-img">
                            <img src="https://cooltravelistanbul.com/wp-content/gallery/mystical-istanbul-daily-tour-2025/Mystical-Istanbul-Daily-Tour-2025.webp">
                        </div>
                        <ul class="feature-card-list">
                            <!-- INCLUDE -->
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                            <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                            <!-- NOT INCLUDE -->
                            <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                        </ul>
                        <div class="feature-card-bottom">
                            <a class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/mystical-istanbul-daily-tour-2025/" rel="nofollow"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="features-container">
            <div class="features-title">
                <h1 class="subTitle"><span class="magicText">Best Quality</span> Bursa & Sapanca Daily City Tours</h1>
            </div>
        </div>
        <div class="features-col">
            <div class="feature-card">
                <div class="feature-card-container">
                    <div class="feature-card-header">
                        <span class="discount">Save up to %10</span>
                    </div>
                    <div class="feature-card-detail">
                        <h4>Bursa Daily Tour</h4>
                    </div>
                    <div class="feature-card-img">
                        <img src="img/catalog/490x490/Bursa-Daily-Tour.webp">
                    </div>
                    <ul class="feature-card-list">
                        <!-- INCLUDE -->
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                        <!-- NOT INCLUDE -->
                        <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                    </ul>
                    <div class="feature-card-bottom">
                        <button class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/bursa-daily-tour/"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></button>
                    </div>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-card-container">
                    <div class="feature-card-header">
                        <span class="discount">Save up to %10</span>
                    </div>
                    <div class="feature-card-detail">
                        <h4>Sapanca Daily Tour</h4>
                    </div>
                    <div class="feature-card-img">
                        <img src="img/catalog/490x490/Sapanca-Daily-Tour.webp">
                    </div>
                    <ul class="feature-card-list">
                        <!-- INCLUDE -->
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> English Speaking Driver</li>
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Private Service</li>
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Safe Travel</li>
                        <li class="include"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><defs><mask id="ipSCheckOne0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z"/><path stroke="#000" stroke-linecap="round" d="m16 24l6 6l12-12"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSCheckOne0)"/></svg> Beverages</li>
                        <!-- NOT INCLUDE -->
                        <li class="not-include"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m8.036-4.024a.75.75 0 0 0-1.042.018a.75.75 0 0 0-.018 1.042L10.939 12l-2.963 2.963a.749.749 0 0 0 .326 1.275a.75.75 0 0 0 .734-.215L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.749.749 0 0 0-.326-1.275a.75.75 0 0 0-.734.215L12 10.939Z"/></svg> Tour Guide</li>
                    </ul>
                    <div class="feature-card-bottom">
                        <button class="feature-card-bookBtn link-btn" href="https://cooltravelistanbul.com/sapanca-daily-tour/"><span>Book Now</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m.2-9l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13z"/></svg></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space"></div>
    <section class="jobCard section-container swiper mySwiper">
        <div class="jobCard-container swiper-wrapper">
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3" />
                            <stop offset="100%" stop-color="#ae97ff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-icon)" d="M9.368 1.222a1 1 0 0 0-1.414.15L5.058 5h1.28l2.397-3.004l.77.629L7.575 5h1.288l1.417-1.744l1.718 1.403L11.7 5h.3a3 3 0 0 1 .88.131a1 1 0 0 0-.25-1.245zM3 5.5a.5.5 0 0 1 .5-.5h.558l.795-1H3.5A1.5 1.5 0 0 0 2 5.5v6A2.5 2.5 0 0 0 4.5 14H12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H3.5a.5.5 0 0 1-.5-.5m7.5 4.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1 0-1"/>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <h3>Online Payment</h3>
                    <p>You can instantly reserve your tour with our Stripe payment integration.</p>
                    <button onclick="wpLink();">
                        <span>Reserve Now</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <defs>
                                <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#5962b3" />
                                <stop offset="100%" stop-color="#ae97ff" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#gradient-icon)" d="m12 2l.324.005a10 10 0 1 1-.648 0zm.613 5.21a1 1 0 0 0-1.32 1.497L13.584 11H8l-.117.007A1 1 0 0 0 8 13h5.584l-2.291 2.293l-.083.094a1 1 0 0 0 1.497 1.32l4-4l.073-.082l.064-.089l.062-.113l.044-.11l.03-.112l.017-.126L17 12l-.007-.118l-.029-.148l-.035-.105l-.054-.113l-.071-.111a1 1 0 0 0-.097-.112l-4-4z"/>
                        </svg>
                    </button>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3" />
                            <stop offset="100%" stop-color="#ae97ff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-icon)" d="M404.7 79.78h-2.8c-7.5.26-15.8 1.73-24.8 4.3c-18 5.16-38.4 14.56-59.3 25.78c-41.9 22.4-85.8 52-121.5 68.6c-26.4 12.4-59.3 20.4-89.8 27.5s-58.95 13.4-74.36 20.6c-7.13 3.4-10.9 6.9-12.71 9.9c-1.8 2.9-2.1 5.2-1.44 8.4c1.32 6.4 8.57 15.4 18.49 21.9l3.29 2.1c162.63-2.3 289.43-13.7 387.73-52.6c2.1-17.6 6.7-34.7 16.5-48.5v-.1l.1-.1c24.5-32.2 8.9-72.58-22.4-84.89c-5-1.95-10.7-2.91-17-2.93zm21.9 185.12c-44.2 25.1-103.8 37-169.2 41.2c-68.7 4.4-143.7.1-213.52-7.8l1.89 14c31.19 3.2 98.53 11.8 172.83 11.5c77.2-.3 159.6-11.3 208.6-46.2c-.2-4.1-.4-8.3-.6-12.7m7.1 30.2c-46.9 31.5-113.8 42.9-179.9 45.8c44.7 39 89.3 55.1 127.3 59.1c45.2 4.8 81.5-8.7 94.8-19.8c13-10.8 17.5-19.5 18.3-26.2c.7-6.8-2-13.3-8.2-20.5c-11.3-13.4-33.5-26.4-52.3-38.4"/>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <h3>Professional Drivers</h3>
                    <p>Our drivers are experienced, courteous, and dedicated to ensuring your safety and comfort throughout your journey.</p>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3" />
                            <stop offset="100%" stop-color="#ae97ff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-icon)" d="M50.001 0C33.65 0 20.25 13.36 20.25 29.666c0 6.318 2.018 12.19 5.433 17.016L46.37 82.445c2.897 3.785 4.823 3.066 7.232-.2l22.818-38.83c.46-.834.822-1.722 1.137-2.629a29.3 29.3 0 0 0 2.192-11.12C79.75 13.36 66.354 0 50.001 0m0 13.9c8.806 0 15.808 6.986 15.808 15.766S58.807 45.43 50.001 45.43c-8.805 0-15.81-6.982-15.81-15.763S41.196 13.901 50 13.901"/><path fill="currentColor" d="m68.913 48.908l-.048.126l.042-.115zM34.006 69.057C19.88 71.053 10 75.828 10 82.857C10 92.325 26.508 100 50 100s40-7.675 40-17.143c0-7.029-9.879-11.804-24.004-13.8l-1.957 3.332C74.685 73.866 82 76.97 82 80.572c0 5.05-14.327 9.143-32 9.143s-32-4.093-32-9.143c-.001-3.59 7.266-6.691 17.945-8.174z" color="currentColor"/>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <h3>Expertly Curated Tours</h3>
                    <p>Our tours are designed to showcase the best destinations, balancing sightseeing, adventure, and local experiences.</p>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3"/>
                            <stop offset="100%" stop-color="#ae97ff"/>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/>
                            <path fill="url(#gradient-icon)" d="M11.298 2.195a2 2 0 0 1 1.232-.055l.172.055l7 2.625a2 2 0 0 1 1.291 1.708l.007.165v5.363a9 9 0 0 1-4.709 7.911l-.266.139l-3.354 1.677a1.5 1.5 0 0 1-1.198.062l-.144-.062l-3.354-1.677a9 9 0 0 1-4.97-7.75l-.005-.3V6.693a2 2 0 0 1 1.145-1.808l.153-.065zm4.135 6.434l-4.598 4.598l-1.768-1.768a1 1 0 0 0-1.414 1.415l2.404 2.404a1.1 1.1 0 0 0 1.556 0l5.234-5.235a1 1 0 1 0-1.414-1.414"/>
                        </g>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <h3>Safety & Reliability</h3>
                    <p>Your safety comes first strict standards, well maintained vehicles, worry free travel.</p>
                    <button onclick="window.location.href='/services/'">
                        <span>Safe Travel</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <defs>
                                <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#5962b3" />
                                <stop offset="100%" stop-color="#ae97ff" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#gradient-icon)" d="m12 2l.324.005a10 10 0 1 1-.648 0zm.613 5.21a1 1 0 0 0-1.32 1.497L13.584 11H8l-.117.007A1 1 0 0 0 8 13h5.584l-2.291 2.293l-.083.094a1 1 0 0 0 1.497 1.32l4-4l.073-.082l.064-.089l.062-.113l.044-.11l.03-.112l.017-.126L17 12l-.007-.118l-.029-.148l-.035-.105l-.054-.113l-.071-.111a1 1 0 0 0-.097-.112l-4-4z"/>
                        </svg>
                    </button>
                </div>
            </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <div class="space"></div>
    <div class="space"></div>
    <section class="safety section-container">
        <div class="safety-container">
            <div class="side">
                <h1 class="subTitle">Private Vito Service</h1>
            </div>
            <div class="side">
                <p>Experience luxury and comfort with Cool Travel Istanbul's Private Vito Service! Our professional chauffeur driven VIP vehicles offer top-notch service for airport transfers, city tours, and private events. Enjoy a personalized journey designed just for you with an exclusive experience!</p>
                <a href="services/">Learn about services</a>
            </div>
        </div>
        <div class="safety-img">
            <div class="safety-img-container blur-load" style="background-image: url(img/nuru-photos/low/calsan.spay.png);">
                <img src="img/cars/vito/01-01.webp" alt="VIP Vito Service">
                <article>Private VIP Maybach Mercedes Vito</article>
            </div>
        </div>
    </section>
    <br>
    <div class="space"></div>
    <div class="focus section-container">
        <div class="focus-container focus-anim">
            <div class="focus-detail">
                <h1 class="subTitle">
                    Exceptional Service, Unmatched Quality
                </h1>
                <p>At <strong>Cool Travel Istanbul</strong>, we don’t just provide transportation, we create an experience defined by luxury, comfort, and reliability.</p>
                <p>From the moment you step into one of our <strong>Mercedes Maybach Vito</strong> vehicles, you’ll feel the difference. Designed for maximum comfort, our fleet features <strong>reclining leather seats, ambient starry LED ceilings, Android TV, and top-tier sound systems</strong>, ensuring that every journey is smooth, enjoyable, and stress-free.</p>
                <p>Our commitment to excellence goes beyond the vehicles we use. We take pride in offering <strong>professional, highly trained chauffeurs</strong> who are not just drivers but dedicated service professionals. Punctual, courteous, and experienced, they are always ready to provide a seamless and personalized experience.</p>
                <p><strong>Safety and reliability</strong> are at the core of our service. Our vehicles are meticulously maintained and regularly inspected to meet the highest safety standards. With real-time flight tracking, 24/7 customer support, and a focus on hassle-free travel, we ensure that your journey is smooth from start to finish.</p>
                <p>Whether you are booking an <strong>airport transfer, a guided city tour, or a scenic escape to Bursa, Uludağ, or Sapanca</strong>, we guarantee <strong>premium service, privacy, and unmatched comfort</strong>. </p>
                <p>At <strong>Cool Travel Istanbul</strong>, luxury is not an option, it’s the standard.</p>
                <div class="focus-buttons">
                    <button class="main-btn" onclick="wpLink('Hi, I Want To Reserve My Booking');">Feel The Quality Now</button>
                </div>
            </div>
            <div class="focus-img blur-load" style="background-image: url(/img/cars/vito/low/00-01.webp);">
                <img src="/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
        </div>
    </div>
    <br>
    <div class="space">
        <hr class="hr-secondary">
    </div>
    <div class="focus section-container">
        <h1 class="subTitle">
            Seeking a Smooth & Enjoyable Journey? Istanbul Awaits You!
        </h1>
        <div class="focus-container focus-anim focus-img-container">
            <div class="focus-img blur-load" style="background-image: url(/img/cars/vito/low/00-01.webp);">
                <article><h2>Hagia Sophia</h2></article>
                <img src="/img/gallery/hagia-sophia-cathedral-church-istanbul-2024-10-21-02-59-14-utc.jpg">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/img/cars/vito/low/00-01.webp);">
                <article><h2>Ortaköy</h2></article>
                <img src="/img/gallery/exterior-of-ortakoy-mosque-and-bhosphorus-bridge-a-2024-06-12-01-16-04-utc.jpg">
            </div>
        </div>
        <br>
        <div class="space">
            <button class="main-btn" onclick="window.location.href='/gallery/'">Show Gallery</button>
        </div>
    </div>
    @include('layouts.faq')
    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.js"></script>
    <script src="scripts/homepage.js"></script>
    <script src="scripts/faq.js"></script>
</body>
</html>
