package project1;

public class factEx {
	void fact(int n) {
		int fa=1;
		for(int i=1;i<=n;i++) {
			fa =fa*i;
		}
		System.out.print(fa);
	}

	public static void main(String[] args) {
		new factEx().fact(5);
		
	}

}
