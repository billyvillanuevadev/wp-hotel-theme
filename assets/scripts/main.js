jQuery((function(e){function o(){e(this).scrollTop()>1?e(".xbv-sticky-header").addClass("sticky"):e(".xbv-sticky-header").removeClass("sticky")}console.log("code by Billy Villanueva"),e(document).ready((function(){e(".slick-leaf").slick({fade:!0,infinite:!1,speed:500,slidesToShow:1,arrows:!0,asNavFor:".slick-leaf-desc"}),e(".slick-leaf-desc").slick({infinite:!1,slidesToShow:1,asNavFor:".slick-leaf",arrows:!0,dots:!0}),e(".slick-gallery").slick({slidesToShow:3,slidesToScroll:1,dots:!1,centerMode:!0,infinite:!0,autoplay:!0,autoplaySpeed:2e3,focusOnSelect:!1,responsive:[{breakpoint:992,settings:{slidesToShow:2,centerMode:!1,slidesToScroll:1}},{breakpoint:768,settings:{slidesToShow:1,centerMode:!0,slidesToScroll:1}}]}),o(),e(window).scroll((function(){o()})),e(".xbv-smooth-scroll a").on("click",(function(o){if(""!==this.hash){var s=this.hash;if(e(s).length>=1){o.preventDefault();var i=e(s).offset().top+0;e("html, body").animate({scrollTop:i},600)}}}))})),e(window).ready((function(){AOS.init()}))})),window.addEventListener("load",(function(){var e=document.body;e.style.overflow="hidden",e.className=document.body.className.replace("xbv-preload",""),setTimeout((function(){e.style.overflow="visible"}),600)}));
//# sourceMappingURL=main.js.map
