
public class Gerente extends Funcionario {
	
	private int senha;
	
	public double getBonificacao() {
		System.out.println("chamando o método de bonificação do GERENTE");
		return super.getBonificacao() + super.getSalario();
	}
	
	public boolean autenica(int senha) {
		if (this.senha == senha) {
			return true;
		} else {
			return false;
		}
	}
	
	//exemplo de sobrecarga de método
//	public boolean autentica(String login, int senha) {
//		
//	}
	
	public void setSenha(int senha) {
		this.senha = senha;
	}
}
