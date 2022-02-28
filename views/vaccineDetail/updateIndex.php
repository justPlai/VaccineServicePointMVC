<!DOCTYPE html>
<html lang="en">
<main>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <section class="border-bottom pb-5 pt-5 text-center">
        <div class="container pb-5 pt-5">
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/1/1755.png" width="29" class="float-start" />
                <h3 class="float-start" style="padding-left: 9px;">แก้ไขรายละเอียดวัคซีน : <?php echo "$center->centerName" ?></h3>
                <form>
                    <input type="hidden" name="controller" value="vaccineDetail">
                    <input type="hidden" name="id" value=<?php echo "$center->id" ?>>
                    <button class="btn btn-success" type="submit" name="action" value="addVaccineDetailPage" style="margin-left: 1100px;">add VaccineDetail</button>
                </form>
            </div>
            <br>
            <div class="row">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> </th>
                        <!-- <th scope="col">Vaccinedetail id</th> -->
                        <th scope="col">Vaccine Name</th>
                        <th scope="col">Dose total</th>
                        <th scope="col">Condition</th>
                        <th scope="col">Walk-in</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($vaccineDetailList as $vaccineDetail) {

                        if ($vaccineDetail->walk_in == 1) {
                            $x = "https://cdn-icons-png.flaticon.com/512/6276/6276686.png";
                            $width = 41;
                            $marginleft = 20;
                        } else {
                            $x = "https://www.moneycorp.com/globalassets/images/email/icons/no-cross-icon.png";
                            $width = 31;
                            $marginleft = 28;
                        }
                        echo
                        "<tr>
                            <td><img src=$vaccineDetail->imgIcon width=80/></td>
                            <td>$vaccineDetail->vaccineName</td>
                            <td>$vaccineDetail->totalDose</td>
                            <td style='text-align: left; max-width: 600px;'>$vaccineDetail->description</td>
                            
                            <td><img src='$x' width='$width' style='margin-left: $marginleft px;'></td>
                            
                            <td><a class='btn btn-warning' href=?controller=vaccineDetail&action=updateFormVaccineDetail&vaccineDetailID=$vaccineDetail->id>Edit</a></td>
                            <td>
                            <a type=button class='btn btn-danger' onclick=myFunction($vaccineDetail->id)>Delete</a> </td>
                            
                            </td>";
                    ?>
                    <?php
                    }
                    echo "</table>";
                    ?>
                    <!-- <td>$vaccineDetail->walk_in</td> -->
        </div>
        </tbody>
        </table>
        </div>
    </section>
    <svg viewBox="0 0 1440 134" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="bg-dark d-block text-white" width="100%" height="80">
        <path d="M 0 0 H 1440 V 60 C 854 276 596 -66 0 60 V 0 Z" />
    </svg>
    <section class="bg-dark pb-5 pt-5 text-white-50">
        <div class="container">
        </div>
    </section>
    <section class="bg-primary text-center text-lg-start text-white">
    </section>
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
                window.location.href="?controller=vaccineDetail&action=delete&id="+<?php echo $vaccineDetail->centerId ?>+"&vaccineDetail_id="+id
            }
        })
    }
</script>
</body>

</html>