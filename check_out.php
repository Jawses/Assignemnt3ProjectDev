<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>Assignment #4</title>
		
		<style>

		html {
			background-color: white;
		}
		body {
		    width:600px;
			margin: 5% auto;
			background-color: #CCFFFF;
			border: 2px black dashed;
			padding: 30px;
		}
		
		.right {
		    text-align: right;
		}
		

		
		#button {
			color: orange;
			background: none;
			border: none;
			font-weight: bold;
		}
		
		.errorSet {
		    border: none;
		}
		
		table.items {
			width:100%;
		}
		
		table.items tr{
			background-color: #cedbdb;
		}
		
		table.items td{
			padding-left: 5px;
			padding-top: 3px;
		}
		
		.total {
		    border: none;
		}

		
		
		</style>

    </head>

    <body>

        <form>
		<?php
            
            $firstName = ucwords(trim($_POST["firstName"]));
            $lastName = ucwords(trim($_POST["lastName"]));
            $streetNumber = trim($_POST["streetNumber"]);
            $streetName = ucwords(trim($_POST["streetName"]));
            $postalCode = trim($_POST["postalCode"]);
            $cityName = ucwords(trim($_POST["cityName"]));
            $province = trim($_POST["province"]);
            $numberNew = trim($_POST["numberOfNewUFO"]);
            $numberOld = trim($_POST["numberOfOldUFO"]);
            
            $array = array("BC" => 0.12, "NB" => 0.15, "NL" => 0.15, "NS" => 0.15, "AB" => 0.05, "PE" => 0.05, "ON" => 0.13, "QC" => 0.1, "MB" => 0.13, "SK" => 0.11 );
            
             if ($firstName == "")
             {
                 echo "First name is required!";
             }
            
             if ($lastName == "")
             {
                 echo "Last name is required!";
             }
            
             if ($streetNumber == "")
             {
                 echo "Street number is required!";
             }
            
             if ($streetName == "")
             {
                 echo "Street name is required!";
             }
            
             if ($postalCode == "")
             {
                 echo "Postal code is required!";
             }
            
             if ($cityName == "")
             {
                 echo "City name is required!";
             }
            
            
            echo "Your order has been processed.  Please verify the information. <br><br>";
            echo "<b>Shipping To: </b><br>";
            echo "-$firstName $lastName <br>";
            echo "-$streetNumber $streetName <br>";
            echo "-$cityName, $province <br>";
            echo "$postalCode <br><br><br>";
        ?>
        
            <table style="width: 100%;">
                <tr>
                    <td>
                        <?php
                             echo "<b>Order Information: </b><br>";
                             
                             ItemsCheckOut($numberOld, $numberNew);
                
                             function ItemsCheckOut($oldUfo, $newUfo)
                             {
                                 $totalOld = $oldUfo*2;
                                 $totalNew = $newUfo*3;
                                 echo "$oldUfo Old UFO saucers at $2.00 each <br>";
                                 echo "$newUfo New UFO saucers at $3.00 each <br>";
                             }
                         ?>
                    </td>
                    <td class="right">
                        <?php
                             $totalItems = $numberOld*2 + $numberNew*3;
                             $totalItems = number_format($totalItems, 2, '.', '');
                             echo "$ $totalItems";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> Tax</td>
                    <td class="right">
                        <?php
                            if ($array["ON"] == $array[$province])
                            {
                                $tax = $totalItems*$array["ON"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["BC"] == $array[$province])
                            {
                                $tax = $totalItems*$array["BC"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["NB"] == $array[$province])
                            {
                                $tax = $totalItems*$array["NB"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["NL"] == $array[$province])
                            {
                                $tax = $totalItems*$array["NL"];
                                echo "$ $tax";
                            }
                            else if ($array["NS"] == $array[$province])
                            {
                                $tax = $totalItems*$array["NS"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["AB"] == $array[$province])
                            {
                                $tax = $totalItems*$array["AB"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["PE"] == $array[$province])
                            {
                                $tax = $totalItems*$array["PE"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["QC"] == $array[$province])
                            {
                                $tax = $totalItems*$array["QC"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["MB"] == $array[$province])
                            {
                                $tax = $totalItems*$array["MB"];
                                echo "$ $tax";
                            }
                        
                            else if ($array["SK"] == $array[$province])
                            {
                                $tax = $totalItems*$array["SK"];
                                echo "$ $tax";
                            }
                        ?>
                    </td>            
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td class="right">
                        <?php
                        
                            if ($totalItems <25 && $totalItems > 0.01)
                            {
                                echo "$3.00";
                                $delivery = 3;
                                $delDate = 1;
                            }
                            else if ($totalItems <50 && $totalItems > 25)
                            {
                                echo "$4.00";
                                $delivery = 4;
                                $delDate = 1;
                            }
                            else if ($totalItems <75 && $totalItems > 50)
                            {
                                echo "$5.00";
                                $delivery = 5;
                                $delDate = 3;
                            }
                            else
                            {
                                echo "$6.00";
                                $delivery = 6;
                                $delDate =4;
                            }
                        ?>
                    </td>
                </tr>
            </table><br>
            
            <table style="width: 100%;">
                <tr>
                    <td>Total</td>
                    <td class="right">
                        <?php
                        
                            $total = $totalItems + $tax + $delivery;
                            echo "$ $total";
                        ?>
                    </td>
                
                </tr>
            
            </table><br>
 //           <?php
 //               $date = mktime(0, 0, 0, date("m")  , date("d")+$delDate, date("Y"));
  //              echo $date
  //          ?>
            
            
            
			
        </form>

    </body>

</html>



