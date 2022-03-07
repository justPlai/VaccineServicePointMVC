<form method="get" action="">
    <!DOCTYPE html>
    <html lang="en">
    <main>
        <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
            <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
        </svg>
        <section class="border-bottom pb-5 pt-5 text-center">
            <div class="container pb-5 pt-5">
                <img src="https://cdn-icons-png.flaticon.com/512/6688/6688341.png" width="35" class="float-start" />
                <h3 class="float-start" style="padding-left: 9px;">Edit Dose daily : <?php echo "$center->centerName" ?></h3>
                <!-- <form>
                    <input type="hidden" name="stationId" value=<?php //echo $centerId ?>>
                    <input type="hidden" name="controller" value="centerDetail">
                    <input type="submit" name="action" value="generateDate">
                </form> -->
                
                <div class="row">
                </div>
                <div class="row">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Total Dosed</th>
                            <th scope="col">Edit Dose</th>
                            
                        </tr>
                    <tbody>
                        <?php
                        foreach ($centerDetailList as $centerDetail) {
                            echo "<tr>";
                            $timestamp = strtotime($centerDetail->date);
                            $new_date = date("d-m-Y", $timestamp);
                            echo "
                            <td>$new_date</td>
                            <td>$centerDetail->totalDosed</td>
                            <td><a class='btn btn-warning' href=?controller=centerDetail&action=updateFormCenterDetail&id=$centerDetail->id&centerName=$center->centerName>editDosed</a></td>
                            ";
                        ?>
                        <?php
                        }
                        echo "</table>";
                        ?>
            </div>

            </tbody>
            </thead>
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
        <svg viewBox="0 0 1440 134" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="bg-dark d-block text-white" width="100%" height="80">
            <path d="M 0 0 H 1440 V 60 C 854 276 596 -66 0 60 V 0 Z" />
        </svg>
    </main>
    <script src="assets/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        function myFunction(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "?controller=center&action=delete&id=" + id
                }
            })
        }
    </script>
    </body>
    <section class="bg-dark pb-5 pt-5 text-white-50">
        <div class="container">
            <div class="align-items-center mb-3 row">
                <div class="col-xl-9 ms-auto">
                </div>
            </div>
        </div>
    </section>

    </html>