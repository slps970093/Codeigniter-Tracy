<?php
/** @var CI_Controller $CI */
$CI = & get_instance();
$queries = $CI->db->queries;    // 所有查詢過的語法
$query_times = $CI->db->query_times;    // 查詢時間
$query_count = $CI->db->query_count;    // 查詢筆數

$sqlQuery = [];
if ($query_count >= 1) {
    foreach ($queries as $key => $sql) {
        $sqlQuery[$sql] = $query_times[$key];
    }
}

?>


<h1>Database</h1>

<div class="tracy-inner">
    <div class="tracy-inner-container">
        <table>
            <thead>
                <tr>
                    <td>SQL</td>
                    <td>Query Time</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sqlQuery as $sql => $queryTime) { ?>
                <tr>
                    <td><?= $sql ?></td>
                    <td><?= $queryTime ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
