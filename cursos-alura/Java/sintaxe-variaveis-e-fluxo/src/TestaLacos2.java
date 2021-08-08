
public class TestaLacos2 {

	public static void main(String[] args) {
		int contador = 0;
		for (int linha =0; linha < 10; linha++) {
			for (int coluna = 0; coluna <= linha; coluna++) {
				contador++;
				System.out.print(contador);
			}
			System.out.println();
		}
	}

}
