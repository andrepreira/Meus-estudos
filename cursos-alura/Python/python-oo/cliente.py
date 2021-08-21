class Cliente:
    def __init__(self, nome):
        self.__nome = nome

    @property
    def nome(self):
        print("chamando um @property nome()")
        return self.__nome.title()

    @nome.setter
    def nome(self, nome):
        print("chamando um setter nome()")
        self.__nome = nome