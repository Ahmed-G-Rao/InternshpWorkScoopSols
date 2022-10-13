  import java.util.Scanner;
  public class Main {
     static void recFunc(int startNumber, int iterations,int endNum,int incrementValue)
    {
        if (iterations > (endNum/2))
            return ;
            
            startNumber +=incrementValue;
       
        if(startNumber>endNum){
            
            //  System.out.println( startNumber );
             return;
        } 
        System.out.println( startNumber );
        recFunc(startNumber, iterations + 1,endNum,incrementValue);
       
        
    }
    // static int makeItEven(int startNumber){
    //     if(startNumber%2==1){
    //          startNumber+=1;
    //     }
    //     return startNumber;
    // }
    
    public static void main(String args[]) {
        Scanner myObj = new Scanner(System.in);
        System.out.println("Enter Staring Number");
        int startNumber = myObj.nextInt();
        System.out.println("Enter Ending Number");
        int endNumber = myObj.nextInt();
        System.out.println("Enter Increment Value");
        int incrementValue= myObj.nextInt();
        System.out.println("Series");
        
        // startNumber= makeItEven(startNumber);
        System.out.println( startNumber );
        recFunc(startNumber,1,endNumber,incrementValue);
    }
}
