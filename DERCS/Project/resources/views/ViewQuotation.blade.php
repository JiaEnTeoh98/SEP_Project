<html>
    <head>
        <title>Customer Request</title>
        
    </head>
    <style>
        
        th, td {
        padding: 5px;
        vertical-align: top;
        text-align: left;
        border:1px solid black;    
        }

        .Vbutton{
            background-color:#E2E6E6;
            color:black;
            border-radius:4px;
            border-width:1px;
            height:25px;
            width:150px;
            font-family:Times New Roman;
        }

        .Rbutton{
            background-color:#279EFC ;
            color:white;
            border-radius:4px;
            border-width:1px;
            height:25px;
            width:100px;
            font-family:Times New Roman;
        }
    </style>
    
   
    
    <body>
    <br>
        <br>
        <!--To show Company DEtails-->
        <table>
        <tr>
        <td>DERCS Computer Sdn Bhd <br> B-14, Lorong Pandan Damai, <br> 25150, Kuantan, Pahang
        <br><br>+601234567 <br> DERCSComputer@gmail.com</td></tr>
        </table>

        <!--To show customer details-->
        &nbsp;
        <table>
        <tr>
        <td>To:</td>
        <td>Teoh Jia En<br>
        12,Lorong sentosa<br>
        0123456789</td>
        </tr>
        </table>

        Quotation ID: 0001
        <br>
        Valid Until: 30/3/2021
        

        <!--To show device quotation and details-->
        <form action="" method="POST">
        <table style="border: 1px solid black;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <thead>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price (RM)</th>
        <th>Decsription</th>
        <tr>
        <td colspan="2">Service Change</td>
        <td>20</td>
        <td></td>
        </tr>
        <tr >
        <td colspan="2">Total Price (RM) </td>
        <td colspan="2" >200</td>
        </tr>
        </table>
        
        <br><br>Additional Notes: Estimated repair time is about 2 days.

        <br><br>
        <button type="submit" name="Pay" value="Pay" class="Rbutton" disabled>Pay
       
        <button type="submit" name="Back" value="Back" class="Rbutton">Back
        
           
       </form>
       
    
    </body>
    
</html>