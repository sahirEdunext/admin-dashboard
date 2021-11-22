$(document).ready(function () {
    //selectAllItems checked 
    var selectAllItems = "#select-all";
    var checkboxItem = ":checkbox";

    $(selectAllItems).click(function () {

        if (this.checked) {
            $(checkboxItem).each(function () {
                this.checked = true;
            });
        } else {
            $(checkboxItem).each(function () {
                this.checked = false;
            });
        }

    });

    //selectAllItems checked  end

    // image hover effect gloabally
    // $(".imgHover").hover(function () {
    //     $(this).attr("src", function (index, attr) {
    //         return attr.replace(".svg", "-active.svg");
    //     });
    // }, function () {
    //     $(this).attr("src", function (index, attr) {
    //         return attr.replace("-active.svg", ".svg");
    //     });
    // });
    // image hover effect gloabally

    // dropdown no hide on inside click 
    $(".clickNoHide").click(function (e) {
        e.stopPropagation();
    })
    // dropdown no hide on inside click 

    // table filter pop up 
    $("input.tblCheckBox:checkbox:not(:checked)").each(function () {
        var column = "table ." + $(this).attr("name");
        $(column).hide();
    });

    $("input.tblCheckBox:checkbox").click(function () {
        var column = "table ." + $(this).attr("name");
        $(column).toggle();
    });
    // table filter pop up 

    // list filter function  
    function filter(element, what) {
        var value = $(element).val();
        value = value.toLowerCase().replace(/\b[a-z]/g, function (letter) {
            return letter.toUpperCase();
        });

        if (value == '') {
            $(what + '  > li').show();
        }
        else {
            $(what + 'li label:not(:contains(' + value + '))').hide();
            $(what + 'li label:contains(' + value + ')').show();
        }
    };
    // list filter function  

    $('.content-wrapper').click(function () {
        $('.light-skin').addClass('sidebar-collapse');
        $('.light-skin').removeClass('sidebar-open');
    });

    $('.radion_01').click(function (event) {
        //remove all pre-existing active classes
        $('.radion_01').removeClass('active');

        //add the active class to the link we clicked
        $(this).addClass('active');

        event.preventDefault();
    });
});

function onSelectUserType(userType) {
    if (userType == 1) {
        $("#html")[0].checked = true;
    } else if (userType == 2) {
        $("#html2")[0].checked = true;
    } else if (userType == 3) {
        $("#html3")[0].checked = true;
    } else if (userType == 4) {
        $("#html4")[0].checked = true;
    } else if (userType == 5) {
        $("#html5")[0].checked = true;
    }
}

// Datepicker js Starts Here

function log(message) {
    // document.querySelector('#appointment-datepicker').value = message;
}

window.onload = function () {
    duDatepicker('#bulk-sms-datepicker, #stu-sms-datepicker, #input-date,#bulk-sms-datepicker_01,#bulk-sms-datepicker_ac', {
        format: 'dd-mm-yyyy',
        events: {
            dateChanged: function (data) {
                log('Date:' + data.date)
            }
        }
    })
}
// Datepicker js End Here

// Add new row in income information table start here

function insertNewRow(table, chName) {
    // debugger
    let newRow = document.getElementById(table).insertRow(-1);
    newRow.innerHTML =
        `
        <td>
            <div class="checkbox checkCenter">
                  <input type="checkbox" name=${chName}>
                  <label></label>
            </div>
        </td>                                                          
      <td>
            1
       </td>
        <td>
            <div class="tbl-input-field">
               <input type="text" class="form-control txt-field" value="">
            </div>
        </td>

        <td class="">
            <div class="tbl-input-field">
               <input type="text" class="form-control txt-field" value="">
            </div>
        </td>
        
        <td class="">
            <div class="tbl-input-field">
               <input type="text" class="form-control txt-field" value="">
            </div>
        </td>
    `
    newRow.className = "sk_row_hover";
    newRow.setAttribute("role", "row");
}

// Add new row in income information table end here


// Custom Select Box Js Code Start Here


$('.selectpicker').each(function () {
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option:selected').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function (e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function () {
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        $this.trigger('change');
        //console.log($this.val());
    });

    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});


// Custom Select Box Js Code End Here



function checkAllCheckBox(checkname, bx) {
    for (i = checkname.length; i--;)
        checkname[i].checked = bx.checked;
}



// sahir scripts
$("document").ready(function () {
    // sidebar menu color change on hover 
    $(".sidebar-menu li a").mouseenter(function () {
        $(this).children("img").attr('src', function (index, attr) {
            return attr.replace('.svg', '-hover.svg');
        });
    });

    $(".sidebar-menu li a").mouseleave(function () {
        $(this).children("img").attr('src', function (index, attr) {
            return attr.replace('-hover.svg', '.svg');
        });
    });

    $(".sidebar-menu li.active a").mouseenter(function () {
        $(this).children("img").attr('src', function (index, attr) {
            return 
        });
    });

    $(".sidebar-menu li.active a").mouseleave(function () {
        $(this).children("img").attr('src', function (index, attr) {
            return
        });
    });

    $(".hoverBtn").mouseenter(function () {
        $(this).children("img").attr('src', function (index, attr) {
            return attr.replace('.svg', '-hover.svg');
        });
    });
    $(".hoverBtn").mouseleave(function () {
        $(this).children("img").attr('src', function (index, attr) {
            return attr.replace('-hover.svg', '.svg');
        });
    });
    // sidebar menu color change on hover 

    // dynamic menu 
    var path = window.location.pathname.split("/").pop();
    var target = $('.sidebar-menu li a[href="/api/std/' + path + '"]');
    target.parent().addClass('active');
    $('.sidebar-menu li.active').parents('li').addClass('active');
    $(".sidebar-menu li.active a img").attr('src', function (index, attr) {
        return attr.replace('.svg', '-hover.svg');
    });
    // dynamic menu 
})

// upload button function 
function uploadFilesShow(source) {
    console.log(source.files)
    for (var i = 0; i < $(source).prop("files").length; i++) {
        let file = $(source).prop("files")[i];
        var uploadBtnCnt = "";
        uploadBtnCnt = uploadBtnCnt + `<div class=" uploaded-div me-3 "><img class="pe-3" src="assets/images/excelIcon.png" alt=""> <div> <p class="up-file-txt"> ${file.name} </p> <p class="file-size "> ${file.size} kb </p></div></div>`;
        $(".uploaded-file-box").append(uploadBtnCnt);
    }
}
// upload button function