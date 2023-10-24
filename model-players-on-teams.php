<?php
function selectPlayerOnTeams($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `Player` P JOIN PlayerTeam PT on PT.Player_ID = P.Player_ID JOIN Team T on PT.Team_ID = T.Team_ID WHERE T.Team_ID = ?");
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
