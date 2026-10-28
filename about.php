<?php

require_once __DIR__ . '/config/database.php';

$pageTitle = 'About Me | Benjamin Davies - Web Developer';
$pageDescription = "Learn about Benjamin Davies, an aspiring web developer based in Norwich, his background, skills and approach to building websites.";

?>

<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
    <?php require __DIR__ . '/includes/svg.php'; ?>
    <?php require __DIR__ . '/includes/sidebar.php'; ?>
    <main class="main-content">

        <!-- ABOUT HERO -->
        <header class="about-hero">
            <div class="about-hero-content">
                <p class="eyebrow">About Me</p>
                <h1>A Little Bit<br>About Ben.</h1>
                <p class="about-hero-intro">
                    Web developer in the making, problem solver, and
                    someone who enjoys figuring out how things work.
                </p>
            </div>
        </header>

        <!-- INTRODUCTION -->
        <section class="about-introduction">
            <div class="about-container">
                <div class="about-introduction-grid">
                    <div class="about-introduction-image">
                        <img src="img/profile-pic.webp" alt="Portrait of Ben Davies">
                    </div>
                    <div class="about-introduction-content">
                        <p class="eyebrow">Who I Am</p>

                        <h2>Nice to meet you.</h2>
                        <p class="lead">
                            Hi, I'm Ben. I'm an aspiring web developer based in
                            Norwich, Norfolk, currently developing my skills
                            through hands on projects and my training with
                            Netmatters.
                        </p>
                        <p>
                            I've always enjoyed understanding how things work
                            and solving problems along the way. Web development
                            gives me a chance to combine that logical side with
                            something much more creative. Taking an idea and
                            turning it into something people can actually use.
                        </p>
                        <p>
                            I'm particularly interested in creating websites
                            that feel clean, responsive and considered, where
                            the small details matter just as much as the bigger
                            picture.
                        </p>
                        <div class="about-introduction-signature">
                            <span>Benjamin Davies</span>
                            <small>Web Developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOW I GOT HERE -->
        <section class="about-journey reveal">
            <div class="about-container">
                <div class="section-heading">
                    <p class="eyebrow">My Journey</p>
                    <h2>How I got here.</h2>
                </div>
                <div class="journey-content">
                    <div class="journey-item reveal-left">
                        <span class="journey-number">01</span>
                        <div>
                            <h3>Curiosity</h3>
                            <p>
                                I've always had an interest in understanding
                                how things work. That curiosity led me towards
                                Physics, where problem solving and logical
                                thinking became a big part of my education.
                            </p>
                        </div>
                    </div>
                    <div class="journey-item reveal-left">
                        <span class="journey-number">02</span>
                        <div>
                            <h3>Finding Technology</h3>
                            <p>
                                Over time, I found myself increasingly drawn
                                towards technology and the practical side of
                                creating things. Web development stood out as
                                a way to combine technical thinking with
                                creativity.
                            </p>
                        </div>
                    </div>
                    <div class="journey-item reveal-left">
                        <span class="journey-number">03</span>
                        <div>
                            <h3>Learning to Build</h3>
                            <p>
                                I'm now developing my skills through practical
                                projects, learning how to turn designs into
                                responsive websites using HTML, CSS, Sass and
                                the wider tools used by modern developers.
                            </p>
                        </div>
                    </div>
                    <div class="journey-item reveal-left">
                        <span class="journey-number">04</span>
                        <div>
                            <h3>What's Next</h3>
                            <p>
                                This portfolio is part of that journey. As my
                                skills and experience grow, so will the work
                                showcased here.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="about-skills reveal" id="skills-detail">
            <div class="about-container">
                <div class="section-heading">
                    <p class="eyebrow">What I Work With</p>
                    <h2>Skills & Technologies.</h2>
                </div>
                <div class="skills-categories">
                    <!-- Frontend Development -->
                    <div class="skills-category">
                        <h3 class="category-title">Frontend Development</h3>
                        <div class="skills-grid">
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fab fa-html5"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>HTML5</h4>
                                    <p>Building semantic, well structured pages with accessible navigation, forms and content using clean HTML.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fab fa-css3-alt"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>CSS3</h4>
                                    <p>Creating responsive layouts with Flexbox and Grid, alongside transitions, animations, pseudo-classes and modern CSS techniques.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fab fa-sass"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Sass / SCSS</h4>
                                    <p>Writing organised and maintainable styles using variables, nesting, partials, mixins and reusable styles across projects.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Responsive Design</h4>
                                    <p>Building mobile-first layouts that adapt smoothly across different screen sizes using flexible layouts and media queries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- JavaScript & Logic -->
                    <div class="skills-category">
                        <h3 class="category-title">JavaScript & Logic</h3>
                        <div class="skills-grid">
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fab fa-js-square"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>JavaScript</h4>
                                    <p>Using JavaScript to add interactive features such as form validation, navigation menus, modals, scroll effects, event handling and DOM manipulation.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Browser APIs</h4>
                                    <p>Working with browser features such as the DOM, Intersection Observer and event listeners to create interactive and responsive user experiences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Backend & Databases -->
                    <div class="skills-category">
                        <h3 class="category-title">Backend &amp; Databases</h3>
                        <div class="skills-grid">
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fab fa-php"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>PHP</h4>
                                    <p>Building server-side functionality with PHP, including form handling, validation, sessions, templating and working with databases through PDO prepared statements.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>SQL / MySQL</h4>
                                    <p>Designing and querying relational databases with SQL, creating tables and securely storing and retrieving data using prepared statements.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & Workflow -->
                    <div class="skills-category">
                        <h3 class="category-title">Tools & Workflow</h3>
                        <div class="skills-grid">
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fab fa-git-alt"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Git & GitHub</h4>
                                    <p>Using Git for version control, managing repositories, committing changes and keeping projects backed up and accessible through GitHub.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fas fa-terminal"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Command Line</h4>
                                    <p>Using the terminal for everyday development tasks, including navigating projects, running commands and working with Sass.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Browser DevTools</h4>
                                    <p>Using browser developer tools to inspect HTML and CSS, debug JavaScript, test responsive layouts and investigate problems.</p>
                                </div>
                            </div>
                            <div class="skill-card">
                                <div class="skill-card-icon">
                                    <i class="fas fa-universal-access"></i>
                                </div>
                                <div class="skill-card-content">
                                    <h4>Web Accessibility</h4>
                                    <p>Applying semantic HTML, clear navigation and accessible interaction patterns when building websites with usability in mind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BEYOND CODE -->
        <section class="about-beyond">
            <div class="about-container">
                <div class="about-beyond-grid">
                    <div class="about-beyond-heading">
                        <p class="eyebrow">Outside The Screen</p>
                        <h2>There's more to me than code.</h2>
                    </div>
                    <div class="about-beyond-content">
                        <p>
                            When I'm not learning web development, I enjoy
                            spending time listening to music, playing guitar, gaming
                            and exploring the things that interest me.
                        </p>
                        <p>
                            I'm a big fan of rock and metal, and I enjoy
                            discovering new bands and albums as much as going
                            back to old favourites. I'm also a fan of gaming
                            and anime, with plenty of time spent exploring
                            Minecraft and rewatching Naruto.
                        </p>
                        <p>
                            I think those interests are part of what makes
                            working on creative projects enjoyable for me.
                            There's always something new to discover, learn
                            or improve.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHAT'S NEXT -->
        <section class="about-next">
            <div class="about-container">
                <div class="about-next-content">
                    <p class="eyebrow">Looking Ahead</p>
                    <h2>Still learning.<br>Still building.</h2>
                    <p>
                        I'm currently focused on developing my skills,
                        building real projects and learning from the
                        experienced developers around me at Netmatters.
                    </p>
                    <a href="index.php#portfolio" class="about-button">
                        View My Work
                        <svg class="icon icon-arrow-right2">
                            <use xlink:href="#icon-arrow-right2"></use>
                        </svg>
                    </a>
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