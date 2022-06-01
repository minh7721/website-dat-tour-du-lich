<div class="box-container">
            <?php
            foreach ($getAllTour as $getTour) {
            ?>
                <div class="box">
                    <img src="<?php echo $getTour['anhDiaDiem'] ?>" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i><?php echo $getTour['tenTour'] ?></h3>
                        <p class="moTaDiaDiem"><?php echo $getTour['moTaDiaDiem'] ?></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <div class="priceX">
                                <?php echo $getTour['giaSauGiam'] ?>
                            </div>
                            <span class="priceX">
                                <?php echo $getTour['giaBanDau'] ?>
                            </span>
                        </div>
                        <a href="?controller=customer&action=chiTietTour" class="btn btnDatNgay">Đặt ngay</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagination-lg mt-3">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                if (isset($_POST['current_page'])) {
                    $current_page = $_POST['current_page'];
                } else {
                    $current_page = 1;
                }
                for ($i = 1; $i <= $soTrang; $i++) {
                ?>
                    <li page="<?= $i ?>" class="page-item pageNum"><a class="page-link" href="#"><?= $i ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>