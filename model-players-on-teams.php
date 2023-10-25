<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Team_ID, City, Name FROM `Team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectPlayerOnTeams($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.Player_ID, P.Player_Name, Number, Years, Salary, T.Team_ID, Name, City  FROM `Player` P JOIN PlayerTeam PT on PT.Player_ID = P.Player_ID JOIN Team T on PT.Team_ID = T.Team_ID WHERE T.Team_ID = ?");
        $stmt->bind_param("i", $tid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
