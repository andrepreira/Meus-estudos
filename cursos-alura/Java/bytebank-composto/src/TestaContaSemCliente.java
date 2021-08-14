	
public class TestaContaSemCliente {
	public static void main(String[] args) {
		Conta contaDaMarcela = new Conta();
		System.out.println(contaDaMarcela);
		
		contaDaMarcela.titular = new Cliente();
		contaDaMarcela.titular.nome = "Marcela";
		System.out.println(contaDaMarcela.titular.nome);
	}
}
