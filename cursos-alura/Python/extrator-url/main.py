# Extrator de url no padrão procedural

# url = 'https://bytebank.com/cambio?moedaOrigem=real&moedaDestino=dolar&quantidade=100'
url = ' '

# Sanitização da url
url = url.strip()

# Validação URL
if(url == ''):
    raise ValueError('A url está vazia!')

# separa o https
print(url)
url_https = url[0:8]
print(url_https)

# separa base e os parâmetros

procura_get  = url.find('?')
url_base = url[:procura_get]
print(url_base)
url_parametros = url[procura_get+1:]
print(url_parametros)

# Busca o valor de um parâmetro

parametro_busca = 'moedaDestino'
indice_parametro = url_parametros.find(parametro_busca)
indice_valor = indice_parametro + len(parametro_busca) + 1
indice_e_comercial = url_parametros.find('&', indice_valor)
print(indice_e_comercial)
if indice_e_comercial == -1:
    valor = url_parametros[indice_valor:]
else:
    valor = url_parametros[indice_valor:indice_e_comercial]
print(valor)