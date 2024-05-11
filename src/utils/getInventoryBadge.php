<?php
function getInventoryBadge($inventory_count)
{
    $badge_class = '';
    $message = '';

    if ($inventory_count == 0) {
        $badge_class = 'badge-danger';
        // $message = 'Hết hàng';
    } elseif ($inventory_count <= 50) {
        $badge_class = 'badge-warning';
        // $message = 'Sắp hết hàng';
    } else {
        $badge_class = 'badge-success';
        // $message = 'Số lượng Khả dụng';
    }

    return '<span class="badge ' . $badge_class . ' rounded-pill d-inline">' . $inventory_count . '</span>';
}
function getInventoryText($inventory_count)
{
    $badge_class = '';
    $message = '';

    if ($inventory_count == 0) {
        $badge_class = 'badge-danger';
        $message = 'Hết hàng';
    } elseif ($inventory_count <= 50) {
        $badge_class = 'badge-warning';
        $message = 'Sắp hết hàng';
    } else {
        $badge_class = 'badge-success';
        $message = 'Số lượng Khả dụng';
    }

    return '<span class="badge ' . $badge_class . ' rounded-pill d-inline">' . $message . '</span>';
}



    // getInventoryBadge($row['inventory_count']);
?>

