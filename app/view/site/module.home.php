    <!-- Slider -->
    <script>
        document.addEventListener('scroll', function () {
            var overlay = document.querySelector('.overlay-imagem');
            var scrolled = window.scrollY > 0;
            if (scrolled) {
                overlay.classList.add('scrolled');
            } else {
                overlay.classList.remove('scrolled');
            }
        });
    </script>
    
    <div class="overlay-imagem">
        <img src="/trabalho2/img/Sem-Titulo-3.png"
            alt="imagem cobra esquerda">
    </div>
    <div class="slider">
        <div>
            <img src="/trabalho2/img/img2.png"
                alt="Imagem 1">
        </div>
        <div>
            <img src="/trabalho2/img/img1.png"
                alt="Imagem 2">
        </div>
        <div>
            <img src="/trabalho2/img/img2.png"
                alt="Imagem 3">
        </div>
        <div>
            <img src="/trabalho2/img/img1.png"
                alt="Imagem 4">
        </div>
    </div>

    <!-- Produtos -->
<div class="products-background">
    <div class="products-container">
        <?=$view['produtos']?>
    </div>
</div>

<div class="pos-header">
        <div class="line"></div>
</div>

<div class="backgroundvid">
    <div class="video-container">
        <div class="video-link">
            <video id="myVideo" src="https://nikevideo.nike.com/media/v1/pmp4/static/clear/72451143001/8807265b-b680-4f45-b0d7-5921d8cb9291/7dcbb3f9-deee-4436-bc85-328ba5d3e1ae/main.mp4" loop autoplay muted></video>
        </div>
    </div>
</div>

    <!-- Script slider -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: true,
                dots: true,
                infinite: true,
                speed: 1000,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><</button>',
                nextArrow: '<button type="button" class="slick-next">></button>',
                appendDots: '.slider',
                dotsClass: 'slick-dots'
            });

            $('.slick-dots input[type="checkbox"]').on('change', function () {
                $('.slick-dots input[type="checkbox"]').not(this).prop('checked', false);
            });
        });
    </script>