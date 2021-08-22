usuarios_data_science = [15, 23, 43, 56]
usuario_marchine_learning = [13, 23, 56, 42]

assistiram = usuarios_data_science.copy()
assistiram.extend(usuario_marchine_learning)

assistiram = set(assistiram)
print(assistiram)

for user in assistiram:
    print(user)

c1 = {1,5,3,6,76,32}
c2 = {14,5,3,64,76,3}

uniao = c1 | c2
print(f'união inclusiva entre os conjutos c1 e c2: {uniao}')

interseccao = c1 & c2
print(f' intersecção entre conjuntos c1 e c2: {interseccao}')

diferenca = c1 - c2
print(f'diferença entre os conjuntos c1 e c2: {diferenca}')

print(f'fez c1 e não fez c2? {32 in diferenca}')

ou_exclusivo = c1 ^ c2
print(f'união exclusiva entre os conjuntos c1 e c2: {ou_exclusivo}')

conj = {1,5,76,85,53,36}
conj.add(666)
print(f'adiciciona elemento ao conjunto: {conj}')

conj2 = frozenset(conj)
print(f'adiciciona imutabilidade ao conjunto - antes: {type(conj)} -> depois: {type(conj2)}')

print(f'Split com textos')

meu_texto = 'Bem vindo meu nome é André eu gosto muito de Python e estou estudando bastante nesse sábado frio' \
            'escrevendo sem virgula kkkkk'
print(f'texto quebrado com split')
print((meu_texto.split()))

print(f'dicionário de palavras com set e split')
print(set(meu_texto.split()))