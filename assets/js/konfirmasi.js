function hapusMenu(url) {

    swal.fire({
        title: 'are you sure?',
        text: "Delete Menu ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#black',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete Menu!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusRole(url) {

    swal.fire({
        title: 'are you sure?',
        text: "Delete Role ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#black',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete Role!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })

}

function hapusSubmenu(url) {

    swal.fire({
        title: 'are you sure?',
        text: "Delete Submenu! ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#black',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete Submenu!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusToko(url) {
    swal.fire({
        title: 'are you sure?',
        text: "Delete! ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#black',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}