
public class TestaGetESet {
	public static void main(String[] args) {
		Conta conta = new Conta(1337, 24226);
		//conta.numero = 1337
		//conta.setNumero(1337);
		System.out.println(conta.getNumero());
		
		Cliente andre = new Cliente();

		andre.setNome("André Pereira");
		
		//associa o cliente andre a conta contaDoAndre
		conta.setTitular(andre);
		
		System.out.println(conta.getTitular().getNome());
		
		conta.getTitular().setProfissao("Programador");
		
		System.out.println(conta.getTitular().getProfissao());
		
		Cliente titularDaConta = conta.getTitular();
		titularDaConta.setProfissao("Programador");
		
		System.out.println(titularDaConta);
		System.out.println(andre);
		System.out.println(conta.getTitular());
	}
}
