package project1;

public class testForloop {
	public static void main(String[] args) {
		int i,j;
		for(i=0;i<=10;i++) {
			System.out.println("Output is "+i);
		}
		int y=20;
		for(i=1;i<10;i++) {
			System.out.println("This is x: "+i);
			System.out.println("This is y: "+y);
			y=y-2;

		}
		System.out.println();
		for(i=0;i<5;i++) {
			for(j=0;j<i+1;j++) {
				System.out.print(" * ");
			}
			System.out.println();
		}
		System.out.println();
		System.out.println();

		int arr[]= {10,20,30,40};
		for(i=0;i<arr.length;i++) {
			System.out.println(arr[i]);
		}
		System.out.println();
		System.out.println();

		for(int a:arr) {
			System.out.println(a);
		}
		for(;;) {
			System.out.println("Infinte loop");
		}
	}
}
