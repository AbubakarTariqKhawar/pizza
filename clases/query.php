<?php

    require_once ("pizza.php");
    require_once ("order.php");
    include_once 'config/dataBase.php';

    class QUERY{

        public static function getAllProByType($categoria){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM product WHERE ProCatId=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $categoria);

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist[$row['ProId']] = (new Pizza ($row['ProId'], $row['ProName'], $row['ProDescription'], $row['ProPicture'], $row['ProQuantity'], $row['ProSize'], $row['ProCatId'], $row['ProPrice']));
            }

            return $Llist;

            $con->close();

        }

        public static function getProById($id){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM product WHERE ProId=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $id);

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist['ProId'] = $row['ProId'];
                $Llist['ProName'] = $row['ProName'];
                $Llist['ProDescription'] = $row['ProDescription'];
                $Llist['ProPicture'] = $row['ProPicture'];
                $Llist['ProQuantity'] = $row['ProQuantity'];
                $Llist['ProSize'] = $row['ProSize'];
                $Llist['ProCatId'] = $row['ProCatId'];
                $Llist['ProPrice'] = $row['ProPrice'];
            }

            return $Llist;

            $con->close();

        }

        public static function getuserMaxId($Id,$table){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT max($Id) as $Id FROM $table");

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist = $row[$Id];
            }

            return $Llist;

            $con->close();

        }

        public static function getuserById($Id){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM users where UseId= ?");
            $stmt->bind_param("i", $Id);

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist['UseId'] = $row['UseId'];
                $Llist['UseName'] = $row['UseName'];
                $Llist['UseSurname'] = $row['UseSurname'];
                $Llist['UseEmail'] = $row['UseEmail'];
                $Llist['UsePassword'] = $row['UsePassword'];
                $Llist['UsePhone'] = $row['UsePhone'];
                $Llist['UsePic'] = $row['UsePic'];
                $Llist['UseIsAdmin'] = $row['UseIsAdmin'];
            }

            return $Llist;

            $con->close();

        }

        public static function getuserAddressByUserId($Id){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM address where AddUseId= ?");
            $stmt->bind_param("i", $Id);

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist[] = '';
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist['AddId'] = $row['AddId'];
                $Llist['AddAddress'] = $row['AddAddress'];
                $Llist['AddPostalCode'] = $row['AddPostalCode'];
                $Llist['AddUseId'] = $row['AddUseId'];
            }

            return $Llist;

            $con->close();

        }

        public static function getCheckUserEmail($email){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT UseEmail FROM users WHERE UseEmail LIKE '%".$email."%'");

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist = '';
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist = $row['UseEmail'];
            }

            return $Llist;

            $con->close();

        }

        public static function getCheckUserLogin($email){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM users WHERE UseEmail LIKE '%".$email."%'");

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist['UseId'] = $row['UseId'];
                $Llist['UseName'] = $row['UseName'];
                $Llist['UseSurname'] = $row['UseSurname'];
                $Llist['UseEmail'] = $row['UseEmail'];
                $Llist['UsePassword'] = $row['UsePassword'];
                $Llist['UsePhone'] = $row['UsePhone'];
                $Llist['UsePic'] = $row['UsePic'];
                $Llist['UseIsAdmin'] = $row['UseIsAdmin'];
            }

            return $Llist;

            $con->close();

        }

        public static function insertUser($id,$name,$surname,$email,$hash,$mobile,$UseIsAdmin){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into users (UseId, UseName, UseSurname, UseEmail, UsePassword, UsePhone, UseIsAdmin) values (?,?,?,?,?,?,?)");
            $stmt->bind_param("issssii", $id,$name,$surname,$email,$hash,$mobile,$UseIsAdmin);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'User have been Created Successfully';
            

            return $Llist;

            $con->close();

        }

        public static function updateUserById($id,$name,$surname,$mobile,$email,$hash){
            $con = DataBase::connect();
            $stmt = $con->prepare("UPDATE users set UseName = ?, UseSurname = ?, UseEmail = ?, UsePassword = ?, UsePhone = ?  where UseId = ?");
            $stmt->bind_param("ssssii", $name,$surname,$email,$hash,$mobile,$id);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'User data has been successfully modified';
            

            return $Llist;

            $con->close();

        }

        public static function insertAddress($IdAddress,$address,$postalcode,$id){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into address (AddId, AddAddress, AddPostalCode, AddUseId) values (?,?,?,?)");
            $stmt->bind_param("isii", $IdAddress,$address,$postalcode,$id);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'Address have been Created Successfully';
            

            return $Llist;

            $con->close();

        }

        public static function updateAddress($IdAddress,$address,$postalcode,$id){
            $con = DataBase::connect();
            $stmt = $con->prepare("UPDATE address set AddAddress = ?, AddPostalCode = ? where AddUseId = ?");
            $stmt->bind_param("sii", $address,$postalcode,$id);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'Address has been successfully modified';
            

            return $Llist;

            $con->close();

        }

        public static function getAllPro(){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT * FROM product");
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist[$row['ProId']] = (new Pizza ($row['ProId'], $row['ProName'], $row['ProDescription'], $row['ProPicture'], $row['ProQuantity'], $row['ProSize'], $row['ProCatId'], $row['ProPrice']));
            }

            return $Llist;

            $con->close();

        }

        public static function updateProduct($id,$name,$description,$quantity,$price,$category,$size,$picture){
            $con = DataBase::connect();
            $stmt = $con->prepare("UPDATE product set ProName = ?, ProDescription = ?, ProPicture = ?, ProQuantity = ?, ProSize = ?, ProCatId = ?, ProPrice = ? where ProId = ?");
            $stmt->bind_param("sssisiii", $name,$description,$picture,$quantity,$size,$category,$price,$id);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'Product has been successfully modified';
            

            return $Llist;

            $con->close();

        }
        

        public static function deleteProductById($id){
            $con = DataBase::connect();
            $stmt = $con->prepare("delete from product where ProId = ?");
            $stmt->bind_param("i",$id);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'Product has been successfully deleted';
            

            return $Llist;

            $con->close();

        }


        public static function createProduct($id,$name,$description,$quantity,$price,$category,$size,$picture){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into product (ProId,ProName,ProDescription,ProPicture,ProQuantity,ProSize,ProCatId,ProPrice) values (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("isssisii", $id,$name,$description,$picture,$quantity,$size,$category,$price);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'Product have been created successfully';
            

            return $Llist;

            $con->close();

        }

        public static function getAllOrder(){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT o.OrdId, o.OrdCreatedDate, p.ProName, u.UseName, a.AddAddress, o.OrdPaid, od.OdeQuantity, od.OdePrice
                                    FROM orders AS o 
                                    INNER JOIN orderdetail AS od 
                                    INNER JOIN product AS p 
                                    INNER JOIN address AS a 
                                    INNER JOIN users AS u 
                                    ON o.OrdUseId = u.UseId AND o.OrdAddId = a.AddId AND o.OrdId = od.OdeOrdId AND od.OdeProId = p.ProId");
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $list = "
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>User Name</th>
                        <th>When Order Creater</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Paid</th>
                    </tr>
                      
            ";
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $list .= "<tr>";
                $list .= "<td>".$row['OrdId']."</td>";
                $list .= "<td>".$row['ProName']."</td>";
                $list .= "<td>".$row['UseName']."</td>";
                $list .= "<td>".$row['OrdCreatedDate']."</td>";
                $list .= "<td>".$row['AddAddress']."</td>";
                $list .= "<td>".$row['OdeQuantity']."</td>";
                $list .= "<td>".$row['OdePrice']."€</td>";
                $list .= "<td>".$row['OrdPaid']."</td>";
                $list .= "</tr>";
                
            }

            return $list;

            $con->close();

        }

        public static function getAllOrderbyUserId($id){
            $con = DataBase::connect();
            $stmt = $con->prepare("SELECT o.OrdId, o.OrdCreatedDate, p.ProName, u.UseName, a.AddAddress, o.OrdPaid, od.OdeQuantity, od.OdePrice, re.OreId
                                    FROM orders o 
                                    LEFT JOIN orderdetail od ON o.OrdId = od.OdeOrdId
                                    LEFT JOIN product p ON od.OdeProId = p.ProId
                                    LEFT JOIN address a ON o.OrdAddId = a.AddId
                                    LEFT JOIN users u ON o.OrdUseId = u.UseId
                                    LEFT JOIN orderreview re ON o.OrdId = re.OreOrdId
                                    where OrdUseId = $id");
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $list = "
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>User Name</th>
                        <th>When Order Creater</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Paid</th>
                        <th>Rate</th>
                    </tr>
            
            ";
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                if($row['OreId'] != null && $row['OreId'] != ""){
                    $list .= "<tr>";
                    $list .= "<td>".$row['OrdId']."</td>";
                    $list .= "<td>".$row['ProName']."</td>";
                    $list .= "<td>".$row['UseName']."</td>";
                    $list .= "<td>".$row['OrdCreatedDate']."</td>";
                    $list .= "<td>".$row['AddAddress']."</td>";
                    $list .= "<td>".$row['OdeQuantity']."</td>";
                    $list .= "<td>".$row['OdePrice']."€</td>";
                    $list .= "<td>".$row['OrdPaid']."</td>";
                    $list .= '<td><button style="all: unset;cursor: pointer;" onclick="youReviewd()"><span style="font-size:150%;color: yellow;">&starf;</span></button></td>';
                    $list .= "</tr>";
                }else{
                    $list .= "<tr>";
                    $list .= "<td>".$row['OrdId']."</td>";
                    $list .= "<td>".$row['ProName']."</td>";
                    $list .= "<td>".$row['UseName']."</td>";
                    $list .= "<td>".$row['OrdCreatedDate']."</td>";
                    $list .= "<td>".$row['AddAddress']."</td>";
                    $list .= "<td>".$row['OdeQuantity']."</td>";
                    $list .= "<td>".$row['OdePrice']."€</td>";
                    $list .= "<td>".$row['OrdPaid']."</td>";
                    $list .= '<td><button style="all: unset;cursor: pointer;" onclick="openForm('.$row['OrdId'].')"><span style="font-size:150%;color:#85857D;">&starf;</span></button></td>';
                    $list .= "</tr>";
                }
                
                
            }

            return $list;

            $con->close();

        }

        public static function getBankByInfo($id){
            $con = DataBase::connect();
            $stmt = $con->prepare("select * from bank where BanUseId = ?");
            $stmt->bind_param("i",$id);
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist['BanId'] = $row['BanId'];
                $Llist['BanCardNumber'] = $row['BanCardNumber'];
                $Llist['BanOwnerName'] = $row['BanOwnerName'];
                $Llist['BanExpireMonth'] = $row['BanExpireMonth'];
                $Llist['BanExpireYear'] = $row['BanExpireYear'];
                $Llist['BanCvv'] = $row['BanCvv'];
                $Llist['BanUseId'] = $row['BanUseId'];
            }

            return $Llist;

            $con->close();

        }


        public static function getBankMaxIdbyUser($id){
            $con = DataBase::connect();
            $stmt = $con->prepare("select max(BanId) as BanId from bank where BanUseId = ?");
            $stmt->bind_param("i",$id);
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist;
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                $Llist = $row['BanId'];
            }

            return $Llist;

            $con->close();

        }


        public static function insertbank($bankMaxIdById,$cardnumber,$name,$expiremonth,$expireyear,$cvv,$user_id){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into bank (BanId,BanCardNumber,BanOwnerName,BanExpireMonth,BanExpireYear,BanCvv,BanUseId) values (?,?,?,?,?,?,?)");
            $stmt->bind_param("iisiiii", $bankMaxIdById,$cardnumber,$name,$expiremonth,$expireyear,$cvv,$user_id);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'Bank have been created successfully';
            

            return $Llist;

            $con->close();

        }

        public static function insertOrders($OrdId,$OrdUseId,$OrdAddId,$OrdAddIns,$OrdPaid,$OrdRecived){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into orders (OrdId, OrdUseId, OrdAddId, OrdCreatedDate, OrdAddIns, OrdPaid, OrdRecived) values (?,?,?,now(),?,?,?)");
            $stmt->bind_param("iiisii", $OrdId,$OrdUseId,$OrdAddId,$OrdAddIns,$OrdPaid,$OrdRecived);
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist = 'Order have been Created Successfully';
            

            return $Llist;

            $con->close();

        }

        public static function insertOrdersDetail($OdeOrdId,$OdeProId,$OdeQuantity,$OdePrice){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into orderdetail (OdeOrdId, OdeProId, OdeQuantity, OdePrice) values (?,?,?,?)");
            $stmt->bind_param("iiii", $OdeOrdId,$OdeProId,$OdeQuantity,$OdePrice);
            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();

            $Llist = 'OrderDetail have been Created Successfully';
            

            return $Llist;

            $con->close();

        }

        public static function insertreviews($orderId,$userId,$finalRate,$description){
            $con = DataBase::connect();
            $stmt = $con->prepare("insert into orderreview (OreOrdId,OreUseId,OreStar,OreComment,OreDate) values (?,?,?,?,now())");
            $stmt->bind_param("iiis", $orderId,$userId,$finalRate,$description);
            //Execute statement 
            $stmt->execute();
            //$result=$stmt->get_result();

            $Llist = 'inserted';
            

            return $Llist;

            $con->close();

        }
        
        

    }

?>