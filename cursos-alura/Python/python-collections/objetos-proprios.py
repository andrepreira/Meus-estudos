class ContaCorrente:
    def __init__(self, codigo):
        self.codigo = codigo
        self.saldo = 0

    def deposita(self, valor):
        self.saldo += valor

    def __str__(self):
        return '[>> Codigo {} Saldo {} <<]'.format(self.codigo, self.saldo)

conta_do_andre = ContaCorrente(15)
conta_do_andre.deposita(500)
print(conta_do_andre)

conta_da_quezia = ContaCorrente(47014)
conta_da_quezia.deposita(250.0)
print(conta_da_quezia)

contas = [conta_do_andre, conta_da_quezia]
for conta in contas:
    print(conta)

def deposita_para_todas(contas):
    for conta in contas:
        conta.deposita(100)
print(contas[0], contas[1])
deposita_para_todas(contas)
print(contas[0], contas[1])

andre = ('André', 29, 1992) # tupla
quezia = ('Quézia', 24, 1997) #tupla

usuarios = [andre, quezia]

usuarios.append(('Diel', 28, 1993))

print(usuarios)

