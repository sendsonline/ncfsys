<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="marginTop100">
            <div class="mission-info-wrapper">
                <div class="mission-info-header">
                    <h3>MISSION INFORMATION</h3>
                </div>
                <div class="mission-info-body">
                    <form method="post" action="<?= URL ?>missions/addInfo">
                        <label>Date of Mission </label>
                        <input type="date" name="missionDate" class="form-control">
                        <label>Place of Mission</label>
                        <input type="text" name="missionPlace" class="form-control">
                        <label>Other Information</label>
                        <input type="text" name="missionOther" class="form-control"><br>
                        <p align="right"><button type="submit" class="btn btn-primary">Save Information and Proceed</button></p>
                    </form>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>