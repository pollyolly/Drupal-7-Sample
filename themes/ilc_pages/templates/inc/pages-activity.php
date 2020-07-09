<?php
//if (!$jat) exit("direct access not permitted");
$result = db_select("node", "n")
          //->fields("n", array("changed", "title","nid","created", "type"))
          ->fields("n")
          ->orderBy("changed", "DESC")
          ->range(1, 8)->execute();

/*if($result->rowCount() > 0){
   foreach($result as $row){
        $diff = $row->changed - $row->created;
        $e_time = time() - $row->changed;
        $title = htmlspecialchars($row->title, ENT_QUOTES, 'UTF-8');
        if($diff < 300){
                $status = "created";
        }else{
                $status = "edited";
        }
	$data .= "</tr>";
        $data .= "<tr align='center'>";
        $data .= "<th scope='row'>".time_elapsed($e_time).' '.ucfirst($row->type)."</th>";
        $data .= "<td><a href='node/".$row->nid."'>".$title."</a> was ".$status."</td>";
        $data .= "</tr>";
  }
echo $data;
}*/

function time_elapsed($secs){
    $bit = array(
        'Y'        => $secs / 31556926 % 12,
        'W'        => $secs / 604800 % 52,
        'D'        => $secs / 86400 % 7,
        'H'        => $secs / 3600 % 24,
        'm'        => $secs / 60 % 60,
        's'        => $secs % 60
        );

    foreach((array)$bit as $k => $v){
        if($v > 1)$ret[] = $v . $k;
        if($v == 1)$ret[] = $v . $k;
    }
    array_splice($ret, count($ret)-1, 0, 'and');
    $ret[] = 'ago';

    return join(' ', $ret);
}
