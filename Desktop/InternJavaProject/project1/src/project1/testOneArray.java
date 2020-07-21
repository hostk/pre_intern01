package project1;

public class testOneArray {

	public static void main(String[] args) {
		int one[]=new int[12];
		one[0]=1;
		one[1]=2;
		one[2]=3;
		one[3]=4;
		one[4]=5;
		one[5]=6;
		one[6]=7;
		one[7]=8;
		one[8]=9;
		one[9]=10;
		one[10]=11;
		one[11]=12;
		
		for(int i=0;i<12;i++) {
			System.out.println(one[i]);

		}
		double tt[]= {1.11,2.4,3.3,4.4,5.5,6.6,7.7,8.8,9.9};
		for(int i=0;i<tt.length;i++) {
			System.out.println("This is double : "+tt[i]);
		}
		
	}

}
