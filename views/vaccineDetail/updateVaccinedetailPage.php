<!DOCTYPE html>
<html lang="en">
<main>
    <section class="bg-primary pb-3 pt-3 text-center text-white">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-6 col-lg-2 col-md-4 col-sm-6 ">
                </div>
                <div class="col-6 col-lg-2 col-md-4 col-sm-6 ">
                </div>
                <div class="col-6 col-lg-2 col-md-4 col-sm-6 ">
                </div>
                <div class="col-6 col-lg-2 col-md-4 col-sm-6 ">
                </div>
                <div class="col-6 col-lg-2 col-md-4 col-sm-6 ">
                </div>
            </div>
        </div>
    </section>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <div class="container " style="margin-left: 0px;">
        <td> </td>
        <br>
        <form style="margin-left: 270px;">
            <h4>แก้ไขรายละเอียดวัคซีน : <?php echo "$center->centerName" ?></h4>
            <br>
            <b>เลือกวัคซีน </b>
            <select name="vaccineId">
                <?php foreach ($vaccineList as $vac) {
                    echo "<option value = $vac->id";
                    if ($vaccineDetail->vaccineId == $vac->id) {
                        echo " selected='selected'";
                    }
                    echo ">$vac->vaccineName</option>";
                } ?>
            </select>
            <br>
            <br>
            <label>Dose total</label>
            <input type="text" name="Dosetotal" value=<?php echo "$vaccineDetail->totalDose" ?>>
            <br>
            <br>
            <label for="lname">Condition</label>
            <div class="mb-3">
                <textarea name="Condition" type="text" rows="3" style="width: 1000px; height: 238px;"><?php echo $vaccineDetail->description; ?></textarea>
            </div>
            <label for="lname">Walk-in</label>
            <select name="walk_in">
                <?php
                if ($vaccineDetail->walk_in == 1) {
                    echo "<option value=1 selected='selected'>Yes</option>";
                    echo "<option value=0 >No</option>";
                } else if ($vaccineDetail->walk_in == 0) {
                    echo "<option value=1 >Yes</option>";
                    echo "<option value=0 selected='selected'>No</option>";
                }
                ?>

            </select>
            <br>
            <br>
            <br>

            <input type="hidden" name="controller" value="vaccineDetail">
            <input type="hidden" name="id" value=<?php echo "$center->id" ?>>
            <input type="hidden" name="vaccineDetailID" value=<?php echo "$vaccineDetail_id" ?>>
            <button class="btn btn-danger" type="submit" name="action" value="index" style="margin-left: 496px;">Cancel</button>
            <button class="btn btn-primary" type="submit" name="action" value="updateVaccineDetail">Edit vaccine</button>
        </form>S
    </div>
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