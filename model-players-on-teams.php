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

function selectPlayersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Player_ID, Player_Name FROM `Player` order by Player_Name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Team_ID, Team_Name FROM `Team` order by Team_Name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayerTeam($tid, $pid, $yrs, $num, $salary) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `PlayerTeam` (`Team_ID`, `Player_ID`, `Years`, `Number`, `Salary`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $tid, $pid, $yrs, $num, $salary);
        $result = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayerTeam($tid, $pid, $yrs, $num, $salary, $ptid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `PlayerTeam` set `Team_ID` = ?, `Player_ID` = ?, `Years` = ?, `Number` = ?, `Salary` = ? where PT_id = ?");
        $stmt->bind_param("iisssi", $tid, $pid, $yrs, $num, $salary, $ptid)
        $result = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayerTeam($ptid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from PlayerTeam where PT_ID=?");
        $stmt->bind_param("i", $ptid);
        $result = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
?>
