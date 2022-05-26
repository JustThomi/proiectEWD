<?php 
    include("conn.php");

    if(!empty($_SESSION['cart'])){
        $in = inplode(',', $_SESSION['cart']);
        $query = "SELECT * FROM termopane WEHRE id IN($in)";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)){?>
            <div class="produs">
            <img class="produs_image" src="../assets/<?php echo $row['image']; ?>" alt="produs">
                <div>
                    <h2><?php echo $row['name']; ?></h2>
                    <p><?php echo $row['material']; ?></p>
                </div>
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