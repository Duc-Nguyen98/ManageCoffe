$(document).ready(function() {
    $(".cup").hide();
  });

//scroll
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset;
        const image = document.querySelector('.sticky-image');
    
        image.style.top = `${scrollTop}px`;
    });


//notification
    var box = document.getElementById('box');;
    var down = false;
    var notificationIcon = document.querySelector('.notification-icon');

    function toggleNotifi() {
        if (down) {
            // Đóng box
            closeBox();
        } else {
            // Mở box
            openBox();
        }
    }

    // Hàm mở box
    function openBox() {
        box.style.height = '400px';
        box.style.display = 'block';
        box.style.zIndex = '9';
        down = true;
        // Lắng nghe sự kiện click trên toàn bộ trang
        document.addEventListener('click', closeBoxOnClickOutside);
    }
    // Hàm đóng box
    function closeBox() {
        box.style.height = '0px';
        box.style.display= 'none';
        box.style.zIndex = '0';
        down = false;
        // Ngừng lắng nghe sự kiện click trên toàn bộ trang
        document.removeEventListener('click', closeBoxOnClickOutside);
    }
    // Hàm xử lý sự kiện click ra ngoài box
    function closeBoxOnClickOutside(event) {
        // Kiểm tra xem click có diễn ra bên trong box hay không
        var isClickedInsideBox = box.contains(event.target);
        var isClickedInsideNotificationIcon = notificationIcon.contains(event.target);

        // Nếu click ra ngoài box và không phải là click vào notification icon, đóng box
        if (!isClickedInsideBox && !isClickedInsideNotificationIcon) {
            closeBox();
        }
    }

//Menu nhỏ
document.addEventListener("DOMContentLoaded", function() {
    const navItems = document.querySelectorAll('.sidebar-left .nav-item');
    const sidebarSecondary = document.querySelector('.sidebar-left-secondary');

    // Duyệt qua từng phần tử .nav-item
    navItems.forEach(function(navItem) {
        navItem.addEventListener('click', function(event) {
            event.stopPropagation();
            
            // Kiểm tra thuộc tính data-submenu
            const hasSubMenu = this.getAttribute('data-submenu') === 'true';
            
            // Ẩn tất cả các phần tử .childNav
            document.querySelectorAll('.childNav').forEach(function(childNav) {
                childNav.style.display = 'none';
            });
            
            // Kiểm tra xem có phần tử .childNav nào có data-parent giống với data-item của .nav-item không
            if (hasSubMenu) {
                const dataItem = this.getAttribute('data-item');
                const matchingChildNav = document.querySelector('.childNav[data-parent="' + dataItem + '"]');
                
                // Hiển thị .sidebar-left-secondary
                sidebarSecondary.style.display = 'block';
                
                if (matchingChildNav) {
                    matchingChildNav.style.display = 'block';
                }
            } else {
                // Ẩn .sidebar-left-secondary nếu không có data-submenu="true"
                sidebarSecondary.style.display = 'none';
            }
        });
    });

    // Thêm sự kiện click vào cả trang để ẩn .sidebar-left-secondary khi click ra ngoài
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.sidebar-left')) {
            sidebarSecondary.style.display = 'none';
        }
    });
})


//Màu thẻ Li
    var items = document.querySelectorAll('li.nav-item');
    // Lặp qua từng thẻ <li>
    items.forEach(function(item) {
        // Gắn sự kiện click cho mỗi thẻ <li>
        item.addEventListener('click', function() {
            // Kiểm tra xem thẻ <li> đang có lớp 'nav-item-active' hay không
            var isActive = this.classList.contains('nav-item-active');
            
            // Loại bỏ lớp 'nav-item-active' khỏi tất cả các thẻ <li> khác
            items.forEach(function(item) {
                item.classList.remove('nav-item-active');
            });
            
            // Nếu thẻ <li> chưa có lớp 'nav-item-active', thêm vào; ngược lại, loại bỏ
            if (!isActive) {
                this.classList.add('nav-item-active');
            }
        });
    });

    // Gắn sự kiện click vào cả trang để ẩn phần tử "sidebar-left-secondary" khi click ra ngoài
    document.addEventListener('click', function(event) {
        // Kiểm tra xem click có xảy ra trong một thẻ <li> không
        var isClickedInsideLi = event.target.closest('li.nav-item');
        if (!isClickedInsideLi) {
            // Loại bỏ lớp 'nav-item-active' khỏi tất cả các thẻ <li> khi không có thẻ <li> nào được click
            items.forEach(function(item) {
                item.classList.remove('nav-item-active');
            });
        }
    });


//Profile
    let profileDropdownList = document.querySelector(".profile-dropdown-list");
    let btn = document.querySelector(".profile-dropdown-btn");
    const toggle = () => profileDropdownList.classList.toggle("active");

    document.addEventListener("click", function(event) {
        // Kiểm tra xem click có diễn ra bên trong dropdown hay không
        var isClickedInsideDropdown = profileDropdownList.contains(event.target);
        var isClickedInsideBtn = btn.contains(event.target);

        // Nếu click ra ngoài dropdown và không phải là click vào nút dropdown, đóng dropdown
        if (!isClickedInsideDropdown && !isClickedInsideBtn) {
            profileDropdownList.classList.remove("active");
        }
    });

