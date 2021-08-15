
public class TesteReferencias {

	public static void main(String[] args) {
		Gerente gerente1 = new Gerente();
		gerente1.setNome("André");
		gerente1.setSalario(5000.0);
		
		
		EditorVideo editorVideo1 = new EditorVideo();
		editorVideo1.setSalario(2500.0);
		
		Designer designer = new Designer();
		designer.setSalario(2000.0);
		
		ControleBonificacao controle = new ControleBonificacao();
		controle.registra(gerente1);
		controle.registra(editorVideo1);
		controle.registra(designer);
		
		System.out.println(controle.getSoma());
	}

}
