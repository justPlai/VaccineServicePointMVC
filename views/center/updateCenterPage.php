<form method="get" action="">
<main>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <div class="container " style="margin-left: 804px;">
        <td>
            <img src="<?php echo "$center->imgIcon"?>" width="156" style="margin-left: 60px;">
        </td>
        <br>
        <br>
        <form>
            <label for="">Center name</label>
            <input type="text"  name="CenterName" value=<?php echo "$center->centerName"?>>
            <br>
            <br>
            <label for="lname">Date Start</label>
            <input type="date"  name="DateStart" value=<?php echo "$center->date_start"?>>
            <br>
            <br>
            <label for="lname">Date Stop</label>
            <input type="date"  name="DateStop" value=<?php echo "$center->date_end"?>>
            <br>
            <br>
            <label for="lname">Time Start</label>
            <input type="time"  name="TimeStart" value=<?php echo "$center->time_start"?>>
            <br>
            <br>
            <label for="lname">Time Stop</label>
            <input type="time"  name="TimeStop" value=<?php echo "$center->time_end"?>>
            <br>
            <br>
            <label for="lname">Website link</label>
            <input type="text"  name="Websitelink" value=<?php echo "$center->websiteOfficial"?>>
            <br>
            <br>
            <label for="lname">Image link</label>
            <input type="text"  name="Imagelink" value=<?php echo "$center->imgIcon"?>>
            <br>
            <br>
            <label for="lname">Location google link</label>
            <input type="text"  name="Locationlink" value=<?php echo "$center->locationlink"?>>
            <br>
            <br>
        <input type="hidden" name="controller" value="center" />
        <input type="hidden" name="id" value="<?php echo $center->id; ?>"/>
        <button class="btn btn-danger" type="submit" style="margin-left: 62px;" name="action" value="updateCenterIndex">Cancel</button>
        <button class="btn btn-primary" type="submit" style="margin-left: 24px;" name="action" value="updateCenter">Update center</button>
        </form>
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