/*Upload img*/
    const dropArea = document.getElementById("drop-area");
    const inputFile = document.getElementById("input-file");
    const imageView = document.getElementById("img-view");

    inputFile.addEventListener("change",uploadImage);

    function uploadImage(){
        let imgLink = URL.createObjectURL(inputFile.files[0]);
        imageView.style.backgroundImage = `url(${imgLink})`;
        imageView.textContent ="";
        imageView.style.border = 0;
    }

    dropArea.addEventListener("dragover",function(e){
        e.preventDefault();
    });
    dropArea.addEventListener("drop",function(e){
        e.preventDefault();
        inputFile.files = e.dataTransfer.files;
        uploadImage();
    });

/*Dropdown Select*/
// Lặp qua tất cả các select-menu trên trang
document.querySelectorAll('.select-menu').forEach(optionMenu => {
    const selectBtn = optionMenu.querySelector('.select-btn');
    const options = optionMenu.querySelectorAll('.option');
    const sBtn_text = optionMenu.querySelector('.sBtn-text');

    // Thêm sự kiện click cho nút mở rộng
    selectBtn.addEventListener('click', () => {
        optionMenu.classList.toggle('active');
    });

    // Thêm sự kiện click cho từng tùy chọn
    options.forEach(option => {
        option.addEventListener('click', () => {
            let selectedOption = option.querySelector('.option-text').innerText;
            sBtn_text.innerText = selectedOption;
            optionMenu.classList.remove('active');
        });
    });
});




