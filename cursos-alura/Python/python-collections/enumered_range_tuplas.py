idades = [15, 87, 32, 56, 32, 49, 37]

for tamanho in range(len(idades)):
    print(tamanho, idades[tamanho])

print(f'OUTRA ALTERNATIVA É USAR O ENUMERATE')

enum = list(enumerate(idades))

print(enum)

print(f'forma LAZY')

for indice, idade in enumerate(idades):
    print(indice, 'x', idade)

print(f'Desenpacotando a tupla')

usuario = [
    ('André', 29, 19992),
    ('Quézia', 24, 1997),
    ('Diel', 28, 1993)
]

for nome, idade, nascimento in usuario:
    print(nome, ' vs ',nascimento)

print(f'Desenpacotando a tupla ignorando o resto')

for nome, _, _ in usuario:
    print(nome)
