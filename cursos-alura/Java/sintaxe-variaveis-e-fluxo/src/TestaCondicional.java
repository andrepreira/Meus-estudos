
public class TestaCondicional {
	
	public static void main(String[] args) {
		
		System.out.println("Testando condicionais");
		
		int idade = 16;
		int quantidadePessoas = 2;
		
		if (idade >= 18) {
			System.out.println("Você tem mais de 18 anos,"
					+ "então pode entrar!");
		} else {
			if(quantidadePessoas >= 2) {
				System.out.println("Você é menor de idade, mas pode entrar, "
						+ "pois está acompanhado");
			} else {
				System.out.println("Infelizmente, você não pode entrar, pois você"
						+ " é menor de idade e não está acompanhado");
			}
			
		}
	}

}
