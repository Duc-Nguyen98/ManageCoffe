<?php
function getClassBadge($inventory_count)
{
    $badge_class = '';
    $count = $inventory_count;

    if ($inventory_count == 0) {
        $badge_class = 'badge-danger';
    } elseif ($inventory_count <= 50) {
        $badge_class = 'badge-warning';
    } else {
        $badge_class = 'badge-primary';
    }

    return '<h4 class="badge ' . $badge_class . ' rounded-pill d-inline">' . $count . '/SL</h4>';
}

    // getInventoryBadge($row['inventory_count']);
?>

