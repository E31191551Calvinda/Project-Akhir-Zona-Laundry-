package project_akhir;

import java.sql.Connection;
import java.sql.SQLException;
import java.sql.DriverManager;
import java.sql.ResultSet;
import javax.swing.*;

public  class Koneksi {
    private static Connection MySQLConfig;
    public static Connection configDB ()throws SQLException{
        try{
         String url = "jdbc:mysql://localhost:3306/zona?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC"; 
         String user = "root";
         String pass = "";
         
         DriverManager.registerDriver(new com.mysql.jdbc.Driver());
         MySQLConfig =DriverManager.getConnection(url,user,pass);
        
        }catch(SQLException e){
            System.out.println ("KONEKSI KE DATABASE GAGAL" + e.getMessage());
        
        }
        return MySQLConfig;
    }
}
   
