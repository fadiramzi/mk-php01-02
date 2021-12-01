<?php

    $contacts = array(
        array(
            'id'=>1,
            'name'=>'Fadi',
            'phone'=>'07713FFFFFFFFFF',
            'email'=>'fadi@email.com'
        ),
        array(
            'id'=>2,
            'name'=>'Ali',
            'phone'=>'07713FFFRRRFFFFF',
            'email'=>'ali@email.com'
        ),
        array(
            'id'=>3,
            'name'=>'Hassan',
            'phone'=>'07713FFEEEEE',
            'email'=>'hassan@email.com'
        )
    );
    echo '<table>
    <tr>
    <th>
    ID
    </th>
    <th>
    Name
    </th>
    <th>
    Phone
    </th>
    <th>
    Email
    </th>
    </tr>';
    foreach($contacts as $value)
    {
        // person information
        echo '<tr>';
        foreach($value as $key=>$info)
        {
            echo  '<td>'.$info.'</td>';
        }

        echo '</tr>';
    }
    echo '</table>';
?>