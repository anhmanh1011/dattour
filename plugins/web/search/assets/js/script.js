$('#inputSearch').keyup( function(){
    var $form = $(this).closest('form');
    $form.request('onSearch');
});