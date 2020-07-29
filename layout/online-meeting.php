<section class="online-meeting">
    <button class="btn botFixedBtn" id="online_meeting" type="button" aria-label="online_meeting" data-toggle="collapse" href="#online_meeting_pop">
        <i class="fa fa-chevron-up"></i>
    </button>
    <div class="collapse popUpBottom" id="online_meeting_pop">
        <div class="card card-body">
            <button type="button" class="close survey-close" data-toggle="collapse" href="#online_meeting_pop" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-chevron-down"></i></span>
            </button>
            <h5 class="card-title text-center"><b>SET UP AN <br> ONLINE MEETING</b></h5>
            <hr>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="clientName">Name</label>
                    <input type="text" class="form-control" name="clientName" id="clientName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="clientEmail">Email</label>
                    <input type="email" class="form-control" name="clientEmail" required id="clientEmail" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="clientDate">Date</label>
                    <input type="date" class="form-control" name="clientDate" id="clientDate" placeholder="Enter your Date">
                </div>
                <div class="form-group">
                    <label for="clientTime">Time</label>
                    <select class="form-control" name="clientTime" id="clientTime" placeholder="Select your time">
                        <option value="09.00">09.00</option>
                        <option value="10.00">10.00</option>
                        <option value="11.00">11.00</option>
                        <option value="12.00">12.00</option>
                        <option value="13.00">13.00</option>
                        <option value="14.00">14.00</option>
                        <option value="15.00">15.00</option>
                        <option value="16.00">16.00</option>
                        <option value="17.00">17.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="clientMessage">Message</label>
                    <textarea class="form-control" name="clientMessage" id="clientMessage" rows="5" placeholder="Enter Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn--green" id="meet-online-btn">Send</button>
            </form>
        </div>
    </div>    
</section>