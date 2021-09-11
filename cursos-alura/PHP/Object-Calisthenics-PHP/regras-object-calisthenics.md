# Regras - Object Calisthenics

1. Não usar getters e setters
   1. 1. Tell, Don't ask
2.  Ter apenas um nível de identação por método
3.  NUNCA use ELSE
4.  Envolva seus tipos primitivos (caso eles tenham comportamentos)
5.  Coleção de primeira classe
6.  Apenas um "ponto" por linha ou apenas um método de acesso por instrução
    6. 1. "Não converse com estranhos" (Lei de Demeter) 
          6. 1. 1. http://wiki.c2.com/?LawOfDemeter
    6. 2. Interface fluente (chamar o mesmo método várias vezes), é uma exceção à essa regra
   
7. NUNCA abrevie 
8. Mantenha suas classes (máx. 50 linhas) e pacotes pequenos (máx. 10 classes). (paciência com essa, pois esses valores são apenas referências !!)
   
9.  Tenha, no máximo, 2 propriedades por classe (tenha paciência com essa, pois esse número pode variar. Ex: 5 propriedades!!)

Object Calisthenics são exercícios de programação, formalizados em 9 regras inventadas por Jeff Bay no seu livro 'The ThoughtWorks Antholigy'.