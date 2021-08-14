
public class TestaBanco {
	public static void main(String[] args) {
		Cliente andre = new Cliente();
		andre.nome = "André Pereira";
		andre.cpf = "222.222.222-22";
		andre.profissao = "programador";
		
		Conta contaDoAndre = new Conta();
		contaDoAndre.deposita(100);
		
		
		//associa o cliente andré a conta contaDoAndre
		contaDoAndre.titular = andre;
		System.out.println(contaDoAndre.titular.nome);
		
	}
	
}
