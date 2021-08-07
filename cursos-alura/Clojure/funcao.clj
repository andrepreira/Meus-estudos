(defn imprime-mensagem []
  (println "---------------------")
  (println "Bem vindo ao estoque!")  )

(imprime-mensagem)



(defn aplica-desconto [valor-bruto]
    (* valor-bruto 0.9))

(aplica-desconto 100)

(defn valor-descontado
    "Retorna o valor descontado que é 90% do valor bruto"
    [valor-bruto]
    (* valor-bruto 0.9))

(valor-descontado 1000)

(defn valor-descontado
    "Retorna o valor com desconto de 10%"
    [valor-bruto]
    (* valor-bruto (- 1 0.1)))

(defn valor-descontado
    "Retorna o valor com desconto de 10%"
    [valor-bruto]
    ;; Isso é uma má prática. Use let!
    (def desconto 0.1) 
    (* valor-bruto (- 1 desconto)))

(defn valor-descontado
    "Retorna o valor com desconto de 10%"
    [valor-bruto]
    (let [desconto 0.1]
        (* valor-bruto (- 1 desconto)))) 


(defn valor-descontado
    "Retorna o valor com desconto de 10%"
    [valor-bruto]
    (let [desconto (/ 10 100)]
        (println "Calculando o valor de " desconto)
        (* valor-bruto (- 1 desconto)))) 


(defn valor-descontado
    "Retorna o valor com desconto de 10%"
    [valor-bruto]
    (let [taxa-de-desconto (/ 10 100)
          desconto          (* valor-bruto taxa-de-desconto)  ]
        (println "Calculando o valor de " desconto)
        (- valor-bruto desconto))) 

(valor-descontado 1000)

(if (> 500 1000)
    (println "Maior")
    (println "Menor ou Igual"))

(defn valor-descontado
    "Retorna o valor com desconto de 10% 
    se o valor bruto for estritamente maior que 100."
    [valor-bruto]
    (if (> valor-bruto 100)
        (let [taxa-de-desconto (/ 10 100)
            desconto          (* valor-bruto taxa-de-desconto)  ]
            (println "Calculando o valor de " desconto)
            (- valor-bruto desconto))
        valor-bruto))

(valor-descontado 1000)