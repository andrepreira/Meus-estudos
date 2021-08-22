from collections import defaultdict, Counter

meu_texto = 'Bem vindo meu nome é André eu gosto muito de Python e estou estudando bastante nesse sábado frio' \
            'escrevendo sem virgula kkkkk'
meu_texto = meu_texto.lower()

aparicoes = {}

for palavra in meu_texto.split():
     ate_agora = aparicoes.get(palavra, 0)
     aparicoes[palavra] = ate_agora + 1

print(aparicoes)

print(f'Mesmo dicionário usando defaultdict...')

aparicoes = defaultdict(int)

for palavra in meu_texto.split():
     aparicoes[palavra] += 1

print(aparicoes)

print(f'Mesmo dicionário usando o Counter...')

aparicoes = Counter(meu_texto.split())
print(aparicoes)

print(f'usando defaultdict para outros tipos...')

class Conta:
    def __init__(self):
        print('Imprimindo uma conta..')

contas = defaultdict(Conta)
print(contas[15])
print(contas[17])
print(contas[19])