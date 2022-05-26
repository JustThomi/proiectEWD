<?php
    include "conn.php";

    $query = "SELECT * FROM termopane";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)){?>
        <div class="produs">
        <img class="produs_image" src="../assets/<?php echo $row['image']; ?>" alt="produs">
            <div>
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['material']; ?></p>
                <div>
                    <button class="sub" type="submit">+</button>
                </div>
            </div>
        </div>
    <?php
    }
?>
