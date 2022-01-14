<?php
$count = 0;
while ($row = mysqli_fetch_assoc($res)) {
    $select_query = "SELECT AVG(voto) FROM `valutazioni` WHERE prodotto = '" . $row['nome'] . "'";
    $avg = mysqli_query($con, $select_query);
    $avg = mysqli_fetch_assoc($avg);
    echo '
        <div>
            <div class="product">
                <img class="productImage" src="' . $row['immagine'] . '" alt="' . $row['nome'] . '">
                <p class="productName" id = "product_' . $count . '" name="productName">' . $row['nome'] . '</p>
                <p class="productDescription">' . $row['descrizione'] . ' <br>
                Valutazione media: ' . $avg['AVG(voto)'] . '</p>
            </div>

            <p class="prezzo">Prezzo: ' . $row['prezzo'] . '$, Quantità:</p><input type="number" id = "quantity_' . $count . '" class="number_items" name="quantita" min="1" value="1">

            <div class="button1" onclick="addToCart(' . $count . ')">
                <p class="center" >Aggiungi al Carello</p>
            </div>
        </div>';
    $count++;
}
?>