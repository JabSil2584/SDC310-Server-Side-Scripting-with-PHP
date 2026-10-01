<?php
header('Content-Type: application/json');
require_once 'db.php';

try {
    $allProducts = [];

    //  Fetch NFTs
    $result = mysqli_query($conn, "SELECT id, name, `desc`, cost, image FROM nftz");
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {$row['category'] = 'NFT';
            $row['cost'] = floatval($row['cost']);
            $allProducts[] =$row;
        }
    }

    //  Fetch DApps
    $result = mysqli_query($conn, "SELECT id, name, `desc`, cost, image FROM dapps");
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {$row['category'] = 'Dapp';
            $row['cost'] = floatval($row['cost']);
            $allProducts[] =$row;
        }
    }

    //  Fetch Tokens
    $result = mysqli_query($conn, "SELECT id, name, `desc`, cost, image FROM tokens");
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {$row['category'] = 'Crypto Token';
            $row['cost'] = floatval($row['cost']);
            $allProducts[] =$row;
        }
    }

    echo json_encode($allProducts);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>