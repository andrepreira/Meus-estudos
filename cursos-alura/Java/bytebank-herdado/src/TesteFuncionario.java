
public class TesteFuncionario {

	public static void main(String[] args) {
		
		Funcionario nico = new Funcionario();
		nico.setNome("Nico Steppat");
		nico.setCpf("222.222.222-22");
		nico.setSalario(3000.00);
		
		System.out.println(nico.getNome());
		System.out.println(nico.getBonificacao());
	}

}
