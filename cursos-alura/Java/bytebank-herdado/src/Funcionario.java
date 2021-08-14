
public class Funcionario {
	private String nome;
	private String Cpf;
	private double salario;
	
	public Funcionario() {
		
	}
	
	public double getSalario() {
		return salario;
	}

	public void setSalario(double salario) {
		this.salario = salario;
	}

	public double getBonificacao() {
		return this.salario*0.1;
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
	
	
}
