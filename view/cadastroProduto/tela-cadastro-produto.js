function cadastrar(){

    let valida = true

    $('input').each(function(e){


      if ($(this).val() == "") {

        valida = false

      }

    })

    if (valida) {

      alert('Cadastro Realizado!')

  
    }

}