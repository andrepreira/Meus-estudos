
public class EditorVideo extends Funcionario {
	
	public double getBonificacao() {
		System.out.println("chamando o método de bonificação do "
				+ "EDITOR DE VÍDEO");
		return super.getBonificacao() + 100;
	}
	
}
