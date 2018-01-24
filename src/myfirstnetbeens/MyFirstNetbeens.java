/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package myfirstnetbeens;
import java.util.Scanner;

/**
 *
 * @author tommywalton
 */
public class MyFirstNetbeens {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        displayMenu();
    }
    
    public static void displayMenu(){
        NumberWork numWork = new NumberWork();
        Scanner input = new Scanner(System.in);
        System.out.println("Select An Option From Below:");
        System.out.println("1.Add Numbers");
        System.out.println("2.Subtract Numbers");
        System.out.println("3.Multiply Numbers");
        System.out.println("4.Divide Numbers");
        System.out.println("5.Quit");
        int n = input.nextInt();
        switch(n){
            case 1:
                System.out.println("Enter First Number");
                int n1 = input.nextInt();
                System.out.println("Enter Second Number");
                int n2 = input.nextInt();
                System.out.println(numWork.addNumbers(n1, n2));
                break;
            case 2:
                System.out.println("Enter First Number");
                int n3 = input.nextInt();
                System.out.println("Enter Second Number");
                int n4 = input.nextInt();
                System.out.println(numWork.subtractNumbers(n3, n4));
                break;
            case 3:
                System.out.println("Enter First Number");
                int n5 = input.nextInt();
                System.out.println("Enter Second Number");
                int n6 = input.nextInt();
                System.out.println(numWork.multiplyNumbers(n5, n6));
                break;
            case 4:
                System.out.println("Enter First Number");
                int n7 = input.nextInt();
                System.out.println("Enter Second Number");
                int n8 = input.nextInt();
                System.out.println(numWork.divideNumbers(n7, n8));
                break;
            case 5:
                System.exit(0);
                break;
        }
    }
    
    
}


