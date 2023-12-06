
 

<!-- Button trigger modal -->
<button type="button" class="btn mb-5 download-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Download Syllabus</button>

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:#081e5b;font-size:22px;">Download PDF Syllbus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="POST">
           <div class="mb-3">
  <!--<label for="name" class="form-label">Name</label>--->
  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
</div>
<div class="mb-3">
  <!--<label for="exampleFormControlInput1" class="form-label">Email</label>-->
  <input type="email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <!--<label for="contact" class="form-label">Contact Number</label>-->
  <input type="number" name="Contact" class="form-control" id="contact" placeholder="9898989898">
</div>
<div class="mb-3">
  <!--<label for="exampleFormControlTextarea1" class="form-label">Message</label>-->
  <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
</div>
<div class="col-auto">
    <button type="submit" name="submitbtn" id="submitbtn" class="btn btn-primary mb-3 download-btn" >Download Now</button>
  </div>
       </form>
      </div>
    </div>
  </div>
</div>
<style>
    .modal-header{
        border-bottom:0px;
    }
    .modal-content,.form-control{
        border-radius:0px;
    }
    input::placeholder,textarea::placeholder {
    font-size: 16px;
    color: #333333!important;
}
.download-btn{
    background: rgb(226, 20, 22);
    color: rgb(255, 255, 255);
    margin-top: 15px;
    border: 0px;
    padding: 13px 23px;
    border-radius: 50px;
}
.download-btn:hover{
    background-color:#ca2b2b;
    color:#ffffff;
}
</style>
