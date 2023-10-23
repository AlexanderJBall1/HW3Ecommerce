<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Coach_ID, Name, Record FROM `Coach`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($cName, $cRecord) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Coach` (`Name`, `Record`) VALUES (?, ?);");
        $stmt->bind_param("ss", $tName, $tCity);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCoach($cName, $cRecord, $Coach_ID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Coach SET Name = ?, Record = ? where Coach_ID = ?");
        $stmt->bind_param("ssi", $cName, $cRecord, $Coach_ID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($Coach_ID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Coach where Coach_ID = ?");
        $stmt->bind_param("i", $Coach_ID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>