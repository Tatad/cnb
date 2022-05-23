$(document).ready(function() {
    const hash = window.location.hash;

    function renderSlide(img) {
        return `<div class="swiper-slide galleryPopupImage" style="background-image: url(${img})"></div>`;
    }

    function openGalleryPopup(img, images) {
        const idx = images.indexOf(img);

        $("#galleryPopup .swiper-wrapper").empty();
        $("#galleryPopup").addClass("show");

        images.forEach(function(el) {
            $("#galleryPopup .swiper-wrapper").append(renderSlide(el));
        });

        const gallerySwiper = new Swiper("#galleryPopup .swiper-container", {
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

        gallerySwiper.slideTo(+idx, 0);
        gallerySwiper.update();

        $(
            "#galleryPopup .close-popup-btn, #galleryPopup .galleryPopup-overlay"
        ).on("click", function() {
            $("#galleryPopup").removeClass("show");
            $("body").css("overflow", "auto");
        });

        $("body").css("overflow", "hidden");
    }

    const getGalleryData = query => {
        const galleryTab = (tab, id) =>
            ` <li class="filterWrapperItem" data-key="${id}">${tab}</li>`;

        const images = [];

        $(".galleryWrapperBody").html(
            '<img class="loaderImage" src="site/media/images/icon/loader.svg" alt="gallery-image">'
        );

        const template = url =>
            `<div itemprop="gallery-image-item" class="galleryWrapperBodyImage brownLayer" data-img="${url}" style="background-image: url('${url}');"></div>`;

        $.get("/gallery/data", data => {
            console.log(data);
            console.log(`query: ${query}`);
            let html = "";
            $("#filterWrapper").html("");
            data.forEach(item => {
                $("#filterWrapper").append(galleryTab(item.title, item.id));
            });

            $(".filterWrapperItem").on("click", function() {
                console.log("clicked");
                const el = $(this);
                const h = $(".galleryWrapperBody").innerHeight();
                if (!el.hasClass("active")) {
                    $(".active").removeClass("active");
                    const key = $(this).data("key");
                    $(".galleryWrapperBody").css("min-height", `${h}px`);
                    $(".galleryWrapperBodyImage").fadeOut(1000);
                    window.location.hash = key;
                    setTimeout(() => {
                        getGalleryData(key);
                    }, 1000);
                }
            });

            $(`.filterWrapperItem[data-key=${query}]`).addClass("active");
            const imgData = data.find(el => +el.id === +query);

            imgData["galleries"].forEach(item => {
                html += template(item);
            });
            $(".galleryWrapperBody").html(html);
            $(".galleryWrapperBodyImage").each(function() {
                images.push($(this).data("img"));
            });
            $(".galleryWrapperBodyImage").on("click", function() {
                openGalleryPopup($(this).data("img"), images);
            });
        });
    };

    if (hash) {
        getGalleryData(hash.replace("#", ""));
    } else {
        getGalleryData(1);
    }
});
