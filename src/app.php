<?php
    include "conn.php";

    $query = "SELECT * FROM termopane";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)){?>
        <div class="produs">
        <img class="produs_image" src="../assets/<?php echo $row['image']; ?>" alt="produs">
            <h2><?php echo $row['name']; ?></h2>
            <p><?php echo $row['material']; ?></p>
            <div class="sub">
                <a class="sub_button" href="addCart.php?id=<?php echo $row['id'] ?>" name="Submit" type="submit">Adauga</a>
            </div>
        </div>
    <?php
    }
?>
