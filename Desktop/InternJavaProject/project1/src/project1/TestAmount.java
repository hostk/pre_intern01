package project1;

class Account{
	int id;
	String name;
	float amt;
	void insert(int i,String n,float a){
		id=i;
		name=n;
		amt=a;
	}
	void deposit(float a) {
		amt=amt+a;
		System.out.println("Main Balence : "+amt);
		System.out.println("Deposti Money:" +a);
		
	}
	void withdraw(float a) {
		amt = amt-a;
		System.out.println("Main monery: "+amt);
		System.out.println("Withdraw money: "+a);
	}
	void display() {
		System.out.println(id+" "+name+" "+amt);
	}
}
public class TestAmount {

	public static void main(String[] args) {
		Account a =new Account();
		a.insert(1,"Minko",20000);
		a.deposit(2000);
		a.withdraw(400);
		a.display();
	}

}
