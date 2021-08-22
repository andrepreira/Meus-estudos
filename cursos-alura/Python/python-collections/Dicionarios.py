# print(f'adiciciona imutabilidade ao conjunto - antes: {type(conj)} -> depois: {type(conj2)}')

print(f'CRIANDO DICIONARIOS...')

aparicoes = {
    'André': 2,
    'Quézia': 1,
    'Diel': 3
}

aparicoes['Pr Edmilson'] = 4
aparicoes['Carlos'] = 666

print(f'printando um valor para uma dada chave do dicionário: {type(aparicoes)} -> {aparicoes["André"]}'
      f'ou usando get: {aparicoes.get("Quézia", -1 )} se errar aparece -1: {aparicoes.get("Quézi", -1 )}')

print(f'Completa {aparicoes}')

del aparicoes['Carlos']

print(f'Deletei o Carlos {aparicoes}')

print(f'Está lá? {"Pr Edmilson" in aparicoes}')
print(f'Está lá? {"Carlos" in aparicoes}')

print(f'Iterando nos dicionários passando pelas ELEMENTOS')
for elemento in aparicoes:
    print(elemento)

print(f'Iterando nos dicionários passando pelos CHAVES')
for elemento in aparicoes.keys():
    print(elemento)

print(f'Iterando nos dicionários passando pelos VALORES')
for elemento in aparicoes.values():
    print(elemento)

print(f'Iterando nos dicionários passando pelos OS DOIS')
for elemento in aparicoes:
    print(elemento, aparicoes[elemento])

print(f'Iterando nos dicionários passando pelos items - DESEMPACOTADO')
for chave, valor in aparicoes.items():
    print(chave, 'x', valor)

lista = ['concatenando - palavra'.format(chave) for chave in aparicoes.keys()]
print(lista)