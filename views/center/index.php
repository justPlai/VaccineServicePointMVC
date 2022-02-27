<main>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <section class="border-bottom pb-5 pt-5 text-center">
        <img src="https://freeiconshop.com/wp-content/uploads/edd/search-flat.png" width="29" class="float-start" style="margin-left: 135px" />
        <div>
            <h3 class="float-start" style="padding-left: 9px;">Search : </h3>
            <form method="get" action="">
                <input type="text" name="key" value=<?php echo "$key" ?>>
                <input type="hidden" name="controller" value="center">
                <button type="submit" name="action" value="search" style="margin-right: 950px">search</button>
            </form>
        </div>
        <div class="container pb-5 pt-5">


            <div class="row">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Center Name</th>
                        <th scope="col">Date Start</th>
                        <th scope="col">Date Stop</th>
                        <th scope="col">Time Start</th>
                        <th scope="col">Time Stop</th>
                        <th scope="col">Vaccine detail</th>
                        <th scope="col">Google map</th>
                        <th scope="col">Website</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($centerList as $center) {
                        echo "<tr>";
                        if ($center->imgIcon == null) {
                            echo "<td><img src=https://media.discordapp.net/attachments/818770134902374460/947398434699231232/PinClipart.com_hospital-clipart_293561.png?width=60&height=60 /></td>";
                        } else {
                            echo "<td><img src=$center->imgIcon width=60 height=60/></td>";
                        }
                        echo "
                            <td>$center->centerName</td>
                            <td>$center->date_start</td>
                            <td>$center->date_end</td>
                            <td>$center->time_start</td>
                            <td>$center->time_end</td>
                            
                            <td><a href=?controller=vaccineDetail&action=index&id=$center->id>
                            <img src=https://cdn-icons-png.flaticon.com/512/1/1755.png width=20/></a></td>
                            <td><a href=$center->locationlink>
                            <img src=https://cdn.jim-nielsen.com/ios/512/google-maps-2014-11-12.png width=20/></a></td>
                            <td><a href=$center->websiteOfficial>
                            <img src=https://cdn-icons-png.flaticon.com/512/4298/4298077.png width=20/></a></td>";
                    ?>
                    <?php
                    }
                    echo "</table>";
                    ?>

        </div>
        </tbody>
        </table>
        </div>
        <!-- <nav aria-label="...">
            <ul class=" pagination" style="margin-left: 819px;">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> -->
    </section>
    <section class="pb-5 pt-5">
    </section>
    <svg viewBox="0 0 1440 134" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="bg-dark d-block text-white" width="100%" height="80">
        <path d="M 0 0 H 1440 V 60 C 854 276 596 -66 0 60 V 0 Z" />
    </svg>
    <section class="bg-dark pb-5 pt-5 text-white-50">
        <div class="container">
            <div class="align-items-center mb-3 row">
                <div class="col-xl-9 ms-auto">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary text-center text-lg-start text-white">
    </section>
</main>
<script src="assets/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>