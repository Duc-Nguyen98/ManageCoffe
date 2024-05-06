<?php include 'layout/header.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container-fluid py-4 my-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title text-left mb-0">Bảng Danh Mục - Phân Loại Sản Phẩm</h5>
                        <div class="exportAction">
                            <button type="button" class="btn btn-success" data-mdb-ripple-init><i class="fas fa-file-excel fa-lg"></i> Excel</button>
                            <button type="button" class="btn btn-danger" data-mdb-ripple-init><i class="far fa-file-pdf fa-lg"></i> PDF</button>
                            <button type="button" class="btn btn-info" data-mdb-ripple-init> <i class="fas fa-file-arrow-up fa-lg"></i> Import</button>
                            <button type="button" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-folder-plus fa-lg"></i> Thêm Mới</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle mb-0 bg-white table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>ID Danh Mục</th>
                                    <th>Hình Ảnh</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Mô Tả </th>
                                    <th>Trạng Thái</th>
                                    <th>Lịch Sử Cập Nhật</th>
                                    <th>Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><b>NCC1</b></td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />

                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p class="fw-bold mb-1">Trái cây tươi</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0">Trái cây tươi thường có màu sắc tươi sáng và hấp dẫn...</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Đang Hoạt Động</span>
                                    </td>
                                    <td class="text-muted">10:20:30 - 03/05/2024</td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-info bg-gradient text-white" data-mdb-ripple-color="dark">
                                            <i class="fas fa-eye fa-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-primary bg-gradient text-white" data-mdb-ripple-color="dark">
                                            <i class="fas fa-marker fa-lg"></i>

                                        </button>
                                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold bg-danger bg-gradient text-white" data-mdb-ripple-color="dark">
                                            <i class="fas fa-recycle fa-lg"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="my-3 d-flex justify-content-between align-items-center">
                            <p class="m-0">
                                Rows per page: <span class="text-primary"> 1 - 10</span> of <span class="text-primary"> 14</span>
                            </p>
                            <!-- pagination -->
                            <nav aria-label="...">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- pagination -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<!--Main layout-->

<?php include 'layout/footer.php'; ?>