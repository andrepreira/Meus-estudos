import pytest as pytest

from unittest import TestCase
from src.leilao.dominio import Usuario, Lance, Leilao
from src.leilao.excecoes import LanceInvalido


class TestLeilao(TestCase):

    def setUp(self):
        self.gui = Usuario('Gui', 500.0)
        self.lance_do_gui = Lance(self.gui, 150.0)
        self.leilao = Leilao('Celular')

        leilao = Leilao('Celular')

    def test_deve_retornar_o_maior_e_o_menor_valor_de_um_lance_quando_adicionados_em_ordem_crescente(self):

        self.yuri = Usuario('Yuri', 500.0)
        self.lance_do_yuri = Lance(self.yuri, 100.0)
        self.leilao.propoe(self.lance_do_yuri)
        self.leilao.propoe(self.lance_do_gui)

        menor_valor_esperado = 100
        maior_valor_esperado = 150

        self.assertEqual(menor_valor_esperado, self.leilao.menor_lance)
        self.assertEqual(maior_valor_esperado, self.leilao.maior_lance)

    def test_nao_deve_permitir_propor_um_lance_em_ordem_decrescente(self):
        with self.assertRaises(LanceInvalido):
            self.yuri = Usuario('Yuri', 500)
            self.lance_do_yuri = Lance(self.yuri, 100.0)

            self.leilao.propoe(self.lance_do_gui)
            self.leilao.propoe(self.lance_do_yuri)

    def test_deve_retornar_o_mesmo_valor_para_o_maior_e_menor_lance_quando_leilao_tiver_um_lance(self):

        self.leilao.propoe(self.lance_do_gui)

        menor_valor_esperado = 150
        maior_valor_esperado = 150

        self.assertEqual(menor_valor_esperado, self.leilao.menor_lance)
        self.assertEqual(maior_valor_esperado, self.leilao.maior_lance)

    def test_deve_retornar_o_maior_e_menor_valor_quando_o_leilao_tiver_tres_lance(self):
        yuri = Usuario('Yuri', 500)
        lance_do_yuri = Lance(yuri, 100.0)

        vini = Usuario('Vini', 500)
        lance_do_vini = Lance(vini, 200.0)

        self.leilao.propoe(lance_do_yuri)
        self.leilao.propoe(self.lance_do_gui)
        self.leilao.propoe(lance_do_vini)

        menor_valor_esperado = 100
        maior_valor_esperado = 200

        self.assertEqual(menor_valor_esperado, self.leilao.menor_lance)
        self.assertEqual(maior_valor_esperado, self.leilao.maior_lance)

    # se o leilão não tiver lances, deve permitir propor um lance
    def test_deve_permitir_propor_um_lance_caso_o_leilao_nao_tenha_lances(self):
        self.leilao.propoe(self.lance_do_gui)

        quantidade_de_lances_recebido =  len(self.leilao.lances)
        self.assertEqual(1, quantidade_de_lances_recebido)

    # se o ultimo usuario for diferente, deve permitir propor o lance
    def test_deve_permitir_propor_um_lance_caso_o_ultimo_usuario_seja_diferente(self):
        yuri = Usuario('Yuri', 500)
        lance_do_yuri = Lance(yuri, 200.0)

        self.leilao.propoe(self.lance_do_gui)
        self.leilao.propoe(lance_do_yuri)

        quantidade_de_lances_recebidos = len(self.leilao.lances)

        self.assertEqual(2, quantidade_de_lances_recebidos)

    # se o ultimo usuario for o mesmo, não deve permitir propor o lance

    def test_nao_deve_permitir_propor_lances_caso_o_usuario_seja_o_mesmo(self):
        lance_do_gui_200 = Lance(self.gui, 200.0)

        with self.assertRaises(LanceInvalido):
            self.leilao.propoe(lance_do_gui_200)
            self.leilao.propoe(self.lance_do_gui)
