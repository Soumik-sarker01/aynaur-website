<header>
    <nav>
        <div class="container-fluid nav-wrapper">
            <div class="logo"><a href="/"><img src="{{asset('assets/img/logo.png')}}" alt="aynaur logo" style="width: 60px;"></a></div>
            <div class="large-menu">
                <ul>
                    <li><a href="/" class="nav-link active">Home</a></li>
                    <li><a href="/#pricing" class="nav-link">Pricing</a></li>
                    <li><a href="/#portfolio" class="nav-link">Portfolio</a></li>
                    <li><a href="/#about" class="nav-link">About us</a></li>
                </ul>
            </div>
            <div class="nav-action">
                <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                    <div class="button1">Get Started</div>
                </a>
            </div>
            <div id="burger-icon"><i class="fa-solid fa-bars"></i></div>
        </div>
    </nav>
</header>

<div class="nav-phone">
    <div class="container-lg nav-phone-wrapper">
        <div class="phone-menu">
            <ul>
                <li><a href="/" class="phone-link nav-link active">Home</a></li>
                <li><a href="/#pricing" class="phone-link nav-link">Pricing</a></li>
                <li><a href="/#portfolio" class="phone-link nav-link">Portfolio</a></li>
                <li><a href="/#about" class="phone-link nav-link">About us</a></li>
            </ul>
            <div class="nav-action">
                <a href="https://www.fiverr.com/this_is_anika" target="_blank" class="phone-link">
                    <div class="button1">Get Started</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const burgerIcon = document.getElementById('burger-icon');
        const navPhone = document.querySelector('.nav-phone');
        const icon = burgerIcon.querySelector('i');
        const links = document.querySelectorAll('.nav-link');

        // Toggle menu visibility
        burgerIcon.addEventListener('click', () => {
            navPhone.classList.toggle('active');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Close the menu on link click and handle active state
        links.forEach(link => {
            link.addEventListener('click', () => {
                // Remove the active class from all links
                links.forEach(link => link.classList.remove('active'));

                // Add the active class to the clicked link
                link.classList.add('active');

                // Close the mobile menu
                navPhone.classList.remove('active');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });

        // Set the active class for the current page on load
        const currentHash = window.location.hash;
        if (currentHash) {
            const activeLink = document.querySelector(`.nav-link[href='${currentHash}']`);
            if (activeLink) {
                links.forEach(link => link.classList.remove('active'));
                activeLink.classList.add('active');
            }
        }
    });
        document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector("header nav");

    window.addEventListener("scroll", function () {
        let scrollPosition = window.scrollY;
        let maxScroll = 300; // Distance at which the effect reaches max

        let minOpacity = 0.8; // Minimum opacity (avoids full transparency)
        let opacity = Math.max(1 - (scrollPosition / maxScroll) * (1 - minOpacity), minOpacity);

        let blurIntensity = Math.min(scrollPosition / 50, 2); // Subtle blur, max 3px

        navbar.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;
        navbar.style.backdropFilter = `blur(${blurIntensity}px)`;
        navbar.style.transition = "background-color 0.3s ease-out, backdrop-filter 0.3s ease-out";
    });
});
</script>

<style>
    .nav-link.active {
        font-weight: bold;
        color: #000;
        /* Adjust as needed */
    }

    .nav-phone.active {
        display: block;
    }

    .nav-phone.active .nav-phone-wrapper {
        transform: translateY(0);
    }
    .nav-link {
    position: relative;
    display: inline-block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333; /* Default text color */
    transition: all 0.3s ease-in-out;
}

.nav-link:hover {
    color: #e93765; /* Change color on hover */
    transform: scale(1.1); /* Slight pop-up effect */
}

/* Add an underline effect */
.nav-link::after {
    content: "";
    display: block;
    width: 0;
    height: 2px;
    background: #e93765; /* Underline color */
    transition: width 0.3s ease-in-out;
}

.nav-link:hover::after {
    width: 100%;
}



    .nav-phone.active {
        display: block;
    }

    .nav-phone.active .nav-phone-wrapper {
        transform: translateY(0);
    }
    
    header nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 1); /* Starts fully visible */
    backdrop-filter: blur(0px); /* No blur initially */
    transition: background-color 0.3s ease-out, backdrop-filter 0.3s ease-out;
    z-index: 1000;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Optional: Adds slight shadow */

</style>