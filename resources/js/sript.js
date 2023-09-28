$(document).ready(function(){

    $('#button').click(function() {
        cepElement = $('#cep').val();
        url = 'app/http/dispach.php';
        
        $.post(url, cepElement, function(data) {
            data = JSON.parse(data);
            table = elements(data);
            $('#table').append(table);
		});
        
    });

    elements = (function(data){

        var html = '';

        html += '<tr>';
        html += '<th>Cep</th>';
        html += '<th>Lougradoura</th>';
        html += '<th>Bairro</th>';
        html += '<th>Cidade</th>';
        html += '<th>UF</th>';
        html += '<th>ibge</th>';
        html += '<th>gia</th>';
        html += '</tr>';

        html += '<tr>';
        html += '<td>'+ data['cep'] +'</td>';
        html += '<td>'+data['logradouro']+'</td>';
        html += '<td>'+data['bairro']+'</td>';
        html += '<td>'+data['localidade']+'</td>';
        html += '<td>'+data['uf']+'</td>';
        html += '<td>'+data['ibge']+'</td>';
        html += '<td>'+data['gia']+'</td>';
        html += '</tr>';
        return html;
    });

})


