
public class TesteContas {

	public static void main(String[] args) {
		
		ContaCorrente contaCorrente1 = new ContaCorrente(111, 111);
		contaCorrente1.deposita(100.0);
		
		ContaPoupanca contaPoupanca1 = new ContaPoupanca(222, 222);
		contaPoupanca1.deposita(200.0);
		
		contaCorrente1.transfere(10.0, contaPoupanca1);
		
		System.out.println("saldo da contaCorrente1 é " + contaCorrente1.getSaldo());
		System.out.println("saldo da contaCorrente1 é " + contaPoupanca1.getSaldo());
		
	}

}
