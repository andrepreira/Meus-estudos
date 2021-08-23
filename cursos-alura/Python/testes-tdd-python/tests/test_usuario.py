from src.leilao.dominio import Usuario, Leilao

import pytest

from src.leilao.excecoes import LanceInvalido


@pytest.fixture
def vini():
    return Usuario('Vini', 100.0)

@pytest.fixture
def leilao_celular():
    return Leilao('Celular')

def test_deve_subtrair_valor_da_carteira_do_usuario_quando_esse_propor_um_lance(vini, leilao_celular):

    vini.propoe_lance(leilao_celular, 50.0)

    assert vini.carteira == 50.0

def test_deve_permitir_propor_lance_quando_o_valor_eh_menor_que_o_da_carteira(vini, leilao_celular):

    vini.propoe_lance(leilao_celular, 1.0)

    assert vini.carteira == 99.00

def test_deve_permitir_propor_lance_quando_o_valor_eh_igual_ao_valor_da_carteira(vini, leilao_celular):

    vini.propoe_lance(leilao_celular, 100.0)

    assert vini.carteira == 0

def test_nao_deve_permitir_propor_lance_com_valor_maior_que_o_da_carteira(vini, leilao_celular):

    with pytest.raises(LanceInvalido):
        vini.propoe_lance(leilao_celular, 200.0)

