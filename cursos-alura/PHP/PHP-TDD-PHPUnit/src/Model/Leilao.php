<?php

namespace Alura\Leilao\Model;

class Leilao
{
    /** @var Lance[] */
    private $lances;
    /** @var string */
    private $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lances = [];
    }

    public function recebeLance(Lance $lance)
    {
        //validação que impede 2 lances pelo mesmo usuário e não são vazios
        if ( !empty($this->lances) && $this->ehDoUltimoUsuario($lance)) {
            return;
        }

        //validação que não permite mais de 5 lances por um mesmo usuário!
        $totalLancesUsuarios = $this
        ->quantidadeDeLancesPorUsuario($lance->getUsuario());

        if ($totalLancesUsuarios >= 5) {
            return;
        }

        $this->lances[] = $lance;
    }

    /**
     * @return Lance[]
     */
    public function getLances(): array
    {
        return $this->lances;
    }
    

    private function ehDoUltimoUsuario(Lance $lance): bool
    {
        $ultimoLance = $this->lances[array_key_last($this->lances)];
        return $lance->getUsuario() == $ultimoLance->getUsuario();
    }

    private function quantidadeDeLancesPorUsuario(Usuario $usuario): int
    {
        $totalLancesUsuarios = array_reduce(
            $this->lances,
            function (int $totalAcumulado, Lance $lanceAtual) use ($usuario){
                if ($lanceAtual->getUsuario() == $usuario) {
                    return $totalAcumulado + 1;
                }

                return $totalAcumulado;
            },
            0
        );

        return $totalLancesUsuarios;
    }
}
