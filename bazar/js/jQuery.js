
$(document).ready(function(){
    contact();
})

function validerEmail(email,reg){
    if(reg.test(email)){
        return true;
    }else{
        return false;
    }

}

function contact(){
    $valid= true;
    $(document).on('click','.envoyer',function(){
       
        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ ;

        var prenom=$('#c_fname').val();
        var nom=$('#c_lname').val();
        var email=$('#c_email').val();
        var subject=$('#c_subject').val();
        var message=$('#c_message').val();

        if(prenom==""){
            console.log('Vous devez remplir ce champs');
            $('#error_prenom').html('Vous devez remplir ce champs');
        }
         if(nom==""){
            console.log('Vous devez remplir ce champs');
            $('#error_nom').html('Vous devez remplir ce champs');

        }
        if(email==""){
            console.log('Vous devez remplir ce champs');
            $('#error_email').html('Vous devez remplir ce champs');

            
           
        }
         if(!validerEmail(email,reg)){
            $("#c_email").css("border","2px solid red");
            $("#emailMsg").html("forme invalide");

        }
       
        
       
        if(subject==""){
            console.log('Vous devez remplir ce champs');
            $('#error_subject').html('Vous devez remplir ce champs');

        }
         if(message==""){
            console.log('Vous devez remplir ce champs');
            $('#error_message').html('Vous devez remplir ce champs');

        }
        else{
            $.ajax(
                {
                    url:'ajax/cnt.php',
                    method: 'post',
                    data:{Prenom:prenom,Nom:nom,Email:email,Subject:subject,Message:message},
                    success:function(data){
                        $('#success').html(data);
                        $('form').trigger('reset');
                        $('#error_prenom').html('');
                        $('#error_nom').html('');
                        $('#error_email').html('');
                        $('#error_subject').html('');
                        $('#error_message').html('');

                    }
                }
                

            )
        }
        
           
        
    })
}