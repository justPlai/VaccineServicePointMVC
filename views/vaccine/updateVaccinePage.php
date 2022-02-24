<main>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <div class="container " style="margin-left: 293px;">
        <td> </td>
        <br>
        <h1>Edit vaccine</h1>
        <form>
            <input type="hidden" name="id" value=<?php echo "$vaccine->id" ?>>
            <label for="lname">Vaccine name</label>
            <input type="text" id="vaccineName" name="vaccineName" value=<?php echo "$vaccine->vaccineName" ?>>
            <br>
            <br>
            <label for="lname">Image link</label>
            <input type="text" id="imgIcon" name="imgIcon" value=<?php echo "$vaccine->imgIcon" ?>>
            <br>
            <br>
        
        <input type="hidden" name="controller" value="vaccine">
        <button type="submit" name="action" value="index" style="margin-left: 14px;">Cancel</button>
        <button type="submit" name="action" value="updateVaccine" style="margin-left: 14px;">Edit Vaccine</button>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>


    <svg viewBox="0 0 1440 134" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="bg-dark d-block text-white" width="100%" height="80">
        <path d="M 0 0 H 1440 V 60 C 854 276 596 -66 0 60 V 0 Z" />
    </svg>
    <section class="bg-dark pb-5 pt-5 text-white-50">
        <div class="container">
        </div>
    </section>
    <section class="bg-dark pb-5 pt-5 text-white-50">
        <div class="container">
        </div>
    </section>
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