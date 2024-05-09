<?php
function getProductDescription($role)
{
    switch ($role) {
        case 0:
            return 'Quản trị viên cấp cao';
        case 1:
            return 'Quản trị viên';
        case 2:
            return 'Quản lý';
        case 3:
            return 'Quản lý nhập';
        case 4:
            return 'Nhân viên';
        default:
            return 'Khác';
    }
}
?>
