/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package testproject3;

/**
 *
 * @author shaundulley
 */
public class Testproject3 {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int test = 1;
        System.out.println(test);
        
        Add addtest = new Add();
        int result = addtest.addtogether(test);
        
        System.out.println(result);
    }
}