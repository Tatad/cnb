$(document).ready(function () {
    const oneMB = 1048576;

    const filesInput = $('input[type=file]');

    const changeFileHtml = (elem, html) => {
        $(elem).html(html);
    }

    filesInput.on('change', function (e) {
        const fileNameBlock = $(this).closest('.fileInput').find('.fileName');
        if ($(this).valid()) {
            const fileInput = $(this);
            const file = $(this).prop('files')[0];
            const fileName = file.name;

            const fd = new FormData();
            fd.append('file', file);

            $.ajax({
                method: 'POST',
                url: `/upload/file`,
                data: fd,
                async: false,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    if (data) {
                        changeFileHtml(fileNameBlock, ` - ${fileName}`);
                        fileInput.attr('value', data);
                    }
                }
            });
        } else {
            changeFileHtml(fileNameBlock, ``);
        }
    })

    $('#careerFormBlock').validate({
        ignore: [],
        rules: {
            first_name: {
                required: true,
                lettersonly: true
            },
            last_name: {
                required: true,
                lettersonly: true
            },
            email: {
                required: true,
                email: true
            },
            cover_letter: {
                required: true,
                accept: "(docx?|doc|pdf)",
                filesize: 3 * oneMB
            },
            cv: {
                required: true,
                accept: "(docx?|doc|pdf)",
                filesize: 5 * oneMB
            },
        },
        messages: {
            first_name: {
                required: 'First Name is required',
            },
            last_name: {
                required: 'Last Name is required',
            },
            email: {
                required: 'Email address is required',
                email: 'Your Email was not valid'
            },
            cover_letter: {
                required: 'Cover letter is required',
                filesize: 'File must be less then 3MB'
            },
            cv: {
                required: 'CV is required',
                filesize: 'File must be less then 5MB'
            }
        },
        submitHandler: function (form) {
            const dataEntire = Object.fromEntries(new FormData(form).entries());
            const button = $('#careerFormBlock button.linkItem');
            dataEntire['cv'] =  $('input[name=cv]')[0].defaultValue;
            dataEntire['cover_letter'] =  $('input[name=cover_letter]')[0].defaultValue;
            if ($(form).valid()) {
                button.attr('disabled', 'disabled');
                $.ajax({
                    method: 'POST',
                    url: `/careers/create`,
                    data: JSON.stringify(dataEntire),
                    contentType: "application/json",
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        if (data === 1) {
                            toggleCallbackPopup();
                            form.reset();
                            changeFileHtml(`.fileInput .fileName`, ``);
                            button.removeAttr("disabled");
                        }
                    },
                    error: function () {
                        toggleCallbackPopup(true, false);
                        button.removeAttr("disabled");
                    }
                });
            }
        },
    });
});
