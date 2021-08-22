from operator import attrgetter
from functools import total_ordering

@total_ordering # permite o uso de <= ou >= a partir da definição de __eq__ e __lt__
class ContaSalario:

    def __init__(self, codigo):
        self._codigo = codigo
        self._saldo = 0

    def deposita(self, valor):
        self._saldo += valor

    def __eq__(self, other):
        if type(other) != ContaSalario:
            return False
        self._codigo == other._codigo and self._saldo == outro._saldo

    def __str__(self):
        return '[>> Codigo {} Saldo {} <<]'.format(self._codigo, self._saldo)

    def __lt__(self, other):

        if self._saldo != other._saldo:
            return self._saldo <  other._saldo

        return self._codigo < other._codigo

conta_do_andre = ContaSalario(17)
conta_do_andre.deposita(500)

conta_da_quezia = ContaSalario(3)
conta_da_quezia.deposita(125)

conta_do_diel = ContaSalario(133)
conta_do_diel.deposita(125)

conta_da_linete = ContaSalario(10)
conta_da_linete.deposita(125)

contas = [conta_do_diel, conta_do_andre, conta_da_quezia]
contas.append(conta_da_linete)


print(f'Ordenação Customizada - Paradigma OO')

for conta in sorted(contas, reverse=True):
    print(conta)


print(f'Ordenação Customizada  - ATTRGETTER - Paradigma Funcional')

for conta in sorted(contas, reverse=True ,key=attrgetter("_saldo", "_codigo")):
    print(conta)

print(f'É menor? {conta_da_linete <= conta_do_andre}')