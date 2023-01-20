<?php

namespace Mentor_task;
require 'DbImport.php';
require 'index.php';
use Mentor_task\DbImport;
use PDO;


class ReportImport implements iImport
{

    public function dataInsert(array $data)
    {

        ?>
        <!DOCTYPE html>
        <head>

        </head>

        <body>

        <table>

            <tr>
                <td>id</td>
                <td>name</td>
                <td>age</td>
                <td>email</td>
            </tr>
            <?php
            $html = '';
            foreach ($data as $datum) {
                $html .= '<tr>';
                $html .= '<td>' . $datum['id'] . '</td>';
                $html .= '<td>' . $datum['name'] . '</td>';
                $html .= '<td>' . $datum['age'] . '</td>';
                $html .= '<td>' . $datum['email'] . '</td>';
                $html .= '</tr>';
            }
            echo $html;
            ?>

        </table>


        </body>
    <?php
    }

}



