
public class TesteTributaveis {

	public static void main(String[] args) {
		ContaCorrente contaConrrente1 = new ContaCorrente(222, 333);
		contaConrrente1.deposita(100.0);
		
		SeguroDeVida seguroVida1 = new SeguroDeVida();
		
		CalculadorDeImposto calculadorImposto = new CalculadorDeImposto();
		calculadorImposto.registra(contaConrrente1);
		calculadorImposto.registra(seguroVida1);
		
		System.out.println(calculadorImposto.getTotalImposto());
	}

}
