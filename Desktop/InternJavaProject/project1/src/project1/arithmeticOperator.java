package project1;

public class arithmeticOperator {

	public static void main(String[] args) {
		int a=10;
		int b=a+11;
		int f=b-5;
		int d=f*3;
		int c=d/2;
		
		int e=c%3;
		System.out.println("Integer:");
		System.out.println("This is original value:"+a);
		System.out.println("Adding with 11 is: "+b);
		System.out.println("Subtracting with 5 is: "+f);
		System.out.println("Multi with 3 is : "+d);
		System.out.println("Division with 2 is: "+c);
		System.out.println("Modulo with 3 is : "+e);
	
		double aa=22.32;
		double bb=22.32+11;
		double cc=bb-20;
		double dd=cc*2.1;
		double ee=dd/9.0;
		double ff=dd%9.0;
		
		System.out.println("Float:");
		System.out.println("This is original value:"+aa);
		System.out.println("Adding with 11 is: "+bb);
		System.out.println("Subtracting with 20 is: "+cc);
		System.out.println("Multi with 2.1 is : "+dd);
		System.out.println("Division with 9.0 is: "+ee);
		System.out.println("Modulo with 9.0 is : "+ff);
		
	}

}
