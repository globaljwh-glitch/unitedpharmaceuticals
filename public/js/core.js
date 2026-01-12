
/*------------------------- Banner Slider -------------------------*/
$(document).ready(function(){
$('.mainBannerBlockSlider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 500,
  autoplay: true,
  pauseOnHover:false,
  nextArrow: '<i class="slick-next" aria-hidden="true"></i>',
  prevArrow: '<i class="slick-prev" aria-hidden="true"></i>'
  });
  $(".prev-btn").click(function () {
     $(".mainBannerBlockSlider").slick("slickPrev");
  });

  $(".next-btn").click(function () {
     $(".mainBannerBlockSlider").slick("slickNext");
  });
  $(".prev-btn").addClass("slick-disabled");
  
});

/*------------------------- Suppliers Block Slider -------------------------*/
$(document).ready(function(){

$('.ourPatnersBlockSliderContent').slick({
  infinite: true,
  dots: true,
  slidesToShow: 5,
  autoplay: true,
  cssEase: 'linear',
  speed:300,
  appendArrows: $('.ourSuppliersBlockSliderPagination'),
      prevArrow: '<div class="smallBannerSliderLeftArrow "></div>',
      nextArrow: '<div class="smallBannerSliderRightArrow "></div>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});


/*------------------------- Categories Block Slider -------------------------*/

$(document).ready(function(){
$('.ourCategoriesBlockSlider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});
  
});

/*--------------------------------- Responsive Menu -------------------------*/

/*$( document ).ready(function() {

  if ($(window).width() < 991){
    $(".nav-link").addClass("closed");
    $(".nav-link").click(function () {
      if ($(this).hasClass('closed')){
        //true: myID has class active
        $(".nav-link").removeClass("opened");
        $("ul.subMenu").css("display", "none");
        $(this).parent().find("ul.subMenu").css("display", "block");
        $(this).addClass("opened");
        $(".nav-link").addClass("closed");
        $(this).removeClass("closed");
      } 
      else {
        $(this).removeClass("opened");
        $(this).addClass("closed");
        $(this).parent().find("ul.subMenu").css("display", "none");

      }
     
    });
  }

});



/*--------------------------------- Nav Dropdown -------------------------*/

/*$(document).ready(function() {
    // Cache commonly used elements
    const $dropdownMenus = $('.subMenu');
    const $icons = $('.dropdown .icon');

    // Toggle dropdowns at all levels only when the icon is clicked
    $(document).on('click', '.icon', function(e) {
        e.preventDefault();
        e.stopPropagation();

        const $icon = $(this);
        const $dropdown = $icon.closest('.dropdown');
        const $dropdownMenu = $dropdown.children('.subMenu');

        // Toggle the current dropdown
        if ($dropdown.hasClass('active')) {
            // Close current dropdown and all child dropdowns
            $dropdown.find('.dropdown').removeClass('active').find('.icon').text('+');
            $dropdown.find('.subMenu').stop(true, true).slideUp();
            $dropdown.removeClass('active');
            $icon.text('+');
        } else {
            // Close sibling dropdowns at the same level
            $dropdown.siblings('.dropdown').removeClass('active').find('.icon').text('+');
            $dropdown.siblings('.dropdown').children('.subMenu').stop(true, true).slideUp();

            // Open the current dropdown
            $dropdown.addClass('active');
            $icon.text('-');
            $dropdownMenu.stop(true, true).slideDown();
        }
    });

    // Close all dropdowns on item click
    $('.subMenu li a').on('click', function() {
        $dropdownMenus.stop(true, true).slideUp();
        $icons.text('+');
        $('.dropdown').removeClass('active');
    });

    // Close dropdowns when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $dropdownMenus.stop(true, true).slideUp();
            $icons.text('+');
            $('.dropdown').removeClass('active');
        }
    });
});


/*--------------------------------- Counter -------------------------*/
$(document).ready(function () {
    
    // Toggle icon click (works for all levels)
    $(document).on('click', '.icon', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const $li = $(this).closest('li.dropdown');
        const $submenu = $li.children('.subMenu');
        const $siblings = $li.parent().children('li.dropdown').not($li);

        if ($li.hasClass('active')) {
            // Close this dropdown only
            $li.removeClass('active').find('> .icon').text('+');
            $submenu.stop(true, true).slideUp();
        } else {
            // Close only siblings on same level
            $siblings.removeClass('active').find('> .icon').text('+');
            $siblings.children('.subMenu').stop(true, true).slideUp();

            // Open this one
            $li.addClass('active').find('> .icon').text('-');
            $submenu.stop(true, true).slideDown();
        }
    });

    // Keep menus open when clicking links
    $(document).on('click', '.dropdown > a', function (e) {
        e.stopPropagation();
    });

    // Close only when clicking outside main nav
    $(document).on('mousedown', function (e) {
        if ($(e.target).closest('.dropdown').length === 0) {
            $('li.dropdown').removeClass('active');
            $('.subMenu').slideUp();
            $('.icon').text('+');
        }
    });

});



