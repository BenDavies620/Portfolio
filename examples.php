<?php

require_once __DIR__ . '/config/database.php';

$pageTitle = 'Coding Examples';
$pageDescription = "Explore coding examples by Benjamin Davies, including responsive layouts, JavaScript interactions and PHP form validation.";

?>

<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
    <?php require __DIR__ . '/includes/svg.php'; ?>
    <?php require __DIR__ . '/includes/sidebar.php'; ?>
    <main class="main-content">
        <header class="coding-hero">
            <div class="coding-hero-content">
                <p class="eyebrow">Coding Examples</p>
                <h1>
                    A Collection Of<br>
                    Things I'm Building.
                </h1>
                <p>
                    A growing collection of coding examples and projects
                    developed throughout my training.
                </p>
            </div>
            <div class="coding-hero-shapes">
                <span></span>
                <span></span>
            </div>
        </header>
        <div class="coding-examples">
            <!-- Mobile Navigation -->
            <section class="code-example navigation-example" data-code-example aria-labelledby="navigation-example-title">
                <div class="code-example-header">
                    <span class="eyebrow">Interactive Code</span>
                    <h2 id="navigation-example-title">Mobile Navigation</h2>
                    <p>See the JavaScript behind my portfolio's mobile navigation.</p>
                </div>
                <div class="code-demo">
                    <div class="code-window">
                        <div class="code-window-header">
                            <span class="window-title">examplesBtn.js</span>
                        </div>
                        <div class="code-content">
<pre><code><span class="keyword">const</span> demoSidebar = document.<span class="function">querySelector</span>(<span class="string">'.demo-sidebar'</span>);
<span class="keyword">const</span> demoBurger = document.<span class="function">querySelector</span>(<span class="string">'.demo-burger'</span>);

<span class="keyword">if</span> (demoSidebar &amp;&amp; demoBurger) {
    demoBurger.<span class="function">addEventListener</span>(<span class="string">'click'</span>, () =&gt; {
        <span class="keyword">const</span> isOpen = demoSidebar.classList.<span class="function">toggle</span>(<span class="string">'open'</span>);

        demoBurger.classList.<span class="function">toggle</span>(<span class="string">'open'</span>, isOpen);
        demoBurger.<span class="function">setAttribute</span>(<span class="string">'aria-expanded'</span>, <span class="function">String</span>(isOpen));
        demoSidebar.inert = !isOpen;
    });
}</code></pre>
                        </div>
                    </div>
                    <div class="demo-preview">
                        <div class="preview-header">
                            <span>Live Preview</span>
                        </div>
                        <div class="preview-content">
                            <button class="demo-burger" type="button" aria-label="Toggle demo menu" aria-expanded="false" aria-controls="demo-sidebar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="demo-sidebar" id="demo-sidebar" inert>
                                <a href="about.php">About Me</a>
                                <a href="index.php#portfolio">My Portfolio</a>
                                <a href="examples.php">Coding Examples</a>
                                <a href="scs.php">SCS</a>
                                <a href="index.php#contact">Contact</a>
                            </div>
                            <p class="demo-instruction">Click the menu button to try it!</p>
                        </div>
                    </div>
                </div>
                <div class="code-information">
                    <div class="code-info">
                        <h3>Language Used</h3>
                        <p>JavaScript</p>
                    </div>
                    <div class="code-info">
                        <h3>What It Does</h3>
                        <p>
                            This JavaScript controls the mobile navigation menu
                            on my portfolio.
                        </p>
                    </div>
                    <div class="code-info">
                        <h3>Why I've Used It</h3>
                        <p>
                            I used JavaScript to make the mobile navigation
                            interactive and allow visitors to open and close
                            the menu.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Reusable Navigation Themes -->
            <section class="code-example theme-example" data-code-example aria-labelledby="theme-example-title">
                <div class="code-example-header">
                    <span class="eyebrow">Reusable Styling</span>
                    <h2 id="theme-example-title">Reusable Navigation Themes</h2>
                    <p>See how I used SCSS mixins to create reusable navigation themes.</p>
                </div>
                <div class="code-demo">
                    <div class="code-window">
                        <div class="code-window-header">
                            <span class="window-title">_variables.scss</span>
                        </div>
                        <div class="code-content">
<pre><code>
<span class="at-rule">@mixin</span> nav-theme(<span class="string">$color</span>) {
    > <span class="selector">a</span> {
        <span class="string">color: $color</span>;

        <span class="selector">small,
        p</span> {
            <span class="string">color: $text-white</span>;
        }
    }
    <span class="nesting">&</span>:<span class="selector">hover</span> > <span class="selector">a</span> {
        <span class="string">background-color: lighten($color, 8%)</span>;
        <span class="string">color: $text-white</span>;
    }
    <span class="nesting">&</span>:<span class="selector">hover</span> > <span class="selector">a::after</span> {
        <span class="string">background-color: lighten($color, 8%)</span>;
    }
    <span class="selector">.sub-menu-banner</span> {
        <span class="string">background-color: $color</span>;
    }
}
<span class="nesting">&</span><span class="selector">.it</span> {
    <span class="at-rule">@include</span> nav-theme(<span class="string">$it-blue</span>);
}</code></pre>
                        </div>
                    </div>
                    <div class="demo-preview theme-preview">
                        <div class="preview-header">
                            <span>Preview</span>
                        </div>
                        <div class="preview-content">
                            <img src="img/it-support-banner.webp" alt="IT Support navigation theme created with an SCSS mixin">
                        </div>
                    </div>
                </div>
                <div class="code-information">
                    <div class="code-info">
                        <h3>Language Used</h3>
                        <p>SCSS</p>
                    </div>
                    <div class="code-info">
                        <h3>What It Does</h3>
                        <p>
                            This mixin creates the shared colour behaviour for each service in the main navigation. A colour is passed into the mixin and reused for the navigation link, hover state, dropdown banner and triangle indicator.
                        </p>
                    </div>
                    <div class="code-info">
                        <h3>Why I've Used It</h3>
                        <p>
                            Originally, the same navigation styles were repeated for every service with only the colour changing. I refactored the code into a mixin to reduce repetition and make the navigation easier to maintain.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Cookie Consent -->
            <section class="code-example cookie-example" data-code-example aria-labelledby="cookie-example-title">
                <div class="code-example-header">
                    <span class="eyebrow">Interactive Code</span>
                    <h2 id="cookie-example-title">Cookie Consent</h2>
                    <p>See how my Netmatters recreation remembers cookie acceptance.</p>
                </div>
                <div class="code-demo">
                    <div class="code-window">
                        <div class="code-window-header">
                            <span class="window-title" data-code-title>
                                cookieConsentDemo.js
                            </span>
                            <div class="code-source-controls" role="group" aria-label="Choose code language">
                                <button type="button" class="code-source-button" data-code-view="javascript" data-code-filename="cookieConsentDemo.js" aria-pressed="true">
                                    JavaScript
                                </button>

                                <button type="button" class="code-source-button" data-code-view="html" data-code-filename="examples.html" aria-pressed="false">
                                    HTML
                                </button>
                            </div>
                        </div>
                        <div class="code-content" data-code-panel="javascript">
<pre><code><span class="keyword">const</span> storageKey = <span class="string">'portfolioCookieDemoAccepted'</span>;
<span class="keyword">const</span> savedConsent = localStorage.<span class="function">getItem</span>(storageKey);

<span class="keyword">function</span> <span class="function">updateDemo</span>(accepted) {
    notice.hidden = accepted;
    confirmation.hidden = !accepted;

    <span class="keyword">if</span> (accepted) {
        status.textContent = <span class="string">'Accepted'</span>;
    } <span class="keyword">else</span> {
        status.textContent = <span class="string">'Not accepted'</span>;
    }
    status.classList.<span class="function">toggle</span>(<span class="string">'is-accepted'</span>, accepted);
}
<span class="function">updateDemo</span>(savedConsent === <span class="string">'true'</span>);

acceptBtn.<span class="function">addEventListener</span>(<span class="string">'click'</span>, () =&gt; {
    localStorage.<span class="function">setItem</span>(storageKey, <span class="string">'true'</span>);
    <span class="function">updateDemo</span>(<span class="keyword">true</span>);
});
resetBtn.<span class="function">addEventListener</span>(<span class="string">'click'</span>, () =&gt; {
    localStorage.<span class="function">removeItem</span>(storageKey);
    <span class="function">updateDemo</span>(<span class="keyword">false</span>);
});</code></pre>
                        </div>
                        <div class="code-content" data-code-panel="html" hidden>
<pre><code>&lt;<span class="selector">div</span> <span class="string">class="demo-preview cookie-preview"</span>&gt;
    &lt;<span class="selector">div</span> <span class="string">class="preview-content"</span>&gt;
        &lt;<span class="selector">div</span> <span class="string">class="cookie-status-row"</span>&gt;
            &lt;<span class="selector">span</span>&gt;Saved choice&lt;/<span class="selector">span</span>&gt;
            &lt;<span class="selector">strong</span>&gt;Not accepted&lt;/<span class="selector">strong</span>&gt;
        &lt;/<span class="selector">div</span>&gt;
        &lt;<span class="selector">div</span> <span class="string">class="cookie-notice"</span>&gt;
            &lt;<span class="selector">h3</span>&gt;Cookies Policy&lt;/<span class="selector">h3</span>&gt;
            &lt;<span class="selector">p</span>&gt;This demo remembers your choice.&lt;/<span class="selector">p</span>&gt;
            &lt;<span class="selector">button</span> type="button" <span class="string">class="cookie-accept demo-button"</span>&gt;
                Accept Cookies
            &lt;/<span class="selector">button</span>&gt;
        &lt;/<span class="selector">div</span>&gt;
        &lt;<span class="selector">div</span> <span class="string">class="cookie-confirmation"</span>&gt;
            &lt;<span class="selector">h3</span>&gt;Choice saved&lt;/<span class="selector">h3</span>&gt;
            &lt;<span class="selector">p</span>&gt;Refresh the page to see it remembered.&lt;/<span class="selector">p</span>&gt;
        &lt;/<span class="selector">div</span>&gt;
        &lt;<span class="selector">button</span> type="button" <span class="string">class="cookie-reset demo-button demo-button-secondary"</span>&gt;
            Reset Demo
        &lt;/<span class="selector">button</span>&gt;
    &lt;/<span class="selector">div</span>&gt;
&lt;/<span class="selector">div</span>&gt;</code></pre>
                        </div>
                    </div>
                    <div class="demo-preview cookie-preview">
                        <div class="preview-header">
                            <span>Live Preview</span>
                        </div>
                        <div class="preview-content">
                            <div class="cookie-status-row">
                                <span>Saved choice</span>
                                <strong role="status">Not accepted</strong>
                            </div>
                            <div class="cookie-notice">
                                <div class="cookie-notice-header">
                                    <p class="cookie-caption">Cookie consent demo</p>
                                    <h3>Cookies Policy</h3>
                                </div>
                                <div class="cookie-notice-body">
                                    <p>
                                        This demo remembers your choice in your browser.
                                        Accept cookies, then refresh the page to see it saved.
                                    </p>
                                    <button type="button" class="cookie-accept demo-button">Accept Cookies</button>
                                </div>
                            </div>
                            <div class="cookie-confirmation" hidden>
                                <h3>Choice saved</h3>
                                <p>
                                    Your acceptance is saved. Refresh the page and
                                    this demo will remember it.
                                </p>
                            </div>
                            <div class="cookie-demo-controls">
                                <button type="button" class="cookie-reset demo-button demo-button-secondary">Reset Demo</button>
                                <p class="cookie-hint">
                                    Reset to show the notice again.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code-information">
                    <div class="code-info">
                        <h3>Language Used</h3>
                        <p>HTML and JavaScript</p>
                    </div>
                    <div class="code-info">
                        <h3>What It Does</h3>
                        <p>
                            This example saves cookie acceptance in localStorage and
                            checks it when the page loads. Once accepted, the notice
                            stays hidden even after refreshing the page.
                        </p>
                    </div>
                    <div class="code-info">
                        <h3>Why I've Used It</h3>
                        <p>
                            I built this for my Netmatters recreation so visitors
                            don't have to accept cookies every time they reload.
                            I've added a reset button here so you can try it again.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Random Image Loader -->
            <section class="code-example image-loader-example" data-code-example aria-labelledby="image-example-title">
                <div class="code-example-header">
                    <span class="eyebrow">Interactive Code</span>
                    <h2 id="image-example-title">Random Image Loader</h2>
                    <p>See how JavaScript loads random photos for my PhotoNest project.</p>
                </div>

                <div class="code-demo">
                    <div class="code-window">
                        <div class="code-window-header">
                            <span class="window-title" data-code-title>
                                randomImgGenerator.js
                            </span>
                            <div class="code-source-controls" role="group" aria-label="Choose code language">
                                <button type="button" class="code-source-button" data-code-view="javascript" data-code-filename="randomImgGenerator.js" aria-pressed="true">
                                    JavaScript
                                </button>

                                <button type="button" class="code-source-button" data-code-view="html" data-code-filename="examples.html" aria-pressed="false">
                                    HTML
                                </button>
                            </div>
                        </div>
                        <div class="code-content" data-code-panel="javascript">
<pre><code><span class="keyword">const</span> demoImage = document.<span class="function">getElementById</span>(<span class="string">'demo-image'</span>);
<span class="keyword">const</span> demoImageStatus = document.<span class="function">getElementById</span>(<span class="string">'demo-image-status'</span>);
<span class="keyword">const</span> demoNewImageButton = document.<span class="function">getElementById</span>(<span class="string">'demo-new-image'</span>);

<span class="keyword">if</span> (demoImage &amp;&amp; demoImageStatus &amp;&amp; demoNewImageButton) {

    <span class="keyword">function</span> <span class="function">loadDemoImage</span>() {
        <span class="keyword">const</span> seed = Math.<span class="function">floor</span>(Math.<span class="function">random</span>() * 1000000);

        demoImage.hidden = <span class="keyword">true</span>;
        demoImageStatus.textContent = <span class="string">'Loading...'</span>;
        demoNewImageButton.disabled = <span class="keyword">true</span>;

        demoImage.src = <span class="string">`https://picsum.photos/seed/${seed}/900/600`</span>;
    }

    demoImage.<span class="function">addEventListener</span>(<span class="string">'load'</span>, () =&gt; {
        demoImage.hidden = <span class="keyword">false</span>;
        demoImageStatus.textContent = <span class="string">'Photo loaded. Request another to try again.'</span>;
        demoNewImageButton.disabled = <span class="keyword">false</span>;
    });

    demoImage.<span class="function">addEventListener</span>(<span class="string">'error'</span>, () =&gt; {
        demoImage.hidden = <span class="keyword">true</span>;
        demoImageStatus.textContent = <span class="string">'Unable to load the photo. Please try again.'</span>;
        demoNewImageButton.disabled = <span class="keyword">false</span>;
    });

    demoNewImageButton.<span class="function">addEventListener</span>(<span class="string">'click'</span>, loadDemoImage);

    <span class="function">loadDemoImage</span>();
}</code></pre>
                        </div>
                        <div class="code-content" data-code-panel="html" hidden>
<pre><code>&lt;<span class="selector">div</span> <span class="string">class="demo-preview image-preview"</span>&gt;
    &lt;<span class="selector">div</span> <span class="string">class="preview-header"</span>&gt;
        &lt;<span class="selector">span</span>&gt;Live Preview&lt;/<span class="selector">span</span>&gt;
    &lt;/<span class="selector">div</span>&gt;
    &lt;<span class="selector">div</span> <span class="string">class="preview-content"</span>&gt;
        &lt;<span class="selector">div</span> <span class="string">class="image-demo-frame"</span>&gt;
            &lt;<span class="selector">img</span> <span class="string">id="demo-image"</span> <span class="string">alt="Random photograph from Picsum"</span> hidden&gt;
        &lt;/<span class="selector">div</span>&gt;

        &lt;<span class="selector">p</span> <span class="string">id="demo-image-status"</span> <span class="string">role="status"</span>&gt;
            Loading...
        &lt;/<span class="selector">p</span>&gt;

        &lt;<span class="selector">button</span> <span class="string">type="button"</span> <span class="string">id="demo-new-image"</span> <span class="string">class="demo-button demo-button-secondary"</span>&gt;
            New Image
        &lt;/<span class="selector">button</span>&gt;
    &lt;/<span class="selector">div</span>&gt;
&lt;/<span class="selector">div</span>&gt;</code></pre>
                        </div>
                    </div>
                    <div class="demo-preview image-preview">
                        <div class="preview-header">
                            <span>Live Preview</span>
                            <span class="source-label">Picsum.photos</span>
                        </div>
                        <div class="preview-content">
                            <div class="image-demo-frame">
                                <img id="demo-image" alt="Random photograph from Picsum" hidden>
                            </div>

                            <p id="demo-image-status" role="status">
                                Loading...
                            </p>

                            <button type="button" id="demo-new-image" class="demo-button demo-button-secondary">
                                New Image
                            </button>
                        </div>
                    </div>
                </div>
                <div class="code-information">
                    <div class="code-info">
                        <h3>Language Used</h3>
                        <p>HTML and JavaScript</p>
                    </div>
                    <div class="code-info">
                        <h3>What It Does</h3>
                        <p>
                            Loads a random photo from Picsum when the page opens or the button is clicked. Loading and error messages keep visitors informed, and the button is disabled while a photo loads.
                        </p>
                    </div>
                    <div class="code-info">
                        <h3>Why I've Used It</h3>
                        <p>
                            I built this for PhotoNest - the image to email gallery, so visitors can request different photos to save to their email collections. This demo shows the image loading part on its own.
                        </p>
                    </div>
                </div>
            </section>

            <!-- PHP form validation -->
            <section class="code-example php-validation-example" aria-labelledby="php-example-title">
                <div class="code-example-header">
                    <span class="eyebrow">Code Example</span>
                    <h2 id="php-example-title">Server-Side Form Validation</h2>
                    <p>See how PHP checks enquiries submitted through my Netmatters contact form.</p>
                </div>

                <div class="code-demo">
                    <div class="code-window">
                        <div class="code-window-header">
                            <span class="window-title">
                                contact-handler.php
                            </span>
                        </div>

                        <div class="code-content">
<pre><code><span class="comment">// Values have already been checked as strings and trimmed.</span>
<span class="comment">// $errors also contains any errors from those type checks.</span>

$fieldValues = [
    <span class="string">'name'</span> =&gt; $name,
    <span class="string">'email'</span> =&gt; $email,
    <span class="string">'telephone'</span> =&gt; $telephone,
    <span class="string">'message'</span> =&gt; $message,
];

$requiredFields = [
    <span class="string">'name'</span> =&gt; <span class="string">'Please enter your name.'</span>,
    <span class="string">'email'</span> =&gt; <span class="string">'Please enter your email address.'</span>,
    <span class="string">'telephone'</span> =&gt; <span class="string">'Please enter your telephone number.'</span>,
    <span class="string">'message'</span> =&gt; <span class="string">'Please enter your message.'</span>,
];

<span class="keyword">foreach</span> ($requiredFields <span class="keyword">as</span> $field =&gt; $errorMessage) {
    <span class="keyword">if</span> ($fieldValues[$field] === <span class="string">''</span> &amp;&amp; !<span class="function">isset</span>($errors[$field])) {
        $errors[$field] = $errorMessage;
    }
}

<span class="keyword">if</span> ($email !== <span class="string">''</span>) {
    $result = <span class="function">filter_var</span>($email, <span class="keyword">FILTER_VALIDATE_EMAIL</span>);

    <span class="keyword">if</span> ($result === <span class="keyword">false</span>) {
        $errors[<span class="string">'email'</span>] = <span class="string">'Please enter a valid email address.'</span>;
    }
}</code></pre>
                        </div>
                    </div>

                    <div class="demo-preview validation-preview">
                        <div class="preview-header">
                            <span>Example Result</span>
                        </div>

                        <div class="preview-content">
                            <figure class="validation-result">
                                <img
                                    src="img/contact-validation.webp"
                                    alt="Contact form showing PHP errors for an invalid email and missing telephone number and message, while keeping the entered name and company."
                                    loading="lazy"
                                >
                                <figcaption>
                                    Submitted with JavaScript disabled to demonstrate
                                    the server-side checks.
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="code-information">
                    <div class="code-info">
                        <h3>Language Used</h3>
                        <p>PHP</p>
                    </div>

                    <div class="code-info">
                        <h3>What It Does</h3>
                        <p>
                            Checks required fields and validates the email format.
                            Errors are collected in an array and displayed above
                            the form, while entered values are kept so visitors
                            can correct their submission.
                        </p>
                    </div>

                    <div class="code-info">
                        <h3>Why I've Used It</h3>
                        <p>
                            JavaScript gives visitors immediate feedback, but it
                            can be disabled or bypassed. I added PHP validation
                            so enquiries are checked on the server before being
                            saved to the database.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <div class="back-top-btn">
        <a href="#" class="back-to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <script type="module" src="js/main.js"></script>
</body>
</html>