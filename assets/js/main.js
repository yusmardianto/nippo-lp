$(function() {
    $('.carousel__slide').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    })

    $('.header__lang > li').click(function() {
        window.location.href=$(this).find('a').attr('href');
    })
})