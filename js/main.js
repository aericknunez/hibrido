function initialize() {
	var e = {
			center: myCenter,
			zoom: 18,
			scrollwheel: !1,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: !0,
			styles: [{
				featureType: "administrative",
				elementType: "labels.text.fill",
				stylers: [{
					color: "#444444"
				}]
			}, {
				featureType: "landscape",
				elementType: "all",
				stylers: [{
					color: "#f2f2f2"
				}]
			}, {
				featureType: "poi",
				elementType: "all",
				stylers: [{
					visibility: "off"
				}]
			}, {
				featureType: "road",
				elementType: "all",
				stylers: [{
					saturation: -100
				}, {
					lightness: 45
				}]
			}, {
				featureType: "road.highway",
				elementType: "all",
				stylers: [{
					visibility: "simplified"
				}]
			}, {
				featureType: "road.arterial",
				elementType: "labels.icon",
				stylers: [{
					visibility: "off"
				}]
			}, {
				featureType: "transit",
				elementType: "all",
				stylers: [{
					visibility: "off"
				}]
			}, {
				featureType: "water",
				elementType: "all",
				stylers: [{
					color: "#0c6db5"
				}, {
					visibility: "on"
				}]
			}]
		},
		t = new google.maps.Map(document.getElementById("googleMap"), e);
	new google.maps.Marker({
		position: myCenter,
		animation: google.maps.Animation.DROP,
		icon: "img/marker.png"
	}).setMap(t), google.maps.event.addDomListener(window, "resize", function () {
		t.setCenter(myCenter)
	})
}
var flag;
$(window).on("load", function () {
	$("html, body").animate({
		scrollTop: 0
	}, 0), setTimeout(function () {
		$(".preloader").fadeOut("slow"), $("body").removeClass("nonScroll"), setTimeout(function () {
			var e = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop;
			flag = e < 1 ? 1 : 0
		}, 1500)
	}, 200)
}), $(document).ready(function () {
	function e() {
		var e = $(".js-window-height");
		e.length && (e.css("min-height", $(window).outerHeight()), o && $(".section-svg").css("height", $(window).outerHeight()))
	}

	function t() {
		flag = 0;
		var e = $(".header-wrapper").outerHeight(),
			t = $(".section-2").offset().top;
		return $("html, body").animate({
			scrollTop: t - e + 1
		}, 800, function () {
			setTimeout(function () {
				$(window).on("scroll", r)
			}, 100)
		}), !1
	}

	function i() {
		var e = $(".page-header"),
			t = $(".page-header").outerHeight(),
			i = $(window).scrollTop(),
			s = $(".section-1").outerHeight();
		i > 1 && i < s - t ? e.addClass("hold") : e.removeClass("hold"), i >= s - t ? e.addClass("scroll") : e.removeClass("scroll")
	}

	function s() {
		var e = $("#menu-list");
		e.length && $(window).outerWidth() < 1200 ? e.css("top", $(".header-wrapper").outerHeight()) : e.css("top", "")
	}
	var a = window.navigator.userAgent.toLowerCase(),
		o = /trident/gi.test(a) || /msie/gi.test(a);
	e(), $("#typeit-main-title").typeIt({
		speed: 25,
		breakDelay: 0,
		startDelay: 0,
		breakLines: !0,
		autoStart: !0,
		callback: function () {
			$("#typeit-main-title").find(".ti-cursor").remove(), $("#section_1_svg").addClass("animate")
		}
	}), $(".js-hamburger").on("click", function () {
		$(this).toggleClass("is-active"), $(".page-header").toggleClass("menu-open"), $("body").toggleClass("nonScroll")
	}), i(), s();
	var n, l = $(".menu-list"),
		d = $(".menu-list a"),
		c = d.map(function () {
			var e = $($(this).attr("href"));
			if (e.length) return e
		}),
		r = function () {
			var e = $(".header-wrapper").outerHeight(),
				t = $(this).scrollTop(),
				i = c.map(function () {
					if ($(this).offset().top < t + e) return this
				}),
				s = (i = i[i.length - 1]) && i.length ? i[0].id : "";
			if (n !== s) {
				n = s, d.removeClass("active").filter('[href="#' + s + '"]').addClass("active");
				var a = d.filter(".active");
				if (a.length) {
					var o = a.position().left,
						l = a.css("width");
					$(".active-bar").stop(!0, !0).css("display", "block").animate({
						left: o + "px",
						width: l
					}, 800)
				} else $(".active-bar").css({
					display: "none",
					left: "0"
				})
			}
		};
	setTimeout(function () {
		r()
	}, 300), $('a[href^="#anchor"]', l).on("click", function () {
		flag = 0;
		var e = this.hash;
		if (0 != $(e).length) {
			var t = $(e).offset().top,
				i = $(".header-wrapper").height();
			$(":animated").stop(!0, !0), $("html, body").animate({
				scrollTop: t - i + 1
			}, 800, function () {
				setTimeout(function () {
					$(window).on("scroll", r)
				}, 100)
			})
		}
		return $(".page-header").hasClass("menu-open") && $(".js-hamburger").click(), !1
	}), $(".next-arrow").on("click", function (e) {
		e.preventDefault(), t()
	}), $(".logo").on("click", function (e) {
		e.preventDefault(), $("html, body").animate({
			scrollTop: 0
		}, 800), $(".active-bar").css({
			left: "0"
		})
	}), $(window).on("scroll", function () {
		if (i(), r(), $(window).outerWidth() > 1199 && 1 === flag) return t(), !1
	}), $(window).resize(function () {
		$(window).outerWidth() > 1199 && setTimeout(function () {
			e()
		}, 20), s()
	}), window.addEventListener("orientationchange", function () {
		$(window).outerWidth() < 1200 && setTimeout(function () {
			e()
		}, 500)
	})
});
var myCenter = new google.maps.LatLng(13.6926108, -89.2451114);
google.maps.event.addDomListener(window, "load", initialize);
var $offset;
$offset = $(window).outerWidth() > 1199 ? 300 : 100, $(".section-2 .section-svg").viewportChecker({
	offset: $offset,
	callbackFunction: function () {
		$("#svg-2 .bg-left").addClass("visible animated lightSpeedIn").css("opacity", "1"), $(".grid").css("opacity", "1"), $(".document-block").css("opacity", "1"), $(".display-wrapper").addClass("visible animated slideInLeft").css("opacity", "1"), $(".girl").addClass("visible animated bounceInUp").css("opacity", "1"), $(".chair").addClass("visible animated bounceInUp").css("opacity", "1"), $(".chair_underline").addClass("visible animated fadeInLeftBig"), $(".man").addClass("visible animated bounceInUp").css("opacity", "1"), setTimeout(function () {
			$(".box").addClass("open")
		}, 2500), $(".man-box-1, .man-box-2").addClass("visible animated bounceInUp").css("opacity", "1")
	}
});
var $offset;
$offset = $(window).outerWidth() > 1199 ? 300 : 100, $(".section-3 .section-svg").viewportChecker({
	offset: $offset,
	callbackFunction: function () {
		$("#svg-3 .bg-left").addClass("visible animated jello").css("opacity", "1"), $("#svg-3 .grid").css("opacity", "1"), $(".laptop").addClass("visible animated slideInRight").css("opacity", "1"), setTimeout(function () {
			$(".laptop-content").addClass("open")
		}, 2500), $(".desktop").addClass("visible animated slideInLeft").css("opacity", "1"), $(".desktop-msg").addClass("visible animated slideInUp").css("opacity", "1"), $(".tablet").addClass("visible animated slideInUp").css("opacity", "1"), $(".tablet-msg").addClass("show"), $(".cursor").addClass("start"), $(".man-ginger").addClass("start"), $(".man-beard").addClass("visible animated slideInLeft").css("opacity", "1"), $(".table").addClass("visible animated slideInLeft").css("opacity", "1"), setTimeout(function () {
			$(".tablet").addClass("start-animation")
		}, 1e3)
	}
});
var $offset;
$offset = $(window).outerWidth() > 1199 ? 300 : 100, $(".section-4 .section-svg").viewportChecker({
	offset: $offset,
	callbackFunction: function () {
		$("#svg-4 .bg-left").addClass("visible animated swing").css("opacity", "1"), $("#svg-4 .grid").css("opacity", "1"), $(".phone, .window-1, .window-2").addClass("visible animated fadeInLeftBig").css("opacity", "1"), setTimeout(function () {
			$(".phone-msg").addClass("visible animated slideInLeft").css("opacity", "1")
		}, 2500), $(".window-3 .block").addClass("visible animated slideInRight").css("opacity", "1"), $(".man-left").addClass("visible animated slideInLeft").css("opacity", "1"), $(".man-center").addClass("visible animated slideInUp").css("opacity", "1"), $(".man-right").addClass("visible animated slideInRight").css("opacity", "1"), $(".laser").addClass("visible animated flash").css("stroke-opacity", "1"), setTimeout(function () {
			$(".phone-content-wrapper").addClass("phone-msg-animated")
		}, 4500)
	}
});
//# sourceMappingURL=main.js.map