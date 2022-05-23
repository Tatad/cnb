var csrf_token =  document.querySelector('meta[name="csrf-token"]').content;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    error: function (res) {
        if (res.status == 401) {
            window.location = '/dashboard/login?logout=1';
        }
    }
});


function dateFormat(date) {
    var dd = String(date.getDate()).padStart(2, '0');
    var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = date.getFullYear();
    return yyyy + '-' + mm + '-' + dd;
}

function filterByDate(day) {
    let dayesInMSCDS = 1000 * 60 * 60 * 24 * day;
    let today = new Date();
    let startDay = new Date(today.getTime() - dayesInMSCDS);
    return '&to=' + dateFormat(today) + '&from=' + dateFormat(startDay)
}

function ajaxRequest(url, method, data, callback) {
    let settings = {
        method: method,
        url: url,
        contentType: "application/json",
        dataType: 'json',
        success: function (response) {
            callback(response);
        }
    }
    if (method !== "GET") {
        settings.data = JSON.stringify(data);
    }
    $.ajax(settings);
}



$( document ).ready(function() {

    CKEDITOR.replaceClass = 'ckeditor';
    $(".editor_form").on('submit', function (e) {
        let desc = $(this).find('.ql-editor').html();
        $(this).find('.editor_desc').val(desc);
    })

    $('.select2').select2({
        dropdownAutoWidth: true,
        width: '100%'
    });


    $('.dateTimepicker').datetimepicker({
        dateFormat: "yy-mm-dd"
    });

    $('.datepicker-ui').datepicker({
        dateFormat: "yy-mm-dd"
    });
    $('.timepicker').timepicker({
        twelveHour: false
    });


    /*Call Back Requests Dashboard*/
    var galleries_table = $("#galleries_table").DataTable({
        responsive: false,
        processing: true,
        serverSide: true,
        ajax: "/admin/galleries/list",
        stateSave: true,
        searching: true,
        columnDefs: [
            {
                targets: 1,
                orderable: false
            }
        ]
    });

    $(document).on('click', '.delete-gallery', function (e) {
        e.preventDefault();
        var _this = $(this);
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Cancel',
                delete: 'Delete'
            }
        }).then(function (willDelete) {
            if (willDelete) {
                swal("Item has been deleted!", {
                    icon: "success",
                    timer: 2000,
                    buttons: false
                }).then(function() {
                    ajaxRequest(_this.attr('href'), "delete", {}, function () {
                        galleries_table.draw();
                    })
                })
            }
        });
    })

    var team_table = $("#team_table").DataTable({
        responsive: false,
        processing: true,
        serverSide: true,
        ajax: "/admin/team/list",
        stateSave: true,
        searching: true,
        columnDefs: [
            {
                targets: 2,
                orderable: false
            }
        ]
    });

    $(document).on('click', '.delete-team', function (e) {
        e.preventDefault();
        var _this = $(this);
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Cancel',
                delete: 'Delete'
            }
        }).then(function (willDelete) {
            if (willDelete) {
                swal("Item has been deleted!", {
                    icon: "success",
                    timer: 2000,
                    buttons: false
                }).then(function() {
                    ajaxRequest(_this.attr('href'), "delete", {}, function () {
                        team_table.draw();
                    })
                })
            }
        });
    })

    /*Galleries Dashboard*/
    var call_back_table = $("#call_back_table").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: "/admin/call_back/list",
        stateSave: true,
        searching: true,
        columnDefs: [
            {
                targets: 4,
                orderable: false
            },
            {
                targets: 5,
                orderable: false
            }
        ]
    });

    $(document).on('click', '.delete_call_back', function (e) {
        e.preventDefault();
        var _this = $(this);
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Cancel',
                delete: 'Delete'
            }
        }).then(function (willDelete) {
            if (willDelete) {
                swal("Item has been deleted!", {
                    icon: "success",
                    timer: 2000,
                    buttons: false
                }).then(function() {
                    ajaxRequest(_this.attr('href'), "delete", {}, function () {
                        call_back_table.draw();
                    })
                })
            }
        });
    })

    $(document).on('click', '.copy_email_address', function (e){
        e.preventDefault();
        var dataUrl = $(this).attr("data-url");
        // Create a "hidden" input
        var aux = document.createElement("input");

        // Assign it the value of the specified element
        aux.setAttribute("value", dataUrl);

        // Append it to the body
        document.body.appendChild(aux);

        // Highlight its content
        aux.select();

        // Copy the highlighted text
        document.execCommand("copy");

        // Remove it from the body
        document.body.removeChild(aux);
    })


    $(".add_btn").on('click', function (e) {
        e.preventDefault();
        var thing = $(this).parent().children(':first-child');

        if (thing.find('.select2_custom').length) {
            thing.find('.select2_custom').select2('destroy');
        }

        var item = thing.clone(true, true);
        item.find(".delete_btn").each(function (i, e) {
            $(e).parent().remove();
        })
        item.find(".delete_btn_service").each(function (i, e) {
            $(e).parent().remove();
        })
        if (item.find('.dropify').length) {
            item.find('.dropify').each(function (i, e) {
                var cur_par = $(e).parents('.dropify-wrapper');
                $('<input type="file" name="' + $(e).attr('name') + '" class="dropify">').insertBefore(cur_par);
                cur_par.remove();
            })
        }

        var count = $(".ckeditor").length;
        item.find("#cke_ckeditor").remove();
        item.find(".cke_inner").remove();
        item.find(".ckeditor").each(function (i, e) {
            $(e).attr('id', 'ckeditor_' + count)
        })

        item.find('input:not([type="checkbox"])').val('');
        item.find('input[type="checkbox"]').prop('checked', false);
        item.find('textarea').val('');
        var section = item.first().attr('data-section')
        if(section === 'service_info_with_image'){
            item.prepend(`<div class="col s12"><a href="#" class="delete_btn_service right"><i class="material-icons">delete</i></a></div>`);
        }
        else {
            item.append('<div class="col s1"><a href="#" class="delete_btn right"><i class="material-icons">delete</i></a></div>');
        }
        item.insertBefore($(this));

        item.find(".ckeditor").each(function (i, e) {
            CKEDITOR.replace($(e).attr('id'));
        })


        if ($(this).hasClass('no_rename')) {

        } else if ($(this).hasClass('second_replace')) {
            item.find('input, textarea, select').each(function (i, e) {
                var text = replaceNum($(e).attr('name'), item.index(), 2);
                $(e).attr('name', text);
            });
        } else {
            item.find('input, textarea, select').each(function (i, e) {
                var text = replaceNum($(e).attr('name'), item.index(), 1);
                $(e).attr('name', text);
            });
        }

        $('.select2_custom').select2();
        $('.dropify').dropify();
    })

    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault()
        $(this).parent().parent().remove();
    })

    $(document).on('click', '.delete_btn_service', function (e) {
        e.preventDefault()
        $(this).parent().parent().remove();
    })

});



function replaceNum(text, replace, num, prefix) {
    var nth = 0;
    var rpl =  RegExp("[0-9]", "g")
    if(prefix){
        rpl = new RegExp(prefix,"g");
    }
    text = text.replace(rpl, function(match, i, original) {
        nth++;
        return (nth == num) ? replace : match;
    });
    return text;
}
