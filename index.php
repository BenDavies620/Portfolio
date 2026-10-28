<?php
session_start();

require_once __DIR__ . '/includes/contact-handler.php';

$pageTitle = 'Benjamin Davies Portfolio';
$pageDescription = 'Junior web developer portfolio of Benjamin Davies, featuring projects built with HTML, CSS, Sass, JavaScript and PHP.';

?>

<!DOCTYPE html>
<html lang="en">
<script>
    if (sessionStorage.getItem('returnToContact') === 'true') {
        document.documentElement.classList.add('restore-contact');
    }
</script>
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
    <?php require __DIR__ . '/includes/svg.php'; ?>
    <?php require __DIR__ . '/includes/sidebar.php'; ?>
    <main class="main-content">

        <header class="hero">
            <div class="hero-overlay">
                <h1><span id="typing-text-h1">My name is Benjamin Davies</span><span class="cursor">|</span></h1>
                <p><span id="typing-text-p">I'm a Web Developer</span></p>
            </div>
            <a href="#portfolio" class="scroll-down">Scroll Down<i class="fas fa-chevron-down"></i></a>
        </header>

        <!-- PORTFOLIO SECTION -->
        <section class="portfolio reveal" id="portfolio">
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card" data-description="A recreation of the Netmatters homepage. Used: HTML, SASS compiled CSS, JavaScript." data-live="http://netmatters.benjamin-davies.netmatters-scs.co.uk/" data-github="https://github.com/BenDavies620/Netmatters-Site">
                    <img src="img/Netmatters-recreation.webp" alt="Screenshot of my Netmatters website recreation">
                    <h3>Netmatters Site Recreation</h3>
                    <a href="#" class="view-link">View Project <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>

                <!-- Project 2 -->
                <div class="project-card" data-description="A responsive image gallery for assigning and organising photos by email address. Used: HTML, SASS compiled CSS, JavaScript." data-live="http://js-array.benjamin-davies.netmatters-scs.co.uk/" data-github="https://github.com/BenDavies620/PhotoNest-Image_to_email_gallery">
                    <img src="img/PhotoNest.webp" alt="Screenshot of PhotoNest, my JavaScript image gallery">
                    <h3>PhotoNest-Image To Email Gallery </h3>
                    <a href="#" class="view-link">View Project <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <img src="https://picsum.photos/id/22/800/500" alt="Project Three">
                    <h3>Project Three</h3>
                    <a href="#" class="view-link">View Project <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>

                <!-- Project 4 -->
                <div class="project-card">
                    <img src="https://picsum.photos/id/42/800/500" alt="Project Four">
                    <h3>Project Four</h3>
                    <a href="#" class="view-link">View Project <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>

                <!-- Project 5 -->
                <div class="project-card">
                    <img src="https://picsum.photos/id/15/800/500" alt="Project Five">
                    <h3>Project Five</h3>
                    <a href="#" class="view-link">View Project <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>

                <!-- Project 6 -->
                <div class="project-card">
                    <img src="https://picsum.photos/id/96/800/500" alt="Project Six">
                    <h3>Project Six</h3>
                    <a href="#" class="view-link">View Project <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>
            </div>
        </section>

        <!-- SKILLS BADGES SECTION -->
        <section class="skills-badges reveal" id="skills">
            <div class="skills-badges-container">
                <div class="skills-badges-heading">
                    <h2>Skills & Technologies</h2>
                </div>
                <div class="badges-grid">
                    <div class="badge-item">
                        <i class="fab fa-html5"></i>
                        <span>HTML5</span>
                    </div>
                    <div class="badge-item">
                        <i class="fab fa-css3-alt"></i>
                        <span>CSS3</span>
                    </div>
                    <div class="badge-item">
                        <i class="fab fa-sass"></i>
                        <span>Sass</span>
                    </div>
                    <div class="badge-item">
                        <i class="fab fa-js-square"></i>
                        <span>JavaScript</span>
                    </div>
                    <div class="badge-item">
                        <i class="fab fa-php"></i>
                        <span>PHP</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-database"></i>
                        <span>SQL</span>
                    </div>
                    <div class="badge-item">
                        <i class="fab fa-git-alt"></i>
                        <span>Git</span>
                    </div>
                    <div class="badge-item">
                        <i class="fab fa-github"></i>
                        <span>GitHub</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Responsive</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-terminal"></i>
                        <span>Terminal</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-universal-access"></i>
                        <span>Accessibility</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-tools"></i>
                        <span>DevTools</span>
                    </div>
                </div>
                <a href="about.php#skills-detail" class="skills-badges-link">
                    See full skill details
                    <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg>
                </a>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section class="contact reveal-left" id="contact">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>I’m currently completing my training at Netmatters and looking for opportunities to start my career as a Junior Web Developer. Feel free to get in touch - I’d love to hear from you!</p>
                    <p><a href="tel:07364110483">07364 110483</a></p>
                    <p><a href="mailto:bendavies2503@hotmail.com">bendavies2503@hotmail.com</a></p>
                    <p>Based in Norwich, Norfolk</p>
                </div>
                <form class="contact-form" action="index.php#contact" method="POST" novalidate>
                    <?php if ($successMessage !== ''): echo '<p class="success-message" role="status">' . htmlspecialchars($successMessage) . '</p>'; ?>
                    <?php endif; ?>
                    <?php if ($errors !== []): ?>
                        <div class="error-message" role="alert">
                            <ul>
                                <?php foreach($errors as $errorMessage) {
                                    echo '<li>' . htmlspecialchars($errorMessage) . '</li>';
                                } ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="form-row">
                        <div class="form-field">
                            <input type="text" name="firstName" placeholder="First name*" required maxlength="100" autocomplete="given-name" value="<?= htmlspecialchars($firstName) ?>"/>
                        </div>
                        <div class="form-field">
                            <input type="text" name="lastName" placeholder="Last name*" required maxlength="100" autocomplete="family-name" value="<?= htmlspecialchars($lastName) ?>"/>
                        </div>
                        <div class="form-field">
                            <input type="email" name="email" placeholder="Email Address*" required maxlength="254" autocomplete="email" value="<?= htmlspecialchars($email) ?>"/>
                        </div>
                        <input type="tel" name="telephone" placeholder="Phone Number" maxlength="30" autocomplete="tel" value="<?= htmlspecialchars($telephone) ?>"/>
                    </div>
                    <input type="text" name="subject" placeholder="Subject" maxlength="255" value="<?= htmlspecialchars($subject) ?>"/>
                    <div class="form-field">
                        <textarea name="message" placeholder="Message* (minimum 10 characters)" required minlength="10" maxlength="5000"><?= htmlspecialchars($message) ?></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
    <div class="back-top-btn">
        <a href="#" class="back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <div class="project-modal">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img src="" alt="">
            <h2></h2>
            <p></p>
            <div class="modal-links">
                <a href="#" target="_blank" rel="noopener noreferrer">Live Site</a>
                <a href="#" target="_blank" rel="noopener noreferrer">GitHub</a>
            </div>
        </div>
    </div>
    <script type="module" src="js/main.js"></script>
</body>
</html>