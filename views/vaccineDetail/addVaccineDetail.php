<main>
    <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
        <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
    </svg>
    <div class="container " style="margin-left: 415px;">
        <td> </td>
        <br>
        <form style="margin-left: 0px;">
            <h4 class="fs-3">เพิ่มวัคซีน : ศูนย์ฉีดวัคซีนกลางบางซื่อ</h4>
            <br>
            <b>เลือกวัคซีน </b>
            <select name="Vaccibe" id="vac">
                <option value="volvo">pfizer</option>
                <option value="saab">astrazeneca</option>
                <option value="opel">moderna</option>
            </select>
            <br>
            <br>
            <label for="lname">Dose total</label>
            <input type="text" id="fname" name="fname" value="">
            <br>
            <br>
            <label for="lname">Condition</label>
            <div class="mb-3">
                <textarea class="form-control" id="formInput87" rows="3" style="width: 1000px; height: 238px;"></textarea>
            </div>
            <label for="lname">Walk-in</label>
            <select name="Vaccibe" id="vac">
                <option value="volvo">Yes</option>
                <option value="saab">No</option>
            </select>
            <br>
            <br>
            <br>
            <input type="hidden" name="controller" value="vaccineDetail">
            <input type="hidden" name="id" value=<?php echo "$id" ?>>
            <button type="submit" name="action" value="index" style="margin-left: 496px;">Cancle</button>
            <button style="margin-left: 10px;">Add vaccine</button>
        </form>
    </div>
    <svg viewBox="0 0 1440 134" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="bg-dark d-block text-white" width="100%" height="80">
        <path d="M 0 0 H 1440 V 60 C 854 276 596 -66 0 60 V 0 Z" />
    </svg>
    <section class="bg-dark pb-5 pt-5 text-white-50">
        <div class="container">
        </div>
    </section>
</main>
<script src="assets/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>