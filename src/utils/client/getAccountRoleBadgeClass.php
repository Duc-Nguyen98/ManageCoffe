<?php

function getAccountRoleBadgeClass($role)
{

    switch ($role) {
        case 0:
            return 'badge-primary';
        case 1:
            return 'badge-danger';
        case 2:
            return 'badge-success';
        case 3:
            return 'badge-warning';
        case 4:
            return 'badge-info';
        default:
            return 'badge-secondary'; // Giá trị mặc định nếu không khớp với các trường hợp trên
    }
}
