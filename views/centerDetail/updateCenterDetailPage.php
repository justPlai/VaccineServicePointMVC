<form method="get" action="">



    <main>
        <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
            <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z" />
        </svg>
        <div class="container " style="margin-left: 300px;">
            <br>
            <br>
            <form>
                <h2 for="">Center : <?php echo "$centerName" ?></h2>
                <br>    
                <h5 for="">Date : <?php echo "$centerdetail->date" ?></h5>
                <br>
                <label for="">Dosed Total</label>
                <input type="text" name="totalDosed" value=<?php echo "$centerdetail->totalDosed" ?>>
                <br>
                <br>
                <input type="hidden" name="controller" value="centerDetail" />
                <input type="hidden" name="filler" value="1" />
                <!-- เหลือที่ filler มันยังเป้นแบบfix ค่าอยู่ ต้องแก้ให้เป็นเปลี่ยนไปตาม บช.-->

                <input type="hidden" name="id" value="<?php echo $centerdetail->centerId; ?>" />
                <input type="hidden" name="idcenterDetail" value="<?php echo $centerdetail->id; ?>" />
                <button class="btn btn-danger" type="submit" style="margin-left: 62px;" name="action" value="index">Cancel</button>
                <button class="btn btn-primary" type="submit" style="margin-left: 24px;" name="action" value="updateCenterDetail">Update dosed</button>
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