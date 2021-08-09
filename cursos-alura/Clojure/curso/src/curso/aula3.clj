(ns curso.aula3)

(defn valor-descontado
  "Retorna o valor com desconto de 10% se o valor bruto for estritamente maior que 100."
  [valor-bruto]
  (if (> valor-bruto 100)
    (let [taxa-de-desconto (/ 10 100)
          desconto         (* valor-bruto taxa-de-desconto)]
      (println "Calculando desconto de " desconto)
      (- valor-bruto desconto))
    valor-bruto))

(println (valor-descontado 1000))

(println (valor-descontado 100))



; PREDICATE
(defn deve-aplicar-desconto?
    [valor-bruto]
    (if (> valor-bruto 100)
      true
      false))

(println (deve-aplicar-desconto? 1000))
(println (deve-aplicar-desconto? 100))


(defn aplica-desconto?
  [valor-bruto]
  (if (> valor-bruto 100)
    true
    false))

(println (aplica-desconto? 1000))
(println (aplica-desconto? 100))

(defn valor-descontado
  "Retorna o valor com desconto de 10% se o valor bruto for estritamente maior que 100."
  [valor-bruto]
  (if (aplica-desconto? valor-bruto)
    (let [taxa-de-desconto (/ 10 100)
          desconto         (* valor-bruto taxa-de-desconto)]
      (println "Calculando desconto de " desconto)
      (- valor-bruto desconto))
    valor-bruto))

(println (valor-descontado 1000))
(println (valor-descontado 100))

(defn aplica-desconto?
  [valor-bruto]
  (println "chamando a versão when")
  (if (> valor-bruto 100)
    true))

(println (aplica-desconto? 1000))
(println (aplica-desconto? 100))

(println (valor-descontado 1000))
(println (valor-descontado 100))

(defn aplica-desconto?
  [valor-bruto]
  (println "chamando a versão direta >")
  (> valor-bruto 100))

(println (aplica-desconto? 1000))
(println (aplica-desconto? 100))

(println (valor-descontado 1000))
(println (valor-descontado 100))

; código mais limpo possível
(defn aplica-desconto?
  [valor-bruto]
  (> valor-bruto 100))

(println (aplica-desconto? 1000))
(println (aplica-desconto? 100))

(println (valor-descontado 1000))
(println (valor-descontado 100))


(defn mais-caro-que-100?
  [valor-bruto]
  (println "foi invocada!")
  (> valor-bruto 100))

(defn valor-descontado
  "Retorna o valor com desconto de 10% se o valor bruto for estritamente maior que 100."
  [aplica? valor-bruto]
  (if (aplica? valor-bruto)
    (let [taxa-de-desconto (/ 10 100)
          desconto         (* valor-bruto taxa-de-desconto)]
      (println "Calculando desconto de " desconto "com a nova função")
      (- valor-bruto desconto))
    valor-bruto))

(println (valor-descontado mais-caro-que-100? 1000))
(println (valor-descontado mais-caro-que-100? 100))

(println "função anônima")
(println (valor-descontado (fn [valor-bruto] (println "fui usada!") (> valor-bruto 100)) 1000))
(println (valor-descontado (fn [valor-bruto] (println "fui usada!") (> valor-bruto 100)) 100))

(println (valor-descontado (fn [v] (println "fui usada2!") (> v 100)) 1000))
(println (valor-descontado (fn [v] (println "fui usada2!") (> v 100)) 100))

(println (valor-descontado #(> %1 100) 1000))
(println (valor-descontado #(> %1 100) 100))


(println (valor-descontado #(> % 100) 1000))
(println (valor-descontado #(> % 100) 100))

(def mais-caro-que-100? (fn [valor-bruto] (println "fui usada6!") (> valor-bruto 100)))
(def mais-caro-que-100? #(> %1 100))

(println (mais-caro-que-100? 1000))
(println (mais-caro-que-100? 100))