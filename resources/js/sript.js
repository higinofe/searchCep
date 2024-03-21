$(document).ready(function(){

    $('#button').click(function() {
        cepElement = $('#cep').val();
        url = 'app/http/dispach.php';
        
        $.post(url, {cep: cepElement}, function(data) {
            
            data = JSON.parse(data);

            console.log(data);
            
            if (typeof(data.error) !== 'undefined'){
                return alert(data.error);
            }

            $('#logradouro').val(data.logradouro);
            $('#complemento').val(data.complemento);
            $('#bairro').val(data.logradouro);
            $('#localidade').val(data.localidade);
            $('#uf').val(data.uf);
            $('#siafi').val(data.siafi);
            $('#ibge').val(data.ibge);
            $('#gia').val(data.gia);
            $('#ddd').val(data.ddd);
		});
       
    });
})


