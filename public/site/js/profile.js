$(document).ready(function () {
    $('#profileForm').validate({
        ignore: [],
        rules: {
            email: {
                required: true,
                email: true,
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
        },
        messages: {
            email: {
                required: 'Email is required',
                email: "Your Email was not valid",
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
            const button = $('#profileForm button.linkItem');
            if ($(form).valid()) {
                button.attr('disabled', 'disabled')
                form.submit();
            }
        },
    });

    function toggleBlock(element) {
        const infoBlock = element.closest('.formSection').find('.informationBlock');
        const editBlock = element.closest('.formSection').find('.editableBlock');
        element.fadeOut(1000);
        infoBlock.fadeOut(1000, function () {
            editBlock.fadeIn(1000);
        })
    }

    $('.switchBlocks').on('click', function () {
        toggleBlock($(this))
    })

    $('.editBlocks').on('click', function () {
        $(this).closest('.editableBlock').find('input').each((i, itm) => {
            $(itm).valid();
        });
    })
})
