<form method="get" action="">
<!DOCTYPE html>
<html lang="en">
<main>
            <svg viewBox="0 0 1440 185" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="d-block text-primary" width="100%" height="160">
                <path d="M 0 0 H 1440 V 60 C 1114 355 700 35 516 35 C 333 35 246 199 0 60 V 0 Z"/>
            </svg>
            <div class="container " style="margin-left: 293px;">
                <td>  </td>
                <br>
                <h1>Add center</h1>
                <form>
                    <label >Center name</label>
                    <input type="text"  name="CenterName" >
                    <br>
                    <br>
                    <label >Date Start</label>
                    <input type="date"  name="DateStart" >
                    <br>
                    <br>
                    <label >Date Stop</label>
                    <input type="date"  name="DateStop" >
                    <br>
                    <br>
                    <label >Time start</label>
                    <input type="time"  name="TimeStart" >
                    <br>
                    <br>
                    <label >Time stop</label>
                    <input type="time"  name="TimeStop" >
                    <br>
                    <br>
                    <label >Website link</label>
                    <input type="text"  name="Websitelink" >
                    <br>
                    <br>
                    <label >Image link</label>
                    <input type="text"  name="Imagelink" >
                    <br>
                    <br>
                    <label >Location google link</label>
                    <input type="text"  name="Locationlink" >
                    <br>
                    <br>
                    <input type="text"  name="filler" value="1"> 
                </form>
                <input type="hidden" name="controller" value="admin" />
                
                <button type="submit" name="action" value="editCenterIndex">Cancle</button>
                <input type="hidden" name="controller" value="center" />
                <button style="margin-left: 14px;" type="submit" name="action" value="addCenter">Add center</button>
            </div>
            <svg viewBox="0 0 1440 134" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" class="bg-dark d-block text-white" width="100%" height="80">
                <path d="M 0 0 H 1440 V 60 C 854 276 596 -66 0 60 V 0 Z"/>
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