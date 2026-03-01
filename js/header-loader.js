document.addEventListener("DOMContentLoaded", function () {
    const headerHtml = `
    <nav class="navbar navbar-universal navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand page-scroll">
                    <img src="img/Rankmator-logo.png" alt="Rankmator" class="logo" style="max-height: 60px;">
                    <img src="img/Rankmator-logo.png" alt="Rankmator" class="logodark" style="display:none; max-height: 60px;">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Services <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="best-seo-agency">SEO</a></li>
                            <li><a href="local-seo-agency">Local SEO</a></li>
                            <li><a href="website-design-development-services">Website Development</a></li>
                            <li><a href="ai-marketing-agency">AI Marketing</a></li>
                            <li><a href="email-marketing.php">Email Marketing</a></li>
                            <li><a href="branding-creative-design.php">Branding & Creative Design</a></li>
                            <li><a href="ecommerce-marketing-agency">E-commerce Marketing</a></li>
                            <li><a href="social-media-marketing-agency">Social Media Marketing</a></li>
                            <li><a href="performance-marketing-agency">Performance Marketing</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    `;

    const container = document.getElementById('header-include');
    if (container) {
        container.innerHTML = headerHtml;


        var url = window.location.pathname.split("/").pop() || "index.php";
        var navLinks = container.querySelectorAll('ul.nav a');
        navLinks.forEach(function (link) {
            var href = link.getAttribute('href');
            if (href === url || link.href === window.location.href) {
                link.parentElement.classList.add('active');
            }
        });


        window.dispatchEvent(new Event('scroll'));
    }
});
