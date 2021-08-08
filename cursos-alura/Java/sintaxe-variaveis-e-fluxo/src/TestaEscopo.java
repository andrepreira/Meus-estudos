
public class TestaEscopo {

	public static void main(String[] args) {

		System.out.println("Testando condicionais");

		int idade = 20;
		int quantidadePessoas = 2;
		
		//boolean acompanhado = quantidadePessoas >= 2;
		
		boolean acompanhado;
		
		if (quantidadePessoas >=2) {
			acompanhado = true;
		} else {
			acompanhado = false;
		}

		System.out.println("valor de acompanhado = " + acompanhado);

		if (idade >= 18 && acompanhado) {
			System.out.println("Você tem autorização para entrar!");
		} else {

			System.out.println(
					"Infelizmente, você não pode entrar, pois você" + " é menor de idade e não está acompanhado");
		}
	}
}
