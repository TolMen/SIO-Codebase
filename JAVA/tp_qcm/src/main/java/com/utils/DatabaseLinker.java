package utils;

import java.sql.*;

public class DatabaseLinker {
    
    private static String url = "jdbc:mysql://localhost:3306/tpqcm?useSSL=false";
    private static String login = "root";
    private static String password = "root";
    private static Connection connex = null;
    
    
    public static Connection getConnexion() {
        try {
            connex = DriverManager.getConnection(url, login, password);
        } catch (SQLException ex) {
            ex.printStackTrace(System.err);
        }
        return connex;
    }
}
