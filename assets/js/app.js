
function loadMain(name) {
    $.ajax({
        url: 'app/'+name+'.php',
        success: function(data) {
            $('#div_'+name).html(data);
            $('[data-widget="treeview"]').Treeview('init')
        }
    })
}

function loadModule(url, menu) {
    $.ajax({
        url: 'config/menu.php',
        type: 'post',
        data: {url: url, menu: menu},
        success: function (resp) {
            console.log(resp);
            $.ajax({
                url: url,
                beforeSend: function () {
                    $('#div_content').show(0);
                    $('#div_content').html('<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>' +
                        '        <div class="sk-chase">\n' +
                        '        <div class="sk-chase-dot"></div>\n' +
                        '        <div class="sk-chase-dot"></div>\n' +
                        '        <div class="sk-chase-dot"></div>\n' +
                        '        <div class="sk-chase-dot"></div>\n' +
                        '        <div class="sk-chase-dot"></div>\n' +
                        '        <div class="sk-chase-dot"></div>\n' +
                        '      </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></center>');
                },
                success: function (data) {
                    $('li').removeClass('menu-open');
                    $('a').removeClass('active');
                    $('#m-'+menu).addClass('menu-open');
                    $('#a-'+menu).addClass('active');
                    $('#s-'+menu).addClass('active');
                    $('#div_content').html(data);
                }
            })
        }
    })

}

function salirSistema() {
    Swal.fire({
        title: 'Esta Seguro/a?',
        text: "Salir del Sistema",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Salir',
        cancelButtonText: 'No!',
    });
    $('.swal2-confirm').click(function () {
        $.ajax({
            url: 'logout.php',
            success: function(data) {
                window.location='index.php?alert=1'
            }
        })
    })
}
loadMain('topbar');
loadMain('sidebar');
loadMain('footer');

function sweetModal(url, wd, fc, fin, fout) {
    $.ajax({
        url: url,
        success: function (data) {
            Swal.fire({
                title: name,
                showConfirmButton: false,
                html: data,
                showCloseButton: true,
                width: wd,
                showClass: {
                    popup: 'animate__animated ' + fin + ' animate__faster'
                },
                hideClass: {
                    popup: 'animate__animated ' + fout + ' animate_faster'
                }
            });
            $('#' + fc).focus();
        }
    })
}

function ventana2(url) {
    window.open(url,'_blank');
}

function round(num, decimales = 2) {
    var signo = (num >= 0 ? 1 : -1);
    num = num * signo;
    if (decimales === 0) //con 0 decimales
        return signo * Math.round(num);
    // round(x * 10 ^ decimales)
    num = num.toString().split('e');
    num = Math.round(+(num[0] + 'e' + (num[1] ? (+num[1] + decimales) : decimales)));
    // x * 10 ^ (-decimales)
    num = num.toString().split('e');
    return signo * (num[0] + 'e' + (num[1] ? (+num[1] - decimales) : -decimales));
}

function showModal(no, url, tp) {
    $.ajax({
        url: url,
        success: function (data) {
            $('#class_modal'+no).removeClass('modal-md').removeClass('modal-lg').removeClass('modal-xl').addClass('modal-'+tp);
            $('#div_modal_content'+no).html(data);
            $('#main_modal'+no).modal('show');
            $('#main_modal1').css('overflow-y', 'scroll')
        }
    })
}

function closeModal(no) {
    $('#main_modal'+no).modal('hide');
}


function initSelect(id, time) {
    setTimeout(function () {
        $("#"+id).selectize({
            create: true,
            sortField: "text",
        });
        $('.selectize-control').css('text-align','left');
    }, time);
}

