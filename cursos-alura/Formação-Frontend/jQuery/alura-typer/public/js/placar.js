$('#botao-placar').click(mostraPlacar);
$('#botao-sync').click(sincronizaPlacar);

function inserePlacar() {
    var corpoTabela = $('.placar').find('tbody');
    var usuario = 'André';
    var numPalavras = $('#contador-palavras').text();

    var linha = novaLinha(usuario, numPalavras);
    linha.find('.botao-remover').click(removeLinha);

    corpoTabela.prepend(linha);
    $('.placar').slideDown(500);
    scrollPlacar();
}

function scrollPlacar() {
    var posicaoPlacar = $('.placar').offset().top;
    $('html, body').animate(
        {
            scrollTop: posicaoPlacar + "px"
        }, 1000);
}

function novaLinha(usuario, palavras) {
    var linha = $('<tr>');
    var colunaUsuario = $('<td>').text(usuario);
    var colunaPalavras = $('<td>').text(palavras);
    var colunaRemover = $('<td>');

    var link = $('<a>').addClass('botao-remover').attr('href', '#');
    var icone = $('<i>').addClass('small').addClass('material-icons').text('delete');

    link.append(icone);
    colunaRemover.append(link)

    linha.append(colunaUsuario);
    linha.append(colunaPalavras);
    linha.append(colunaRemover);

    return linha;

}

function removeLinha() {
    event.preventDefault();
    var linhaRemovida = $(this).parent().parent();
    linhaRemovida.fadeOut(1000);
    setTimeout(function () {
        linhaRemovida.remove();
    }, 1000);

}

function mostraPlacar() {
    $('.placar').stop().slideToggle(600);
}

function sincronizaPlacar() {
    var placar = [];
    var linhas = $('tbody>tr');

    linhas.each(function() {
        console.log(this);
    });
}