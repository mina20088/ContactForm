<div class="col-sm-12 col-md-5 col-lg-6">
    <form action="Process/ContactMeProcess.php" method="post">
        <h1 class="FormHeader">Please Fill The Form For Contact:</h1>
        <div class="form-group">
            <label for="Full Name">Full Name</label>
            <input type="text" class="form-control" name="FullName" placeholder="Full Name" id="Full Name">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Email" placeholder="Email" id="Email">
        </div>
        <div class="input-group">
            <label for="telephone">Telephone</label>
            <br>
            <input id="hidden" type="hidden" name="phone-full">
            <input type="text" class="form-control" name="telephone" placeholder="Telephone" id="telephone">
        </div>
        <div class="form-group">
            <label for="messagse">Message</label>
            <br>
            <textarea type="text" class="form-control" name="message" placeholder="Enter Your Messsage..." id="messagse"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
            <input type="submit" class="btn btn-danger" name="Cancel" value="Cancel">
        </div>
    </form>
</div>