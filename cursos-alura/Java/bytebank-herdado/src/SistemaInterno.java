
public class SistemaInterno {
	
	private int senha = 2222;
	
	public void autentica(Autenticavel gerente) {
		boolean autenticou = gerente.autenica(this.senha);
		if (autenticou) {
			System.out.println("Pode entrar no sistema!");
		} else {
			System.out.println("Não pode entrar no sistema!");
		}
	}
}