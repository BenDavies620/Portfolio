<?php

require_once __DIR__ . '/config/database.php';

$pageTitle = 'Scion Coalition Scheme';
$pageDescription = "Learn about Benjamin Davies's experience on the Netmatters Scion Coalition Scheme and his training towards a career in web development.";

?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
    <?php require __DIR__ . '/includes/svg.php'; ?>
    <?php require __DIR__ . '/includes/sidebar.php'; ?>
    <main class="main-content">
        <header class="scs-hero">
            <div class="scs-hero-content">
                <p class="eyebrow">Scion Coalition Scheme</p>
                <h1>Learning To<br>Build For The Web.</h1>
                <p>
                    An intensive training programme designed to prepare
                    candidates for a career in web development.
                </p>
            </div>
            <div class="scs-hero-shapes">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
        <section class="scs-introduction">
            <div class="scs-container">
                <div class="section-heading">
                    <p class="eyebrow">01 - The Scheme</p>
                    <h2>Introduction to the<br>Scion Coalition Scheme</h2>
                </div>
                <div class="scs-introduction-content">
                    <p>
                        The Scion Coalition Scheme is an intensive, specially
                        tailored training programme run by Netmatters in order
                        to give willing candidates the opportunity to enter
                        the industry as web developers.
                    </p>
                    <p>
                        Under the supervision of senior web developers, scions
                        generally aim to complete training within six to nine
                        months. The course is intensive and therefore the level
                        of learning achieved is extensive in a short space of time.
                    </p>
                </div>
            </div>
        </section>
        <section class="scs-treehouse reveal">
            <div class="scs-container">
                <div class="scs-treehouse-grid">
                    <div>
                        <p class="eyebrow">02 - Online Learning</p>
                        <h2>Treehouse</h2>
                    </div>
                    <div class="scs-treehouse-content">
                        <p>
                            Treehouse is an online learning community featuring
                            videos covering a wide range of topics, from basic
                            HTML to C# programming, iOS development, data
                            analysis and more. 
                        </p>
                        <p>
                            By completing courses, users can earn points which
                            allow them to track their progress and see how much
                            they have covered in different areas.
                        </p>
                        <div class="treehouse-score">
                            <span>Total Score</span>
                            <strong>6842</strong>
                        </div>
                        <a href="https://teamtreehouse.com/profiles/bendavies5" target="_blank" class="scs-link">
                            View my Treehouse profile
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="scs-netmatters">
            <div class="scs-container">
                <div class="section-heading">
                    <p class="eyebrow">03 - The Company</p>
                    <h2>About Netmatters.</h2>
                </div>
                <div class="netmatters-facts reveal-left">
                    <div class="netmatters-fact">
                        <strong>2008</strong>
                        <span>Established</span>
                    </div>
                    <div class="netmatters-fact">
                        <strong>80+</strong>
                        <span>Members of staff</span>
                    </div>
                    <div class="netmatters-fact">
                        <strong>2</strong>
                        <span>Locations across Norfolk</span>
                    </div>
                    <div class="netmatters-fact">
                        <strong>Nationwide</strong>
                        <span>Client base</span>
                    </div>
                </div>
                <div class="netmatters-description">
                    <p>
                        Netmatters is Norfolk's leading technology company,
                        providing a broad range of digital services to clients
                        across the country.
                    </p>
                    <p>
                        The company provides digital marketing, website &amp;
                        software development and IT support, while operating
                        according to strict company values.
                    </p>
                </div>
                <div class="netmatters-awards reveal-left">
                    <div>
                        <span>Award</span>
                        <h3>Princess Royal Training Award</h3>
                    </div>
                    <div>
                        <span>Award</span>
                        <h3>EDP Skills of Tomorrow Award</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="back-top-btn">
        <a href="#" class="back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <script type="module" src="js/main.js"></script>
</body>
</html>