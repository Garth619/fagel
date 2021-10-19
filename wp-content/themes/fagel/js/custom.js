// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'

jQuery(document).ready(function ($) {
  $("body").addClass("ready");

  /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

  // loads wistia on click to improve initial page speed
  $(".wistia_embed").click(function () {
    //make sure to only load if Wistia is not already loaded
    let self = this;
    if (typeof Wistia === "undefined") {
      jQuery.getScript(
        "https://fast.wistia.com/assets/external/E-v1.js",
        function (data, textStatus, jqxhr) {
          // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
          // a hook we can listen for. So we need to set an interval to check when it's ready
          var interval = setInterval(function () {
            if ($(self).attr("id") && window._wq) {
              _wq.push({
                id: "_all",
                onReady: function (video) {
                  video.play();
                },
              });
              clearInterval(interval);
            }
          }, 100);
        }
      );
    } else {
      console.log("wistia is already defined");
    }
  });

  /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
  --------------------------------------------------------------------------------------- */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          );
          return false;
        }
      }
    });
  });

  /* Waypoints
     --------------------------------------------------------------------------------------- */

  function createWaypoint(
    triggerElementId,
    animatedElement,
    className,
    offsetVal,
    functionName,
    reverse
  ) {
    if (jQuery("#" + triggerElementId).length) {
      var waypoint = new Waypoint({
        element: document.getElementById(triggerElementId),
        handler: function (direction) {
          if (direction === "down") {
            jQuery(animatedElement).addClass(className);

            if (typeof functionName === "function") {
              functionName();
              this.destroy();
            }
          } else if (direction === "up") {
            if (reverse) {
              jQuery(animatedElement).removeClass(className);
            }
          }
        },
        offset: offsetVal,
        // Integer or percent
        // 500 means when element is 500px from the top of the page, the event triggers
        // 50% means when element is 50% from the top of the page, the event triggers
      });
    }
  }

  createWaypoint(
    "section-one",
    "body, #header-right, nav",
    "sticky",
    73,
    null,
    true
  );

  createWaypoint(
    "internal-main",
    "body, #header-right, nav",
    "sticky",
    73,
    null,
    true
  );

  createWaypoint("section-two", "#section-two", "visible", 200, null, true);

  createWaypoint("section-three", "#section-three", "visible", 400, null, true);

  createWaypoint("section-four", "#section-four", "visible", 400, null, true);

  createWaypoint("section-five", "#section-five", "visible", 300, null, true);

  createWaypoint("section-six", "#section-six", "visible", 300, null, true);

  createWaypoint("consultation", "#consultation", "visible", 300, null, true);

  /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */

  $("#sec-one-sp-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    prevArrow: "#sp-arrow-left",
    nextArrow: "#sp-arrow-right",
    adaptiveHeight: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  $("#sec-one-news-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    adaptiveHeight: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1170,
        settings: {
          adaptiveHeight: false,
          slidesToShow: 2,
          slidesToScroll: 2,
          vertical: true,
          dots: false,
          arrows: true,
          prevArrow: "#news-arrow-left",
          nextArrow: "#news-arrow-right",
        },
      },
      {
        breakpoint: 1799,
        settings: {
          adaptiveHeight: false,
          slidesToShow: 4,
          slidesToScroll: 4,
          vertical: true,
          dots: false,
          arrows: true,
          prevArrow: "#news-arrow-left",
          nextArrow: "#news-arrow-right",
        },
      },
    ],
  });

  $("#sec-three-slider").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    mobileFirst: true,
    arrows: false,
    adaptiveHeight: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1170,
        settings: {
          adaptiveHeight: false,
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
          arrows: true,
          prevArrow: "#sec-three-arrow-left",
          nextArrow: "#sec-three-arrow-right",
        },
      },
      {
        breakpoint: 1380,
        settings: {
          adaptiveHeight: false,
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: false,
          arrows: true,
          prevArrow: "#sec-three-arrow-left",
          nextArrow: "#sec-three-arrow-right",
        },
      },
    ],
  });

  // sec three total slides number

  // var secthreenumber = $(
  //   "#section-three .slick-slide:not(.slick-cloned)"
  // ).length;

  // var secthreecount = ("0" + secthreenumber).slice(-2);

  // $("#section-three #second-number").append(secthreecount);

  $("#sec-five-slider-inner").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    adaptiveHeight: true,
    dots: false,
    prevArrow: "#sec-five-arrow-left",
    nextArrow: "#sec-five-arrow-right",
  });

  // total slides number

  function slideCount(sectionid) {
    var slidenumber = $(`${sectionid} .slick-slide:not(.slick-cloned)`).length;

    var slidecount = ("0" + slidenumber).slice(-2);

    $(`${sectionid} #second-number`).append(slidecount);
  }

  slideCount("#section-three");
  slideCount("#section-five");

  $("#testi-videos-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    fade: true,
    prevArrow: "#testi-videos-arrow-left",
    nextArrow: "#testi-videos-arrow-right",
    adaptiveHeight: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  /* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */

  $("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  // not found go back button

  function goBack() {
    window.history.back();
  }

  $("span.go_back").on("click", function (e) {
    goBack();
  });

  /* Sidebar slideToggle
--------------------------------------------------------------------------------------- */

  $(".widget ul.menu > li.menu-item-has-children a").on("click", function (e) {
    $(this).toggleClass("active");
    $(this).next("ul").slideToggle();
  });

  /* Sidebar Current Class for Blog Sidebars
--------------------------------------------------------------------------------------- */

  // add active to blog widgets that dont show a built in current class

  var pgurl = window.location.href;

  $(".widget ul li").each(function () {
    if ($(this).find("a").attr("href") == pgurl)
      $(this).addClass("blog-active");
  });

  /* Case Results slideToggle
--------------------------------------------------------------------------------------- */

  $(".case-results-button").on("click", function (e) {
    $(this).next("ul").slideToggle(250);
  });

  $(".case-results-filter ul li").on("click", function (e) {
    // gets text

    var caseresultstext = $(this).text();

    // takes the text and climbs back up to the top and replaces the text with the new text, there is probably cleaner ways to do this haha

    $(this)
      .closest(".case-results-filter ul")
      .prev(".case-results-button")
      .find("span")
      .replaceWith("<span>" + caseresultstext + "<span>");

    // then the dropdown slides back up

    $(".case-results-filter ul").slideUp(250);
  });

  // this mimics the way a select dropdown closes when you decide not to choose an option but just click outside of the select, the dropdown slides back up too

  $(document).click(function (e) {
    var container = $(".case-results-filter");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $(".case-results-filter ul").slideUp(250);
    }
  });

  /* Section Six Masonary
--------------------------------------------------------------------------------------- */

  // function quickdirtyColumns(colNum) {
  //   const len = $(".grid-item").length;
  //   const cols = colNum; //number of desired columns
  //   const rows = Math.ceil(len / cols);

  //   for (i = 0; i < len; i += rows) {
  //     $(".grid-item")
  //       .slice(i, i + rows)
  //       .wrapAll("<div class='sec-six-col'>");
  //   }
  // }

  // if ($(window).width() >= 768 && $(window).width() <= 1169) {
  //   quickdirtyColumns(2);
  // }

  // if ($(window).width() >= 1170 && $(window).width() <= 1379) {
  //   quickdirtyColumns(3);
  // }

  // if ($(window).width() >= 1379 && $(window).width() <= 1779) {
  //   quickdirtyColumns(2);
  // }

  // if ($(window).width() >= 1379) {
  //   quickdirtyColumns(3);
  // }

  /* Resize Nav Functions
--------------------------------------------------------------------------------------- */

  // resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page

  // nav

  //$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

  $("#menu").on("click", function (e) {
    $("nav").toggleClass("open");
    $("#menu-bars, #menu-open, #menu-close").toggleClass("fade");
  });

  function navDesktop() {
    $("header nav").addClass("nav_desktop");

    $("header nav li.menu-item-has-children > a")
      .next("ul.sub-menu")
      .removeClass("open");

    $("header nav").removeClass("nav_tablet");
  }

  function navTablet() {
    $("header nav").removeClass("nav_desktop");

    $("header nav").addClass("nav_tablet");
  }

  function tabletClick() {
    $(this).parent().toggleClass("active");

    $(this).toggleClass("active");

    $(this).next("ul.sub-menu").toggleClass("active");
  }

  // nav

  if ($(window).width() >= 1170) {
    navDesktop();
  }

  if ($(window).width() < 1170) {
    navTablet();

    $("header nav li.menu-item-has-children > a")
      .off()
      .on("click", tabletClick);
  }

  // resize window width and fire functions

  $(window).resize(
    _.debounce(function () {
      if ($(window).width() >= 1170) {
        navDesktop();

        // off

        $("header nav li.menu-item-has-children > a").off("click", tabletClick);
      }

      if ($(window).width() < 1170) {
        navTablet();

        // off

        $("header nav li.menu-item-has-children > a")
          .off()
          .on("click", tabletClick);
      }
    }, 100)
  );

  // var $div = $("#gform_wrapper_4");
  // var observer = new MutationObserver(function (mutations) {
  //   mutations.forEach(function (mutation) {
  //     if (mutation.attributeName === "class") {
  //       var attributeValue = $(mutation.target).prop(mutation.attributeName);
  //       console.log("Class attribute changed to:", attributeValue);
  //     }
  //   });
  // });
  // observer.observe($div[0], {
  //   attributes: true,
  // });
}); // document ready
