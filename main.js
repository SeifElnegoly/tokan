const acceptPolicy = document.querySelector('#acceptPolicy');
acceptPolicy.addEventListener('click',function(){
    Swal.fire({
        title: 'هل توافق علي السياسات والخصوصيات بلا بلا بلا بلا',
        icon: 'question',
        iconHtml: '؟',
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
        showCancelButton: true,
        showCloseButton: true
      })
})