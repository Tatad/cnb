$(document).ready(function () {
    const data = sessionStorage.getItem('registerFormData');
    if (data && data !== 'null') {
        const result = JSON.parse(data);
        result.forEach(itm => {
            if (itm.name === 'membership') {
                $(`input[value = ${itm.value}]`).attr('checked', 'checked');
            } else {
                const input = $(`#registrationForm input[name= ${itm.name}]`)
                input.val(itm.value);
            }
        })
    }

    function toggleSwiperNext(swiper, allowNext) {
        swiper.allowSlideNext = allowNext;
        swiper.params.allowSlideNext = allowNext;
        swiper.update();
    }

    const registrationSwiper = new Swiper("#registrationSwiper", {
        speed: 500,
        allowTouchMove: false,
        hashNavigation: {
            watchState: true
        },
        navigation: {
            nextEl: ".nextStepButton",
            prevEl: ".prevStepButton"
        },
        effect: "fade",
        slidesPerView: 1,
        autoHeight: true,
        spaceBetween: "0",
    });

    toggleSwiperNext(registrationSwiper, false);

    function toggleRegistrationPopup(show = 1, data) {
        console.log(data);
        const popup = $(".registrationPopup");
        const body = $('body');
        if (show) {
            // const template = `<div class="registrationPopupWrapperContentList">
            //         <span class="key">email</span>
            //         <span class="value">${data.email}</span>
            //     </div>
            //     <div class="lineBreak"></div>
            //     <div class="registrationPopupWrapperContentList">
            //         <span class="key">Date</span>
            //         <span class="value">${data.date}</span>
            //     </div>
            //     <div class="lineBreak"></div>
            //     <div class="registrationPopupWrapperContentList">
            //         <span class="key">Membership type</span>
            //         <span class="value" style="text-transform: capitalize">${data.membership}</span>
            //     </div>
            //     <div class="lineBreak"></div>
            //     <div class="registrationPopupWrapperContentList">
            //         <span class="key">Price</span>
            //         <span class="value">${data.price} AED</span>
            //     </div>
            //     <div class="lineBreak"></div>`;

            const template = `<div class="registrationPopupWrapperContentList">
                     <span class="key">email</span>
                     <span class="value">${data.email}</span>
                 </div>
                 <div class="lineBreak"></div>
                 <div class="registrationPopupWrapperContentList">
                     <span class="key">Date</span>
                     <span class="value">${data.date}</span>
                 </div>
                 <div class="lineBreak"></div>`


            // const paymentButton = `<a class="paymentButton linkItem" target="_blank" rel="noopener noreferrer" data-redirect="/profile/${data.user_id}" data-payment="${data.url}">
            //     Continue to payment
            // </a>`;

            const paymentButton = `<a class="paymentButton linkItem" target="_blank" rel="noopener noreferrer" href="/profile/${data.user_id}">
              Go to profile
            </a>`;

            $('.registrationPopupWrapperContent').append(template);
            $('.registrationPopupWrapper').append(paymentButton);

            // $('.paymentButton').on('click', function () {
            //     window.open($(this).attr('data-payment'), '_blank').focus();
            //     window.location.pathname = $(this).attr('data-redirect');
            // })
            body.css('overflow', 'hidden');
            popup.addClass('show');
        } else {
            body.css('overflow', 'auto');
            popup.removeClass('show');
        }
    }

    $('.nextStepButton').on('click', function () {
        const inputs = $('.swiper-slide-active .formInputsWrapper input:not(.notRequired)');
        let allowNext = true;
        inputs.each((i, item) => {
            if (!$(item).valid()) {
                allowNext = false;
            }
        })

        if (allowNext) {
            const dataEntire = JSON.stringify($('#registrationForm').serializeArray());
            sessionStorage.setItem('registerFormData', dataEntire);
            toggleSwiperNext(registrationSwiper, true);
            registrationSwiper.slideNext();
            toggleSwiperNext(registrationSwiper, false);
        }
    })

    // jQuery.browser = {
    //     msie: false,
    //     version: 0
    // };

    $('#birth_date').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        defaultDate: new Date('01-01-1990'),
        onSelect: function (selectedDate) {
            $('#birth_date').valid();
        }
    })

    $(".registrationPopup .close-popup-btn, .registrationPopup .registrationPopupCloseLayer").on('click', function () {
        toggleRegistrationPopup(0);
    })

    $('#registrationForm').validate({
        ignore: [],
        rules: {
            email: {
                required: true,
                email: true,
                remote: {
                    url: "/check/email",
                    type: "post",
                    data: {
                        email: function() {
                            return $( "#email" ).val();
                        }
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
            },
            password: {
                required: true,
                minlength: 6,
            },
            confirm_password: {
                required: true,
                minlength: 6,
                equalTo: '#password'
            },
            surname: {
                lettersonly: true,
                required: true,
            },
            name: {
                lettersonly: true,
                required: true,
            },
            birth_date: {
                required: true,
            },
            marital_status: {
                lettersonly: true,
                required: true,
            },
            nationality: {
                lettersonly: true,
                required: true,
            },
            address: {
                required: true,
            },
            tel_number: {
                required: false,
            },
            mobile: {
                required: true,
                number: true
            },
            // membership: {
            //     required: true,
            // }
        },
        messages: {
            email: {
                required: 'Email is required',
                email: "Your Email was not valid",
                remote: "Email already exists"
            },
            password: {
                required: 'Password is required',
                minlength: 'Min. length of characters is 6',
            },
            confirm_password: {
                required: 'Please confirm password',
                minlength: 'Min. length of characters is 6',
                equalTo: 'Passwords did not match'
            },
            surname: {
                required: 'Surname is required',
            },
            name: {
                required: 'Forenames is required',
            },
            birth_date: {
                required: 'Date is required',
            },
            marital_status: {
                required: 'Marital status is required',
            },
            nationality: {
                required: 'Nationality is required',
            },
            address: {
                required: 'Residence Address is required',
            },
            mobile: {
                required: 'Mobile is required',
                number: 'Please write only numbers'
            },
            // membership: {
            //     required: "Please choose one",
            // }
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") === "membership") {
                $('.errorMessageForRadio').html(error)
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            const dataEntire = Object.fromEntries(new FormData(form).entries());
            console.log(dataEntire);
            const button = $('#registrationForm button.linkItem');
            if ($(form).valid()) {
                sessionStorage.setItem('registerFormData', JSON.stringify($(form).serializeArray()));
                button.attr('disabled', 'disabled')
                $.ajax({
                    method: 'POST',
                    url: `/payment/create`,
                    data: JSON.stringify(dataEntire),
                    contentType: "application/json",
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        console.log(data);
                        if (data.user_id) {
                            toggleRegistrationPopup(1, data);
                            sessionStorage.setItem('registerFormData', 'null');
                            form.reset();
                            button.removeAttr("disabled");
                        }
                    },
                    error: function () {
                        toggleCallbackPopup(true, false);
                        button.removeAttr("disabled");
                        sessionStorage.setItem('registerFormData', 'null');
                    }
                });
            }
        },
    });
});
