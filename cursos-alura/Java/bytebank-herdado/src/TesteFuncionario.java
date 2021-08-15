
public class TesteFuncionario {
	
	public static void main(String[] args) {

        Cliente cliente = new Cliente();

        Gerente nico = new Gerente();
        nico.setNome("Nico Steppat");
        nico.setCpf("223355646-9");
        nico.setSalario(2600.00);

        System.out.print(nico.getNome());
        System.out.print(nico.getBonificacao());

    }
}
