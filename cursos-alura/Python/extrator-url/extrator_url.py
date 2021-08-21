# Extrator de url no padrão orientado à objetos

import re

class Extrator_url:
    def __init__(self, url):
        self.url = self.sanitiza_url(url)
        self.valida_url()
    def sanitiza_url(self, url):
        if (type(url) == str):
            return url.strip()
        else:
            return ''

    def valida_url(self):
        if (not self.url):
            raise ValueError('A url está vazia!')

        padrao_url = re.compile('(http(s)?://)?(www.)?bytebank.com(.br)?/cambio')
        match = padrao_url.match(self.url)

        if not match:
            raise ValueError('A url não é válida!')

    def get_url_base(self):
        procura_get = self.url.find('?')
        url_base = self.url[:procura_get]
        return url_base

    def get_url_parametros(self):
        procura_get = self.url.find('?')
        url_parametros = self.url[procura_get + 1:]
        return  url_parametros

    def get_valor_parametro(self, parametro_busca):
        indice_parametro = self.get_url_parametros().find(parametro_busca)
        indice_valor = indice_parametro + len(parametro_busca) + 1
        indice_e_comercial = self.get_url_parametros().find('&', indice_valor)

        print(f' Tem &? {indice_e_comercial != -1}') # testa se tem ou não &

        if indice_e_comercial == -1:
            valor = self.get_url_parametros()[indice_valor:]
        else:
            valor = self.get_url_parametros()[indice_valor:indice_e_comercial]
        return valor
    def __len__(self):
        return len(self.url)

    def __str__(self):
        return 'URL:' + self.url + '\n' + 'Parâmetros: ' + \
               self.get_url_parametros() + '\n' + 'URL base: ' + self.get_url_base()

    def __eq__(self, other):
        return self.url == other.url

url = 'https://www.bytebank.com/cambio?moedaOrigem=real&moedaDestino=dolar&quantidade=100'
url2 = None
extrator_url = Extrator_url(url)
extrator_url_2 = Extrator_url(url)

print(f'São iguais? {extrator_url == extrator_url_2}')
print(f'Têm identidades iguais? {extrator_url is extrator_url_2}')

print("O tamanho da URL é: ", len(extrator_url))
print(extrator_url)
# extrator_url = Extrator_url(url2)
valor_quantidade = extrator_url.get_valor_parametro('quantidade')
print(valor_quantidade)

##### DESAFIO #######
# Conversão de dolar para real

VALOR_DOLAR = 5.50 # 1 dólar = 5.50 reais
moeda_origem = extrator_url.get_valor_parametro('moedaOrigem')
moeda_destino = extrator_url.get_valor_parametro('moedaDestino')
quantidade = extrator_url.get_valor_parametro('quantidade')

if (moeda_origem == 'real' and moeda_destino == 'dolar'):
    valor_conversao = int(quantidade)/VALOR_DOLAR
    print('O valor de R$' + quantidade + ' reais é igual a $' + str(valor_conversao) + ' dolares.')
elif (moeda_origem == 'dolar' and moeda_destino == 'real'):
    valor_conversao = int(quantidade) * VALOR_DOLAR
    print('O valor de $' + quantidade + ' dolares é igual a R$' + str(valor_conversao) + ' reais.')
else:
    print(f'Câmbio de {moeda_origem} para {moeda_destino} não está disponível.')
