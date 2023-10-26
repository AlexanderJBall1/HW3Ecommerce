<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Player_ID, Player_Name, Player_Number, Player_Team FROM `Player`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayers($cName, $cRecord) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Coach` (`Name`, `Record`) VALUES (?, ?);");
        $stmt->bind_param("ss", $cName, $cRecord);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayers($cName, $cRecord, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Coach SET Name = ?, Record = ? where Coach_ID = ?");
        $stmt->bind_param("ssi", $cName, $cRecord, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayers($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Coach where Coach_ID = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
