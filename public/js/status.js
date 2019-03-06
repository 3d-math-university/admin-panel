$('#active').on('change', function(){
    $.ajax({
        url: "/api/status",
        method: 'POST',
        data: ({id: $(this).attr('data-id'),
                value: $(this).val()})
    });
    console.log($(this).attr('data-id'));
});