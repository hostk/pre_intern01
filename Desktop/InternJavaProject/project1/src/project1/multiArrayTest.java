package project1;

public class multiArrayTest {
	public static void main(String args[]) {
		int two[][]= {{1,2,3,4,5},{11,22,33,44,55}};
		for(int i=0;i<2;i++) {
			for(int j=0;j<5;j++) {
				System.out.print(two[i][j]+" ");
			}
			System.out.println();
		}
		float multi[][]=new float[4][5];
		int i,j,k=0;
		for(i=0;i<4;i++) {
			for(j=0;j<5;j++) {
				multi[i][j]=k;
				k++;
			}
		}
		for(i=0;i<4;i++) {
			for(j=0;j<5;j++) {
				System.out.print(multi[i][j]+" ");
			}
			System.out.println();
		}
		
		int test[][]=new int[4][];
		test[0]=new int[1];
		test[1]=new int[2];
		test[2]=new int[3];
		test[3]=new int[4];
		
		for(i=0;i<4;i++) {
			for(j=0;j<i+1;j++) {
				test[i][j]=k;
				k++;
			}
		}
		for(i=0;i<4;i++) {
			for(j=0;j<i+1;j++) {
				System.out.print(test[i][j]+" ");
			}
			System.out.println();
			
		}
	}

}
