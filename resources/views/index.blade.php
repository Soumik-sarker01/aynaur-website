@extends('layouts.master')

@section('title', 'Aynaur')

@section('main-container')
<!-- Include Swiper's CSS (ideally in your <head>) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
    html, body {
  overflow-x: hidden;
}
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    h1 {
        text-transform: capitalize;
    }

    /* General Hover Shadow Effect */
.aim-item:hover,
.service-item:hover,
.package-item:hover,
.testimonial:hover,
.project-item:hover {
    box-shadow: 0 5px 15px rgba(238, 54, 101, 0.3) !important;
}

    /* General Styles */
    .scroll-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 100%;
    }

    .project-list {
        display: flex;
        gap: 15px;
        width: max-content;
        will-change: transform;
    }

    .project-item {
        flex: 0 0 auto;
        width: 350px;
        cursor: pointer;
        background: white;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

/* Projects */
.project-item:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(238, 54, 101, 0.3) !important;
}

    .project-item img {
        width: 100%;
        border-radius: 10px;
    }

    /* --- Preloader Overlay --- */
    /* --- Preloader Overlay --- */
    #preloader {
        position: fixed;
        inset: 0;
        /* top, right, bottom, left: 0 */
        background: #ffffff;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 1;
        visibility: visible;
        /* Fade out smoothly over 3.5s with a custom easing */
        transition: opacity 1.5s cubic-bezier(0.4, 0, 0.2, 1), visibility 1.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    #preloader.fade-out {
        opacity: 0;
        visibility: hidden;
    }

    /* --- Preloader Logo --- */
    #preloader-logo {
        position: absolute;
        width: 250px;
        /* Big initially */
        height: auto;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        /* Smooth movement and resizing over 3.5s using Material-style easing */
        transition: top 1.5s cubic-bezier(0.4, 0, 0.2, 1),
            left 1.5s cubic-bezier(0.4, 0, 0.2, 1),
            width 1.5s cubic-bezier(0.4, 0, 0.2, 1),
            transform 1.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Final (Navbar) position for the logo */
    #preloader-logo.logo-moving {
        left: 50px;
        /* Adjust to your navbar logo x-position */
        top: 20px;
        /* Adjust to your navbar logo y-position */
        width: 60px;
        /* Smaller size in the navbar */
        transform: translate(0, 0);
    }


    /* --- Main Site Content --- */
    .site-content {
        /* Initially hidden and slightly shifted down */
        opacity: 0;
        transform: translateY(20px);
        /* Fade in and slide up smoothly over 3.5s */
        transition: opacity 3.5s cubic-bezier(0.4, 0, 0.2, 1),
            transform 3.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .site-content.visible {
        opacity: 1;
        transform: translateY(0);
    }


/* AIM & SERVICES SECTION STYLING */
.aim-wrapper, .services-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns per row */
    gap: 30px;
    justify-items: center;
    text-align: center;
    padding: 50px 0;
    background: white;
}

/* Uniform Box Sizing */
.aim-item, .service-item {
    background: white;
    border-radius: 20px;
    padding: 25px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 200px;  /* Fixed Height */
    width: 100%;    /* Ensures uniform width */
    max-width: 350px; /* Limits maximum size */
}

/* Alternating Box Background Colors */
.aim-item:nth-child(odd), .service-item:nth-child(odd) {
    background: #FFEEF0;
}

.aim-item:nth-child(even), .service-item:nth-child(even) {
    background: #E3EBF5;
}

/* Hover Effect */
.aim-item:hover, .service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
}

/* ICONS WITH BACKGROUND */
.aim-icon {
    width: 40px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    margin-bottom: 10px;
    animation: pulseEffect 1.5s infinite ease-in-out;
}
/* ICONS WITH BACKGROUND */
.service-icon {
    width: 40px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    margin-bottom: -5px;
    animation: pulseEffect 1.5s infinite ease-in-out;
}

.aim-icon i, .service-icon i {
    font-size: 30px;
    color: #e93765;
}

/* Pulse Animation */
@keyframes pulseEffect {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

/* SECTION HEADER (Larger Size) */
.aim h1, .services-included h1 {
    font-size: 38px;
    font-weight: 800;
    color: #222;
    text-transform: uppercase;
    margin-bottom: 20px;
}

/* BOX HEADER (Smaller Size) */
.aim-item h1, .service-item h1 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

/* TEXT */
.aim-item p, .service-item p {
    font-size: 15px;
    color: #555;
    max-width: 90%;
}

/* RESPONSIVENESS */
@media (max-width: 1024px) {
    .aim-wrapper, .services-wrapper {
        grid-template-columns: repeat(2, 1fr); /* 2 columns per row */
    }

    .aim h1, .services-included h1 {
        font-size: 34px;
    }

    .aim-item, .service-item {
        height: 180px;
    }
}

@media (max-width: 768px) {
    .aim-wrapper, .services-wrapper {
        grid-template-columns: 1fr; /* 1 column per row */
    }

    .aim h1, .services-included h1 {
        font-size: 30px;
    }

    .aim-item h1, .service-item h1 {
        font-size: 15px;
    }

    .aim-item, .service-item {
        height: 170px;
    }
}






    .clients-scroll-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 34%;
        /* Default: Push towards right */
        margin-left: auto;
    }

    /* Client images container */
    .clients-img {
        display: flex;
        gap: 20px;
        width: max-content;
        will-change: transform;
    }

    /* Ensure logos scale correctly */
    .clients-img img {
        width: 80px;
        /* Default logo size */
        height: auto;
        opacity: 0.9;
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }


    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .clients-scroll-container {
            width: 40%;
            /* Adjust width for tablets */
        }

        .clients-img img {
            width: 70px;
            /* Slightly smaller for tablets */
        }
    }

    @media (max-width: 1024px) {
        .clients-scroll-container {
            width: 50%;
            /* More centered for mid screens */
        }

        .clients-img img {
            width: 65px;
            /* Reduce logo size */
        }
    }

    @media (max-width: 768px) {
        .clients-scroll-container {
            width: 60%;
            /* More center-aligned */
            margin: 0 auto;
        }

        .clients-img img {
            width: 60px;
            /* Smaller size for mobile */
        }
    }

    @media (max-width: 480px) {
        .clients-scroll-container {
            width: 80%;
            /* Almost full width */
        }

        .clients-img img {
            width: 50px;
            /* Smallest size for compact view */
        }
    }




    /* Reduce speed for smaller section */
    @keyframes scrollClients {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }


    /* Wavy Arrow Animation */
    .wavy-arrow {
        position: relative;
        animation: moveArrowDown 1.8s infinite ease-in-out;
    }

    /* Keyframe Animation (Smooth Wavy Movement) */
    @keyframes moveArrowDown {
        0% {
            transform: translateY(-5px);
            opacity: 1;
        }

        50% {
            transform: translateY(5px);
            opacity: 0.9;
        }

        100% {
            transform: translateY(-5px);
            opacity: 1;
        }
    }

    /* Fix for hero video to avoid misalignment */
    .hero-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -2;
    }

    /* Fix overlay */
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        /* Keeps text readable */
        z-index: -1;
    }


    /* Fix for hero section */
    .hero {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        height: 100vh;
        /* Makes sure hero section fills the viewport */
        width: 100%;
    }

    /* Ensure hero-text is centered */
    .hero-wrapper {
        display: flex;
        justify-content: center;
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
        text-align: center;
        width: 100%;
        height: 100%;
        /* Ensures it takes the full hero section height */
        position: relative;
    }

    .hero-text p {
        font-size: 2.2rem;
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #fff;
        text-align: center;
        max-width: 600px;
        /* Adjust width */
        width: 100%;
        /* Ensures it doesn't exceed parent width */
        margin-top: 10px;
        /* Add some spacing */
    }






    /* Ensure the entire h1 is centered */
    .social-media-container {
        display: flex;
        justify-content: center;
        /* Center the whole text block */
        align-items: center;
        /* Keep vertical alignment */
        gap: 10px;
        /* Space between static and rolling text */
        flex-wrap: nowrap;
        /* Prevent line breaks */
        text-align: center;
        /* Ensure overall centering */
        font-size: clamp(28px, 5vw, 50px);
        /* Responsive font size */
        white-space: nowrap;
        /* Prevent wrapping */
        position: relative;
        height: 70px;
        /* Prevents shifting */
        font-size: 37px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* Keep "Social Media" fixed in place */
    .social-media-text {
        flex-shrink: 0;
        /* Prevents resizing */
        min-width: 250px;
        /* Ensures stability */
        text-align: center;
    }


    /* Social Media Container */
    .social-media-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        flex-wrap: nowrap;
        text-align: center;
        font-size: clamp(28px, 5vw, 50px);
        /* Responsive font size */
        white-space: nowrap;
        position: relative;
        height: 70px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* Rolling Triangle - Adjusted for Social Media Container */
    .rolling-triangle {
        width: 180px;
        /* Matches Social Media Container */
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        perspective: 800px;
        /* Adjusted for better 3D depth */
    }

    /* 3D Rotating Triangle - Smooth Transition */
    .triangle {
        width: 100%;
        height: 100%;
        position: absolute;
        transform-style: preserve-3d;
        transition: transform 1.2s ease-in-out;
        /* Slower and smoother transition */
    }

    /* Triangle Faces */
    .triangle-face {
        width: 100%;
        height: 100%;
        position: absolute;
        text-align: center;
        font-size: inherit;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: left;
        opacity: 1;
        backface-visibility: hidden;
        color: white;
    }

    /* Adjust Face Positioning */
    .triangle-face:nth-child(1) {
        transform: rotateX(0deg) translateZ(35px);
    }

    .triangle-face:nth-child(2) {
        transform: rotateX(120deg) translateZ(35px);
    }

    .triangle-face:nth-child(3) {
        transform: rotateX(240deg) translateZ(35px);
    }


    /* Triangle Rotation Animation */
    @keyframes rotateTriangle {

        0%,
        33% {
            transform: rotateX(0deg);
        }

        34%,
        66% {
            transform: rotateX(-120deg);
        }

        67%,
        99% {
            transform: rotateX(-240deg);
        }
    }



    /* Ensure both buttons match "View All" in size */
    .custom-button {
        display: inline-block;
        padding: 12px 40px;
        /* Match padding of View All */
        font-size: 1.4rem;
        font-weight: 600;
        background: #e93765;
        /* Same as View All button */
        color: white;
        border: 2px solid #e93765;
        border-radius: 25px;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
        text-transform: uppercase;
        min-width: 200px;
        /* Ensure consistent width */
        text-align: center;
    }

    /* Hover effect: Transparent background */
    /* Hover effect: White transparent background */
    .custom-button:hover {
        background: rgba(255, 255, 255, 1);
        /* White with 30% transparency */
        color: #ee3665;
        border: 1px solid #ee3665;
    }


    /* Ensure buttons have equal width */
    .custom-button+.custom-button {
        margin-left: 10px;
    }
    
    .custom-button-starter {
    display: inline-block;
    padding: 12px 40px;
    font-size: 1.4rem;
    font-weight: 600;
    background: #e93765;
    color: white;
    border: 2px solid #e93765;
    border-radius: 25px;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
    text-transform: uppercase;
    min-width: 200px;
    text-align: center;
}

/* Center the button without affecting section height */
.custom-button-starter-wrapper {
    position: absolute; /* Prevents affecting section height */
    left: 50%;
    transform: translateX(-50%);
    bottom: -30px; /* Adjust as needed */
}

/* Make sure the section has a relative position */
.section-with-button {
    position: relative; /* Ensures absolute positioning of button works */
    padding-bottom: 60px; /* Adjust this to avoid overlap */
}

/* Ensure anchor link does not take extra space */
.custom-button-starter-wrapper a {
    display: inline-block;
}

/* Hover effect */
.custom-button-starter:hover {
    background: rgba(255, 255, 255, 1);
    color: #e93765;
    border: 1px solid #e93765;
}

/* Make h1 in infograph section bolder */
.infograph-wrapper h1 {
    font-weight: 900; /* Use 700, 800, or 900 for extra boldness */
    font-size: 5.5rem; /* Adjust size if needed */
    text-transform: uppercase; /* Optional for a stronger effect */
    letter-spacing: 1px; /* Slight spacing for better readability */
}

    /* Stylish Pricing Tag */
    .price-tag {
        display: inline-block;
        background: linear-gradient(45deg, #e93765, #ff6a89);
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 1.5rem;
        font-weight: 700;
        color: white;
        text-transform: uppercase;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(233, 55, 101, 0.3);
        animation: pulseGlow 1.8s infinite alternate ease-in-out;
    }

    /* Subtle Glowing Animation */
    @keyframes pulseGlow {
        0% {
            transform: scale(1);
            box-shadow: 0px 4px 10px rgba(233, 55, 101, 0.3);
        }

        100% {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(233, 55, 101, 0.5);
        }
    }

    /* Default background color */
    .package-item {
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

/* Packages */
.package-item:hover {
    background-color: #ee3665 !important;
    color: white;
    transform: scale(1.05);
    box-shadow: 0px 5px 15px rgba(238, 54, 101, 0.3) !important;
}

.package-item:hover .package-info h1,
.package-item:hover .package-info li i {
    color: white !important;
}
.package-item:hover .package-info h1{
    font-weight: 1000 !important;
}


    /* Optional: Border effect on hover */
    .package-item:hover {
        box-shadow: 0px 5px 15px rgba(238, 54, 101, 0.3);
    }


    /* ========== HERO SECTION FIXES ========== */
    @media (max-width: 1024px) {
        .hero {
            height: auto;
            padding: 80px 0;
        }

        .hero-wrapper {
            flex-direction: column;
            text-align: center;
        }

        .hero-text h1 {
            font-size: clamp(26px, 5vw, 40px);
            flex-direction: column;
            height: auto;
        }

        .social-media-text {
            min-width: auto;
            text-align: center;
        }

        .rolling-box {
            max-width: 100%;
            width: auto;
            height: 45px;
            text-align: center;
            justify-content: center;
        }

        .hero-text p {
            font-size: 1rem;
            max-width: 90%;
            margin: 0 auto;
        }

        .hero-text .button2 {
            font-size: 1rem;
            padding: 10px 20px;
        }

        .wavy-arrow {
            width: 60px;
            height: 100px;
        }
    }

    /* ========== SERVICES SECTION FIXES ========== */
    @media (max-width: 1024px) {
        .services-wrapper {
            flex-direction: column;
            align-items: center;
        }

        .service-item {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
    }

    /* ========== AIM SECTION FIXES ========== */
    @media (max-width: 1024px) {
        .aim-wrapper {
            flex-direction: column;
            align-items: center;
        }

        .aim-item {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
    }

    /* ========== CLIENT LOGOS (SCROLLING) FIX ========== */
    @media (max-width: 1024px) {
        .clients-scroll-container {
            width: 80%;
            margin: 0 auto;
        }

        .clients-img {
            justify-content: center;
        }

        .clients-img img {
            width: 60px;
            height: auto;
        }
    }

    /* ========== TESTIMONIALS SECTION FIXES ========== */
    @media (max-width: 1024px) {
        .testimonial-wrapper {
            flex-direction: column;
        }

        .testimonial {
            text-align: center;
            padding: 15px;
        }

        .testimonial-name {
            justify-content: center;
        }
    }

    /* ========== FOOTER FIXES ========== */
    @media (max-width: 1024px) {
        footer {
            text-align: center;
        }

        .footer-links {
            flex-direction: column;
            align-items: center;
        }

        .footer-logo {
            text-align: center;
            margin-bottom: 20px;
        }
    }

    /* ========== BUTTON & TEXT FIXES ========== */
    @media (max-width: 768px) {
        h1 {
            font-size: clamp(22px, 5vw, 36px);
        }

        .rolling-box {
            max-width: 100%;
            height: 40px;
        }

        .button2 {
            font-size: 0.9rem;
            padding: 8px 16px;
        }

        .wavy-arrow {
            width: 50px;
            height: 90px;
        }

        .testimonial p {
            font-size: 0.9rem;
        }
    }

    /* ========== SMALL SCREEN FIXES ========== */
    @media (max-width: 480px) {
        .hero-text h1 {
            font-size: clamp(20px, 4vw, 32px);
        }

        .rolling-box {
            height: 35px;
        }

        .hero-text p {
            font-size: 0.9rem;
        }

        .clients-img img {
            width: 50px;
        }

        .button2 {
            font-size: 0.85rem;
        }

        .service-item,
        .aim-item {
            width: 100%;
            max-width: 350px;
        }

        .testimonial p {
            font-size: 0.8rem;
        }
    }


    /* Testimonials */
.testimonial:hover {
    box-shadow: 0 5px 15px rgba(238, 54, 101, 0.3) !important;
}

.steps {
    text-align: center;
    padding: 60px 0;
    background: #fff;
}

.steps-title {
    font-size: 4rem;
    font-weight: bold;
    color: #222;
    margin-bottom: 60px;
    text-transform: uppercase; /* Ensure it's in all caps */
}

.steps-wrapper {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 70px;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding-left: 50px;
}
.steps-wrapper::before {
    content: "";
    position: absolute;
    left: calc(50px / 2 - 2.5px); /* Centering the line relative to step numbers */
    top: 0;
    width: 5px; /* Line thickness */
    height: 0; /* Initially zero, expands */
    background: #e93765;
    z-index: 0;
    transition: height 1s ease-in-out;
}

.connecting-line {
    position: absolute;
    left: 80px; /* Adjust this to align the line exactly in the center */
    top: 25px; /* Start below the first step number */
    width: 5px; /* Thickness of the line */
    height: 0;
    background: #e93765;
    z-index: 0;
    transition: height 1s ease-in-out;
}


.step {
    display: flex;
    align-items: center;
    gap: 20px;
    position: relative;
    z-index: 1;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
}

.step-number {
    width: 50px;
    height: 50px;
    background: #e93765;
    color: white;
    font-size: 22px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    position: absolute;
    left: 7px;
    top: 50%;
    transform: translateY(-50%);
}

.step-content {
    font-size: 1.2rem;
    font-weight: bold;
    color: #222;
    text-align: left;
    max-width: 600px;
    margin-left: 80px;
}

.step-content h2 {
    font-size: 2.8rem;
    font-weight: bold;
    margin-bottom: 5px;
    font-weight: bold;
}

.step-content p {
    font-size: 1.4rem;
    color: #555;
}

    /* Hover Effect for Fiverr */
    .fiverr {
        position: relative;
        display: inline-block;
        color: #1dbf73; /* Fiverr green color */
        font-weight: bold;
        transition: opacity 0.3s ease-in-out;
        font-family: 'Montserrat font', sans-serif;
    }
    @media only screen and (max-width: 767px) {
  /* Stack the two columns into one so orders/reviews and clients are aligned */
  .infograph-wrapper .container-lg > div {
      flex-direction: column;
      gap: 20px;
      justify-content: flex-start;
      align-items: flex-start;
      padding-left: 15px;
      padding-right: 15px;
  }
  
  /* Remove auto centering from the clients-scroll-container */
  .clients-scroll-container {
      width: 100%;
      margin-left: 0;
  }
  
  /* Ensure the client numbers and text align consistently with orders/reviews */
  .clients-number {
      text-align: left;
      width: 100%;
      margin: 0;
  }
  
  .clients-number h1,
  .clients-number p {
      text-align: left;
  }
  
  /* Retain your other mobile fixes */
  .container,
  .container-fluid {
    padding-left: 15px;
    padding-right: 15px;
  }
  
  .social-media-container {
    flex-direction: row !important;
    white-space: nowrap;
    height: 70px; 
    font-size: clamp(28px, 5vw, 50px) !important;
  }
  
  .hero .custom-button {
    min-width: 0;
    width: 100%;
    padding: 0.8rem 1rem;
    font-size: 1rem;
  }
  
  .connecting-line {
    position: absolute;
    left: 80px;
    top: 60px;
    width: 5px;
    height: 0;
    background: #e93765;
    z-index: 0;
    transition: height 1s ease-in-out;
  }
  /* 1. Fix Orders container so it doesn't overflow */
  .orders {
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    padding: 2rem 1rem;  /* Reduced padding */
    overflow: hidden;
  }
  .order-types {
    overflow: hidden;
    box-sizing: border-box;
  }
  
  .testimonial-text p {
    font-size: 17px;
    color: #333;
    min-height: 200px;
    display: flex;
    align-items: flex-start; /* aligns content at the top */
    justify-content: center;
    text-align: justify;
    text-justify: inter-word;
    padding-top: 20px; /* optional: add some top padding */
}
  
  /* 3. Adjust the position and size of icons in AIM & Services */
  .aim-icon, .service-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;         /* Makes them perfectly round */
    margin-bottom: 15px;        /* Adjust spacing if needed */
  }
    /* 3. Adjust the position and size of icons in AIM & Services */
.service-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;         /* Makes them perfectly round */
    margin-bottom: -5px;        /* Adjust spacing if needed */
  }
  .aim-icon i, .service-icon i {
    font-size: 28px;            /* Slightly smaller or adjust as desired */
  }
  
  /* 4. Adjust the size and position of the paragraph in the hero section */
  .hero-text p {
    font-size: 1.6rem;          /* Adjust font-size for better legibility on mobile */
    max-width: 90%;             /* Reduce max width to avoid overflow */
    margin-top: 1rem;           /* Increase or adjust top margin as needed */
    padding: 0 1rem;            /* Add horizontal padding for spacing */
  }
  .about-text p {
    font-size: 1.8rem;
    text-align: justify;
    text-justify: inter-word;
}
}



</style>

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-content">
        <div class="logo-container">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Aynaur Logo" id="preloader-logo">
        </div>
    </div>
</div>


<div class="site-content">

    <div class="spacer"></div>

    <section class="hero">
        <!-- Background Video -->
        <video autoplay loop muted playsinline class="hero-video">
            <source src="{{ asset('assets/video/intro_background_video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay -->
        <div class="hero-overlay"></div>

        <!-- Hero Content -->
        <div class="container-fluid">
            <div class="hero-wrapper">
                <div class="hero-text">
                    <div class="social-media-container">
                        <h1 class="social-media-container" style="color: white;">
                            <span class="social-media-text">Social Media</span>
                            <!-- Rolling Triangle Effect -->
                            <div class="rolling-triangle">
                                <div class="triangle">
                                    <span class="triangle-face">Content</span>
                                    <span class="triangle-face">Design</span>
                                    <span class="triangle-face">Management</span>
                                </div>
                            </div>

                        </h1>
                    </div>



                    <img class="wavy-arrow"
                        src="https://designmonks.co/wp-content/plugins/designmonks-core/Includes/Widgets/images/down-arrow.svg"
                        alt="Down Arrow" style="margin: auto; width: 80px; height: 140px; filter: invert(1);">
                        <div class="price-tag">Starts at $100</div>


                    <p style="color: white;">We specialize in creating visually appealing and memorable Instagram
                        content that helps you stand out and drive more leads.</p>
                    <div class="spacer"></div>
                    <div style="display: flex; gap: 15px; justify-content: center;">
                        <a href="https://www.fiverr.com/this_is_anika/be-your-social-media-content-creator-and-instagram-manager"
                            target="_blank">
                            <button class="custom-button">GET STARTED</button>
                        </a>

                        <a href="#portfolio">
                            <button class="custom-button">SHOW PORTFOLIO</button>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <!-- <section class="intro-video">
    <div class="container-lg">
        <div class="intro-wrapper">
            <h1>We specialize in creating visually appealing and memorable Instagram content that helps you stand out and drive more leads</h1>
            <div class="spacer"></div>
            <div class="video-wrapper">
                <video src="{{ asset('assets/video/intro.mp4') }}" autoplay loop controls muted></video>
            </div>
        </div>
    </div>
</section> -->

    <div class="spacer-xl"></div>

    <section class="infograph">
        <div class="container-fluid">
            <div class="infograph-wrapper">
                <div class="container-lg">
                    <div>
                        <div class="orders">
                            <div class="order-number">
                                <h1>200+</h1>
                                <p>Orders Completed</p>
                            </div>
                            <div class="order-types">
                                <div class="sliding-badges">
                                    <div class="order-badge">Custom Templates</div>
                                    <div class="order-badge">Social Management</div>
                                    <div class="order-badge">Content Creation</div>
                                    <div class="order-badge">Brand Identity</div>
                                    <div class="order-badge">Audience Engagement</div>
                                    <div class="order-badge">Visual Design</div>
                                    <div class="order-badge">Platform Strategy</div>
                                    <div class="order-badge">Analytics</div>
                                    <div class="order-badge">Organic Growth</div>
                                    <div class="order-badge">Multi-Platform</div>

                                    <!-- Duplicate the badges for the endless loop effect -->
                                    <div class="order-badge">Custom Templates</div>
                                    <div class="order-badge">Social Management</div>
                                    <div class="order-badge">Content Creation</div>
                                    <div class="order-badge">Brand Identity</div>
                                    <div class="order-badge">Audience Engagement</div>
                                    <div class="order-badge">Visual Design</div>
                                    <div class="order-badge">Platform Strategy</div>
                                    <div class="order-badge">Analytics</div>
                                    <div class="order-badge">Organic Growth</div>
                                    <div class="order-badge">Multi-Platform</div>
                                </div>
                            </div>

                        </div>
                        <div class="reviews" onclick="location.href='#testimonial';" style="cursor: pointer;">
                            <div class="reviews-top">
                                <img src="{{asset('assets/img/fiver.svg')}}" alt="fiver">
                                <img src="{{asset('assets/img/stars.svg')}}" alt="stars">
                            </div>
                            <div class="review-number">
                                <h1>100+</h1>
                                <p>Reviews</p>
                            </div>
                            <div class="review-img">
                                <img src="{{asset('assets/img/review-1.jpg')}}" alt="client">
                                <img style="margin-left: -10px;" src="{{asset('assets/img/review-2.jpg')}}"
                                    alt="client">
                                <img style="margin-left: -10px;" src="{{asset('assets/img/review-3.jpg')}}"
                                    alt="client">
                                <img style="margin-left: -10px;" src="{{asset('assets/img/review-4.jpg')}}"
                                    alt="client">
                                <img style="margin-left: -10px;" src="{{asset('assets/img/review-5.jpg')}}"
                                    alt="client">
                                <img style="margin-left: -10px;" src="{{asset('assets/img/review-6.jpg')}}"
                                    alt="client">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="clients">
                            <div class="clients-number">
                                <h1>160+</h1>
                                <p>Customers</p>
                            </div>
                            <!-- New wrapper for scrolling -->
                            <div class="clients-scroll-container">
                                <div class="clients-img">
                                    <img id="client-1" src="{{ asset('assets/img/client-1.svg') }}" alt="client">
                                    <img id="client-2" src="{{ asset('assets/img/client-2.svg') }}" alt="client">
                                    <img id="client-3" src="{{ asset('assets/img/client-3.svg') }}" alt="client">
                                    <img id="client-4" src="{{ asset('assets/img/client-4.svg') }}" alt="client">
                                    <img id="client-5" src="{{ asset('assets/img/client-5.svg') }}" alt="client">
                                    <img id="client-6" src="{{ asset('assets/img/client-1.svg') }}" alt="client">
                                    <img id="client-7" src="{{ asset('assets/img/client-2.svg') }}" alt="client">
                                    <img id="client-8" src="{{ asset('assets/img/client-3.svg') }}" alt="client">
                                    <img id="client-9" src="{{ asset('assets/img/client-4.svg') }}" alt="client">
                                    <img id="client-10" src="{{ asset('assets/img/client-5.svg') }}" alt="client">
                                    <img id="client-11" src="{{ asset('assets/img/client-5.svg') }}" alt="client">
                                    <img id="client-12" src="{{ asset('assets/img/client-5.svg') }}" alt="client">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="projects container-fluid" id="portfolio">
        <div class="projects-wrapper">
            <div class="container-lg">
                <h1>Social media content we created</h1>
                <div class="spacer"></div>
                <!-- Scrollable Project List -->
                <div class="scroll-container">
                    <div class="project-list">
                        <div class="project-item category-health" data-modal-target="#exampleModal-1">
                            <img src="{{asset('assets/img/1.png')}}" alt="project">
                            <div class="project-icons">
                                <div>
                                    <i class="fa-solid fa-heart"></i>
                                    <i class="fa-regular fa-comment"></i>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>


                        <!-- #2 -->
                        <div class="project-item category-beauty" data-modal-target="#exampleModal-2">
                            <img src="{{asset('assets/img/2.png')}}" alt="project">
                            <div class="project-icons">
                                <div>
                                    <i class="fa-solid fa-heart"></i>
                                    <i class="fa-regular fa-comment"></i>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>

                        <!-- #3 -->
                        <div class="project-item category-medical" data-modal-target="#exampleModal-3">
                            <img src="{{asset('assets/img/3.png')}}" alt="project">
                            <div class="project-icons">
                                <div>
                                    <i class="fa-solid fa-heart"></i>
                                    <i class="fa-regular fa-comment"></i>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>

                        <!-- #4 -->
                        <div class="project-item category-beauty" data-modal-target="#exampleModal-4">
                            <img src="{{asset('assets/img/4.png')}}" alt="project">
                            <div class="project-icons">
                                <div>
                                    <i class="fa-solid fa-heart"></i>
                                    <i class="fa-regular fa-comment"></i>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>

                        <!-- #5 -->
                        <div class="project-item category-pets" data-modal-target="#exampleModal-5">
                            <img src="{{asset('assets/img/5.png')}}" alt="project">
                            <div class="project-icons">
                                <div>
                                    <i class="fa-solid fa-heart"></i>
                                    <i class="fa-regular fa-comment"></i>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>

                        <!-- #6 -->
                        <div class="project-item category-kids" data-modal-target="#exampleModal-6">
                            <img src="{{asset('assets/img/6.png')}}" alt="project">
                            <div class="project-icons">
                                <div>
                                    <i class="fa-solid fa-heart"></i>
                                    <i class="fa-regular fa-comment"></i>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>
                    </div> <!-- End project-list -->
                </div>
                <!-- VIEW ALL BUTTON -->
                <a href="<?php echo config('app.url'); ?>projects">
                    <button class="custom-button">
                        View All <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="aim">
    <div class="container-lg">
        <h1 class="aim-title">Our service is ideal for you if you aim to</h1>
        <div class="aim-wrapper">
            <div class="aim-item">
                <div class="aim-icon"><i class="fa-solid fa-comments"></i></div>
                <h1>Unique & Engaging Content</h1>
                <p>Capture your audience with unique and eye-catching content.</p>
            </div>

            <div class="aim-item">
                <div class="aim-icon"><i class="fa-solid fa-chart-bar"></i></div>
                <h1>Strong Brand Identity</h1>
                <p>Stand out from the competition with a well-defined brand presence.</p>
            </div>

            <div class="aim-item">
                <div class="aim-icon"><i class="fa-solid fa-microphone"></i></div>
                <h1>Broadcast Your Message</h1>
                <p>Communicate your vision effectively through social media.</p>
            </div>

            <div class="aim-item">
                <div class="aim-icon"><i class="fa-solid fa-handshake"></i></div>
                <h1>Boost Audience Engagement</h1>
                <p>Increase organic reach and engagement with strategic content.</p>
            </div>

            <div class="aim-item">
                <div class="aim-icon"><i class="fa-solid fa-palette"></i></div>
                <h1>Tailored Ad Campaigns</h1>
                <p>Customize ads to target the right audience efficiently.</p>
            </div>

            <div class="aim-item">
                <div class="aim-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                <h1>Transparent Communication</h1>
                <p>Stay connected with clear and effective messaging.</p>
            </div>
        </div>
    </div>
</section>

<section class="services-included container-lg">
    <h1 class="section-title">Our Service Includes</h1>
    <div class="services-wrapper">
        <div class="service-item">
            <div class="service-icon"><i class="fa-solid fa-paint-brush"></i></div>
            <h1>Custom Social Media Designs</h1>
            <p>Visually appealing and brand-focused designs.</p>
        </div>

        <div class="service-item">
            <div class="service-icon"><i class="fa-solid fa-pen-nib"></i></div>
            <h1>Engaging Captions</h1>
            <p>Creative captions that encourage interaction.</p>
        </div>

        <div class="service-item">
            <div class="service-icon"><i class="fa-solid fa-hashtag"></i></div>
            <h1>SEO-Friendly Hashtags</h1>
            <p>Boost visibility with high-ranking hashtags.</p>
        </div>

        <div class="service-item">
            <div class="service-icon"><i class="fa-solid fa-calendar-check"></i></div>
            <h1>Scheduled Posting</h1>
            <p>Maintain consistency with automated posting.</p>
        </div>

        <div class="service-item">
            <div class="service-icon"><i class="fa-solid fa-cogs"></i></div>
            <h1>Profile Optimization</h1>
            <p>Optimize your profile for maximum engagement.</p>
        </div>

        <div class="service-item">
            <div class="service-icon"><i class="fa-solid fa-life-ring"></i></div>
            <h1>Weekly Strategy Meetings</h1>
            <p>Continuous improvements based on data insights.</p>
        </div>
    </div>
</section>





<section class="steps" id="growth-section">
    <div class="container-lg">
        <h1 class="steps-title">Our 3 Simple Steps Process</h1>
        <div class="steps-wrapper">
        <div class="connecting-line"></div>
            <div class="step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h2>Select a Plan</h2>
                    <p>Select a plan tailored to your specific post requirements. Options include pre-written posts with captions or our complete posting service.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h2>Place an Order</h2>
                    <p>Place a Fiverr order to access progress updates and delivered content. All communication happens on the Fiverr platform.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h2>Receive & Approve Content</h2>
                    <p>Review the content and request changes if needed. Once approved, we'll start posting as scheduled.</p>
                </div>
            </div>
        </div>
    </div>
</section>




    <section class="packages" id="pricing">
        <div class="container-fluid">
            <div class="packages-wrapper">
                <div class="container-lg">
                    <h1 class="package-header">Our Packages</h1>
                    <div class="package-list">
                        <div class="package-item">
                            <div class="package-info">
                                <div class="package-item-title">
                                    <h1>STARTER PACK</h1>
                                </div>

                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i> 12 Posts (10 Static, 2 Reels)/Month
                                    </li>
                                    <li><i class="fa-solid fa-circle-check"></i> Captions with CTAs</li>
                                    <li><i class="fa-solid fa-circle-check"></i> 30 Best Hashtags</li>
                                    <li><i class="fa-solid fa-circle-check"></i> Scheduling</li>
                                </ul>
                            </div>

                        </div>
                        <div class="package-item">
    <div class="package-info">
        <div class="package-item-title">
            <h1>GROWTH PACK</h1>
        </div>

        <ul>
            <li><i class="fa-solid fa-circle-check"></i> 20 Posts (16 Static, 4 Reels)/Month</li>
            <li><i class="fa-solid fa-circle-check"></i> Captions with CTAs</li> <!-- FIXED TYPO -->
            <li><i class="fa-solid fa-circle-check"></i> 60 Best Hashtags</li>
            <li><i class="fa-solid fa-circle-check"></i> Scheduling</li>
        </ul>
    </div>
</div>

                        <div class="package-item">
                            <div class="package-info">
                                <div class="package-item-title">
                                    <h1>PRO PACK</h1>
                                </div>

                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i> 40 Posts (32 Static, 8 Reels)/Month
                                    </li>
                                    <li><i class="fa-solid fa-circle-check"></i> Captions with CTAs</li>
                                    <li><i class="fa-solid fa-circle-check"></i> 90 Best Hashtags</li>
                                    <li><i class="fa-solid fa-circle-check"></i> Scheduling</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <section class="section-with-button">
    <a href="https://www.fiverr.com/this_is_anika/"
        target="_blank" class="custom-button-starter-wrapper">
        <div class="custom-button-starter">GET STARTED</div>
    </a>
</section>

                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="container-lg about-wrapper">
            <div class="about-img">
                <img src="{{asset('assets/img/about.png')}}" alt="about">
            </div>
            <div class="about-text">
                <h1>About Us</h1>
                <p>Hey there! We're AyNaur, your partners in crafting stunning visual identities.</p>
                <p>Since day one, we've been passionate about helping small and medium-sized businesses make a big
                    impact online. Our team of talented designers is dedicated to turning your brand vision into
                    reality.</p>
                <p>With a focus on creating modern, eye-catching designs, we've helped countless businesses elevate
                    their online presence. Whether you need a logo, website graphics, or social media assets, we've got
                    you covered.</p>
                <p>We believe that great design shouldn't break the bank. That's why we offer flexible pricing packages
                    to suit your needs and budget.</p>
                <br><br>
                <div>
                    <p><b>Ready to take your brand to the next level?</b></p> <br>
                    <a href="https://www.fiverr.com/this_is_anika" target="_blank">
                        <button class="custom-button-starter">
                            Let's chat!
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>




    <section id="testimonial">
        <div class="container-lg testimonial-wrapper">
        <div class="testimonial-head">
    <h1>
        What Our 
        <span class="fiverr">Fiverr</span> 
        Clients Say
    </h1>
</div>


            <!-- Outer Wrapper for the Testimonial Slider -->
            <div class="testimonial-slider-wrapper">

                <!-- Add a container with the "swiper" class -->
                <div class="testimonial-swiper swiper">
                    <!-- The wrapper that holds all the slides -->
                    <div class="swiper-wrapper">

                        <!-- Slide #1 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">Lifenow_nicola</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        It was a pleasure working with the team on my branding refresh. I shared lots of
                                        information about what I needed, and we had some communication back and forth to
                                        ensure that my requirements were properly understood. They shared an initial set
                                        of templates to check for alignment, on which I gave some feedback. They then
                                        asked for a video call to talk through everything, which was a massive help and
                                        made sure we understood everything I wanted correctly. The finished order was of
                                        a high standard and very much appreciated.
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>

                        <!-- Slide #2 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">nafizimtiaz2578</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        AyNaur's social media management impressed me just like the Fiverr review
                                        describes - high-quality, creative images that perfectly captured my brand
                                        identity at a great price. Their attention to detail is fantastic, and I'm
                                        confident this is the start of a long-term partnership to elevate my social
                                        media presence.
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>

                        <!-- Slide #3 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">Missmth</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        I am beyond impressed and happy with the work delivered by the team. Brand
                                        alignment, color palettes, open communication, very quick turnaround, open to
                                        new suggestions - could not have asked for more. I was not stressed at all
                                        during the process and trusted my social media templates would be delivered with
                                        exceptional quality.
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>

                        <!-- Slide #4 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">jjcasa</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        Extremely professional, the best on Fiverr! If you need a social media manager
                                        and content creator, this is the best team! Wow, I am very impressed by the
                                        quality of work. I will continue to hire them for my social channels and social
                                        media management. I highly recommend it!
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>
                        <!-- Slide #5 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">jjcasa</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        The best investment I have made for my business. This team is professional and
                                        does an amazing job with my social media. We have been working together for
                                        several months and I am thrilled with their work. Thank Thank you so much!
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>
                        <!-- Slide #6 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">sartmon</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        Ay.naur did an AMAZING job on our social media design. The visual appeal and
                                        brand alignment were spot on, truly exceeding our expectations! Additionally,
                                        working with them was very pleasant – cooperative, timely, and always going
                                        above and beyond. 👏
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>
                        <!-- Slide #7 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">lucasgrants</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        Very professional and attentive freelancer, with grreat detail for design. I
                                        highly recommended to everyone.
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>
                        <!-- Slide #8 -->
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-info">
                                    <h1 class="testimonial-name">dakotahosley396</h1>
                                    <div class="testimonial-stars">★★★★★ (5.0)</div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        She crushed it. Made 30 social media templates for us in only a few days. Will
                                        definitely come back to her.
                                    </p>
                                </div>
                                <div class="testimonial-name">

                                </div>
                            </div>
                        </div>

                    </div> <!-- End swiper-wrapper -->
                </div> <!-- End testimonial-swiper -->

                <!-- Navigation buttons -->
                <div class="projects-nav">
                    <div class="testimonial-swiper-button-prev"><i class="bi bi-arrow-left-short"></i></div>
                    <div class="testimonial-swiper-button-next"><i class="bi bi-arrow-right-short"></i></div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container-lg">
            <div class="card cta-card text-center">
                <div class="card-body">
                    <h2 class="card-title">Let's Work Together</h2>
                    <p class="card-text">
                        We're here to help you elevate your brand and achieve your goals. Reach out to us and let's
                        start the conversation!
                    </p>
                    <br><br>
                    <a href="mailto:hello@aynaur.com" class="custom-button-starter">Drop us an email</a>
                </div>
            </div>
        </div>
    </section>
</div>




<!-- <script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        spaceBetween: 20,
        direction: "horizontal",

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,

            },
            768: {
                slidesPerView: 2.5,

            },
            1024: {
                slidesPerView: 2,

            },
        },
    });
</script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all buttons and project items
        const allButton = document.getElementById('btn-all');
        const categoryButtons = document.querySelectorAll('.projects-btn button:not(#btn-all)');
        const projectItems = document.querySelectorAll('.project-item');

        // Function to show all projects
        function showAllProjects() {
            projectItems.forEach(item => item.style.display = 'block');
        }

        // Function to filter projects by category
        function filterProjects(category) {
            projectItems.forEach(item => {
                if (item.classList.contains(`category-${category}`) || category === 'all') {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Event listeners for buttons
        allButton.addEventListener('click', () => {
            showAllProjects();
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            allButton.classList.add('active');
        });

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.id.replace('btn-', '').replace('-', '_');
                filterProjects(category);
                allButton.classList.remove('active');
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            });
        });

        // Set default active button
        allButton.classList.add('active');
    });


    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Swiper for the testimonial slider
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            // Enable continuous loop
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.testimonial-swiper-button-next',
                prevEl: '.testimonial-swiper-button-prev',
            },

            // Autoplay configuration
            autoplay: {
                delay: 3000, // 3 seconds per slide
                disableOnInteraction: false,
            },

            // Pause on hover
            on: {
                init() {
                    // If user hovers over the swiper container, pause autoplay
                    this.el.addEventListener('mouseenter', () => {
                        this.autoplay.stop();
                    });
                    // Resume autoplay when mouse leaves
                    this.el.addEventListener('mouseleave', () => {
                        this.autoplay.start();
                    });
                },
            },

            // How many slides to show at once
            slidesPerView: 1,
            spaceBetween: 20,

            // Responsive breakpoints (optional)
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 2,
                },
            },
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const projectList = document.querySelector(".project-list");

        // Duplicate items for seamless looping
        projectList.innerHTML += projectList.innerHTML;

        let scrollSpeed = 1.5; // Adjust speed (lower = slower)
        let scrollPosition = 0;

        function autoScroll() {
            scrollPosition += scrollSpeed;
            projectList.style.transform = `translateX(-${scrollPosition}px)`;

            // When first half is out of view, reset position seamlessly
            if (scrollPosition >= projectList.scrollWidth / 2) {
                scrollPosition = 0;
                projectList.style.transform = `translateX(0px)`;
            }

            requestAnimationFrame(autoScroll);
        }

        autoScroll(); // Start scrolling animation
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Function to animate the counting effect
        function animateCounter(element, target, duration) {
            let start = 0;
            let stepTime = Math.abs(Math.floor(duration / target));
            let counter = setInterval(() => {
                start++;
                element.textContent = start + "+";
                if (start >= target) {
                    clearInterval(counter);
                }
            }, stepTime);
        }

        // Get the number elements
        const orderNumber = document.querySelector(".order-number h1");
        const reviewNumber = document.querySelector(".review-number h1");
        const clientNumber = document.querySelector(".clients-number h1");

        // Flag to ensure the counters animate only once per scroll-into-view
        let isVisible = false;

        // Create an IntersectionObserver to watch the .infograph section
        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // When the section becomes visible and wasn't visible before
                if (entry.isIntersecting && !isVisible) {
                    // Reset the counters before starting the animation
                    orderNumber.textContent = "0+";
                    reviewNumber.textContent = "0+";
                    clientNumber.textContent = "0+";

                    // Animate the numbers
                    animateCounter(orderNumber, 200, 1000); // Count to 200 in 1 second
                    animateCounter(reviewNumber, 100, 600); // Count to 100 in 0.6 seconds
                    animateCounter(clientNumber, 160, 700); // Count to 160 in 0.7 seconds

                    // Set flag to prevent re-animation while in view
                    isVisible = true;
                } else if (!entry.isIntersecting) {
                    // Reset the flag when the section leaves view so it can animate again
                    isVisible = false;
                }
            });
        }, {
            threshold: 0.5
        });

        // Start observing the section that contains the counters
        observer.observe(document.querySelector(".infograph"));
    });


    document.addEventListener("DOMContentLoaded", function () {
        const heroImages = document.querySelectorAll(".hero-img img");

        function startAnimation(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heroText.classList.add("animate");
                    heroImages.forEach(img => img.classList.add("animate"));
                    observer.unobserve(entry.target);
                }
            });
        }

        let observer = new IntersectionObserver(startAnimation, {
            threshold: 0.5
        });
        observer.observe(heroText);
    });

    document.addEventListener("DOMContentLoaded", function () {
        const heroText = document.querySelector(".hero-text");

        function checkVisibility(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heroText.classList.add("animate");
                } else {
                    heroText.classList.remove("animate"); // Reset so it plays again
                }
            });
        }

        let observer = new IntersectionObserver(checkVisibility, {
            threshold: 0.5
        });
        observer.observe(heroText);
    });

    document.addEventListener("DOMContentLoaded", function () {
        const heroImages = document.querySelectorAll(".hero-img img");
        const heroText = document.querySelector(".hero-text");

        // Parallax Effect on Mouse Move
        document.addEventListener("mousemove", (event) => {
            let x = (event.clientX / window.innerWidth) * 20 - 10;
            let y = (event.clientY / window.innerHeight) * 20 - 10;

            heroImages.forEach(img => {
                img.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
            });
        });

        // Start Text Animation on Scroll
        function checkVisibility(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heroText.classList.add("animate");
                }
            });
        }

        let observer = new IntersectionObserver(checkVisibility, {
            threshold: 0.5
        });
        observer.observe(heroText);
    });

    document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.getElementById("preloader");
    const preloaderLogo = document.getElementById("preloader-logo");
    const siteContent = document.querySelector(".site-content");

    // Faster preloader transition: Start transition after 300ms (was 500ms)
    setTimeout(() => {
        preloaderLogo.classList.add("logo-moving");
        preloader.classList.add("fade-out");
        siteContent.classList.add("visible");
    }, 300); // Was 500ms, now 300ms

    // Remove the preloader completely after 1.2s (was 2.5s)
    setTimeout(() => {
        preloader.style.display = "none";
    }, 1200); 
});




document.addEventListener("DOMContentLoaded", function () {
    const aimItems = document.querySelectorAll(".aim-item");

    const aimObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate");
                observer.unobserve(entry.target); // Stop observing after animation
            }
        });
    }, {
        threshold: 0.3,  // Trigger animation when 30% of element is visible
        rootMargin: "0px 0px -10% 0px"
    });

    aimItems.forEach(item => aimObserver.observe(item));
});



    document.addEventListener("DOMContentLoaded", function () {
        // Service Items Observer
        const serviceItems = document.querySelectorAll(".service-item");
        const serviceObserver = new IntersectionObserver((entries) => {

            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate");
                }
            });
        }, {
            threshold: 0.3,
            rootMargin: "0px 0px -10% 0px"
        });
        serviceItems.forEach(item => serviceObserver.observe(item));
    });

    document.addEventListener("DOMContentLoaded", function () {
        const clientsImg = document.querySelector(".clients-img");

        // Duplicate client logos for seamless looping
        clientsImg.innerHTML += clientsImg.innerHTML;

        let scrollSpeed = getScrollSpeed(); // Get initial speed
        let scrollPosition = 0;

        function getScrollSpeed() {
            if (window.innerWidth > 1200) return 1.5;
            if (window.innerWidth > 1024) return 1.2;
            if (window.innerWidth > 768) return 1.0;
            return 0.8; // Slower on smaller screens
        }

        function autoScrollClients() {
            scrollPosition += scrollSpeed;
            clientsImg.style.transform = `translateX(-${scrollPosition}px)`;

            // Reset position when the first batch scrolls out of view
            if (scrollPosition >= clientsImg.scrollWidth / 2) {
                scrollPosition = 0;
                clientsImg.style.transform = `translateX(0px)`;
            }

            requestAnimationFrame(autoScrollClients);
        }

        autoScrollClients(); // Start scrolling animation

        // Update scroll speed dynamically when window resizes
        window.addEventListener("resize", function () {
            scrollSpeed = getScrollSpeed();
        });
    });




    document.addEventListener("DOMContentLoaded", function () {
        const triangle = document.querySelector(".triangle");
        let rotation = 0;

        function rotateTriangle() {
            rotation -= 120; // Rotate by 120 degrees smoothly
            triangle.style.transform = `rotateX(${rotation}deg)`;
        }

        setInterval(rotateTriangle, 1800); // Slower cycle time for smoother effect
    });

    document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".step");
    const line = document.querySelector(".steps-wrapper::before");
    let index = 0;

    function showStep() {
        if (index < steps.length) {
            steps[index].style.opacity = "1";
            steps[index].style.transform = "translateY(0)";
            document.querySelector(".steps-wrapper").style.setProperty('--line-height', `${(index + 1) * 100}px`);
            index++;
            setTimeout(showStep, 1000);
        } else {
            setTimeout(() => {
                steps.forEach(step => {
                    step.style.opacity = "0";
                    step.style.transform = "translateY(20px)";
                });
                document.querySelector(".steps-wrapper").style.setProperty('--line-height', '0');
                index = 0;
                setTimeout(showStep, 1000);
            }, 3000);
        }
    }

    showStep();
});
document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".step");
    const connectingLine = document.querySelector(".connecting-line");
    let currentStep = 0;
    let isAnimating = false;

    function calculateLineHeight() {
        if (currentStep === 0) return 0;

        const firstStep = steps[0].querySelector(".step-number");
        const currentStepElement = steps[currentStep].querySelector(".step-number");

        const firstStepCenter = firstStep.getBoundingClientRect().top + firstStep.offsetHeight / 2;
        const currentStepCenter = currentStepElement.getBoundingClientRect().top + currentStepElement.offsetHeight / 2;

        return currentStepCenter - firstStepCenter;
    }

    function animateSteps() {
        if (isAnimating || currentStep >= steps.length) return;

        isAnimating = true;

        // Show the current step
        steps[currentStep].classList.add("visible");

        // Animate line height
        const targetHeight = calculateLineHeight();
        connectingLine.style.height = `${targetHeight}px`;

        setTimeout(() => {
            isAnimating = false;
            currentStep++;

            if (currentStep >= steps.length) {
                // Reset animation after completion
                setTimeout(() => {
                    steps.forEach(step => step.classList.remove("visible"));
                    connectingLine.style.height = "0";
                    currentStep = 0;
                    setTimeout(animateSteps, 1000);
                }, 3000);
            } else {
                animateSteps();
            }
        }, 1000);
    }

    // Start the animation
    animateSteps();

    // Handle window resize
    window.addEventListener("resize", () => {
        if (currentStep > 0) {
            connectingLine.style.height = `${calculateLineHeight()}px`;
        }
    });
});

</script>


@endsection
