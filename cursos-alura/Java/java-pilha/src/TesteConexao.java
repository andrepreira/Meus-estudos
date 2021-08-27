
public class TesteConexao {

	public static void main(String[] args) {
		
		
		//USANDO CLASSE COM AUTOCLOSABLE
		
		try (Conexao conexao = new Conexao()) {
			conexao.leDados();
		} catch (IllegalStateException e) {
			
			System.out.println("Deu erro na conexao");
		}
		
		//------------------------------------------------
		
//		Conexao conexao = null;
//		
//		try {
//			conexao = new Conexao();
//			conexao.leDados();
//			
//		} catch (IllegalStateException ex) {
//			System.out.println("Deu erro na conexao");
//		} finally {
//			conexao.close();
//		}

	}

}
