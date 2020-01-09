$(function(){
    $('form[name="formLogin"]').submit(function(event){
        event.preventDefault();
        

        // var username = $(this).find('input#username').val();
        // var password = $(this).find('input#password').val();
        // alert('teste: ' + username + ' senha: ' + password);

        $.ajax({
            url: "/login",
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function(response){
                console.log(response);

                if(response.success === true){
                    window.location.href = "/proprietarios";
                } else {
                    alert('Erro! ' + response.message);
                }
                console.log(response);
            }
        });
    });
});