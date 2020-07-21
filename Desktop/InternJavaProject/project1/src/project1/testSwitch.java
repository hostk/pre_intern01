package project1;

public class testSwitch {

	public static void main(String[] args) {
		
		String number="10";
		switch(number) {
		case "10":
			System.out.println("The number is equal.");
			break;
		case "4":
			System.out.println("The number is less than this.");
			break;
		case "19":
			System.out.println("The number is greater than this.");
		default:
			System.out.println("Enter the number.");
		}

	}

}
