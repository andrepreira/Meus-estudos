<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos implements InterfaceControladorRequisicao{

    private $repositorioDeCursos;

    public function __construct(){
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
       $this-> repositorioDeCursos = $entityManager
            ->getRepository(Curso::class);
    }

    public function processaRequisicao(): void{

        $titulo = 'Lista de Cursos';
        $cursos = $this-> repositorioDeCursos->findAll();
        require __DIR__ .'/../../view/cursos/listar-cursos.php';
    }
}