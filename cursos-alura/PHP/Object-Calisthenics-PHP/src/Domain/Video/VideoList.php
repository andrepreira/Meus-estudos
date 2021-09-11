<?php

// PRECISO RETIRAR A TIPAGEM ARRRAY da propriedade $videos (private array $videos) 
//EM inMemoryVideoRepository.php e subistituir pela tipagem dessa classe 
// (private VideoList $videos)
// DESAFIO: https://cursos.alura.com.br/course/object-calisthenics-exercitando-orientacao-objetos/task/81934

namespace Alura\Calisthenics\Domain\Video;

class VideoList
{
    private array $videos;

    public function __construct()
    {
        $this->videos;
    }

    public function filterVideosList($videos, $functionCallBack): VideoList
    {
       return array_filter($videos, $functionCallBack);
    }

    public function add(Video $video): Video
    {
        return $this->videos[] = $video;
    }
}