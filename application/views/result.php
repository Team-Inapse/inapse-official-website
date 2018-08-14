<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>해커톤 제출결과 열람</title>
        <style type="text/css">
            table {
                border: 0;
                border-collapse: collapse;
                border-spacing: 0;
            }
            table td, table th {
                border: 1px solid;
                padding: 2px 5px 2px 5px;
            }
            .text-center { text-align: center; }
            .text-right { text-align: right; }
        </style>
    </head>

    <body>
     <table class="text-center">
     <tr>
        
                <th>타임스탬프</th><th>팀명</th><th>깃헙링크</th>
                </tr>
                <?php
             foreach ($q->result() as $row) {
                echo '<tr><td>' . $row->timestamp . '</td>' .
                    '<td>' . $row->team_name . '</td>' .
                    '<td>' . $row->team_link . '</td></tr>';
             
}
         ?>
      </table>
    </body>
</html>
