<!DOCTYPE html>
<html lang="en">
<main>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <section class="border-bottom pb-5 pt-5 text-center">
        <div class="container pb-5 pt-5">
            <img src="https://cdn-icons-png.flaticon.com/512/1/1755.png" width="29" class="float-start" />
            <h3 class="float-start" style="padding-left: 9px;">แก้ไขวัคซีน : </h3><h3 style="margin-right: 1000px;"><?php echo "$center->centerName" ?></h3>
            <div class="row">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
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
                        echo
                        "<tr>
                            <td>Icon</td>
                            <td>$vaccineDetail->vaccineName</td>
                            <td>$vaccineDetail->totalDose</td>
                            <td>$vaccineDetail->description</td>
                            <td>$vaccineDetail->walk_in</td>
                            <td><a href=?controller=vaccineDetail&action=updateFormVaccineDetail&id=$vaccineDetail->id>Edit</a></td>
                            <td><a href=?controller=vaccineDetail&action=delete&id=$vaccineDetail->id>Delete</a> </td>";
                    ?>
                    <?php
                    }
                    echo "</table>";
                    ?>
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
</body>

</html>