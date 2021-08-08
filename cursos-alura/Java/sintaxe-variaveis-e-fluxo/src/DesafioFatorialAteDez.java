
public class DesafioFatorialAteDez {

	public static void main(String[] args) {

		int fatorial = 1;
		for (int i = 1; i <= 10; i++) {
			fatorial *= i;
			System.out.print(fatorial);
			System.out.println("O fatorial de " + i + " é " + fatorial);
			
		}
	}

}
