package project1;

public class unaryOperator {

	public static void main(String[] args) {
		boolean a=true;
		boolean b=false;
		
		int d=10;
		int e=-10;
		
		System.out.println(~d);
		System.out.println(~e);

		
		System.out.println(!a);
		System.out.println(!b);

		System.out.println(10<<2);
		System.out.println(20<<3);
		System.out.println(10>>20);
		System.out.println(10>>10);
		
		System.out.println(d<e && e<d);
		System.out.println(d<e & e<d);
		
		System.out.println(d<e || e<d);
		System.out.println(d<e | e<d);
		
		System.out.println(d);
		d+=e+20;
		System.out.println("this d is "+d);
		System.out.println(e);
		e+=d;
		System.out.println("This e is "+e);
		
		int x=10;
		System.out.println(x++ + ++x);

		System.out.println(x);
		System.out.println(++x);
		System.out.println(x);
		System.out.println(x++);
		System.out.println(x);
		System.out.println(--x);
		System.out.println(x);
		System.out.println(x--);
		System.out.println(x);
	}

}
