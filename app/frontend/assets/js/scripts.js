//Vérification du formulaire d'envoi : uniquement des nombre compris entre 0 et 99
$(document).ready(function(){
    $(document).on("click","#button-addon2", function (e){
        e.preventDefault();
        let data = parseInt($(".form-control").val());
        if(data < 0 || data > 99 || isNaN(data)){
            $(".error").fadeIn('fast',function(){
                $(".error").html('Entrez un nombre compris entre 0 et 99');
            });
        }
        else{
            $('#form1').submit();
        }
    })

    $(document).on('keyup','.form-control', function(){
        $(".error").fadeOut('fast',function(){
            $(".error").html('');
        });
    })
})