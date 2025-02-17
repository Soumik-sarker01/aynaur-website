<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Discover AyNaur, your go-to team for high-quality social media design, content creation, and management. With expertise in creating engaging Canva templates, captivating Instagram posts, and tailored marketing strategies, we transform your ideas into reality. Our services are customized to meet your needs, ensuring satisfaction with fast delivery and unlimited revisions. Elevate your online presence with AyNaur—where passion meets excellence. Contact us today!" />

    <!-- Open Graph Protocol -->
    <meta property="og:image" content="{{asset('assets/img/open-graph-icon.png')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z17YT90E8M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z17YT90E8M');
</script>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/apple-touch-icon.png')}}" />

    <!-- bootstrap 5.3.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- fontaswesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- swiperjs -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- style sheet -->
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}" />


    <title>
        Aynaur | Multidisciplinary design studio
    </title>
</head>

<body>

    @include('layouts.inc.header')

    @yield('main-container')

    @include('layouts.inc.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <script>
        const testimonials = new Swiper(".testimonial-swiper", {
            loop: true,
            spaceBetween: 20,

            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },

            freeMode: true,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                },
            },

            // Navigation arrows
            navigation: {
                nextEl: ".testimonial-swiper-button-next",
                prevEl: ".testimonial-swiper-button-prev",
            },

        });
    </script>

</body>

</html>