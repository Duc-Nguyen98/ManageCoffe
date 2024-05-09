<?php include 'layout/header.php'; ?>

<!-- Start your project here-->
<div class="container">

    <div class="card">
        <img src="img/product/coffe.jpg" class="card-img-top" alt="Fissure in Sandstone" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
        </div>
    </div>

    <canvas data-mdb-chart-init data-mdb-chart="bar" data-mdb-dataset-label="Traffic" data-mdb-labels="['Monday', 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday ']" data-mdb-dataset-data="[2112, 2343, 2545, 3423, 2365, 1985, 987]"></canvas>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <select data-mdb-select-init>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            <option value="5">Five</option>
            <option value="6">Six</option>
            <option value="7">Seven</option>
            <option value="8">Eight</option>
        </select>
    </div>
</div>
<!-- End your project here-->

<?php include 'layout/footer.php'; ?>