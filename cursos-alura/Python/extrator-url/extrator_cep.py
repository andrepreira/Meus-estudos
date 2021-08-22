endereco = 'Av Menino Marcelo, 5585, apto 508 torre 4, Antares, Maceió, AL, 57083-410'

import re # Regular Expression -- RegEx

# 5 digitos + hífen (opcional) + 3 dígitos

padrao = re.compile('[0-9]{5}[-]{0,1}[0-9]{3}')
busca = padrao.search(endereco) # Match
if (busca):
    cep = busca.group()
    print(cep)