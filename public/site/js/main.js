class SoundReactor {
    constructor(audioUrl) {
        this.ctx;
        this.audio;
        this.audioSource;
        this.analyser;
        this.fdata;
        this.url = audioUrl;

        this.bind();
    }

    init() {
        this.ctx = new AudioContext();
        this.audio = new Audio(this.url);
        this.audioSource = this.ctx.createMediaElementSource(this.audio);
        this.analyser = this.ctx.createAnalyser();
        this.analyser.smoothingTimeConstant = 0.8;

        this.audioSource.connect(this.analyser);
        this.audioSource.connect(this.ctx.destination);
        this.fdata = new Uint8Array(this.analyser.frequencyBinCount);

        this.audio.play();
    }

    update() {
        this.analyser.getByteFrequencyData(this.fdata);
    }

    bind() {
        this.update = this.update.bind(this);
        this.init = this.init.bind(this);
    }
}

function toggleCallbackPopup(open = true, success = true) {
    const popup = $(".formSendPopup");
    const body = $("body");
    const successLayout = `<h1>Thank you!</h1>
            <h2>Your request has been submitted!</h2>`;
    const failLayout = `<h1>Something went wrong!</h1>
            <h2>Please try again!</h2>`;

    if (open) {
        $("#dynamicContent").html(success ? successLayout : failLayout);
        body.css("overflow", "hidden");
        popup.addClass("show");
    } else {
        body.css("overflow", "auto");
        popup.removeClass("show");
    }
}

$(document).ready(function() {
    const pageUrl = document.body.getAttribute("data-url");
    const introPageShowed = sessionStorage.getItem("introPage") === "showed";
    const wrapper = $(".introWrapper");
    const videoElement = $("#homeVideo")?.[0];
    const audio = $("#backgroundMusic")?.[0];
    const fixedBottomIcon = $(".bottomFixedIcon");

    var mobileTest = false;
    if (
        /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
            navigator.userAgent
        ) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
            navigator.userAgent.substr(0, 4)
        )
    ) {
        mobileTest = true;
    }
    const device = mobileTest ? "mobile" : "desktop";

    if (pageUrl === "home" && !introPageShowed) {
        gtag("send", "pageview", "intro");
        wrapper.css("display", "block");
        setTimeout(() => {
            window.scrollTo(0, 0);
        }, 500);
        // videoElement?.addEventListener('loadeddata', () => {
        //
        // });
        textAnimation(".introWrapper .title", 30, 0, 2500).add({
            targets: ".introWrapper .title .letter",
            translateY: [0, 30],
            translateZ: 0,
            opacity: [1, 0],
            easing: "easeOutExpo",
            duration: 2500,
            delay: (el, i) => 30 * i
        });

        $(".introWrapper .introLogo").addClass("animate");

        textAnimation(
            ".introWrapper .firstText",
            30,
            0,
            2500,
            false,
            10000
        ).add({
            targets: ".introWrapper .firstText .letter",
            translateY: [0, 30],
            translateZ: 0,
            opacity: [1, 0],
            easing: "easeOutExpo",
            duration: 2500,
            delay: (el, i) => 30 * i
        });

        textAnimation(
            ".introWrapper .secondText",
            20,
            0,
            1500,
            false,
            14000
        ).add({
            targets: ".introWrapper .secondText",
            pointerEvents: ["none", "auto"],
            cursor: ["normal", "pointer"],
            duration: 0,
            delay: 1000
        });
    } else {
        hideIntroPage();
    }

    const hash = window.location.hash;

    //     $(".scrollToMembership").on("click", () =>
    //         scrollToElement(".contactSection", 0)
    //     );
    // }

    function callTrackerOnScroll() {
        $(window).on("resize scroll load", function() {
            const scrollPos =
                window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight / 10;

            if (
                !fixedBottomIcon.hasClass("visible") &&
                scrollPos > windowHeight
            ) {
                fixedBottomIcon.addClass("visible");
            } else if (
                fixedBottomIcon.hasClass("visible") &&
                scrollPos < windowHeight
            ) {
                fixedBottomIcon.removeClass("visible");
            }

            animationTextList[device]["animateText"][pageUrl]?.length &&
                animationTextList[device]["animateText"][pageUrl].forEach(
                    (item, i) => {
                        let elem = $(item);
                        if (!elem.hasClass("animated") && elem.isInViewport()) {
                            animationTextList[device]["animateText"][
                                pageUrl
                            ].splice(i, 1);
                            fullTextAnimation(item, 70, 0, 4500, 1100, 700);
                        }
                    }
                );

            animationTextList[device]["animateLetters"][pageUrl]?.length &&
                animationTextList[device]["animateLetters"][pageUrl].forEach(
                    (item, i) => {
                        let elem = $(item);
                        if (!elem.hasClass("animated") && elem.isInViewport()) {
                            animationTextList[device]["animateLetters"][
                                pageUrl
                            ].splice(i, 1);
                            device === "desktop"
                                ? textAnimation(item, 30, 0, 5000)
                                : textAnimation(
                                      item,
                                      30,
                                      0,
                                      7000,
                                      false,
                                      false,
                                      70
                                  );
                        }
                    }
                );
        });
    }

    // if (pageUrl === "home") {
    //     $(window).on('load', function () {
    //         $(".scrollToMembership").on("click", () => scrollToElement(".contactSection", 0));
    //         if (introPageShowed) {
    //             hash === "#membership" && scrollToElement('.contactSection', 0);
    //         }
    //     })
    // }

    function hideIntroPage(setIntroShowed) {
        videoElement?.play();
        audio?.play();
        $(".introWrapper").addClass("hideBlock");
        $("body").css("overflow", "unset");
        $("header").css("opacity", "1");
        $(".home-banner-titleLogo")?.css("opacity", "1");
        $(".home-banner-title").length &&
            textAnimation(".home-banner-title", 30, 0, 2000);
        setTimeout(() => {
            wrapper.remove();
        }, 1100);
        callTrackerOnScroll();
        setIntroShowed && sessionStorage.setItem("introPage", "showed");
        setIntroShowed && gtag("send", "pageview", "home");
    }

    $(".secondText").on("click", () => hideIntroPage(true));

    function textAnimation(
        selector,
        yFrom,
        yTo,
        duration,
        fadeOut,
        delay = 150,
        innerDelay = 40
    ) {
        const textWrapper = $(selector);
        if (textWrapper.length) {
            const beforeContent = textWrapper.html();
            const textContent = beforeContent.split("<br>");
            let html = "";
            textContent.forEach((item, i) => {
                const s = item
                    .replace(/<[^>]*>?/gm, "")
                    .replace(/amp;/g, "")
                    .replace(/\S/g, "<span class='letter'>$&</span>");
                html += s;
                html += item !== "" ? "<br>" : "";
            });
            textWrapper.addClass("animated");
            textWrapper.html(html);

            return anime.timeline({ loop: false }).add({
                targets: selector + " .letter",
                translateY: fadeOut ? [yTo, yFrom] : [yFrom, yTo],
                // scaleY: [0.3, 1],
                translateZ: 0,
                opacity: fadeOut ? [1, 0] : [0, 1],
                easing: "easeOutExpo",
                duration: duration,
                delay: (el, i) => delay + innerDelay * i
            });
        }
    }

    function fullTextAnimation(
        selector,
        yFrom,
        yTo,
        duration,
        delay,
        innerDelay
    ) {
        const textWrapper = $(selector);
        if (textWrapper.length) {
            textWrapper.addClass("animated");

            anime.timeline({ loop: false }).add({
                targets: `${selector} .textForAnimation`,
                translateY: [yFrom, yTo],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: duration,
                delay: (el, i) => delay + innerDelay * i
            });
        }
    }

    const serviceElements = () => {
        var arr = [];

        if (typeof countOfSections !== 'undefined') {
            for (let i = 0; i < countOfSections; i++) {
                arr = [...arr, `.serviceSection${i}`]
            }
        }

        return {
            letters: arr,
            text: arr.map(item => `.animateBlock${item.replace('.', '')}`)
        };
    }

    const animationTextList = {
        desktop: {
            animateLetters: {
                home: [
                    ".meetOurTeamTitle",
                    // ".animateTextTruly",
                    ".animateTextGallery"
                ],
                philosophy: [
                    ".philosophyPageTitle",
                    // ".animateTextDesigned",
                    ".animateTextInimitable"
                ],
                services: [
                    ".servicesPageTitle",
                    ...serviceElements()['letters'],
                ],
                gallery: [".galleryWrapperHeadTitle"],
                contact: [".contactBannerTitle"],
                memberships: [
                    ".membershipTitle"
                    // ".membershipText"
                ],
                registration: [".pageTitle"],
                team: [".teamPageTitle", ".animateTextCommitment"]
            },
            animateText: {
                home: [
                    ".explorePhilosophyLeft .desktopList",
                    ".explorePhilosophyLeft .mobileList",
                    ".meetOurTeamDesc"
                ],
                philosophy: [
                    ".pageBannerLeft",
                    ".separateSection",
                    ".animationBlock"
                ],
                services: [
                    ".pageBannerLeft",
                    ".separateSection",
                    ...serviceElements()['text'],
                ],
                contact: [".contact-bannerText"],
                memberships: [".pageBannerLeft"],
                registration: [".pageBannerLeft"],
                team: [".pageBannerLeft", ".meetTheTeamText", ".animateTextFromTheBest"]
            }
        },

        mobile: {
            animateLetters: {
                home: [
                    ".meetOurTeamTitle",
                    // ".animateTextTruly",
                    ".animateTextGallery"
                ],
                philosophy: [
                    ".philosophyPageTitle",
                    // ".animateTextDesigned",
                    ".animateTextInimitable"
                ],
                services: [
                    ".servicesPageTitle",
                    // ".animateTextUnsurpassed",
                    ...serviceElements()['letters'],
                ],
                gallery: [".galleryWrapperHeadTitle"],
                contact: [".contactBannerTitle"],
                memberships: [
                    ".membershipTitle"
                    // ".membershipText"
                ],
                registration: [".pageTitle"],
                team: [".teamPageTitle", ".animateTextCommitment"]
            },
            animateText: {
                home: [
                    ".explorePhilosophyLeft .desktopList",
                    ".explorePhilosophyLeft .mobileList",
                    ".meetOurTeamDesc"
                ],
                philosophy: [
                    ".pageBannerLeft",
                    ".separateSection",
                    ".animationBlock"
                ],
                services: [
                    ".pageBannerLeft",
                    ".separateSection",
                    ...serviceElements()['text'],
                ],
                contact: [".contact-bannerText"],
                memberships: [".pageBannerLeft", ".separateSection"],
                registration: [".pageBannerLeft"],
                team: [".separateSection"]
            }
        }
    };

    $.fn.isInViewport = function() {
        const elementTop = $(this)?.offset()?.top;
        const elementBottom = elementTop + $(this)?.outerHeight();

        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    $(".scrollBottom").on("click", function () {
        const element = $("#scrollBlock");
        $("html,body").animate({ scrollTop: element.offset().top }, 400);
    });

    function toggleMenu() {
        $("#mobileMenu").toggleClass("active");
        $("#menuBurger").toggleClass("activeMenu");
    }

    $("#menuBurger").on("click", () => toggleMenu());

    new Swiper("#homeSwiper", {
        speed: 400,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            320: {
                slidesPerView: 1.01,
                spaceBetween: "0"
            },
            768: {
                slidesPerView: "auto",
                spaceBetween: "0"
            }
        }
    });

    const homeGalleryPopup = new Swiper("#homeGalleryPopup .swiper-container", {
        speed: 400,
        centeredSlides: true,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },

        keyboard: {
            enabled: true,
            onlyInViewport: false
        },

        breakpoints: {
            320: {
                spaceBetween: 0
            },
            768: { spaceBetween: 200 }
        }
    });

    function toggleHomePageGalleryPopup(show = true) {
        const galleryPopup = $("#homeGalleryPopup");
        if (show) {
            galleryPopup.addClass("show");
            $("body").css("overflow", "hidden");
        } else {
            galleryPopup.removeClass("show");
            $("body").css("overflow", "auto");
        }
    }

    $("#homeSwiper .swiper-slide").on("click", function() {
        const activeId = $(this).attr("data-id");
        homeGalleryPopup.slideTo(activeId, 0);
        toggleHomePageGalleryPopup();
    });

    $(
        "#homeGalleryPopup .close-popup-btn, #homeGalleryPopup .galleryPopup-overlay"
    ).on("click", function() {
        toggleHomePageGalleryPopup(false);
    });

    // $('.introWrapper').on('mousemove', function (e) {
    //     const elw = actionText.width();
    //     const elh = actionText.height();
    //     const x = e.pageX;
    //     const y = e.pageY;
    //
    //     const elTop = actionText.offset().top + elh / 2;
    //     const elLeft = actionText.offset().left + elw / 2;
    //
    //     const moveX = -(elLeft - x) / 12;
    //     const moveY = -(elTop - y) / 12;
    //
    //     actionText.css("transform", `translate(${moveX}px, ${moveY}px)`);
    // })

    function scrollToElement(element, duration) {
        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(element).offset().top
            },
            duration
        );
    }

    $(".scrollBottom100vh").on("click", () =>
        scrollToElement(".contact-content-wrapper", 1500)
    );

    // $(".mobileLink").on("click", function () {
    //     if ($(this).attr("data-hash") === "membership") {
    //         toggleMenu();
    //         scrollToElement(".contactSection", 1500);
    //     }
    // });

    // $(document).on('mousemove', function () {
    //     console.log('sssss')
    // })
    // let soundReactor = new SoundReactor('site/js/example.mp3');
    // soundReactor.init();

    $(".formSendPopup .close-popup-btn, .formSendPopup .formSendPopupLayer").on(
        "click",
        function() {
            toggleCallbackPopup(false);
        }
    );

    $("#requestCallbackForm").validate({
        rules: {
            name: "required",
            phone: {
                required: true,
                number: true
            },
            email: {
                required: false,
                email: true
            }
        },
        messages: {
            name: "Name is required",
            phone: {
                required: "Phone is required",
                number: "Please write only numbers"
            },
            email: {
                email: "Please write valid email"
            }
        },
        submitHandler: function(form) {
            const dataEntire = Object.fromEntries(new FormData(form).entries());
            const button = $("#requestCallbackForm button.linkItem");
            if ($(form).valid()) {
                button.attr("disabled", "disabled");
                $.ajax({
                    method: "POST",
                    url: `/contacts/call_back`,
                    data: JSON.stringify(dataEntire),
                    contentType: "application/json",
                    dataType: "json",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        )
                    },
                    success: function(data) {
                        if (data) {
                            toggleCallbackPopup();
                            form.reset();
                            button.removeAttr("disabled");
                        }
                    }
                });
            }
        }
    });

    jQuery.validator.addMethod(
        "lettersonly",
        function(value, element) {
            return this.optional(element) || /^[a-z\s]+$/i.test(value);
        },
        "Only alphabetical characters"
    );
    jQuery.validator.addMethod(
        "accept",
        function(value, element, param) {
            return value.match(new RegExp("." + param + "$"));
        },
        "Upload doc, docx or pdf file"
    );
    jQuery.validator.addMethod("filesize", function(value, element, param) {
        return this.optional(element) || element.files[0].size <= param;
    });

    // var checkScrollSpeed = (function(settings){
    //     settings = settings || {};
    //
    //     var lastPos, newPos, timer, delta,
    //         delay = settings.delay || 50; // in "ms" (higher means lower fidelity )
    //
    //     function clear() {
    //         lastPos = null;
    //         delta = 0;
    //     }
    //
    //     clear();
    //
    //     return function(){
    //         newPos = window.scrollY;
    //         if ( lastPos != null ){ // && newPos < maxScroll
    //             delta = newPos -  lastPos;
    //         }
    //         lastPos = newPos;
    //         clearTimeout(timer);
    //         timer = setTimeout(clear, delay);
    //         return delta;
    //     };
    // })();

    $(".userInfo")?.on("click", function() {
        $(this).toggleClass("show");
    });

    // function sumOfDigits(n) {
    //     return (--n % 9) + 1;
    // }

    $("#openLoginPopup")?.on("click", () => {
        $("#loginPopup").addClass("show");
    });

    $("#loginPopup .loginSendPopupLayer, #loginPopup .close-popup-btn").on(
        "click",
        () => {
            $("#loginPopup").removeClass("show");
        }
    );

    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Write email for login.",
                email: "Please write valid email"
            },
            password: {
                required: "Write password for login."
            }
        },
        submitHandler: function(form) {
            const dataEntire = Object.fromEntries(new FormData(form).entries());
            const button = $("#loginForm button.linkItem");
            if ($(form).valid()) {
                button.attr("disabled", "disabled");
                $.ajax({
                    method: "POST",
                    url: `/login`,
                    data: JSON.stringify(dataEntire),
                    contentType: "application/json",
                    dataType: "json",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        )
                    },
                    success: function(data) {
                        if (+data !== 0) {
                            window.location.href = `/profile/${data}`;
                        }
                    },
                    error: function(err) {
                        console.log(err);
                        button.removeAttr("disabled");
                        const errorLabel = `<label id="loginemail-error" class="error" for="loginemail">Email or password is wrong</label>`;
                        $('#loginForm input[name="email"]').after(errorLabel);
                    }
                });
            }
        }
    });
});
