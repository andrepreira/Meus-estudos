
public class TestaSacaNegativo {
	public static void main(String[] args) {
		Conta conta = new Conta();
		conta.deposita(100);
		System.out.println(conta.saca(200));
		System.out.println(conta.getSaldo());
		
		//proibido
		//conta.pegaSaldo() = conta.pegaSaldo() - 101;
		System.out.println(conta.getSaldo());
	}
}
