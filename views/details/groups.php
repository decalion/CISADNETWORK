<?php

    include './models/classes/Group.php';

    $object = loadDetail('groups', $link);
    if ($object == null) {
        echo 'Group not found!';
    } else {
        $group = new Group($object['idgroups'], 
                            $object['name'], 
                            $object['year'], 
                            $object['imageurl'],
                            $object['average'], 
                            $object['totalvotes']);
        $group->show();
    }
    
?>