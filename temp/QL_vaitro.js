//Search bar
    const searchInput = document.querySelector('.search-input');
    const tableBody = document.getElementById('table').getElementsByTagName('tbody')[0];

    searchInput.addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const tableRows = tableBody.getElementsByTagName('tr');

    for (let i = 0; i < tableRows.length; i++) {
        const row = tableRows[i];
        const tableCells = row.getElementsByTagName('td');
        let found = false;

        for (let j = 0; j < tableCells.length; j++) {
        const cellText = tableCells[j].textContent.toLowerCase();
        if (cellText.indexOf(searchTerm) !== -1) {
            found = true;
            break;
        }
        }

        if (found) {
        row.style.display = '';
        } else {
        row.style.display = 'none';
        }
    }
    });

//Xuất file Excel
    document.getElementById('downloadexcel').addEventListener('click',function(){
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("table"));
    });  



//Xuất file PDF
    document.getElementById('downloadpdf').addEventListener('click', function() {
        // Lấy table từ DOM
        var table = document.getElementById('table');
        
        // Sao chép table để loại bỏ cột đầu tiên và cột cuối cùng
        var clonedTable = table.cloneNode(true);
        
        // Loại bỏ cột đầu tiên và cột cuối cùng
        clonedTable.querySelectorAll('tr > th:last-child, tr > td:last-child').forEach(function(cell) {
            cell.parentNode.removeChild(cell);
        });
        
        // Tạo tài liệu PDF từ table đã chỉnh sửa và đặt tên file và kích cỡ
        html2pdf().from(clonedTable).set({
            filename: 'Vaitro.pdf', // Tên file xuất ra
            pagebreak: { mode: 'avoid-all' }, // Tránh phân trang
            margin: [10, 10, 10, 10], // Kích cỡ viền (trên, phải, dưới, trái)
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' } // Định dạng và hướng của trang PDF
        }).save();
    }); 

//Tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


//Table 
    $(document).ready(function() {
        $('#table').DataTable({
            paging: true, // Kích hoạt chia trang
            pageLength: 5 // Số hàng hiển thị trên mỗi trang
        });
    });

//Page
 var tbody = document.querySelector("tbody");
		var pageUl = document.querySelector(".pagination");
		var itemShow = document.querySelector("#itemperpage");
		var tr = tbody.querySelectorAll("tr");
		var emptyBox = [];
		var index = 1;
		var itemPerPage = 5;

		for(let i=0; i<tr.length; i++){ emptyBox.push(tr[i]);}

		itemShow.onchange = giveTrPerPage;
		function giveTrPerPage(){
			itemPerPage = Number(this.value);
			// console.log(itemPerPage);
			displayPage(itemPerPage);
			pageGenerator(itemPerPage);
			getpagElement(itemPerPage);
		}

		function displayPage(limit){
			tbody.innerHTML = '';
			for(let i=0; i<limit; i++){
				tbody.appendChild(emptyBox[i]);
			}
			const  pageNum = pageUl.querySelectorAll('.list');
			pageNum.forEach(n => n.remove());
		}
		displayPage(itemPerPage);

		function pageGenerator(getem){
			const num_of_tr = emptyBox.length;
			if(num_of_tr <= getem){
				pageUl.style.display = 'none';
			}else{
				pageUl.style.display = 'flex';
				const num_Of_Page = Math.ceil(num_of_tr/getem);
				for(i=1; i<=num_Of_Page; i++){
					const li = document.createElement('li'); li.className = 'list';
					const a =document.createElement('a'); a.href = '#'; a.innerText = i;
					a.setAttribute('data-page', i);
					li.appendChild(a);
					pageUl.insertBefore(li,pageUl.querySelector('.next'));
				}
			}
		}
		pageGenerator(itemPerPage);
		let pageLink = pageUl.querySelectorAll("a");
		let lastPage =  pageLink.length - 2;
		
		function pageRunner(page, items, lastPage, active){
			for(button of page){
				button.onclick = e=>{
					const page_num = e.target.getAttribute('data-page');
					const page_mover = e.target.getAttribute('id');
					if(page_num != null){
						index = page_num;

					}else{
						if(page_mover === "next"){
							index++;
							if(index >= lastPage){
								index = lastPage;
							}
						}else{
							index--;
							if(index <= 1){
								index = 1;
							}
						}
					}
					pageMaker(index, items, active);
				}
			}

		}
		var pageLi = pageUl.querySelectorAll('.list'); pageLi[0].classList.add("active");
		pageRunner(pageLink, itemPerPage, lastPage, pageLi);

		function getpagElement(val){
			let pagelink = pageUl.querySelectorAll("a");
			let lastpage =  pagelink.length - 2;
			let pageli = pageUl.querySelectorAll('.list');
			pageli[0].classList.add("active");
			pageRunner(pagelink, val, lastpage, pageli);
			
		}
			
		function pageMaker(index, item_per_page, activePage){
			const start = item_per_page * index;
			const end  = start + item_per_page;
			const current_page =  emptyBox.slice((start - item_per_page), (end-item_per_page));
			tbody.innerHTML = "";
			for(let j=0; j<current_page.length; j++){
				let item = current_page[j];					
				tbody.appendChild(item);
			}
			Array.from(activePage).forEach((e)=>{e.classList.remove("active");});
     		activePage[index-1].classList.add("active");
		}

//Button xóa
	//Hiện thông báo<button onclick="showAlert()">Hiển thị cảnh báo</button>
  function showAlert() {
    Swal.fire({
      title: 'Cảnh báo!',
      text: 'Bạn có chắc muốn thực hiện hành động này?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Có',
      cancelButtonText: 'Không',
    }).then((result) => {
      if (result.isConfirmed) {
        // Xử lý khi người dùng nhấn nút "Có"
        Swal.fire('Thực hiện thành công!', '', 'success');
      }
    });
  }
