package project1;

class Student{
	int id;
	String name;
	
	//method
	void insert(int i,String n) {
		id =i;
		name =n;
	}
	//method
	void display() {
		System.out.println("ID : "+id+"Name : "+name);
	}
}
class Rectangle{
	int lenght;
	int weight;
	void insert(int l,int w) {
		lenght =l;
		weight=w;
	}
	void calculateArea() {
		System.out.println("Area is "+lenght*weight);
	}
}
public class objectTest {

	public static void main(String[] args) {
		Student s1=new Student();
		s1.id=101;
		s1.name="Min Ko Ko";
		System.out.println("Id :"+s1.id+" Name : "+s1.name);
		
		//through method to initilize object
		s1.insert(102, "Ko Ko");
		s1.display();
		
		Rectangle r1=new Rectangle();
		Rectangle r2=new Rectangle();
		
		r1.insert(4, 5);
		r1.calculateArea();
		
		r2.insert(6, 7);
		r2.calculateArea();
		
	}

}
