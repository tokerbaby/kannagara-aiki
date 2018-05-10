// Change submit button text after submition
/*
$("#save").on('click',function(){
    var $btnElm = $(this);
    $("form").submit(function() {
        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data : $(this).serialize(),
            success : function (data){
                $btnElm.text('Next');
            }
        });
    });
});