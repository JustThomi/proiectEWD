<?php
session_start(); 
    include("conn.php");
    if(!empty($_SESSION['cart'])){
        $in = implode(',', $_SESSION['cart']);
        $query = "SELECT * FROM termopane WHERE id IN($in)";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)){?>
            <div class="produs">
                <img class="produs_image" src="../assets/<?php echo $row['image']; ?>" alt="produs">
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['material']; ?></p>
            </div>
        <?php
        }
    }else{ ?>
        <div id="landing_footer">
            <h1>Your cart is empty!</h1>
    </div>
    <?php
    }
?>