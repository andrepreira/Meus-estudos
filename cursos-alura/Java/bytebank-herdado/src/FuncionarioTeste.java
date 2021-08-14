
public class FuncionarioTeste {
	private String nome;
	private String Cpf;
	private double salario;
	private int tipo = 0; //0 - Funcionario Comum, 1 - Gerente, 2 - Diretor
	private int senha;
	
	public boolean autentica(int senha) {
		if (this.senha == senha) {
			return true;
		} else {
			return false;
		}
	}

	public double getBonificacao() {
		switch (this.tipo) {
		case 1:
			return this.salario; //Gerente

		case 2:
			return this.salario + 1000.0; //Diretor

		default:
			return this.salario*0.1; //Funcionario comum

		}
		
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getCpf() {
		return Cpf;
	}

	public void setCpf(String cpf) {
		Cpf = cpf;
	}

	public double getSalario() {
		return salario;
	}

	public void setSalario(double salario) {
		this.salario = salario;
	}

	public int getTipo() {
		return tipo;
	}

	public void setTipo(int tipo) {
		this.tipo = tipo;
	}
	
	
}
