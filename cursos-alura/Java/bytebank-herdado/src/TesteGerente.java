
public class TesteGerente {

	public static void main(String[] args) {
		
		Gerente gerente1 = new Gerente();
		gerente1.setNome("André Pereira");
		gerente1.setCpf("111.111.111-00");
		gerente1.setSalario(5000.0);
		
		System.out.println(gerente1.getNome());
		System.out.println(gerente1.getCpf());
		System.out.println(gerente1.getSalario());
		
		gerente1.setSenha(2222);
		boolean autenticou = gerente1.autenica(2222);
		System.out.println(autenticou);
		
		System.out.println(gerente1.getBonificacao() );
	}

}
